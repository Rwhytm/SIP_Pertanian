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
                            <th class="text-center">#</th>
                            <th class="text-center">Nama Produk</th>
                            <th class="text-center">Jumlah</th>
                            <th class="text-center">Harga</th>
                            <th class="text-center">Deskripsi</th>
                            <th class="text-center">Kategori</th>
                            <th class="text-center">Gambar</th>
                            <th class="text-center">Action</th>
                        </thead>
                        <tbody>
                            @forelse ($produk as $p)
                                <tr>
                                    <td class="text-center">{{$p->id}}</td>
                                    <td class="text-left">{{$p->nama_produk}}</td>
                                    <td  class="text-center">{{$p->jumlah}}</td>
                                    <td class="text-center">{{$p->harga}}</td>
                                    <td class="text-left">{{Str::limit($p->deskripsi, 10)}}</td>
                                    @forelse ($p->kategori as $q)
                                    <td class="text-center">{{$q->nama_kategori}}</td>
                                    @empty
                                    <td>
                                       {{'-'}}
                                    </td>
                                    @endforelse
                                    <td class="text-center">{{$p->produkImages->count()}}</td>
                                    <td>
                                        <div class="d-flex justify-content-end">
                                        <form action="{{route('produk.hapus', $p->id)}}" method="POST">
                                            @method('delete')
                                            @csrf
                                            
                                                <button class="btn btn-danger mr-3">Hapus</button>
                                        </form>
                                        <br>
                                        <a href="{{ route('produk.edit', $p->id) }}" class="btn btn-secondary btn-default">Ubah & Tambah Gambar</a>
                                    </div>
                                    </td>
                                </tr>
                            @empty
                                <td colspan="8">Tidak Ada Data</td>
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