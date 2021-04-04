@extends('admin.layout')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-default">
                    <div class="card-header card-header-berder-bottom">
                        <h2>Kategori</h2>
                    </div>
                    <div class="card-body ">
                        <table class="table table-boardered table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Nama Kategori</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @forelse ($kategori as $k)
                                    <tr>
                                        <td>{{$k->id}}</td>
                                        <td>{{$k->nama_kategori}}</td>
                                        <td>
                                            <button class="btn btn-dark btn-xs">Edit</button>
                                            <button class="btn btn-danger btn-xs">Hapus</button>
                                        </td>
                                    </tr>
                                @empty
                                    <td colspan="3">Tidak Ada Data</td>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="table-footer text-right">
                            <a href="{{url('admin/kategori/tambah') }}" class="btn btn-primary">Tambah</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection