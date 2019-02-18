@extends('layouts.app')
@section('title', 'グロリアの扉コレクション')
@section('parentClass', 'detail-page')
@section('class', 'detail')
@section('content')
<div class="fixed-top">
	<header class="px-2 py-3">
		<ul class="row">
			<li class="col-2 align-middle pl-4"><a href="{{ action('EntrancesController@mypage') }}"><i class="fas fa-arrow-left"></i></a></li>
			<li class="col-2 offset-8 align-middle pr-4"><a href="#"><i class="fas fa-ellipsis-v"></i></a></li>
		</ul>
	</header>
</div>
<div class="card content">
	<a href="#"><img src="{{ asset('/storage/img/' . $entrance->img_url) }}" alt="" class="img-fluid"></a>
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
	<ul class="row">
		<li class="col py-3 text-white bg-info"><i class="fab fa-twitter"></i></li>
		<li class="col py-3 text-white bg-primary"><i class="fab fa-facebook-f"></i></li>
		<li class="col py-3 text-white bg-danger"><i class="fas fa-heart"></i></li>
	</ul>
</div>
@endsection