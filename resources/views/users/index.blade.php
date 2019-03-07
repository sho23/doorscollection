@extends('layouts.admin')
@section('title', 'グロリアの扉コレクション')
@section('content')
<?php $statusList = ['アクティブ', '退会済み', 'ブラックリスト']; ?>
<div class="container mt-4">
    <h2>User一覧</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ユーザーネーム</th>
                    <th>メールアドレス</th>
                    <th>認証状況</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td><a href="{{ url('users/'.$user->id) }}">{{ $user->name }}</a></td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <?php if (isset($user->email_verified_at)){
                                    echo '認証済み';
                                } else {
                                   echo '未認証' . '<a href="#" data-toggle="modal" data-target="#vertifyModal" data-id="' . $user->id . '" data-name="' . $user->name . '"> [変更]</a>';
                                } ?>
                        </td>
                        <td>{{ $statusList[$user->status] }} <a href="#" data-toggle="modal" data-target="#statusModal{{ $user->id }}" data-id="{{ $user->id }}" data-name="{{ $user->name }}">[変更]</a></td>
                    </tr>
                    <div class="modal fade" id="statusModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="statusModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title">ユーザーステータスの変更</h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                {!! Form::open(['route' => ['users.updateStatus',$user->id], 'method'=>'put', 'class' => 'status-form']) !!}
                                    <div class="modal-body">
                                        <p>{{ $user->name }} : このユーザーステータスを変更します。</p>
                                        <div class="form-group">
                                            <label for="status">ユーザーステータス</label>
                                            <select id="status" name="status" class="form-control">
                                                @foreach ($statusList as $key => $status)
                                                    <option value="{{ $key }}" {{ $user->status == $key ? 'selected' : null }}>{{ $statusList[$key] }}</option>
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
        {{ $users->links() }}
    </div>
</div>
<div class="modal fade" id="vertifyModal" tabindex="-1" role="dialog" aria-labelledby="vertifyModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">ユーザーの認証</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::open(['route' => ['users.updateVerify', 0], 'method'=>'put', 'class' => 'verify-form']) !!}
                <div class="modal-body">
                    <p></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                        {!! Form::submit('認証する', ['class' => 'btn btn-danger']) !!}
                </div><!-- /.modal-footer -->
            {!! Form::close() !!}
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection
@push('js')
<script>
    $('#vertifyModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        $('.verify-form').attr('action', "updateVerify/" + button.data('id'));
        $('.verify-form').find('.modal-body p').text(button.data('name') + ' このユーザーを認証します。')
    })
</script>
@endpush