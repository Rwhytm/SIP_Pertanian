@extends('users.layout')
@section('content')
<div class="slider-area">
    
    <div class="slider-active owl-carousel">
        <div class="food-slider bg-img slider-height-5" style="background-image: url(assets/img/slider/12.jpg)">
            <div class="container">
                <div class="food-slider-content text-center fadeinup-animated">
                    {{-- <img class="animated" src="assets/img/slider/6.png" alt=""> --}}
                    <p class="animated">Belanja Di Fakultas Pertanian</p>
                </div>
            </div>
        </div>
        <div class="food-slider bg-img slider-height-5" style="background-image: url(assets/img/slider/18.jpg)">
            <div class="container">
                <div class="food-slider-content text-center fadeinup-animated">
                    {{-- <img class="animated" src="assets/img/slider/6.png" alt=""> --}}
                    <p class="animated">Belanja Di Fakultas Pertanian</p>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="all-products-area pt-115 pb-50">
        <div class="pl-100 pr-100">
            <div class="container-fluid">
                <div class="section-title text-center mb-60">
                    <h2>Produk</h2>
                </div>
                <div class="product-style">
                    
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="home1" role="tabpanel">
                            <div class="custom-row">
                                @forelse ($produk as $p)

                                {{-- modal --}}
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span class="pe-7s-close" aria-hidden="true"></span>
                                    </button>
                                    <div class="modal-dialog modal-quickview-width" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a >
                                                @if ($p->produkImages->first())
					                                <img src="{{ asset($p->produkImages->first()->path) }}" alt="" class="img-thumbnail img-center" style="width:500px; height: 300px; object-fit: cover;">
				                                @else
                                                <div style="width:500px; height:500px">
					                                <img src="{{ asset('users/img/product/book/1.jpg') }}" alt="" style="width:500px; height:300px">
                                                </div>
				                                @endif
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-right" title="Tampilkan Produk"   href="{{route('tampil.produk', $p->id)}}">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">{{$p->nama_produk}}</a></h4>
                                            <span>{{'Rp.'.number_format($p->harga)}}</span>
                                            <br>
                                            <h4>{{'Tersisa : '. number_format($p->jumlah).' '.$p->satuan}}</h4>
                                        </div>
                                    </div>
                                </div>
                                
                                @empty
                                    
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- animasi --}}

    <div class="food-services-area bg-img pt-200 pb-155" style="background-image: url(assets/img/bg/12.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="single-food-services text-center food-services-padding1 mb-40">
                        <img src="assets/img/banner/7.png" alt="">
                        <h4>Pesan Dari Rumah</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single-food-services text-center food-services-padding2 mb-40">
                        <img src="assets/img/banner/8.png" alt="">
                        <h4>Lakukan Pembayaran</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single-food-services text-center food-services-padding3 mb-40">
                        <img src="assets/img/banner/9.png" alt="">
                        <h4>Barang Akan Diantar</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- all products area end -->
    <!-- brand logo area start -->
    
    <!-- brand logo area end -->
    <!-- banner3 area start -->
    <!-- banner3 area end -->
    <!-- insta feed start -->
    <!-- insta feed end -->
@endsection