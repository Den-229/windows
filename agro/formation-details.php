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
  <title>Détails Formations</title>
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
   <style>
   .blog__details .blog__details__items .details__wrapper .details__content .video__thumb .video-btn0 {
      display: block;
      width: 56px;
      height: 56px;
      border-radius: 10px;
      background: var(--theme-color);
      text-align: center;
      line-height: 58px;
      position: absolute;
      top: 50%;
      transform: translate(-50%, -50%);
      left: 50%;
      transition: all 0.4s; 
   }
   .blog__details .blog__details__items .details__wrapper .details__content .video__thumb .video-btn0 i {
      font-size: 18px;
      color: var(--white-color);
   }
   </style>
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
          Details Formation
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
            Details Formation
           </li>
        </ul>
     </div>
  </div>
</section>
<!--Breadcumd Section End--> 

<!--Blog Details Section Here-->
<section class="blog__details pb-130 pt-130">
  <div class="container">
     <div class="row g-4">
          <div class="col-lg-8">
              <div class="blog__details__items">
                  <div class="details__wrapper">
                      <div class="details__thumb wow fadeInDown" data-wow-duration="2s">
                          <img src="assets/img/blog/details/details1.jpg" alt="details__image">
                      </div>
                      <?php 
                        if (isset($_GET['titre'])) {
                           $titre = $_GET['titre'];
                        }
                        try {
                           // Sélection de tous les enregistrements de la table
                           $requete = $cdr->query("SELECT * FROM formations WHERE titre='$titre'");
                           
                           // Récupération des résultats sous forme de tableau associatif
                           $resultats = $requete->fetch(PDO::FETCH_ASSOC);
                           $idformation = $resultats['idformation'];
                       ?>
                       <div class="details__content">
                          <h3 class=" wow fadeInUp" data-wow-duration="2s">
                            <?= $resultats['titre'] ?>
                          </h3>
                          <ul class=" wow fadeInUp" data-wow-duration="2s">
                              <li>
                                  <i class="fa-solid fa-calendar"></i>Date et heure: <?= $resultats['dateheure'] ?>
                              </li>
                              <li class="mr-none">
                                 <i class="fa-solid fa-clock"></i>Durée: <?= $resultats['duree'] ?>
                             </li>
                          </ul>
                          <p class="text1 wow fadeInDown" data-wow-duration="3s"><?= $resultats['description'] ?></p>
                          <div class="video__thumb wow fadeInDown" data-wow-duration="2s">
                              <img src="assets/img/blog/details/details2.jpg" alt="img">
                              <a href="https://youtu.be/tOzN5Kc9-fI?si=0WsbK8O4TVEFtpmg" class="play__btn video-btn0" target="_blank">
                                  <i class="fa-solid fa-play"></i>
                              </a>
                          </div>
                          <div class="row">
                       <?php
                       // Sélection de tous les enregistrements de la table
                       $requete0 = $cdr->query("SELECT * FROM cours WHERE idformation='$idformation'");
                           
                       // Récupération des résultats sous forme de tableau associatif
                       $resultats0 = $requete0->fetchAll(PDO::FETCH_ASSOC);
                       // Affichage des données
                       foreach ($resultats0 as $row) {
                        ?>
                           <div class="col-6">
                              <video controls id="video" width="100%" class="rounded">
                                 <source src="<?= $row['fichier'] ?>" type="video/mp4">
                              </video>
                              <p class="text2 mt-4 wow fadeInUp" data-wow-duration="2s"><?= $row['libelle'] ?></p>
                          </div>
                        <?php
                            }
                        ?>
                           </div>
                        </div>
                        <?php 
                        } catch (PDOException $e) {
                           // En cas d'erreur lors de la récupération des données
                           echo "Erreur lors de la récupération des données : " . $e->getMessage();
                           // Arrêt du script
                           exit();
                       }
                       ?>
                  </div>
               </div>
          </div>
          <div class="col-lg-4">
              <div class="sidebar__right">
                  <div class="widget__tittle mb-3 wow fadeInDown" data-wow-duration="2s">
                      <h4>Autres formations</h4>
                  </div>
                  <div class="sidebar__widget mb-5">
                     <div class="recent__wrap">
                  <?php
                       // Sélection de tous les enregistrements de la table
                       $requete01 = $cdr->query("SELECT * FROM formations WHERE idformation <> '$idformation'");
                           
                       // Récupération des résultats sous forme de tableau associatif
                       $resultats01 = $requete01->fetchAll(PDO::FETCH_ASSOC);
                       // Affichage des données
                       foreach ($resultats01 as $row01) {
                  ?>
                        <a href="formation-details.php?titre=<?= $row01['titre'] ?>" class="recent__items wow fadeInUp" data-wow-delay="0.2s">
                          <span class="thumb">
                             <img src="assets/img/blog/details/recent/r3.jpg" alt="img">
                          </span>
                          <div class="recent__content">
                             <h6><?= $row01['titre'] ?></h6>
                             <p><?= $row01['description'] ?></p>
                             <span class="recent__btn">
                               <span>
                                 En savoir plus
                               </span>
                               <span class="icon">
                                   <i class="fa-solid fa-arrow-right"></i>
                               </span>
                            </span>
                          </div>
                        </a>
                  <?php 
                     }
                  ?>
                     </div>
                  </div>
              </div>
          </div>
     </div>
  </div>
</section>
<!--Blog Details Section End-->

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