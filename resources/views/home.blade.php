@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container px-5 py-2 mx-auto lg:px-32">
        <div class="flex flex-wrap justify-center mx-auto ">
            <div class="w-full mt-6 lg:w-2/4 lg:pl-10 lg:py-6 lg:mt-0">
                <img alt="image"
                    class="object-cover object-center w-full h-64 rounded-lg lg:h-auto"
                    src="https://dummyimage.com/400x400/F3F4F7/8693ac">
            </div>
            <div class="w-full mt-6 lg:w-2/4 lg:pl-10 lg:py-6 lg:mt-0">
                <img alt="image"
                    class="object-cover object-center w-full h-64 rounded-lg lg:h-auto"
                    src="https://dummyimage.com/400x400/F3F4F7/8693ac">
            </div>
        </div>
    </div>
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
