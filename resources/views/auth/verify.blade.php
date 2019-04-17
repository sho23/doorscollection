@extends('layouts.app')
@section('title', 'グロリアの扉コレクション')
@section('class', 'single-page')
@section('content')
@include('layouts.header')
<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border-warning">
                <div class="card-header bg-warning text-white">メールの認証</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            新しい認証メールを発行しました。メールをご確認ください。
                        </div>
                    @endif

                    認証メールを送信しました。ご確認の上ログインしてください。<br>
                    <a href="{{ route('verification.resend') }}">認証メールを再送する場合はこちら</a>
                </div>
            </div>
            <div class="m-4 text-center">
                <a href="{{ action('HomeController@tutorial') }}" class="btn btn-success">使い方へ進む →</a>
            </div>
        </div>
    </div>
</div>
@endsection
