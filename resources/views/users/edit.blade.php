@extends('layouts.nav')
@section('title', 'User Edit')
@section('app-content', 'app-content')

@section('main-content')
    <div class="container content-area">
        <div class="sideapp">
            <!-- page-header -->
            <div class="page-header mt-0 mb-0">
                <ol class="breadcrumb"><!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="{{route('users.index')}}">User List</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('Edit User') }}</li>
                </ol><!-- End breadcrumb -->
            </div>
            <!-- End page-header -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        @include('partials.message')
                        <div class="card-header">
                            <h3 class="mb-0 card-title">{{ __('Edit User') }}</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('users.update',$user->userID)}}">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="hidden" class="form-check-input" name="statusID" value="1">
                                            <input type="hidden" class="form-check-input" name="roleID" value="1">

                                            <label class="form-label required">User Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Enter User Name" value="{{$user->name}}">
                                            @if($errors->has('name'))
                                                <div class="text-danger">
                                                    {{ $errors->first('name') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label required">Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{$user->email}}">
                                            @if($errors->has('email'))
                                                <div class="text-danger">
                                                    {{ $errors->first('email') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label required">Old Password</label>
                                            <input type="password" class="form-control" name="oldPassword" placeholder="Enter Old Password">
                                            @if($errors->has('oldPassword'))
                                                <div class="text-danger">
                                                    {{ $errors->first('oldPassword') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label required">Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Enter Password">
                                            @if($errors->has('password'))
                                                <div class="text-danger">
                                                    {{ $errors->first('password') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label required">Confirm Password</label>
                                            <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password">
                                            @if($errors->has('confirmPassword'))
                                                <div class="text-danger">
                                                    {{ $errors->first('confirmPassword') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{route('users.index')}}" type="button" class="btn btn-secondary">Back</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
