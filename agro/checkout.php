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
          Checkout
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
            Checkout
           </li>
        </ul>
     </div>
  </div>
</section>
<!--Breadcumd Section End--> 

<!--Checkout Section Here--> 
<section class="cart__section pt-80 pb-80">
  <div class="container">
     <div class="row">
        <div class="col-12">
            <form action="#" method="post">
                <div class="row g-4">
                    <div class="col-md-5 col-lg-4 col-xl-3 wow fadeInLeft" data-wow-duration="3s">
                        <div class="checkout__radio">
                            <p class="primary-text">Select any one</p>
                            <div class="checkout__radio-wrapper">
                                <div class="checkout__radio-single">
                                    <input type="checkbox" class="form-check-input" id="cCard" name="pay-method" value="Credit/Debit Cards">
                                    <label for="cCard">Credit/Debit Cards</label>
                                </div>
                                <div class="checkout__radio-single">
                                    <input type="checkbox" class="form-check-input" id="paypal" name="pay-method" value="PayPal">
                                    <label for="paypal">PayPal</label>
                                </div>
                                <div class="checkout__radio-single">
                                    <input type="checkbox" class="form-check-input" id="payoneer" name="pay-method" value="Payoneer">
                                    <label for="payoneer">Payoneer</label>
                                </div>
                                <div class="checkout__radio-single">
                                    <input type="checkbox" class="form-check-input" id="visa" name="pay-method" value="Visa">
                                    <label for="visa">Visa</label>
                                </div>
                                <div class="checkout__radio-single">
                                    <input type="checkbox" class="form-check-input" id="mastercard" name="pay-method" value="Mastercard">
                                    <label for="mastercard">Mastercard</label>
                                </div>
                                <div class="checkout__radio-single">
                                    <input type="checkbox" class="form-check-input" id="fastPay" name="pay-method" value="Fastpay">
                                    <label for="fastPay">Fastpay</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-8 col-xl-9">
                        <div class="checkout__single-wrapper">
                            <div class="checkout__single boxshado__single">
                                <h4 class=" wow fadeInUp" data-wow-duration="2s">Billing address</h4>
                                <div class="checkout__single-form">
                                    <div class="row g-4">
                                       <div class="col-lg-6 wow fadeInLeft" data-wow-duration="2s">
                                         <div class="input-single">
                                            <input type="text" name="user-first-name" id="userFirstName" required="" placeholder="First Name">
                                        </div>
                                       </div>
                                        <div class="col-lg-6 wow fadeInRight" data-wow-duration="2s">
                                         <div class="input-single">
                                            <input type="text" name="user-last-name" id="userLastName" required="" placeholder="Last Name">
                                         </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInLeft" data-wow-duration="3s">
                                            <div class="input-single">
                                               <input type="email" name="user-check-email" id="userCheckEmail" required="" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInRight" data-wow-duration="3s">
                                            <div class="input-single">
                                               <select class="country-select">
                                                  <option value="usa">USA</option>
                                                  <option value="aus">Aus</option>
                                                  <option value="uk">UK</option>
                                                  <option value="ned">NED</option>
                                               </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-duration="2s">
                                            <div class="input-single">
                                               <textarea name="user-address" id="userAddress" placeholder="Address"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__single checkout__single__bg">
                                <h4 class=" wow fadeInDown" data-wow-duration="2s">Payment Methods</h4>
                                <div class="checkout__single-form">
                                    <p class="payment"></p>
                                    <div class="row g-3">
                                      <div class="col-lg-12 wow fadeInUp" data-wow-duration="2s">
                                         <div class="input-single">
                                            <label for="userCardNumber">Card number</label>
                                            <input type="number" name="user-card-number" id="userCardNumber" placeholder="0000 0000 0000 0000">
                                        </div>
                                      </div>
                                      <div class="col-lg-6 wow fadeInLeft" data-wow-duration="2s">
                                         <div class="input-single">
                                            <label for="userCardDate">Expiry date</label>
                                            <input type="text" id="userCardDate" placeholder="DD/MM/YY">
                                        </div>
                                      </div>
                                      <div class="col-lg-6 wow fadeInRight" data-wow-duration="2s">
                                         <div class="input-single">
                                            <label for="userCvc">Cvc / Cvv</label>
                                            <input type="text" maxlength="3" name="user-card-cvc" id="userCvc" required="" placeholder="3 Digits">
                                        </div>
                                      </div>
                                      <div class="col-lg-12 wow fadeInDown" data-wow-duration="2s">
                                         <div class="input-single">
                                            <label for="userCardName">Name on card</label>
                                            <input type="text" name="user-card-name" id="userCardName" placeholder="Name">
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="input-single input-check payment__save">
                                   <input type="checkbox" class="form-check-input" name="save-for-next" id="saveForNext">
                                   <label for="saveForNext">Save for my next payment</label>
                               </div>
                                <div class="mt-4 wow fadeInUp" data-wow-duration="4s">
                                    <a href="payment-successful.html" class="cmn--btn">
                                      <span>
                                         Payment Now
                                      </span>
                                   </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
</section>
<!--Checkout Section End--> 

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