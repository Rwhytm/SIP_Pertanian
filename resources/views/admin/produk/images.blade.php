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
                        <h2>Gambar Produk</h2>
                </div>
                <div class="card-body">
                    {{-- @include('admin.partials.flash') --}}
                    <table class="table table-bordered table-stripped">
                        <thead>
                            <th>#</th>
                            <th>Gambar</th>
                            <th>Kapan Diunggah</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @forelse ($image as $i)
                                <tr>    
                                    <td>{{ $i->id }}</td>
                                    {{-- <td><img src="{{ asset('storage/'.$i->path) }}" style="width:150px"/></td> --}}
                                    <td><img src="{{ URL::asset($i->path) }}" style="width:50px"/></td>
                                    <td>{{ $i->created_at }}</td>
                                    <td>
                                        {{-- {!! Form::open(['url' => 'admin/products/images/'. $image->id, 'class' => 'delete', 'style' => 'display:inline-block']) !!}
                                        {!! Form::hidden('_method', 'DELETE') !!}
                                        {!! Form::submit('remove', ['class' => 'btn btn-danger btn-sm']) !!}
                                        {!! Form::close() !!} --}}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No records found</td>
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