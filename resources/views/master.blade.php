<html lang="ru">
<!-- <head><link rel="preload"  as="script"><script src="{{ asset('js/osd.js') }}"></script><script type="text/javascript" src="js/integrator.js"></script><link rel="preload" as="script"><script type="text/javascript" src="{{ asset('js/integrator_1.js') }}"></script></head><body class="js">﻿
 -->

<meta charset="utf-8">
<title>Movie-Searh — Фильмы 2020. Новые фильмы и сериалы!</title>
<meta name="description"
    content="Желаете раскрасить свой досуг и погрузится в красочный Мир фильмов и сериалов - Movie-Searh Вам в этом поможет. У нас Вы сможете выбрать фильм или сериал по Вашим предпочтениям.">
<meta name="keywords" content="Movie-Searh,фильмы">
<link rel="search" type="application/opensearchdescription+xml" href="http://Movie-Searh.bet/index.php?do=opensearch"
    title="Movie-Searh — Фильмы 2020. Новые фильмы и сериалы!">
<link rel="canonical" href="http://Movie-Searh.bet/">
<link rel="alternate" type="application/rss+xml" title="Movie-Searh — Фильмы 2020. Новые фильмы и сериалы!"
    href="http://Movie-Searh.bet/rss.xml">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="favicon.ico">
<link href="{{ asset('css/bootstrap.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('css/styles.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('css/engine.css') }}" type="text/css" rel="stylesheet">
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/carusel.js') }}"></script>
<script src="{{ asset('js/libs.js') }}"></script>

