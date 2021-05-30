<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('users/assets/img/thumb-300x300.png')}}">

    <!-- all css here -->
    <link rel="stylesheet" href={{ URL::asset('users/assets/css/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{ URL::asset('users/assets/css/magnific-popup.css')}}>
    <link rel="stylesheet" href={{ URL::asset('users/assets/css/animate.css')}}>
    <link rel="stylesheet" href={{ URL::asset('users/assets/css/owl.carousel.min.css')}}>
    <link rel="stylesheet" href={{ URL::asset('users/assets/css/themify-icons.css')}}>
    <link rel="stylesheet" href={{ URL::asset('users/assets/css/pe-icon-7-stroke.css')}}>
    <link rel="stylesheet" href={{ URL::asset('users/assets/css/meanmenu.min.css')}}>
    <link rel="stylesheet" href={{ URL::asset('users/assets/css/bundle.css')}}>
    <link rel="stylesheet" href={{ URL::asset('users/assets/css/style.css')}}>
    <link rel="stylesheet" href={{ URL::asset('users/assets/css/responsive.css')}}>
    <script src={{ URL::asset('users/assets/js/vendor/modernizr-2.8.3.min.js')}}></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- header start -->
    @include('users.tampil_p.partial.header')
    @yield('content')
    @include('users.partial.footer')
      <!-- modal -->
      










    <!-- all js here -->
    <script src={{ URL::asset('users/assets/js/vendor/jquery-1.12.0.min.js')}}></script>
    <script src={{ URL::asset('users/assets/js/popper.js')}}></script>
    <script src={{ URL::asset('users/assets/js/bootstrap.min.js')}}></script>
    <script src={{ URL::asset('users/assets/js/jquery.magnific-popup.min.js')}}></script>
    <script src={{ URL::asset('users/assets/js/isotope.pkgd.min.js')}}></script>
    <script src={{ URL::asset('users/assets/js/imagesloaded.pkgd.min.js')}}></script>
    <script src={{ URL::asset('users/assets/js/jquery.counterup.min.js')}}></script>
    <script src={{ URL::asset('users/assets/js/waypoints.min.js')}}></script>
    <script src={{ URL::asset('users/assets/js/ajax-mail.js')}}></script>
    <script src={{ URL::asset('users/assets/js/owl.carousel.min.js')}}></script>
    <script src={{ URL::asset('users/assets/js/plugins.js')}}></script>
    <script src={{ URL::asset('users/assets/js/main.js')}}></script>
</body>

</html>