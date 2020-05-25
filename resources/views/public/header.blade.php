<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
          <img class="scroll" src="@yield('img')">
            <h1 class="mb-0 site-logo"><a href="{{ url('/#home-section')}}" class="h2 mb-0">
                <!-- Waralabapedia<span class="text-primary"></span>  -->

            </a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="{{ url('/#home-section')}}" class="nav-link">Home</a></li>
                <li><a href="{{ url('/#about-section')}}" class="nav-link">About Us</a></li>
                <!-- <li class="has-children">
                  <a href="#about-section" class="nav-link">About Us</a>
                  <ul class="dropdown">
                    <li><a href="#team-section" class="nav-link">Team</a></li>
                    <li><a href="#pricing-section" class="nav-link">Pricing</a></li>
                    <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                    <li class="has-children">
                      <a href="#">More Links</a>
                      <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li> -->

                <!-- <li><a href="#portfolio-section" class="nav-link">Portfolio</a></li>
                <li><a href="#services-section" class="nav-link">Services</a></li>
                <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li> -->
                <li><a href="{{ url('/#blog-section')}}" class="nav-link">Blog</a></li>
                <!-- <li><a href="{{ url('/infoloker')}}" class="nav-link">Info Loker</a></li> -->
                <li class="has-children">
                <a href="#">Info</a>
                      <ul class="dropdown">
                        <li><a href="{{ url('/infoloker')}}">Lowongan Kerja</a></li>

                      </ul>
                </li>
                <li><a href="{{ url('/#contact-section')}}" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>

    </header>
