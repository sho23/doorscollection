@extends('layouts.admin')
@section('title', 'グロリアの扉コレクション')
@section('content')
<?php $statusList = ['非表示', '表示', '閉店']; ?>
<div class="container mt-4">
    <h2>間違い報告一覧</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>店舗名</th>
                    <th>報告者</th>
                    <th>間違い箇所</th>
                    <th>間違い内容</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($claims as $claim)
                    <tr>
                        <td>{{ $claim->id }}</td>
                        <td><a href="{{ action('EntrancesController@show', $claim->entrance_id) }}">{{ $claim->entrance_name }}</a></td>
                        <td>{{ $claim->user_name }}</td>
                        <td>{{ config('const.CLAIMS')[$claim->claim] }}</td>
                        <td>{{ $claim->other }}</td>
                        <td class="text-nowrap">
                           {{ $statusList[$claim->entrance_status] }}
                            <a href="#" data-toggle="modal" data-target="#statusModal{{ $claim->entrance_id }}"> [変更]</a><br>
                        </td>
                    </tr>
                    <div class="modal fade" id="statusModal{{ $claim->entrance_id }}" tabindex="-1" role="dialog" aria-labelledby="statusModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title">扉ステータスの変更</h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                {!! Form::open(['route' => ['entrances.updateStatus',$claim->entrance_id], 'method'=>'put', 'class' => 'status-form']) !!}
                                    <div class="modal-body">
                                        <p>「{{ $claim->entrance_name }} 」この扉のステータスを変更します。</p>
                                        <div class="form-group">
                                            <label for="status">扉ステータス</label>
                                            <select id="status" name="status" class="form-control">
                                                @foreach ($statusList as $key => $status)
                                                    <option value="{{ $key }}" {{ $claim->entrance_status == $key ? 'selected' : null }}>{{ $statusList[$key] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                                            {!! Form::submit('変更する', ['class' => 'btn btn-danger']) !!}
                                    </div><!-- /.modal-footer -->
                                {!! Form::close() !!}
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-2">
        {{ $claims->links() }}
    </div>
</div>
@endsection