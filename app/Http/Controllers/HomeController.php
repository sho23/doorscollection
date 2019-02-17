<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Category;

class HomeController extends Controller
{
    public function index() 
    {
        $categoryList = DB::table('categories')->orderBy('id', 'asc')->get();
        return view('home.index', compact('categoryList'));
    }
}
