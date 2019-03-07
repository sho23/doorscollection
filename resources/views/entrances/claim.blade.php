@extends('layouts.app')
@section('title', 'グロリアの扉コレクション')
@section('class', 'single-page')
@section('content')
@include('layouts.header')
<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card auth-form">
                <div class="card-header">間違いの報告</div>

                <div class="card-body">
                    {!! Form::open(['route' => ['entrances.storeClaim', $entrance->id], 'method'=>'post']) !!}
                        <div class="form-group row mt-2">
                            <label for="claim">間違い箇所</label>
                            <select id="claim" name="claim" class="form-control">
                                @for ($i = 0; $i <= 4; $i++)
                                    <option value="{{ $i }}">{{ config('const.CLAIMS')[$i] }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="form-group row mt-4">
                            <label for="other">間違いの内容</label>
                            <textarea class="form-control" name="other" id="other" rows="3" placeholder="具体的な内容をお教えください"></textarea>
                        </div>
                        <div class="form-group row mb-0 mt-4">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    送信する
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
