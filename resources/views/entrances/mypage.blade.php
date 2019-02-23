@extends('layouts.app')
@section('title', 'グロリアの扉コレクション')
@section('parentClass', 'fixed-page fixed-height')
@section('class', 'entrance-list content')
@section('content')
<div class="fixed-top">
    <header class="px-1">
        <ul class="row">
            <li class="col-2 pl-4 bars-menu"><a href="#sidr" id="simple-menu"><i class="fas fa-bars text-light"></i></a></li>
            <li class="col-5 header-logo"><a href="{{ action('HomeController@index') }}"><img src="{{ asset('image/logo_small.png') }}" alt="" hight="27px" width="107px"></a></li>
            <li class="col-5 text-right pr-4">
                <a href="#"><span class="p-2 badge badge-pill badge-warning"><i class="fas fa-bell text-light"></i></span></a>
                <a href="{{ action('EntrancesController@mypage') }}"><span class="ml-2 p-2 badge badge-pill badge-warning"><i class="fas fa-user-alt text-light"></i></span></a>
            </li>

        </ul>
    </header>
</div>
<div id="sidr">
    <ul>
        <li class="text-center p-2"><img src="{{ asset('image/ic_gloria.png') }}" class="rounded-circle" alt="" width="100"></li>
        <li class="text-center"><a href="{{ action('HomeController@index') }}">ホーム</a></li>
        <li class="text-center"><a href="#">お知らせ</a></li>
        <li class="text-center"><a href="{{ action('HomeController@index') }}">プライバシーポリシー</a></li>
        <li class="text-center"><a href="http://team-jokers.tokyo" target="_blank">運営会社</a></li>
        @guest
            <li class="text-center"><a href="{{ route('login') }}" class="text-danger"><strong>ログイン</strong></a></li>
        @else
            <li class="text-center"><a href="{{ action('EntrancesController@mypage') }}">マイページ</a></li>
            <li class="text-center"><a href="{{ route('logout') }}" class="text-danger"><strong>ログアウト</strong></a></li>
        @endguest
    </ul>
</div>
<div class="card bg-gray avatar-area py-2">
    <div class="row my-2">
        <div class="col-4 text-center"><img src="{{ asset('image/ic_gloria.png') }}" class="rounded-circle" alt="" hegith="80px" width="80px"></div>
        <div class="col-8 balloon-note">
            <p class="p-2 bg-white"><small>Kaiのよく行くお店の入り口写真を投稿してくだサイ。アメイジングな写真を期待しています!!</small></p>
        </div>
    </div>
</div>
<div class="card gallery">
    <ul class="row">
        <li class="col-4"><a href="#" class="upload_button"><img src="https://placehold.jp/50/757575/ffffff/100x100.png?text=%2B" alt="" class="img-fluid"></a></li>
        @foreach ($entrances as $entrance)
            <li class="col-4"><a href="{{ action('EntrancesController@show', $entrance->id) }}"><img src="{{ asset('/storage/img/150/150x150_' . $entrance->img_url) }}" alt="" class="img-fluid"></a></li>
        @endforeach
    </ul>
</div>
<div class="btn-group d-flex fixed-bottom bg-white">
    <a href="{{ action('HomeController@index') }}" class="btn btn-outline-light w-100 text-warning py-3"><i class="fas fa-search mr-3"></i>SEARCH</a>
    <a href="#" class="upload_button btn btn-outline-light w-100 text-danger py-3"><i class="fas fa-camera mr-3"></i>POST</a>
</div>
{!! Form::open(['route' => ['entrances.store'], 'method' => 'post', 'files' => true, 'class' => 'entrance-form']) !!}
{!! Form::file('file', ['id' => 'file']) !!}
{!! Form::close() !!}
@endsection
@push('js')
    <script>
        $('.upload_button').click(function(){
            $('#file').click();
            return false;
        });
       $('#file').change(function() {
            $('.entrance-form').submit();
        });
        $(function() {
            $('#simple-menu').sidr();
        });
    </script>
@endpush
