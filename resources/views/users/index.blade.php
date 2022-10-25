@extends('layouts.nav')
@section('title', 'Users')
@section('app-content', 'app-content')

@section('main-content')
    <div class="container content-area">
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
                            <a href="" class="btn btn-primary ml-auto">
                                <i class="fa fa-plus"></i> &ensp;Add Purchase</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered text-nowrap w-100 display">
                                    <thead>
                                    <tr>
                                        <th class="wd-15p">SrNo.</th>
                                        <th class="wd-25p">Company Name</th>
                                        <th class="wd-15p">Amount</th>
                                        <th class="wd-25p notExport" style="width: 2%; !important;">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>a</td>
                                            <td>b</td>
                                            <td>c
{{--                                                @php--}}
{{--                                                    $crud = 'purchase';--}}
{{--                                                    $row = $purchase->id;--}}
{{--                                                @endphp--}}
{{--                                                <a href="{{ route($crud . '.show', $row) }}" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Show"><i class="fe fe-eye"></i></a>--}}
                                            </td>
                                        </tr>
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
