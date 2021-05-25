@extends('admin.layout')
@section('content')
<div class="content">
<div class="row">
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="media widget-media p-4 bg-white border">
            <div class="icon rounded-circle mr-4 bg-primary">
                <i class="mdi mdi-account-outline text-white "></i>
            </div>
            <div class="media-body align-self-center">
                <h4 class="text-primary mb-2">{{$pelanggan->count()}}</h4>
                <p>Pelanggan Terdaftar</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="media widget-media p-4 bg-white border">
            <div class="icon rounded-circle bg-warning mr-4">
                <i class="mdi mdi-cart-outline text-white "></i>
            </div>
            <div class="media-body align-self-center">
                <h4 class="text-primary mb-2">{{$produk->count()}}</h4>
                <p>Produk Terdaftar</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="media widget-media p-4 bg-white border">
            <div class="icon rounded-circle mr-4 bg-danger">
                <i class="mdi mdi-cart-outline text-white "></i>
            </div>
            <div class="media-body align-self-center">
                <h4 class="text-primary mb-2">1450</h4>
                <p>Produk Terjual</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="media widget-media p-4 bg-white border">
            <div class="icon bg-success rounded-circle mr-4">
                <i class="mdi mdi-diamond text-white "></i>
            </div>
            <div class="media-body align-self-center">
                <h4 class="text-primary mb-2">9503</h4>
                <p>Gak tau mau ngisi apa</p>
            </div>
        </div>
    </div>
</div>
<div class="row">


        </div> 
</div>
</div>
@endsection