@extends('users.tampil_p.layout_tampil')
@section('content')
<div class="cart-main-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="cart-heading">Pesanan Saya</h1>
                <form action="#">
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                
                                <tr>
                                    <th>Nomor Transaksi</th>
                                    <th>Tanggal</th>
                                    <th>Jumlah Pembayaran</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($pesanan as $p)
                                <tr>
                                    <td class="product-name">{{ $p->nomor_transaksi}}</span></td>
                                    <td class="product-price-cart">{{ $p->updated_at }}</td>
                                    <td class="product-quantity">{{ $p->total }}</td>
                                    <td class="product-quantity">{{ $p->status }}</td>
                                    <td class="product-quantity">
                                       @if ($p->status =='pending')
                                           
                                               <button btn btn-primary>Konfirmasi</button>

                                        @elseif ($p->status =='konfirmasi')
                                        @elseif ($p->status =='proses')

                                        <button class="btn btn-secondary">Diterima</button>

                                        @elseif ($p->status =='proses')
                                           
                                       @else
                                           
                                       @endif
                                    </td>
                                </tr>  
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection