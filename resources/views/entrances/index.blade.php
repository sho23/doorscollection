@extends('layouts.admin')
@section('title', 'グロリアの扉コレクション')
@section('content')
<?php $statusList = ['非表示', '表示', '閉店']; ?>
<div class="container mt-4">
    <h2>扉データ一覧</h2>
    <div class="table-responsive table-striped">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>店名</th>
                    <th>住所</th>
                    <th>詳細</th>
                    <th>緯度/経度</th>
                    <th>営業時間</th>
                    <th>最終更新日</th>
                    <th>作成者</th>
                    <th>ステータス</th>
                    <th>ユーザー削除</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($entrances as $entrance)
                    <tr>
                        <td>{{ $entrance->id }}</td>
                        <td style="min-width: 250px;"><a href="{{ url('entrances/'.$entrance->id) }}">{{ $entrance->name }}</a></td>
                        <td style="min-width: 250px;">{{ $entrance->address }}</td>
                        <td style="min-width: 250px;">{{ $entrance->detail }}</td>
                        <td>{{ $entrance->lat . " / " . $entrance->lng }}</td>
                        <td class="text-nowrap">
                            @if (isset($entrance->open_hour_1))
                                @for ($i = 1; $i < 7; $i++)
                                    {{ $entrance->{"open_hour_".$i} }}<br>
                                @endfor
                            @endif
                        </td>
                        <td class="text-nowrap">{{ date('Y/n/j H:i', strtotime($entrance->updated_at)) }}</td>
                        <td class="text-nowrap">{{ $entrance->user_name }}</td>
                        <td class="text-nowrap">
                           {{ $statusList[$entrance->status] }}
                            <a href="#" data-toggle="modal" data-target="#statusModal{{ $entrance->id }}"> [変更]</a><br>
                        </td>
                        <td class="text-nowrap">
                           {{ isset($entrance->deleted_at) ? '削除済み' : '' }}
                        </td>
                    </tr>
                    <div class="modal fade" id="statusModal{{ $entrance->id }}" tabindex="-1" role="dialog" aria-labelledby="statusModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title">扉ステータスの変更</h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                {!! Form::open(['route' => ['entrances.updateStatus',$entrance->id], 'method'=>'put', 'class' => 'status-form']) !!}
                                    <div class="modal-body">
                                        <p>「{{ $entrance->name }} 」この扉のステータスを変更します。</p>
                                        <div class="form-group">
                                            <label for="status">扉ステータス</label>
                                            <select id="status" name="status" class="form-control">
                                                @foreach ($statusList as $key => $status)
                                                    <option value="{{ $key }}" {{ $entrance->status == $key ? 'selected' : null }}>{{ $statusList[$key] }}</option>
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
        {{ $entrances->links() }}
    </div>
</div>
@endsection