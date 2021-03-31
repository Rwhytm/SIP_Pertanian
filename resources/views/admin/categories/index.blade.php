@extends('admin.layout')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-boarder-bottom">
                    <h2>Kategori</h2>
                </div>
                <div class="card-body">
                    <table class="table table-boardered table-striped">
                        <thead>
                            <th>Id Kategori</th>
                            <th>Nama Kategori</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @forelse ($kategori as $k)
                            <tr>
                                <td>{{$k->id}}</td>
                                <td>{{$k->nama_kategori}}</td>
                                <td></td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4">No Records Found</td>
                            </tr>
                                
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-right">
                    <a href="{{URL('admin/category/create')}}" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection