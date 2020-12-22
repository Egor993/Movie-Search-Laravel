@extends('master')
@section('content')
			<div class="content">
				<br>
				
				<table>
					<tbody><tr>
						<td width="135" valign="middle">
							<div class="main-title clearfix">
								<div class="grid-select clearfix" id="grid-select">
									<span data-type="grid-list"><span class="fa fa-reorder"></span></span>
									<span data-type="grid-thumb" class="current"><span class="fa fa-th"></span></span>
								</div>
							</div>
						</td>
						<td width="auto" valign="middle" style="color:#888888;">
							<span id="dle-speedbar"><span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="#" itemprop="url"><span itemprop="title">Movie-Search</span></a></span> » <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="http://hdrezka.bet/filmy/" itemprop="url"><span itemprop="title">Фильмы</span></a></span> » Обещание Санты (2020)</span>
						</td>
					</tr>
				</tbody></table>
				
					<div class="full-wrap clearfix">
						<div id="dle-content"><article class="full">
	<header class="full-title">
		<h1>{{ $movies->name }}</h1>
	</header>
	<div class="cols-mov clearfix ignore-select">
		<div class="col-mov-left">
			<div class="mov-img">
                <img src="{{ asset('img/santas-promise-2020.png') }}" alt="Обещание Санты (2020)" style="border:1px solid #31A8CB;">
				
				<div class="mov-m">2020</div>
			</div>
			
				<table style="background-color:#F2F2F2; margin:20px 0; border:1px solid #D6D6D6;">
					<tbody><tr>
						<td width="33%"></td>
						<td width="33%"><div style="padding:10px 0;"><div id="ratig-layer-22779">
	<div class="rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		<ul class="unit-rating">
		<li class="current-rating" style="width:80%;">80</li>
		<li><a href="#" title="Плохо" class="r1-unit" onclick="doRate('1', '22779'); return false;">1</a></li>
		<li><a href="#" title="Приемлемо" class="r2-unit" onclick="doRate('2', '22779'); return false;">2</a></li>
		<li><a href="#" title="Средне" class="r3-unit" onclick="doRate('3', '22779'); return false;">3</a></li>
		<li><a href="#" title="Хорошо" class="r4-unit" onclick="doRate('4', '22779'); return false;">4</a></li>
		<li><a href="#" title="Отлично" class="r5-unit" onclick="doRate('5', '22779'); return false;">5</a></li>
		</ul><meta itemprop="itemReviewed" content="Обещание Санты (2020)"><meta itemprop="worstRating" content="1"><meta itemprop="ratingCount" content="2112"><meta itemprop="ratingValue" content="4"><meta itemprop="bestRating" content="5">
	</div>
</div></div></td>
						<td width="33%"></td>
					</tr>
				</tbody></table>
			
			<div class="full-soc" style="text-align:center; margin:20px 0;">
