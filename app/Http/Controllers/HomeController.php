<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Entrance;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'policy']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keyword = Input::get('keyword');
        $categoryIds = Input::get('categoryIds');
        $range = Input::get('range');
        $gpsLat = Input::get('lat');
        $gpsLng = Input::get('lng');

        $categoryList = DB::table('categories')->orderBy('id', 'asc')->get();

        $query = Entrance::query();

        if(!empty($keyword)){
            $query->where(function($subQuery) use ($keyword) {
                $subQuery->where('name','like','%'.$keyword.'%');
                $subQuery->orWhere('address', 'like', '%'.$keyword.'%');
            });
        }
        if(!empty($categoryIds)){
            $query->whereIn('category_id', $categoryIds);
        }
        if (!empty($range) && in_array($range, [1, 2])) {
            $query->where('lng', '>=', $gpsLng - 0.0090133);
            $query->where('lng', '<=', $gpsLng + 0.0090133);
            $query->where('lat', '>=', $gpsLat - 0.0109664);
            $query->where('lat', '<=', $gpsLat + 0.0109664);
            if ($range == 2) { //100M検索の場合
                $entranceList = $query->get();
                $distanceList = [];
                foreach ($entranceList as $entrance) {
                    $distance = $this->distance($gpsLat, $gpsLng, $entrance->lat, $entrance->lng);
                    if ($distance < 150) {
                        $distanceList[] = $entrance->id;
                    }
                }
                $query->whereIn('id', $distanceList);
            }
        }
        $entrances = $query->orderBy('id', 'desc')->paginate(20);

       return view('home.index', compact('categoryList', 'entrances', 'keyword', 'categoryIds', 'range'));
    }
    public function policy()
    {
        return view('home.policy');
    }

    private function distance($startLat, $startLng, $endLat, $endLng)
    {
        $latDist = ($startLat - $endLat);if($latDist<0)$latDist=$latDist*-1;
        $lngDist = ($startLng - $endLng);if($lngDist<0)$lngDist=$lngDist*-1;

        //緯度位置における経度量を計算　地球は丸い
        $m_lng = 30.9221438 * cos($startLat / 180 * pi());
        if($m_lng<0)$m_lng=$m_lng*-1;

        //移動量を計算
        $distance = (int)(sqrt(pow(abs($latDist / 0.00027778 * 30.9221438), 2) + pow(abs($lngDist / 0.00027778 * $m_lng), 2)));
        return $distance;
    }
}
