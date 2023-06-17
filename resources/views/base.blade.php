<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      @vite('resources/js/app.js')
      <!-- PWA  -->
<meta name="theme-color" content="#6777ef"/>
<link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
<link rel="manifest" href="{{ asset('/manifest.json') }}">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <title>@yield('title')</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css.map"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik+Pixels&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('images/logojeune.png')}}" />
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css.map" />  <!-- Typography CSS -->
        <link rel="stylesheet" href="{{ asset('css/typography.css')}}">
        <!-- Style -->
        <link rel="stylesheet" href="{{ asset('css/style.css')}}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/onsen/2.10.10/css/font_awesome/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
  
        <!-- Responsive -->
        <link rel="stylesheet" href="{{ asset('css/responsive.css')}}" />
        <link rel="stylesheet" href="{{asset('js/fontawesome-webfont.woff')}}" />
      <!--  <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.woff">-->

    </head>
    <body >
        {{--bare de navigation--}}
      
   @include('navbar.navbar')

@yield('content')
@include('footer.footer')




  <!-- MainContent End-->
      <!-- back-to-top -->
      <div id="back-to-top">
        <a class="top" href="#top" id="top"> <i class="fa fa-angle-up"></i> </a>
     </div>
     <!-- back-to-top End -->
     <!-- jQuery, Popper JS -->
     
  <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
     <script src=" {{ asset('js/popper.min.js') }}"></script>
     <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs/dist/tf.min.js"> </script>
   
     
     <!-- Bootstrap JS -->
     <script src="{{ asset('js/bootstrap.min.js ') }}"></script>
     <!-- Slick JS -->
     <script src=" {{ asset('js/slick.min.js  ') }}"></script>
     <!-- owl carousel Js -->
     <script src=" {{ asset('js/owl.carousel.min.js') }}"></script>
     <!-- select2 Js -->
     <script src="{{ asset('js/select2.min.js') }}"></script>
     <!-- Magnific Popup-->
     <script src="{{ asset('js/jquery.magnific-popup.min.js ') }}"></script>
     <!-- Slick Animation-->
     <script src="{{ asset('js/slick-animation.min.js ') }}" ></script>
     <!-- Custom JS-->
     <script src="{{ asset('js/custom.js')}}"></script>
</body>
</html>