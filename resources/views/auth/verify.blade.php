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
        </div>
    </div>
</div>
@endsection
