<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
use Storage;
use App\Entrance;
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
        $this->middleware('auth')->except(['show']);
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
        return view('entrances.show', compact('entrance', 'prevPage', 'user'));
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
            'lat' =>  'required',
            'lng' =>  'required',
        ]);
        $entrance = new Entrance;
        $user = \Auth::user();
        $entrance->user_id = $user->id;
        $entrance->name = $request->name;
        $entrance->category_id = $request->category;
        $entrance->address = $request->address;
        $entrance->detail = $request->detail;
        $entrance->img_url = $request->img_url;
        $entrance->lat = $request->lat;
        $entrance->lng = $request->lng;
        $entrance->save();
        return redirect()->route('entrances.mypage');
    }


    private function get_10_from_60_exif($ref, $gps) {
        $data = $this->convert_float($gps[0]) + ($this->convert_float($gps[1])/60) + ($this->convert_float($gps[2])/3600);
        return ($ref=='S' || $ref=='W') ? ($data * -1) : $data;
    }

    private function convert_float($str) {
        $val = explode("/", $str);
        return (isset($val[1])) ? $val[0] / $val[1] : $str;
    }

    private function suggestPlaces($latlng) {
        $suggestList = [];
        $categoryList = [];
        $key = 'AIzaSyAyd89-4iN5ZVlDG1AlWvUDmEHW37UAxgk';
        $json = "https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=" . $latlng . "&radius=50&language=ja&key=" . $key;
        $addr = file_get_contents($json);
        $arr = json_decode($addr);
        foreach ($arr->results as $key => $data) {
            if (isset($data->name)) {
                $name = $data->name;
            }
            if (isset($data->types)) {
                $category = $data->types[0];
            }
            if (isset($data->vicinity)) {
                $address = $data->vicinity;
            }
            $suggestList[$key][] = $name;
            if (!in_array($category, $categoryList)) {
                $categoryList[] = $category;
            }
            $suggestList[$key][] = $address;
            $suggestList[$key][] = $category;
        }
        return array($suggestList, $categoryList);
    }

    function uaSmt()
    {
        $ua = $_SERVER['HTTP_USER_AGENT'];
        $uaList = array('iPhone','iPad','iPod','Android');
        foreach ($uaList as $uaSp) {
            if (strpos($ua, $uaSp) !== false) {
                return true;
            }
        } return false;
    }
}
