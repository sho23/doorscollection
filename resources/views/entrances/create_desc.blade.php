@extends('layouts.app')
@section('title', 'グロリアの扉コレクション')
@section('class', 'entrance-list')
@section('content')
<div class="fixed-top">
    <header class="px-1">
        <ul class="row">
            <li class="col-2 pl-4 bars-menu"><a href="#sidr" id="simple-menu"><i class="fas fa-bars text-light"></i></a></li>
            <li class="col-5 header-logo"><a href="/"><img src="{{ asset('image/logo_small.png') }}" alt="" hight="27px" width="107px"></a></li>
            <li class="col-5 text-right pr-4">
                <a href="#"><span class="p-2 badge badge-pill badge-warning"><i class="fas fa-bell text-light"></i></span></a>
                <a href="{{ action('EntrancesController@mypage') }}"><span class="ml-2 p-2 badge badge-pill badge-warning"><i class="fas fa-user-alt text-light"></i></span></a>
            </li>
        </ul>
    </header>
</div>
<div id="sidr">
    <ul>
        <li class="text-center p-2"><img src="{{ asset('image/ic_gloria.png') }}" class="rounded-circle" alt="" width="100"></li>
        <li class="text-center"><a href="{{ action('HomeController@index') }}">ホーム</a></li>
        <li class="text-center"><a href="#">お知らせ</a></li>
        <li class="text-center"><a href="{{ action('HomeController@index') }}">プライバシーポリシー</a></li>
        <li class="text-center"><a href="http://team-jokers.tokyo" target="_blank">運営会社</a></li>
        @guest
            <li class="text-center"><a href="{{ route('login') }}" class="text-danger"><strong>ログイン</strong></a></li>
        @else
            <li class="text-center"><a href="{{ action('EntrancesController@mypage') }}">マイページ</a></li>
            <li class="text-center"><a href="{{ route('logout') }}" class="text-danger"><strong>ログアウト</strong></a></li>
        @endguest
    </ul>
</div>
<div id="wrap">
    <div class="container">
        {!! Form::open(['route' => ['entrances.storeDesc'], 'method' => 'post']) !!}
        {{ csrf_field() }}
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
                                <input id="searchMapInput" class="mapControls form-control" name="mapControls" type="text" placeholder="例) タリーズ　たまプラーザ駅前店">
                                <input type="hidden" id="name" name="name">
                        </div>
                        <div class="form-group">
                                <h5 id="preview-name"></h5>
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
                            {!! Form::submit('アップロード', ['class' => 'btn btn-success']) !!}
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
            $('#address').val(place.formatted_address);
            $('#name').val(place.name);
            $('#preview-name').text("登録名：" + place.name);
            $("#name-input").css('display', 'none');
        });
    }
    $(function() {
        $('#simple-menu').sidr();
    });
</script>
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initMap&key=AIzaSyAyd89-4iN5ZVlDG1AlWvUDmEHW37UAxgk&language=ja" async defer></script>
@endpush