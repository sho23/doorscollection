@extends('layouts.app')
@section('title', 'グロリアの扉コレクション')
@section('parentClass', 'fixed-page fixed-height')
@section('class', 'entrance-list content')
@section('content')
@include('layouts.header')
<div class="card bg-gray avatar-area py-2">
    <div class="row my-2">
        <div class="col-4 text-center"><img src="{{ asset('image/ic_gloria.png') }}" class="rounded-circle" alt="" hegith="80px" width="80px"></div>
        <div class="col-8 balloon-note">
            <p class="p-2 bg-white"><small>{{ $user->name }}が迷った目的地の入り口写真もぜひ投稿してみてくだサイ！その写真で誰かが救えルかも♪</small></p>
        </div>
    </div>
</div>
<div class="card gallery">
    <ul class="row">
        @if ($isUaSmt)
            <li class='col-4'><a href='#' class='upload_button'><img src='https://placehold.jp/100/757575/ffffff/300x300.png?text=%2B' alt='' class='img-fluid'></a></li>
        @endif
        @if (!$entranceFirstLine->isEmpty())
            @foreach ($entranceFirstLine as $entranceData)
                <li class="col-4"><a href="{{ action('EntrancesController@show', $entranceData->id) }}"><img src="{{ asset('/storage/img/150/150x150_' . $entranceData->img_url) }}" alt="" class="img-fluid"></a></li>
            @endforeach
        @endif
    </ul>
    @if (!$entrances->isEmpty())
    <div class="infinite-scroll">
        <ul class="row">
            @foreach ($entrances as $entrance)
                    <li class="col-4"><a href="{{ action('EntrancesController@show', $entrance->id) }}"><img src="{{ asset('/storage/img/150/150x150_' . $entrance->img_url) }}" alt="" class="img-fluid"></a></li>
            @endforeach
        </ul>
        {{ $entrances->links() }}
    </div>
    @endif
</div>
<div class="btn-group d-flex fixed-bottom bg-white">
    <p class="mx-auto my-2 copywriter">© 2019 JOKERS LLC.</p>
    <a href="{{ action('HomeController@index') }}" class="btn btn-outline-light w-100 text-warning py-3 active"><i class="fas fa-search mr-3"></i>SEARCH</a>
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
        });
    </script>
@endpush
