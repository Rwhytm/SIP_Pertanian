@extends('users.layout')
@section('content')
    <div class="all-products-area pt-115 pb-50">
        <div class="pl-100 pr-100">
            <div class="container-fluid">
                <div class="section-title text-center mb-60">
                    <h2>Produk Terlama</h2>
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
                                            <a href="">
                                                @if ($p->produkImages->first())
					                                <img src="{{ asset($p->produkImages->first()->path) }}" alt="" class="img-thumbnail img-center" style="width:500px; height: 300px; object-fit: cover;">
				                                @else
                                                <div style="width:500px; height:500px">
					                                <img src="{{ asset('img/product/book/1.jpg') }}" alt="" style="width:500px; height:300px">
                                                </div>
				                                @endif
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-top" title="Tambah ke keranjang" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Tampilkan Produk"   href="{{route('tampil.produk', $p->id)}}">
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
@endsection