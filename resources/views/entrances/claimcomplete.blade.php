@extends('layouts.app')
@section('title', 'グロリアの扉コレクション')
@section('class', 'single-page')
@section('content')
<div class="fixed-top">
    <header class="px-1">
        <ul class="row">
            <li class="col-2 pl-4 bars-menu"><a href="#sidr" id="simple-menu"><i class="fas fa-bars text-light"></i></a></li>
            <li class="col-5 header-logo"><a href="/"><img src="{{ asset('image/logo_small.png') }}" alt="" hight="27px" width="107px"></a></li>
            <li class="col-5 text-right pr-4">
                <a href="#"><span class="p-2 badge badge-pill badge-warning"><i class="fas fa-bell text-light"></i></span></a>
                <a href="{{ action('EntrancesController@mypage') }}"><span class="ml-2 p-2 badge badge-pill badge-warning"><i class="fas fa-user-alt text-light"></i></span></a>
            </li>
        </ul>
    </header>
</div>
<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card auth-form">
                <div class="card-header">間違い報告完了</div>

                <div class="card-body">
                    <p>報告ありがとうございました。<br>
                    頂いた情報をもとに運営で調査いたします。</p>
                    <div class="text-center mt-2"><a href="{{ action('HomeController@index') }}" class="btn btn-success">ホーム</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
