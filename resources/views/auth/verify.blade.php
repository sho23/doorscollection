@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">メールの認証</div>

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
