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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
            <div class="card shadow p-3 mb-3 mx-4">
                <div class="row my-2">
                    <div class="col-4"><img src="{{ asset('image/ic_gloria.png') }}" class="rounded-circle img-fluid" alt=""></div>
                    <div class="col-8">
                        <p class="text-muted">
                            Hello!! 私の名前はグロリア。<br>
                            私はおでかけが大好きデスが、「目的地まであと少し」でイツモ迷子になりマス。 <br><br>
                            そんな時、建物の見た目がわかれば探すのも楽ちんデス。そこで、私が行った場所の入り口写真を集めることにしましタ。 <br><br>
                            困った時はお互いサマです！ <br>
                            みなさんも一緒に外観検索をしたり、入り口写真をコレクションしませんか。
                        </p>
                    </div>
                </div>
                <a href="{{ action('HomeController@index') }}" class="btn btn-success mx-auto my-3">OK</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>