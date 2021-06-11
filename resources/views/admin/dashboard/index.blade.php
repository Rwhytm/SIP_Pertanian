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
                    
                    {{-- {{ dd(url('admin/dashboard')) }} --}}
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="media widget-media p-4 bg-white border">
                <div class="icon rounded-circle bg-warning mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="white" width="30px">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
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
                    <h4 class="text-primary mb-2">{{ $keranjang->sum('jumlah') }}</h4>
                    <p>Produk Terjual</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="media widget-media p-4 bg-white border">
                <div class="icon bg-success rounded-circle mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="white" width="30px">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                </div>
                <div class="media-body align-self-center">
                    <h4 class="text-primary mb-2">{{ $keranjang->count() }}</h4>
                    <p>Pesanan Menunggu</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        
        
    </div> 
</div>
</div>
@endsection