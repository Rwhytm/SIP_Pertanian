@extends('users.layout')
@section('content')
    <!-- banner area start -->
    
    <!-- banner area end -->
    <!-- product area start -->

    <!-- product area end -->
    <!-- banner area two start -->
    <!-- banner area two end -->
    <!-- all products area start -->
    <div class="all-products-area pt-115 pb-50">
        <div class="pl-100 pr-100">
            <div class="container-fluid">
                <div class="section-title text-center mb-60">
                    <h2>Semua Produk</h2>
                </div>
                <div class="product-style">
                    
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="home1" role="tabpanel">
                            <div class="custom-row">
                                @forelse ($produk as $p)
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                @if ($p->produkImages->first())
					                                <img src="{{ asset($p->produkImages->first()->path) }}" alt="" class="img-thumbnail img-center ">
				                                @else
					                                <img src="{{ asset('themes/ezone/assets/img/product/fashion-colorful/1.jpg') }}" alt="">
				                                @endif
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-top" title="Tambah ke keranjang" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Tampilkan" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">{{$p->nama_produk}}</a></h4>
                                            <span>{{'Rp.'.$p->harga}}</span>
                                            <br>
                                            <h4>{{'Tersisa : '. $p->jumlah}}</h4>
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
    <!-- all products area end -->
    <!-- brand logo area start -->
    
    <!-- brand logo area end -->
    <!-- banner3 area start -->
    <!-- banner3 area end -->
    <!-- insta feed start -->
    <!-- insta feed end -->
@endsection