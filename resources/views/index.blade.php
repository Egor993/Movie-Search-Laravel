@extends('master')
@section('content')
<div class="content">
    <br>
    <table style="margin-bottom:20px;">
        <tbody>
            <tr>
                <td width="135" valign="middle">
                    <div class="main-title clearfix">
                        <div class="grid-select clearfix" id="grid-select">
                            <span data-type="grid-list"><span class="fa fa-reorder"></span></span>
                            <span data-type="grid-thumb" class="current"><span class="fa fa-th"></span></span>
                        </div>
                    </div>
                </td>
                <td width="auto" valign="middle" style="color:#888888;">
                    <span><span id="dle-speedbar"><span itemscope itemtype=""><a
                                    href="#" itemprop="url"><span
                                        itemprop="title">Movie-Search</span></a></span></span></span> » Новые фильмы и сериалы!
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
						<img src="/img/{{ $movie->image }}" alt="{{ $movie->name }}">
						<div class="mov-mask flex-col ps-link" data-link="/{{ $movie->slug }}"><span
								class="fa fa-play"></span></div>
						<div class="mov-m">{{ $movie->date }}</div>
					</div>
					<div class="movie-text">
						<div style="float:right;">
							<div style="clear:both;"></div>
						</div>
					</div>
					<h2><a class="mov-t nowrap" href="/{{ $movie->slug }}" title="{{ $movie->name }}">{{ $movie->name }}</a>
					</h2>
					<div class="movie-text">
						<ul class="movie-lines">
							<li>
								<div class="ml-label">Жанр:</div>
								<div class="ml-desc" style="color:#888888; font-weight:bold;">
									<a href="#">{{ $movie->jenre }}</a></div>
							</li>
							<li>
								<div class="ml-label">Страна:</div>
								<div class="ml-desc">{{ $movie->country }}</div>
							</li>
							<li>
								<div class="ml-label">Год:</div>
								<div class="ml-desc">{{ $movie->date }}</div>
							</li>
							<li>
								<div class="ml-label">Время: </div>
								<div class="ml-desc">{{ $movie->time }}</div>
							</li>
							<li>
								<div class="ml-label">Режиссер: </div>
								<div class="ml-desc">{{ $movie->producer }}</div>
							</li>
							<li>
								<div class="ml-label">Актеры:</div>
								<div class="ml-desc">{{ $movie->acters }}</div>
							</li>
						</ul>

						<div class="movie-desc">{{ $movie->description }}</div>
					</div>
				</div>
            @endforeach
            <!-- Main Movie -->
            <div class="clr"></div>
			
            <div class="pagi-nav clearfix ignore-select">
                @if(isset($search))
                	{{ $movies->appends(['search' => $search])->links() }}
				@else
					{{ $movies->links() }}
                @endif
            </div>
        </div>
    </div>
</div>
@endsection