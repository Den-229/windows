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
  <title>Demande de réinitialisation de mot de passe</title>
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
<!-- <section class="breadcumd__banner overhid">
  <div class="container">
     <div class="breadcumd__wrapper">
        <h2 class="left__content wow fadeInUp"data-wow-duration="2s">
          Réinitialisatio
        </h2>
        <ul class="right__content wow fadeInUp"data-wow-duration="2s">
           <li>
              <a href="index.php">
                <i class="fa-solid fa-house"></i>
                 Accueil
              </a>
           </li>
           <li>
              <i class="fa-solid fa-chevron-right"></i>
           </li>
         <li>
          Se connecter
         </li>
        </ul>
     </div>
  </div>
</section> -->
<!--Breadcumd Section End--> 

<!--Signup Section Here--> 
<section class="signup__section pt-130 pb-130">
  <div class="container">
     <div class="row justify-content-center align-items-center">
        <div class="col-lg-6 wow bounceInLeft"data-wow-duration="3s">
           <div class="signup__boxes round16">
              <h3 class="title mb-3 text-center">
              Demande de réinitialisation de mot de passe
              </h3>
              <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        if (isset($_POST['envoi'])) {
                        $email = $_POST['email'];
                        $emailhashed = password_hash($email, PASSWORD_DEFAULT);

                        // Vérifier si l'email existe dans la base de données
                        $stmt = $cdr->prepare("SELECT * FROM users WHERE email = :email");
                        $stmt->bindParam(":email", $email);
                        $stmt->execute();

                        if ($stmt->rowCount() > 0) {
                            // Générer un token unique
                            $token = bin2hex(random_bytes(10));
                            // Afficher le lien de réinitialisation
                            $reset_link = "reset-password.php?token=" . $token."&e=". $email;
                            echo "<div>Cliquez sur le lien suivant pour réinitialiser votre mot de passe : <a href=\"$reset_link\">$reset_link</a></div>";
                        } else {
                            echo "<div class='alert alert-info text-center'>Aucun compte trouvé avec cette adresse e-mail</div>";
                            echo "<script>window.location.href='reset-password-request.php';</script>";
                        }

                        exit();
                    }
                }
                ?>
              <form action="reset-password-request.php" method="post" class="write__review">
                 <div class="row g-4 ">
                    <div class="col-lg-12">
                       <div class="frm__grp">
                          <label for="enamee" class="fz-18 fw-500 inter title mb-3">Entrez votre adresse email</label>
                          <div class="d-flex" style="background: rgba(26, 77, 190, 0.03);border-radius: 100px;">
                            <button id="btpu" style="background: transparent;">
															<i class="fa-regular fa-user"></i>
														</button>
                          <input type="text" id="enamee" name="email" placeholder="Entrez votre email...">
                          </div>
                       </div>
                    </div>
                    <div class="col-lg-6">
                       <div class="frm__grp">
                          <button type="submit" class="cmn--btn" name="envoi">
                             <span>
                             Envoyer le lien de réinitialisation
                             </span>
                          </button>
                       </div>
                    </div>
                 </div>
              </form>
           </div>
        </div>
        <div class="col-lg-6 wow bounceInRight"data-wow-duration="3s">
           <div class="signup__thumb">
              <img src="assets/img/faq/signup-thumb.png" class="w-100" alt="img">
           </div>
        </div>
     </div>
  </div>
</section>
<!--Signup Section End--> 


<script src="./assets/js/passvisibility.js"></script>
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