<?php 
require_once("admin/inc_admin.php"); 
require_once("admin/inc_con_bd_bis.php");  
require_once("admin/requetesql.php");
require_once("admin/inc_lien_modifier.php");  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="author" content="NextGenerationDev">
  <title>Argiculture - Farmer, Agriculture, Organic Farm & Organic Food HTML Template</title>
   <!--Favicon img-->
   <link rel="shortcut icon" href="assets/img/logo/favicon.png">
   <!--Bootstarp min css-->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <!--All min css-->
   <link rel="stylesheet" href="assets/css/all.min.css">
   <!--Bootstarp map css-->
   <link rel="stylesheet" href="assets/css/bootstrap.css.map">
   <!--Owl carousel css-->
   <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
   <!--Owl theme css-->
   <link rel="stylesheet" href="assets/css/owl.theme.default.css">
   <!--Nice select css-->
   <link rel="stylesheet" href="assets/css/nice-select.css">
   <!--Magnific popup css-->
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <!--Swiper bundle css-->
   <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
   <!--Animate css-->
   <link rel="stylesheet" href="assets/css/animate.css">
   <!--main css-->
   <link rel="stylesheet" href="assets/css/main.css">
   <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
   <script src="assets/js/jquery-3.7.1.min.js"></script>
   <?php include_once("admin/inc_fancybox.php"); ?>
</head>

<body>

 
<!--Scrool UP Section Here--> 
<div class="scroll-up">
  <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
  </svg>
</div>
<!--Scrool UP Section End--> 

<?php include "header.php"; ?>

<!-- fullscreen search bar area start here -->
<div class="search-wrap">
  <div class="search-inner">
      <i class="fas fa-times search-close" id="search-close"></i>
      <div class="search-cell">
          <form method="get">
              <div class="search-field-holder">
                  <input type="search" class="main-search-input" placeholder="Search...">
              </div>
          </form>
      </div>
  </div>
</div>
<!-- fullscreen search bar area end here -->

<!--Banner Section Here--> 
<section class="banner__section overhid">
  <div class="swiper banner__slider__two">
      <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="banner__two">
              <div class="container">
                <div class="row">
                    <div class="col-xxl-12 col-lg-12">
                        <div class="banner__content">
                          <div class="content__two d-flex align-items-center">
                            <div class="content">
                              <h1 data-animation="fadeInUp" data-delay="1.3s">
                                Always Greet Farmers For The Food We Eat
                              </h1>
                              <p data-animation="fadeInUp" data-delay="1.6s">
                              Agriculture is the art and science of cultivating the soil, growing crops, and raising livestock. It includes the preparation of plant and animal products for people to use and their distribution to markets.
                              </p>
                            </div>
                            <div class="video__content" data-animation="fadeInUp" data-delay="1.9">
                              <div class="video video-pulse">
                                  <a class="video-btn" href="https://www.youtube.com/watch?v=gR4BiOBJfEc"><i class="fa-solid fa-play"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="banner__button">
                            <a href="signin.php" data-animation="fadeInUp" data-delay="1.9s" class="cmn--btn">
                              <span>Read more</span>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="banner__two imagefour">
              <div class="container">
                <div class="row">
                    <div class="col-xxl-12 col-lg-12">
                        <div class="banner__content">
                          <div class="content__two d-flex align-items-center">
                            <div class="content">
                              <h1 data-animation="fadeInUp" data-delay="1.3s">
                                Always Greet Farmers For The Food We Eat
                              </h1>
                              <p data-animation="fadeInUp" data-delay="1.6s">
                                Agriculture is the art and science of cultivating the soil, growing crops, and raising livestock. It includes the preparation of plant and animal products for people to use and their distribution to markets.
                              </p>
                            </div>
                            <div class="video__content" data-animation="fadeInUp" data-delay="1.9">
                              <div class="video video-pulse">
                                  <a class="video-btn" href="https://www.youtube.com/watch?v=gR4BiOBJfEc"><i class="fa-solid fa-play"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="banner__button">
                            <a href="signin.php" data-animation="fadeInUp" data-delay="1.9s" class="cmn--btn">
                              <span>Read more</span>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="banner__two imagefive">
              <div class="container">
                <div class="row">
                    <div class="col-xxl-12 col-lg-12">
                        <div class="banner__content">
                          <div class="content__two d-flex align-items-center">
                            <div class="content">
                              <h1 data-animation="fadeInUp" data-delay="1.3s">
                                Always Greet Farmers For The Food We Eat
                              </h1>
                              <p data-animation="fadeInUp" data-delay="1.6s">
                                Agriculture is the art and science of cultivating the soil, growing crops, and raising livestock. It includes the preparation of plant and animal products for people to use and their distribution to markets.
                              </p>
                            </div>
                            <div class="video__content" data-animation="fadeInUp" data-delay="1.9">
                              <div class="video video-pulse">
                                  <a class="video-btn" href="https://www.youtube.com/watch?v=gR4BiOBJfEc"><i class="fa-solid fa-play"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="banner__button">
                            <a href="signin.php" data-animation="fadeInUp" data-delay="1.9s" class="cmn--btn">
                              <span>Read more</span>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
      </div>
  </div>
  <div class="banner__pagination__wrapper">
    <div class="banner-pagination"></div>
