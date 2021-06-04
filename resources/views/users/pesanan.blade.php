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
                        <th class="product-name">Produk</th>
                        <th class="product-total">Total</th>
                    </tr>							
                </thead>
                <tbody>
                    <tr class="cart_item">
                        <td class="product-name text-left">
                            Vestibulum suscipit <strong class="product-quantity"> × 1</strong>
                        </td>
                        <td class="product-total">
                            <span class="amount">£165.00</span>
                        </td>
                    </tr>
                </tbody>
                <tfoot>

                    <tr class="order-total">
                        <th class="text-left">Order Total</th>
                        <td><strong><span class="amount">£215.00</span></strong>
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
                    <input type="submit" value="Check Out" />
                </div>								
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection