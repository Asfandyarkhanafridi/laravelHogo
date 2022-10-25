@extends('layouts.app')

@section('title', 'User')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-user"></i> {{ $user->name }}
            </h3>
            <div class="card-actions">
                @can('user_update')
                <a class="btn btn-primary d-none d-sm-inline-block" href="{{ route("users.edit",$user->userID) }}">
                    <i class="fas fa-edit"></i> Edit User
                </a>
                @endcan
            </div>
        </div>
        <div class="card-body">
			<dt>
				<dd class="font-weight-bold">{{__('menu.name')}}: </dd>
				<dl>{{ $user->name}}</dl>
				<dd class="font-weight-bold">{{__('menu.email')}}: </dd>
				<dl><a href="mailto:{{ $user->email}}">{{ $user->email}}</a></dl>
				<dd class="font-weight-bold">{{__('menu.user_type')}}: </dd>
				<dl>{{ $user->userType->userType}}</dl>
				<dd class="font-weight-bold">{{__('menu.user_roles')}}: </dd>
				<dl>
					@foreach ($user->roles as $userRole)
						<span class="badge badge-info">{{$userRole->roleName}}</span>
					@endforeach
				</dl>
				<dd class="font-weight-bold">{{__('menu.create_on')}}: </dd>
				<dl>{{ $user->dateCreated}}</dl>
			</dt>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