</div>
</section>
<!--Banner Section End--> 

<!--Feature Section Here-->
<section class="feature__section pt-130 pb-130 overhid">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-xxl-6 col-xl-5 col-lg-5 wow fadeInLeft" data-wow-duration="2s">
        <div class="feature__thumb">
          <img src="assets/img/feature/feature.jpg" alt="feature__image">
        </div>
      </div>
      <div class="col-xxl-6 col-xl-7 col-lg-7 wow fadeInRight" data-wow-duration="3s">
        <div class="feature__content">
          <div class="about__header">
            <h6>
              our feature
            </h6>
            <div class="witr_bar_main">
                <div class="witr_bar_inner witr_bar_innerc">
              </div>
            </div>
          </div>
          <h3 class="mb-30"> 
            We Are Best For Your Foods Partners
          </h3>
          <div class="row g-3">
            <div class="col-lg-6 col-md-6 wow fadeInLeft" data-wow-duration="3s">
              <div class="feature__items center">
                <div class="icon">
                  <img src="assets/img/feature/icon1.png" alt="icon">
                </div>
                <div class="content mt-2">
                  <h6>
                    Organic Food
                  </h6>
                  <p>
                    Agriculture is the art and science of cultivating the soil cultivating growing crops.
                  </p>    
                  <a href="service-details.php">
                    read more
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 wow fadeInRight" data-wow-duration="5s">
              <div class="feature__items center">
                <div class="icon">
                  <img src="assets/img/feature/icon2.png" alt="icon">
                </div>
                <div class="content mt-2">
                  <h6>
                    Green World
                  </h6>
                  <p>
                    Agriculture is the art and science of cultivating the soil cultivating growing crops.
                  </p>    
                  <a href="service-details.php">
                    read more
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 wow fadeInLeft" data-wow-duration="7s">
              <div class="feature__items center">
                <div class="icon">
                  <img src="assets/img/feature/icon3.png" alt="icon">
                </div>
                <div class="content mt-2">
                  <h6>
                    Healthy Food
                  </h6>
                  <p>
                    Agriculture is the art and science of cultivating the soil cultivating growing crops.
                  </p>    
                  <a href="service-details.php">
                    read more
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 wow fadeInRight" data-wow-duration="9s">
              <div class="feature__items center">
                <div class="icon">
                  <img src="assets/img/feature/icon4.png" alt="icon">
                </div>
                <div class="content mt-2">
                  <h6>
                    fruit food
                  </h6>
                  <p>
                    Agriculture is the art and science of cultivating the soil cultivating growing crops.
                  </p>    
                  <a href="service-details.php">
                    read more
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Feature Section End-->

