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
  <title>Formations</title>
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

<!--Breadcumd Section Here--> 
<section class="breadcumd__banner overhid">
  <div class="container">
     <div class="breadcumd__wrapper">
        <h2 class="left__content wow fadeInUp" data-wow-duration="2s">
           Formations
        </h2>
        <ul class="right__content wow fadeInUp" data-wow-duration="2s">
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
            Formations
           </li>
        </ul>
     </div>
  </div>
</section>
<!--Breadcumd Section End--> 

<!--Blog Section Here-->
<section class="blog__section overhid pt-130 pb-130">
  <div class="container">
      <div class="row g-4">
          <?php 
              // Sélection de tous les enregistrements de la table
              $requete = $cdr->query("SELECT * FROM formations");
                                            
              // Récupération des résultats sous forme de tableau associatif
              $resultats = $requete->fetchAll(PDO::FETCH_ASSOC);
              
              // Affichage des données
              foreach ($resultats as $row) {
                  $logid = $row['iduser'];
									// Sélection de tous les enregistrements de la table
									$requete0 = $cdr->query("SELECT * FROM users WHERE iduser='$logid'");
									$resultat0 = $requete0->fetch(PDO::FETCH_ASSOC);
          ?>
          <div class="col-xl-4 col-md-6 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s">
              <div class="blog__items">
                  <div class="blog__thumb">
                      <img src="assets/img/blog/blog1.jpg" alt="blog__image">
                      <div class="content">
                          <h5><?= $row['titre'] ?></h5>
                          <div class="info">
                              <strong>Publiée par:</strong>
                              <a href="#0"><?= $resultat0['role'] ?></a><br>
                              <strong>Date et heure Formation:</strong>
                              <span><?= $row['dateheure'] ?></span>
                          </div>
                      </div>
                  </div>
                  <div class="content__up">
                      <h5>
                          <a href="formation-details.php?titre=<?= $row['titre'] ?>">
                          <?= $row['titre'] ?>
                          </a>
                      </h5>
                      <p>
                      <?= $row['description'] ?>
                      </p>
                      <a href="formation-details.php?titre=<?= $row['titre'] ?>" class="cmn--btn">Détails de la formation<i class="fa-solid fa-arrow-right"></i></a>
                  </div>
              </div>
          </div>
          <?php
              }
          ?>
      </div>
  </div>
</section>
<!--Blog Section End-->

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