<!-- 				<script src="js/es5-shims.min.js"></script>
				<script src="js/share.js"></script> -->
				
			</div>
		</div>
		<div class="col-mov-right">
			
				<div class="rates">
					<div class="r-movie-search" data-label="#">7.61</div>
					
					<div class="r-kp" data-label="КП">7.59</div>
					<div class="r-imdb" data-label="IMDB">7.48</div>
					<div><a href="/favorite_add/{{ $movies->slug }}">В избранное</div>
				</div>
				<ul class="mov-list">
					
					<li><div class="mov-label">Название:</div> <div class="mov-desc">Обещание Санты</div></li>
					
					<li><div class="mov-label">Оригинал:</div> <div class="mov-desc">Santas Promise</div></li>
					
					<br>
					
					
					
					<li><div class="mov-label">Страна:</div> <div class="mov-desc">﻿<a href="/xfsearch/Страна+США">США</a></div></li>
					<br>
					
					
					
					<li><div class="mov-label">Время:</div> <div class="mov-desc">92 мин.</div></li>
					
					<br>
					<li><div class="mov-label">Жанр:</div> <div class="mov-desc" style="color:#888888;"><a href="#">Фильмы</a>, <a href="#">Фильмы</a>, <a href="#">Мелодрамы</a></div></li>
					
					<li><div class="mov-label">Из серии:</div> <div class="mov-desc">﻿<a href="/xfsearch/Фильм+США+2020+года">Фильм США 2020 года</a>, <a href="/xfsearch/Фильм+Фильмы+2020+года">Фильм Фильмы 2020 года</a>, <a href="/xfsearch/Фильм+Мелодрама+2020+года,">Фильм Мелодрама 2020 года,</a></div></li>
					<br>
					
					<li><div class="mov-label">Режиссер:</div> <div class="mov-desc">﻿<a href="/xfsearch/Режиссер+Билл+МакАдамс+мл.">Билл МакАдамс мл.</a></div></li>
					
					<li><div class="mov-label">Актеры:</div> <div class="mov-desc">﻿<a href="/xfsearch/Актер+Дженни+МакМанус">Дженни МакМанус</a>, <a href="/xfsearch/Актер+Дэниэл+Бритт">Дэниэл Бритт</a>, <a href="/xfsearch/Актер+Уилльям+Кросс">Уилльям Кросс</a>, <a href="/xfsearch/Актер+Кэти+Митчелл">Кэти Митчелл</a>, <a href="/xfsearch/Актер+Джош+Катавик">Джош Катавик</a></div></li>
				</ul>
		</div>
	</div>
	<div class="_mov-desc-text full-text clearfix" data-slice="200">
		<strong style="text-transform:uppercase;">Описание:</strong> Лёжа на смертном одре, богатый дядюшка просит Ника выполнить его последнюю волю - раздать всё его состояние нуждающимся, не прикарманив себе ни цента. Ник соглашается выполнить его просьбу, хотя сам только вышел из тюрьмы и отчаянно хочет снова встать на ноги. Однако после смерти дяди на его наследство находятся желающие в лице злобного братца Ника.
	</div>
	<br>
	<br>
	<div style="text-align:center;">
		<ins class="adsbygoogle" style="display:inline-block;width:550px;height:350px" data-ad-client="ca-pub-6309004234808687" data-ad-slot="5821258697" data-adsbygoogle-status="done"><ins id="aswift_1_expand" style="display:inline-table;border:none;height:350px;margin:0;padding:0;position:relative;visibility:visible;width:550px;background-color:transparent;" tabindex="0" title="Advertisement" aria-label="Advertisement"><ins id="aswift_1_anchor" style="display:block;border:none;height:350px;margin:0;padding:0;position:relative;visibility:visible;width:550px;background-color:transparent;"><iframe id="aswift_1" name="aswift_1" style="left:0;position:absolute;top:0;border:0;width:550px;height:350px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="550" height="350" frameborder="0" src="ads_1.html" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" data-google-container-id="a!1" data-google-query-id="CIqah8260O0CFZmPmgodIg0NAg" data-load-complete="true"></iframe></ins></ins></ins>
<!-- 		<script>
			 (adsbygoogle = window.adsbygoogle || []).push({});
		</script> -->
	</div>
	<br><br><!-- <script>
<!--
if(typeof dle_poll_voted !== "undefined"){
    dle_poll_voted[22779] = 0;
}
else{
	var dle_poll_voted = new Array();
    dle_poll_voted[22779] = 0;
}

</script> -->
	<br>
	<br>
	<div class="related tcarusel">
        <h2 class="rel-title">Возможно, вам понравится:</h2>
		<div class="tcarusel-scroll clearfix">
			<div class="mov tcarusel-item">
	<div class="mov-i img-box">
		<img src="{{ asset('img/alone-2020.png') }}" alt="В одиночку (2020)">
		<div class="mov-mask flex-col ps-link" data-link="#"><span class="fa fa-play"></span></div>
        
        <div class="mov-m">2020</div>
	</div>
	<a class="mov-t nowrap" href="#" title="В одиночку (2020)">В одиночку (2020)</a>