<!--Service Section Here-->
<section class="service__section section__bg pt-130 pb-130 overhid">
  <div class="container">
    <div class="title__content center wow fadeInUp" data-wow-duration="1.3s">
      <h6>services</h6>
      <div class="witr_bar_main">
        <div class="witr_bar_inner witr_bar_innerc center">
      </div>
       <h3>Best Advanced Services Makes You Happy</h3>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="3s">
        <div class="service__items center">
          <div class="thumb">
            <a href="service-details.php">
              <img src="assets/img/service/s5.jpg" alt="service__image">
            </a>
          </div>
          <div class="content">
            <h6>
              <a href="service-details.php">
                Field is Futures
              </a>
            </h6>
            <p>
              Agriculture is the art and science of cultivating the soil cultivating cultivating growing crops.
            </p>
            <a href="service-details.php" class="btns">read more</a>
          </div>
        </div>
      </div>
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="5s">
        <div class="service__items center">
          <div class="thumb">
            <a href="service-details.php">
              <img src="assets/img/service/s6.jpg" alt="service__image">
            </a>
          </div>
          <div class="content">
            <h6>
              <a href="service-details.php">
                Grow naturally
              </a>
            </h6>
            <p>
              Agriculture is the art and science of cultivating the soil cultivating cultivating growing crops.
            </p>
            <a href="service-details.php" class="btns">read more</a>
          </div>
        </div>
      </div>
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="7s">
        <div class="service__items center">
          <div class="thumb">
            <a href="service-details.php">
              <img src="assets/img/service/s7.jpg" alt="service__image">
            </a>
          </div>
          <div class="content">
            <h6>
              <a href="service-details.php">
                Perfect Farming
              </a>
            </h6>
            <p>
              Agriculture is the art and science of cultivating the soil cultivating cultivating growing crops.
            </p>
            <a href="service-details.php" class="btns">read more</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Service Section End-->

