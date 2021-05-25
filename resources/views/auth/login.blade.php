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
            <h4 class="text-dark mb-5 ">{{ __('Login') }}</h4>
            @if ($errors->any())
                <div class="alert alert-danger">
                     <ul>
                        @foreach ($errors->all() as $error)
                             <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ url('login/success') }}" method="POST">
                @csrf
              <div class="row">
                <div class="form-group col-md-12 mb-4">
                  
                  <input type="email" class="form-control input-lg @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp" placeholder="E-mail" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                    @enderror
                </div>
                <div class="form-group col-md-12 ">
                  <input type="password" class="form-control input-lg @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required autocomplete="current-password">
                     @error('password')
                        <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                </div>
                <div class="col-md-12">
                  <div class="d-flex my-2 justify-content-between">
                    <div class="d-inline-block mr-3">
                      <label class="control control-checkbox">{{ __('Remember Me') }}
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                        <div class="control-indicator"></div>
                      </label>
                    </div>
                    <p><a class="text-blue" href="{{ route('password.request') }}">Forgot Your Password?</a></p>
                  </div>
                  <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Sign In</button>
                  <p>Don't have an account yet ?
                    <a class="text-blue" href="{{route('register')}}">Sign Up</a>
                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
