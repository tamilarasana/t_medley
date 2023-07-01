		<div class="o-header__logo">
			<a href="{{ route('welcome') }}"> <img src="{{ asset('images/coffee.png') }}" alt="Cafe Shop"> </a>
		</div>
		{{-- <nav class="o-headermobile__mobile-content o-navbar">
			<a class="o-navbar__btn " href="#"> <i class="c-fonticon__icon-mobile-coffeeshop" aria-hidden="true"></i> Coffee Shop </a>
			<a class="o-navbar__btn " href="#"> <i class="c-fonticon__icon-mobile-carte" aria-hidden="true"></i> The Map</a>
			<a class="o-navbar__btn" href="#"> <i class="c-fonticon__icon-mobile-eshop" aria-hidden="true">
		</i> E-Shop </a>
			<a class="o-navbar__btn js-anim-menu-btn" role="button"> <i class="c-fonticon__icon-mobile-menu" aria-hidden="true">
		</i>Menu </a>
		</nav> --}}
		<nav class="o-headermobile__nav">
			<div class="o-header__logo">
				<a href="{{ route('welcome') }}"> <img src="{{ asset('images/coffee.png') }}" alt="Cafe Shop"> </a>
			</div>
			<div class="o-headermobile__nav-grid">
				<ul class="o-headermobile__nav-header">
					<li class="o-headermobile__nav-header__radio">
						<a href="#" target="_blank"> Cafe Shop </a>
					</li>
					<li class="o-headermobile__nav-header__searchbox">
						<div class="c-input c-input--no-label">
							<form action="#" method="GET" role="search">
								<input type="text" id="search-xs" name="s" placeholder="Search Here..."> <span></span> </form>
						</div>
					</li>
				</ul>
				<ul class="o-headermobile__nav-list o-navmobile">
					<li class="o-navmobile__item">
						<a class="o-navmobile__link" href="{{ route('about') }}">About Us</a>
					</li>
					<li class="o-navmobile__item">
						<a class="o-navmobile__link " href="#">Tea</a>
						<ul class="o-navmobile__dropdown">
							@foreach ($categories as $category)
							<li>
								<a class="o-navmobile__dropdown__link" href="{{ route('listing',['category' => $category]) }}">{{ $category->title }}</a>
						 	</li>
						 	@endforeach
						</ul>
					</li>
					<li class="o-navmobile__item">
						<a class="o-navmobile__link" href="{{ route('blog.listing') }}">Resource Hub</a>
					</li>
					@if (auth()->guest())
					<li class="o-navmobile__item">
						<a class="o-navmobile__link" href="{{ route('login') }}">Login</a>
					</li>
					<li class="o-navmobile__item">
         		<a class="o-navmobile__link" href="{{ route('register') }}">Register</a>
      		</li>
					@else
					<li class="o-navmobile__item">
						<a class="o-navmobile__link " href="{{ route('dashboard.user.index') }}">{{ auth()->user()->name }}</a>
						<ul class="o-navmobile__dropdown">
							<li>
								<a class="o-navmobile__dropdown__link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
					                 @csrf
				             	</form>
						 	</li>
						</ul>
					</li>
					@endif
			</div>
		</nav>