<!--Product Section Here-->
<section class="product__section pt-130 pb-130 overhid">
  <div class="container">
    <div class="title__content center wow fadeInUp" data-wow-duration="1.3s">
      <h6>customers choice</h6>
      <div class="witr_bar_main">
        <div class="witr_bar_inner witr_bar_innerc center">
      </div>
       <h3>Featured Products</h3>
      </div>
    </div>
    <div class="row g-4">
        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="3s">
            <div class="product__items">
                <div class="product__thumb">
                    <img src="assets/img/product/p1.png" alt="product__image">
                    <ul class="product__icon d-flex justify-content-center">
                      <li>
                          <a href="#0"><i class="fa-regular fa-eye"></i></a>
                      </li>
                      <li>
                          <a href="shop-cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
                      </li>
                      <li>
                          <a href="#0"><i class="fa-solid fa-heart"></i></a>
                      </li>
                  </ul>
                </div>
                <div class="product__content center">
                    <p>CROP ORGANIC</p>
                    <h6>
                        <a href="shop.php">
                          fresh food
                        </a>
                    </h6>
                    <ul>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                      <div class="product__price d-flex align-items-center justify-content-center">
                        <del>
                            $12.00
                        </del>
                        <h6>
                            $10.00
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="5s">
          <div class="product__items">
              <div class="product__thumb">
                  <img src="assets/img/product/p2.png" alt="product__image">
                  <ul class="product__icon d-flex justify-content-center">
                    <li>
                        <a href="#0"><i class="fa-regular fa-eye"></i></a>
                    </li>
                    <li>
                        <a href="shop-cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa-solid fa-heart"></i></a>
                    </li>
                </ul>
              </div>
              <div class="product__content center">
                  <p>CROP ORGANIC</p>
                  <h6>
                      <a href="shop.php">
                        fresh food
                      </a>
                  </h6>
                  <ul>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                  </ul>
                    <div class="product__price d-flex align-items-center justify-content-center">
                      <del>
                          $12.00
                      </del>
                      <h6>
                          $10.00
                      </h6>
                  </div>
              </div>
          </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="7s">
        <div class="product__items">
            <div class="product__thumb">
                <img src="assets/img/product/p3.png" alt="product__image">
                <ul class="product__icon d-flex justify-content-center">
                  <li>
                      <a href="#0"><i class="fa-regular fa-eye"></i></a>
                  </li>
                  <li>
                      <a href="shop-cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
                  </li>
                  <li>
                      <a href="#0"><i class="fa-solid fa-heart"></i></a>
                  </li>
              </ul>
            </div>
            <div class="product__content center">
                <p>CROP ORGANIC</p>
                <h6>
                    <a href="shop.php">
                      fresh food
                    </a>
                </h6>
                <ul>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                </ul>
                  <div class="product__price d-flex align-items-center justify-content-center">
                    <del>
                        $12.00
                    </del>
                    <h6>
                        $10.00
                    </h6>
                </div>
            </div>
        </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="9s">
          <div class="product__items">
              <div class="product__thumb">
                  <img src="assets/img/product/p4.png" alt="product__image">
                  <ul class="product__icon d-flex justify-content-center">
                    <li>
                        <a href="#0"><i class="fa-regular fa-eye"></i></a>
                    </li>
                    <li>
                        <a href="shop-cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa-solid fa-heart"></i></a>
                    </li>
                </ul>
              </div>
              <div class="product__content center">
                  <p>CROP ORGANIC</p>
                  <h6>
                      <a href="shop.php">
                        fresh food
                      </a>
                  </h6>
                  <ul>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                  </ul>
                    <div class="product__price d-flex align-items-center justify-content-center">
                      <del>
                          $12.00
                      </del>
                      <h6>
                          $10.00
                      </h6>
                  </div>
              </div>
          </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="3s">
        <div class="product__items">
            <div class="product__thumb">
                <img src="assets/img/product/p5.png" alt="product__image">
                <ul class="product__icon d-flex justify-content-center">
                  <li>
                      <a href="#0"><i class="fa-regular fa-eye"></i></a>
                  </li>
                  <li>
                      <a href="shop-cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
                  </li>
                  <li>
                      <a href="#0"><i class="fa-solid fa-heart"></i></a>
                  </li>
              </ul>
            </div>
            <div class="product__content center">
                <p>CROP ORGANIC</p>
                <h6>
                    <a href="shop.php">
                      fresh food
                    </a>
                </h6>
                <ul>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                </ul>
                  <div class="product__price d-flex align-items-center justify-content-center">
                    <del>
                        $12.00
                    </del>
                    <h6>
                        $10.00
                    </h6>
                </div>
            </div>
        </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="5s">
      <div class="product__items">
          <div class="product__thumb">
              <img src="assets/img/product/p6.png" alt="product__image">
              <ul class="product__icon d-flex justify-content-center">
                <li>
                    <a href="#0"><i class="fa-regular fa-eye"></i></a>
                </li>
                <li>
                    <a href="shop-cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
                </li>
                <li>
                    <a href="#0"><i class="fa-solid fa-heart"></i></a>
                </li>
            </ul>
          </div>
          <div class="product__content center">
              <p>CROP ORGANIC</p>
              <h6>
                  <a href="shop.php">
                    fresh food
                  </a>
              </h6>
              <ul>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
              </ul>
                <div class="product__price d-flex align-items-center justify-content-center">
                  <del>
                      $12.00
                  </del>
                  <h6>
                      $10.00
                  </h6>
              </div>
          </div>
      </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="7s">
          <div class="product__items">
              <div class="product__thumb">
                  <img src="assets/img/product/p7.png" alt="product__image">
                  <ul class="product__icon d-flex justify-content-center">
                    <li>
                        <a href="#0"><i class="fa-regular fa-eye"></i></a>
                    </li>
                    <li>
                        <a href="shop-cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa-solid fa-heart"></i></a>
                    </li>
                </ul>
              </div>
              <div class="product__content center">
                  <p>CROP ORGANIC</p>
                  <h6>
                      <a href="shop.php">
                        fresh food
                      </a>
                  </h6>
                  <ul>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                  </ul>
                    <div class="product__price d-flex align-items-center justify-content-center">
                      <del>
                          $12.00
                      </del>
                      <h6>
                          $10.00
                      </h6>
                  </div>
              </div>
          </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="9s">
      <div class="product__items">
          <div class="product__thumb">
              <img src="assets/img/product/p8.png" alt="product__image">
              <ul class="product__icon d-flex justify-content-center">
                <li>
                    <a href="#0"><i class="fa-regular fa-eye"></i></a>
                </li>
                <li>
                    <a href="shop-cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
                </li>
                <li>
                    <a href="#0"><i class="fa-solid fa-heart"></i></a>
                </li>
            </ul>
          </div>
          <div class="product__content center">
              <p>CROP ORGANIC</p>
              <h6>
                  <a href="shop.php">
                    fresh food
                  </a>
              </h6>
              <ul>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
              </ul>
                <div class="product__price d-flex align-items-center justify-content-center">
                  <del>
                      $12.00
                  </del>
                  <h6>
                      $10.00
                  </h6>
              </div>
          </div>
      </div>
        </div>
    </div>
  </div>
