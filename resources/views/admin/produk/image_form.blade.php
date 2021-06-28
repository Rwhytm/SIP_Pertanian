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
                    <h2>Upload Images</h2>
                </div>
                <div class="card-body">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <p><strong>Opps Something went wrong</strong></p>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    {{-- @include('admin.partials.flash', ['$errors' => $errors]) --}}
                    <form action="{{route('upload_image', $produk->id)}}"  method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <label for="formFileMultiple" class="form-label">Upload Gambar</label>
                        <input class="form-control" name="image" type="file" id="image" multiple placeholder="produk image" />
                       
                        
                        <div class="form-footer pt-5 border-top">
                            <button type="submit" class="btn btn-primary btn-default">Save</button>
                            <a href=" {{ url()->previous() }} " class="btn btn-secondary btn-default">Back</a>
                        </div>
                    </form>
                    
                </div>
            </div>  
        </div>
    </div>
</div>
@endsection