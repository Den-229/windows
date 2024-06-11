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
   
<!--Seccessful Section Here--> 
<section class="successful__section">
  <div class="container">
     <div class="row justify-content-center">
        <div class="col-lg-8">
           <div class="payment__success__inner">
              <div class="payment__success__header">
                 <div class="icon wow fadeInDown" data-wow-duration="2s">
                   <i class="fa-solid fa-check"></i>
                 </div>
                 <h2 class=" wow fadeInUp" data-wow-duration="3s">Payment Successful</h2>
                 <p class="primary-text wow fadeInDown" data-wow-duration="2s">We are processing the same and you will be notified via email.</p>
              </div>
              <div class="payment__success__body">
                 <ul class=" wow fadeInUp" data-wow-duration="4s">
                    <li class="">
                       <span>Transactions ID</span>
                       <span class="textbo">CDFF123476359</span>
                    </li>
                    <li>
                       <span>Date</span>
                       <span class="textbo">22-12-2022</span>
                    </li>
                    <li>
                       <span>Mode of Payment</span>
                       <span class="textbo">Credit Card</span>
                    </li>
                    <li>
                       <span>Transaction Status</span>
                       <span class="textbo">Success</span>
                    </li>
                    <li>
                       <span>Customer Name</span>
                       <span class="textbo">Wade Warren</span>
                    </li>
                    <li>
                       <span>Mobile No</span>
                       <span class="textbo">(406) 555-0120</span>
                    </li>
                    <li>
                       <span>Subject</span>
                       <span class="textbo">White Gloves</span>
                    </li>
                    <li>
                       <span>Payment Amount</span>
                       <span class="textbo">$235.00</span>
                    </li>
                 </ul>
              </div>
              <div class="payment__success__footer">
                 <div class="payment-success__footer-inner wow fadeInUp" data-wow-duration="3s">
                    <a href="index.php">
                      <span class="icon">
                       <i class="fa-solid fa-download"></i>
                      </span>
                      <span>
                          Download
                      </span>
                    </a>
                    <a href="index.php">
                       <span class="icon">
                           <i class="fa-solid fa-print"></i>
                       </span>
                       <span>
                          Print Receipt
                       </span>
                    </a>
                    <a href="index.php">
                       <span class="icon">
                           <i class="fa-solid fa-envelope"></i>
                       </span>
                       <span>
                          Download
                       </span>
                    </a>
                 </div>
                 <div class="dbutton wow fadeInDown" data-wow-duration="4s">
                    <a href="index.php" class="cmn--btn"><span>Back To Home</span></a>
                 </div>
              </div>
           </div>
        </div>
    </div>
  </div>
</section>
<!--Seccessful Section End-->

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