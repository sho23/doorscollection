@extends('layouts.app')
@section('title', 'グロリアの扉コレクション')
@section('class', 'entrance-list')
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
<div id="sidr">
    <ul>
        <li class="text-center p-2"><img src="{{ asset('image/ic_gloria.png') }}" class="rounded-circle" alt="" width="100"></li>
        <li class="text-center"><a href="{{ action('HomeController@index') }}">ホーム</a></li>
        <li class="text-center"><a href="#">お知らせ</a></li>
        <li class="text-center"><a href="#">プライバシーポリシー</a></li>
        <li class="text-center"><a href="#">運営会社</a></li>
        @guest
            <li class="text-center"><a href="{{ route('login') }}" class="text-danger"><strong>ログイン</strong></a></li>
        @else
            <li class="text-center"><a href="{{ action('EntrancesController@mypage') }}">マイページ</a></li>
            <li class="text-center"><a href="{{ route('logout') }}" class="text-danger"><strong>ログアウト</strong></a></li>
        @endguest
    </ul>
</div>
{!! Form::open(['route' => ['home.index'], 'method' => 'get', 'class' => 'search-form']) !!}
{{ csrf_field() }}
<div class="searchbox">
    <div class="nav-tabs-wrap">
        <div class="nav nav-tabs m-2 category-list">
            @foreach ($categoryList as $category)
                <input type="checkbox" name="categoryIds[]" id="ct-{{ $category->id }}" value="{{ $category->id }}" {{ is_array($categoryIds) && in_array($category->id, $categoryIds) ? 'checked="checked"' : '' }}>
                <label for="ct-{{ $category->id }}" class="mr-2"><img src="{{ asset('/image/category/' . $category->img_url) }}" alt="" width="125"></label>
            @endforeach
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <ul class="list-group list-group-flush">
                    @if (false)
                    <li class="list-group-item bg-gray select-range">
                        <div class="button-radio">
                            <span class="list-inline-item mx-2 lead"><i class="fas fa-map-marker-alt"></i></span>
                            <input id="non" type="radio" name="range" value="non" checked>
                            <label for="non">指定しない</label>
                            <input id="50M" type="radio"name="range" value="50M">
                            <label for="50M" class="ml-2" >50M圏内</label>
                            <input id="100M" type="radio" name="range" value="100M">
                            <label for="100M">100M圏内</label>
                        </div>
                    </li>
                @endif
                <li class="list-group-item py-1">
                    <ul class="list-inline">
                        <div class="row">
                            <li class="list-inline-item mx-2 lead"><i class="fas fa-search"></i></li>
                            <li class="col-10 list-inline-item">
                                <input type="text" name="keyword" value="{{ $keyword }}" class="keyword form-control align-middle" placeholder="目的地か住所を入力してください">
                            </li>
                        </div>
                    </ul>
                </li>
                <li class="list-group-item py-1">
                    <ul class="list-inline">
                        <div class="row">
                            <li class="offset-10 list-inline-item">
                                <button class="btn btn-info ">検索</button>
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div><!-- searchbox -->
{!! Form::close() !!}
<div class="card gallery">
    <ul class="row">
        @foreach ($entrances as $entrance)
            <li class="col-6"><a href="{{ action('EntrancesController@show', $entrance->id) }}"><img src="{{ asset('/storage/img/150/150x150_' . $entrance->img_url) }}" alt="" class="img-fluid"><p><span class="text-white">{{ $entrance->name }}</span></p></a></li>
        @endforeach
    </ul>
</div>
@if (false)
<div class="card usage pb-4 mb-5">
	<div class="row">
		<dev class="col-3 offset-1">
			<img src="{{ asset('image/arrow.png') }}" alt="">
		</dev>
		<dev class="col-8"></dev>
		<div class="col-3 offset-1"><img src="{{ asset('image/ic_gloria.png') }}" class="rounded-circle" alt=""></div>
		<dev class="col-8 mt-3">
			<p class="text-muted">
				行きたい場所の外観を検索できます。<br>
				みなサンの投稿を見てみまショウ。
			</p>
		</dev>
	</div>
</div>
@endif
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
        $('.upload_button').click(function() {
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