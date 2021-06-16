@extends('admin.layout')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-">
                    <h2>Pesanan Sudah Dibayar</h2>
                </div>
                <div class="col-md-11">
                    
                </div>
                <div class="card-body ">
                    <table class="table table-boardered table-striped">
                        <thead>
                            <th class="text-center">Nomor Tansakasi</th>
                            <th class="text-center">Tanggal</th>
                            {{-- <th class="text-center">Jumlah Pembayaran</th> --}}
                            <th class="text-center">Status</th>
                            <th class="text-center">Informasi</th>
                            <th class="text-center">Action</th>
                        </thead>
                        <tbody>
                            @foreach ($keranjang as $k)
                            @if ($k->status == 'sukses')
                            
                            
                            
                            @else
                            <tr>
                                <td class="text-center">{{ $k->nomor_transaksi }}</td>
                                <td class="text-center">{{ $k->updated_at }}</td>
                                {{-- <td class="text-center"></td> --}}
                                <td class="text-center">{{ $k->status }}</td>
                                <td class="text-center">
                                    <form action="{{ route('invoice', $k->nomor_transaksi) }}" method="GET">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">i</button>   
                                    </form> 
                                </td>
                                <td class="text-center">
                                    @if ($k->status == 'pending')
                                    <p>Menuggu Konfirmasi</p>
                                    @else
                                    <div class="d-flex justify-content-end">
                                        <div class="mr-1">
                                            <form action="{{ route('proses.pesanan', $k->nomor_transaksi)}}" method="POST">
                                                @csrf
                                                @method('put')
                                                <button class="btn btn-dark">Proses Pesanan</button>
                                            </form>
                                        </div>
                                        <div class="mr-1">
                                            <form action="{{ route('cancel.pesanan', $k->nomor_transaksi)}}" method="POST">
                                                @csrf
                                                @method('put')
                                                <button class="btn btn-danger">Batalkan</button>
                                            </form>
                                        </div>
                                    </div>
                                    @endif
                                    
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                        {{-- {{ $keranjang->links() }} --}}
                    </table>
                    <div class="table-footer text-right">
                        {{-- {{ $keranjang->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection