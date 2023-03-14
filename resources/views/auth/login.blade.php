@extends('layouts.app')
@section('more-style')
    <style>
        .bg-image{
            background-image: url('/assets/images/photos/bgImage.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
@endsection
@section('copyright-text','text-black')
@section('body-class','bg-image')

@section('title', 'Login')

@section('main-content')
    <div class="container-fluid text-center text-dark">
        <div class="row mt-md-5">
            <div class="col-lg-4 col-xl-3 col-sm-8 d-block mx-auto">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">{{ __('Login') }}</div>
                            <div class="card-body">
                                <div class="text-center mb-6">
                                    <img src="{{asset('/assets/images/brand/logo.png')}}" class="" alt="NFMS Logo">
                                </div>
                                <h3>Login</h3>
                                <p class="text-muted">Sign In to your account</p>
                                <form action="{{ route('login') }}" method="post" autocomplete="off">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <span class="input-group-addon "><i class="fa fa-user"></i></span>
                                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-Mail Address') }}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="input-group mb-4">
                                        <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary btn-block"> {{ __('Login') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
