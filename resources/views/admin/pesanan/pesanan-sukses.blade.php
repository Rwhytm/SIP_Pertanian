@extends('admin.layout')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-">
                    <h2>Pesanan Sukses</h2>
                </div>
                <div class="col-md-11">
                    
                </div>
                <div class="card-body ">
                    <table class="table table-boardered table-striped">
                        <thead>
                            <th class="text-center">Nomor Tansakasi</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">Pembeli</th>
                            <th class="text-center">Jumlah Pembayaran</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </thead>
                        <tbody>
                            @foreach ($keranjang as $k)
                                
                            <tr>
                                <td class="text-center">{{ $k->nomor_transaksi }}</td>
                                <td class="text-center">{{ $k->updated_at }}</td>
                                <td class="text-center">{{ $k->user_id}}</td>
                                <td class="text-center">{{ $k->user[0]->nama }}</td>
                                <td class="text-center">{{ $k->status }}</td>
                                <td class="text-center">{{ $k->total }}</td>
                                <td>
                                    
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    {{-- {{ $kategori->links() }} --}}
                    <div class="table-footer text-right">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection