@extends('users.tampil_p.layout_tampil')
@section('content')
<div class="cart-main-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="cart-heading">Keranjang</h1>
                <form action="#">
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>remove</th>
                                    <th>Produk</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                    @forelse ($keranjang as $k)
                                    <tr>   
                                    
                                    <td class="product-remove">
                                        
                                        <form action="" method="POST">
                                        @csrf
                                        @method('delete')
                                             <button class="btn btn-danger mr-3">Hapus</button>
                                        </form>
                                        {{-- <a href="#"><i class="pe-7s-close"></i></a> --}}
                                    
                                    
                                    </td>
                                    <td class="product-name"><a href="#">{{$produk->nama_produk}}</a></td>
                                    <td class="product-price-cart"><span class="amount">{{$produk->harga}}</span></td>
                                    <td class="product-quantity">
                                        {{$k->jumlah}}
                                        {{-- <input value="1" type="number"> --}}
                                    </td>
                                    <td class="product-subtotal">{{$k->total}}</td>
                                    </tr>  
                                    @empty
                                     <tr>
                                        <td colspan="5">Tidak Ada Barang</td>
                                     </tr>
                                    @endforelse
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Total Belanja</h2>
                                <ul>
                                    <li>Total<span>{{$keranjang->sum('total')}}</span></li>
                                </ul>
                                <a href="#">Bayar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection