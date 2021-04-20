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
                    <h2>All Products</h2>
                </div>
                <div class="product-style">
                    
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="home1" role="tabpanel">
                            <div class="custom-row">
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src={{ URL::asset('users/assets/img/product/fashion-colorful/3.jpg')}} alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Mini Waffle 5 Pack</a></h4>
                                            <span>$115.00</span>
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
    <!-- all products area end -->
    <!-- brand logo area start -->
    
    <!-- brand logo area end -->
    <!-- banner3 area start -->
    <!-- banner3 area end -->
    <!-- insta feed start -->
    <!-- insta feed end -->
@endsection