<div class="wrap">
    <div class="main center">
        <header class="header" id="header">
            <a href="/" class="logotype" title="На главную">Movie-Searh</a>
            <div class="search-box">
                @if (isset($code))
                <form id="quicksearch" method="get" action="/jenre/{{ $code }}">
                    @else
                    <form id="quicksearch" method="get" action="/">
                        @endif
                        <input type="hidden" name="do" value="search">
                        <input type="hidden" name="subaction" value="search">
                        <div class="search-inner">
                            <input id="search" name="search" placeholder="Поиск..." type="text">
                            <button type="submit" title="Найти"><span class="fa fa-search"></span></button>
                        </div>
                    </form>
            </div>
            @if(isset($user))
            <a href="/profile">
                <div class="show-login img-box" id="loginbtn"><span class="fa fa-user"></span></div>
            </a>
            <div class="show-menu"><span class="fa fa-bars"></span></div>
            @else
            <a href="/login">
                <div class="btn_login">Вход</div>
            </a>
            <a href="/register">
                <div class="btn_register">Регистрация</div>
            </a>
            @endif

        </header>
        <div class="related tcarusel carou-top">

            <h2 class="rel-title">Новинки</h2>
            <div class="tcarusel-scroll clearfix">
                <!-- Las update -->
                @foreach($last_add as $movie)
                <div class="mov tcarusel-item">
                    <div class="mov-i img-box">
                        <img src="/img/{{ $movie->image }}" alt="{{ $movie->name }}">
                        <div class="mov-mask flex-col ps-link">
                        </div>
                        <div class="mov-m">{{ $movie->date }}</div>
                    </div>
                    <a class="mov-t nowrap" href="/{{ $movie->slug }}"
                        title="{{ $movie->name }}">{{ $movie->name }}</a>
                </div>
                @endforeach
                <!-- Las update -->
            </div>

            <div class="tcarusel-prev"><span class="fa fa-arrow-left"></span></div>
            <div class="tcarusel-next"><span class="fa fa-arrow-right"></span></div>
        </div>


        <div class="cols clearfix" id="cols">
            <!-- content -->
            @yield('content')

            <aside class="sidebar">
                <div class="side-b">
                    <div class="side-t ic-l decor"><span class="fa fa-film"></span>Жанры</div>
                    <nav class="side-c nav">
                        <ul class="flex-row">
                            <ul>
                                <li><a href="/jenre/boeviki/">Боевики</a></li>
                                <li><a href="/jenre/kriminal/">Криминал</a></li>
                                <li><a href="/jenre/trillery/">Триллеры</a></li>
                                <li><a href="/jenre/dramy/">Драмы</a></li>
                                <li><a href="/jenre/komedii/">Комедии</a></li>
                                <li><a href="/jenre/melodramy/">Мелодрамы</a></li>
                                <li><a href="/jenre/semejnye/">Семейные</a></li>
                                <li><a href="/jenre/prikljuchenija/">Приключения</a></li>
                                <li><a href="/jenre/vesterny/">Вестерны</a></li>
                                <li><a href="/jenre/uzhasy/">Ужасы</a></li>
                                <li><a href="/jenre/fantastika/">Фантастика</a></li>
                                <li><a href="/jenre/detektivy/">Детективы</a></li>
                                <li><a href="/jenre/fjentezi/">Фэнтези</a></li>
                                <li><a href="/jenre/biograficheskie/">Биографические</a></li>
                                <li><a href="/jenre/istoricheskie/">Исторические</a></li>
                                <li><a href="/jenre/sportivnye/">Спортивные</a></li>
                                <li><a href="/jenre/mjuzikly/">Мюзиклы</a></li>
                                <li><a href="/jenre/dokumentalnye/">Документальные</a></li>
                                <li><a href="/jenre/voennye/">Военные</a></li>
                                <li><a href="/jenre/zarubezhnye/">Зарубежные</a></li>
                            </ul>
                        </ul>
                    </nav>
                </div>
                <div class="side-b">
                    <div class="side-t ic-l decor"><span class="fa fa-caret-square-o-right"></span>Фильмы</div>
                    <div class="side-c flex-row">
                        <!-- Movie sidebar 1 -->
                        <a class="mov-side" href="#">
                            <div class="mov-side-img img-box">
                                <img src="{{ asset('img/complete-strangers-2020.png') }}"
                                    onerror="this.src='/templates/Movie-Searh/images/noposter.png'"
                                    alt="Незнакомцы (2020)">

                                <div class="mov-m">2020</div>
                            </div>
                            <div class="mov-side-title">Незнакомцы (2020)</div>
                        </a>
                        <!-- Movie sidebar 1 -->
                        <a class="mov-side" href="#">
                            <div class="mov-side-img img-box">
                                <img src="{{ asset('img/complete-strangers-2020.png') }}"
                                    onerror="this.src='/templates/Movie-Searh/images/noposter.png'"
                                    alt="Незнакомцы (2020)">

                                <div class="mov-m">2020</div>
                            </div>
                            <div class="mov-side-title">Незнакомцы (2020)</div>
                        </a>
                        <!-- Movie sidebar 1 -->
                    </div>
                </div>

                <div class="side-b">
                    <div class="side-t ic-l decor"><span class="fa fa-caret-square-o-right"></span>Сериалы</div>
                    <div class="side-c flex-row">
                        <!-- Movie sidebar 2 -->
                        <a class="mov-side" href="#">
                            <div class="mov-side-img img-box">
                                <img src="{{ asset('img/turn-up-charlie_2019.jpg') }}"
                                    onerror="this.src='/templates/Movie-Searh/images/noposter.png'"
                                    alt="Сделай погромче, Чарли (2019)">
                                <div class="mov-m">2019</div>

                            </div>
                            <div class="mov-side-title">Сделай погромче, Чарли (2019)</div>
                        </a>
                        <!-- Movie sidebar 2 -->
                        <a class="mov-side" href="#">
                            <div class="mov-side-img img-box">
                                <img src="{{ asset('img/polnoe-pogghenie-2020.png') }}"
                                    onerror="this.src='/templates/Movie-Searh/images/noposter.png'"
                                    alt="Марианна (2019)">
                                <div class="mov-m">2019</div>

                            </div>
                            <div class="mov-side-title">Марианна (2019)</div>
                        </a>
                        <!-- Movie sidebar 2 -->

                    </div>
                </div>

                <div class="side-b">
                    <div class="side-t ic-l decor"><span class="fa fa-caret-square-o-right"></span>Мультфильмы</div>
                    <div class="side-c flex-row">
                        <!-- Movie sidebar 3 -->
                        <a class="mov-side"
                            href="#">
                            <div class="mov-side-img img-box">
                                <img src="{{ asset('img/noposter.png') }}"
                                    onerror="this.src='/templates/Movie-Searh/images/noposter.png'"
                                    alt="Вся правда о медведях: Фильм (2020)">

                                <div class="mov-m">2020</div>
                            </div>
                            <div class="mov-side-title">Вся правда о медведях: Фильм (2020)</div>
                        </a>
                        <!-- Movie sidebar 3 -->
                        <a class="mov-side" href="#">
                            <div class="mov-side-img img-box">
                                <img src="{{ asset('img/polnoe-pogghenie-2020.png') }}"
                                    onerror="this.src='/templates/Movie-Searh/images/noposter.png'"
                                    alt="Полное погружение (2020)">

                                <div class="mov-m">2020</div>
                            </div>
                            <div class="mov-side-title">Полное погружение (2020)</div>
                        </a>
                        <!-- Movie sidebar 3 -->
                    </div>
                </div>
            </aside>
        </div>

        <footer class="footer">
            <ul class="bot-menu clearfix" style="padding-top:25px;">
                <li style="margin-right:0px;">2020 ©</li>
                <li style="margin-right:25px;"><a class="footer_logo" href="/">Movie-Searh</a></li><a
                    class="footer_logo" href="/">
                </a>
                <li><a class="footer_logo" href="/"></a><a href="/?do=feedback">Правообладателям</a></li>
                <li><a href="/?do=feedback">Обратная связь</a></li>
            </ul>
        </footer>
    </div>
</div>

</html>