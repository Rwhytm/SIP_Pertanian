@extends('users.tampil_p.layout_tampil')
@section('content')
<div class="container p-5">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-12">
            <div class="card p-3">
                <form action="#">
                    <div class="checkbox-form">						
                        <h3>Konfirmasi Pembayaran</h3>
                        <div class="row">
                            <div class="col-md-12">
                                
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Nama Rekening<span class="required">*</span></label>										
                                    <input type="text" placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Nama Bank</label>
                                    <input type="text" placeholder="" />
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Bank Tujuan<span class="required">*</span></label>
                                    <select name="bank" id="bank">
                                        <option value="s">b</option>
                                        <option value="b">s</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Tanggal Transfer<span class="required">*</span></label>										
                                    <input class="form-control" type="datetime-local" value="" id="example-datetime-local-input">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Jumlah<span class="required">*</span></label>										
                                    <input type="text" readonly/>
                                </div>
                            </div>					
                        </div>												
                    </div>
                </form>
            </div>
            
        </div>
        <div class="col-lg-6 col-md-12 col-12">
            <div class="card p-3">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <span>Rp. Sekian</span>
                        <span>svg</span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <h5 class="text-center">Atas Nama</h5>
                        <div class="row">
                            <h2>L</h2>
                            <div class="col-md-6">
                                <h5>nama</h5>
                                <h5>noomor</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="col-md-12">
                        <h5 class="text-center">Atas Nama</h5>
                        <div class="row">
                            <h2>L</h2>
                            <div class="col-md-6">
                                <h5>nama</h5>
                                <h5>noomor</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>
@endsection