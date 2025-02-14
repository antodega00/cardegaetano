@extends('welcome')
@section('content')


@if (session('success'))
    <div class="alert alert-success overlay-message">
        {{ session('success') }}
    </div>
@endif

<header id="header" class="header d-flex align-items-center position-relative">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt="AgriCulture">
        <!-- <h1 class="sitename">AgriCulture</h1>  -->
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html" class="active">Home</a></li>
          <li><a href="about.html">Chi siamo</a></li>
          <li><a href="services.html">Servizi</a></li>
          <li><a href="contact.html">Contatti</a></li>
          <li class="dropdown"><a href="#"><span>Account</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{route('login')}}">Login</a></li>
              <li><a href="{{route('logout')}}">Logout</a></li>
            </ul>
          </li>

        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <div class="carousel-container">
            <h2>Carrozzeria De Gaetano</h2>
        </div>
      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-item active">
            <img src="assets/img/wallpaper.jpg" alt="">
            </div><!-- End Carousel Item -->

            <div class="carousel-item">
            <img src="assets/img/officina.jpg" alt="">
            </div><!-- End Carousel Item -->

            <div class="carousel-item">
            <img src="assets/img/foto3.jpeg" alt="">
            {{-- <div class="carousel-container">
                <h2>Providing Fresh Produce Every Single Day</h2>
                <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
            </div> --}}
            </div><!-- End Carousel Item -->

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators"></ol>
      </div>

    </section><!-- /Hero Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>SERVIZI</h2>
      </div><!-- End Section Title -->
      <div class="content">
        <div class="container">
          <div class="row g-0">
            <div class="col-lg-3 col-md-6">
              <div class="service-item">

                <div class="service-item-icon">
                    <img src="assets/img/car.svg" class="services-icon">
                </div>
                <div class="service-item-content">
                  <h3 class="service-heading">Verniciatura</br>a forno</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="service-item">
                <div class="service-item-icon">
                    <img src="assets/img/car-polish.svg" class="services-icon">
                </div>
                <div class="service-item-content">
                  <h3 class="service-heading">Lucidatura</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="service-item">
                <div class="service-item-icon">
                    <img src="assets/img/headlight.svg" class="services-icon">
                  </svg>
                </div>
                <div class="service-item-content">
                  <h3 class="service-heading">Rinnovo fari</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="service-item">
                <div class="service-item-icon">
                    <img src="assets/img/windscreen.svg" class="services-icon">
                </div>
                <div class="service-item-content">
                  <h3 class="service-heading">Sostituzione</br>parabrezza</h3>
                </div>
              </div>
            </div>

        </section><!-- /Services Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
              <img src="assets/img/officina.jpg" alt="Image " class="img-fluid img-overlap" data-aos="zoom-out">
            </div>
            <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
              <h3 class="content-subtitle text-white opacity-50">Why Choose Us</h3>
              <h2 class="content-title mb-4">
                More than <strong>50 year experience</strong> in agriculture
                industry
              </h2>
              <p class="opacity-50">
                Reprehenderit, odio laboriosam? Blanditiis quae ullam quasi illum
                minima nostrum perspiciatis error consequatur sit nulla.
              </p>

              <div class="row my-5">
                <div class="col-lg-12 d-flex align-items-start mb-4">
                  <i class="bi bi-cloud-rain me-4 display-6"></i>
                  <div>
                    <h4 class="m-0 h5 text-white">Plants needs rain</h4>
                    <p class="text-white opacity-50">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class="col-lg-12 d-flex align-items-start mb-4">
                  <i class="bi bi-heart me-4 display-6"></i>
                  <div>
                    <h4 class="m-0 h5 text-white">Love organic foods</h4>
                    <p class="text-white opacity-50">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class="col-lg-12 d-flex align-items-start">
                  <i class="bi bi-shop me-4 display-6"></i>
                  <div>
                    <h4 class="m-0 h5 text-white">Sell vegies</h4>
                    <p class="text-white opacity-50">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /About Section -->

    <!-- About 3 Section -->
    {{-- <section id="about-3" class="about-3 section">

      <div class="container">
        <div class="row gy-4 justify-content-between align-items-center">
          <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
            <img src="assets/img/img_sq_1.jpg" alt="Image" class="img-fluid">
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn">
              <span class="play"><i class="bi bi-play-fill"></i></span>
            </a>
          </div>
          <div class="col-lg-5 order-lg-1" data-aos="fade-up" data-aos-delay="100">
            <h2 class="content-title mb-4">Plants Make Life Better</h2>
            <p class="mb-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
              necessitatibus placeat, atque qui voluptatem velit explicabo vitae
              repellendus architecto provident nisi ullam minus asperiores commodi!
              Tenetur, repellat aliquam nihil illo.
            </p>
            <ul class="list-unstyled list-check">
              <li>Lorem ipsum dolor sit amet</li>
              <li>Velit explicabo vitae repellendu</li>
              <li>Repellat aliquam nihil illo</li>
            </ul>

            <p><a href="#" class="btn-cta">Get in touch</a></p>
          </div>
        </div>
      </div>
    </section><!-- /About 3 Section --> --}}

    <!-- Services 2 Section -->
    <section id="services-2" class="services-2 section dark-background">

        {{-- @auth
            <button>
                <a href="{{route('foto')}}" class="btn"> Modifica</a>
                </button>
        @endauth --}}

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Galleria</h2>
      </div><!-- End Section Title -->

      <div class="services-carousel-wrap">
        <div class="container">
          <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 3000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "navigation": {
                  "nextEl": ".js-custom-next",
                  "prevEl": ".js-custom-prev"
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 1,
                    "spaceBetween": 40
                  },
                  "1200": {
                    "slidesPerView": 3,
                    "spaceBetween": 40
                  }
                }
              }
            </script>

            <button class="navigation-prev js-custom-prev">
              <i class="bi bi-arrow-left-short"></i>
            </button>
            <button class="navigation-next js-custom-next">
              <i class="bi bi-arrow-right-short"></i>
            </button>

            <div class="swiper-wrapper">
                @foreach ($photos as $photo)
                    <div class="swiper-slide">
                        <div class="service-item">
                            <div class="portfolio-item">
                                <a href="{{ asset($photo->path) }}" data-fancybox="gallery">
                                    <img src="{{ asset($photo->path) }}" alt="Foto" style="width: 1200px; height: 627px; padding: 30px;" class="zoom">
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </section><!-- /Services 2 Section -->

    <section id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h4>Contact Us</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form id="contact" action="{{route('home.sendMessage')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6" style="padding-bottom: 20px;">
                                <fieldset>
                                    <input name="name" type="name" class="form-control"
                                           id="name" placeholder="Nome...">

                                    @error('name')
                                        <div class="text-danger" style="padding-left: 3px;">{{ $message }}</div>
                                    @enderror
                                </fieldset>
                            </div>
                            <div class="col-md-6" style="padding-bottom: 20px;">
                                <fieldset>
                                    <input name="email" class="form-control"
                                           id="email" placeholder="Email...">

                                    @error('email')
                                        <div class="text-danger" style="padding-left: 3px;">{{ $message }}</div>
                                    @enderror
                                </fieldset>
                            </div>
                            <div class="col-md-6" style="padding-bottom: 20px;">
                                <fieldset>
                                    <input name="phone" class="form-control"
                                           id="phone" placeholder="Telefono...">

                                    @error('phone')
                                        <div class="text-danger" style="padding-left: 3px;">{{ $message }}</div>
                                    @enderror
                                </fieldset>
                            </div>
                            <div class="col-md-12" style="padding-bottom: 20px;">
                                <fieldset>
                                    <textarea name="text" rows="6" class="form-control" id="message" placeholder="Message..."></textarea>
                                    @error('text')
                                        <div class="text-danger" style="padding-left: 3px;">{{ $message }}</div>
                                    @enderror
                                </fieldset>
                              </div>
                            <div class="col-md-6" style="padding-bottom: 20px;">
                              <fieldset>
                                    <button type="submit" class="btn-dashboard">Invia il tuo messaggio</button>
                              </fieldset>
                            </div>
                        </div>
                    </form>
                </div>




