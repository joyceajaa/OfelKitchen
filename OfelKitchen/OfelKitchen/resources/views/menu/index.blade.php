<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Yummy Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{URL:: asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{URL:: asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{URL:: asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{URL:: asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{URL:: asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{URL:: asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{URL:: asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{URL:: asset('assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <img src="assets/img/ofelkitchen.png" alt="Ofel Kitchen Logo">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Ofel Kitchen</h1>
        <span>.</span>
      </a>

      @include('layouts.navbar')

      <a class="btn-getstarted" href="index.html#book-a-table">Book a Table</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <div class="container">
        <div class="row gy-4 justify-content-center justify-content-lg-between">
          <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Enjoy Your Healthy<br>Delicious Food</h1>
            <p data-aos="fade-up" data-aos-delay="100">We are team of talented designers making websites with Bootstrap</p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="#book-a-table" class="btn-get-started">Booka a Table</a>
              <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="assets/img/ofelkitchen.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Menu</h2>
        <p><span>Check Our</span> <span class="description-title">Ofel Kitchen Menu</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-Tier-Cake">
              <h4>Tier Cake</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-Ribbon-Cake">
              <h4>Ribbon Cake</h4>
            </a><!-- End tab nav item -->
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-Pudding">
              <h4>Pudding</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-Painting-Cake">
              <h4>Painting Cake</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-Klepon-Cake">
              <h4>Klepon Cake</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-Fudgy-Brownies-Cake">
              <h4>Fudgy Brownies</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-Fruit-Cake">
              <h4>Fruit Cake</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-Character-Cake">
              <h4>Character Cake</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-Bouquet">
              <h4>Bouquet</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-Bento-Cake">
              <h4>Bento Cake</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-Flower-Bouquet">
              <h4>Flower Bouquet</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <!-- Tier Cake Menu Content -->
          <div class="tab-pane fade active show" id="menu-Tier-Cake">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Tier Cake</h3>
            </div>

            <div class="row gy-5">

              <!-- Menu Item Card Start -->
              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/TierCake/menu-1.jpg')}}" class="glightbox" data-gallery="menu-gallery-tiercake">
                      <img src="{{URL:: asset('assets/img/menu/TierCake/menu-1.jpg')}}" class="menu-card-img" alt="Magnam Tiste">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Magnam Tiste</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $5.95
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <!-- Menu Item Card Start -->
              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/TierCake/menu-2.jpg')}}" class="glightbox" data-gallery="menu-gallery-tiercake">
                      <img src="{{URL:: asset('assets/img/menu/TierCake/menu-2.jpg')}}" class="menu-card-img" alt="Aut Luia">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Aut Luia</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $14.95
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

               <!-- Menu Item Card Start -->
               <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/TierCake/menu-3.jpg')}}" class="glightbox" data-gallery="menu-gallery-tiercake">
                      <img src="{{URL:: asset('assets/img/menu/TierCake/menu-3.jpg')}}" class="menu-card-img" alt="Est Eligendi">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Est Eligendi</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $8.95
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <!-- Menu Item Card Start -->
              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/TierCake/menu-4.jpg')}}" class="glightbox" data-gallery="menu-gallery-tiercake">
                      <img src="{{URL:: asset('assets/img/menu/TierCake/menu-4.jpg')}}" class="menu-card-img" alt="Eos Luibusdam">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Eos Luibusdam</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $12.95
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <!-- Menu Item Card Start -->
              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/TierCake/menu-5.jpg')}}" class="glightbox" data-gallery="menu-gallery-tiercake">
                      <img src="{{URL:: asset('assets/img/menu/TierCake/menu-5.jpg')}}" class="menu-card-img" alt="Eos Luibusdam">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Eos Luibusdam</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $12.95
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

               <!-- Menu Item Card Start -->
              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/TierCake/menu-6.jpg')}}" class="glightbox" data-gallery="menu-gallery-tiercake">
                      <img src="{{URL:: asset('assets/img/menu/TierCake/menu-6.jpg')}}" class="menu-card-img" alt="Laboriosam Direva">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Laboriosam Direva</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $9.95
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->


            </div>
          </div><!-- End Tier Cake Menu Content -->

          <!-- Ribbon Cake Menu Content -->
          <div class="tab-pane fade" id="menu-Ribbon-Cake">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Ribbon Cake</h3>
            </div>

            <div class="row gy-5">


              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/RibbonCake/menu-1.jpg')}}" class="glightbox" data-gallery="menu-gallery-ribboncake">
                      <img src="{{URL:: asset('assets/img/menu/RibbonCake/menu-1.jpg')}}" class="menu-card-img" alt="Ribbon Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Ribbon Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Ribbon Cake 1
                    </p>
                    <p class="price">
                      $10.95
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                 <div class="card h-100 shadow-sm menu-card">
                   <div class="menu-card-img-container">
                     <a href="{{URL:: asset('assets/img/menu/RibbonCake/menu-2.jpg')}}" class="glightbox" data-gallery="menu-gallery-ribboncake">
                       <img src="{{URL:: asset('assets/img/menu/RibbonCake/menu-2.jpg')}}" class="menu-card-img" alt="Ribbon Cake 2">
                     </a>
                   </div>
                   <div class="card-body">
                     <h4 class="menu-card-title">Ribbon Cake Item 2</h4>
                     <p class="ingredients">
                       Deskripsi Ribbon Cake 2
                     </p>
                     <p class="price">
                       $11.50
                     </p>
                   </div>
                 </div>
               </div><!-- Menu Item Card End -->

               <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/RibbonCake/menu-3.jpg')}}" class="glightbox" data-gallery="menu-gallery-ribboncake">
                      <img src="{{URL:: asset('assets/img/menu/RibbonCake/menu-3.jpg')}}" class="menu-card-img" alt="Ribbon Cake 2">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Ribbon Cake Item 2</h4>
                    <p class="ingredients">
                      Deskripsi Ribbon Cake 2
                    </p>
                    <p class="price">
                      $11.50
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/RibbonCake/menu-4.jpg')}}" class="glightbox" data-gallery="menu-gallery-ribboncake">
                      <img src="{{URL:: asset('assets/img/menu/RibbonCake/menu-4.jpg')}}" class="menu-card-img" alt="Ribbon Cake 2">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Ribbon Cake Item 2</h4>
                    <p class="ingredients">
                      Deskripsi Ribbon Cake 2
                    </p>
                    <p class="price">
                      $11.50
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/RibbonCake/menu-5.jpg')}}" class="glightbox" data-gallery="menu-gallery-ribboncake">
                      <img src="{{URL:: asset('assets/img/menu/RibbonCake/menu-5.jpg')}}" class="menu-card-img" alt="Ribbon Cake 2">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Ribbon Cake Item 2</h4>
                    <p class="ingredients">
                      Deskripsi Ribbon Cake 2
                    </p>
                    <p class="price">
                      $11.50
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/RibbonCake/menu-6.jpg')}}" class="glightbox" data-gallery="menu-gallery-ribboncake">
                      <img src="{{URL:: asset('assets/img/menu/RibbonCake/menu-6.jpg')}}" class="menu-card-img" alt="Ribbon Cake 2">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Ribbon Cake Item 2</h4>
                    <p class="ingredients">
                      Deskripsi Ribbon Cake 2
                    </p>
                    <p class="price">
                      $11.50
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/RibbonCake/menu-7.jpg')}}" class="glightbox" data-gallery="menu-gallery-ribboncake">
                      <img src="{{URL:: asset('assets/img/menu/RibbonCake/menu-7.jpg')}}" class="menu-card-img" alt="Ribbon Cake 2">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Ribbon Cake Item 2</h4>
                    <p class="ingredients">
                      Deskripsi Ribbon Cake 2
                    </p>
                    <p class="price">
                      $11.50
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/RibbonCake/menu-8.jpg')}}" class="glightbox" data-gallery="menu-gallery-ribboncake">
                      <img src="{{URL:: asset('assets/img/menu/RibbonCake/menu-8.jpg')}}" class="menu-card-img" alt="Ribbon Cake 2">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Ribbon Cake Item 2</h4>
                    <p class="ingredients">
                      Deskripsi Ribbon Cake 2
                    </p>
                    <p class="price">
                      $11.50
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/RibbonCake/menu-9.jpg')}}" class="glightbox" data-gallery="menu-gallery-ribboncake">
                      <img src="{{URL:: asset('assets/img/menu/RibbonCake/menu-9.jpg')}}" class="menu-card-img" alt="Ribbon Cake 2">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Ribbon Cake Item 2</h4>
                    <p class="ingredients">
                      Deskripsi Ribbon Cake 2
                    </p>
                    <p class="price">
                      $11.50
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/RibbonCake/menu-10.jpg')}}" class="glightbox" data-gallery="menu-gallery-ribboncake">
                      <img src="{{URL:: asset('assets/img/menu/RibbonCake/menu-10.jpg')}}" class="menu-card-img" alt="Ribbon Cake 2">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Ribbon Cake Item 2</h4>
                    <p class="ingredients">
                      Deskripsi Ribbon Cake 2
                    </p>
                    <p class="price">
                      $11.50
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

            </div>
          </div><!-- End Ribbon Cake Menu Content -->

          <!-- Pudding Menu Content -->
          <div class="tab-pane fade" id="menu-Pudding">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Pudding</h3>
            </div>

            <div class="row gy-5">

               <div class="col-lg-4 col-md-6">
                 <div class="card h-100 shadow-sm menu-card">
                   <div class="menu-card-img-container">
                     <a href="{{URL:: asset('assets/img/menu/Pudding/menu-1.jpg')}}" class="glightbox" data-gallery="menu-gallery-pudding">
                       <img src="{{URL:: asset('assets/img/menu/Pudding/menu-1.jpg')}}" class="menu-card-img" alt="Pudding 1">
                     </a>
                   </div>
                   <div class="card-body">
                     <h4 class="menu-card-title">Pudding Item 1</h4>
                     <p class="ingredients">
                       Deskripsi Pudding 1
                     </p>
                     <p class="price">
                       $6.50
                     </p>
                   </div>
                 </div>
               </div><!-- Menu Item Card End -->

               <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/Pudding/menu-2.jpg')}}" class="glightbox" data-gallery="menu-gallery-pudding">
                      <img src="{{URL:: asset('assets/img/menu/Pudding/menu-2.jpg')}}" class="menu-card-img" alt="Pudding 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Pudding Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Pudding 1
                    </p>
                    <p class="price">
                      $6.50
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/Pudding/menu-3.jpg')}}" class="glightbox" data-gallery="menu-gallery-pudding">
                      <img src="{{URL:: asset('assets/img/menu/Pudding/menu-3.jpg')}}" class="menu-card-img" alt="Pudding 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Pudding Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Pudding 1
                    </p>
                    <p class="price">
                      $6.50
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/Pudding/menu-4.jpg')}}" class="glightbox" data-gallery="menu-gallery-pudding">
                      <img src="{{URL:: asset('assets/img/menu/Pudding/menu-4.jpg')}}" class="menu-card-img" alt="Pudding 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Pudding Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Pudding 1
                    </p>
                    <p class="price">
                      $6.50
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/Pudding/menu-5.jpg')}}" class="glightbox" data-gallery="menu-gallery-pudding">
                      <img src="{{URL:: asset('assets/img/menu/Pudding/menu-5.jpg')}}" class="menu-card-img" alt="Pudding 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Pudding Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Pudding 1
                    </p>
                    <p class="price">
                      $6.50
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/Pudding/menu-6.jpg')}}" class="glightbox" data-gallery="menu-gallery-pudding">
                      <img src="{{URL:: asset('assets/img/menu/Pudding/menu-6.jpg')}}" class="menu-card-img" alt="Pudding 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Pudding Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Pudding 1
                    </p>
                    <p class="price">
                      $6.50
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/Pudding/menu-7.jpg')}}" class="glightbox" data-gallery="menu-gallery-pudding">
                      <img src="{{URL:: asset('assets/img/menu/Pudding/menu-7.jpg')}}" class="menu-card-img" alt="Pudding 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Pudding Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Pudding 1
                    </p>
                    <p class="price">
                      $6.50
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/Pudding/menu-8.jpg')}}" class="glightbox" data-gallery="menu-gallery-pudding">
                      <img src="{{URL:: asset('assets/img/menu/Pudding/menu-8.jpg')}}" class="menu-card-img" alt="Pudding 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Pudding Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Pudding 1
                    </p>
                    <p class="price">
                      $6.50
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

            </div>
          </div><!-- End Pudding Menu Content -->

          <!-- Painting Cake Menu Content -->
          <div class="tab-pane fade" id="menu-Painting-Cake">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Painting Cake</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 col-md-6">
                 <div class="card h-100 shadow-sm menu-card">
                   <div class="menu-card-img-container">
                     <a href="{{URL:: asset('assets/img/menu/PaintingCake/menu-1.jpg')}}" class="glightbox" data-gallery="menu-gallery-paintingcake">
                       <img src="{{URL:: asset('assets/img/menu/PaintingCake/menu-1.jpg')}}" class="menu-card-img" alt="Painting Cake 1">
                     </a>
                   </div>
                   <div class="card-body">
                     <h4 class="menu-card-title">Painting Cake Item 1</h4>
                     <p class="ingredients">
                       Deskripsi Painting Cake 1
                     </p>
                     <p class="price">
                       $15.00
                     </p>
                   </div>
                 </div>
               </div><!-- Menu Item Card End -->

               <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/PaintingCake/menu-2.jpg')}}" class="glightbox" data-gallery="menu-gallery-paintingcake">
                      <img src="{{URL:: asset('assets/img/menu/PaintingCake/menu-2.jpg')}}" class="menu-card-img" alt="Painting Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Painting Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Painting Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/PaintingCake/menu-3.jpg')}}" class="glightbox" data-gallery="menu-gallery-paintingcake">
                      <img src="{{URL:: asset('assets/img/menu/PaintingCake/menu-3.jpg')}}" class="menu-card-img" alt="Painting Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Painting Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Painting Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/PaintingCake/menu-4.jpg')}}" class="glightbox" data-gallery="menu-gallery-paintingcake">
                      <img src="{{URL:: asset('assets/img/menu/PaintingCake/menu-4.jpg')}}" class="menu-card-img" alt="Painting Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Painting Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Painting Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/PaintingCake/menu-5.jpg')}}" class="glightbox" data-gallery="menu-gallery-paintingcake">
                      <img src="{{URL:: asset('assets/img/menu/PaintingCake/menu-5.jpg')}}" class="menu-card-img" alt="Painting Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Painting Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Painting Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/PaintingCake/menu-6.jpg')}}" class="glightbox" data-gallery="menu-gallery-paintingcake">
                      <img src="{{URL:: asset('assets/img/menu/PaintingCake/menu-6.jpg')}}" class="menu-card-img" alt="Painting Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Painting Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Painting Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/PaintingCake/menu-7.jpg')}}" class="glightbox" data-gallery="menu-gallery-paintingcake">
                      <img src="{{URL:: asset('assets/img/menu/PaintingCake/menu-7.jpg')}}" class="menu-card-img" alt="Painting Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Painting Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Painting Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/PaintingCake/menu-8.jpg')}}" class="glightbox" data-gallery="menu-gallery-paintingcake">
                      <img src="{{URL:: asset('assets/img/menu/PaintingCake/menu-8.jpg')}}" class="menu-card-img" alt="Painting Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Painting Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Painting Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/PaintingCake/menu-9.jpg')}}" class="glightbox" data-gallery="menu-gallery-paintingcake">
                      <img src="{{URL:: asset('assets/img/menu/PaintingCake/menu-9.jpg')}}" class="menu-card-img" alt="Painting Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Painting Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Painting Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/PaintingCake/menu-10.jpg')}}" class="glightbox" data-gallery="menu-gallery-paintingcake">
                      <img src="{{URL:: asset('assets/img/menu/PaintingCake/menu-10.jpg')}}" class="menu-card-img" alt="Painting Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Painting Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Painting Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/PaintingCake/menu-11.jpg')}}" class="glightbox" data-gallery="menu-gallery-paintingcake">
                      <img src="{{URL:: asset('assets/img/menu/PaintingCake/menu-11.jpg')}}" class="menu-card-img" alt="Painting Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Painting Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Painting Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/PaintingCake/menu-12.jpg')}}" class="glightbox" data-gallery="menu-gallery-paintingcake">
                      <img src="{{URL:: asset('assets/img/menu/PaintingCake/menu-12.jpg')}}" class="menu-card-img" alt="Painting Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Painting Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Painting Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/PaintingCake/menu-13.jpg')}}" class="glightbox" data-gallery="menu-gallery-paintingcake">
                      <img src="{{URL:: asset('assets/img/menu/PaintingCake/menu-13.jpg')}}" class="menu-card-img" alt="Painting Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Painting Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Painting Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/PaintingCake/menu-14.jpg')}}" class="glightbox" data-gallery="menu-gallery-paintingcake">
                      <img src="{{URL:: asset('assets/img/menu/PaintingCake/menu-14.jpg')}}" class="menu-card-img" alt="Painting Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Painting Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Painting Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/PaintingCake/menu-15.jpg')}}" class="glightbox" data-gallery="menu-gallery-paintingcake">
                      <img src="{{URL:: asset('assets/img/menu/PaintingCake/menu-15.jpg')}}" class="menu-card-img" alt="Painting Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Painting Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Painting Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/PaintingCake/menu-16.jpg')}}" class="glightbox" data-gallery="menu-gallery-paintingcake">
                      <img src="{{URL:: asset('assets/img/menu/PaintingCake/menu-16.jpg')}}" class="menu-card-img" alt="Painting Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Painting Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Painting Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/PaintingCake/menu-17.jpg')}}" class="glightbox" data-gallery="menu-gallery-paintingcake">
                      <img src="{{URL:: asset('assets/img/menu/PaintingCake/menu-17.jpg')}}" class="menu-card-img" alt="Painting Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Painting Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Painting Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/PaintingCake/menu-18.jpg')}}" class="glightbox" data-gallery="menu-gallery-paintingcake">
                      <img src="{{URL:: asset('assets/img/menu/PaintingCake/menu-18.jpg')}}" class="menu-card-img" alt="Painting Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Painting Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Painting Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/PaintingCake/menu-19.jpg')}}" class="glightbox" data-gallery="menu-gallery-paintingcake">
                      <img src="{{URL:: asset('assets/img/menu/PaintingCake/menu-19.jpg')}}" class="menu-card-img" alt="Painting Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Painting Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Painting Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/PaintingCake/menu-20.jpg')}}" class="glightbox" data-gallery="menu-gallery-paintingcake">
                      <img src="{{URL:: asset('assets/img/menu/PaintingCake/menu-20.jpg')}}" class="menu-card-img" alt="Painting Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Painting Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Painting Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

            </div>
          </div><!-- End Painting Cake Menu Content -->

          <!-- Klepon Cake Menu Content -->
          <div class="tab-pane fade" id="menu-Klepon-Cake">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Klepon Cake</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 col-md-6">
                 <div class="card h-100 shadow-sm menu-card">
                   <div class="menu-card-img-container">
                     <a href="{{URL:: asset('assets/img/menu/KleponCake/menu-(1).jpg')}}" class="glightbox" data-gallery="menu-gallery-KleponCake">
                       <img src="{{URL:: asset('assets/img/menu/KleponCake/menu-(1).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                     </a>
                   </div>
                   <div class="card-body">
                     <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                     <p class="ingredients">
                       Deskripsi Klepon Cake 1
                     </p>
                     <p class="price">
                       $15.00
                     </p>
                   </div>
                 </div>
               </div><!-- Menu Item Card End -->

               <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/KleponCake/menu-(2).jpg')}}" class="glightbox" data-gallery="menu-gallery-KleponCake">
                      <img src="{{URL:: asset('assets/img/menu/KleponCake/menu-(2).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Klepon Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/KleponCake/menu-(3).jpg')}}" class="glightbox" data-gallery="menu-gallery-KleponCake">
                      <img src="{{URL:: asset('assets/img/menu/KleponCake/menu-(3).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Klepon Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/KleponCake/menu-(4).jpg')}}" class="glightbox" data-gallery="menu-gallery-KleponCake">
                      <img src="{{URL:: asset('assets/img/menu/KleponCake/menu-(4).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Klepon Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/KleponCake/menu-(5).jpg')}}" class="glightbox" data-gallery="menu-gallery-KleponCake">
                      <img src="{{URL:: asset('assets/img/menu/KleponCake/menu-(5).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Klepon Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

            </div>
        </div><!-- End Kelpon Cake Menu Content -->

            <!-- Fudgy Brownies Cake Menu Content -->
          <div class="tab-pane fade" id="menu-Fudgy-Brownies-Cake">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Fudgy Brownies Cake</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 col-md-6">
                 <div class="card h-100 shadow-sm menu-card">
                   <div class="menu-card-img-container">
                     <a href="{{URL:: asset('assets/img/menu/FudgyBrownies/menu-1.jpg')}}" class="glightbox" data-gallery="menu-gallery-FudgyBrownies">
                       <img src="{{URL:: asset('assets/img/menu/FudgyBrownies/menu-1.jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                     </a>
                   </div>
                   <div class="card-body">
                     <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                     <p class="ingredients">
                       Deskripsi Klepon Cake 1
                     </p>
                     <p class="price">
                       $15.00
                     </p>
                   </div>
                 </div>
               </div><!-- Menu Item Card End -->

               <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/FudgyBrownies/menu-2.jpg')}}" class="glightbox" data-gallery="menu-gallery-FudgyBrownies">
                      <img src="{{URL:: asset('assets/img/menu/FudgyBrownies/menu-2.jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Klepon Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/FudgyBrownies/menu-3.jpg')}}" class="glightbox" data-gallery="menu-gallery-FudgyBrownies">
                      <img src="{{URL:: asset('assets/img/menu/FudgyBrownies/menu-3.jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Klepon Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/FudgyBrownies/menu-4.jpg')}}" class="glightbox" data-gallery="menu-gallery-FudgyBrownies">
                      <img src="{{URL:: asset('assets/img/menu/FudgyBrownies/menu-4.jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Klepon Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

            </div>
        </div><!-- End Fudgy Brownies Cake Menu Content -->

        <!-- Fruit Cake Menu Content -->
        <div class="tab-pane fade" id="menu-Fruit-Cake">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Fruit Cake</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 col-md-6">
                 <div class="card h-100 shadow-sm menu-card">
                   <div class="menu-card-img-container">
                     <a href="{{URL:: asset('assets/img/menu/FruitCake/menu-(1).jpg')}}" class="glightbox" data-gallery="menu-gallery-FruitCake">
                       <img src="{{URL:: asset('assets/img/menu/FruitCake/menu-(1).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                     </a>
                   </div>
                   <div class="card-body">
                     <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                     <p class="ingredients">
                       Deskripsi Klepon Cake 1
                     </p>
                     <p class="price">
                       $15.00
                     </p>
                   </div>
                 </div>
               </div><!-- Menu Item Card End -->

               <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/FruitCake/menu-(2).jpg')}}" class="glightbox" data-gallery="menu-gallery-FruitCake">
                      <img src="{{URL:: asset('assets/img/menu/FruitCake/menu-(2).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Klepon Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/FruitCake/menu-(3).jpg')}}" class="glightbox" data-gallery="menu-gallery-FruitCake">
                      <img src="{{URL:: asset('assets/img/menu/FruitCake/menu-(3).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Klepon Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/FruitCake/menu-(4).jpg')}}" class="glightbox" data-gallery="menu-gallery-FruitCake">
                      <img src="{{URL:: asset('assets/img/menu/FruitCake/menu-(4).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Klepon Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/FruitCake/menu-(5).jpg')}}" class="glightbox" data-gallery="menu-gallery-FruitCake">
                      <img src="{{URL:: asset('assets/img/menu/FruitCake/menu-(5).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Klepon Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/FruitCake/menu-(6).jpg')}}" class="glightbox" data-gallery="menu-gallery-FruitCake">
                      <img src="{{URL:: asset('assets/img/menu/FruitCake/menu-(6).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Klepon Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/FruitCake/menu-(7).jpg')}}" class="glightbox" data-gallery="menu-gallery-FruitCake">
                      <img src="{{URL:: asset('assets/img/menu/FruitCake/menu-(7).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Klepon Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/FruitCake/menu-(8).jpg')}}" class="glightbox" data-gallery="menu-gallery-FruitCake">
                      <img src="{{URL:: asset('assets/img/menu/FruitCake/menu-(8).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Klepon Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

            </div>
        </div><!-- End Fruit Cake Menu Content -->

         <!-- Character Cake Menu Content -->
         <div class="tab-pane fade" id="menu-Character-Cake">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Character Cake</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 col-md-6">
                 <div class="card h-100 shadow-sm menu-card">
                   <div class="menu-card-img-container">
                     <a href="{{URL:: asset('assets/img/menu/CharacterCake/menu-1.jpg')}}" class="glightbox" data-gallery="menu-gallery-CharacterCake">
                       <img src="{{URL:: asset('assets/img/menu/CharacterCake/menu-1.jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                     </a>
                   </div>
                   <div class="card-body">
                     <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                     <p class="ingredients">
                       Deskripsi Klepon Cake 1
                     </p>
                     <p class="price">
                       $15.00
                     </p>
                   </div>
                 </div>
               </div><!-- Menu Item Card End -->

               <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/CharacterCake/menu-2.jpg')}}" class="glightbox" data-gallery="menu-gallery-CharacterCake">
                      <img src="{{URL:: asset('assets/img/menu/CharacterCake/menu-2.jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Klepon Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/CharacterCake/menu-3.jpg')}}" class="glightbox" data-gallery="menu-gallery-CharacterCake">
                      <img src="{{URL:: asset('assets/img/menu/CharacterCake/menu-3.jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Klepon Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/CharacterCake/menu-4.jpg')}}" class="glightbox" data-gallery="menu-gallery-CharacterCake">
                      <img src="{{URL:: asset('assets/img/menu/CharacterCake/menu-4.jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Klepon Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/CharacterCake/menu-5.jpg')}}" class="glightbox" data-gallery="menu-gallery-CharacterCake">
                      <img src="{{URL:: asset('assets/img/menu/CharacterCake/menu-5.jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Klepon Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/CharacterCake/menu-6.jpg')}}" class="glightbox" data-gallery="menu-gallery-CharacterCake">
                      <img src="{{URL:: asset('assets/img/menu/CharacterCake/menu-6.jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Klepon Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/CharacterCake/menu-7.jpg')}}" class="glightbox" data-gallery="menu-gallery-CharacterCake">
                      <img src="{{URL:: asset('assets/img/menu/CharacterCake/menu-7.jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Klepon Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/CharacterCake/menu-8.jpg')}}" class="glightbox" data-gallery="menu-gallery-CharacterCake">
                      <img src="{{URL:: asset('assets/img/menu/CharacterCake/menu-8.jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Klepon Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

              <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm menu-card">
                  <div class="menu-card-img-container">
                    <a href="{{URL:: asset('assets/img/menu/CharacterCake/menu-9.jpg')}}" class="glightbox" data-gallery="menu-gallery-CharacterCake">
                      <img src="{{URL:: asset('assets/img/menu/CharacterCake/menu-9.jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                    <p class="ingredients">
                      Deskripsi Klepon Cake 1
                    </p>
                    <p class="price">
                      $15.00
                    </p>
                  </div>
                </div>
              </div><!-- Menu Item Card End -->

        <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm menu-card">
              <div class="menu-card-img-container">
                <a href="{{URL:: asset('assets/img/menu/CharacterCake/menu-10.jpg')}}" class="glightbox" data-gallery="menu-gallery-CharacterCake">
                  <img src="{{URL:: asset('assets/img/menu/CharacterCake/menu-10.jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                </a>
              </div>
              <div class="card-body">
                <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                <p class="ingredients">
                  Deskripsi Klepon Cake 1
                </p>
                <p class="price">
                  $15.00
                </p>
              </div>
            </div>
          </div><!-- Menu Item Card End -->

        </div>
    </div><!-- End Character Cake Menu Content -->

    <!-- Bouquet Menu Content -->
    <div class="tab-pane fade" id="menu-Bouquet">

        <div class="tab-header text-center">
          <p>Menu</p>
          <h3>Bouquet</h3>
        </div>

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6">
             <div class="card h-100 shadow-sm menu-card">
               <div class="menu-card-img-container">
                 <a href="{{URL:: asset('assets/img/menu/Bouquet/menu-(1).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bouquet">
                   <img src="{{URL:: asset('assets/img/menu/Bouquet/menu-(1).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                 </a>
               </div>
               <div class="card-body">
                 <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                 <p class="ingredients">
                   Deskripsi Klepon Cake 1
                 </p>
                 <p class="price">
                   $15.00
                 </p>
               </div>
             </div>
           </div><!-- Menu Item Card End -->

           <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm menu-card">
              <div class="menu-card-img-container">
                <a href="{{URL:: asset('assets/img/menu/Bouquet/menu-(2).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bouquet">
                  <img src="{{URL:: asset('assets/img/menu/Bouquet/menu-(2).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                </a>
              </div>
              <div class="card-body">
                <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                <p class="ingredients">
                  Deskripsi Klepon Cake 1
                </p>
                <p class="price">
                  $15.00
                </p>
              </div>
            </div>
          </div><!-- Menu Item Card End -->

          <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm menu-card">
              <div class="menu-card-img-container">
                <a href="{{URL:: asset('assets/img/menu/Bouquet/menu-(3).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bouquet">
                  <img src="{{URL:: asset('assets/img/menu/Bouquet/menu-(3).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                </a>
              </div>
              <div class="card-body">
                <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                <p class="ingredients">
                  Deskripsi Klepon Cake 1
                </p>
                <p class="price">
                  $15.00
                </p>
              </div>
            </div>
          </div><!-- Menu Item Card End -->

          <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm menu-card">
              <div class="menu-card-img-container">
                <a href="{{URL:: asset('assets/img/menu/Bouquet/menu-(4).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bouquet">
                  <img src="{{URL:: asset('assets/img/menu/Bouquet/menu-(4).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                </a>
              </div>
              <div class="card-body">
                <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                <p class="ingredients">
                  Deskripsi Klepon Cake 1
                </p>
                <p class="price">
                  $15.00
                </p>
              </div>
            </div>
          </div><!-- Menu Item Card End -->

          <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm menu-card">
              <div class="menu-card-img-container">
                <a href="{{URL:: asset('assets/img/menu/Bouquet/menu-(5).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bouquet">
                  <img src="{{URL:: asset('assets/img/menu/Bouquet/menu-(5).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                </a>
              </div>
              <div class="card-body">
                <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                <p class="ingredients">
                  Deskripsi Klepon Cake 1
                </p>
                <p class="price">
                  $15.00
                </p>
              </div>
            </div>
          </div><!-- Menu Item Card End -->

          <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm menu-card">
              <div class="menu-card-img-container">
                <a href="{{URL:: asset('assets/img/menu/Bouquet/menu-(6).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bouquet">
                  <img src="{{URL:: asset('assets/img/menu/Bouquet/menu-(6).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                </a>
              </div>
              <div class="card-body">
                <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                <p class="ingredients">
                  Deskripsi Klepon Cake 1
                </p>
                <p class="price">
                  $15.00
                </p>
              </div>
            </div>
          </div><!-- Menu Item Card End -->

          <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm menu-card">
              <div class="menu-card-img-container">
                <a href="{{URL:: asset('assets/img/menu/Bouquet/menu-(7).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bouquet">
                  <img src="{{URL:: asset('assets/img/menu/Bouquet/menu-(7).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                </a>
              </div>
              <div class="card-body">
                <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                <p class="ingredients">
                  Deskripsi Klepon Cake 1
                </p>
                <p class="price">
                  $15.00
                </p>
              </div>
            </div>
          </div><!-- Menu Item Card End -->

          <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm menu-card">
              <div class="menu-card-img-container">
                <a href="{{URL:: asset('assets/img/menu/Bouquet/menu-(8).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bouquet">
                  <img src="{{URL:: asset('assets/img/menu/Bouquet/menu-(8).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                </a>
              </div>
              <div class="card-body">
                <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                <p class="ingredients">
                  Deskripsi Klepon Cake 1
                </p>
                <p class="price">
                  $15.00
                </p>
              </div>
            </div>
          </div><!-- Menu Item Card End -->

          <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm menu-card">
              <div class="menu-card-img-container">
                <a href="{{URL:: asset('assets/img/menu/Bouquet/menu-(9).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bouquet">
                  <img src="{{URL:: asset('assets/img/menu/Bouquet/menu-(9).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
                </a>
              </div>
              <div class="card-body">
                <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
                <p class="ingredients">
                  Deskripsi Klepon Cake 1
                </p>
                <p class="price">
                  $15.00
                </p>
              </div>
            </div>
          </div><!-- Menu Item Card End -->

    <div class="col-lg-4 col-md-6">
        <div class="card h-100 shadow-sm menu-card">
          <div class="menu-card-img-container">
            <a href="{{URL:: asset('assets/img/menu/Bouquet/menu-(10).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bouquet">
              <img src="{{URL:: asset('assets/img/menu/Bouquet/menu-(10).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
            </a>
          </div>
          <div class="card-body">
            <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
            <p class="ingredients">
              Deskripsi Klepon Cake 1
            </p>
            <p class="price">
              $15.00
            </p>
          </div>
        </div>
      </div><!-- Menu Item Card End -->

    </div>
</div><!-- End Bouquet Menu Content -->

<!-- Bento Cake Menu Content -->
<div class="tab-pane fade" id="menu-Bento-Cake">

    <div class="tab-header text-center">
      <p>Menu</p>
      <h3>Bento Cake</h3>
    </div>

    <div class="row gy-5">

      <div class="col-lg-4 col-md-6">
         <div class="card h-100 shadow-sm menu-card">
           <div class="menu-card-img-container">
             <a href="{{URL:: asset('assets/img/menu/BentoCake/menu-(1).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bento-Cake">
               <img src="{{URL:: asset('assets/img/menu/BentoCake/menu-(1).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
             </a>
           </div>
           <div class="card-body">
             <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
             <p class="ingredients">
               Deskripsi Klepon Cake 1
             </p>
             <p class="price">
               $15.00
             </p>
           </div>
         </div>
       </div><!-- Menu Item Card End -->

       <div class="col-lg-4 col-md-6">
        <div class="card h-100 shadow-sm menu-card">
          <div class="menu-card-img-container">
            <a href="{{URL:: asset('assets/img/menu/BentoCake/menu-(2).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bento-Cake">
              <img src="{{URL:: asset('assets/img/menu/BentoCake/menu-(2).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
            </a>
          </div>
          <div class="card-body">
            <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
            <p class="ingredients">
              Deskripsi Klepon Cake 1
            </p>
            <p class="price">
              $15.00
            </p>
          </div>
        </div>
      </div><!-- Menu Item Card End -->

      <div class="col-lg-4 col-md-6">
        <div class="card h-100 shadow-sm menu-card">
          <div class="menu-card-img-container">
            <a href="{{URL:: asset('assets/img/menu/BentoCake/menu-(3).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bento-Cake">
              <img src="{{URL:: asset('assets/img/menu/BentoCake/menu-(3).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
            </a>
          </div>
          <div class="card-body">
            <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
            <p class="ingredients">
              Deskripsi Klepon Cake 1
            </p>
            <p class="price">
              $15.00
            </p>
          </div>
        </div>
      </div><!-- Menu Item Card End -->

      <div class="col-lg-4 col-md-6">
        <div class="card h-100 shadow-sm menu-card">
          <div class="menu-card-img-container">
            <a href="{{URL:: asset('assets/img/menu/BentoCake/menu-(4).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bento-Cake">
              <img src="{{URL:: asset('assets/img/menu/BentoCake/menu-(4).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
            </a>
          </div>
          <div class="card-body">
            <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
            <p class="ingredients">
              Deskripsi Klepon Cake 1
            </p>
            <p class="price">
              $15.00
            </p>
          </div>
        </div>
      </div><!-- Menu Item Card End -->

      <div class="col-lg-4 col-md-6">
        <div class="card h-100 shadow-sm menu-card">
          <div class="menu-card-img-container">
            <a href="{{URL:: asset('assets/img/menu/BentoCake/menu-(5).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bento-Cake">
              <img src="{{URL:: asset('assets/img/menu/BentoCake/menu-(5).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
            </a>
          </div>
          <div class="card-body">
            <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
            <p class="ingredients">
              Deskripsi Klepon Cake 1
            </p>
            <p class="price">
              $15.00
            </p>
          </div>
        </div>
      </div><!-- Menu Item Card End -->

      <div class="col-lg-4 col-md-6">
        <div class="card h-100 shadow-sm menu-card">
          <div class="menu-card-img-container">
            <a href="{{URL:: asset('assets/img/menu/BentoCake/menu-(6).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bento-Cake">
              <img src="{{URL:: asset('assets/img/menu/BentoCake/menu-(6).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
            </a>
          </div>
          <div class="card-body">
            <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
            <p class="ingredients">
              Deskripsi Klepon Cake 1
            </p>
            <p class="price">
              $15.00
            </p>
          </div>
        </div>
      </div><!-- Menu Item Card End -->

      <div class="col-lg-4 col-md-6">
        <div class="card h-100 shadow-sm menu-card">
          <div class="menu-card-img-container">
            <a href="{{URL:: asset('assets/img/menu/BentoCake/menu-(7).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bento-Cake">
              <img src="{{URL:: asset('assets/img/menu/BentoCake/menu-(7).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
            </a>
          </div>
          <div class="card-body">
            <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
            <p class="ingredients">
              Deskripsi Klepon Cake 1
            </p>
            <p class="price">
              $15.00
            </p>
          </div>
        </div>
      </div><!-- Menu Item Card End -->

      <div class="col-lg-4 col-md-6">
        <div class="card h-100 shadow-sm menu-card">
          <div class="menu-card-img-container">
            <a href="{{URL:: asset('assets/img/menu/BentoCake/menu-(8).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bento-Cake">
              <img src="{{URL:: asset('assets/img/menu/BentoCake/menu-(8).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
            </a>
          </div>
          <div class="card-body">
            <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
            <p class="ingredients">
              Deskripsi Klepon Cake 1
            </p>
            <p class="price">
              $15.00
            </p>
          </div>
        </div>
      </div><!-- Menu Item Card End -->

      <div class="col-lg-4 col-md-6">
        <div class="card h-100 shadow-sm menu-card">
          <div class="menu-card-img-container">
            <a href="{{URL:: asset('assets/img/menu/BentoCake/menu-(9).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bento-Cake">
              <img src="{{URL:: asset('assets/img/menu/BentoCake/menu-(9).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
            </a>
          </div>
          <div class="card-body">
            <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
            <p class="ingredients">
              Deskripsi Klepon Cake 1
            </p>
            <p class="price">
              $15.00
            </p>
          </div>
        </div>
      </div><!-- Menu Item Card End -->

<div class="col-lg-4 col-md-6">
    <div class="card h-100 shadow-sm menu-card">
      <div class="menu-card-img-container">
        <a href="{{URL:: asset('assets/img/menu/BentoCake/menu-(10).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bento-Cake">
          <img src="{{URL:: asset('assets/img/menu/BentoCake/menu-(10).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
        </a>
      </div>
      <div class="card-body">
        <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
        <p class="ingredients">
          Deskripsi Klepon Cake 1
        </p>
        <p class="price">
          $15.00
        </p>
      </div>
    </div>
  </div><!-- Menu Item Card End -->

  <div class="col-lg-4 col-md-6">
    <div class="card h-100 shadow-sm menu-card">
      <div class="menu-card-img-container">
        <a href="{{URL:: asset('assets/img/menu/BentoCake/menu-(11).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bento-Cake">
          <img src="{{URL:: asset('assets/img/menu/BentoCake/menu-(11).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
        </a>
      </div>
      <div class="card-body">
        <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
        <p class="ingredients">
          Deskripsi Klepon Cake 1
        </p>
        <p class="price">
          $15.00
        </p>
      </div>
    </div>
  </div><!-- Menu Item Card End -->

  <div class="col-lg-4 col-md-6">
    <div class="card h-100 shadow-sm menu-card">
      <div class="menu-card-img-container">
        <a href="{{URL:: asset('assets/img/menu/BentoCake/menu-(12).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bento-Cake">
          <img src="{{URL:: asset('assets/img/menu/BentoCake/menu-(12).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
        </a>
      </div>
      <div class="card-body">
        <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
        <p class="ingredients">
          Deskripsi Klepon Cake 1
        </p>
        <p class="price">
          $15.00
        </p>
      </div>
    </div>
  </div><!-- Menu Item Card End -->

  <div class="col-lg-4 col-md-6">
    <div class="card h-100 shadow-sm menu-card">
      <div class="menu-card-img-container">
        <a href="{{URL:: asset('assets/img/menu/BentoCake/menu-(13).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bento-Cake">
          <img src="{{URL:: asset('assets/img/menu/BentoCake/menu-(13).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
        </a>
      </div>
      <div class="card-body">
        <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
        <p class="ingredients">
          Deskripsi Klepon Cake 1
        </p>
        <p class="price">
          $15.00
        </p>
      </div>
    </div>
  </div><!-- Menu Item Card End -->

  <div class="col-lg-4 col-md-6">
    <div class="card h-100 shadow-sm menu-card">
      <div class="menu-card-img-container">
        <a href="{{URL:: asset('assets/img/menu/BentoCake/menu-(14).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bento-Cake">
          <img src="{{URL:: asset('assets/img/menu/BentoCake/menu-(14).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
        </a>
      </div>
      <div class="card-body">
        <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
        <p class="ingredients">
          Deskripsi Klepon Cake 1
        </p>
        <p class="price">
          $15.00
        </p>
      </div>
    </div>
  </div><!-- Menu Item Card End -->

  <div class="col-lg-4 col-md-6">
    <div class="card h-100 shadow-sm menu-card">
      <div class="menu-card-img-container">
        <a href="{{URL:: asset('assets/img/menu/BentoCake/menu-(15).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bento-Cake">
          <img src="{{URL:: asset('assets/img/menu/BentoCake/menu-(15).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
        </a>
      </div>
      <div class="card-body">
        <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
        <p class="ingredients">
          Deskripsi Klepon Cake 1
        </p>
        <p class="price">
          $15.00
        </p>
      </div>
    </div>
  </div><!-- Menu Item Card End -->

  <div class="col-lg-4 col-md-6">
    <div class="card h-100 shadow-sm menu-card">
      <div class="menu-card-img-container">
        <a href="{{URL:: asset('assets/img/menu/BentoCake/menu-(16).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bento-Cake">
          <img src="{{URL:: asset('assets/img/menu/BentoCake/menu-(16).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
        </a>
      </div>
      <div class="card-body">
        <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
        <p class="ingredients">
          Deskripsi Klepon Cake 1
        </p>
        <p class="price">
          $15.00
        </p>
      </div>
    </div>
  </div><!-- Menu Item Card End -->

  <div class="col-lg-4 col-md-6">
    <div class="card h-100 shadow-sm menu-card">
      <div class="menu-card-img-container">
        <a href="{{URL:: asset('assets/img/menu/BentoCake/menu-(17).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bento-Cake">
          <img src="{{URL:: asset('assets/img/menu/BentoCake/menu-(17).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
        </a>
      </div>
      <div class="card-body">
        <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
        <p class="ingredients">
          Deskripsi Klepon Cake 1
        </p>
        <p class="price">
          $15.00
        </p>
      </div>
    </div>
  </div><!-- Menu Item Card End -->

  <div class="col-lg-4 col-md-6">
    <div class="card h-100 shadow-sm menu-card">
      <div class="menu-card-img-container">
        <a href="{{URL:: asset('assets/img/menu/BentoCake/menu-(18).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bento-Cake">
          <img src="{{URL:: asset('assets/img/menu/BentoCake/menu-(18).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
        </a>
      </div>
      <div class="card-body">
        <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
        <p class="ingredients">
          Deskripsi Klepon Cake 1
        </p>
        <p class="price">
          $15.00
        </p>
      </div>
    </div>
  </div><!-- Menu Item Card End -->

  <div class="col-lg-4 col-md-6">
    <div class="card h-100 shadow-sm menu-card">
      <div class="menu-card-img-container">
        <a href="{{URL:: asset('assets/img/menu/BentoCake/menu-(19).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bento-Cake">
          <img src="{{URL:: asset('assets/img/menu/BentoCake/menu-(19).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
        </a>
      </div>
      <div class="card-body">
        <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
        <p class="ingredients">
          Deskripsi Klepon Cake 1
        </p>
        <p class="price">
          $15.00
        </p>
      </div>
    </div>
  </div><!-- Menu Item Card End -->

  <div class="col-lg-4 col-md-6">
    <div class="card h-100 shadow-sm menu-card">
      <div class="menu-card-img-container">
        <a href="{{URL:: asset('assets/img/menu/BentoCake/menu-(20).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bento-Cake">
          <img src="{{URL:: asset('assets/img/menu/BentoCake/menu-(20).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
        </a>
      </div>
      <div class="card-body">
        <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
        <p class="ingredients">
          Deskripsi Klepon Cake 1
        </p>
        <p class="price">
          $15.00
        </p>
      </div>
    </div>
  </div><!-- Menu Item Card End -->

  <div class="col-lg-4 col-md-6">
    <div class="card h-100 shadow-sm menu-card">
      <div class="menu-card-img-container">
        <a href="{{URL:: asset('assets/img/menu/BentoCake/menu-(21).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bento-Cake">
          <img src="{{URL:: asset('assets/img/menu/BentoCake/menu-(21).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
        </a>
      </div>
      <div class="card-body">
        <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
        <p class="ingredients">
          Deskripsi Klepon Cake 1
        </p>
        <p class="price">
          $15.00
        </p>
      </div>
    </div>
  </div><!-- Menu Item Card End -->

  <div class="col-lg-4 col-md-6">
    <div class="card h-100 shadow-sm menu-card">
      <div class="menu-card-img-container">
        <a href="{{URL:: asset('assets/img/menu/BentoCake/menu-(22).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bento-Cake">
          <img src="{{URL:: asset('assets/img/menu/BentoCake/menu-(22).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
        </a>
      </div>
      <div class="card-body">
        <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
        <p class="ingredients">
          Deskripsi Klepon Cake 1
        </p>
        <p class="price">
          $15.00
        </p>
      </div>
    </div>
  </div><!-- Menu Item Card End -->

  <div class="col-lg-4 col-md-6">
    <div class="card h-100 shadow-sm menu-card">
      <div class="menu-card-img-container">
        <a href="{{URL:: asset('assets/img/menu/BentoCake/menu-(23).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bento-Cake">
          <img src="{{URL:: asset('assets/img/menu/BentoCake/menu-(23).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
        </a>
      </div>
      <div class="card-body">
        <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
        <p class="ingredients">
          Deskripsi Klepon Cake 1
        </p>
        <p class="price">
          $15.00
        </p>
      </div>
    </div>
  </div><!-- Menu Item Card End -->

  <div class="col-lg-4 col-md-6">
    <div class="card h-100 shadow-sm menu-card">
      <div class="menu-card-img-container">
        <a href="{{URL:: asset('assets/img/menu/BentoCake/menu-(24).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bento-Cake">
          <img src="{{URL:: asset('assets/img/menu/BentoCake/menu-(24).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
        </a>
      </div>
      <div class="card-body">
        <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
        <p class="ingredients">
          Deskripsi Klepon Cake 1
        </p>
        <p class="price">
          $15.00
        </p>
      </div>
    </div>
  </div><!-- Menu Item Card End -->

  <div class="col-lg-4 col-md-6">
    <div class="card h-100 shadow-sm menu-card">
      <div class="menu-card-img-container">
        <a href="{{URL:: asset('assets/img/menu/BentoCake/menu-(25).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bento-Cake">
          <img src="{{URL:: asset('assets/img/menu/BentoCake/menu-(25).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
        </a>
      </div>
      <div class="card-body">
        <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
        <p class="ingredients">
          Deskripsi Klepon Cake 1
        </p>
        <p class="price">
          $15.00
        </p>
      </div>
    </div>
  </div><!-- Menu Item Card End -->

  <div class="col-lg-4 col-md-6">
    <div class="card h-100 shadow-sm menu-card">
      <div class="menu-card-img-container">
        <a href="{{URL:: asset('assets/img/menu/BentoCake/menu-(26).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bento-Cake">
          <img src="{{URL:: asset('assets/img/menu/BentoCake/menu-(26).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
        </a>
      </div>
      <div class="card-body">
        <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
        <p class="ingredients">
          Deskripsi Klepon Cake 1
        </p>
        <p class="price">
          $15.00
        </p>
      </div>
    </div>
  </div><!-- Menu Item Card End -->

  <div class="col-lg-4 col-md-6">
    <div class="card h-100 shadow-sm menu-card">
      <div class="menu-card-img-container">
        <a href="{{URL:: asset('assets/img/menu/BentoCake/menu-(27).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bento-Cake">
          <img src="{{URL:: asset('assets/img/menu/BentoCake/menu-(27).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
        </a>
      </div>
      <div class="card-body">
        <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
        <p class="ingredients">
          Deskripsi Klepon Cake 1
        </p>
        <p class="price">
          $15.00
        </p>
      </div>
    </div>
  </div><!-- Menu Item Card End -->

  <div class="col-lg-4 col-md-6">
    <div class="card h-100 shadow-sm menu-card">
      <div class="menu-card-img-container">
        <a href="{{URL:: asset('assets/img/menu/BentoCake/menu-(28).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bento-Cake">
          <img src="{{URL:: asset('assets/img/menu/BentoCake/menu-(28).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
        </a>
      </div>
      <div class="card-body">
        <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
        <p class="ingredients">
          Deskripsi Klepon Cake 1
        </p>
        <p class="price">
          $15.00
        </p>
      </div>
    </div>
  </div><!-- Menu Item Card End -->

  <div class="col-lg-4 col-md-6">
    <div class="card h-100 shadow-sm menu-card">
      <div class="menu-card-img-container">
        <a href="{{URL:: asset('assets/img/menu/BentoCake/menu-(29).jpg')}}" class="glightbox" data-gallery="menu-gallery-Bento-Cake">
          <img src="{{URL:: asset('assets/img/menu/BentoCake/menu-(29).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
        </a>
      </div>
      <div class="card-body">
        <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
        <p class="ingredients">
          Deskripsi Klepon Cake 1
        </p>
        <p class="price">
          $15.00
        </p>
      </div>
    </div>
  </div><!-- Menu Item Card End -->

  <div class="col-lg-4 col-md-6">
    <div class="card h-100 shadow-sm menu-card">
      <div class="menu-card-img-container">
        <a href="{{URL:: asset('assets/img/menu/FlowerBouquet/menu-(30).jpg')}}" class="glightbox" data-gallery="menu-gallery-Flower-Bouquet">
          <img src="{{URL:: asset('assets/img/menu/FlowerBouquet/menu-(30).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
        </a>
      </div>
      <div class="card-body">
        <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
        <p class="ingredients">
          Deskripsi Klepon Cake 1
        </p>
        <p class="price">
          $15.00
        </p>
      </div>
    </div>
  </div><!-- Menu Item Card End -->

</div>
</div><!-- End Flower Bouquet Menu Content -->

<!-- Flower Bouquet Menu Content -->
<div class="tab-pane fade" id="menu-Flower-Bouquet">

    <div class="tab-header text-center">
      <p>Menu</p>
      <h3>Painting Cake</h3>
    </div>

    <div class="row gy-5">

      <div class="col-lg-4 col-md-6">
         <div class="card h-100 shadow-sm menu-card">
           <div class="menu-card-img-container">
             <a href="{{URL:: asset('assets/img/menu/FlowerBouquet/menu-(1).jpg')}}" class="glightbox" data-gallery="menu-gallery-Flower-Bouquet">
               <img src="{{URL:: asset('assets/img/menu/FlowerBouquet/menu-(1).jpg')}}" class="menu-card-img" alt="Painting Cake 1">
             </a>
           </div>
           <div class="card-body">
             <h4 class="menu-card-title">Painting Cake Item 1</h4>
             <p class="ingredients">
               Deskripsi Painting Cake 1
             </p>
             <p class="price">
               $15.00
             </p>
           </div>
         </div>
       </div><!-- Menu Item Card End -->

       <div class="col-lg-4 col-md-6">
        <div class="card h-100 shadow-sm menu-card">
          <div class="menu-card-img-container">
            <a href="{{URL:: asset('assets/img/menu/FlowerBouquet/menu-(2).jpg')}}" class="glightbox" data-gallery="menu-gallery-Flower-Bouquet">
              <img src="{{URL:: asset('assets/img/menu/FlowerBouquet/menu-(2).jpg')}}" class="menu-card-img" alt="Painting Cake 1">
            </a>
          </div>
          <div class="card-body">
            <h4 class="menu-card-title">Painting Cake Item 1</h4>
            <p class="ingredients">
              Deskripsi Painting Cake 1
            </p>
            <p class="price">
              $15.00
            </p>
          </div>
        </div>
      </div><!-- Menu Item Card End -->

<div class="col-lg-4 col-md-6">
    <div class="card h-100 shadow-sm menu-card">
      <div class="menu-card-img-container">
        <a href="{{URL:: asset('assets/img/menu/FlowerBouquet/menu-(3).jpg')}}" class="glightbox" data-gallery="menu-gallery-Flower-Bouquet">
          <img src="{{URL:: asset('assets/img/menu/FlowerBouquet/menu-(3).jpg')}}" class="menu-card-img" alt="Klepon Cake 1">
        </a>
      </div>
      <div class="card-body">
        <h4 class="menu-card-title">Kelpon Cake Item 1</h4>
        <p class="ingredients">
          Deskripsi Klepon Cake 1
        </p>
        <p class="price">
          $15.00
        </p>
      </div>
    </div>
  </div><!-- Menu Item Card End -->

  <div class="col-lg-4 col-md-6">
    <div class="card h-100 shadow-sm menu-card">
      <div class="menu-card-img-container">
        <a href="{{URL:: asset('assets/img/menu/FlowerBouquet/menu-(4).jpg')}}" class="glightbox" data-gallery="menu-gallery-Flower-Bouquet">
          <img src="{{URL:: asset('assets/img/menu/FlowerBouquet/menu-(4).jpg')}}" class="menu-card-img" alt="Painting Cake 1">
        </a>
      </div>
      <div class="card-body">
        <h4 class="menu-card-title">Painting Cake Item 1</h4>
        <p class="ingredients">
          Deskripsi Painting Cake 1
        </p>
        <p class="price">
          $15.00
        </p>
      </div>
    </div>
  </div><!-- Menu Item Card End -->

  <div class="col-lg-4 col-md-6">
    <div class="card h-100 shadow-sm menu-card">
      <div class="menu-card-img-container">
        <a href="{{URL:: asset('assets/img/menu/FlowerBouquet/menu-(5).jpg')}}" class="glightbox" data-gallery="menu-gallery-Flower-Bouquet">
          <img src="{{URL:: asset('assets/img/menu/FlowerBouquet/menu-(5).jpg')}}" class="menu-card-img" alt="Painting Cake 1">
        </a>
      </div>
      <div class="card-body">
        <h4 class="menu-card-title">Painting Cake Item 1</h4>
        <p class="ingredients">
          Deskripsi Painting Cake 1
        </p>
        <p class="price">
          $15.00
        </p>
      </div>
    </div>
  </div><!-- Menu Item Card End -->

  <div class="col-lg-4 col-md-6">
    <div class="card h-100 shadow-sm menu-card">
      <div class="menu-card-img-container">
        <a href="{{URL:: asset('assets/img/menu/FlowerBouquet/menu-(6).jpg')}}" class="glightbox" data-gallery="menu-gallery-Flower-Bouquet">
          <img src="{{URL:: asset('assets/img/menu/FlowerBouquet/menu-(6).jpg')}}" class="menu-card-img" alt="Painting Cake 1">
        </a>
      </div>
      <div class="card-body">
        <h4 class="menu-card-title">Painting Cake Item 1</h4>
        <p class="ingredients">
          Deskripsi Painting Cake 1
        </p>
        <p class="price">
          $15.00
        </p>
      </div>
    </div>
  </div><!-- Menu Item Card End -->

  <div class="col-lg-4 col-md-6">
    <div class="card h-100 shadow-sm menu-card">
      <div class="menu-card-img-container">
        <a href="{{URL:: asset('assets/img/menu/FlowerBouquet/menu-(7).jpg')}}" class="glightbox" data-gallery="menu-gallery-Flower-Bouquet">
          <img src="{{URL:: asset('assets/img/menu/FlowerBouquet/menu-(7).jpg')}}" class="menu-card-img" alt="Painting Cake 1">
        </a>
      </div>
      <div class="card-body">
        <h4 class="menu-card-title">Painting Cake Item 1</h4>
        <p class="ingredients">
          Deskripsi Painting Cake 1
        </p>
        <p class="price">
          $15.00
        </p>
      </div>
    </div>
  </div><!-- Menu Item Card End -->

</div>
</div><!-- End Flower Bouquet Menu Content -->




        </div><!-- End Tab Content -->

      </div><!-- End Container -->

    </section><!-- /Menu Section -->

  </main>

  <footer id="footer" class="footer dark-background">
    <!-- ... (konten footer tetap sama) ... -->
    <div class="container">
        <div class="row gy-3">
          <div class="col-lg-3 col-md-6 d-flex">
            <i class="bi bi-geo-alt icon"></i>
            <div class="address">
              <h4>Address</h4>
              <p>A108 Adam Street</p>
              <p>New York, NY 535022</p>
              <p></p>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 d-flex">
            <i class="bi bi-telephone icon"></i>
            <div>
              <h4>Contact</h4>
              <p>
                <strong>Phone:</strong> <span>+1 5589 55488 55</span><br>
                <strong>Email:</strong> <span>info@example.com</span><br>
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex">
            <i class="bi bi-clock icon"></i>
            <div>
              <h4>Opening Hours</h4>
              <p>
                <strong>Mon-Sat:</strong> <span>11AM - 23PM</span><br>
                <strong>Sunday</strong>: <span>Closed</span>
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <h4>Follow Us</h4>
            <div class="social-links d-flex">
              <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>

      <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Yummy</strong> <span>All Rights Reserved</span></p>
        <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a>
        </div>
      </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{URL:: asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{URL:: asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{URL:: asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{URL:: asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{URL:: asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{URL:: asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    window.onload = function() {
      const menuSection = document.getElementById('menu');
      if (menuSection) {
        window.scrollTo(0, menuSection.offsetTop);
      }
    };
  </script>

</body>

</html>
