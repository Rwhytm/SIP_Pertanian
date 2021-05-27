@extends('users.layout')
@section('content')
<div class="slider-area">
    <div class="slider-active owl-carousel">
        <div class="food-slider bg-img slider-height-5" style="background-image: url(assets/img/slider/12.jpg)">
            <div class="container">
                <div class="food-slider-content text-center fadeinup-animated">
                    {{-- <img class="animated" src="assets/img/slider/6.png" alt=""> --}}
                    <p class="animated">Belanja Di Fakultas Pertanian</p>
                    <a class="food-slider-btn animated" href="#">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="food-slider bg-img slider-height-5" style="background-image: url(assets/img/slider/18.jpg)">
            <div class="container">
                <div class="food-slider-content text-center fadeinup-animated">
                    {{-- <img class="animated" src="assets/img/slider/6.png" alt=""> --}}
                    <p class="animated">Lorem Ipsum is simply dummy text of the printing dummy and typesetting industry.</p>
                    <a class="food-slider-btn animated" href="#">Shop Now</a>
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
                    <br>
                    {{$produk->links()}}
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
                                                <div class="qwick-view-left">
                                                    <div class="quick-view-learg-img">
                                                        <div class="quick-view-tab-content tab-content">
                                                            <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                                                <img src="assets/img/quick-view/l1.jpg" alt="">
                                                            </div>
                                                            <div class="tab-pane fade" id="modal2" role="tabpanel">
                                                                <img src="assets/img/quick-view/l2.jpg" alt="">
                                                            </div>
                                                            <div class="tab-pane fade" id="modal3" role="tabpanel">
                                                                <img src="assets/img/quick-view/l3.jpg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="quick-view-list nav" role="tablist">
                                                        <a class="active" href="#modal1" data-toggle="tab" role="tab" aria-selected="true" aria-controls="home1">
                                                            <img src="assets/img/quick-view/s1.jpg" alt="">
                                                        </a>
                                                        <a href="#modal2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home2">
                                                            <img src="assets/img/quick-view/s2.jpg" alt="">
                                                        </a>
                                                        <a href="#modal3" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home3">
                                                            <img src="assets/img/quick-view/s3.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="qwick-view-right">
                                                    <div class="qwick-view-content">
                                                        <h3></h3>
                                                        <div class="price">
                                                            <span class="new">$90.00</span>
                                                            <span class="old">$120.00  </span>
                                                        </div>
                                                        <div class="rating-number">
                                                            <div class="quick-view-rating">
                                                                <i class="pe-7s-star"></i>
                                                                <i class="pe-7s-star"></i>
                                                                <i class="pe-7s-star"></i>
                                                                <i class="pe-7s-star"></i>
                                                                <i class="pe-7s-star"></i>
                                                            </div>
                                                            <div class="quick-view-number">
                                                                <span>2 Ratting (S)</span>
                                                            </div>
                                                        </div>
                                                        <p>{{$p}}</p>
                                                        <div class="quick-view-select">
                                                            <div class="select-option-part">
                                                                <label>Size*</label>
                                                                <select class="select">
                                                                    <option value="">- Please Select -</option>
                                                                    <option value="">900</option>
                                                                    <option value="">700</option>
                                                                </select>
                                                            </div>
                                                            <div class="select-option-part">
                                                                <label>Color*</label>
                                                                <select class="select">
                                                                    <option value="">- Please Select -</option>
                                                                    <option value="">orange</option>
                                                                    <option value="">pink</option>
                                                                    <option value="">yellow</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="quickview-plus-minus">
                                                            <div class="cart-plus-minus">
                                                                <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                            </div>
                                                            <div class="quickview-btn-cart">
                                                                <a class="btn-hover-black" href="#">add to cart</a>
                                                            </div>
                                                            <div class="quickview-btn-wishlist">
                                                                <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="">
                                                @if ($p->produkImages->first())
					                                <img src="{{ asset($p->produkImages->first()->path) }}" alt="" class="img-thumbnail img-center ">
				                                @else
					                                <img src="{{ asset('img/product/book/1.jpg') }}" alt="">
				                                @endif
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-top" title="Tambah ke keranjang" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Tampilkan Produk" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">{{$p->nama_produk}}</a></h4>
                                            <span>{{'Rp.'.$p->harga}}</span>
                                            <br>
                                            <h4>{{'Tersisa : '. $p->jumlah.' '.$p->satuan}}</h4>
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
                        <h4>Choose Resturend</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single-food-services text-center food-services-padding2 mb-40">
                        <img src="assets/img/banner/8.png" alt="">
                        <h4>Select Your Foods</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single-food-services text-center food-services-padding3 mb-40">
                        <img src="assets/img/banner/9.png" alt="">
                        <h4>Request for Delevary</h4>
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