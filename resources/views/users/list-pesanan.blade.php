@extends('users.tampil_p.layout_tampil')
@section('content')
<div class="cart-main-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="cart-heading">Pesanan</h1>
                <form action="#">
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    {{-- <th>hapus</th> --}}
                                    <th>Produk</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                
                                <tr>
                                    
                                    <td class="product-name"><span href="#"></span></td>
                                    <td class="product-price-cart"><span class="amount"></span></td>
                                    <td class="product-quantity">
                                
                                        {{-- <input value="1" type="number"> --}}
                                    </td>
                                    {{-- <td class="product-subtotal">{{$k->total}}</td> --}}
                                </tr>  
                               
                                
                                
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Total Belanja</h2>
                                <ul>
                                    {{-- <li>Total<span>{{$keranjang->sum('total')}}</span></li> --}}
                                </ul>
                                {{-- @if ($keranjang->sum('total')>0)
                                <a href="{{ route('bayar') }}">Bayar</a>
                                    
                                @else
                                    
                                @endif --}}
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection