@extends('admin.layout')
@section('content')
    @php
        $forTitle = !empty($kategori) ? 'Update' : 'New'
    @endphp
    <div class="content">
        <div class="row">
            <div class="col-lg-5">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>{{$formTitle}}</h2>
                    </div>
                    <div class="card-body">
                        @if (!empty($kategori))
                        {!! Form::model($kategori, ['url'=>['admin/categories', $kategori->id], 'method'=> 'PUT']) !!}
                        {!! Form::hidden('id') !!} 
                        @else
                            {!! Form::open('url'=> 'admin/category') !!}
                        @endif
                        <div class="form-group">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder' => 'Nama Kategori']) !!}
                        </div>
                        <div class="form-footer pt-5 border-top">
                            <button type="submit" class="btn btn-primary btn-default">Save</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection