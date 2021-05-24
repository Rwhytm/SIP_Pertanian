@extends('admin.layout')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Menu Produk</h2>
                    </div>
                    <div class="card-body">
                        <nav class="nav flex-column">
                            {{-- <a class="nav-link" href="{{ url('admin/products/'. $productID .'/edit') }}">Product Detail</a> --}}
                            <a class="nav-link" 
                            href="{{ url('admin/produk/'.$produk->id.'/images') }}"
                            >Gambar Produk</a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
        <div class="card card-dafult">
            <div class="card-header card-header-border-bottom">
                <h2>Form Produk</h2>
            </div>
            <div class="card-body">
                <form action="{{route('produk.update',$produk->id)}}" method="post">
                    {{ csrf_field() }}
                    @method('PUT')
                <div class="form-group row">
                    <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama Produk') }}</label>
                    <div class="col-md-7">
                        <input id="nama" type="text" class="form-control" name="nama" value="{{$produk->nama_produk}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-md-4 col-form-label text-md-right">{{ __('Jumlah Produk') }}</label>
                    <div class="col-md-7">
                        <input id="jumlah" type="text" class="form-control" name="jumlah" value="{{$produk->jumlah}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Kategori" class="col-md-4 col-form-label text-md-right">{{ __('Kategori') }}</label>
                    <div class="col-md-7">
                        <select class="form-control" name="kategori_id" >
                            <option >--Pilih Kategori--</option>
                            @foreach ($kategori as $k)
                               <option value="{{$k->id}}" {{ ($k->id == $k->id) ? "selected" : "" }}>{{ $k->nama_kategori }}</option> 
                            @endforeach
                            
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-md-4 col-form-label text-md-right">{{ __('Harga') }}</label>
                    <div class="col-md-7">
                        <input id="harga" type="text" class="form-control" name="harga" value="{{$produk->harga}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi') }}</label>
                    <div class="col-md-7">
                        <textarea name="deskripsi" class="form-control" id="deskripsi" cols="40" rows="5" >{{$produk->deskripsi}}</textarea>
                        @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                {{-- <div class="form-group row">
                    <label for="foto_produk" class="col-md-4 col-form-label text-md-right">{{ __('Foto Produk') }}</label>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-center">
                            <div class="btn btn-mdb-color btn-rounded float-left">
                            <input type="file">
                          </div>
                        </div>
                        @error('Foto Produk')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div> --}}
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
        </div>
    </div>

    </div>
@endsection