<!-- How to change your own map point
        1. Go to Google Maps
        2. Click on your location point
        3. Click "Share" and choose "Embed map" tab
        4. Copy only URL and paste it within the src="" field below
-->
                <div class="col-md-5" style="padding-left: 100px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d25101.57715474445!2d15.2338432!3d38.1472346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sit!4v1739379115338!5m2!1sen!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    </div>
                </div>
            </div>
        </div>
    </section>

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-3">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="index.html" class="logo d-flex align-items-center">
              <span class="sitename">Carrozzeria</br>De Gaetano</span>
            </a>
            <div class="footer-contact pt-3">
              <p>Via Stretto Mollica</p>
              <p>Barcellona Pozzo di Gotto, ME</p>
              <p class="mt-3"><strong>Telefono:</strong> <span>+39 3497773593</span></p>
              <p><strong>Email:</strong> <span>degaeatanogiuseppeantonino@yahoo.it</span></p>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>

          {{-- <div class="col-lg-2 col-md-3 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Web Development</a></li>
              <li><a href="#">Product Management</a></li>
              <li><a href="#">Marketing</a></li>
              <li><a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Hic solutasetp</h4>
            <ul>
              <li><a href="#">Molestiae accusamus iure</a></li>
              <li><a href="#">Excepturi dignissimos</a></li>
              <li><a href="#">Suscipit distinctio</a></li>
              <li><a href="#">Dilecta</a></li>
              <li><a href="#">Sit quas consectetur</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Nobis illum</h4>
            <ul>
              <li><a href="#">Ipsam</a></li>
              <li><a href="#">Laudantium dolorum</a></li>
              <li><a href="#">Dinera</a></li>
              <li><a href="#">Trodelas</a></li>
              <li><a href="#">Flexo</a></li>
            </ul>
          </div> --}}

        </div>
      </div>
    </div>

    {{-- <div class="copyright text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div>
            {{-- © Copyright <strong><span>MyWebsite</span></strong>. All Rights Reserved --}}
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div> --}}
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

@endsection



