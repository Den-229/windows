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

<!-- Sidebar area start here -->
<div id="targetElement" class="side_bar slideInRight side_bar_hidden">
  <div class="logo mb-30">
      <img src="assets/img/logo/logo-color.png" alt="logo">
  </div>
  <p class="text-justify">Throughout human history, our relationship with the soil has affected our ability to cultivate crops and influenced the success of civilizations. This relationship between humans, the earth, and food sources affirms soil as the foundation of agriculture.</p>
  <ul class="info py-4 mt-65 bor__top bor__bottom">
      <li><i class="fa-solid fa-location-dot"></i> <a href="#0">Inner Circular Rose Valley Park.</a>
      </li>
      <li class="py-4"><i class="fa-solid fa-phone-volume"></i> <a href="#0">+48 301 111 299</a>
      </li>
      <li><i class="fa-solid fa-paper-plane"></i> <a href="#0">example@example.com</a></li>
  </ul>
  <ul class="social__icon mt-65">
    <li>
        <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
    </li>
    <li>
        <a href="#0"><i class="fa-brands fa-twitter"></i></a>
    </li>
    <li>
        <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
    </li>
    <li>
        <a href="#0"><i class="fa-brands fa-instagram"></i></a>
    </li>
    <li>
        <a href="#0"><i class="fa-brands fa-youtube"></i></a>
    </li>
  </ul>
  <button id="closeButton" class="text-white"><i class="fa-solid fa-xmark"></i></button>
</div>
<!-- Sidebar area end here -->
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

<!--Breadcumd Section Here--> 
<section class="breadcumd__banner overhid">
  <div class="container">
     <div class="breadcumd__wrapper">
        <h2 class="left__content wow fadeInUp" data-wow-duration="2s">
           About us
        </h2>
        <ul class="right__content wow fadeInUp" data-wow-duration="2s">
           <li>
              <a href="index.html">
                <i class="fa-solid fa-house"></i>
                 Home
              </a>
           </li>
           <li>
              <i class="fa-solid fa-chevron-right"></i>
           </li>
           <li>
              About
           </li>
        </ul>
     </div>
  </div>
</section>
<!--Breadcumd Section End--> 

<!--About Section Here-->
<section class="about__section pt-130 pb-130 overhid">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-xxl-6 col-xl-6 col-lg-6 wow fadeInLeft" data-wow-duration="3s">
        <div class="about__thumb">
          <img src="assets/img/about/about.jpg" alt="about__image">
        </div>
      </div>
      <div class="col-xxl-6 col-xl-6 col-lg-6 wow fadeInRight" data-wow-duration="5s">
        <div class="about__content">
          <div class="about__header">
            <h6>
              About Us
            </h6>
            <div class="witr_bar_main">
                <div class="witr_bar_inner witr_bar_innerc">
              </div>
            </div>
          </div>
          <h3 class="mb-4">
            Agriculture For Future Development
          </h3>
          <p>
            Throughout human history, our relationship with the soil has affected our ability to cultivate crops and influenced the success of civilizations. This relationship between humans, the earth, and food sources affirms soil as the foundation of agriculture.
          </p>
          <ul class="check__list mt-4">
            <li class="list d-flex align-items-center mb-2">
                <i class="fa-solid fa-check"></i>
                <p>Mistakes To Avoid to the dummy printing has bees ind.</p>
            </li>
            <li class="list d-flex align-items-center mb-2">
                <i class="fa-solid fa-check"></i>
                <p>Your Startup industry standard loream saum.</p>
            </li>
            <li class="list d-flex align-items-center">
               <i class="fa-solid fa-check"></i>
                <p>Knew About Fonts text the printing and something do.</p>
            </li>
          </ul>
          <div class="profile__item d-flex align-items-center mt-5 wow fadeInUp" data-wow-duration="3s">
            <div class="profile d-flex align-items-center">
                <div class="profile__thumb">
                    <img src="assets/img/about/profile/p.jpg" alt="profile__image">
                </div>
                <div class="text">
                    <p>Agronomist</p>
                    <h6>devid miller</h6>
                </div>
            </div>
            <a href="#" class="cmn--btn">read more</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--About Section End-->

<!--Process Section Here-->
<section class="process__section section__bg overhid pt-130 pb-130">
  <div class="container">
    <div class="title__content center wow fadeInUp" data-wow-duration="1.3s">
      <h6>Work Process</h6>
      <div class="witr_bar_main">
        <div class="witr_bar_inner witr_bar_innerc center">
      </div>
       <h3>Steps In The Agriculture Process</h3>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="2s">
        <div class="process__items">
          <div class="process__thumb">
            <img src="assets/img/process/p1.jpg" alt="process__image">
          </div>
          <div class="process__content center">
            <h6>
              Planning
            </h6>
            <p>
              Agriculture is the art and science of cultivating the soil growing.
            </p>
          </div>
        </div>
      </div>
      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="4s">
        <div class="process__items">
          <div class="process__thumb">
            <img src="assets/img/process/p2.jpg" alt="process__image">
          </div>
          <div class="process__content center">
            <h6>
              Growing
            </h6>
            <p>
              Agriculture is the art and science of cultivating the soil growing.
            </p>
          </div>
        </div>
      </div>
      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="6s">
        <div class="process__items">
          <div class="process__thumb">
            <img src="assets/img/process/p3.jpg" alt="process__image">
          </div>
          <div class="process__content center">
            <h6>
              Harvesting
            </h6>
            <p>
              Agriculture is the art and science of cultivating the soil growing.
            </p>
          </div>
        </div>
      </div>
      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="8s">
        <div class="process__items">
          <div class="process__thumb">
            <img src="assets/img/process/p4.jpg" alt="process__image">
          </div>
          <div class="process__content center">
            <h6>
              Processing
            </h6>
            <p>
              Agriculture is the art and science of cultivating the soil growing.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Process Section End-->

