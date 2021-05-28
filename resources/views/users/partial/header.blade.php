{{-- 
                            
                            <li><a href="#">filter</a>
                                <ul class="single-dropdown">
                                    <li><a href="cart.html"></a></li>
                                    <li><a href="{{route('home user')}}">semua produk</a></li>
                                    <li><a href="{{route('terbaru')}}">produk terbaru</a></li>
                                    <li><a href="{{route('terlama')}}">produk Terlama</a></li>
                                    <li><a href="{{route('hargatinggi')}}">Harga Tinggi Ke Rendah</a></li>
                                     <li><a href="{{route('hargarendah')}}">Harga Rendah Ke Tinggi</a></li>
                                </ul>
                            </li> --}}
<header>
    <div class="header-bottom wrapper-padding-2 bg-img res-header-sm food-header" style="background-image: url(assets/img/bg/11.jpg)">
    <div class="header-top-furniture wrapper-padding-2 res-header-sm">
        <div class="container-fluid">
            <div class="header-bottom-wrapper">
                <div class="logo-2 furniture-logo ptb-30">
                    {{-- <a href="index.html">
                        <img src="assets/img/logo/2.png" alt="" style="width: 167px">
                    </a> --}}
                </div>
                <div class="menu-style-2 furniture-menu menu-hover">
                </div>
                <div class="header-cart">
                    <a class="icon-cart-furniture" href="#">
                        <i class="ti-shopping-cart"></i>
                        <span class="shop-count-furniture green"></span>
                    </a>
                    <ul class="cart-dropdown">
                        <li class="single-product-cart">
                            {{-- <div class="cart-img">
                                <a href="#"><img src="assets/img/cart/1.jpg" alt=""></a>
                            </div> --}}
                            <div class="cart-title">
                                <h5><a href="#"> Bits Headphone</a></h5>
                                <h6><a href="#">Black</a></h6>
                                <span>$80.00 x 1</span>
                            </div>
                            <div class="cart-delete">
                                <a href="#"><i class="ti-trash"></i></a>
                            </div>
                        </li>
                        <li class="cart-space">
                            <div class="cart-sub">
                                <h4>Subtotal</h4>
                            </div>
                            <div class="cart-price">
                                <h4>$240.00</h4>
                            </div>
                        </li>
                        <li class="cart-btn-wrapper">
                            <a class="cart-btn btn-hover" href="#">view cart</a>
                            <a class="cart-btn btn-hover" href="#">checkout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom-furniture wrapper-padding-2 border-top-3">
        <div class="container-fluid">
            <div class="furniture-bottom-wrapper">
                <div class="furniture-login">
                    @if (Route::has('login'))
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{'Selamat datang '.Auth::user()->nama }} 
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Profil</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                            </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        </div>
                    </li>
                    
                    @else
                    
                    <ul>
                        <li><a href="{{route('login2')}}">Masuk </a></li>
                        <li><a href="{{route('register')}}">Registrasi </a></li>
                    </ul>
                    @endauth
                @endif
                </div>
                <div class="furniture-search">
                    <form action="#">
                        <input placeholder="I am Searching for . . ." type="text">
                        <button>
                            <i class="ti-search"></i>
                        </button>
                    </form>
                </div>
                <div class="furniture-wishlist">
                    <div class="shop-found-selector">
                        <div class="shop-selector">
                            <label>Sort By : </label>
                            <select name="select">
                                <option value="">
                                    <a href="cart.html">Filter</a>
                                </option>
                                <option value="">Produk Terbaru</option>
                                <option value=""> Produk Terlama</option>
                                <option value="">Harga Rendah Ke Rendah</option>
                                <option value="">Harga Rendah Ke Tinggi</option>

                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</header>