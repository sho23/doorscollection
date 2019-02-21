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
        {!! Form::open(['route' => ['entrances.storeDesc'], 'method' => 'post']) !!}
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
                        @if ($filename)
                        <input type="hidden" name="img_url" value="{{ $filename }}">
                        <p><img src="{{ Storage::disk('public')->url('500/500x500_' . $filename) }}" alt="entrance" width='250'></p>
                        @endif
                        <div class="form-group" id="name-input">
                            <label for="name">名前</label>
                                <input id="searchMapInput" class="mapControls form-control" name="name" type="text" placeholder="例) タリーズ　たまプラーザ駅前店">
                        </div>
                        <div class="form-group">
                                <h5 id="name"></h5>
                        </div>
                        <div class="form-group">
                            <label for="category">店のジャンル</label>
                            <select id="category" name="category" class="form-control">
                                @foreach ($categoryList as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">住所</label>
                            <input type="text" class="form-control" name="address" id="address" value="{{old('address')}}" placeholder="例) 神奈川県横浜市青葉区新石川1-2-15">
                        </div>
                        <div class="form-group">
                            <label for="detail">お店の説明</label>
                            <input type="text" class="form-control" name="detail" id="detail" value="{{old('detail')}}" placeholder="例) 駅直通の渡り廊下にある。改札徒歩2分">
                        </div>
                        <div class="card-body text-center">
                            {!! Form::submit('アップロード', ['class' => 'btn btn-primary']) !!}
                        </div>
					</div>
				</div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection
<script src="{{ asset('/js/entrance.js') }}"></script>
<script>
    function initMap() {
        var input = document.getElementById('searchMapInput');
        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();
            document.getElementById('address').value = place.formatted_address;
            document.getElementById('name').innerHTML = '登録名：' + place.name;
            document.getElementById("name-input").style.display="none";
            document.getElementById('lat-span').innerHTML = place.geometry.location.lat();
            document.getElementById('lon-span').innerHTML = place.geometry.location.lng();
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initMap&key=AIzaSyAyd89-4iN5ZVlDG1AlWvUDmEHW37UAxgk&language=ja" async defer></script>