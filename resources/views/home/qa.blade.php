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
<div class="card usage pb-4 mb-5">
    <div class="row">
        <div class="m-4">
            <h5>Q&A</h5>
            <p>合同会社JOKERS（以下「当社」といいます。）は、当社の提供するサービス（以下「本サービス」といいます。）における、ユーザーについての個人情報を含む利用者情報の取扱いについて、以下のとおりプライバシーポリシー（以下「本ポリシー」といいます。）を定めます。</p>
        </div>
        <div class="mx-4">
            <h6>【目次】</h6>
            <ul>
                <li><a href="#section1">目次1</a></li>
                <li><a href="#1">目次1</a></li>
                <li><a href="#1">目次1</a></li>
                <li><a href="#1">目次1</a></li>
                <li><a href="#1">目次1</a></li>
            </ul>
        </div>
        <hr>
        <div id="section1" class="mx-4">
            <h6>Q. ○○○○○○○</h6>
            <p>A. 文言が入ります。文言が入ります。文言が入ります。文言が入ります。文言が入ります。文言が入ります。文言が入ります。</p>
        </div>
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