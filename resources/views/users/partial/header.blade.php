<header>
    <div class="header-top-furniture wrapper-padding-2 res-header-sm">
        <nav class="navbar navbar-light bg-white justify-content-between">
            <!-- Navbar content -->
            <a class="navbar-brand">{{Str::upper(config('app.name'))}}</a>
            <form class="form-inline my-2 my-lg-0">
                @if(Route::has('login'))
                @auth
                    
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{'Hai, kak '.Auth::user()->nama }} 
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">profil</a>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                        </a>
                    </div>
                </li>
                
                    
                    @else
                        <a href="{{ route('login2') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                @endauth
            @endif
                
            </form>
        </nav>
                    {{-- <a href="home.html">
                        <img src="" alt="" style="width: 167px">
                    </a> --}}
                {{-- </div>
                <div class="menu-style-2 furniture-menu menu-hover">
                    <nav>
                        <ul>
                            
                            <li><a href="#">filter</a>
                                <ul class="single-dropdown">
                                    <li><a href="cart.html"></a></li>
                                    <li><a href="{{route('home user')}}">semua produk</a></li>
                                    <li><a href="{{route('terbaru')}}">produk terbaru</a></li>
                                    <li><a href="{{route('terlama')}}">produk Terlama</a></li>
                                    <li><a href="{{route('hargatinggi')}}">Harga Tinggi Ke Rendah</a></li>
                                     <li><a href="{{route('hargarendah')}}">Harga Rendah Ke Tinggi</a></li>
                                </ul>
                            </li>
                            <li><a href="shop.html">my orders</a>
                                <div class="category-menu-dropdown shop-menu">
                                    <div class="category-dropdown-style category-common2 mb-30">
                                        <h4 class="categories-subtitle"> shop layout</h4>
                                        <ul>
                                            <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                                            <li><a href="shop-grid-3-col.html"> grid 3 column</a></li>
                                            <li><a href="shop.html">grid 4 column</a></li>
                                            <li><a href="shop-grid-box.html">grid box style</a></li>
                                            <li><a href="shop-list-1-col.html"> list 1 column</a></li>
                                            <li><a href="shop-list-2-col.html">list 2 column</a></li>
                                            <li><a href="shop-list-box.html">list box style</a></li>
                                            <li><a href="cart.html">shopping cart</a></li>
                                            <li><a href="wishlist.html">wishlist</a></li>
                                        </ul>
                                    </div>
                                    <div class="category-dropdown-style category-common2 mb-30">
                                        <h4 class="categories-subtitle"> product details</h4>
                                        <ul>
                                            <li><a href="product-details.html">tab style 1</a></li>
                                            <li><a href="product-details-2.html">tab style 2</a></li>
                                            <li><a href="product-details-3.html"> tab style 3</a></li>
                                            <li><a href="product-details-4.html">sticky style</a></li>
                                            <li><a href="product-details-5.html">sticky style 2</a></li>
                                            <li><a href="product-details-6.html">gallery style</a></li>
                                            <li><a href="product-details-7.html">gallery style 2</a></li>
                                            <li><a href="product-details-8.html">fixed image style</a></li>
                                            <li><a href="product-details-9.html">fixed image style 2</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-banner-img">
                                        <a href="single-product.html">
                                            <img src="assets/img/banner/18.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li><a href="blog.html">start a jastip</a>
                                <ul class="single-dropdown">
                                    <li><a href="blog.html">blog 3 colunm</a></li>
                                    <li><a href="blog-2-col.html">blog 2 colunm</a></li>
                                    <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                    <li><a href="blog-details.html">blog details</a></li>
                                    <li><a href="blog-details-sidebar.html">blog details 2</a></li>
                                </ul>
                            </li>
                            <li><a href="checkout.html">my wallet</a></li>
                        </ul>
                    </nav>
                </div>
                {{-- Space buat logout --}}
                <div class="Logout">
                    
                </div>

            </div>
        </div>
    </div>
    <div class="header-bottom-furniture wrapper-padding-2 border-top-3">
        <div class="container-fluid">
            <div class="furniture-bottom-wrapper">
                <div class="furniture-login">
                </div>
                <div class="furniture-search">
                    <form action="#">
                        <input placeholder="I am Searching for . . ." type="text">
                        <button>
                            <i class="ti-search"></i>
                        </button>
                    </form>
                </div>
                <div class="furniture-login">
                </div>
            </div>
        </div>
    </div>
   
</header>