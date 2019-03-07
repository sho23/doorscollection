<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Claim;

class ClaimsController extends Controller
{
    public function index()
    {
        $user = \Auth::user();
        if (strval($user->id) !== env('AUTH_USER', null)) {
            return redirect()->route('home.index')->with('faild', '権限がありません');
        }

        $query = Claim::query();
        $claims = $query->select('claims.*', 'users.name as user_name', 'entrances.name as entrance_name', 'entrances.status as entrance_status')
                ->leftJoin('users', 'users.id', '=', 'claims.user_id')
                ->join('entrances', 'entrances.id', '=', 'claims.entrance_id')
                ->orderBy('id', 'desc')->paginate(50);
        return view('claims.index', ['claims' => $claims]);
    }
}
