@extends('layouts.app')
@section('title', 'グロリアの扉コレクション')
@section('class', 'entrance-list')
@section('content')
@include('layouts.header')
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