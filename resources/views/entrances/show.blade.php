@extends('layouts.app')
@section('title', 'グロリアの扉コレクション')
@section('parentClass', 'detail-page')
@section('class', 'detail')
@section('content')
<div class="fixed-top">
	<header class="px-2 py-3">
		<ul class="row">
			<li class="col-2 align-middle pl-4"><a href="{{ $prevUrl }}"><i class="fas fa-arrow-left"></i></a></li>
			@if(isset($user) && $entrance->user_id == $user->id)
				<li class="col-2 offset-8 align-middle pr-4 dropdown">
					<a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" href="{{ action('EntrancesController@edit', $entrance->id) }}">編集</a>
						<a class="dropdown-item text-danger" href="#" data-toggle="modal" data-target="#deleteModal">削除</a>
					</div>
				</li>
			@endif
		</ul>
	</header>
</div>
<div class="card content">
	<a href="#"><img src="{{ asset('/storage/img/500/500x500_' . $entrance->img_url) }}" alt="" class="img-fluid"></a>
	<table class="m-4">
		<tr class="align-top"><th class="text-center"><i class="fas fa-university mr-4"></i></th><td class="pb-3">{{ $entrance->name }}</td></tr>
		<tr class="align-top"><th class="text-center"><i class="fas fa-map-marker-alt mr-4"></i></th><td class="pb-3">{{ $entrance->address }}</td></tr>
		<tr class="align-top"><th class="text-center"><i class="fas fa-comment mr-4"></i></th>
			<td class="pb-3">{{ $entrance->detail }}<br>
			<small>{{ $entrance->created_at }} に投稿</small></td>
		</tr>
	</table>
</div>
<div class="card bg-gray avatar-area py-2">
	<div class="row my-2">
		<div class="col-4 text-center"><img src="{{ asset('image/ic_gloria.png') }}" class="rounded-circle" alt="" hegith="80px" width="80px"></div>
		<div class="col-8 balloon-note">
			<p class="p-2 bg-white"><small>すばらしイ写真をありがとうございマス!! SNSでお友達にシェアしたり、みんなで最新情報を追記していきまショウ。</small></p>
		</div>
	</div>
</div>
<div class="card">
	<ul class="row react-buttons">
		<li class="col text-white bg-info"><a href="http://twitter.com/share?url={{ Request::url() }}" target="_blank" class="p-3"><i class="fab fa-twitter"></i>　Twitter</a></li>
		<li class="col text-white bg-primary"><a href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}" target="_blank" class="p-3"><i class="fab fa-facebook-f"></i>　Facebook</a></li>
		<li class="col text-white bg-danger"><a href="#" class="p-3"><i class="fas fa-heart"></i>　Like</a></li>
	</ul>
</div>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="exampleModalLabel">扉データの削除</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>{{ $entrance->name }}のデータを削除します。本当によろしいですか？</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                {!! Form::open(['route' => ['entrances.destroy',$entrance->id],'method'=>'delete']) !!}
	                {!! Form::submit('削除する', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
		</div><!-- /.modal-footer -->
	</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection