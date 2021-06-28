@extends('users.tampil_p.layout_tampil')
@section('content')
<div class="container p-5">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-12">
            <div class="card p-3">
                <form action="{{ route('konfirmasipesanan', $nomor[0]->nomor_transaksi ) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="checkbox-form">						
                        <h3>Konfirmasi Pembayaran</h3>
                        <div class="row">
                            <div class="col-md-12">
                                {{-- {{ dd($nomor[0]->nomor_transaksi) }} --}}
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Nomor Rekening<span class="required">*</span></label>										
                                    <input type="text" placeholder="" name="nomor_rekening"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Atas Nama<span class="required"></span></label>										
                                    <input type="text" placeholder="" name="atasnama"/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Bank yang digunakan</label>
                                    <input type="text" placeholder="" name="bankanda"/>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Bank Tujuan<span class="required">*</span></label>
                                    <select name="bankkita" id="bank">
                                        <option value="BRI">BRI</option>
                                    </select>
                                </div>
                            </div>
                            {{-- {{ dd(now()) }} --}}
                            
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Pengiriman<span class="required">*</span></label>
                                    <select name="pengiriman" id="pengiriman" onchange="showDiv(this)">
                                        <option id = '1' value="Jemput ditempat">Jemput di tempat</option>
                                        <option id = '2' value="Antar alamat">Antar alamat *khusus UNIB belakang</option>
                                    </select>
                                    <span class="mu-2">*jika diantar kealamat akan dikenakan ongkos kirim 5000 (khusus sekitar UNIB)</span>                </div>
                            </div>
                            <script type="text/javascript">
                                function showDiv(select){
                                    if(select.value=="Jemput ditempat"){
                                        console.log('tempat');
                                        // document.getElementById('ditempat').style.display = "block";
                                        // document.getElementById('ditempat').classList.add('d-block')
                                        // document.getElementById('antar').classList.remove('d-block')
                                        document.getElementById('antar').classList.remove('d-block')
                                        document.getElementById('ditempat').classList.remove('d-none')
                                        document.getElementById('antar').classList.add('d-none')
                                        document.getElementById('ditempat').classList.add('d-block')
                                    } else{
                                        console.log('antar');
                                        // document.getElementById('antar').style.display = "none";
                                        document.getElementById('ditempat').classList.remove('d-block')
                                        document.getElementById('antar').classList.remove('d-none')
                                        document.getElementById('ditempat').classList.add('d-none')
                                        document.getElementById('antar').classList.add('d-block')
                                    }
                                } 
                            </script>
                            
                            
                            <div id="ditempat" class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Jumlah<span class="required">*</span></label>										
                                    <input type="text" name="jumlahdb" value="{{ number_format($nomor->sum('total')) }}" readonly/>
                                </div>
                            </div>	
                            <div id="antar" class="col-md-12 d-none">
                                <div class="checkout-form-list">
                                    <label>Jumlah<span class="required">*</span></label>										
                                    <input type="text" name="jumlahdb" value="{{ number_format($nomor->sum('total')+5000) }}" readonly/>
                                </div>
                            </div>	
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Tanggal Transfer<span class="required">*</span></label>										
                                    <input name="tf" class="form-control" type="text" value="{{ now() }}" readonly>
                                </div>
                            </div>
                        </div>	
                        
                        <label for="exampleFormControlFile1">Upload Bukti Transfer</label>
                        <input type="file" class="form-control" id="bukti" name="bukti" multiple>
                        
                    </div>
                    <div class="d-flex justify-content-center pt-5">
                        <button class="btn btn-dark" type="submit">Konfirmasi</button> 
                    </div>
                </form>
            </div>
            
        </div>
        <div class="col-lg-6 col-md-12 col-12">
            <div class="card p-3">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width: 30px">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="row">
                            <img src="{{ asset('users/assets/img/logo/BRI.png') }}" alt="" style="width: 75px">
                            <div class="col-md-6">
                                <h5>Incubator Pertanian</h5>
                                <h5>1234534223</h5>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
            
            <div class="d-flex justify-content-center pt-5">
                <form action="{{ route('konfirmasipesanan', $nomor[0]->nomor_transaksi ) }}" method="post">
                    @csrf
                    @method('put')
                    
                </form>
            </div>
        </div>
        
    </div>
</div>
@endsection