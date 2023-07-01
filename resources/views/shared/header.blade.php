<div class="o-header__logo">
   <a href="{{ route('welcome') }}"> <img src="{{ asset('images/coffee.png') }}" alt="Cafe Shop"> </a>
</div>
<nav class="o-header__nav">
   <ul class="o-header__nav-list o-nav">
      {{-- <li class="o-nav__item--radio"><a class="o-nav__link" href="{{ route('welcome') }}">T Medly</a></li> --}}
   </ul>
   <ul class="o-header__nav-list o-nav">
      <li class="o-nav__item--searchbox">
         <div class="o-nav__link">
            <div class="c-input c-input--no-label">
               <form action="#" method=get>
                  <input type="text" id="search" placeholder="Search Here..." autocomplete="off">
               </form>
            </div>
         </div>
      </li>
   </ul>
</nav>
<nav class="o-header__nav" style = "font-family: 'Fleur De Leah', cursive; ">
   <ul class="o-header__nav-list o-nav--dot">
      <li class="o-nav__item">
         <a class="o-nav__link" style="font-size: 3rem;" href={{ route('about') }}>About Us</a>
      </li>
      <li class="o-nav__item">
         <a class="o-nav__link" style="font-size: 3rem;" href="#">Shop</a>
         <ul class="o-nav__dropdown">
            @foreach ($categories as $category)
            <li><a class="o-nav__dropdown__link" style="font-size: 2rem; font-family: 'Josefin Sans', sans-serif;" href="{{ route('listing', ['category' => $category]) }}">{{ $category->title }}</a>
            </li>
            @endforeach
         </ul>
      </li>
   </ul>
   <ul class="o-header__nav-list o-nav--dot">
      <li class="o-nav__item "><a class="o-nav__link" style="font-size: 3rem;" href="{{ route('blog.listing') }}">Resource Hub</a>
      </li>
      @if (auth()->guest())
      <li class="o-nav__item">
         <a class="o-nav__link" style="font-size: 3rem;" href="{{ route('login') }}">Login</a>
      </li>
      {{-- <li class="o-nav__item">
         <a class="o-nav__link" href="{{ route('register') }}">Register</a>
      </li> --}}
      @else
      <li class="o-nav__item">
         <a class="o-nav__link" href="{{ route('dashboard.user.index') }}">{{ auth()->user()->name }}</a>
         <ul class="o-nav__dropdown">
            <li>
               <a class="o-nav__dropdown__link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
               </form>
            </li>
         </ul>
      </li>
      @endif
   </ul>
</nav>
<nav class="o-header__nav--eshop">
    &nbsp;
    <div class="row">
        <div class="col-md-12 col-md-12 col-12 main-section">
            <div class="dropdown">
                <button type="button" class="btn btn-info" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>

                </button>
                <div class="dropdown-menu">
                    {{-- <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                        </div>

                        @php $total = 0 @endphp

                        @foreach((array) session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                        @endforeach
                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                        </div>
                    </div>

                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img src="{{ $details['image'] }}" width="100px"  height="100px" />
                                </div>

                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>{{ $details['name'] }}</p>
                                    <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>

                                </div>
                            </div>
                        @endforeach
                    @endif --}}
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-6 text-center checkout">
                            <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
