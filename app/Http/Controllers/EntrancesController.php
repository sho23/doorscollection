<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
use Storage;
use App\Entrance;
use App\Claim;
use App\Like;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\Auth;

class EntrancesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['show', 'claim', 'claimcomplete', 'storeClaim']);
    }

    public function index()
    {
        $user = \Auth::user();
        if (strval($user->id) !== env('AUTH_USER', null)) {
            return redirect()->route('home.index')->with('faild', '権限がありません');
        }

        $query = Entrance::query();
        $entrances = $query->select('entrances.*', 'users.name as user_name')
                ->join('users', 'users.id', '=', 'entrances.user_id')->withTrashed()->orderBy('id', 'desc')->paginate(50);
        return view('entrances.index', ['entrances' => $entrances]);
    }

    public function mypage()
    {
        $user = Auth::user();
        $query = Entrance::query();
        $query->where('user_id', $user->id)->orderBy('id', 'desc');
        $entranceFirstLine = $query->take(2)->get();
        if ($query->exists()) {
            $ids = $query->take(2)->pluck('id');
            $query->whereNotIn('id', $ids);
        }
        $entrances = $query->paginate(18);
        $isUaSmt = $this->uaSmt();
        return view('entrances.mypage', compact('user', 'entrances', 'entranceFirstLine', 'isUaSmt'));
    }

    public function show($id)
    {
        $user = Auth::user();
        $entrance = DB::table('entrances')->where('id', $id)->first();
        $prevPage = url()->previous();
        $prevPath = parse_url($prevPage);
        if (in_array("path", $prevPath) && $prevPath['path'] == '/entrances/mypage') {
            $prevUrl = url('/entrances/mypage');
        } else {
            $prevUrl = url('home');
        }
        $liked = false;
        if($user != null && $user->likes()->where('entrance_id', $entrance->id)->first() != null) {
            $liked = true;
        }

        return view('entrances.show', compact('entrance', 'prevUrl', 'user', 'liked'));
    }

    public function claimcomplete()
    {
        return view('entrances.claimcomplete');
    }

    public function edit($id)
    {
        if (!$this->uaSmt()) {
            return redirect('home');
        }
        $user = Auth::user();
        $entrance = DB::table('entrances')->where('id', $id)->first();
        $categoryList = DB::table('categories')->orderBy('id', 'asc')->get();
        return view('entrances.edit', compact('entrance', 'user', 'categoryList'));
    }

    public function createDesc(Request $request)
    {
        $filename = $request->filename;
        if (!$this->uaSmt() || is_null($filename)) {
            return redirect('home');
        }
        $categoryList = DB::table('categories')->orderBy('id', 'asc')->get();
        return view('entrances.create_desc', compact('filename', 'categoryList'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
        'file' => [
                'required',
                'file',
                'image',
                'mimes:jpeg,png,jpg',
                'dimensions:min_width=120,min_height=120',
            ]
        ]);

        if ($request->file('file')->isValid([])) {
            $filename = $request->file->store('', ['disk' => 'public']);
            $img = Image::make(Storage::disk('public')->url($filename))->orientate();
            if ($img->height() > $img->width()) {
                $height = 500;
                $width = null;
            } else {
                $height = null;
                $width = 500;
            }
            $img->resize($height, $width, function ($constraint) {
              $constraint->aspectRatio();
            });

            $img->crop(500, 500);
            $img->save('storage/img/500/500x500_' . $filename);
            $img->resize(150, 150);
            $img->save('storage/img/150/150x150_' . $filename);
            return redirect()->route('entrances.createDesc', ['filename' => $filename]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['file' => '画像がアップロードされていないか不正なデータです。']);
        }
    }

    public function storeDesc(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'category' => 'required',
            'address' =>  'required',
            'detail' =>  'required',
        ]);
        $lat = $request->lat;
        $lng = $request->lng;
        if (empty($lat)) {
            $json = $this->callAPI($request->address);
            $lat = $json->lat;
            $lng = $json->lng;
        }
        $entrance = new Entrance;
        $user = \Auth::user();
        $entrance->user_id = $user->id;
        $entrance->name = $request->name;
        $entrance->category_id = $request->category;
        $entrance->address = $request->address;
        $entrance->detail = $request->detail;
        $entrance->img_url = $request->img_url;
        $entrance->status = config('const.ENTRANCE_SHOW');
        $entrance->lat = $lat;
        $entrance->lng = $lng;
        $openHours = $request->open_hours;
        if (!empty($openHours)) {
            $openHourList = explode(',', $openHours);
            $entrance->open_hour_1 = $openHourList[0];
            $entrance->open_hour_2 = $openHourList[1];
            $entrance->open_hour_3 = $openHourList[2];
            $entrance->open_hour_4 = $openHourList[3];
            $entrance->open_hour_5 = $openHourList[4];
            $entrance->open_hour_6 = $openHourList[5];
            $entrance->open_hour_7 = $openHourList[6];
        }
        $entrance->save();
        return redirect()->route('entrances.mypage');
    }

    public function update(Request $request, $id)
    {
        if (!$this->checkEntranceAuth($id)) {
            return redirect()->route('entrances.mypage')->with('faild', 'データの編集に失敗しました');
        }

        $this->validate($request, [
            'name' => 'required',
            'category' => 'required',
            'address' =>  'required',
            'detail' => 'required',
        ]);

        $entrance = Entrance::find($id);
        $entrance->name = $request->name;
        $entrance->category_id = $request->category;
        if ($entrance->address !== $request->address) {
            $json = $this->callAPI($request->address);
            $entrance->lat = $json->lat;
            $entrance->lng = $json->lng;
        }
        $entrance->address = $request->address;
        $entrance->detail = $request->detail;
        $entrance->save();
        return redirect()->route('entrances.show', $entrance->id)->with('succeed', '編集が完了しました');
    }

    public function updateStatus(Request $request, $id)
    {
        $user = \Auth::user();
        if (strval($user->id) !== env('AUTH_USER', null)) {
            return redirect()->route('home.index')->with('faild', '権限がありません');
        }
        $this->validate($request, [
            'status' => 'required',
        ]);
        $entrance = Entrance::find($id);
        $entrance->status = $request->status;
        $entrance->save();
        $postFrom = $request->post_from;
        $redirectRoute = 'entrances.index';
        if (isset($postFrom) && $postFrom == 'claim') {
            $redirectRoute = 'claims.index';
        }
        return redirect()->route($redirectRoute)->with('succeed', '変更しました');
    }

    public function claim($id)
    {
        $entrance = DB::table('entrances')->where('id', $id)->first();
        return view('entrances.claim', compact('entrance'));
    }

    public function storeClaim(Request $request, $id)
    {
        $user = \Auth::user();
        $this->validate($request, [
            'claim' => 'required',
        ]);
        $claim = new Claim;
        $claim->claim = $request->claim;
        if (isset($user)) {
            $claim->user_id = $user->id;
        }
        $claim->entrance_id = $id;
        $claim->other = $request->other;
        $claim->save();
        return redirect()->route('entrances.claimcomplete');
    }

    public function destroy($id)
    {
        $entrance = Entrance::findOrFail($id);
        $entrance->delete();
        return redirect()->route('entrances.mypage');
    }

    // private function get_10_from_60_exif($ref, $gps) {
    //     $data = $this->convert_float($gps[0]) + ($this->convert_float($gps[1])/60) + ($this->convert_float($gps[2])/3600);
    //     return ($ref=='S' || $ref=='W') ? ($data * -1) : $data;
    // }

    // private function convert_float($str) {
    //     $val = explode("/", $str);
    //     return (isset($val[1])) ? $val[0] / $val[1] : $str;
    // }

    // private function suggestPlaces($latlng) {
    //     $suggestList = [];
    //     $categoryList = [];
    //     $key = 'AIzaSyAyd89-4iN5ZVlDG1AlWvUDmEHW37UAxgk';
    //     $json = "https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=" . $latlng . "&radius=50&language=ja&key=" . $key;
    //     $addr = file_get_contents($json);
    //     $arr = json_decode($addr);
    //     foreach ($arr->results as $key => $data) {
    //         if (isset($data->name)) {
    //             $name = $data->name;
    //         }
    //         if (isset($data->types)) {
    //             $category = $data->types[0];
    //         }
    //         if (isset($data->vicinity)) {
    //             $address = $data->vicinity;
    //         }
    //         $suggestList[$key][] = $name;
    //         if (!in_array($category, $categoryList)) {
    //             $categoryList[] = $category;
    //         }
    //         $suggestList[$key][] = $address;
    //         $suggestList[$key][] = $category;
    //     }
    //     return array($suggestList, $categoryList);
    // }

    public function postLikeEntrance(Request $request)
    {
        $post_id = $request['postId'];
        $entrance = Entrance::find($post_id);
        if (!$entrance) {
            return null;
        }
        $user = Auth::user();
        $like = $user->likes()->where('entrance_id', $post_id)->first();
        if ($like) {
            return null;
        } else {
            $like = new Like();
            $entrance->like_count = $entrance->like_count + 1;
            $entrance->save();
        }
        $like->like = 1;
        $like->user_id = $user->id;
        $like->entrance_id = $entrance->id;

        $like->save();

        return $entrance->like_count;
   }

    public function postDisLikeEntrance(Request $request)
    {
        $post_id = $request['postId'];
        $entrance = Entrance::find($post_id);
        $user = Auth::user();
        $liked = Like::where('entrance_id', $post_id)->where('user_id', $user->id)->where('like', 1)->select('id')->first();
        if (!$liked) {
            return null;
        } else {
            $like = Like::find($liked->id);
            $like->delete();
            $entrance->like_count = $entrance->like_count - 1;
            $entrance->save();
        }
        return $entrance->like_count;
   }

    private function checkEntranceAuth($entranceId)
    {
        $user = \Auth::user();
        $post = DB::table('entrances')->where('id', $entranceId)->where('user_id', $user->id)->first();
        return !empty($entranceId);
    }

    private function uaSmt()
    {
        $ua = $_SERVER['HTTP_USER_AGENT'];
        $uaList = array('iPhone','iPad','iPod','Android');
        foreach ($uaList as $uaSp) {
            if (strpos($ua, $uaSp) !== false) {
                return true;
            }
        } return false;
    }

    private function callAPI(string $url)
    {
        $result = simplexml_load_file('https://www.geocoding.jp/api/?v=1.1&q=' . $url);
        return $result->coordinate;
    }
}
