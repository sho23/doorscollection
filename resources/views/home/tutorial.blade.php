<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="ドアコレ〜ミチマヨ（方向音痴）のためのイン◯タグラム〜！？お店や建物の扉写真を検索＆投稿できるグロリアの扉コレクションは、「目的地周辺」で迷子になってしまったあなたをすばやく救済してくれる神サービス！あなたもグロリアと一緒に方向音痴に優しい社会を作りませんか？">
        <meta property="og:title"       content="目的地周辺”から一向にその先に進めないあなたへ｜グロリアの扉コレクション〜ドアコレ〜">
        <meta property="og:site_name"   content="グロリアの扉コレクション">
        <meta property="og:description" content="ドアコレ〜ミチマヨ（方向音痴）のためのイン◯タグラム〜！？お店や建物の扉写真を検索＆投稿できるグロリアの扉コレクションは、「目的地周辺」で迷子になってしまったあなたをすばやく救済してくれる神サービス！あなたもグロリアと一緒に方向音痴に優しい社会を作りませんか？">
        <meta property="og:url"         content="<?php echo url('/'); ?>">
        <meta property="og:type"        content="website">
        <meta property="og:image"       content="<?php echo asset('image/gloria_ogp.jpg'); ?>">

        <meta name="twitter:image"      content="<?php echo asset('image/gloria_ogp.jpg'); ?>">
        <meta name="twitter:card"       content="summary_large_image">


        <title>グロリアの扉コレクション</title>

        <link rel="shortcut icon" href="{{ asset('image/favicon.ico') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135750696-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-135750696-1');
        </script>
    </head>
    <body class="top-page">
    <div class="container-fulid">
        <div class="top">
            <h2 class="text-white text-center py-3"><img src="{{ asset('image/logo_large.png') }}" alt="" width="300"></h2>
            <div id="carouselIndicators" class="carousel slide mx-4 my-2 bg-white" data-wrap="false" data-ride="carousel" data-interval="false">
                <ol class="carousel-indicators">
                    <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselIndicators" data-slide-to="5"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item text-center active">
                        <div class="d-flex tutorial-header">
                            <span class="ribbon">使い方</span>
                            <a href="{{ action('HomeController@index') }}" class="btn btn-sm btn-outline-info">SKIP</a>
                        </div>
                        <div class="m-2">
                            <span class="icon-arrow">→</span>
                            <img src="{{ asset('image/tutorial/tutorial01.png') }}">
                            <div class="tutorial-footer">
                                <h6>目的地周辺で迷子になったら、ドアコレで入口写真の絞り込み検索をしてみよう！</h6>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item text-center">
                        <div class="d-flex tutorial-header">
                            <span class="ribbon">使い方</span>
                            <a href="{{ action('HomeController@index') }}" class="btn btn-sm btn-outline-info">SKIP</a>
                        </div>
                        <div class="m-2">
                            <img src="{{ asset('image/tutorial/tutorial02.png') }}">
                            <div class="tutorial-footer">
                                <h6>カテゴリ・距離・キーワードを入力したら「絞り込み」ボタンで検索開始！</h6>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item text-center">
                        <div class="d-flex tutorial-header">
                            <span class="ribbon">使い方</span>
                            <a href="{{ action('HomeController@index') }}" class="btn btn-sm btn-outline-info">SKIP</a>
                        </div>
                        <div class="m-2">
                            <img src="{{ asset('image/tutorial/tutorial03.png') }}">
                            <div class="tutorial-footer">
                                <h6>行ったお店や建物の写真を撮って投稿しよう！あなたの写真で、道に迷う人を減らせるかも♪</h6>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item text-center">
                        <div class="d-flex tutorial-header">
                            <span class="ribbon">使い方</span>
                            <a href="{{ action('HomeController@index') }}" class="btn btn-sm btn-outline-info">SKIP</a>
                        </div>
                        <div class="m-2">
                            <img src="{{ asset('image/tutorial/tutorial04.png') }}">
                            <div class="tutorial-footer">
                                <h6>テーマは「方向音痴のためのヒントを増やす」こと！目印になりそうなポイントを写真に収めてね。</h6>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item text-center">
                        <div class="d-flex tutorial-header">
                                <span class="ribbon">使い方</span>
                            <a href="{{ action('HomeController@index') }}" class="btn btn-sm btn-outline-info">SKIP</a>
                        </div>
                        <div class="m-2">
                            <img src="{{ asset('image/tutorial/tutorial05.png') }}">
                            <div class="tutorial-footer">
                                <h6>名前・ジャンル・住所・コメントを入力したら、アップロードボタンを押して投稿完了♪</h6>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item text-center">
                        <div class="d-flex tutorial-header">
                            <span class="ribbon">使い方</span>
                        </div>
                        <div class="m-2">
                            <img src="{{ asset('image/tutorial/tutorial06.png') }}">
                            <div class="tutorial-footer">
                                <a href="{{ action('HomeController@index') }}" class="btn btn-success my-3">さぁ、はじめまショウ！</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>