</div><div class="mov tcarusel-item">
	<div class="mov-i img-box">
		<img src="{{ asset('img/out-of-time-2019.png') }}" onerror="this.src='/templates/HDrezka/images/noposter.png'" alt="Время на исходе (2019)">
		<div class="mov-mask flex-col ps-link" data-link="#"><span class="fa fa-play"></span></div>
        
        <div class="mov-m">2019</div>
	</div>
	<a class="mov-t nowrap" href="#" title="Время на исходе (2019)">Время на исходе (2019)</a>
</div><div class="mov tcarusel-item">
	<div class="mov-i img-box">
		<img src="{{ asset('img/noposter.png') }}" alt="Око фортуны (2019)">
		<div class="mov-mask flex-col ps-link" data-link="#"><span class="fa fa-play"></span></div>
        
        <div class="mov-m">2019</div>
	</div>
	<a class="mov-t nowrap" href="http://hdrezka.bet/filmy/21701-forutuna-no-hitomi-2019.html" title="Око фортуны (2019)">Око фортуны (2019)</a>
</div><div class="mov tcarusel-item">
	<div class="mov-i img-box">
		<img src="{{ asset('img/elov-2020.png') }}" alt="Стрельцов (2020)">
		<div class="mov-mask flex-col ps-link" data-link="#"><span class="fa fa-play"></span></div>
        
        <div class="mov-m">2020</div>
	</div>
	<a class="mov-t nowrap" href="#" title="Стрельцов (2020)">Стрельцов (2020)</a>
</div><div class="mov tcarusel-item">
	<div class="mov-i img-box">
		<img src="{{ asset('img/elov-2020.png') }}" alt="Семейка Крамб (2020)">
		<div class="mov-mask flex-col ps-link" data-link="#"><span class="fa fa-play"></span></div>
        
        <div class="mov-m">2020</div>
	</div>
	<a class="mov-t nowrap" href="#" title="Семейка Крамб (2020)">Семейка Крамб (2020)</a>
</div><div class="mov tcarusel-item">
	<div class="mov-i img-box">
		<img src="{{ asset('img/elov-2020.png') }}" onerror="this.src='/templates/HDrezka/images/noposter.png'" alt="Соник в кино (2020)">
		<div class="mov-mask flex-col ps-link" data-link="#"><span class="fa fa-play"></span></div>
        
        <div class="mov-m">2020</div>
	</div>
	<a class="mov-t nowrap" href="#" title="Соник в кино (2020)">Соник в кино (2020)</a>
</div><div class="mov tcarusel-item">
	<div class="mov-i img-box">
		<img src="{{ asset('img/elov-2020.png') }}" alt="Дорожные детективы (2019)">
		<div class="mov-mask flex-col ps-link" data-link="http://hdrezka.bet/filmy/21902-ppaengban-2019.html"><span class="fa fa-play"></span></div>
        
        <div class="mov-m">2019</div>
	</div>
	<a class="mov-t nowrap" href="#" title="Дорожные детективы (2019)">Дорожные детективы (2019)</a>
</div><div class="mov tcarusel-item">
	<div class="mov-i img-box">
		<img src="{{ asset('img/mosul-2019.png') }}" alt="Мосул (2019)">
		<div class="mov-mask flex-col ps-link" data-link="#"><span class="fa fa-play"></span></div>
        
        <div class="mov-m">2019</div>
	</div>
	<a class="mov-t nowrap" href="#" title="Мосул (2019)">Мосул (2019)</a>
</div><div class="mov tcarusel-item">
	<div class="mov-i img-box">
		<img src="{{ asset('img/noposter.png') }}" alt="Дожить до утра (2020)">
		<div class="mov-mask flex-col ps-link" data-link="http://hdrezka.bet/filmy/21643-survive-the-night-2020.html"><span class="fa fa-play"></span></div>
        
        <div class="mov-m">2020</div>
	</div>
	<a class="mov-t nowrap" href="#" title="Дожить до утра (2020)">Дожить до утра (2020)</a>