</section>
<!--Product Section End-->

<!--Shop Category Section Here-->
<div class="shop__category__section overhid">
  <div class="product-offer-carousel">
      <div class="swiper-wrapper">
          <div class="swiper-slide">
              <div class="shop__category">
                  <div class="container">
                      <div class="row">
                          <div class="col-xx-7 col-xl-7 col-lg-7">
                              <div class="product__offer">
                                  <h6>Summer Offer</h6>
                                  <h2>
                                    <a href="shop-details.php">Seasonal Fruits</a>
                                  </h2>
                                  <p>
                                    Agriculture is the art and science of cultivating the soil cultivating cultivating growing crops.Agriculture is the art and science of cultivating the soil cultivating cultivating growing crops.
                                  </p>
                                  <div class="comming__time mt-30 pb-40">
                                    <ul>
                                     <li>
                                         <span id="day">00</span>
                                         <p>Days</p>
                                     </li>
                                     <li>
                                         <span id="Hours">00</span>
                                         <p>Hours</p>
                                     </li>
                                     <li>
                                         <span id="Minutes">00</span>
                                        <p> Minutes</p>
                                     </li>
                                     <li class="none">
                                         <span id="Seconds">00</span>
                                        <p> Seconds</p>
                                     </li>
                                    </ul>
                                 </div>
                                 <a href="shop-details.php" class="cmn--btn">
                                  <i class="fas fa-shopping-cart"></i>
                                  Purchase Now
                                 </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="swiper-slide">
            <div class="shop__category imgtwo">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="product__offer">
                                <h6>Summer Offer</h6>
                                <h2>
                                  <a href="shop-details.php">Organic Vegetables</a>
                                </h2>
                                <p>
                                  Agriculture is the art and science of cultivating the soil cultivating cultivating growing crops.Agriculture is the art and science of cultivating the soil cultivating cultivating growing crops.
                                </p>
                                <div class="comming__time mt-30 pb-40">
                                  <ul>
                                   <li>
                                       <span id="days">00</span>
                                       <p>Days</p>
                                   </li>
                                   <li>
                                       <span id="Hourss">00</span>
                                       <p>Hours</p>
                                   </li>
                                   <li>
                                       <span id="Minutess">00</span>
                                      <p> Minutes</p>
                                   </li>
                                   <li class="none">
                                       <span id="Secondss">00</span>
                                      <p> Seconds</p>
                                   </li>
                                  </ul>
                               </div>
                               <a href="shop-details.php" class="cmn--btn">
                                <i class="fas fa-shopping-cart"></i>
                                Purchase Now
                               </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="shop__category imgthree">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="product__offer">
                                <h6>Summer Offer</h6>
                                <h2>
                                  <a href="shop-details.php">Fresh & Testy Food</a>
                                </h2>
                                <p>
                                  Agriculture is the art and science of cultivating the soil cultivating cultivating growing crops.Agriculture is the art and science of cultivating the soil cultivating cultivating growing crops.
                                </p>
                                <div class="comming__time mt-30 pb-40">
                                  <ul>
                                   <li>
                                       <span id="dayss">00</span>
                                       <p>Days</p>
                                   </li>
                                   <li>
                                       <span id="Hoursss">00</span>
                                       <p>Hours</p>
                                   </li>
                                   <li>
                                       <span id="Minutesss">00</span>
                                      <p> Minutes</p>
                                   </li>
                                   <li class="none">
                                       <span id="Secondsss">00</span>
                                      <p> Seconds</p>
                                   </li>
                                  </ul>
                               </div>
                               <a href="shop-details.php" class="cmn--btn">
                                <i class="fas fa-shopping-cart"></i>
                                Purchase Now
                               </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
      <div class="swiper-dot text-center pt-5">
        <div class="dot"></div>
    </div>
  </div>
