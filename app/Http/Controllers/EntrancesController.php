<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Entrance;

class EntrancesController extends Controller
{
    public function index()
    {
        return view('entrances.index');
    }

    public function mypage()
    {
        $entrances = DB::table('entrances')->where('user_id', 1)->orderBy('id', 'asc')->get(); #todo:ユーザID
        return view('entrances.mypage', compact('entrances'));
    }

    public function show()
    {
        return view('entrances.show');
    }

    public function create()
    {
        return view('entrances.create');
    }

    public function createDesc(Request $request)
    {
        $filename = $request->filename;
        $suggestList = [];
        $categoryList = [];

        $img = url("storage/img/" . $filename);
        $exif = exif_read_data($img);

        if (isset($exif['GPSLatitudeRef']) && isset($exif['GPSLatitude'])) {
            $lat = $this->get_10_from_60_exif($exif['GPSLatitudeRef'], $exif['GPSLatitude']);
            $lng = $this->get_10_from_60_exif($exif['GPSLongitudeRef'], $exif['GPSLongitude']);
            $suggest = $this->suggestPlaces($lat . "," . $lng);
            $suggestList = $suggest[0];
            $categoryList = $suggest[1];
        }
        return view('entrances.create_desc', compact('filename', 'suggestList', 'categoryList'));
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
            $filename = $request->file->store('public/img');
            $filename = $request->file->store('', ['disk' => 'public']);
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
        if (true) {
            $nameList = explode('-', $request->name);
            $name = $nameList[1];
        }
        var_dump($request->name);
        var_dump($request->category);
        var_dump($request->address);
        var_dump($request->detail);
        exit();
        // $this->validate($request, [
        //     'name' => 'required|max:20',
        //     'category' => 'required',
        // ]);
        // $post = new Post;
        // $user = \Auth::user();
        // $post->user_id = $user->id;
        // $post->title = $request->title;
        // $post->detail = $request->detail;
        // $post->save();
        // return redirect()->route('questions.create', ['post_id' => $post->id]);
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
}