</div><div class="mov tcarusel-item">
	<div class="mov-i img-box">
		<img src="{{ asset('img/noposter.png') }}" onerror="this.src='/templates/HDrezka/images/noposter.png'" alt="Психологини на карантине (2020)">
		<div class="mov-mask flex-col ps-link" data-link="http://hdrezka.bet/filmy/21751-1597077474-2020.html"><span class="fa fa-play"></span></div>
        
        <div class="mov-m">2020</div>
	</div>
	<a class="mov-t nowrap" href="http://hdrezka.bet/filmy/21751-1597077474-2020.html" title="Психологини на карантине (2020)">Психологини на карантине (2020)</a>
</div><div class="mov tcarusel-item">
	<div class="mov-i img-box">
		<img src="{{ asset('img/the-christmas-house-2020.png') }}" onerror="this.src='/templates/HDrezka/images/noposter.png'" alt="Рождественский дом (2020)">
		<div class="mov-mask flex-col ps-link" data-link="http://hdrezka.bet/filmy/22752-the-christmas-house-2020.html"><span class="fa fa-play"></span></div>
        
        <div class="mov-m">2020</div>
	</div>
	<a class="mov-t nowrap" href="http://hdrezka.bet/filmy/22752-the-christmas-house-2020.html" title="Рождественский дом (2020)">Рождественский дом (2020)</a>
</div><div class="mov tcarusel-item">
	<div class="mov-i img-box">
		<img src="{{ asset('img/elov-2020.png') }}" onerror="this.src='/templates/HDrezka/images/noposter.png'" alt="Короли интриги (2019)">
		<div class="mov-mask flex-col ps-link" data-link="http://hdrezka.bet/filmy/21281-koroli-intrigi-2019.html"><span class="fa fa-play"></span></div>
        
        <div class="mov-m">2019</div>
	</div>
	<a class="mov-t nowrap" href="http://hdrezka.bet/filmy/21281-koroli-intrigi-2019.html" title="Короли интриги (2019)">Короли интриги (2019)</a>
</div>
		</div>	
		<div class="tcarusel-prev"><span class="fa fa-arrow-left"></span></div>
		<div class="tcarusel-next"><span class="fa fa-arrow-right"></span></div>
	</div>
</article>

<div class="full-comms ignore-select" id="full-comms">
	<div class="berrors">
	<b>Информация</b><br>
	Посетители, находящиеся в группе <b>Гости</b>, не могут оставлять комментарии к данной публикации.
</div>
<!-- comment -->
<form method="post" action="review/check" name="comments-form" id="comments-form">
	@csrf
	<div class="add-comm-form clearfix" id="add-comm-form" style="display: block;">

	<div class="ac-title">Прокомментировать <span class="fa fa-chevron-down"></span></div>
	<div class="ac-av img-box" id="ac-av"></div>
	<div class="ac-textarea"><div class="bb-editor">
	<textarea name="comment" id="comment" cols="70" rows="10"></textarea>
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
<div class="ac-submit"><button name="submit" type="submit">Отправить</button></div>

</div>
	
</div>
		<input type="hidden" name="subaction" value="addcomment"><input type="hidden" name="name" id="name" value="Feda993"><input type="hidden" name="mail" id="mail" value="">
		<input type="hidden" name="movie_slug" id="movie_slug" value="{{ $movies->slug }}"><input type="hidden" name="user_hash"></form>
<!-- comment -->
<div class="single-form-left">
@foreach($comments as $el)
<div class="media py-5">
    <img height="70" width="70" src="img/{{$el->image}}" class="mr-3 img-fluid" alt="image">
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
</div>

<!-- comment -->	
</div></div>
					</div>
				
				
			</div>		
@endsection