@extends('layouts.app')
@section('title', 'グロリアの扉コレクション')
@section('class', 'single-page')
@section('content')
@include('layouts.header')
<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card auth-form">
                <div class="card-header">退会の手続き</div>

                <div class="card-body">
                    {!! Form::open(['route' => ['users.leavingStore'], 'method'=>'post']) !!}
                        <div class="form-group row mt-2">
                            <label for="reason">退会理由</label>
                            <select id="reason" name="reason" class="form-control">
                                @for ($i = 0; $i <= 4; $i++)
                                    <option value="{{ $i }}">{{ config('const.LEAVING_REASONS')[$i] }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="form-group row mt-4">
                            <label for="other">その他(ご意見・ご要望等)</label>
                            <textarea class="form-control" name="other" id="other" rows="3" placeholder="その他ご意見、ご要望等あればご記載ください。"></textarea>
                        </div>
                        <div class="form-group row mb-0 mt-4">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-danger">
                                    退会する
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
