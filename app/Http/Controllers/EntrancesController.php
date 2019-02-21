<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
use App\Entrance;

class EntrancesController extends Controller
{
    public function index()
    {
        return view('entrances.index');
    }

    public function mypage()
    {
        $entrances = DB::table('entrances')->where('user_id', 1)->orderBy('id', 'desc')->get(); #todo:ユーザID
        return view('entrances.mypage', compact('entrances'));
    }

    public function show($id)
    {
        $entrance = DB::table('entrances')->where('id', $id)->where('user_id', 1)->first();#todo:ユーザID
        return view('entrances.show', compact('entrance'));
    }

    public function createDesc(Request $request)
    {
        $filename = $request->filename;
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
            $img = Image::make('storage/img/' . $filename);
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
        $entrance = new Entrance;
        // $user = \Auth::user();
        $entrance->user_id = 1; #todo
        $entrance->name = $request->name;
        $entrance->category_id = $request->category;
        $entrance->address = $request->address;
        $entrance->detail = $request->detail;
        $entrance->img_url = $request->img_url;
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
}
