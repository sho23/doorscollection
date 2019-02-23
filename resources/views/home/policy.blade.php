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
<div class="card usage pb-4 mb-5">
    <div class="row">
        <div class="m-4">
            <h5>プライバシーポリシー</h5>
            <p>合同会社JOKERS（以下「当社」といいます。）は、当社の提供するサービス（以下「本サービス」といいます。）における、ユーザーについての個人情報を含む利用者情報の取扱いについて、以下のとおりプライバシーポリシー（以下「本ポリシー」といいます。）を定めます。</p>
        </div>
        <div class="mx-4">
            <h6>【1.収集する利用者情報および収集方法】</h6>
            <p>　本ポリシーにおいて、「利用者情報」とは、ユーザーの識別に係る情報、通信サービス上の行動履歴、その他ユーザーのスマートフォン、PC等の端末においてユーザーまたはユーザーの端末に関連して生成または蓄積された情報であって、本ポリシーに基づき当社が収集するものを意味するものとします。
                本サービスにおいて当社が収集する利用者情報は、その収集方法に応じて、以下のようなものとなります。</p>
            <p><strong>(1)ユーザーからご提供いただく情報</strong><br>ユーザーが本サービスを利用するために、ご提供いただく情報は以下のとおりです。</p>
            <ul>
                <li>氏名</li>
                <li>メールアドレス</li>
                <li>生年月日</li>
                <li>クレジットカード情報写真</li>
                <li>その他当社が定める入力フォームにユーザーが入力する情報</li>
            </ul>
            <p><strong>(2)ユーザーが本サービスの利用において、他のサービスと連携を許可することにより、当該他のサービスからご提供いただく情報</strong></p>
            <p>ユーザーが、本サービスを利用するにあたり、ソーシャルネットワークサービス等の外部サービスとの連携を許可した場合には、その許可の際にご同意いただいた内容に基づき、以下の情報を当該外部サービスから収集します。</p>
            <ul>
                <li>当該外部サービスでユーザーが利用するID</li>
                <li>その他当該外部サービスのプライバシー設定によりユーザーが連携先に開示を認めた情報</li>
            </ul>
            <p><strong>(3)ユーザーが本サービスを利用するにあたって、当社が収集する情報</strong></p>
            <p>当社は、本サービスへのアクセス状況やそのご利用方法に関する情報を収集することがあります。これには以下の情報が含まれます。</p>
            <ul>
                <li>端末情報</li>
                <li>ログ情報</li>
                <li>Cookie及び匿名ID</li>
                <li>位置情報</li>
            </ul>
        </div>
        <hr>
        <div class="mx-4">
            <h6>【2.利用目的】</h6>
            <p><strong>2-1.利用者情報は、2-2に定めるとおり本サービスの提供のために利用されるほか、2-3に定めるとおり、その他の目的にも利用される場合があります。</strong></p>
            <p><strong>2-2.本サービスのサービス提供にかかわる利用者情報の具体的な利用目的は以下のとおりです。</strong></p>
            <ul>
                <li>(1)本サービスに関するご案内、お問い合せ等への対応のため</li>
                <li>(2)本サービスに関する当社の規約、ポリシー等（以下「規約等」といいます。）に違反する行為に対する対応のため</li>
                <li>(3)本サービスに関する規約等の変更などを通知するため</li>
                <li>(4)上記の利用目的に付随する利用目的のため</li>
            </ul>
            <p><strong>2-3.上記2-2以外の利用目的と対応する利用者情報の項目は以下のとおりです。</strong></p>
            <p>(1)当社のサービスに関連して、個人を識別できない形式に加工した統計データを作成するため</p>
            <ul>
                <li>端末情報</li>
                <li>ログ情報</li>
                <li>Cookie及び匿名ID</li>
                <li>位置情報</li>
            </ul>
            <p>(2)当社または第三者の広告の配信または表示のため</p>
            <ul>
                <li>端末情報</li>
                <li>ログ情報</li>
                <li>Cookie及び匿名ID</li>
                <li>位置情報</li>
            </ul>
            <p>(3)その他マーケティングに利用するため</p>
            <ul>
                <li>氏名</li>
                <li>メールアドレス</li>
                <li>生年月日</li>
                <li>その他当社が定める入力フォームにユーザーが入力する情報</li>
            </ul>
        </div>
        <div class="mx-4">
            <h6>【3.通知・公表または同意取得の方法、利用中止要請の方法】</h6>
            <p><strong>3-1.以下の利用者情報については、その収集が行われる前にユーザーの同意を得るものとします。</strong></p>
            <ul>
                <li>(1)端末情報</li>
                <li>(2)位置情報</li>
            </ul>
            <p><strong>3-2.ユーザーは、本サービスの所定の設定を行うことにより、利用者情報の全部または一部についてその利用の停止を求めることができ、この場合、当社は速やかに、当社の定めるところに従い、その利用を停止します。なお利用者情報の項目によっては、その収集または利用が本サービスの前提となるため、当社所定の方法により本サービスを退会した場合に限り、当社はその収集を停止します。</strong></p>
        </div>
        <div class="mx-4">
            <h6>【4.第三者提供】</h6>
            <p>　当社は、利用者情報のうち、個人情報については、個人情報保護法その他の法令に基づき開示が認められる場合を除くほか、あらかじめユーザーの同意を得ないで、第三者に提供しません。但し、次に掲げる場合はこの限りではありません。</p>
            <ul>
                <li>(1) 当社が利用目的の達成に必要な範囲内において個人情報の取扱いの全部または一部を委託する場合</li>
                <li>(2) 合併その他の事由による事業の承継に伴って個人情報が提供される場合</li>
                <li>(3) 第4項の定めに従って、情報収集モジュール提供者へ個人情報が提供される場合</li>
                <li>(4) 国の機関もしくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって、ユーザーの同意を得ることによって当該事務の遂行に支障を及ぼすおそれがある場合</li>
                <li>(5) その他、個人情報保護法その他の法令で認められる場合</li>
            </ul>
        </div>
        <div class="mx-4">
            <h6>【5.個人情報の開示】</h6>
            <p>　当社は、ユーザーから、個人情報保護法の定めに基づき個人情報の開示を求められたときは、ユーザーご本人からのご請求であることを確認の上で、ユーザーに対し、遅滞なく開示を行います（当該個人情報が存在しないときにはその旨を通知いたします。）。
