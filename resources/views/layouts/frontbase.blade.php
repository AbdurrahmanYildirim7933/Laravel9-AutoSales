<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="@yield('Nogai')">

    <link type="text/css" href="{{asset('assets')}}/css/bootstrap.css" rel="stylesheet">

    <link type="text/css" href="{{asset('assets')}}/css/bootstrap-theme.css" rel="stylesheet">

    <link type="text/css" href="{{asset('assets')}}/css/iconmoon.css" rel="stylesheet">
    <link type="text/css" href="{{asset('assets')}}/css/chosen.css" rel="stylesheet">
    <link type="text/css" href="{{asset('assets')}}/style.css" rel="stylesheet">
    <link type="text/css" href="{{asset('assets')}}/cs-automobile-plugin.css" rel="stylesheet">
    <link type="text/css" href="{{asset('assets')}}/css/color.css" rel="stylesheet">
    <link type="text/css" href="{{asset('assets')}}/css/widget.css" rel="stylesheet">
    <link type="text/css" href="{{asset('assets')}}/css/responsive.css" rel="stylesheet">
    <link type="text/css" href="{{asset('assets')}}/css/bootstrap-rtl.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="{{asset('assets')}}/scripts/jquery.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/scripts/modernizr.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/scripts/bootstrap.min.js"></script>

    @yield('css')
    @yield('scripts')
</head>
<body class="wp-automobile">
<div class="wrapper">

@include('home._header')
<!-- Main Start -->
<div class="main-section">

    @include('home._slider')
    @include('home._mainbannerform')
    @include('home._category')
    @include('home._slider2')

    @section('content')
        içerik alanı
    @show

</div>

@include('home._footer')
@yield('footerscripts')
</div>
<script src="{{asset('assets')}}/scripts/responsive.menu.js"></script>
<script src="{{asset('assets')}}/scripts/chosen.select.js"></script>
<script src="{{asset('assets')}}/scripts/slick.js"></script>
<script src="{{asset('assets')}}/scripts/echo.js"></script>
<!-- Put all Functions in functions.js -->
<script src="{{asset('assets')}}/scripts/functions.js"></script>
</body>

</html>
</body>
</html>
