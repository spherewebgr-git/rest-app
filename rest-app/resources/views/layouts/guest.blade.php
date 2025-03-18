<!DOCTYPE html>
<html lang="en">
<head>
    <title> Resty | Home </title>
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
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- StyleSheet link CSS -->
    <link rel="stylesheet" href="{{asset('assets/website/css/animate.css')}}">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{asset('assets/website/bootstrap/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/website/css/superclasses.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/website/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/website/css/owl.theme.default.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/website/css/custom.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/website/css/responsive.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/toastr.min.css')}}" type="text/css">
</head>

<body>

@yield('content')


<!-- BACK TO TOP BUTTON -->
<button id="back-to-top-btn" title="Back to Top"></button>
<script src="{{asset('/assets/website/js/jquery.min.js')}}"></script>
<script src="{{asset('/assets/website/js/popper.min.js')}}"></script>
<script src="{{asset('/assets/website/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/assets/website/js/owl.carousel.js')}}"></script>
<script src="{{asset('/assets/website/js/contact-form.js')}}"></script>
<script src="{{asset('/assets/website/js/jquery.validate.js')}}"></script>
<script src="{{asset('/assets/website/js/wow.js')}}"></script>
<script src="{{asset('/assets/website/js/counter.js')}}"></script>
<script src="{{asset('/assets/website/js/jquery-ui.js')}}"></script>
<script src="{{asset('/assets/website/js/jquery.royalslider.min.js')}}"></script>
<script src="{{asset('/assets/website/js/jquery.easing-1.3.js')}}"></script>
<script src="{{asset('/assets/website/js/custom.js')}}"></script>
<script src="{{asset('/assets/website/js/search.js')}}"></script>
<script src="{{asset('/assets/js/toastr/toastr.min.js')}}"></script>
<script>
    @if (Session::has('message'))
        toastr.success("{{Session::get('message')}}")
    @endif

</script>
</body>
</html>
