@extends('layouts.app')
@section('title', 'AB診断')
@section('content')
<div id="wrap">
    <div class="container">
        <div class="card mb-4 text-center" style="width: 100%;">
            <div class="card-body">
                <h3 class="card-title">入り口登録</h5>
                <h5 class="card-text">お店の入り口写真を登録しよう！</h5>
            </div>
        </div>
        {!! Form::open(['route' => ['entrances.store'], 'method' => 'post', 'files' => true]) !!}
            <div class="row">
                <div class="card mb-2 mx-2" style="width: 100%;">
					<div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group">
                            {!! Form::label('file', '画像アップロード', ['class' => 'control-label']) !!}
                            {!! Form::file('file') !!}
                        </div>
                        <div class="card-body text-center">
                            {!! Form::submit('次へ', ['class' => 'btn btn-primary']) !!}
                        </div>
					</div>
				</div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection