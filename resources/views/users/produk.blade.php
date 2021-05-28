@extends('users.layout')
@section('content')
<div class="shop-page-wrapper shop-page-padding ptb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop-sidebar mr-50">
                    <div class="sidebar-widget mb-50">
                        <h3 class="sidebar-title">Cari Produk</h3>
                        <div class="sidebar-search">
                            <form action="#">
                                <input placeholder="Cari Produk..." type="text">
                                <button><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-45">
                        <h3 class="sidebar-title">Kategori</h3>
                        <div class="sidebar-categories">
                            <ul>
                                <li><a href="#">Accessories <span>4</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="shop-product-wrapper res-xl">
                    <div class="shop-bar-area">
                        <div class="shop-bar pb-60">
                            <div class="shop-found-selector">
                                
                            </div>
                            <div class="shop-filter-tab">
                                <div class="shop-tab nav" role=tablist>
                                    <a class="active" href="#grid-sidebar5" data-toggle="tab" role="tab" aria-selected="false">
                                        <i class="ti-layout-grid4-alt"></i>
                                    </a>
                                    <a href="#grid-sidebar6" data-toggle="tab" role="tab" aria-selected="true">
                                        <i class="ti-menu"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="shop-product-content tab-content">
                            <div id="grid-sidebar5" class="tab-pane fade active show">
                                <div class="row">
                                    @forelse ($produk as $p)
                                        
                                    
                                    <div class="col-lg-6 col-md-6">
                                        <div class="product-wrapper mb-30">
                                            <div class="product-img">
                                                <div class="product-action">
                                                    <a class="animate-left" title="Wishlist" href="#">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a class="animate-top" title="Add To Cart" href="#">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="#">Navy Bird Print </a></h4>
                                                <span>$115.00</span>
                                            </div>
                                        </div>
                                   </div>
                                </div>
                                @empty
                                        
                                @endforelse
                            </div>
                            <div id="grid-sidebar6" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
                                            <div class="product-img list-img-width">
                                                <a href="#">
                                                    <img src="assets/img/product/fashion-colorful/1.jpg" alt="">
                                                </a>
                                                <span>hot</span>
                                                <div class="product-action-list-style">
                                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content-list">
                                                <div class="product-list-info">
                                                    <h4><a href="#">Skinny Jeans Terry </a></h4>
                                                    <span>$150.00</span>
                                                    <p>Lorem ipsum dolor sit amet, mana consectetur adipisicing elit, sed do eiusmod tempor labore. </p>
                                                </div>
                                                <div class="product-list-cart-wishlist">
                                                    <div class="product-list-cart">
                                                        <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                    </div>
                                                    <div class="product-list-wishlist">
                                                        <a class="btn-hover list-btn-wishlist" href="#">
                                                            <i class="pe-7s-like"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-style mt-10 text-center">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection