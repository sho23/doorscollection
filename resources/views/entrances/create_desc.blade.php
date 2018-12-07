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
                        <p><img src="{{ Storage::disk('public')->url($filename) }}" alt="entrance" width="500" height="500" /></p>
                        @endif
                        <div class="form-group" id="suggest-name">
                            <label for="name">店の名前</label>
                            <select id="myselectbox" onchange="myfunc()" name="name" class="form-control">
                                <?php foreach ($suggestList as $key => $value) {
                                    echo '<option value="', $key . '-' . $value[0], '">', $value[0], '</option>';
                                } ?>
                            </select>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="name-text">
                            <label class="form-check-label" for="name-text">直接入力する</label>
                            <br>
                        </div>
                        <div class="form-group" id="name-input" style="display:none;">
                            <label for="name">名前</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" placeholder="例) タリーズ　たまプラーザ駅前店">
                        </div>
                        <div class="form-group">
                            <label for="category">店のジャンル</label>
                            <select id="category" name="category" class="form-control">
                                <?php foreach ($categoryList as $value) {
                                    echo '<option value="', $value, '">', $value, '</option>';
                                } ?>
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
    function myfunc() {
        var value = document.getElementById("myselectbox").value;
        var key = value.split('-');
        var $suggestList = <?php echo json_encode($suggestList); ?>;
        var $categoryList = <?php echo json_encode($categoryList); ?>;
        console.log($categoryList);
        document.getElementById("address").value = $suggestList[value[0]][1];
        document.getElementById("category").value = $suggestList[value[0]][2];
    }
</script>