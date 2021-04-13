@extends('admin.layout')
@section('content')
    <div class="content">
        <div class="card card-dafult">
            <div class="card-header card-header-border-bottom">
                <h2>Form Produk</h2>
            </div>
            <div class="card-body">
                <form action="{{route('produk store')}}" method="post">
                    {{ csrf_field() }}
                <div class="form-group row">
                    <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama Produk') }}</label>
                    <div class="col-md-6">
                        <input id="nama" type="text" class="form-control" name="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-md-4 col-form-label text-md-right">{{ __('Jumlah Produk') }}</label>
                    <div class="col-md-6">
                        <input id="jumlah" type="text" class="form-control" name="jumlah">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-md-4 col-form-label text-md-right">{{ __('Harga') }}</label>
                    <div class="col-md-6">
                        <input id="harga" type="text" class="form-control" name="harga">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi') }}</label>
                    <div class="col-md-6">
                        <textarea name="deskripsi" class="form-control" id="deskripsi" cols="40" rows="5"></textarea>
                        @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>

    </div>
@endsection