</div>
<!--Shop Category Section End-->

<!--Gallery Section Here-->
<section class="gallery__section section__bg overhid pt-130 pb-130">
  <div class="container">
    <div class="title__content center wow fadeInUp" data-wow-duration="1.3s">
      <h6> our gallery</h6>
      <div class="witr_bar_main">
        <div class="witr_bar_inner witr_bar_innerc center">
      </div>
       <h3>Our Latest Product To Build Health</h3>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s">
        <div class="gallery__items">
          <div class="gallery__thumb">
            <a href="assets/img/gallery/g1.jpg" class="img img-popup d-block">
              <img src="assets/img/gallery/g1.jpg" alt="gallery__image">
            </a>
          </div>
        </div>
      </div>
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="4s">
        <div class="gallery__items">
          <div class="gallery__thumb">
            <a href="assets/img/gallery/g2.jpg" class="img img-popup d-block">
              <img src="assets/img/gallery/g2.jpg" alt="gallery__image">
            </a>
          </div>
        </div>
      </div>
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="6s">
        <div class="gallery__items">
          <div class="gallery__thumb">
            <a href="assets/img/gallery/g3.jpg" class="img img-popup d-block">
              <img src="assets/img/gallery/g3.jpg" alt="gallery__image">
            </a>
          </div>
        </div>
      </div>
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="8s">
        <div class="gallery__items">
          <div class="gallery__thumb">
            <a href="assets/img/gallery/g4.jpg" class="img img-popup d-block">
              <img src="assets/img/gallery/g4.jpg" alt="gallery__image">
            </a>
          </div>
        </div>
      </div>
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="9s">
        <div class="gallery__items">
          <div class="gallery__thumb">
            <a href="assets/img/gallery/g5.jpg" class="img img-popup d-block">
              <img src="assets/img/gallery/g5.jpg" alt="gallery__image">
            </a>
          </div>
        </div>
      </div>
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="4s">
        <div class="gallery__items">
          <div class="gallery__thumb">
            <a href="assets/img/gallery/g6.jpg" class="img img-popup d-block">
              <img src="assets/img/gallery/g6.jpg" alt="gallery__image">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Gallery Section End-->

