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
  <title>Contatez-nous</title>
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

<!--Breadcumd Section Here--> 
<section class="breadcumd__banner overhid">
  <div class="container">
     <div class="breadcumd__wrapper">
        <h2 class="left__content wow fadeInUp" data-wow-duration="2s">
          contactez-nous
        </h2>
        <ul class="right__content wow fadeInUp" data-wow-duration="2s">
           <li>
              <a href="index.html">
                <i class="fa-solid fa-house"></i>
                 Accueil
              </a>
           </li>
           <li>
              <i class="fa-solid fa-chevron-right"></i>
           </li>
           <li>
            contact
           </li>
        </ul>
     </div>
  </div>
</section>
<!--Breadcumd Section End--> 

<!--Contact Info Section Here--> 
<div class="contact__section style__two pb-130">
  <div class="container">
    <div class="row g-4 align-items-center">
      <div class="col-lg-4 wow fadeInLeft" data-wow-duration="2s">
        <div class="left__info">
          <div class="info__wrap d-flex align-items-center justify-content-between">
            <div class="content">
              <h6>
                Téléphone
              </h6>
              <p>
                +229 54722596
              </p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-phone"></i>
            </div>
          </div>
          <div class="info__wrap d-flex align-items-center justify-content-between">
            <div class="content">
              <h6>
                Email
              </h6>
              <p>
                agri@gmail.com
              </p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-envelope"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="contact__right">
          <form action="send_email.php" id="contact-form" method="POST">
             <div class="row g-4">
                <div class="col-lg-12 wow fadeInDown" data-wow-duration="2s">
                   <div class="form__clt">
                      <input type="text" name="name" id="name" placeholder="Votre Nom..." required>
                   </div>
                </div>
                <div class="col-lg-6 wow fadeInLeft" data-wow-duration="3s">
                   <div class="form__clt">
                      <input type="text" name="email" id="email" placeholder=" Votre Email..." required>
                   </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-duration="3s">
                   <div class="form__clt">
                      <input type="text" name="telephone" id="number" placeholder="Votre Numéro..." required>
                   </div>
                </div>
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="2s">
                   <div class="form__clt__big">
                      <textarea name="message" id="message" placeholder="Message..." required></textarea> 
                   </div>
                </div>
                <div class="col-lg-4 wow fadeInDown" data-wow-duration="4s">
                    <button type="submit" class="cmn--btn">
                      <i class="fa-solid fa-paper-plane"></i> Envoyer
                     </button>
                </div>
             </div>
          </form>
		  <p class="form-message"></p>
       </div>
      </div>
    </div>
  </div>
</div>
<!--Contact Info Section End--> 

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