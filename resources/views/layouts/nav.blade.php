@extends('layouts.app')
@section('body-class', 'app sidebar-mini rtl')
@section('nav')
<div class="page" xmlns="">
    <div class="page-main">
        <!--app-header-->
        <div class="app-header  header hor-topheader d-flex">
            <div class="container">
                <div class="d-flex">
                    <a class="header-brand" href="{{route('home')}}">
                        <img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img main-logo" alt="NFMS logo">
                     </a><!-- logo-->
                    {{--<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href=""></a>--}}
                    <a id="horizontal-navtoggle" class="animated-arrow hor-toggle"><span></span></a>

                    <div class="d-flex order-lg-2 ml-auto header-rightmenu">
                        <div class="dropdown">
                            <div class="dropdown header-notify">
                                <a class="nav-link icon" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fe fe-log-out "></i>
                                    <span class="pulse bg-success"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();"><strong><i class="fe fe-user"></i> {{ __(' Logout') }}-{{ ucfirst(Auth::user()->name) }}</strong></a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                </div>
                            </div><!-- logout -->
                        </div>
                        <div class="dropdown">
                            <a  class="nav-link icon full-screen-link" id="fullscreen-button" data-toggle="fullscreen-button" data-placement="bottom" title="FullScreen">
                                <i class="fe fe-maximize-2"></i>
                            </a>
                        </div><!-- full-screen -->
                    </div>
                </div>
            </div>
        </div>
        <!--app-header end-->

        <!-- Horizontal-menu -->
        <div class="horizontal-main hor-menu clearfix">
            <div class="horizontal-mainwrapper container clearfix">
                <nav class="horizontalMenu clearfix">
                    <ul class="horizontalMenu-list">
                        {{-- Dashboard   --}}
                        <li aria-haspopup="true"><a href="{{route('home')}}" class="sub-icon @if(request()->route()->action['as'] == 'home') active @endif"><i class="typcn typcn-device-desktop hor-icon"></i> Dashboard</a></li>

                        {{-- Random     --}}
                        <li aria-haspopup="true"><a class="sub-icon "><i class="typcn typcn-th-large-outline hor-icon"></i> Random <i class="fa fa-angle-down horizontal-icon"></i></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="#"  class="sub-icon ">Random 1</a></li>
                                <li aria-haspopup="true"><a href="#"  class="sub-icon ">Random 2</a></li>
                                <li aria-haspopup="true"><a href="#"  class="sub-icon ">Random 3</a></li>
                                <li aria-haspopup="true"><a href="#"  class="sub-icon ">Random 4</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!--Nav end -->
            </div>
        </div>
        <!-- Horizontal-menu end -->
    </div>
</div
@endsection
