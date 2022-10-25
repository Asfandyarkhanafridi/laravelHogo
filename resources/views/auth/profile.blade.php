@extends('layouts.nav')
@section('title', 'Profile')
@section('app-content', 'app-content')

@section('main-content')
    <div class="container content-area">
        <div class="sideapp">
            <!-- page-header -->
            <div class="page-header mt-0 mb-0">
                <ol class="breadcrumb"><!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="{{route('users.index')}}">User List</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('Edit Profile') }}</li>
                </ol><!-- End breadcrumb -->
            </div>
            <!-- End page-header -->
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('profile.update') }}" method="POST" class="card" autocomplete="off">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label required">{{ __('Name') }}</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required>
                            </div>
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label required">{{ __('Email address') }}</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required>
                            </div>
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label class="form-label required">Old Password</label>
                                <input type="password" class="form-control" name="oldPassword" placeholder="Enter Old Password">
                                @error('oldPassword')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">{{ __('New password') }}</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('New password') }}">
                            </div>
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label required">{{ __('New password confirmation') }}</label>
                                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="{{ __('New password confirmation') }}" autocomplete="new-password">
                            </div>
                            @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
