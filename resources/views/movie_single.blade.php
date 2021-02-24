@extends('master')
@section('content')
<div class="content">
    <br>

    <table>
        <tbody>
            <tr>

                <td width="auto" valign="middle" style="color:#888888;">
                    <span id="dle-speedbar"><span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/"
                                itemprop="url"><span itemprop="title">Movie-Search</span></a></span> » {{ $movie->name }}</span>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="full-wrap clearfix">
        <div id="dle-content">
            <article class="full">
                <header class="full-title">
                    <h1>{{ $movie->name }}</h1>
                </header>
                <div class="cols-mov clearfix ignore-select">
                    <div class="col-mov-left">
                        <div class="mov-img">
                            <img src="/img/{{ $movie->image }}" alt="{{ $movie->name }}"
                                style="border:1px solid #31A8CB;">

                            <div class="mov-m">{{ $movie->date }}</div>
                        </div>

                        <div class="full-soc" style="text-align:center; margin:20px 0;">

                        </div>
                    </div>
                    <div class="col-mov-right">

                        <div class="rates">
                            <div class="r-movie-search" data-label="#">7.61</div>

                            <div class="r-kp" data-label="КП">7.59</div>
                            <div class="r-imdb" data-label="IMDB">7.48</div>
                            @if($check==null and isset($user))
                            <div><a class='favorite' data-id='{{ $slug }}' href="#">В избранное</a></div>
                            @elseif (isset($user))
                            <div><a class='favorite' data-id='{{ $slug }}' href="#">В избранном</a></div>
                            @endif
                        </div>
                        <ul class="mov-list">

                            <li>
                                <div class="mov-label">Название:</div>
                                <div class="mov-desc">{{ $movie->name }}</div>
                            </li>
                            <br>
                            <li>
                                <div class="mov-label">Страна:</div>
                                <div class="mov-desc">﻿<a>{{ $movie->country }}</a></div>
                            </li>
                            <br>
                            <li>
                                <div class="mov-label">Время:</div>
                                <div class="mov-desc">{{ $movie->time }}</div>
                            </li>

                            <br>
                            <li>
                                <div class="mov-label">Жанр:</div>
                                <div class="mov-desc" style="color:#888888;"><a href="/jenre/{{ $movie->code }}">{{ $movie->jenre }}</a>
                            </li>
                            <br>
                            <li>
                                <div class="mov-label">Режиссер:</div>
                                <div class="mov-desc">﻿<a>{{ $movie->producer }}</a></div>
                            </li>

                            <li>
                                <div class="mov-label">Актеры:</div>
                                <div class="mov-desc">﻿<a>{{ $movie->acters }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="_mov-desc-text full-text clearfix" data-slice="200">
                    <strong style="text-transform:uppercase;">Описание:</strong> {{ $movie->description }}
                </div>
                <br>
                <br>
                <div style="text-align:center;">
                    <ins class="adsbygoogle" style="display:inline-block;width:550px;height:350px"
                        data-ad-client="ca-pub-6309004234808687" data-ad-slot="5821258697"
                        data-adsbygoogle-status="done"><ins id="aswift_1_expand"
                            style="display:inline-table;border:none;height:350px;margin:0;padding:0;position:relative;visibility:visible;width:550px;background-color:transparent;"
                            tabindex="0" title="Advertisement" aria-label="Advertisement"><ins id="aswift_1_anchor"
                                style="display:block;border:none;height:350px;margin:0;padding:0;position:relative;visibility:visible;width:550px;background-color:transparent;"><iframe
                                    id="aswift_1" name="aswift_1"
                                    style="left:0;position:absolute;top:0;border:0;width:550px;height:350px;"
                                    sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation"
                                    width="550" height="350" frameborder="0" src="ads_1.html" marginwidth="0"
                                    marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no"
                                    allowfullscreen="true" data-google-container-id="a!1"
                                    data-google-query-id="CIqah8260O0CFZmPmgodIg0NAg"
                                    data-load-complete="true"></iframe></ins></ins>
                    </ins>
                </div>
                <br><br>
                <br>
                <br>
                <div class="related tcarusel">
                    <h2 class="rel-title">Возможно, вам понравится:</h2>
                    <div class="tcarusel-scroll clearfix">
                        <div class="mov tcarusel-item">
                            <div class="mov-i img-box">
                                <img src="{{ asset('img/alone-2020.png') }}" alt="В одиночку (2020)">
                                <div class="mov-mask flex-col ps-link" data-link="#"><span class="fa fa-play"></span>
                                </div>

                                <div class="mov-m">2020</div>
                            </div>
                            <a class="mov-t nowrap" href="#" title="В одиночку (2020)">В одиночку (2020)</a>
                        </div>
                        <div class="mov tcarusel-item">
                            <div class="mov-i img-box">
                                <img src="{{ asset('img/out-of-time-2019.png') }}"
                                    onerror="this.src='/templates/HDrezka/images/noposter.png'"
                                    alt="Время на исходе (2019)">
                                <div class="mov-mask flex-col ps-link" data-link="#"><span class="fa fa-play"></span>
                                </div>

                                <div class="mov-m">2019</div>
                            </div>
                            <a class="mov-t nowrap" href="#" title="Время на исходе (2019)">Время на исходе (2019)</a>
                        </div>
                        <div class="mov tcarusel-item">
                            <div class="mov-i img-box">
                                <img src="{{ asset('img/noposter.png') }}" alt="Око фортуны (2019)">
                                <div class="mov-mask flex-col ps-link" data-link="#"><span class="fa fa-play"></span>
                                </div>

                                <div class="mov-m">2019</div>
                            </div>
                            <a class="mov-t nowrap" href="#"
                                title="Око фортуны (2019)">Око фортуны (2019)</a>
                        </div>
                        <div class="mov tcarusel-item">
                            <div class="mov-i img-box">
                                <img src="{{ asset('img/elov-2020.png') }}" alt="Стрельцов (2020)">
                                <div class="mov-mask flex-col ps-link" data-link="#"><span class="fa fa-play"></span>
                                </div>

                                <div class="mov-m">2020</div>
                            </div>
                            <a class="mov-t nowrap" href="#" title="Стрельцов (2020)">Стрельцов (2020)</a>
                        </div>
                        <div class="mov tcarusel-item">
                            <div class="mov-i img-box">
                                <img src="{{ asset('img/elov-2020.png') }}" alt="Семейка Крамб (2020)">
                                <div class="mov-mask flex-col ps-link" data-link="#"><span class="fa fa-play"></span>
                                </div>

                                <div class="mov-m">2020</div>
                            </div>
                            <a class="mov-t nowrap" href="#" title="Семейка Крамб (2020)">Семейка Крамб (2020)</a>
                        </div>
                        <div class="mov tcarusel-item">
                            <div class="mov-i img-box">
                                <img src="{{ asset('img/elov-2020.png') }}"
                                    onerror="this.src='/templates/HDrezka/images/noposter.png'"
                                    alt="Соник в кино (2020)">
                                <div class="mov-mask flex-col ps-link" data-link="#"><span class="fa fa-play"></span>
                                </div>

                                <div class="mov-m">2020</div>
                            </div>
                            <a class="mov-t nowrap" href="#" title="Соник в кино (2020)">Соник в кино (2020)</a>
                        </div>
                        <div class="mov tcarusel-item">
                            <div class="mov-i img-box">
                                <img src="{{ asset('img/elov-2020.png') }}" alt="Дорожные детективы (2019)">
                                <div class="mov-mask flex-col ps-link"
                                    data-link="#"><span
                                        class="fa fa-play"></span></div>

                                <div class="mov-m">2019</div>
                            </div>
                            <a class="mov-t nowrap" href="#" title="Дорожные детективы (2019)">Дорожные детективы
                                (2019)</a>
                        </div>
                        <div class="mov tcarusel-item">
                            <div class="mov-i img-box">
                                <img src="{{ asset('img/mosul-2019.png') }}" alt="Мосул (2019)">
                                <div class="mov-mask flex-col ps-link" data-link="#"><span class="fa fa-play"></span>
                                </div>

                                <div class="mov-m">2019</div>
                            </div>
                            <a class="mov-t nowrap" href="#" title="Мосул (2019)">Мосул (2019)</a>
                        </div>
                        <div class="mov tcarusel-item">
                            <div class="mov-i img-box">
                                <img src="{{ asset('img/noposter.png') }}" alt="Дожить до утра (2020)">
                                <div class="mov-mask flex-col ps-link"
                                    data-link="#"><span
                                        class="fa fa-play"></span></div>

                                <div class="mov-m">2020</div>
                            </div>
                            <a class="mov-t nowrap" href="#" title="Дожить до утра (2020)">Дожить до утра (2020)</a>
                        </div>
                        <div class="mov tcarusel-item">
                            <div class="mov-i img-box">
                                <img src="{{ asset('img/noposter.png') }}"
                                    onerror="this.src='/templates/HDrezka/images/noposter.png'"
                                    alt="Психологини на карантине (2020)">
                                <div class="mov-mask flex-col ps-link"
                                    data-link="#"><span
                                        class="fa fa-play"></span></div>

                                <div class="mov-m">2020</div>
                            </div>
                            <a class="mov-t nowrap" href="#"
                                title="Психологини на карантине (2020)">Психологини на карантине (2020)</a>
                        </div>
                        <div class="mov tcarusel-item">
                            <div class="mov-i img-box">
                                <img src="{{ asset('img/the-christmas-house-2020.png') }}"
                                    onerror="this.src='/templates/HDrezka/images/noposter.png'"
                                    alt="Рождественский дом (2020)">
                                <div class="mov-mask flex-col ps-link"
                                    data-link="#"><span
                                        class="fa fa-play"></span></div>

                                <div class="mov-m">2020</div>
                            </div>
                            <a class="mov-t nowrap" href="#"
                                title="Рождественский дом (2020)">Рождественский дом (2020)</a>
                        </div>
                        <div class="mov tcarusel-item">
                            <div class="mov-i img-box">
                                <img src="{{ asset('img/elov-2020.png') }}"
                                    onerror="this.src='/templates/HDrezka/images/noposter.png'"
                                    alt="Короли интриги (2019)">
                                <div class="mov-mask flex-col ps-link"
                                    data-link="#"><span
                                        class="fa fa-play"></span></div>

                                <div class="mov-m">2019</div>
                            </div>
                            <a class="mov-t nowrap" href="#"
                                title="Короли интриги (2019)">Короли интриги (2019)</a>
                        </div>
                    </div>
                    <div class="tcarusel-prev"><span class="fa fa-arrow-left"></span></div>
                    <div class="tcarusel-next"><span class="fa fa-arrow-right"></span></div>
                </div>
            </article>

            <div class="full-comms ignore-select" id="full-comms">
                @if(!(isset($user)))
                <div class="berrors">
                    <b>Информация</b><br>
                    Посетители, находящиеся в группе <b>Гости</b>, не могут оставлять комментарии к данной публикации.
                </div>
                @endif
                <!-- comment -->
                @if(isset($user))
                <form method="post" action="review/check" name="comments-form" id="comments-form">
                    @csrf
                    <div class="add-comm-form clearfix" id="add-comm-form" style="display: block;">

                        <div class="ac-title">Прокомментировать <span class="fa fa-chevron-down"></span></div>
                        @endif
                        @if(isset($user))
                        <div class="ac-av img-box" id="ac-av">

                            <img height="70" width="70" src="avatars/{{$user->image}}" class="mr-3 img-fluid"
                                alt="image">

                        </div>
                        @endif
                        <div class="ac-textarea">
                            <div class="bb-editor">
                                @if(isset($user))
                                <textarea name="comment" id="comment" cols="70" rows="10"></textarea>
                                @endif

                                @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="ac-protect">
                        </div>
                        <div class="sep-input clearfix">
                            <div class="ac-submit">
                                @if(isset($user))
                                <button name="submit" class="btn_comment" type="submit">Отправить</button>
                                @endif
                            </div>
                            @if(isset($user))
                        </div>
                        @endif
                    </div>
                    <input type="hidden" name="subaction" value="addcomment"><input type="hidden" name="name" id="name"
                        value="Feda993"><input type="hidden" name="mail" id="mail" value="">
                    <input type="hidden" name="movie_slug" id="movie_slug" value="{{ $movie->slug }}"><input
                        type="hidden" name="user_hash">
                </form>
                <!-- comment -->
                <div class="single-form-left">
                    @if (!empty($comments))
                    @foreach($comments as $el)
                    <div class="media py-5">
                        <img height="70" width="70" src="avatars/{{$el->image}}" class="mr-3 img-fluid" alt="image">
                        <div class="media-body mt-6">
                            <h5 class="mt-0 editContent" style="outline: none; cursor: inherit;">{{ $el->name }}</h5>
                            <span class="text-muted">
                                <small class="text-muted">2016-02-10</small>
                            </span>
                            <p class="mt-2 editContent">
                                {{ $el->comment }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>

                <!-- comment -->
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/movie_single.js') }}"></script>
@endsection