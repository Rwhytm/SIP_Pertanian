@extends('users.tampil_p.layout_tampil')
@section('content')
<div class="d-flex justify-content-center p-4">
    <div class="col-lg-6 col-md-12 col-12">
        <div class="your-order">
            <h3 class="text-center">Pesanan Kamu</h3>
            <div class="your-order-table table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th class="text-left">Produk</th>
                            <th class="text-left">Harga</th>
                            <th class="text-left">Total</th>
                        </tr>							
                    </thead>
                    <tbody>
                        @foreach ($keranjang as $k)
                        <tr class="cart_item">
                            <td class="product-name text-left">
                                {{ $k->produk->nama_produk }} <strong class="product-quantity"> × {{ $k->jumlah }}</strong>
                            </td>
                            <td class="text-left">
                                <span class="amount">Rp. {{ number_format($k->produk->harga) }}</span>
                            </td>
                            <td class="text-left">
                                <span class="amount">Rp. {{ number_format($k->total) }}</span>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                    <tfoot>
                        
                        <tr class="order-total">
                            <th colspan="2" class="text-left">Order Total</th>
                            <td>
                                <strong><span class="text-right">Rp. {{ number_format($order_total) }}</span></strong>
                            </td>
                        </tr>								
                    </tfoot>
                </table>
            </div>
            <div class="payment-method">
                <div class="payment-accordion">
                    <div class="panel-group" id="faq">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title"><a data-toggle="collapse" aria-expanded="true" data-parent="#faq" href="#payment-1">Pembayaran hanya melalui bank</a></h5>
                            </div>
                            <div id="payment-1" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    <p>Saat ini hanya tersedia pembayaran melalui bank</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order-button-payment">
                        <form action="{{ route('checkout') }}" method="post">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-dark btn-lg btn-block">Check Out</button>
                        </form>
                    </div>								
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection