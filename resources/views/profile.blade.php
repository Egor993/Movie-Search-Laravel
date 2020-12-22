@extends('master')
@section('content')
		<div class="content">
				<br>
				
				<table style="margin-bottom:20px;">
					<tbody><tr>
						<td width="135" valign="middle">
							<div class="main-title clearfix">
								<div class="grid-select clearfix" id="grid-select">
									<span data-type="grid-list" class="current"><span class="fa fa-reorder"></span></span>
									<span data-type="grid-thumb" class=""><span class="fa fa-th"></span></span>
								</div>
							</div>
						</td>
						<td width="auto" valign="middle" style="color:#888888;">
							<span id="dle-speedbar"><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="http://Movie-Search.bet/" itemprop="url"><span itemprop="title">Movie-Search</span></a></span> » {{ $user->name }}</span>
						</td>
					</tr>
				</tbody></table>
				
				
					<div class="floaters clearfix grid grid-list" data-view="grid-list" id="grid">
						<div id="dle-content"><form method="post" name="userinfo" id="userinfo" enctype="multipart/form-data" action="/profile/upload_avatar"><div class="user-prof">
						@csrf
	<div class="up-first">
		<h1 class="nowrap">Пользователь: {{ $user->name }}</h1>
		<div class="up-group">Группа: Посетители </div>
		<div class="up-img img-box"><img src="avatars/{{ $user->image }}" alt=""></div>
		<div class="up-status">
			<input type="file" name="avatar">
			<input type="submit" class="">
		</div>
	</div>
	<ul class="up-second flex-row">
		<li>0 <p>Публикаций</p></li>
		<li>0 <p>Комментариев</p></li>
		<li><a href="http://Movie-Search.bet/index.php?do=feedback&amp;user=1603">отправить e-mail</a></li>
		<li><a onclick="DLESendPM('Feda993'); return false;" href="http://Movie-Search.bet/index.php?do=pm&amp;doaction=newpm&amp;username=Feda993">написать ПС</a></li>
	</ul>
	<ul class="up-third flex-row">
		<li>Регистрация: {{ $user->created_at }}</li>
		
	</ul>
<div class="textarea-title">Избранные фильмы</div>
@foreach($movies as $movie)
<div class="mov clearfix">
	<div class="mov-i img-box">
		<img src="img/{{ $movie->image }}">
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
</div>

<script>
$(document).ready(function(){
	$(".short-item").wrapAll("<div class='clearfix' />");
	});
</script>

<div id="options" style="display:none; margin-bottom: 30px" class="form-wrap">
<header class="form-title"><h1>Редактирование профиля:</h1></header>

<div class="sep-input clearfix">
<div class="label"><label>Ваше Имя:</label></div>
<div class="input"><input type="text" name="fullname" value="" placeholder="Ваше Имя"></div>
</div>

<div class="sep-input clearfix">
<div class="label"><label>Ваш E-Mail:</label></div>
<div class="input"><input type="text" name="email" value="egor8765@mail.ru" placeholder="Ваш E-Mail: egor8765@mail.ru"></div>
</div>

<div class="sep-checks">
<input type="checkbox" name="allow_mail" id="allow_mail" value="1"><label for="allow_mail">Не получать письма от других и с сайта</label>
<input style="margin-left: 50px" type="checkbox" id="subscribe" name="subscribe" value="1"> <label for="subscribe">Отписаться от подписанных новостей</label>
</div>

<div class="sep-input clearfix">
<div class="label"><label>Место жительства:</label></div>
<div class="input"><input type="text" name="land" value="" placeholder="Место жительства"></div>
</div>

<div class="sep-textarea">
<div class="textarea-title">Список игнорируемых:</div>

</div>

<div class="sep-input clearfix">
<div class="label"><label>Старый пароль:</label></div>
<div class="input"><input type="password" name="altpass" placeholder="Старый пароль"></div>
</div>

<div class="sep-input clearfix">
<div class="label"><label>Новый пароль:</label></div>
<div class="input"><input type="password" name="password1" placeholder="Новый пароль"></div>
</div>

<div class="sep-input clearfix">
<div class="label"><label>Повторите пароль:</label></div>
<div class="input"><input type="password" name="password2" placeholder="Повторите Новый пароль"></div>
</div>

<div class="sep-textarea">
<div class="textarea-title">Блокировка по IP (Ваш IP: 83.139.128.197):</div>
<div><textarea name="allowed_ip" style="height: 160px" rows="5" class="f_textarea"></textarea></div>
<div style="margin-top: 10px">
	<span class="small" style="color:red;">
	* Внимание! Будьте бдительны при изменении данной настройки.
	Доступ к Вашему аккаунту будет доступен только с того IP-адреса или подсети, который Вы укажете.
	Вы можете указать несколько IP адресов, по одному адресу на каждую строчку.
	<br>
	Пример: 192.48.25.71 или 129.42.*.*</span>
</div>
</div>

<div class="sep-input clearfix">
<div class="label"><label>Аватар:</label></div>
<div class="input"><input type="file" name="image" size="28"></div>
</div>

<div class="sep-input clearfix">
<div class="label"><label>Сервис <a href="http://www.gravatar.com/" target="_blank">Gravatar</a>:</label></div>
<div class="input"><input type="text" name="gravatar" value="" placeholder="Укажите E-Mail в этом сервисе"></div>
</div>

<div class="sep-checks"><input type="checkbox" name="del_foto" id="del_foto" value="yes"> <label for="del_foto">Удалить аватар</label></div>

<div class="sep-input clearfix">


</div>

<div class="sep-textarea">
<div class="textarea-title">О себе:</div>
<div><textarea name="info" rows="5" class="f_textarea"></textarea></div>
</div>

<div class="sep-textarea">
<div class="textarea-title">Подпись:</div>
<div><textarea name="signature" rows="5" class="f_textarea">Не заполняйте данное поле, т.к. для Вашей группы запрещено использование подписи в комментариях.</textarea></div>
</div>

<div class="sep-input">

</div>

<div class="sep-input">

</div>

<div class="sep-input">

</div>

<div class="sep-input">
<input type="checkbox" name="twofactor_auth" id="twofactor_auth" value="1"><label for="twofactor_auth">Использовать двухфакторную авторизацию на сайте (отправляется одноразовый пин-код на e-mail)</label>
</div>

<div class="sep-xfield">
<div><table class="tableform"></table></div>
</div></div></form></div></div></div>
@endsection
