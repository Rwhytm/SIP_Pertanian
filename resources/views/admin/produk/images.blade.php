@extends('admin.layout')

@section('content')

<div class="content">
    <div class="row">
        {{-- <div class="col-lg-4">
            @include('admin.products.product_menus')
        </div> --}}
        <div class="col-lg-8">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                        <h2>GAMBAR PRODUK :  {{$produk->nama_produk}}</h2>
                </div>
                <div class="card-body">
                    {{-- @include('admin.partials.flash') --}}
                    <table class="table table-bordered table-stripped">
                        <thead>
                            <th class="text-center">#</th>
                            <th class="text-center">Gambar</th>
                            <th class="text-center">Kapan Diunggah</th>
                            <th class="text-center">Action</th>
                        </thead>
                        <tbody>
                            @forelse ($image as $i)
                                <tr>    
                                    <td class="text-center">{{ $i->id }}</td>
                                    {{-- <td><img src="{{ asset('storage/'.$i->path) }}" style="width:150px"/></td> --}}
                                    <td class="text-left"><img src="{{ URL::asset($i->path) }}" style="width:50px"/></td>
                                    <td class="text-center">{{ $i->created_at }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                        <form action="" method="POST">
                                            @method('delete')
                                            @csrf
                                            
                                                <button class="btn btn-danger mr-3">Hapus</button>
                                        </form>
                                    </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" >Tidak Ada Data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ url('admin/produk/'.$produk->id.'/add-image') }}" class="btn btn-primary">Tambah Gambar</a>
                </div>
            </div>  
        </div>
    </div>
</div>
@endsection