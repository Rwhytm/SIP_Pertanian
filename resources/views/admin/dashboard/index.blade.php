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
        {{-- <div class="col-sm-12 col-lg-6 col-xl-4">
            <div class="card card-table-border-none" data-scroll-height="580">
                <div class="card-header justify-content-between">
                    <h2 class="d-inline-block">Pelanggan Baru</h2>
                    <div>
                        <button class="text-black-50 mr-2 font-size-20">
                            <i class="mdi mdi-cached"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <table class="table ">
                        <tbody>
                            <tr>
                                <td >
                                    <div class="media">
                                        <div class="media-image mr-3 rounded-circle">
                                            <a href="profile.html"><img class="rounded-circle w-45" src="assets/img/user/u1.jpg" alt="customer image"></a>
                                        </div>
                                        <div class="media-body align-self-center">
                                            <a href="profile.html">
                                                <h6 class="mt-0 text-dark font-weight-medium">{{$pelanggan->nama}}</h6>
                                            </a>
                                            <small>{{$pelanggan->email}}</small>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div> --}}
</div>
</div>
@endsection