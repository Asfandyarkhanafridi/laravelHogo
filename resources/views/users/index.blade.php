@extends('layouts.nav')
@section('title', 'Users')
@section('app-content', 'app-content')

@section('main-content')
    <div class="container-fluid content-area">
        <div class="sideapp">
            <!-- End page-header -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        @include('partials.message')
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fa fa-users"></i> &ensp; Users
                            </h3>
                            @can('user_create')
                            <a href="{{route('users.create')}}" class="btn btn-primary ml-auto">
                                <i class="fa fa-plus"></i> &ensp;Add User
                            </a>
                            @endcan
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table-sm table-striped text-nowrap w-100 display">
                                    <thead>
                                    <tr>
                                        <th class="wd-15p">SrNo.</th>
                                        <th class="wd-25p">User Name</th>
                                        <th class="wd-25p">User Email</th>
                                        <th class="wd-25p">User Type</th>
                                        <th class="wd-15p">Date Created</th>
                                        <th class="wd-25p notExport" style="width: 2%; !important;">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->userType->userType}}</td>
                                            <td>{{date('d-m-Y', strtotime($user->dateCreated))}}</td>
                                            <td>
                                                @php
                                                    $crud = 'users';
                                                    $row = $user->userID;
                                                @endphp
                                                <a href="{{ route($crud . '.show', $row) }}" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Show"><i class="fe fe-eye"></i></a>
                                                <a href="{{ route($crud . '.edit', $row) }}" class="btn btn-sm btn-success" data-toggle="tooltip" title="Edit"><i class="fe fe-edit"></i></a>
                                                @if($user->userID != 1)
                                                <form action="{{ route($crud . '.destroy', $user->userID) }}" method="POST" class="deleteForm" onsubmit="return confirm(' ! WARNING ! If you Press OK it can not be recovered?');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" onclick="sweetAlertCall(this)" title="Delete" style="color:white;"><i class="fe fe-trash-2"></i></button>
                                                </form>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- table-wrapper -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('more-script')
    @include('partials.shortcutKeyCreate')
    <script>
        function sweetAlertCall(trElem){
            var tr = $(trElem).closest('tr');
            var promise = swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this data!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Poof! Your data has been deleted!", {
                            icon: "success",
                        });
                        tr.find('.deleteForm').submit();
                    } else {
                        swal("Your data is safe!");
                    }
                });
        }
    </script>
@endsection
