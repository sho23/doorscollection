<div class="fixed-top">
    <header class="px-1">
        <ul class="row">
            <li class="col-2 pl-4 bars-menu"><a href="#sidr" id="simple-menu"><i class="fas fa-bars text-light"></i></a></li>
            <li class="col-5 header-logo"><a href="{{ action('HomeController@index') }}"><img src="{{ asset('image/logo_small.png') }}" alt="" hight="27px" width="107px"></a></li>
            <li class="col-5 text-right pr-4 dropdown">
                <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="p-2 badge badge-pill badge-warning"><i class="fas fa-bell text-light"></i></span></a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <h6 class="dropdown-header">お知らせ一覧</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><span>現在新着のお知らせはありません</span></a>
                </div>
                <a href="{{ action('EntrancesController@mypage') }}"><span class="ml-2 p-2 badge badge-pill badge-warning"><i class="fas fa-user-alt text-light"></i></span></a>
            </li>
        </ul>
    </header>
</div>