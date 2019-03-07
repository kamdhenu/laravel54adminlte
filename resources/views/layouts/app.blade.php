<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- Tell the browser to be responsive to screen width --}}
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset('lte/bootstrap/css/bootstrap.min.css') }}">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="{{ asset('lte/font-awesome/css/font-awesome.min.css') }}">
    {{-- Ionicons --}}
    <link rel="stylesheet" href="{{ asset('lte/Ionicons/css/ionicons.min.css') }}">
    {{-- Theme style --}}
    <link rel="stylesheet" href="{{ asset('lte/adminlte/css/AdminLTE.min.css') }}">
    {{-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. --}}
    <link rel="stylesheet" href="{{ asset('lte/adminlte/css/skins/skin-blue.min.css') }}">

    {{-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --}}
    {{-- WARNING: Respond.js doesn't work if you view the page via file:// --}}
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    {{-- Google Font --}}
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
{{--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
--}}
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    @include('layouts.header')
    @include('layouts.sidebar')

    {{-- Content Wrapper. Contains page content --}}
    <div class="content-wrapper">
        {{-- Content Header (Page header) --}}
        <section class="content-header">
            <h1>
                {{ $page_header or 'Page Header' }}
                <small>{{ $page_description or 'Optional description' }}</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        {{-- Main content --}}
        <section class="content container-fluid">

            @include('layouts.alerts')

            {{--------------------------
              | Your Page Content Here |
              --------------------------}}
            @yield('content')

        </section>
        {{-- /.content --}}
    </div>
    {{-- /.content-wrapper --}}

    {{-- Main Footer --}}
    <footer class="main-footer">
        {{-- To the right --}}
        <div class="pull-right hidden-xs">
            Anything you want
        </div>
        {{-- Default to the left --}}
        <strong>Copyright &copy; {{ date('Y') }} <a href="#">Company</a>.</strong> All rights reserved.
    </footer>
    @include('layouts.control')
</div>
{{-- ./wrapper --}}

{{-- REQUIRED JS SCRIPTS --}}

{{-- jQuery 3 --}}
<script src="{{ asset('lte/jquery/jquery.min.js') }}"></script>
{{-- Bootstrap 3.3.7 --}}
<script src="{{ asset('lte/bootstrap/js/bootstrap.min.js') }}"></script>
{{-- FastClick --}}
<script src="{{ asset('lte/plugins/fastclick/fastclick.js') }}"></script>
{{-- AdminLTE App --}}
<script src="{{ asset('lte/adminlte/js/adminlte.min.js') }}"></script>
{{-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. --}}
</body>
</html>