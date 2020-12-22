@extends('master')
@section('content')
			<div class="content">
				<br>
				
				<table style="margin-bottom:20px;">
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
							<span><span id="dle-speedbar"><span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="#" itemprop="url"><span itemprop="title">Movie-Search</span></a></span></span></span> » Новые фильмы и сериалы!
						</td>
					</tr>
				</tbody>
			</table>
				
				
					<div class="floaters clearfix grid grid-thumb" data-view="grid-thumb" id="grid">
						<div id="dle-content">

<!-- Main Movie -->
@foreach($movies as $movie)
<div class="mov clearfix">
	<div class="mov-i img-box">
		<img src="img/{{ $movie->image }}" alt="Обещание Санты (2020)">
		<div class="mov-mask flex-col ps-link" data-link="/{{ $movie->slug }}"><span class="fa fa-play"></span></div>
			
			<div class="mov-m">2020</div>
			
	</div>
	
		<div class="movie-text">
			<div style="float:right;">
				<div class="rating">
		<ul class="unit-rating">
		<li class="current-rating" style="width:80%;">80</li>
		</ul>
</div>
				<div style="clear:both;"></div>
			</div>
		</div>
	
	<h2><a class="mov-t nowrap" href="/{{ $movie->slug }}" title="{{ $movie->name }}">{{ $movie->name }}</a></h2>
	<div class="movie-text">
		
		
			<ul class="movie-lines">
				<li><div class="ml-label">Жанр:</div> <div class="ml-desc" style="color:#888888; font-weight:bold;"><a href="#">Фильмы</a>, <a href="#">Фильмы</a>, <a href="#">Мелодрамы</a></div></li>
				<li><div class="ml-label">Страна:</div> <div class="ml-desc">США</div></li>
				<br>
				
				
				<li><div class="ml-label">Время: </div> <div class="ml-desc">92 мин.</div></li>
				<br>
				<li><div class="ml-label">Режиссер: </div> <div class="ml-desc">Билл МакАдамс мл.</div></li>
				<li><div class="ml-label">Актеры:</div> <div class="ml-desc">Дженни МакМанус, Дэниэл Бритт, Уилльям Кросс, Кэти Митчелл, Джош Катавик</div></li>
			</ul>
		
		<div class="movie-desc">Лёжа на смертном одре, богатый дядюшка просит Ника выполнить его последнюю волю - раздать всё его состояние нуждающимся, не прикарманив себе ни цента. Ник соглашается выполнить его просьбу, хотя сам только вышел из тюрьмы и отчаянно хочет снова встать на ноги. Однако после смерти дяди на его ...</div>
	</div>
</div>
@endforeach
<!-- Main Movie -->
<div class="clr"></div>
<div class="pagi-nav clearfix ignore-select">
	
<!-- 	<span class="navigation"><span>1</span> <a href="/page/2/">2</a> <a href="/page/3/">3</a> <a href="/page/4/">4</a> <a href="/page/5/">5</a> <a href="/page/6/">6</a> <a href="/page/7/">7</a> <a href="/page/8/">8</a> <a href="page/9/">9</a> <a href="/page/10/">10</a> <span class="nav_ext">...</span> <a href="/page/1134/">1134</a></span>	 -->	
{{ $movies->appends(['search' => $search])->links() }}													 
<!-- 	<span class="pnext"><a href="/page/2/"><span class="fa fa-arrow-right"></span></a></span> -->
</div></div>
					</div>
				
			</div>	
@endsection