@extends('layouts.app')
@section('title', 'グロリアの扉コレクション')
@section('class', 'entrance-list qa-page')
@section('content')
@include('layouts.header')
<div class="card pb-4 mb-5">
    <div class="row">
        <div class="m-4">
            <h5>Q&A</h5>
            <p>合同会社JOKERS（以下「当社」といいます。）は、当社の提供するサービス（以下「本サービス」といいます。）における、ユーザーについての個人情報を含む利用者情報の取扱いについて、以下のとおりプライバシーポリシー（以下「本ポリシー」といいます。）を定めます。</p>
        </div>
        <div class="mx-4">
            <h6>【目次】</h6>
            <ol>
                <li><a href="#section1">『グロリアの扉コレクション』とは？</a></li>
                <li><a href="#section2">認証メールが届かない</a></li>
                <li><a href="#section3">退会方法を教えてほしい</a></li>
                <li><a href="#section4">データの間違いを発見した</a></li>
                <li><a href="#section5">位置情報絞り込みがうまく動かない</a></li>
                <li><a href="#section6">エラーが表示されるのだが、どうしたらよい？</a></li>
                <li><a href="#section7">投稿したい内容がカテゴリに含まれていない</a></li>
                <li><a href="#section8">店舗の住所がわからない</a></li>
                <li><a href="#section9">画像がアップロードできない</a></li>
                <li><a href="#section10">投稿していい写真はどんな写真？</a></li>
                <li><a href="#section11">会員登録するメリットって？</a></li>
                <li><a href="#section12">投稿しようと思った店舗がすでに登録されていた</a></li>
                <li><a href="#section13">お金はかかるの？</a></li>
                <li><a href="#section14">投稿するといいことはあるの？</a></li>
                <li><a href="#section15">見つけたい店舗が見つからない</a></li>
                <li><a href="#section16">英語の投稿でもOK?</a></li>
                <li><a href="#section17">国外や地方の投稿もOK?</a></li>
                <li><a href="#section18">写真に人が写っていても大丈夫？</a></li>
                <li><a href="#section19">ログインができない</a></li>
                <li><a href="#section20">パスワードを忘れてしまった</a></li>
                <li><a href="#section21">登録したアドレスを忘れてしまった</a></li>
                <li><a href="#section22">他の人にシェアしたいが、方法がわからない</a></li>
                <li><a href="#section23">投稿内容は変更できるの？</a></li>
                <li><a href="#section24">グロリアって何？</a></li>
                <li><a href="#section25">運営会社ってどんなところ？</a></li>
                <li><a href="#section26">登録しているメールアドレスやユーザー名を変えたい</a></li>
                <li><a href="#section27">店名があっているはずなのに検索結果に出てこないのはなぜ？</a></li>
                <li><a href="#section28">投稿の著作権って？</a></li>
                <li><a href="#section29">他のサイトから写真を流用してもいい？</a></li>
            </ol>
        </div>
        <hr>
        <div id="section1" class="mx-4">
            <h6>1   『グロリアの扉コレクション』とは？</h6>
            <p>お店や建物の入り口写真が投稿できる画像投稿サイトです。投稿写真は、地図やナビで迷いやすい「目的地周辺」付近で、目的地を見つけるための有力なヒントになります。</p>
        </div>
        <hr>
        <div id="section2" class="mx-4">
            <h6>2   認証メールが届かない</h6>
            <p>メール返信は自動で行われますが、タイムラグがある場合があります。15分たっても返信がない場合は、<a href="{{ url('email/verify') }}">再送信</a>を試すか、運営会社に直接お問い合わせください。</p>
        </div>
        <hr>
        <div id="section3" class="mx-4">
            <h6>3   退会方法を教えてほしい</h6>
            <p><a href="{{ url('/leave') }}">こちらのページ</a>から退会手続きをしてください。</p>
        </div>
        <hr>
        <div id="section4" class="mx-4">
            <h6>4   データの間違いを発見した</h6>
            <p>扉詳細画面右下の「間違いを報告」ボタンからお知らせいただけますと大変助かります。</p>
        </div>
        <hr>
        <div id="section5" class="mx-4">
            <h6>5   位置情報絞り込みがうまく動かない</h6>
            <p>お手数ですが、位置情報設定をご変更ください。<br><br>
                <b>iPhoneの場合→</b> 設定 > プライバシー > 位置情報 > Safari > このAPPの使用中のみ許可<br><br>
                <b>Androidの場合→</b> 設定 > セキュリティと現在地情報 > プライバシー > 位置情報 > お使いのブラウザ > 許可 > 位置情報ON<br><br>
                を選択の上、ページに戻ってリロードしてください。</p>
        </div>
        <hr>
        <div id="section6" class="mx-4">
            <h6>6   エラーが表示されるのだが、どうしたらよい？</h6>
            <p>お手数ですが nwada@team-jokers.com 宛に発生状況をお知らせください。</p>
        </div>
        <hr>
        <div id="section7" class="mx-4">
            <h6>7   投稿したい内容がカテゴリに含まれていない</h6>
            <p>その他をご選択ください。</p>
        </div>
        <hr>
        <div id="section8" class="mx-4">
            <h6>8   店舗の住所がわからない</h6>
            <p>店舗名を入力すると、住所候補が出てくるので、その中から選択してください。<br>
                住所候補が出てこない場合は、お手数ですがご検索のうえ、手動入力をお願いいたします。</p>
        </div>
        <hr>
        <div id="section9" class="mx-4">
            <h6>9   画像がアップロードできない</h6>
            <p>お手数ですが nwada@team-jokers.com 宛に発生状況をお知らせください。</p>
        </div>
        <hr>
        <div id="section10" class="mx-4">
            <h6>10  投稿していい写真はどんな写真？</h6>
            <p>地図上で、「目的地周辺情報」には辿り着けているのに肝心の入り口が見つからない！という人へのヒントになるような写真の投稿をお願いいたします。入り口と無関係の写真や、人物の写り込んだ写真などの投稿はご遠慮ください。</p>
        </div>
        <hr>
        <div id="section11" class="mx-4">
            <h6>11  会員登録するメリットって？</h6>
            <p>会員登録をすることで、いいねや画像投稿が可能になります。グロリアの扉コレクションでは、ユーザーのみなさんの投稿で掲載情報が増え、結果として道に迷う人も減っていく世の中を目指してます。ぜひご協力ください！</p>
        </div>
        <hr>
        <div id="section12" class="mx-4">
            <h6>12  投稿しようと思った店舗がすでに登録されていた</h6>
            <p>複数の方向や角度からの投稿があるとお店にたどり着ける確率はUPするので気にせずどんどん投稿してください！</p>
        </div>
        <hr>
        <div id="section13" class="mx-4">
            <h6>13  お金はかかるの？</h6>
            <p>2019年3月現在は全ての機能が無料でご利用いただけます。</p>
        </div>
        <hr>
        <div id="section14" class="mx-4">
            <h6>14  投稿するといいことはあるの？</h6>
            <p>グロリアの扉コレクションでは、地図強者に頼るのではなく「ミチマヨ（方向音痴）同士で助け合える」恩送りのような世界観を目指しています。あなたの1投稿が、誰か他のミチマヨの迷子予防につながります。</p>
        </div>
        <hr>
        <div id="section15" class="mx-4">
            <h6>15  見つけたい店舗が見つからない</h6>
            <p>まだ扉写真が投稿されていない可能性があります。ぜひあなたがひとりめの投稿者になって、後のミチマヨ（方向音痴）をお助けください。</p>
        </div>
        <hr>
        <div id="section16" class="mx-4">
            <h6>16  英語の投稿でもOK?</h6>
            <p>申し訳ありませんが、2019年3月現在は日本語のみのサポートとなっております。</p>
        </div>
        <hr>
        <div id="section17" class="mx-4">
            <h6>17  国外や地方の投稿もOK?</h6>
            <p>地方の写真をご投稿いただくのは大歓迎です！国外写真の場合、閲覧者がそんなに多くはならないかもしれませんが、ご投稿いただくのはまったく問題ありません。</p>
        </div>
        <hr>
        <div id="section18" class="mx-4">
            <h6>18  写真に人が写っていても大丈夫？</h6>
            <p>極力人が映っていない写真をご投稿いただくか、お顔が判別できるレベルの写真の場合、モザイクやスタンプで隠すなど、ご配慮頂ければ幸いです。</p>
        </div>
        <hr>
        <div id="section19" class="mx-4">
            <h6>19  ログインができない</h6>
            <p>「<a href="{{ url('password/reset') }}">パスワードを忘れた場合</a>」のボタンから再設定をお試しいただき、それでもログインできない場合は、 nwada@team-jokers.com 宛に発生状況をお知らせください。</p>
        </div>
        <hr>
        <div id="section20" class="mx-4">
            <h6>20  パスワードを忘れてしまった</h6>
            <p>ログイン画面の、「<a href="{{ url('password/reset') }}">パスワードを忘れた場合</a>」というリンクから手続きを行なってください。</p>
        </div>
        <hr>
        <div id="section21" class="mx-4">
            <h6>21  登録したアドレスを忘れてしまった</h6>
            <p>「パスワードを忘れた場合」のボタンを押してもメールがとどかない場合、再登録をお願いいたします。</p>
        </div>
        <hr>
        <div id="section22" class="mx-4">
            <h6>22  他の人にシェアしたいが、方法がわからない</h6>
            <p>扉詳細画面の最下部にあるシェアボタンを押すか、URLをコピーして直接貼り付けることでシェアが可能です。</p>
        </div>
        <hr>
        <div id="section23" class="mx-4">
            <h6>23  投稿内容は変更できるの？</h6>
            <p>自分が投稿した画像の、店名・住所・コメントのみ編集が可能です。</p>
        </div>
        <hr>
        <div id="section24" class="mx-4">
            <h6>24  グロリアって何？</h6>
            <p>運営会社である<a href="https://team-jokers.tokyo" target="_blank">合同会社JOKERS</a>のキャラクター。日本国内をお出かけして回るのが大好きなグロリアは、地図を読むのがちょっと苦手。みなさんと一緒に扉コレクションを充実させていきます。</p>
        </div>
        <hr>
        <div id="section25" class="mx-4">
            <h6>25  運営会社ってどんなところ？</h6>
            <p>準備中</p>
        </div>
        <hr>
        <div id="section26" class="mx-4">
            <h6>26  登録しているメールアドレスやユーザー名を変えたい</h6>
            <p>マイページの「登録情報を変更」ボタンから変更できます。</p>
        </div>
        <hr>
        <div id="section27" class="mx-4">
            <h6>27  店名があっているはずなのに検索結果に出てこないのはなぜ？</h6>
            <p>店名の表記はあっていますでしょうか？カタカナ、ローマ字など、店名表記を変えて検索をしてみてください。もしくは、まだ登録されていない店かもしれません。ここから要望をしてみてください。</p>
        </div>
        <hr>
        <div id="section28" class="mx-4">
            <h6>28  投稿の著作権って？</h6>
            <p>準備中</p>
        </div>
        <hr>
        <div id="section29" class="mx-4">
            <h6>29  他のサイトから写真を流用してもいい？</h6>
            <p>準備中</p>
        </div>
    </div>
</div>
<div class="btn-group d-flex fixed-bottom bg-white">
    <a href="{{ action('HomeController@index') }}" class="btn btn-outline-light w-100 text-warning py-3"><i class="fas fa-search mr-3"></i>SEARCH</a>
    <a href="#" class="upload_button btn btn-outline-light w-100 text-danger py-3"><i class="fas fa-camera mr-3"></i>POST</a>
</div>
{!! Form::open(['route' => ['entrances.store'], 'method' => 'post', 'files' => true, 'class' => 'entrance-form']) !!}
{!! Form::file('file', ['id' => 'file']) !!}
{!! Form::close() !!}
@endsection
@push('js')
<script>
$(function(){
    var headerHight = 65;
   $('a[href^="#section"]').click(function() {
    console.log('scrole');
      var speed = 400; // ミリ秒
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top-headerHight; // ※　-headerHightでズレの処理
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
});
</script>
@endpush