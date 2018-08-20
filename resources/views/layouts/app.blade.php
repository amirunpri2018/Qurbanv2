<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--<![endif]-->
@include('layouts.top')

<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="{{url('/')}}">
                {{--<img src="{{ asset('assets/img/logo.png') }}" alt="logo" width="30" height="30" class="logo-default" /> --}}
            </a>
            <div class="menu-toggler sidebar-toggler">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN PAGE ACTIONS -->
        <!-- DOC: Remove "hide" class to enable the page header actions -->
        <div class="page-actions">
            <div class="btn-group">
                @if(\Request::route()->getName() == 'ditujukan')
                    <a href="{{route('ditujukan.input')}}" class="btn btn-circle btn-outline red" >
                        <i class="fa fa-plus"></i>&nbsp;
                        <span class="hidden-sm hidden-xs">Data Baru&nbsp;</span>&nbsp;
                    </a>
                @else
                    <a href="{{route('qurban.input')}}" class="btn btn-circle btn-outline red" >
                        <i class="fa fa-plus"></i>&nbsp;
                        <span class="hidden-sm hidden-xs">Data Baru&nbsp;</span>&nbsp;
                    </a>
                @endif
            </div>
        </div>
        <!-- END PAGE ACTIONS -->
        <!-- BEGIN PAGE TOP -->
        <div class="page-top">
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img alt="" class="img-circle" src="../assets/layouts/layout2/img/avatar3_small.jpg" />
                            <span class="username username-hide-on-mobile"> {{ Auth::user()->nama }} </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="page_user_profile_1.html">
                                    <i class="icon-user"></i> Profil </a>
                            </li>
                            <li>
                                <a href="app_calendar.html">
                                    <i class="icon-calendar"></i> Ganti Password </a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="icon-key"></i> Log Out </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- END SIDEBAR -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <li class="nav-item start {{ (\Request::route()->getName() == 'home') ? 'active' : '' }}">
                    <a href="{{url('home')}}" class="nav-link">
                        <i class="icon-home"></i>
                        <span class="title">Dashboard</span>
                        <span class="selected"></span>
                        <span class="arrow"></span>
                    </a>
                </li>
                <li class="nav-item {{ (\Request::route()->getName() == 'qurban' || \Request::route()->getName() == 'qurban.input' || \Request::route()->getName() == 'qurban.edit') ? 'active' : '' }}">
                    <a href="{{route('qurban')}}" class="nav-link nav-toggle">
                        <i class="icon-wallet"></i>
                        <span class="title">Qurban</span>
                        <span class="selected"></span>
                        <span class="arrow"></span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class=" icon-user-follow"></i>
                        <span class="title">Penerima Daging</span>
                        <span class="selected"></span>
                        <span class="arrow"></span>
                    </a>
                </li>
                <li class="nav-item  {{ (\Request::route()->getName() == 'kupon' || \Request::route()->getName() == 'kupon.qc') ? 'active' : '' }}">
                    <a href="{{route('kupon')}}" class="nav-link nav-toggle">
                        <i class="icon-doc"></i>
                        <span class="title">Kupon</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="{{route('kupon.qc','sapi')}}" class="nav-link ">
                                <span class="title">Kupon Pengurban Sapi</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{route('kupon.qc','kambing')}}" class="nav-link ">
                                <span class="title">Kupon Pengurban Kambing</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{route('kupon.qc','warga')}}" class="nav-link ">
                                <span class="title">Kupon Warga</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-bag"></i>
                        <span class="title">Daging</span>
                        <span class="selected"></span>
                        <span class="arrow"></span>
                    </a>
                </li>
                <li class="nav-item  {{ (\Request::route()->getName() == 'ditujukan' || \Request::route()->getName() == 'ditujukan.input' || \Request::route()->getName() == 'ditujukan.edit') ? 'active' : '' }}">
                    <a href="{{route('ditujukan')}}" class="nav-link nav-toggle">
                        <i class="icon-user-following"></i>
                        <span class="title">Ditujukan Untuk</span>
                        <span class="selected"></span>
                        <span class="arrow"></span>
                    </a>
                </li>
                @if(Auth::user()->role == 'Admin')
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-users"></i>
                        <span class="title">Users</span>
                        <span class="selected"></span>
                        <span class="arrow"></span>
                    </a>
                </li>
                @endif
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <h1 class="page-title"> @yield('title')
                {{--<small>statistics, charts, recent events and reports</small>--}}
            </h1>
            <!-- END PAGE HEADER-->

            @yield('content')

        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner"> {{date('Y')}} &copy; Metronic Theme By
        <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;| Aplikasi Qurban V1
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- END FOOTER -->
@include('layouts.bottom')
</body>

</html>