@extends('layouts.app')
@section('title', 'グロリアの扉コレクション')
@section('class', 'entrance-list pb-5')
@section('content')
@include('layouts.header')
 @if (session('flash_message'))
    <div class="alert alert-success m-0">
        {{ session('flash_message') }}
    </div>
@endif

{!! Form::open(['route' => ['home.index'], 'method' => 'get', 'class' => 'search-form']) !!}
{{ csrf_field() }}
<input type="hidden" name="lat" value="">
<input type="hidden" name="lng" value="">
<div class="searchbox">
    <div class="nav-tabs-wrap">
        <div class="nav nav-tabs m-2 category-list">
            @foreach ($categoryList as $category)
                <input type="checkbox" name="categoryIds[]" id="ct-{{ $category->id }}" value="{{ $category->id }}" {{ is_array($categoryIds) && in_array($category->id, $categoryIds) ? 'checked="checked"' : '' }}>
                <label for="ct-{{ $category->id }}" class="mr-2"><img src="{{ asset('/image/category/' . $category->img_url) }}" alt=""></label>
            @endforeach
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <ul class="searchbox-inner">
                <li class="select-range">
                    <div class="button-radio">
                        <span class="mx-2 lead"><i class="fas fa-chevron-left"></i></span>
                        <span class="mx-2 lead"><i class="fas fa-map-marker-alt"></i></span>
                        <input id="non" type="radio" name="range" value="0" {{ empty($range) ? 'checked="checked"' : '' }}>
                        <label for="non">指定しない</label>
                        <input id="1km" type="radio" name="range" value="1" {{ $range == 1 ? 'checked="checked"' : '' }}>
                        <label for="1km">1km圏内</label>
                        <input id="100m" type="radio"name="range" value="2" {{ $range == 2 ? 'checked="checked"' : '' }}>
                        <label for="100m" class="ml-2" >100m圏内</label>
                    </div>
                </li>
                <li class="py-1">
                    <ul>
                        <div class="row">
                            <li class="mx-2 lead"><i class="fas fa-chevron-left"></i></li>
                            <li class="mx-2 lead"><i class="fas fa-search"></i></li>
                            <li class="keyword-box">
                                <input type="text" name="keyword" value="{{ $keyword }}" class="keyword form-control align-middle" placeholder="目的地か住所を入力してください">
                            </li>
                        </div>
                    </ul>
                </li>
                <li class="py-2">
                    <div class="row">
                        <div class="col-10 offset-1 pb-2">
                            <button class="btn btn-success btn btn-block">入り口写真を絞り込み</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div><!-- searchbox -->
{!! Form::close() !!}
@if(!$entrances->isEmpty())
    <div class="card gallery">
        <div class="infinite-scroll">
            <ul class="row">
                @foreach ($entrances as $entrance)
                    <li class="col-6 {{ $entrance->status == config('const.ENTRANCE_CLOSED') ? 'closed' : '' }}"><a href="{{ action('EntrancesController@show', $entrance->id) }}"><img src="{{ asset('/storage/img/500/500x500_' . $entrance->img_url) }}" alt="" class="img-fluid"><p><span class="text-white">{{ $entrance->name }}</span></p></a></li>
                @endforeach
            </ul>
            {{ $entrances->appends(['keyword'=>$keyword, 'categoryIds'=>$categoryIds, 'range' => $range])->render() }}
        </div>
    </div>
@else
    <div class="card mt-4 my-5">
        <div class="col-12">
            <img class="img-fluid" src="{{ asset('image/case_empty.png') }}" alt="">
        </div>
        <p class="text-center my-4 pb-4">目的地の写真が見つからなかったみたいデス。<br>
            ぜひあなたが1人目の投稿者になってくだサイ!</p>
    </div>
@endif
@include('layouts.footer')
@endsection
@push('js')
    <script>
        $(function() {
            $('.alert-success').fadeOut(3000);
            $('ul.pagination').hide();
            $('.infinite-scroll').jscroll({
                autoTrigger: true,
                debug: true,
                loadingHtml: '<div class="col-12 text-center"><img class="mx-auto" src="/image/loading.gif" alt="Loading..." /></div>',
                padding: 0,
                nextSelector: '.pagination li.active + li a',
                contentSelector: '.infinite-scroll',
                callback: function() {
                    $('ul.pagination').remove();
                }
            });

            if(navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    function(position) {
                        $('.select-range').show();
                        $('input[name="lat"]').val(position.coords.latitude);
                        $('input[name="lng"]').val(position.coords.longitude);
                    },
                    function(err) {
                    },
                    {
                        enableHighAccuracy:true,
                        timeout:6000,
                        maximumAge:600000
                    }
                );
            }
        });
    </script>
@endpush