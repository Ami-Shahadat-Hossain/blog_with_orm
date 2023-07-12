<!doctype html>
<html lang="en">

<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="description" content="megakit,business,company,agency,multipurpose,modern,bootstrap4">

 <meta name="author" content="themefisher.com">

 <title>Megakit| Html5 Agency template</title>
 <!-- bootstrap.min css -->
 <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
 <!-- Icon Font Css -->
 <link rel="stylesheet" href="{{ asset('plugins/themify/css/themify-icons.css') }}">
 <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.css') }}">
 <link rel="stylesheet" href="{{ asset('plugins/magnific-popup/dist/magnific-popup.css') }}">
 <!-- Owl Carousel CSS -->
 <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick.css') }}">
 <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick-theme.css') }}">

 <!-- Main Stylesheet -->
 <link rel="stylesheet" href="{{ asset('css/style.css') }}">

 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 <script src="{{ asset('js/axios.min.js') }}"></script>

</head>

<body>

 <!-- Header Start -->

 @include('components.nav')
 <!-- Header Close -->

 <div class="main-wrapper ">

  @yield('content')

  <!-- footer Start -->
  @include('components.footer')

 </div>

 <!--
    Essential Scripts
    =====================================-->

 <!-- Main jQuery -->
 <script src="{{ asset('plugins/jquery/jquery.js') }}"></script>
 <script src="{{ asset('js/contact.js') }}"></script>
 <!-- Bootstrap 4.3.1 -->
 <script src="{{ asset('plugins/bootstrap/js/popper.js') }}"></script>
 <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
 <!--  Magnific Popup-->
 <script src="{{ asset('plugins/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
 <!-- Slick Slider -->
 <script src="{{ asset('plugins/slick-carousel/slick/slick.min.js') }}"></script>
 <!-- Counterup -->
 <script src="{{ asset('plugins/counterup/jquery.waypoints.min.js') }}"></script>
 <script src="{{ asset('plugins/counterup/jquery.counterup.min.js') }}"></script>

 <!-- Google Map -->
 <script src="{{ asset('plugins/google-map/map.js') }}"></script>
 <script
  src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap') }}">
 </script>

 <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
