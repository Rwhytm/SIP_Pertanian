@extends('users.tampil_p.layout_tampil')
@section('content')
<div class="cart-main-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="cart-heading">Keranjang</h1>
                            <div class="d-flex justify-content-end pd-3">
                                <a class="btn btn-dark" href="{{route('home user')}}">Tambah Pesanan</a>
                            </div>
                            <br>
                <form action="#">
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>hapus</th>
                                    <th>Produk</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @forelse ($keranjang as $k)
                                <tr>
                                    {{-- {{ dd($k->id) }} --}}
                                    <td class="product-remove"> 
                                        {{-- <a href="{{ route('hapus keranjang', $k->id) }}">hapus</a> --}}
                                        <div class="invisible">
                                            <form action="{{ route('hapus keranjang', $k->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="delete">Hapus</button>
                                            </form>
                                        </div>
                                        <form action="{{ route('hapus keranjang', $k->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                    <td class="product-name"><span href="#">{{$k->produk->nama_produk}}</span></td>
                                    <td class="product-price-cart"><span class="amount">{{'Rp. '.number_format($k->produk->harga)}}</span></td>
                                    <td class="product-quantity">
                                        {{$k->jumlah}}
                                        {{-- <input value="1" type="number"> --}}
                                    </td>
                                    <td class="product-subtotal">{{'Rp. '.number_format($k->total)}}</td>
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
                                    <li>Total<span>{{'Rp. '.number_format($keranjang->sum('total'))}}</span></li>
                                </ul>
                                @if ($keranjang->sum('total')>0)
                                <a href="{{ route('bayar') }}">Bayar</a>
                                
                                @else
                                
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection