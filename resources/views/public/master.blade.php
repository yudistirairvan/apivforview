<!doctype html>
<html lang="en">
  <head>
    <title>Waralabapedia </title>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/jpg" href="@yield('favicon')"/>
    <script data-ad-client="ca-pub-5668235440633694" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108458602-5"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-108458602-5');
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- fb open grab -->
    <!-- <meta property="og:url"                content="@yield('url')" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="@yield('tittle')" />
    <meta property="og:description"        content="@yield('description')" />
    <meta property="og:image"              content="@yield('thumbnail')" /> -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('assets/nitro/fonts/icomoon/style.css') !!}">

    <link rel="stylesheet" href="{!! asset('assets/nitro/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/nitro/css/jquery-ui.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/nitro/css/owl.carousel.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/nitro/css/owl.theme.default.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/nitro/css/owl.theme.default.min.css') !!}">

    <link rel="stylesheet" href="{!! asset('assets/nitro/css/jquery.fancybox.min.css') !!}">

    <link rel="stylesheet" href="{!! asset('assets/nitro/css/bootstrap-datepicker.css') !!}">

    <link rel="stylesheet" href="{!! asset('assets/nitro/fonts/flaticon/font/flaticon.css') !!}">

    <link rel="stylesheet" href="{!! asset('assets/nitro/css/aos.css') !!}">

    <link rel="stylesheet" href="{!! asset('assets/nitro/css/style.css') !!}">

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <!-- <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div> -->


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    @include('public.header')

    <!-- welcome section -->
    @include('public.welcome')

    <!-- about section -->
    @include('public.about')


    <!-- site section -->
    <!-- @include('public.site') -->

    <!-- team section -->
    <!-- @include('public.team') -->


    <!-- portofolio section -->
    <!-- @include('public.portofolio') -->

    <!-- service section -->
    <!-- @include('public.service') -->

    <!-- testimonial section -->
    <!-- @include('public.testimonial') -->


    <!-- pricing section -->
    <!-- @include('public.pricing') -->

    <!-- about2 section -->
    <!-- @include('public.aboutsection') -->

    <!-- blog section -->
    @include('public.blog')

    <!-- twitter section -->
    @include('public.twitter')

    <!-- contac us section -->
    @include('public.contact')


    @include('public.footer')

  </div> <!-- .site-wrap -->

  <script src="{!! asset('assets/nitro/js/jquery-3.3.1.min.js') !!}"></script>
  <script src="{!! asset('assets/nitro/js/jquery-ui.js') !!}"></script>
  <script src="{!! asset('assets/nitro/js/popper.min.js') !!}"></script>
  <script src="{!! asset('assets/nitro/js/bootstrap.min.js') !!}"></script>
  <script src="{!! asset('assets/nitro/js/owl.carousel.min.js') !!}"></script>
  <script src="{!! asset('assets/nitro/js/jquery.countdown.min.js') !!}"></script>
  <script src="{!! asset('assets/nitro/js/jquery.easing.1.3.js') !!}"></script>
  <script src="{!! asset('assets/nitro/js/aos.js') !!}"></script>
  <script src="{!! asset('assets/nitro/js/jquery.fancybox.min.js') !!}"></script>
  <script src="{!! asset('assets/nitro/js/jquery.sticky.js') !!}"></script>
  <script src="{!! asset('assets/nitro/js/isotope.pkgd.min.js') !!}"></script>


  <script src="{!! asset('assets/nitro/js/main.js') !!}"></script>

  </body>
</html>
