@extends('layouts.app')
@section('title', 'グロリアの扉コレクション')
@section('class', 'entrance-list')
@section('content')
@include('layouts.header')
<div id="wrap">
    <div class="container">
        {!! Form::open(['route' => ['entrances.storeDesc'], 'method' => 'post']) !!}
        {{ csrf_field() }}
            <div class="row form-wrapper">
                <div class="card pb-2 px-2" style="width: 100%;">
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
                        @if ($filename)
                        <input type="hidden" name="img_url" value="{{ $filename }}">
                        <p class="text-center"><img src="{{ Storage::disk('public')->url('500/500x500_' . $filename) }}" alt="entrance" width='250'></p>
                        @endif
                        <input type="hidden" name="lat" value="">
                        <input type="hidden" name="lng" value="">
                        <input type="hidden" name="open_hours" value="">
                        <div class="form-group" id="name-input">
                            <label for="name">名前</label>
                            <input id="searchMapInput" class="mapControls form-control form-control-sm" name="name" type="text" value="{{ old('name') }}" placeholder="例) タリーズ　たまプラーザ駅前店">
                        </div>
                        <div class="form-group">
                            <label for="address">住所</label>
                            <input type="text" class="form-control form-control-sm" name="address" id="address" value="{{old('address')}}" placeholder="例) 神奈川県横浜市青葉区新石川1-2-15">
                        </div>
                        <div class="form-group">
                            <label for="category">店のジャンル</label>
                            <select id="category" name="category" class="form-control form-control-sm">
                                <option value="">--店のジャンルを選択--</option>
                                @foreach ($categoryList as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == old('category') ? 'selected' : null }}>{{ $category->ja_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="detail">お店の説明</label>
                            <textarea name="detail" rows="4" cols="40" id="detail" value="{{old('detail')}}" class="form-control form-control-sm">例) 駅直通の渡り廊下にある。改札徒歩2分。</textarea>
                        </div>
                        <div class="card-body text-center">
                            {!! Form::submit('投稿', ['class' => 'btn btn-success']) !!}
                        </div>
					</div>
				</div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection
@push('js')
<script>
    function initMap() {
        var input = $('#searchMapInput')[0];
        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();
            var addr = place.formatted_address;
            var str = addr.split('〒');
            if (str[0] == "日本、") {
                var addr = str[1].slice(9);
            };
            $('#address').val(addr);
            $('.mapControls').val(this.getPlace().name);
            $('input[name="lat"]').val(place.geometry.location.lat());
            $('input[name="lng"]').val(place.geometry.location.lng());
            $('input[name="open_hours"]').val(place.opening_hours.weekday_text);
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initMap&key=AIzaSyAyd89-4iN5ZVlDG1AlWvUDmEHW37UAxgk&language=ja" async defer></script>
@endpush