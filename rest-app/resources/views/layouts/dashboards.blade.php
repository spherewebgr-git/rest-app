<!DOCTYPE html>
<html lang="en">
<head>
    <title> Resty | @yield('page_title') </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/website/images/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/website/images/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/website/images/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/website/images/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/website/images/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/website/images/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/website/images/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/website/images/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/website/images/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/website/images/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/website/images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/website/images/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/website/images/favicon/favicon-16x16.png')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('assets/website/images/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/vendors/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/vendors/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/vendors/feather-icon.css')}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/vendors/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/vendors/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/vendors/scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/vendors/animate.css')}}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('/assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/responsive.css')}}">
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="{{asset('/assets/css/font-awesome.css')}}">
</head>
<body>
    @yield('content')
<div class="scripts">
    <!-- latest jquery-->
    <script src="{{asset('/assets/js/jquery.min.js')}}"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('/assets/js/bootstrap.bundle.min.js')}}"></script>
    <!-- feather icon js-->
    <script src="{{asset('/assets/js/feather.min.js')}}"></script>
    <script src="{{asset('/assets/js/feather-icon.js')}}"></script>
    <!-- scrollbar js-->
    <script src="{{asset('/assets/js/scrollbar/simplebar.js')}}"></script>
    <script src="{{asset('/assets/js/scrollbar/custom.js')}}"></script>
    <!-- Sidebar jquery-->
    <script src="{{asset('/assets/js/config.js')}}"></script>
    <!-- Plugins JS start-->
    <script src="{{asset('/assets/js/sidebar-menu.js')}}"></script>
    <script src="{{asset('/assets/js/sidebar-pin.js')}}"></script>
    <script src="{{asset('/assets/js/slick/slick.min.js')}}"></script>
    <script src="{{asset('/assets/js/slick/slick.js')}}"></script>
    <script src="{{asset('/assets/js/header-slick.js')}}"></script>
    <script src="{{asset('/assets/js/chart/apex-chart/apex-chart.js')}}"></script>
    <script src="{{asset('/assets/js/chart/apex-chart/stock-prices.js')}}"></script>
    <script src="{{asset('/assets/js/chart/apex-chart/moment.min.js')}}"></script>
    <script src="{{asset('/assets/js/notify/bootstrap-notify.min.js')}}"></script>
    <!-- calendar js-->
    <script src="{{asset('/assets/js/dashboard/dashboard_3.js')}}"></script>
    <script src="{{asset('/assets/js/notify/index.js')}}"></script>
    <script src="{{asset('/assets/js/typeahead/handlebars.js')}}"></script>
    <script src="{{asset('/assets/js/typeahead/typeahead.bundle.js')}}"></script>
    <script src="{{asset('/assets/js/typeahead/typeahead.custom.js')}}"></script>
    <script src="{{asset('/assets/js/typeahead-search/handlebars.js')}}"></script>
    <script src="{{asset('/assets/js/typeahead-search/typeahead-custom.js')}}"></script>
    <script src="{{asset('/assets/js/height-equal.js')}}"></script>
    <script src="{{asset('/assets/js/animation/wow.min.js')}}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('/assets/js/script.js')}}"></script>
</div>
</body>
</html>
