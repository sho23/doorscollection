<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\LeavingReason;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();
        if (strval($user->id) !== env('AUTH_USER', null)) {
            return redirect()->route('home.index')->with('faild', '権限がありません');
        }

        $query = User::query();
        $users = $query->select('users.*')
                ->orderBy('id', 'desc')->paginate(50);
        return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function leave()
    {
        $user = \Auth::user();
        return view('users.leave', ['user' => $user]);
    }

    public function leavingStore(Request $request)
    {
        $user = \Auth::user();
        $this->validate($request, [
            'reason' => 'required',
        ]);
        $user = \Auth::user();
        $leavingReason = new LeavingReason;
        $leavingReason->reason = $request->reason;
        $leavingReason->user_id = $user->id;
        $leavingReason->other = $request->other;
        $leavingReason->save();

        $user = User::findOrFail($user->id);
        $user->status = config('const.LEAVING');
        $user->save();
        Auth::logout();
        return redirect()->route('home.index')->with('faild', '権限がありません');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function updateVerify($id)
    {
        $user = \Auth::user();
        if (strval($user->id) !== env('AUTH_USER', null)) {
            return redirect()->route('home.index')->with('faild', '権限がありません');
        }

        $user = User::find($id);
        $user->email_verified_at = date("Y-m-d H:i:s");
        $user->save();
        return redirect()->route('users.index')->with('succeed', '認証しました');
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
        $user = User::find($id);
        $user->status = $request->status;
        $user->save();
        return redirect()->route('users.index')->with('succeed', '変更しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
