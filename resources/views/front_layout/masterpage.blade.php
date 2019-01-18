<!doctype html>
<html lang="en">
  <head>
    <title>LuxuryHotel a Hotel Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> 

    <link rel="stylesheet" href=" {{ asset('front/css/bootstrap.css') }} ">
    <link rel="stylesheet" href=" {{ asset('front/css/animate.css') }} ">
    <link rel="stylesheet" href=" {{ asset('front/css/owl.carousel.min.css') }} ">

    <link rel="stylesheet" href=" {{ asset('front/fonts/ionicons/css/ionicons.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('front/fonts/fontawesome/css/font-awesome.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('front/css/magnific-popup.css') }} ">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>  

    <!-- Theme Style -->
    <link rel="stylesheet" href=" {{ asset('front/css/style.css') }} ">
  </head>
  <body>
    
    @include('front_layout.header')
    <!-- END header -->

    @yield('content')
   
    @include('front_layout.footer')
    <!-- END footer -->
    @include('sweet::alert')
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src=" {{ asset('front/js/jquery-3.2.1.min.js') }} "></script>
    <script src=" {{ asset('front/js/jquery-migrate-3.0.0.js') }} "></script>
    <script src=" {{ asset('front/js/popper.min.js') }} "></script>
    <script src=" {{ asset('front/js/bootstrap.min.js') }} "></script>
    <script src=" {{ asset('front/js/owl.carousel.min.js') }} "></script>
    <script src=" {{ asset('front/js/jquery.waypoints.min.js') }} "></script>
    <script src=" {{ asset('front/js/jquery.stellar.min.js') }} "></script>

    <script src=" {{ asset('front/js/jquery.magnific-popup.min.js') }} "></script>
    <script src=" {{ asset('front/js/magnific-popup-options.js') }} "></script>

    <script src=" {{ asset('front/js/main.js') }} "></script>
  </body>
</html>