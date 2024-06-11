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
    <title>Page d'erreur | Connectivité des agriculteurs</title>
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
          Error Page
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
            404
           </li>
        </ul>
     </div>
  </div>
</section>
<!--Breadcumd Section End--> 

<!--Error Section Here-->
<section class="error__section pt-130 pb-130 overhid">
  <div class="container">
      <div class="row g-4 justify-content-center">
          <div class="col-lg-9">
              <div class="error__content center">
                 <h1 class=" wow fadeInDown" data-wow-duration="4s">
                    404
                  </h1>
                  <h3 class=" wow fadeInUp" data-wow-duration="2s"> 
                      Oops! Page Not Found!
                  </h3>
                  <p>
                      We are really, but the page you requested is missing:( Perhaps searching again can help.
                  </p>
                  <a href="index.html" class="cmn--btn mt-4 wow fadeInDown" data-wow-duration="2s">
                      back too home
                  </a>
              </div>
          </div>
      </div>
  </div>
</section>
<!--Error Section End-->

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