<!doctype html>
<html lang="en">
  <head>
    <title>{{ $artikel->judul }} </title>
    <script data-ad-client="ca-pub-5668235440633694" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108458602-5"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-108458602-5');
    </script>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/jpg" href="@yield('favicon')"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Search Engine -->
    <meta name="description" content="<?php
                      $nilai=$artikel->konten;
                      $removetags = strip_tags($nilai);
                      $data = substr($removetags,0,100);
                      echo $data;

                    ?>">
    <meta name="image" content="http://waralabapedia.com/data_gambar/{{ $artikel->gambar }}">
    <!-- Schema.org for Google -->
    <meta itemprop="name" content="{{ $artikel->judul }}">
    <meta itemprop="description" content="<?php

                      echo $data;

                    ?>">
    <meta itemprop="image" content="http://waralabapedia.com/data_gambar/{{ $artikel->gambar }}">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="{{ $artikel->judul }}">
    <meta name="twitter:description" content="<?php

                      echo $data;

                    ?>">
    <meta name="twitter:site" content="waralabapedia.com">
    <meta name="twitter:creator" content="@waralabapedia1">
    <meta name="twitter:image:src" content="http://waralabapedia.com/data_gambar/{{ $artikel->gambar }}">
    <!-- <meta name="twitter:player" content="video"> -->
    <!-- Twitter - Article -->
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="{{ $artikel->judul }}">
    <meta name="og:description" content="<?php

                      echo $data;

                    ?>">
    <meta name="og:image" content="http://waralabapedia.com/data_gambar/{{ $artikel->gambar }}">
    <meta name="og:url" content="http://waralabapedia.com/infoloker/{{ $artikel->getHashId() }}">
    <meta name="og:site_name" content="waralabapedia.com">
    <meta name="og:locale" content="en_id">
    <!-- <meta name="og:video" content="link video"> -->
    <meta name="fb:admins" content="101042684793699">
    <meta name="og:type" content="article">
    <!-- Open Graph - Article -->
    <meta name="article:section" content="{{ $artikel->id_kategori }}">
    <meta name="article:published_time" content="{{ $artikel->created_at }}">
    <meta name="article:author" content="Waralabapedia">
    <meta name="article:tag" content="{{ $artikel->id_kategori }}">
    <meta name="article:modified_time" content="{{ $artikel->updated_at }}">


    <!-- fb open grab -->
    <!-- <meta property="og:url"                content="" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="{{ $artikel->judul }}" />
    <meta property="og:description"        content="<?php
                    //   $nilai=$artikel->konten;
                    //   $removetags = strip_tags($nilai);
                    //   $data = substr($removetags,0,100);
                    //   echo $data;

                    ?>... " />
    <meta property="og:image"              content="http://waralabapedia.com/data_gambar/{{ $artikel->gambar }}" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="500" />
    <meta property="og:image:alt"              content="{{ $artikel->judul }}" /> -->




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


    @include('public.headerartikel')


    <!-- konten section -->
    @include('public.konten')

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
