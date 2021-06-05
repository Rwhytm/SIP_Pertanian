@extends('users.awal.layout')
@section('content')
<div class="slider-area">
    
    <div class="slider-active owl-carousel">
        <div class="food-slider bg-img slider-height-5" style="background-image: url({{ asset('users/assets/img/logo/gambar1.jpg') }})">
            <div class="container">
                <div class="food-slider-content text-center fadeinup-animated">
                    {{-- <img class="animated" src="assets/img/slider/6.png" alt=""> --}}
                    <p class="animated text-xl-center">Belanja Di Fakultas Pertanian</p>
                    @if (Route::has('login'))
                    @auth
                    <a class="food-slider-btn animated" href="{{ route('home user') }}l">Belanja Sekarang</a>
                    @else
                    <a class="food-slider-btn animated" href="{{route('login2')}}">Login</a>
                    
                    @endauth
                    @endif
                </div>
            </div>
        </div>
        <div class="food-slider bg-img slider-height-5" style="background-image: url({{ asset('users/assets/img/logo/gambar2.jpg') }})">
            <div class="container">
                <div class="food-slider-content text-center fadeinup-animated">
                    {{-- <img class="animated" src="assets/img/slider/6.png" alt=""> --}}
                    <p class="animated text-xl-center">Belanja Di Fakultas Pertanian</p>
                    @if (Route::has('login'))
                    @auth
                    <a class="food-slider-btn animated" href="{{ route('home user') }}l">Belanja Sekarang</a>
                    @else
                    <a class="food-slider-btn animated" href="{{route('login2')}}">Login</a>
                    
                    @endauth
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="container p-5">
    <div class="section-title text-center mb-60">
        <h2>Kategori</h2>
    </div>
    <div class="d-flex justify-content-center">
        @php
        use App\Models\Kategori;
        $kategori = Kategori::orderBy('id', 'ASC')->get();
        @endphp
        <div class="d-flex justify-content-left">
            @foreach ($kategori as $k)
            <a href="{{ route('filter.kategori', $k->id) }}" class="btn btn-outline-secondary mr-4" style="border-radius: 50px;">{{ $k->nama_kategori }}</a>
            @endforeach
        </div>
    </div>
</div> --}}
<div class="all-products-area pt-115 pb-50">
    <div class="pl-100 pr-100">
        <div class="container-fluid">
            <div class="section-title text-center mb-60">
                <h2>Selamat Datang di Incubator PErtanian</h2>
                <p class="mt-5">Untuk melakukan proses pembelian di Incubator Pertanian, silahkan melakukan login atau registrasi, lalu tekan tombol Belanja Sekarang</p>
            </div>
            <div class="product-style">
                
                <div class="tab-content">
                    <div class="tab-pane active show fade" id="home1" role="tabpanel">
                        <div class="custom-row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- animasi --}}

<div class="food-services-area bg-img pt-200 pb-155" style="background-image: url({{ asset('users/assets/img/bg/12.jpg ') }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="single-food-services text-center food-services-padding1 mb-40">
                    <img src="{{ asset('users/assets/img/banner/7.png') }}" alt="">
                    <h4>Pesan Dari Rumah</h4>
                    <p>Pesan barangmu dari rumah melalui website ini.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="single-food-services text-center food-services-padding2 mb-40">
                    <img src="{{ asset('users/assets/img/banner/7.png') }}" alt="">
                    <h4>Lakukan Pembayaran</h4>
                    <p>Lakukan pembayaran melalui mobile banking atau bank terdekat </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="single-food-services text-center food-services-padding3 mb-40">
                    <img src="{{ asset('users/assets/img/banner/9.png') }}" alt="">
                    <h4>Barang Akan Diantar</h4>
                    <p>Barang yang anda pesan akan diproses dan segera kami antar</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection