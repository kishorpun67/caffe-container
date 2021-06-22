<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <!-- Place favicon.ico in the root directory -->
  <link rel="apple-touch-icon" href="icon.png">

  <!-- Global Css -->
  <link rel="stylesheet" href="{{asset('frontend/assets/css/normalize.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/fontawesome-all.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/swiper.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/flatpickr.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
</head>
<body>


    @yield('content')

    <!-- GLOBAL JAVASCRI -->
  <script src="{{asset('frontend/assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/vendor/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/swiper.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/plugins.js')}}"></script>
  <script src="{{asset('frontend/assets/js/isotope.pkgd.js')}}"></script>
  <script src="{{asset('frontend/assets/js/flatpickr.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>
  <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.2.4/firebase-app.js"></script>
<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.2.4/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.4/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.4/firebase-firestore.js"></script>

  <script src="{{asset('frontend/assets/js/front_script.js')}}"></script>
  <script src="{{asset('frontend/assets/js/firebase.js')}}"></script>


</body>
</html>
