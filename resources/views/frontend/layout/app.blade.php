
<!doctype html>
<html class="no-js" lang="zxx">
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      @if ($setting->first()->title != null)
            <title>{{ $setting->first()->title }}</title>
        @endif
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Place favicon.ico in the root directory -->
      @if ($setting->first()->favicon != null)
            <link rel="icon" type="image/png" href="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}">
        @endif

      <!-- CSS here -->
      <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.css">
      <link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.css">
      <link rel="stylesheet" href="{{ asset('frontend') }}/css/swiper-bundle.css">
      <link rel="stylesheet" href="{{ asset('frontend') }}/css/magnific-popup.css">
      <link rel="stylesheet" href="{{ asset('frontend') }}/css/font-awesome-pro.css">
      <link rel="stylesheet" href="{{ asset('frontend') }}/css/ion.rangeSlider.min.css">
      <link rel="stylesheet" href="{{ asset('frontend') }}/css/flatpicker-min.css">
      <link rel="stylesheet" href="{{ asset('frontend') }}/css/spacing.css">
      <link rel="stylesheet" href="{{ asset('frontend') }}/css/main.css">
   </head>
   <body class="tp-home-3-bg">

      <div class="input-body-overlay"></div>
      <!-- back-to-top -->
      <div class="back-to-top-wrapper">
         <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
         </button>
      </div>

      <div id="loading">
         <div class="loading"></div>
      </div>

      @include('frontend.layout.header')

      <main>
        @yield('content')
      </main>

      <!-- footer-area-start -->
      @include('frontend.layout.footer')
      <!-- footer-area-end -->

      @include('sweetalert::alert')
      <!-- JS here -->
      <script src="{{ asset('frontend') }}/js/vendor/jquery.js"></script>
      <script src="{{ asset('frontend') }}/js/vendor/waypoints.js"></script>
      <script src="{{ asset('frontend') }}/js/bootstrap-bundle.js"></script>
      <script src="{{ asset('frontend') }}/js/swiper-bundle.js"></script>
      <script src="{{ asset('frontend') }}/js/imagesloaded-pkgd.js"></script>
      <script src="{{ asset('frontend') }}/js/isotope-pkgd.js"></script>
      <script src="{{ asset('frontend') }}/js/magnific-popup.js"></script>
      <script src="{{ asset('frontend') }}/js/nice-select.js"></script>
      <script src="{{ asset('frontend') }}/js/purecounter.js"></script>
      <script src="{{ asset('frontend') }}/js/wow.js"></script>
      <script src="{{ asset('frontend') }}/js/ajax-form.js"></script>
      <script src="{{ asset('frontend') }}/js/flatpicker.js"></script>
      <script src="{{ asset('frontend') }}/js/parallax.js"></script>
      <script src="{{ asset('frontend') }}/js/jarallax.js"></script>
      <script src="{{ asset('frontend') }}/js/parallax-scroll.js"></script>
      <script src="{{ asset('frontend') }}/js/jquery.mb.YTPlayer.min.js"></script>
      <script src="{{ asset('frontend') }}/js/slider-init.js"></script>
      <script src="{{ asset('frontend') }}/js/main.js"></script>

      @yield('footer_script')
   </body>
</html>