　但し、個人情報保護法その他の法令により、当社が開示の義務を負わない場合は、この限りではありません。なお、個人情報の開示につきましては、手数料（1件あたり1,000円）を頂戴しておりますので、あらかじめ御了承ください。</p>
        </div>
        <div class="mx-4">
            <h6>【6.個人情報の訂正及び利用停止等】</h6>
            <p>6-1.当社は、ユーザーから、(1)個人情報が真実でないという理由によって個人情報保護法の定めに基づきその内容の訂正を求められた場合、及び(2)あらかじめ公表された利用目的の範囲を超えて取り扱われているという理由または偽りその他不正の手段により収集されたものであるという理由により、個人情報保護法の定めに基づきその利用の停止を求められた場合には、ユーザーご本人からのご請求であることを確認の上で遅滞なく必要な調査を行い、その結果に基づき、個人情報の内容の訂正または利用停止を行い、その旨をユーザーに通知します。
　なお、合理的な理由に基づいて訂正または利用停止を行わない旨の決定をしたときは、ユーザーに対しその旨を通知いたします。</p>
            <p>6-2.当社は、ユーザーから、ユーザーの個人情報について消去を求められた場合、当社が当該請求に応じる必要があると判断した場合は、ユーザーご本人からのご請求であることを確認の上で、個人情報の消去を行い、その旨をユーザーに通知します。</p>
            <p>6-3.個人情報保護法その他の法令により、当社が訂正等または利用停止等の義務を負わない場合は、前2項の規定は適用されません。</p>
        </div>
        <div class="mx-4">
            <h6>【7.お問い合わせ窓口】</h6>
            <p>　ご意見、ご質問、苦情のお申出その他利用者情報の取扱いに関するお問い合わせは、下記の窓口までお願い致します。</p>
            <p>住所：〒225-0003 神奈川県横浜市青葉区新石川２丁目１４−１６<br>合同会社JOKERS　担当部署：戦略企画推進室</p>
            
            <p>Email：nwada@team-jokers.com</p>
        </div>
        <div class="mx-4">
            <h6>【8.プライバシーポリシーの変更手続き】</h6>
            <p>　当社は、利用者情報の取扱いに関する運用状況を適宜見直し、継続的な改善に努めるものとし、必要に応じて、本ポリシーを変更することがあります。変更した場合には、本サービス上における画面表示にてユーザーに通知いたします。但し、法令上ユーザーの同意が必要となるような内容の変更の場合は、当社所定の方法でユーザーの同意を得るものとします。</p>
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
        $('.upload_button').click(function() {
            $('#file').click();
            return false;
        });
       $('#file').change(function() {
            $('.entrance-form').submit();
        });
        $(function() {
            $('#simple-menu').sidr();
        });
    </script>
@endpush