@extends('layouts.app')
@section('title', 'グロリアの扉コレクション')
@section('class', 'single-page')
@section('content')
@include('layouts.header')
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
