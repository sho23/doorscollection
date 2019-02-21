@extends('layouts.app')
@section('title', 'グロリアの扉コレクション')
@section('class', 'entrance-list')
@section('content')
<div class="fixed-top">
    <header class="px-1">
        <ul class="row">
            <li class="col-2 pl-4 bars-menu"><a href="#"><i class="fas fa-bars text-light"></i></a></li>
            <li class="col-5 header-logo"><a href="/"><img src="{{ asset('image/logo_small.png') }}" alt="" hight="27px" width="107px"></a></li>
            <li class="col-5 text-right pr-4">
                <a href="#"><span class="p-2 badge badge-pill badge-warning"><i class="fas fa-bell text-light"></i></span></a>
                <a href="{{ action('EntrancesController@mypage') }}"><span class="ml-2 p-2 badge badge-pill badge-warning"><i class="fas fa-user-alt text-light"></i></span></a>
            </li>

        </ul>
    </header>
</div>
<div class="searchbox">
    <div class="nav-tabs-wrap">
        <ul class="nav nav-tabs m-2">
            @foreach ($categoryList as $category)
                <li class="mr-2"><a href="#"><img src="{{ asset('/image/category/' . $category->img_url) }}" alt="" width="125"></a></li>
            @endforeach
        </ul>
    </div>
    <div class="card">
        <div class="card-header">
            <ul class="list-group list-group-flush">
                <li class="list-group-item bg-gray select-range">
                    <div class="button-radio">
                        <span class="list-inline-item mx-2 lead"><i class="fas fa-map-marker-alt"></i></span>
                        <input id="50M" type="radio"name="range" value="50M" checked>
                        <label for="50M" class="ml-2" >50M圏内</label>
                        <input id="100M" type="radio" name="range" value="100M">
                        <label for="100M">100M圏内</label>
                        <input id="non" type="radio" name="range" value="non">
                        <label for="non">指定しない</label>
                    </div>
                </li>
                <li class="list-group-item py-1">
                    <ul class="list-inline">
                        <form>
                            <div class="row">
                                <li class="list-inline-item mx-2 lead"><i class="fas fa-search"></i></li>
                                <li class="col-10 list-inline-item">
                                    <input type="text" class="form-control align-middle" placeholder="目的地か住所を入力してください">
                                </li>
                            </div>
                        </form>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div><!-- searchbox -->
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
    </script>
@endpush