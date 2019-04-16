<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="<?php echo $__env->yieldContent('detail') !== '' ? $__env->yieldContent('detail') : 'ドアコレ〜ミチマヨ（方向音痴）のためのイン◯タグラム〜！？お店や建物の扉写真を検索＆投稿できるグロリアの扉コレクションは、「目的地周辺」で迷子になってしまったあなたをすばやく救済してくれる神サービス！あなたもグロリアと一緒に方向音痴に優しい社会を作りませんか？'; ?>">
    <meta property="og:title"       content="<?php echo $__env->yieldContent('ogtitle') !== '' ? $__env->yieldContent('ogtitle') : '目的地周辺”から一向にその先に進めないあなたへ｜グロリアの扉コレクション〜ドアコレ〜'; ?>">
    <meta property="og:site_name"   content="グロリアの扉コレクション">
    <meta property="og:description" content="<?php echo $__env->yieldContent('detail') !== '' ? $__env->yieldContent('detail') : 'ドアコレ〜ミチマヨ（方向音痴）のためのイン◯タグラム〜！？お店や建物の扉写真を検索＆投稿できるグロリアの扉コレクションは、「目的地周辺」で迷子になってしまったあなたをすばやく救済してくれる神サービス！あなたもグロリアと一緒に方向音痴に優しい社会を作りませんか？'; ?>">
    <meta property="og:url"         content="<?php echo $__env->yieldContent('url') !== '' ? $__env->yieldContent('url') : url('/'); ?>">
    <meta property="og:type"        content="website">
    <meta property="og:image"       content="<?php echo $__env->yieldContent('ogimg') !== '' ? url('/') . '/' . $__env->yieldContent('ogimg') : asset('image/gloria_ogp.jpg'); ?>">

    <meta name="twitter:image"      content="<?php echo $__env->yieldContent('ogimg') !== '' ? url('/') . '/' . $__env->yieldContent('ogimg') : asset('image/gloria_ogp.jpg'); ?>">
    <meta name="twitter:card"       content="summary_large_image">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" href="{{ asset('image/favicon.ico') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.sidr/2.2.1/stylesheets/jquery.sidr.dark.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135750696-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-135750696-1');
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/exif-js/2.3.0/exif.min.js"></script>
</head>
<body class="@yield('parentClass', 'fixed-page')">
    <div id="loading"><img src="{{ asset('image/loading.gif') }}"></div>
    <div class="container-fluid">
        <div id="sidr">
            <ul>
                <li class="text-center p-2"><img src="{{ asset('image/ic_gloria.png') }}" class="rounded-circle" alt="" width="100"></li>
                <li class="text-center"><a href="{{ action('HomeController@index') }}">ホーム</a></li>
                <!-- <li class="text-center"><a href="#">お知らせ</a></li> -->
                <li class="text-center"><a href="{{ action('HomeController@policy') }}">プライバシーポリシー</a></li>
                <li class="text-center"><a href="{{ action('HomeController@qa') }}">Q&A</a></li>
                <li class="text-center"><a href="http://team-jokers.tokyo" target="_blank">運営会社</a></li>
                <li class="text-center"><a href="https://docs.google.com/forms/d/e/1FAIpQLSdzTPfhYemEFK4TL0N75bUemzVVTsyr2GR5N60MGPOV-C8GzA/viewform" target="_blank">アンケート</a></li>
                @guest
                    <li class="text-center"><a href="{{ route('login') }}" class="text-danger"><strong>ログイン</strong></a></li>
                @else
                    <li class="text-center"><a href="{{ action('EntrancesController@mypage') }}">マイページ</a></li>
                    <li class="text-center"><a href="{{ route('logout') }}" class="text-danger"><strong>ログアウト</strong></a></li>
                @endguest
            </ul>
        </div>
        <div class="@yield('class', '')">
            <canvas id="canvas" width="0" height="0"></canvas>
            @yield('content')
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/jquery.sidr/2.2.1/jquery.sidr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.3.9/jquery.jscroll.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        const THUMBNAIL_WIDTH = 1200; // 画像リサイズ後の横の長さの最大値
        const THUMBNAIL_HEIGHT = 1200; // 画像リサイズ後の縦の長さの最大値
        window.onload = function(){
            $(function() {
                $("#loading").fadeOut();
                $(".container-fluid").fadeIn();
                $('#simple-menu').sidr();
            });
        }
        $('.upload_button').click(function() {
            $('#file').click();
            return false;
        });
        $('.sidr-cover').click(function() {
            $.sidr('close', 'sidr')
            return false;
        });

        $('#file').change(function() {
            file = $(this).prop('files')[0];
            // 選択されたファイルが画像かどうか判定
            if (file.type != 'image/jpeg' && file.type != 'image/png') {
              file = null;
              blob = null;
              alert('画像を選択してください。');
              return;
            }
            // 画像をリサイズする
            var image = new Image();
            var reader = new FileReader();
            reader.onload = function(e) {
              image.onload = function() {
                var width, height;
                if(image.width > image.height){
                  // 横長の画像は横のサイズを指定値にあわせる
                  var ratio = image.height/image.width;
                  width = THUMBNAIL_WIDTH;
                  height = THUMBNAIL_WIDTH * ratio;
                } else {
                  // 縦長の画像は縦のサイズを指定値にあわせる
                  var ratio = image.width/image.height;
                  width = THUMBNAIL_HEIGHT * ratio;
                  height = THUMBNAIL_HEIGHT;
                }
                // サムネ描画用canvasのサイズを上で算出した値に変更
                var canvas = $('#canvas')
                             .attr('width', width)
                             .attr('height', height);
                var ctx = canvas[0].getContext('2d');
                // canvasに既に描画されている画像をクリア
                ctx.clearRect(0,0,width,height);

                EXIF.getData(file, function(){
                  var orientation = file.exifdata.Orientation;
                  if(orientation === undefined){
                      orientation = 1;
                  }

                  if ([5,6,7,8].indexOf(orientation) > -1) {
                    canvas.width = image.height
                    canvas.height = image.width
                    $('#canvas').attr('width', height)
                    $('#canvas').attr('height', width)
                  } else {
                    canvas.width = image.width
                    canvas.height = image.height
                  }

                  switch (orientation) {
                    case 2: ctx.transform(-1, 0, 0, 1, width, 0); break;
                    case 3: ctx.transform(-1, 0, 0, -1, width, height); break;
                    case 4: ctx.transform(1, 0, 0, -1, 0, height); break;
                    case 5: ctx.transform(0, 1, 1, 0, 0, 0); break;
                    case 6: ctx.transform(0, 1, -1, 0, height, 0); break;
                    case 7: ctx.transform(0, -1, -1, 0, height, width); break;
                    case 8: ctx.transform(0, -1, 1, 0, 0, width); break;
                  }
                  // canvasにサムネイルを描画
                  ctx.drawImage(image,0,0,image.width,image.height,0,0,width,height);

                  // canvasからbase64画像データを取得
                  var base64 = canvas.get(0).toDataURL('image/jpeg');
                  // base64からBlobデータを作成
                  var barr, bin, i, len;
                  bin = atob(base64.split('base64,')[1]);
                  len = bin.length;
                  barr = new Uint8Array(len);
                  i = 0;
                  while (i < len) {
                    barr[i] = bin.charCodeAt(i);
                    i++;
                  }
                  blob = new Blob([barr], {type: 'image/jpeg'});

                  var name, fd = new FormData();
                  fd.append('file', blob); // ファイルを添付する
                  $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{ action('EntrancesController@store') }}", // 送信先
                    type: 'POST',
                    dataType: 'json',
                    data: fd,
                    processData: false,
                    contentType: false
                  })
                  .done(function( data, textStatus, jqXHR ) {
                    location.href = "{{ url('entrances/create_desc/') }}?filename=" + data.request;
                  })
                  .fail(function( jqXHR, textStatus, errorThrown ) {
                    alert('画像アップロードに失敗しました。画面を更新してもう一度お試しください。');
                  });
                });
              }
              image.src = e.target.result;
            }
            reader.readAsDataURL(file);
            $('.container-fluid').css('opacity', '0.1');
            $('#loading').show();
        });
    </script>
    @stack('js')
</body>
</html>
