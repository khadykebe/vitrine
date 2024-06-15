<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{$desctiptions[0]->nom}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: QuickStart
  * Template URL: https://bootstrapmade.com/quickstart-bootstrap-startup-website-template/
  * Updated: Jun 06 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <img src="{{asset('assets/img/logo.png')}}" alt="">
        <h1 class="sitename">{{$desctiptions[0]->nom}}</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Accueil</a></li>
          <li><a href="#services">Vie scolaire</a></li>
          <li><a href="#more-features">Programmes éducatifs</a></li>
          <li><a href="#features">Actualités et événements</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>


    </div>
  </header>

  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Connexion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('connexion')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Se souvenir de moi</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Connexion</button>
                </form>
            </div>
        </div>
    </div>
</div>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="hero-bg">
        <img src="assets/img/hero-bg-light.webp" alt="">
      </div>
      <div class="container text-center">
        @if(session('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
    @endif
        <div class="d-flex flex-column justify-content-center align-items-center">
          <h1 data-aos="fade-up">Bienvenue sur  <span>{{$desctiptions[0]->nom}}</span></h1>
          <p data-aos="fade-up" data-aos-delay="100">Éducation Sans Frontières, Culture et Excellence<br></p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a data-bs-toggle="modal" data-bs-target="#loginModal" class="btn-get-started" href="">Se connecter</a>
          </div>
          {{-- <img src="assets/img/image.jpg" class="img-fluid hero-img" alt="" data-aos="zoom-out" data-aos-delay="300"> --}}
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Historique de l'école</a></h4>
                <p class="description">{{$desctiptions[0]->Historique}}</p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Mission et vision de l'école</a></h4>
                <p class="description">{{$desctiptions[0]->mission}}</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Valeurs et philosophie éducative</a></h4>
                <p class="description">{{$desctiptions[0]->valeur}}</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Featured Services Section -->


    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <h3>Présentation de l'école</h3>
            <p class="fst-italic">
              {{$ecoles[0]->presentation}}
            </p>
          </div>

          <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">
              <div class="col-lg-6">
                <div class="row gy-4">
                    <div class="col-lg-12">
                      <img src="{{$images[0]->image}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-12">
                      <img src="{{$images[4]->image}}" class="img-fluid" alt="">
                    </div>
                  </div>
              </div>
              <div class="col-lg-6">
                <div class="row gy-4">
                  <div class="col-lg-12">
                    <img src="{{$images[1]->image}}" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-12">
                    <img src="{{$images[3]->image}}" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- /About Section -->

    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Vie Scolaire</h2>
        </div><!-- End Section Title -->

        <div class="container">

          <div class="row g-5">
            @foreach ($scolaires as $scolaire)
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item item-cyan position-relative">
                        <i class="bi bi-activity icon"></i>
                        <div>
                        <h3>{{$scolaire->nom}}</h3>
                        <p>{{$scolaire->description}}</p>
                        </div>
                    </div>
                    </div><!-- End Service Item -->
            @endforeach

          </div>

        </div>

    </section><!-- /Services Section -->

    <section id="testimonials" class="testimonials section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Galerie Photo</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 1,
                    "spaceBetween": 40
                  },
                  "1200": {
                    "slidesPerView": 3,
                    "spaceBetween": 1
                  }
                }
              }
            </script>
            <div class="swiper-wrapper">
                @foreach ($images as $image)
                    <div class="swiper-slide">
                        <div class="gallery-item">
                            <div class="testimonial-item">
                                <img src="{{$image->image}}" class="testimonial-img" alt="">
                                <h3>{{$image->titre}}</h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                @endforeach


            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>

    </section><!-- /Testimonials Section -->


    <section id="more-features" class="more-features section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Programme Educatif</h2>
          </div>
        <div class="container">

          <div class="row justify-content-around gy-4">

            <div class="col-lg-6 d-flex flex-column justify-content-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
              <div class="row">
                @foreach ($programmes as $programme)
                <div class="col-lg-6 icon-box d-flex">
                    <i class="bi bi-patch-check flex-shrink-0"></i>
                      <div>
                        <h4>{{$programme->nom}}</h4>
                        <p>{{$programme->description}}</p>
                      </div>
                    </div><!-- End Icon Box -->
                @endforeach

              </div>
            </div>
            <div class="features-image col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/1478.jpg" alt="">
            </div>

          </div>

        </div>

    </section><!-- /More Features Section -->
    <!-- Clients Section -->
    <section id="clients" class="clients section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Partenaire</h2>
          </div>
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
            @foreach ($partenaires as $partenaire)
                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="{{$partenaire->logo}}" class="img-fluid" alt="">
                 </div><!-- End Client Item -->
            @endforeach
        </div>
      </div>

    </section><!-- /Clients Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Evenement</h2>
      </div><!-- End Section Title -->

      <div class="container">
        @foreach ($events as $event)
        <div class="row justify-content-between">
            <div class="col-lg-7 d-flex align-items-center">
                <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
                <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                            <i class="bi bi-brightness-high"></i>
                            <div>
                                <h4 class="d-none d-lg-block">{{$event->titre}}</h4>
                                <p>
                                {{$event->description}}
                                </p><br>
                                <p><strong>Organiger par : </strong>{{$event->organisateur}}</p>
                                <p><strong>date : </strong>Du {{$event->date_debut}} au {{$event->date_fin}}</p>
                                <p><strong>Heure : </strong>{{$event->statut}}</p>
                                <p><strong>lieu : </strong>{{$event->lieu}}</p>
                                <p><strong>Public Cible : </strong>{{$event->type}}</p>
                            </div>
                        </a>
                </li>
                </ul><!-- End Tab Nav -->

            </div>

            <div class="col-lg-5">

                <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

                <div class="tab-pane fade active show" id="features-tab-1">
                    <img src="{{$event->image}}" alt="" class="img-fluid">
                </div><!-- End Tab Content Item -->

                {{-- <div class="tab-pane fade" id="features-tab-2">
                    <img src="assets/img/tabs-2.jpg" alt="" class="img-fluid">
                </div><!-- End Tab Content Item -->

                <div class="tab-pane fade" id="features-tab-3">
                    <img src="assets/img/tabs-3.jpg" alt="" class="img-fluid">
                </div><!-- End Tab Content Item -->
                </div> --}}

            </div>

        </div>
        @endforeach

      </div>

    </section><!-- /Features Section -->

    <!-- Features Details Section -->
    <section id="features-details" class="features-details section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Activité</h2>
          </div>
      <div class="container">
        @foreach ($Activites as $Activite)
        <div class="row gy-4 justify-content-between features-item">

            <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
              <img src="{{$Activite->image}}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
              <div class="content">
                <h3>{{$Activite->titre}}</h3>
                <p>{{$Activite->description}}</p>
                <p><strong>Organiger par : </strong>{{$Activite->organisateur}}</p>
                <p><strong>date : </strong>Du {{$Activite->date}}</p>
                <p><strong>Heure : </strong>{{$Activite->Heure}}</p>
                <p><strong>lieu : </strong>{{$Activite->lieu}}</p>
                <p><strong>Objectifs : </strong>{{$Activite->Objectifs}}</p>
                <p><strong>Participatioon : </strong>{{$Activite->Participation}}</p>
              </div>
            </div>

          </div><!-- Features Item -->
        @endforeach

      </div>

    </section><!-- /Features Details Section -->

    <!-- Services Section -->

    <!-- More Features Section -->





    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Adresse</h3>
              <p>{{$desctiptions[0]->adresse}}</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>Téléphone</h3>
              <p>+221 {{$desctiptions[0]->telephone}}</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Email </h3>
              <p>{{$desctiptions[0]->email}}</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps -->

          <div class="col-lg-6">
            <form action="{{route('contact')}}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
              @csrf
                <div class="row gy-4">
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Votre Nom" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Votre email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Objet" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

<div id="lightbox" class="lightbox">
    <span class="close">&times;</span>
    <img class="lightbox-content" id="lightbox-img">
</div>
  <footer id="footer" class="footer position-relative">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">FrancoArabe</span>
          </a>
          <div class="footer-contact pt-3">
            <p>{{$desctiptions[0]->adresse}}</p>
            <p class="mt-3"><strong>Téléphone:</strong> <span>+221 {{$desctiptions[0]->telephone}}</span></p>
            <p><strong>Email:</strong> <span>{{$desctiptions[0]->email}}</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Liens utiles</h4>
          <ul>
            <li><a href="#hero" class="active">Accueil</a></li>
            <li><a href="#services">Vie scolaire</a></li>
            <li><a href="#more-features">Programmes éducatifs</a></li>
            <li><a href="#features">Actualités et événements</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>


      </div>
    </div>

    {{-- <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename"></strong><span>All Rights Reserved</span></p>
      <div class="credits">
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
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