<!--Faq Section Here-->
<section class="faq__section overhid pt-130 pb-130">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-xxl-6 col-xl-6 col-lg-6 wow fadeInLeft" data-wow-duration="3s">
        <div class="faq__thumb">
          <img src="assets/img/faq/faq.jpg" alt="faq__image">
          <div class="dot">
            <img src="assets/img/dot/dot2.png" alt="dot">
          </div>
          <div class="dot2">
            <img src="assets/img/dot/dot.png" alt="dot">
          </div>
        </div>
      </div>
      <div class="col-xxl-6 col-xl-6 col-lg-6">
        <div class="faq__header mb-30 wow fadeInRight" data-wow-duration="5s">
          <h6>faq</h6>
          <div class="witr_bar_main">
            <div class="witr_bar_inner witr_bar_innerc">
          </div>
          <h2>Do You Have Any Question Please?</h2>
        </div>
        </div>
        <div class="accordion__wrap mb-5">
          <div class="accordion" id="accordionExample">
             <!--Accordion items-->
             <div class="accordion-item wow fadeInRight" data-wow-delay="0.3s">
               <h2 class="accordion-header" id="headingOne">
                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  What do you do mean by agriculture?
                 </button>
               </h2>
               <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                 <div class="accordion-body">
                   <p>
                    Agriculture is the art and science of cultivating the soil, growing crops, and raising livestock. It includes the preparation of plant and animal products for people to use and their distribution to markets
                   </p>
                 </div>
               </div>
             </div>
             <!--Accordion items-->
             <div class="accordion-item wow fadeInRight" data-wow-delay="0.4s">
               <h2 class="accordion-header" id="headingTwo">
                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Which is best for agriculture?
                 </button>
               </h2>
               <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                 <div class="accordion-body">
                   <p>
                    Agriculture is the art and science of cultivating the soil, growing crops, and raising livestock. It includes the preparation of plant and animal products for people to use and their distribution to markets
                   </p>
                 </div>
               </div>
             </div>
             <!--Accordion items-->
             <div class="accordion-item wow fadeInRight" data-wow-delay="0.7s">
               <h2 class="accordion-header" id="headingThree">
                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  What is Bangladesh agricultural income?
                 </button>
               </h2>
               <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                 <div class="accordion-body">
                   <p>
                    Agriculture is the art and science of cultivating the soil, growing crops, and raising livestock. It includes the preparation of plant and animal products for people to use and their distribution to markets
                   </p>
                 </div>
               </div>
             </div>
             <!--Accordion items-->
             <div class="accordion-item wow fadeInRight" data-wow-delay="0.3s">
                <h2 class="accordion-header" id="headingThree4">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree">
                    Which is best for agriculture?
                  </button>
                </h2>
                <div id="collapseThree4" class="accordion-collapse collapse" aria-labelledby="headingThree4" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Agriculture is the art and science of cultivating the soil, growing crops, and raising livestock. It includes the preparation of plant and animal products for people to use and their distribution to markets
                    </p>
                  </div>
                </div>
              </div>
             <!--Accordion items-->
             <div class="accordion-item wow fadeInRight" data-wow-delay="0.5s">
              <h2 class="accordion-header" id="headingThree5">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree">
                    What are agricultural components?
                  </button>
               </h2>
              <div id="collapseThree5" class="accordion-collapse collapse" aria-labelledby="headingThree5" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                      <p>
                        Agriculture is the art and science of cultivating the soil, growing crops, and raising livestock. It includes the preparation of plant and animal products for people to use and their distribution to markets
                      </p>
                  </div>
              </div>
             </div>
             <!--Accordion items-->
              <div class="accordion-item wow fadeInRight" data-wow-delay="0.7s">
                  <h2 class="accordion-header" id="headingThree6">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree6" aria-expanded="false" aria-controls="collapseThree">
                        Why is it called agriculture?
                      </button>
                  </h2>
                  <div id="collapseThree6" class="accordion-collapse collapse" aria-labelledby="headingThree6" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                          <p>
                            Agriculture is the art and science of cultivating the soil, growing crops, and raising livestock. It includes the preparation of plant and animal products for people to use and their distribution to markets
                          </p>
                      </div>
                  </div>
              </div>
             <!--Accordion items-->
           </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Faq Section End-->

<!--Farms Section Here-->
<section class="farms__section overhid">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-7">
        <div class="farms__content pt-130 pb-130">
          <h5 class=" wow fadeInUp" data-wow-duration="3s">Looking Organic Food ?</h5>
          <h2 class=" wow fadeInDown" data-wow-duration="3s">
            Want To Fresh & Organic Food
          </h2>
          <a href="#0" class="cmn--btn wow fadeInUp" data-wow-duration="3s">visit our farms </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Farms Section End-->

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
              <a href="team-details.html">
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
              <a href="team-details.html">
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
              <a href="team-details.html">
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
              <a href="team-details.html">
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
  <!--swipper bundle Js-->
  <script src="assets/js/wow.min.js"></script>
  <!--main Js-->
  <script src="assets/js/main.js"></script>
</body>

</html>