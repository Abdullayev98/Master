<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>Main</title>
  <link rel="shortcut icon" href="{{asset('front/media/favicons/favicon.png')}}">
  <link rel="icon" type="image/png" sizes="192x192" href="{{asset('front/media/favicons/favicon-192x192.png')}}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{asset('front/media/favicons/apple-touch-icon-180x180.png')}}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
  <link rel="stylesheet" id="css-main" href="{{asset('front/css/dashmix.css')}}">
</head>
<body class="bg-white">
@include('front.layouts.header')

<div class="container">
@yield('section')

</div>
<div class="px-5">
@include('front.layouts.footer')

</div>




<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="{{asset('front/js/dashmix.app.js')}}"></script>
</body>

</html>