<!--Team Section Here-->
<section class="team__section pt-130 pb-130 overhid">
  <div class="container">
    <div class="title__content center wow fadeInUp" data-wow-duration="1.3s">
      <h6> our team</h6>
      <div class="witr_bar_main">
        <div class="witr_bar_inner witr_bar_innerc center">
      </div>
       <h3>Our Dedicateds</h3>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 wow fadeInUp" data-wow-duration="3s">
        <div class="team__items">
          <div class="team__thumb">
            <img src="assets/img/team/t1.jpg" alt="team__image">
          </div>
          <div class="team__content">
            <h6>
              <a href="team-details.php">
                James Liam
              </a>
            </h6>
            <p>worker</p>
            <ul class="social__icon d-flex align-items-center justify-content-center">
              <li>
                  <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
              </li>
              <li>
                  <a href="#"><i class="fa-brands fa-twitter"></i></a>
              </li>
              <li>
                  <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
              </li>
              <li>
                  <a href="#"><i class="fa-brands fa-instagram"></i></a>
              </li>
          </ul>
          </div>
        </div>
      </div>
      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 wow fadeInUp" data-wow-duration="5s">
        <div class="team__items">
          <div class="team__thumb">
            <img src="assets/img/team/t2.jpg" alt="team__image">
          </div>
          <div class="team__content">
            <h6>
              <a href="team-details.php">
                rock Sophia
              </a>
            </h6>
            <p>worker</p>
            <ul class="social__icon d-flex align-items-center justify-content-center">
              <li>
                  <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
              </li>
              <li>
                  <a href="#"><i class="fa-brands fa-twitter"></i></a>
              </li>
              <li>
                  <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
              </li>
              <li>
                  <a href="#"><i class="fa-brands fa-instagram"></i></a>
              </li>
          </ul>
          </div>
        </div>
      </div>
      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 wow fadeInUp" data-wow-duration="7s">
        <div class="team__items">
          <div class="team__thumb">
            <img src="assets/img/team/t3.jpg" alt="team__image">
          </div>
          <div class="team__content">
            <h6>
              <a href="team-details.php">
                Jack Jayden
              </a>
            </h6>
            <p>worker</p>
            <ul class="social__icon d-flex align-items-center justify-content-center">
              <li>
                  <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
              </li>
              <li>
                  <a href="#"><i class="fa-brands fa-twitter"></i></a>
              </li>
              <li>
                  <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
              </li>
              <li>
                  <a href="#"><i class="fa-brands fa-instagram"></i></a>
              </li>
          </ul>
          </div>
        </div>
      </div>
      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 wow fadeInUp" data-wow-duration="9s">
        <div class="team__items">
          <div class="team__thumb">
            <img src="assets/img/team/t4.jpg" alt="team__image">
          </div>
          <div class="team__content">
            <h6>
              <a href="team-details.php">
                 ava Emma
              </a>
            </h6>
            <p>worker</p>
            <ul class="social__icon d-flex align-items-center justify-content-center">
              <li>
                  <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
              </li>
              <li>
                  <a href="#"><i class="fa-brands fa-twitter"></i></a>
              </li>
              <li>
                  <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
              </li>
              <li>
                  <a href="#"><i class="fa-brands fa-instagram"></i></a>
              </li>
          </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Team Section End-->

<!--Farms Section Here-->
<section class="farms__section overhid">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-7 wow fadeInUp" data-wow-duration="3s">
        <div class="farms__content pt-130 pb-130">
          <h5>Looking Organic Food ?</h5>
          <h2>
            Want To Fresh & Organic Food
          </h2>
          <a href="#0" class="cmn--btn">visit our farms </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Farms Section End-->

