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
                    <a href="{{url('admin/kategori/tambah') }}" class="btn btn-primary">Tambah</a>
                </div>
                 </div>
                <div class="card-body ">
                    <table class="table table-boardered table-striped">
                        <thead>
                            <th>#</th>
                            <th>Nama Produk</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @forelse ($produk as $p)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$p->nama_produk}}</td>
                                    <td>
                                        
                                        <div class="col-md-6 box ">
                                        <form action="{{route('kategori.hapus', $p->id)}}" method="POST">
                                            @method('delete')
                                            @csrf
                                            
                                                <button class="btn btn-danger">Hapus</button>
                                        </form>
                                    
                                        <br>
                                        <a href="{{ route('kategori.edit', $p->id) }}" class="btn btn-info">Ubah</a>
                                    </div>
                                    </td>
                                </tr>
                            @empty
                                <td colspan="3">Tidak Ada Data</td>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="table-footer text-right">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection