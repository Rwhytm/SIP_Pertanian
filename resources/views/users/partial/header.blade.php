
<header>
    <div class="header-bottom wrapper-padding-2 bg-img res-header-sm food-header" style="background-image: url({{ asset('users/assets/img/bg/11.jpg') }})">
        <div class="header-top-furniture wrapper-padding-2 res-header-sm">
            <div class="container-fluid">
                <div class="header-bottom-wrapper">
                    <div class="logo-2 furniture-logo ptb-30">
                        <a href="{{route('home user')}}">
                            {{-- <img src="assets/img/logo/logo-faperta.png" alt="" style="width: 250px"> --}}
                            <img src="{{ asset('users/assets/img/logo/logo-faperta.png') }}" alt="" style="width: 250px">
                        </a>
                    </div>
                    <div class="menu-style-2 furniture-menu menu-hover">
                    </div>
                    @php
                    use App\Models\Keranjang;
                    $keranjang = Keranjang::where(['user_id'=> Auth::user()->id, 'status' => 'belum bayar']);
                    @endphp
                    <div class="header-cart">
                        <div class="d-flex justify-content-end">
                            @if (auth()->user()->hasRole('admin'))
                            <a class="icon-cart-furniture mr-5 mt-2" href="{{route('dashboard admin')}}">
                                <p>
                                    Admin
                                </p>
                            </a>
                            @endif
                            
                            <a class="icon-cart-furniture" href="{{route('tampil keranjang', Auth::user()->id)}}">
                                <i class="ti-shopping-cart"></i>
                                <span class="shop-count-furniture green">{{$keranjang->count()}}</span>
                            </a>
                        </div>
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
                                <a class="dropdown-item" href="{{ route('pesanansaya')}}">Pesanan Saya</a>
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
                    <form action="{{ route('cari.produk') }}">
                        <input placeholder="I am Searching for . . ." type="text" name="cari">
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
                                <option value="{{route('hargatinggi')}}">Temurah</option>
                                <option value="{{route('hargarendah')}}">Termahal</option>
                                
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</header>