<!--Blog Section Here-->
<section class="blog__section overhid pt-130 pb-130">
  <div class="container">
    <div class="title__content center wow fadeInUp" data-wow-duration="1.3s">
      <h6>latest news</h6>
      <div class="witr_bar_main">
        <div class="witr_bar_inner witr_bar_innerc center">
      </div>
       <h3>Latest News From Blog</h3>
      </div>
    </div>
      <div class="row g-4">
          <div class="col-xl-4 col-md-6 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s">
              <div class="blog__items">
                  <div class="blog__thumb">
                      <img src="assets/img/blog/blog1.jpg" alt="blog__image">
                      <div class="content">
                          <h5>Exploring in Modern Agriculture</h5>
                          <div class="info">
                              <strong>By:</strong>
                              <a href="#0">Admin</a>
                              <span class="px-1">|</span>
                              <span>20 Aug 2023</span>
                          </div>
                      </div>
                  </div>
                  <div class="content__up">
                      <h5>
                          <a href="blog-details.php">
                            Exploring in Modern Agriculture
                          </a>
                      </h5>
                      <p>
                        Agriculture is the art and science of cultivating the soil, growing crops and raising livestock. It includes the preparation of plant and animal products for people.
                      </p>
                      <a href="blog-details.php" class="cmn--btn">News Details <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
              </div>
          </div>
          <div class="col-xl-4 col-md-6 wow fadeInLeft" data-wow-duration="1.7s" data-wow-delay=".7s">
            <div class="blog__items">
                <div class="blog__thumb">
                    <img src="assets/img/blog/blog2.jpg" alt="blog__image">
                    <div class="content">
                        <h5>The Role of Technology and Sustainable</h5>
                        <div class="info">
                            <strong>By:</strong>
                            <a href="#0">Admin</a>
                            <span class="px-1">|</span>
                            <span>20 Aug 2023</span>
                        </div>
                    </div>
                </div>
                <div class="content__up">
                    <h5>
                        <a href="blog-details.php">
                          The Role of Technology and Sustainable
                        </a>
                    </h5>
                    <p>
                      Agriculture is the art and science of cultivating the soil, growing crops and raising livestock. It includes the preparation of plant and animal products for people.
                    </p>
                    <a href="blog-details.php" class="cmn--btn">News Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
          </div>
        <div class="col-xl-4 col-md-6 wow fadeInLeft" data-wow-duration="1.9s" data-wow-delay=".9s">
          <div class="blog__items">
              <div class="blog__thumb">
                  <img src="assets/img/blog/blog3.jpg" alt="blog__image">
                  <div class="content">
                      <h5>Revolutionizing the Agricultural Industry</h5>
                      <div class="info">
                          <strong>By:</strong>
                          <a href="#0">Admin</a>
                          <span class="px-1">|</span>
                          <span>20 Aug 2023</span>
                      </div>
                  </div>
              </div>
              <div class="content__up">
                  <h5>
                      <a href="blog-details.php">
                        Revolutionizing the Agricultural Industry
                      </a>
                  </h5>
                  <p>
                    Agriculture is the art and science of cultivating the soil, growing crops and raising livestock. It includes the preparation of plant and animal products for people.
                  </p>
                  <a href="blog-details.php" class="cmn--btn">News Details <i class="fa-solid fa-arrow-right"></i></a>
              </div>
          </div>
        </div>
      </div>
  </div>
</section>
<!--Blog Section End-->

<!--Client Section Here-->
<div class="logo__section section__bg overhid pt-65 pb-65">
  <div class="container">
     <div class="logo__wrapper owl-carousel owl-theme">
        <div class="logo__thumb">
           <img src="assets/img/clients/1.png" alt="logo-image">
        </div>
        <div class="logo__thumb">
          <img src="assets/img/clients/2.png" alt="logo-image">
        </div>
        <div class="logo__thumb">
          <img src="assets/img/clients/3.png" alt="logo-image">
        </div>
        <div class="logo__thumb">
          <img src="assets/img/clients/4.png" alt="logo-image">
        </div>
        <div class="logo__thumb">
          <img src="assets/img/clients/5.png" alt="logo-image">
        </div>
        <div class="logo__thumb">
          <img src="assets/img/clients/6.png" alt="logo-image">
        </div>
     </div>
  </div>
</div>
<!--Client Section End-->

<?php include "footer.php"; ?>

  <!--Jquery 3 7 0 Min Js-->
  <script src="assets/js/jquery-3.7.1.min.js"></script>
  <!--viewport Js-->
  <script src="assets/js/viewport.jquery.js"></script>
  <!--bootstrap bungle Js-->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <!--magnific popup Js-->
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <!--nice select Js-->
  <script src="assets/js/jquery.nice-select.min.js"></script>
  <!--odometer Js-->
  <script src="assets/js/odometer.min.js"></script>
  <!--Owl Js-->
  <script src="assets/js/owl.carousel.min.js"></script>
  <!--swipper Js-->
  <script src="assets/js/swiper-bundle.min.js"></script>
  <!--Magnific popup min Js-->
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <!--Magnific popup min Js-->
  <script src="assets/js/countdowncustom.js"></script>
  <!--swipper bundle Js-->
  <script src="assets/js/wow.min.js"></script>
  <!--main Js-->
  <script src="assets/js/main.js"></script>
</body>

</html>