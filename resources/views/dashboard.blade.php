<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Laravel') }} | Dashboard</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #7 for dashboard & statistics" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ asset('assets/global/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/plugins/mapplic/mapplic/mapplic.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{ asset('assets/global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{ asset('assets/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{ asset('assets/layouts/layout7/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/layouts/layout7/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> </head>
<!-- END HEAD -->

<body class="page-container-bg-solid">
<!-- BEGIN HEADER -->
<div class="page-header navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="clearfix">
        <!-- BEGIN BURGER TRIGGER -->
        <div class="burger-trigger">
            <button class="menu-trigger">
                <img src="{{ asset('assets/layouts/layout7/img/m_toggler.png') }}" alt=""> </button>
            <div class="menu-overlay menu-overlay-bg-transparent">
                <div class="menu-overlay-content">
                    <ul class="menu-overlay-nav text-uppercase">
                        <li>
                            <a href="{{url('/')}}">Dashboard</a>
                        </li>
                        {{--<li>--}}
                            {{--<a href="#">Reports</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#">Templates</a>--}}
                        {{--</li>--}}
                        <li>
                            <a href="{{url('register')}}">Daftar</a>
                        </li>
                        <li>
                            <a href="{{url('login')}}">Log In</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="menu-bg-overlay">
                <button class="menu-close">&times;</button>
            </div>
            <!-- the overlay element -->
        </div>
        <!-- END NAV TRIGGER -->
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="index.html">
                <img src="{{ asset('assets/layouts/layout7/img/logo.png') }}" alt="logo" class="logo-default" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN NOTIFICATION DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-bell"></i>
                        <span class="badge badge-success"> 7 </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="external">
                            <h3>
                                <span class="bold">12 pending</span> notifications</h3>
                            <a href="#">view all</a>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">just now</span>
                                        <span class="details">
                                                    <span class="label label-sm label-icon label-success">
                                                        <i class="fa fa-plus"></i>
                                                    </span> New user registered. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">3 mins</span>
                                        <span class="details">
                                                    <span class="label label-sm label-icon label-danger">
                                                        <i class="fa fa-bolt"></i>
                                                    </span> Server #12 overloaded. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">10 mins</span>
                                        <span class="details">
                                                    <span class="label label-sm label-icon label-warning">
                                                        <i class="fa fa-bell-o"></i>
                                                    </span> Server #2 not responding. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">14 hrs</span>
                                        <span class="details">
                                                    <span class="label label-sm label-icon label-info">
                                                        <i class="fa fa-bullhorn"></i>
                                                    </span> Application error. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">2 days</span>
                                        <span class="details">
                                                    <span class="label label-sm label-icon label-danger">
                                                        <i class="fa fa-bolt"></i>
                                                    </span> Database overloaded 68%. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">3 days</span>
                                        <span class="details">
                                                    <span class="label label-sm label-icon label-danger">
                                                        <i class="fa fa-bolt"></i>
                                                    </span> A user IP blocked. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">4 days</span>
                                        <span class="details">
                                                    <span class="label label-sm label-icon label-warning">
                                                        <i class="fa fa-bell-o"></i>
                                                    </span> Storage Server #4 not responding dfdfdfd. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">5 days</span>
                                        <span class="details">
                                                    <span class="label label-sm label-icon label-info">
                                                        <i class="fa fa-bullhorn"></i>
                                                    </span> System Error. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">9 days</span>
                                        <span class="details">
                                                    <span class="label label-sm label-icon label-danger">
                                                        <i class="fa fa-bolt"></i>
                                                    </span> Storage server failed. </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- END NOTIFICATION DROPDOWN -->
                <!-- BEGIN INBOX DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-envelope-open"></i>
                        <span class="badge badge-danger"> 4 </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="external">
                            <h3>You have
                                <span class="bold">7 New</span> Messages</h3>
                            <a href="#">view all</a>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                <li>
                                    <a href="#">
                                                <span class="photo">
                                                    <img src="{{ asset('assets/layouts/layout3/img/avatar2.jpg') }}" class="img-circle" alt=""> </span>
                                        <span class="subject">
                                                    <span class="from"> Lisa Wong </span>
                                                    <span class="time">Just Now </span>
                                                </span>
                                        <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                                <span class="photo">
                                                    <img src="{{ asset('assets/layouts/layout3/img/avatar3.jpg') }}" class="img-circle" alt=""> </span>
                                        <span class="subject">
                                                    <span class="from"> Richard Doe </span>
                                                    <span class="time">16 mins </span>
                                                </span>
                                        <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                                <span class="photo">
                                                    <img src="{{ asset('assets/layouts/layout3/img/avatar1.jpg') }}" class="img-circle" alt=""> </span>
                                        <span class="subject">
                                                    <span class="from"> Bob Nilson </span>
                                                    <span class="time">2 hrs </span>
                                                </span>
                                        <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                                <span class="photo">
                                                    <img src="{{ asset('assets/layouts/layout3/img/avatar2.jpg') }}" class="img-circle" alt=""> </span>
                                        <span class="subject">
                                                    <span class="from"> Lisa Wong </span>
                                                    <span class="time">40 mins </span>
                                                </span>
                                        <span class="message"> Vivamus sed auctor 40% nibh congue nibh... </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                                <span class="photo">
                                                    <img src="{{ asset('assets/layouts/layout3/img/avatar3.jpg') }}" class="img-circle" alt=""> </span>
                                        <span class="subject">
                                                    <span class="from"> Richard Doe </span>
                                                    <span class="time">46 mins </span>
                                                </span>
                                        <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- END INBOX DROPDOWN -->
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <div class="dropdown-user-inner">
                            <span class="username username-hide-on-mobile"> Nick </span>
                            <img alt="" src="{{ asset('assets/layouts/layout7/img/avatar1.jpg') }}" /> </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="extra_profile.html">
                                <i class="icon-user"></i> My Profile </a>
                        </li>
                        <li>
                            <a href="page_calendar.html">
                                <i class="icon-calendar"></i> My Calendar </a>
                        </li>
                        <li>
                            <a href="inbox.html">
                                <i class="icon-envelope-open"></i> My Inbox
                                <span class="badge badge-danger"> 3 </span>
                            </a>
                        </li>
                        <li>
                            <a href="page_todo.html">
                                <i class="icon-rocket"></i> My Tasks
                                <span class="badge badge-success"> 7 </span>
                            </a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a href="extra_lock.html">
                                <i class="icon-lock"></i> Lock Screen </a>
                        </li>
                        <li>
                            <a href="login.html">
                                <i class="icon-key"></i> Log Out </a>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container page-content-inner page-container-bg-solid">
    <!-- BEGIN BREADCRUMBS -->
    <!-- Remove "hide" class from "breadcrumbs hide" DIV and "margin-top-30" class from below "container-fluid container-lf-space margin-top-30" DIV in order to use the page breadcrumbs -->
    <div class="breadcrumbs hide">
        <div class="container-fluid">
            <h2 class="breadcrumbs-title">Dashboard</h2>
            <ol class="breadcrumbs-list">
                <li>
                    <a class="breadcrumbs-item-link" href="#">Home</a>
                </li>
                <li>
                    <a class="breadcrumbs-item-link" href="#">Features</a>
                </li>
                <li>
                    <a class="breadcrumbs-item-link" href="#">Dashboard</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- END BREADCRUMBS -->
    <!-- BEGIN CONTENT -->
    <div class="container-fluid container-lf-space margin-top-30">
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="row widget-row">
            <div class="col-md-6 margin-bottom-20">
                <!-- BEGIN WIDGET MAP -->
                <div class="widget-map">
                    <div id="mapplic" class="widget-map-mapplic"></div>
                    <div class="widget-map-body text-uppercase text-center">
                        <div class="widget-sparkline-chart">
                            <div id="widget_sparkline_bar"></div>
                            <span class="widget-sparkline-title">Canada</span>
                        </div>
                        <div class="widget-sparkline-chart">
                            <div id="widget_sparkline_bar2"></div>
                            <span class="widget-sparkline-title">Australia</span>
                        </div>
                        <div class="widget-sparkline-chart">
                            <div id="widget_sparkline_bar3"></div>
                            <span class="widget-sparkline-title">Brasil</span>
                        </div>
                        <div class="widget-sparkline-chart">
                            <div id="widget_sparkline_bar4"></div>
                            <span class="widget-sparkline-title">USA</span>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET MAP -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 margin-bottom-20">
                <!-- BEGIN WIDGET GRADIENT -->
                <div class="clearfix"></div>
                <div id="carousel-example-generic-v1" class="carousel slide widget-carousel" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic-v1" data-slide-to="0" class="circle active"></li>
                        <li data-target="#carousel-example-generic-v1" data-slide-to="1" class="circle"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="widget-gradient" style="background: url(assets/layouts/layout7/img/01.jpg)">
                                <div class="widget-gradient-body">
                                    <h3 class="widget-gradient-title">Photo of The Day</h3>
                                    <ul class="widget-gradient-body-actions list-inline">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-heart"></i> 12 </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-comment"></i> 9 </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="widget-gradient" style="background: url(assets/layouts/layout7/img/02.jpg)">
                                <div class="widget-gradient-body">
                                    <h3 class="widget-gradient-title">500 New Free Photos</h3>
                                    <ul class="widget-gradient-body-actions list-inline">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-heart"></i> 17 </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-comment"></i> 8 </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET GRADIENT -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 margin-bottom-20">
                <!-- BEGIN WIDGET WRAP IMAGE -->
                <div id="carousel-example-generic-v2" class="carousel slide widget-carousel" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators carousel-indicators-red">
                        <li data-target="#carousel-example-generic-v2" data-slide-to="0" class="circle active"></li>
                        <li data-target="#carousel-example-generic-v2" data-slide-to="1" class="circle"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="widget-wrap-img widget-bg-color-white">
                                <h3 class="widget-wrap-img-title">New Mobile Layout</h3>
                                <img class="widget-wrap-img-element img-responsive" src="{{ asset('assets/layouts/layout7/img/iphone.png') }}" alt=""> </div>
                        </div>
                        <div class="item">
                            <div class="widget-wrap-img widget-bg-color-white">
                                <h3 class="widget-wrap-img-title">New Desktop Look</h3>
                                <img class="widget-wrap-img-element img-responsive" src="{{ asset('assets/layouts/layout7/img/mac.png') }}" alt=""> </div>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET WRAP IMAGE -->
            </div>
        </div>
        <div class="row widget-bg-color-white no-space margin-bottom-20">
            <div class="col-md-3 col-sm-6 no-space">
                <!-- BEGIN WIDGET SUBSCRIBE -->
                <div class="widget-subscribe widget-subscribe-quote widget-bg-color-purple">
                    <h2 class="widget-subscribe-title widget-title-color-purple-dark text-uppercase">Subscribe
                        <br/> Steps</h2>
                    <p class="widget-subscribe-subtitle widget-title-color-purple-light">Lorem ipsum dolor sit amet diam
                        <a class="widget-subscribe-subtitle-link" href="#">check out</a>
                    </p>
                </div>
                <!-- END WIDGET SUBSCRIBE -->
            </div>
            <div class="col-md-3 col-sm-6 no-space">
                <!-- BEGIN WIDGET SUBSCRIBE -->
                <div class="widget-subscribe">
                    <span class="widget-subscribe-no">1</span>
                    <h2 class="widget-subscribe-title widget-title-color-gray-dark text-uppercase">Important
                        <br/> Step</h2>
                    <p class="widget-subscribe-subtitle widget-title-color-dark-light">Lorem ipsum dolor asqudiete sit amet dolore diam sediate dolor diam
                        <a class="widget-subscribe-subtitle-link" href="#">learn more</a>
                    </p>
                </div>
                <!-- END WIDGET SUBSCRIBE -->
            </div>
            <div class="col-md-3 col-sm-6 no-space">
                <!-- BEGIN WIDGET SUBSCRIBE -->
                <div class="widget-subscribe widget-subscribe-border">
                    <span class="widget-subscribe-no">2</span>
                    <h2 class="widget-subscribe-title widget-title-color-gray-dark text-uppercase">Second
                        <br/> Step</h2>
                    <p class="widget-subscribe-subtitle widget-title-color-dark-light">Lorem ipsum dolor asqudiete sit amet dolore diam sediate psum dolor asqudiete sediat dolor diam
                        <a class="widget-subscribe-subtitle-link" href="#">learn more</a>
                    </p>
                </div>
                <!-- END WIDGET SUBSCRIBE -->
            </div>
            <div class="col-md-3 col-sm-6 no-space">
                <!-- BEGIN WIDGET SUBSCRIBE -->
                <div class="widget-subscribe widget-subscribe-border-top">
                    <span class="widget-subscribe-no">3</span>
                    <h2 class="widget-subscribe-title widget-title-color-gray-dark text-uppercase">Final
                        <br/> Action</h2>
                    <p class="widget-subscribe-subtitle widget-title-color-dark-light">Lorem ipsum dolor asqudiete sit amet dolore diam sediate dolor diam
                        <a class="widget-subscribe-subtitle-link" href="#">learn more</a>
                    </p>
                </div>
                <!-- END WIDGET SUBSCRIBE -->
            </div>
        </div>
        <div class="row widget-row">
            <div class="col-md-6 margin-bottom-20">
                <!-- BEGIN WIDGET TAB -->
                <div class="widget-bg-color-white widget-tab">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab_1_1" data-toggle="tab"> All Posts </a>
                        </li>
                        <li>
                            <a href="#tab_1_2" data-toggle="tab"> Designers </a>
                        </li>
                        <li>
                            <a href="#tab_1_3" data-toggle="tab"> Developers </a>
                        </li>
                        <li>
                            <a href="#tab_1_4" data-toggle="tab"> Others </a>
                        </li>
                    </ul>
                    <div class="tab-content scroller" style="height: 350px;" data-always-visible="1" data-handle-color="#D7DCE2">
                        <div class="tab-pane fade active in" id="tab_1_1">
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="{{ asset('assets/layouts/layout7/img/03.jpg') }}" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Wondering anyone did this
                                        <span class="label label-default"> March 25 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="{{ asset('assets/layouts/layout7/img/04.jpg') }}" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">New Workstation
                                        <span class="label label-default"> March 16 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="{{ asset('assets/layouts/layout7/img/07.jpg') }}" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">San Francisco
                                        <span class="label label-default"> March 10 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="{{ asset('assets/layouts/layout7/img/03.jpg') }}" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Wondering anyone did this
                                        <span class="label label-default"> March 25 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="{{ asset('assets/layouts/layout7/img/04.jpg') }}" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">New Workstation
                                        <span class="label label-default"> March 16 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="{{ asset('assets/layouts/layout7/img/03.jpg') }}" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Wondering anyone did this
                                        <span class="label label-default"> March 25 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news">
                                <img class="widget-news-left-elem" src="{{ asset('assets/layouts/layout7/img/05.jpg') }}" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Most Completed theme
                                        <span class="label label-default"> March 12 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab_1_2">
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="{{ asset('assets/layouts/layout7/img/04.jpg') }}" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">New Workstation
                                        <span class="label label-default"> March 16 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="{{ asset('assets/layouts/layout7/img/03.jpg') }}" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Wondering anyone did this
                                        <span class="label label-default"> March 25 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="{{ asset('assets/layouts/layout7/img/05.jpg') }}" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Most Completed theme
                                        <span class="label label-default"> March 12 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news">
                                <img class="widget-news-left-elem" src="{{ asset('assets/layouts/layout7/img/07.jpg') }}" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">San Francisco
                                        <span class="label label-default"> March 10 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab_1_3">
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="{{ asset('assets/layouts/layout7/img/05.jpg') }}" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Most Completed theme
                                        <span class="label label-default"> March 12 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="{{ asset('assets/layouts/layout7/img/07.jpg') }}" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">San Francisco
                                        <span class="label label-default"> March 10 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="{{ asset('assets/layouts/layout7/img/03.jpg') }}" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Wondering anyone did this
                                        <span class="label label-default"> March 25 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news">
                                <img class="widget-news-left-elem" src="{{ asset('assets/layouts/layout7/img/04.jpg') }}" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">New Workstation
                                        <span class="label label-default"> March 16 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab_1_4">
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/07.jpg') }}" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">San Francisco
                                        <span class="label label-default"> March 10 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="{{ asset('assets/layouts/layout7/img/04.jpg') }}" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">New Workstation
                                        <span class="label label-default"> March 16 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="{{ asset('assets/layouts/layout7/img/05.jpg') }}" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Most Completed theme
                                        <span class="label label-default"> March 12 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news">
                                <img class="widget-news-left-elem" src="{{ asset('assets/layouts/layout7/img/03.jpg') }}" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Wondering anyone did this
                                        <span class="label label-default"> March 25 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET TAB -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <!-- BEGIN PORTLET-->
                <div class="portlet light tasks-widget widget-comments">
                    <div class="portlet-title margin-bottom-20">
                        <div class="caption caption-md font-red-sunglo">
                            <span class="caption-subject theme-font bold uppercase">Quick Email</span>
                        </div>
                    </div>
                    <div class="portlet-body overflow-h">
                        <input type="text" placeholder="To" class="form-control margin-bottom-20">
                        <input type="text" placeholder="Subject" class="form-control margin-bottom-20">
                        <textarea placeholder="Message" class="form-control margin-bottom-20" rows="5"></textarea>
                        <button class="btn red-sunglo pull-right" type="button">Submit</button>
                    </div>
                </div>
                <!-- END PORTLET-->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 margin-bottom-20">
                <!-- BEGIN WIDGET PROGRESS -->
                <div class="widget-progress">
                    <div class="widget-progress-element widget-bg-color-blue margin-bottom-25">
                                <span class="widget-progress-title">Application deplyoment
                                    <span class="pull-right">77%</span>
                                </span>
                        <div class="progress">
                            <div class="progress-bar widget-bg-color-white" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"> </div>
                        </div>
                    </div>
                    <div class="widget-progress-element widget-bg-color-green margin-bottom-25">
                                <span class="widget-progress-title">Database migration
                                    <span class="pull-right">23%</span>
                                </span>
                        <div class="progress">
                            <div class="progress-bar widget-bg-color-white" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"> </div>
                        </div>
                    </div>
                    <div class="widget-progress-element widget-bg-color-red  margin-bottom-25">
                                <span class="widget-progress-title">New UI release
                                    <span class="pull-right">56%</span>
                                </span>
                        <div class="progress">
                            <div class="progress-bar widget-bg-color-white" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%;"> </div>
                        </div>
                    </div>
                    <div class="widget-progress-element widget-bg-color-purple">
                                <span class="widget-progress-title">Webserver upgrade
                                    <span class="pull-right">60%</span>
                                </span>
                        <div class="progress">
                            <div class="progress-bar widget-bg-color-white" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> </div>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET PROGRESS -->
            </div>
        </div>
        <div class="row widget-row">
            <div class="col-md-3">
                <!-- BEGIN WIDGET THUMB -->
                <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                    <h4 class="widget-thumb-heading">Current Balance</h4>
                    <div class="widget-thumb-wrap">
                        <i class="widget-thumb-icon bg-green icon-bulb"></i>
                        <div class="widget-thumb-body">
                            <span class="widget-thumb-subtitle">USD</span>
                            <span class="widget-thumb-body-stat" data-counter="counterup" data-value="7,644">0</span>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET THUMB -->
            </div>
            <div class="col-md-3">
                <!-- BEGIN WIDGET THUMB -->
                <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                    <h4 class="widget-thumb-heading">Weekly Sales</h4>
                    <div class="widget-thumb-wrap">
                        <i class="widget-thumb-icon bg-red icon-layers"></i>
                        <div class="widget-thumb-body">
                            <span class="widget-thumb-subtitle">USD</span>
                            <span class="widget-thumb-body-stat" data-counter="counterup" data-value="1,293">0</span>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET THUMB -->
            </div>
            <div class="col-md-3">
                <!-- BEGIN WIDGET THUMB -->
                <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                    <h4 class="widget-thumb-heading">Biggest Purchase</h4>
                    <div class="widget-thumb-wrap">
                        <i class="widget-thumb-icon bg-purple icon-screen-desktop"></i>
                        <div class="widget-thumb-body">
                            <span class="widget-thumb-subtitle">USD</span>
                            <span class="widget-thumb-body-stat" data-counter="counterup" data-value="815">0</span>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET THUMB -->
            </div>
            <div class="col-md-3">
                <!-- BEGIN WIDGET THUMB -->
                <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                    <h4 class="widget-thumb-heading">Average Monthly</h4>
                    <div class="widget-thumb-wrap">
                        <i class="widget-thumb-icon bg-blue icon-bar-chart"></i>
                        <div class="widget-thumb-body">
                            <span class="widget-thumb-subtitle">USD</span>
                            <span class="widget-thumb-body-stat" data-counter="counterup" data-value="5,071">0</span>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET THUMB -->
            </div>
        </div>
        <div class="row widget-row no-space margin-bottom-20">
            <div class="col-md-3 col-sm-6 col-xs-12 no-space">
                <!-- BEGIN WIDGET SOCIALS -->
                <div class="widget-socials widget-bg-color-gray">
                    <h2 class="widget-socials-title widget-title-color-white text-uppercase">Metronic
                        <br/> 6 Layout Admin</h2>
                    <div class="margin-bottom-20">
                        <strong class="widget-socials-paragraph text-uppercase">Platform</strong>
                        <a class="widget-socials-paragraph" href="#">Bootstrap Framework</a>
                    </div>
                    <strong class="widget-socials-paragraph text-uppercase">Supports</strong>
                    <a class="widget-socials-paragraph" href="#">SASS Solution</a>
                </div>
                <!-- END WIDGET SOCIALS -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 no-space">
                <!-- BEGIN WIDGET SOCIALS -->
                <div class="widget-socials widget-gradient" style="background: url(../assets/layouts/layout7/img/03.jpg)"></div>
                <!-- END WIDGET SOCIALS -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 no-space">
                <!-- BEGIN WIDGET SOCIALS -->
                <div class="widget-socials widget-bg-color-fb">
                    <i class="widget-social-icon-fb icon-social-facebook"></i>
                    <h3 class="widget-social-subtitle">
                        <a href="#">Follow us
                            <br/> on Facebook</a>
                    </h3>
                </div>
                <!-- END WIDGET SOCIALS -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 no-space">
                <!-- BEGIN WIDGET SOCIALS -->
                <div class="widget-socials widget-bg-color-tw">
                    <i class="widget-social-icon-tw icon-social-twitter"></i>
                    <h3 class="widget-social-subtitle">
                        <a href="#">Follow us
                            <br/> on Twitter</a>
                    </h3>
                </div>
                <!-- END WIDGET SOCIALS -->
            </div>
        </div>
        <div class="row widget-row">
            <div class="col-md-4">
                <!-- BEGIN PORTLET-->
                <div class="portlet light tasks-widget">
                    <div class="portlet-title">
                        <div class="caption caption-md font-red-sunglo">
                            <span class="caption-subject theme-font bold uppercase">Feeds</span>
                            <span class="caption-helper">37 New Supports</span>
                        </div>
                        <div class="actions">
                            <div class="btn-group btn-group-devided" data-toggle="buttons">
                                <label class="btn btn-transparent grey-salsa btn-circle btn-sm active">
                                    <input type="radio" name="options" class="toggle" id="option1">Friends</label>
                                <label class="btn btn-transparent grey-salsa btn-circle btn-sm">
                                    <input type="radio" name="options" class="toggle" id="option2">Team</label>
                                <label class="btn btn-transparent grey-salsa btn-circle btn-sm">
                                    <input type="radio" name="options" class="toggle" id="option2">Company</label>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="scroller" style="height: 350px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                            <div class="widget-media">
                                <div class="widget-media-elements text-center">
                                    <img class="widget-media-avatar circle margin-bottom-15" src="../assets/pages/media/users/avatar1.jpg" alt="">
                                    <a class="widget-btn-default circle" href="#">Follow</a>
                                </div>
                                <div class="widget-media-body">
                                    <h4 class="widget-media-body-title">
                                        <a href="#">Samantha Stosur</a>
                                    </h4>
                                    <p class="widget-media-body-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat commodo consequat. </p>
                                    <a class="widget-btn-red circle" href="#">+7</a>
                                    <a class="widget-btn-blue circle" href="#">Like</a>
                                    <a class="widget-btn-default circle pull-right" href="#">
                                        <i class="widget-btn-icon icon-share"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="widget-media">
                                <div class="widget-media-elements text-center">
                                    <img class="widget-media-avatar circle margin-bottom-15" src="../assets/pages/media/users/avatar6.jpg" alt="">
                                    <a class="widget-btn-default circle" href="#">Follow</a>
                                </div>
                                <div class="widget-media-body">
                                    <h4 class="widget-media-body-title">
                                        <a href="#">Ana Ivanovich</a>
                                    </h4>
                                    <p class="widget-media-body-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat commodo consequat. </p>
                                    <a class="widget-btn-red circle" href="#">+4</a>
                                    <a class="widget-btn-blue circle" href="#">Like</a>
                                    <a class="widget-btn-default circle pull-right" href="#">
                                        <i class="widget-btn-icon icon-share"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="widget-media">
                                <div class="widget-media-elements text-center">
                                    <img class="widget-media-avatar circle margin-bottom-15" src="../assets/pages/media/users/avatar5.jpg" alt="">
                                    <a class="widget-btn-default circle" href="#">Follow</a>
                                </div>
                                <div class="widget-media-body">
                                    <h4 class="widget-media-body-title">
                                        <a href="#">John Doe</a>
                                    </h4>
                                    <p class="widget-media-body-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat commodo consequat. </p>
                                    <a class="widget-btn-red circle" href="#">+12</a>
                                    <a class="widget-btn-blue circle" href="#">Like</a>
                                    <a class="widget-btn-default circle pull-right" href="#">
                                        <i class="widget-btn-icon icon-share"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="widget-media">
                                <div class="widget-media-elements text-center">
                                    <img class="widget-media-avatar circle margin-bottom-15" src="../assets/pages/media/users/avatar4.jpg" alt="">
                                    <a class="widget-btn-default circle" href="#">Follow</a>
                                </div>
                                <div class="widget-media-body">
                                    <h4 class="widget-media-body-title">
                                        <a href="#">Russell Crowe</a>
                                    </h4>
                                    <p class="widget-media-body-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat commodo consequat. </p>
                                    <a class="widget-btn-red circle" href="#">+12</a>
                                    <a class="widget-btn-blue circle" href="#">Like</a>
                                    <a class="widget-btn-default circle pull-right" href="#">
                                        <i class="widget-btn-icon icon-share"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="widget-media">
                                <div class="widget-media-elements text-center">
                                    <img class="widget-media-avatar circle margin-bottom-15" src="../assets/pages/media/users/avatar5.jpg" alt="">
                                    <a class="widget-btn-default circle" href="#">Follow</a>
                                </div>
                                <div class="widget-media-body">
                                    <h4 class="widget-media-body-title">
                                        <a href="#">John Doe</a>
                                    </h4>
                                    <p class="widget-media-body-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat commodo consequat. </p>
                                    <a class="widget-btn-red circle" href="#">+12</a>
                                    <a class="widget-btn-blue circle" href="#">Like</a>
                                    <a class="widget-btn-default circle pull-right" href="#">
                                        <i class="widget-btn-icon icon-share"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="widget-media">
                                <div class="widget-media-elements text-center">
                                    <img class="widget-media-avatar circle margin-bottom-15" src="../assets/pages/media/users/avatar4.jpg" alt="">
                                    <a class="widget-btn-default circle" href="#">Follow</a>
                                </div>
                                <div class="widget-media-body">
                                    <h4 class="widget-media-body-title">
                                        <a href="#">Russell Crowe</a>
                                    </h4>
                                    <p class="widget-media-body-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat commodo consequat. </p>
                                    <a class="widget-btn-red circle" href="#">+12</a>
                                    <a class="widget-btn-blue circle" href="#">Like</a>
                                    <a class="widget-btn-default circle pull-right" href="#">
                                        <i class="widget-btn-icon icon-share"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="widget-media">
                                <div class="widget-media-elements text-center">
                                    <img class="widget-media-avatar circle margin-bottom-15" src="../assets/pages/media/users/avatar11.jpg" alt="">
                                    <a class="widget-btn-default circle" href="#">Follow</a>
                                </div>
                                <div class="widget-media-body">
                                    <h4 class="widget-media-body-title">
                                        <a href="#">Alisa Loy</a>
                                    </h4>
                                    <p class="widget-media-body-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat commodo consequat. </p>
                                    <a class="widget-btn-red circle" href="#">+1</a>
                                    <a class="widget-btn-blue circle" href="#">Like</a>
                                    <a class="widget-btn-default circle pull-right" href="#">
                                        <i class="widget-btn-icon icon-share"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PORTLET-->
            </div>
            <div class="col-md-4">
                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption caption-md font-blue">
                            <i class="icon-share font-blue"></i>
                            <span class="caption-subject theme-font bold uppercase">Recent Activities</span>
                        </div>
                        <div class="actions">
                            <div class="btn-group">
                                <a class="btn btn-sm btn-default dropdown-toggle" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Filter By
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                                    <label>
                                        <input type="checkbox" /> Finance</label>
                                    <label>
                                        <input type="checkbox" checked="" /> Membership</label>
                                    <label>
                                        <input type="checkbox" /> Customer Support</label>
                                    <label>
                                        <input type="checkbox" checked="" /> HR</label>
                                    <label>
                                        <input type="checkbox" /> System</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="scroller" style="height: 322px;" data-always-visible="1" data-rail-visible="0">
                            <ul class="feeds">
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 4 pending tasks.
                                                    <span class="label label-sm label-warning "> Take action
                                                                <i class="fa fa-share"></i>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> Just now </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-danger">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> New order received with
                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 30 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-default">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> Web server hardware needs to be upgraded.
                                                    <span class="label label-sm label-default "> Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 2 hours </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-default">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 4 pending tasks.
                                                    <span class="label label-sm label-warning "> Take action
                                                                <i class="fa fa-share"></i>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> Just now </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-danger">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-default">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> New order received with
                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 30 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-warning">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> Web server hardware needs to be upgraded.
                                                    <span class="label label-sm label-default "> Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 2 hours </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="scroller-footer">
                            <div class="btn-arrow-link pull-right">
                                <a href="#">See All Records</a>
                                <i class="icon-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- BEGIN WIDGET BLOG -->
                <div class="widget-blog text-center margin-bottom-20 clearfix" style="height: 442px; padding-top: 120px; background-image: url(../assets/layouts/layout7/img/07.jpg);">
                    <div class="widget-blog-heading text-uppercase">
                        <h3 class="widget-blog-title">San Francisco</h3>
                        <span class="widget-blog-subtitle">At dawn</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat commodo consequat. </p>
                    <br/>
                    <a class="btn btn-danger text-uppercase" href="#">Read More</a>
                </div>
                <!-- END WIDGET BLOG -->
            </div>
        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN QUICK SIDEBAR -->
<a href="javascript:;" class="page-quick-sidebar-toggler">
    <i class="icon-login"></i>
</a>
<div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
    <div class="page-quick-sidebar">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                    <span class="badge badge-danger">2</span>
                </a>
            </li>
            <li>
                <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                    <span class="badge badge-success">7</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                            <i class="icon-bell"></i> Alerts </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                            <i class="icon-info"></i> Notifications </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                            <i class="icon-speech"></i> Activities </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                            <i class="icon-settings"></i> Settings </a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                    <h3 class="list-heading">Staff</h3>
                    <ul class="media-list list-items">
                        <li class="media">
                            <div class="media-status">
                                <span class="badge badge-success">8</span>
                            </div>
                            <img class="media-object" src="../assets/layouts/layout/img/avatar3.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Bob Nilson</h4>
                                <div class="media-heading-sub"> Project Manager </div>
                            </div>
                        </li>
                        <li class="media">
                            <img class="media-object" src="../assets/layouts/layout/img/avatar1.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Nick Larson</h4>
                                <div class="media-heading-sub"> Art Director </div>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-status">
                                <span class="badge badge-danger">3</span>
                            </div>
                            <img class="media-object" src="../assets/layouts/layout/img/avatar4.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Deon Hubert</h4>
                                <div class="media-heading-sub"> CTO </div>
                            </div>
                        </li>
                        <li class="media">
                            <img class="media-object" src="../assets/layouts/layout/img/avatar2.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Ella Wong</h4>
                                <div class="media-heading-sub"> CEO </div>
                            </div>
                        </li>
                    </ul>
                    <h3 class="list-heading">Customers</h3>
                    <ul class="media-list list-items">
                        <li class="media">
                            <div class="media-status">
                                <span class="badge badge-warning">2</span>
                            </div>
                            <img class="media-object" src="../assets/layouts/layout/img/avatar6.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Lara Kunis</h4>
                                <div class="media-heading-sub"> CEO, Loop Inc </div>
                                <div class="media-heading-small"> Last seen 03:10 AM </div>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-status">
                                <span class="label label-sm label-success">new</span>
                            </div>
                            <img class="media-object" src="../assets/layouts/layout/img/avatar7.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Ernie Kyllonen</h4>
                                <div class="media-heading-sub"> Project Manager,
                                    <br> SmartBizz PTL </div>
                            </div>
                        </li>
                        <li class="media">
                            <img class="media-object" src="../assets/layouts/layout/img/avatar8.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Lisa Stone</h4>
                                <div class="media-heading-sub"> CTO, Keort Inc </div>
                                <div class="media-heading-small"> Last seen 13:10 PM </div>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-status">
                                <span class="badge badge-success">7</span>
                            </div>
                            <img class="media-object" src="../assets/layouts/layout/img/avatar9.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Deon Portalatin</h4>
                                <div class="media-heading-sub"> CFO, H&D LTD </div>
                            </div>
                        </li>
                        <li class="media">
                            <img class="media-object" src="../assets/layouts/layout/img/avatar10.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Irina Savikova</h4>
                                <div class="media-heading-sub"> CEO, Tizda Motors Inc </div>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-status">
                                <span class="badge badge-danger">4</span>
                            </div>
                            <img class="media-object" src="../assets/layouts/layout/img/avatar11.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Maria Gomez</h4>
                                <div class="media-heading-sub"> Manager, Infomatic Inc </div>
                                <div class="media-heading-small"> Last seen 03:10 AM </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="page-quick-sidebar-item">
                    <div class="page-quick-sidebar-chat-user">
                        <div class="page-quick-sidebar-nav">
                            <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                <i class="icon-arrow-left"></i>Back</a>
                        </div>
                        <div class="page-quick-sidebar-chat-user-messages">
                            <div class="post out">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Bob Nilson</a>
                                    <span class="datetime">20:15</span>
                                    <span class="body"> When could you send me the report ? </span>
                                </div>
                            </div>
                            <div class="post in">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Ella Wong</a>
                                    <span class="datetime">20:15</span>
                                    <span class="body"> Its almost done. I will be sending it shortly </span>
                                </div>
                            </div>
                            <div class="post out">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Bob Nilson</a>
                                    <span class="datetime">20:15</span>
                                    <span class="body"> Alright. Thanks! :) </span>
                                </div>
                            </div>
                            <div class="post in">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Ella Wong</a>
                                    <span class="datetime">20:16</span>
                                    <span class="body"> You are most welcome. Sorry for the delay. </span>
                                </div>
                            </div>
                            <div class="post out">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Bob Nilson</a>
                                    <span class="datetime">20:17</span>
                                    <span class="body"> No probs. Just take your time :) </span>
                                </div>
                            </div>
                            <div class="post in">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Ella Wong</a>
                                    <span class="datetime">20:40</span>
                                    <span class="body"> Alright. I just emailed it to you. </span>
                                </div>
                            </div>
                            <div class="post out">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Bob Nilson</a>
                                    <span class="datetime">20:17</span>
                                    <span class="body"> Great! Thanks. Will check it right away. </span>
                                </div>
                            </div>
                            <div class="post in">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Ella Wong</a>
                                    <span class="datetime">20:40</span>
                                    <span class="body"> Please let me know if you have any comment. </span>
                                </div>
                            </div>
                            <div class="post out">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Bob Nilson</a>
                                    <span class="datetime">20:17</span>
                                    <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                </div>
                            </div>
                        </div>
                        <div class="page-quick-sidebar-chat-user-form">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Type a message here...">
                                <div class="input-group-btn">
                                    <button type="button" class="btn green">
                                        <i class="icon-paper-clip"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                <div class="page-quick-sidebar-alerts-list">
                    <h3 class="list-heading">General</h3>
                    <ul class="feeds list-items">
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-info">
                                            <i class="fa fa-check"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> You have 4 pending tasks.
                                            <span class="label label-sm label-warning "> Take action
                                                        <i class="fa fa-share"></i>
                                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> Just now </div>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-success">
                                                <i class="fa fa-bar-chart-o"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> Finance Report for year 2013 has been released. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 20 mins </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-danger">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 24 mins </div>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-info">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> New order received with
                                            <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 30 mins </div>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-success">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 24 mins </div>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-info">
                                            <i class="fa fa-bell-o"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> Web server hardware needs to be upgraded.
                                            <span class="label label-sm label-warning"> Overdue </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 2 hours </div>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-default">
                                                <i class="fa fa-briefcase"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> IPO Report for year 2013 has been released. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 20 mins </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <h3 class="list-heading">System</h3>
                    <ul class="feeds list-items">
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-info">
                                            <i class="fa fa-check"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> You have 4 pending tasks.
                                            <span class="label label-sm label-warning "> Take action
                                                        <i class="fa fa-share"></i>
                                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> Just now </div>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-danger">
                                                <i class="fa fa-bar-chart-o"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> Finance Report for year 2013 has been released. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 20 mins </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-default">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 24 mins </div>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-info">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> New order received with
                                            <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 30 mins </div>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-success">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 24 mins </div>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-warning">
                                            <i class="fa fa-bell-o"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> Web server hardware needs to be upgraded.
                                            <span class="label label-sm label-default "> Overdue </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 2 hours </div>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-briefcase"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> IPO Report for year 2013 has been released. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 20 mins </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                <div class="page-quick-sidebar-settings-list">
                    <h3 class="list-heading">General Settings</h3>
                    <ul class="list-items borderless">
                        <li> Enable Notifications
                            <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                        <li> Allow Tracking
                            <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                        <li> Log Errors
                            <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                        <li> Auto Sumbit Issues
                            <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                        <li> Enable SMS Alerts
                            <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                    </ul>
                    <h3 class="list-heading">System Settings</h3>
                    <ul class="list-items borderless">
                        <li> Security Level
                            <select class="form-control input-inline input-sm input-small">
                                <option value="1">Normal</option>
                                <option value="2" selected>Medium</option>
                                <option value="e">High</option>
                            </select>
                        </li>
                        <li> Failed Email Attempts
                            <input class="form-control input-inline input-sm input-small" value="5" /> </li>
                        <li> Secondary SMTP Port
                            <input class="form-control input-inline input-sm input-small" value="3560" /> </li>
                        <li> Notify On System Error
                            <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                        <li> Notify On SMTP Error
                            <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                    </ul>
                    <div class="inner-content">
                        <button class="btn btn-success">
                            <i class="icon-settings"></i> Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END QUICK SIDEBAR -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner container-fluid container-lf-space">
        <p class="page-footer-copyright"> {{date('Y')}} &copy; Metronic Theme By
            <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
            <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">PRISMA</a>
        </p>
    </div>
    <div class="go2top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
<!--[if lt IE 9]>
<script src="{{ asset('assets/global/plugins/respond.min.js') }}"></script>
<script src="{{ asset('assets/global/plugins/excanvas.min.js') }}"></script>
<script src="{{ asset('assets/global/plugins/ie8.fix.min.js') }}"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="{{ asset('assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('assets/global/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/morris/raphael-min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/mapplic/js/hammer.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/mapplic/js/jquery.easing.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/mapplic/js/jquery.mousewheel.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/mapplic/mapplic/mapplic.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/counterup/jquery.waypoints.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{ asset('assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('assets/pages/scripts/dashboard.min.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{ asset('assets/layouts/layout7/scripts/layout.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/layouts/global/scripts/quick-nav.min.js') }}" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>