@extends('layouts.app')
@section('title', 'グロリアの扉コレクション')
@section('parentClass', 'detail-page')
@section('class', 'edit')
@section('content')
<div class="fixed-top">
	<header class="px-2 py-3">
		<ul class="row">
			<li class="col-2 align-middle pl-4"><a href="{{ action('EntrancesController@show', $entrance->id) }}"><i class="fas fa-arrow-left"></i></a></li>
			@if(isset($user) && $entrance->user_id == $user->id)
				<li class="col-2 offset-8 align-middle pr-4 dropdown">
					<a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" href="{{ action('EntrancesController@edit', $entrance->id) }}">編集</a>
						<a class="dropdown-item text-danger" href="#">削除</a>
					</div>
				</li>
			@endif
		</ul>
	</header>
</div>
<div class="card content">
{!! Form::open(['route' => ['entrances.update', $entrance->id], 'method' => 'put']) !!}
{{ csrf_field() }}
	<a href="#"><img src="{{ asset('/storage/img/500/500x500_' . $entrance->img_url) }}" alt="" class="img-fluid"></a>
	<table class="mx-auto mt-4 col-10">
		<tr class="align-middle mb-2"><th class="text-center"><i class="fas fa-university mr-4 mb-2"></i></th><td><input id="searchMapInput" class="mapControls form-control mb-2" name="name" value="{{ $entrance->name }}" type="text" placeholder="例) タリーズ　たまプラーザ駅前店"></td></tr>
		<tr class="align-middle mb-2"><th class="text-center"><i class="fas fa-list mr-4 mb-2"></i></th>
			<td>
	            <select id="category" name="category" class="form-control mb-2">
	                @foreach ($categoryList as $category)
	                    <option value="{{ $category->id }}">{{ $category->name }}</option>
	                @endforeach
	            </select>
	        </td>
		</tr>
		<tr class="align-middle mb-2"><th class="text-center"><i class="fas fa-map-marker-alt mr-4 mb-2"></i></th>
			<td><input type="text" class="form-control mb-2" name="address" id="address" value="{{ $entrance->address }}" placeholder="例) 神奈川県横浜市青葉区新石川1-2-15"></td></tr>
		<tr class="align-middle mb-2"><th class="text-center"><i class="fas fa-comment mr-4 mb-2"></i></th>
			<td><textarea class="form-control mb-2" name="detail" id="detail" placeholder="例) 駅直通の渡り廊下にある。改札徒歩2分">{{ $entrance->detail }}</textarea></td>
		</tr>
	</table>
	<div class="card-body text-center">
		{!! Form::submit('更新', ['class' => 'btn btn-success']) !!}
	</div>
{!! Form::close() !!}
</div>
<div class="btn-group d-flex fixed-bottom bg-white">
    <p class="mx-auto my-2 copywriter">© 2019 JOKERS LLC.</p>
</div>
@endsection
@push('js')
<script>
    function initMap() {
        var input = $('#searchMapInput')[0];
        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();
            console.log(place);
            $('#address').val(place.formatted_address);
            $('.mapControls').val(this.getPlace().name);
            $('input[name="lat"]').val(place.geometry.location.lat());
            $('input[name="lng"]').val(place.geometry.location.lng());
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initMap&key=AIzaSyAyd89-4iN5ZVlDG1AlWvUDmEHW37UAxgk&language=ja" async defer></script>
@endpush