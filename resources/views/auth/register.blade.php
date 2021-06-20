@extends('layouts.app')
<link href="{{ URL::asset('admin/assets/css/styles.css') }}" rel="stylesheet" />
@section('content')
<div class="container d-flex flex-column justify-content-between vh-100">
    <div class="row justify-content-center mt-5">
      <div class="col-xl-5 col-lg-6 col-md-10">
        <div class="card">
          <div class="card-header bg-primary">
            <div class="app-brand">
              
            </div>
          </div>
          <div class="card-body p-5">
            <h4 class="text-dark mb-5">{{ __('Register') }}</h4>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
              <div class="row">
                <div class="form-group col-md-12 mb-4">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nama">
                  @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-12 mb-4">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-12 ">
                    <input id="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="" required autocomplete="nohp" autofocus placeholder="Nomor HP">

                    @error('nohp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-12 ">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Kata Sandi">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-12 ">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi Kata Sandi">
                </div>
                <div class="form-group col-md-12 ">
                    <textarea name="alamat" class="form-control" id="alamat" cols="40" rows="5" placeholder="Alamat"></textarea>
                        @error('no hp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                
                <div class="col-md-12">
                  <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">{{ __('Register') }}</button>
                  <p>Already have an account?
                    <a class="text-blue" href="{{route('login2')}}">Sign in</a>
                  </p>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>

@endsection
