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
                    <a class="icon-cart-furniture" href="{{route('keranjang')}}">
                        <i class="ti-shopping-cart"></i>
                        <span class="shop-count-furniture green"></span>
                    </a>
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
                            <label>Urutkan : </label>
                            <select name="select" onchange="window.location.href=this.options[this.selectedIndex].value;">
                                <option value="">Produk</option>
                                <option value="{{route('home user')}}">Semua</option>
                                <option value="{{route('terbaru')}}">Terbaru</option>
                                <option value="{{route('terlama')}}">Terlama</option>
                                <option value="{{route('hargatinggi')}}">Terendah</option>
                                <option value="{{route('hargarendah')}}">Tertinggi</option>

                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</header>