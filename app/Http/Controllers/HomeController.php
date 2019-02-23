<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Entrance;
use Illuminate\Support\Facades\Input;

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

               $categoryList = DB::table('categories')->orderBy('id', 'asc')->get();

        $entrances = DB::table('entrances')->orderBy('id', 'desc')->get();
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
        $entrances = $query->paginate(100);

       return view('home.index', compact('categoryList', 'entrances', 'keyword', 'categoryIds'));
    }
    public function policy()
    {
        return view('home.policy');
    }
}
