@extends('users.tampil_p.layout_tampil')
@section('content')
<div class="product-details ptb-100 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-7 col-12">
                        <div class="product-details-img-content">
                            <div class="product-details-tab mr-70">
                                <div class="product-details-large tab-content">
                                    <div class="tab-pane active show fade" id="pro-details1" role="tabpanel">
                                        <div class="easyzoom easyzoom--overlay">
                                            <a href="assets/img/product-details/bl1.jpg">
                                                <img src="" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5 col-12">
                        <div class="product-details-content">
                            <h3>{{$produk->nama_produk}}</h3>
                            <div class="details-price">
                                <span>{{'Rp. '.$produk->harga}}</span>
                                
                                <p>Tersedia : {{$produk->jumlah}} {{$produk->satuan}}</p>
                            </div>
                            <p>{{$produk->deskripsi}}</p>
                            <div class="quickview-plus-minus">
                                <div class="cart-plus-minus">
                                    <input type="text" value="1" name="jumlah" class="cart-plus-minus-box"> 
                                </div>
                                @if ($produk->jumlah != 0)
                                <div class="quickview-btn-cart">
                                    <a class="btn-hover-black" href="#">Beli Sekarang</a>
                                </div>
                                @else
                                <div class="quickview-btn-cart">
                                    <a class="btn-hover-red" href="#">Pre-order</a>
                                </div>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection