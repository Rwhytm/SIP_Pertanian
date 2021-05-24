@extends('admin.layout')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-">
                    <h2>Produk</h2>
                </div>
                <div class="col-md-11">
                <div class="text-right">
                    <a href="{{url('admin/produk/tambah') }}" class="btn btn-primary">Tambah</a>
                </div>
                 </div>
                <div class="card-body ">
                    <table class="table table-boardered table-striped">
                        <thead>
                            <th>#</th>
                            <th>Nama Produk</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Kategori</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @forelse ($produk as $p)
                                <tr>
                                    <td>{{$p->id}}</td>
                                    <td>{{$p->nama_produk}}</td>
                                    <td>{{$p->jumlah}}</td>
                                    <td>{{$p->harga}}</td>
                                    <td>{{$p->deskripsi}}</td>
                                    @forelse ($p->kategori as $p)
                                    <td>{{$p->nama_kategori}}</td>
                                    @empty
                                    <td>
                                       {{'-'}}
                                    </td>
                                    @endforelse
                                    <td>
                                        
                                        <div class="col-md-6 box ">
                                        <form action="{{route('produk.hapus', $p->id)}}" method="POST">
                                            @method('delete')
                                            @csrf
                                            
                                                <button class="btn btn-danger">Hapus</button>
                                        </form>
                                        <br>
                                        <a href="{{ route('produk.edit', $p->id) }}" class="btn btn-secondary btn-default">Ubah</a>
                                    </div>
                                    </td>
                                </tr>
                            @empty
                                <td colspan="7">Tidak Ada Data</td>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $produk->links() }}
                    <div class="table-footer text-right">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection