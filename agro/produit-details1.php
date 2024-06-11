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
  <title>Détails produit</title>
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
<div class="header__top overhid">
  <div class="container">
      <div class="top__wrap d-flex align-items-center justify-content-between">
          <div class="logo">
              <a href="index.php" class="logo">
                  <img src="assets/img/logo/logo-color.png" alt="logo">
              </a>
          </div>
<?php  
  if (isset($_SESSION['log_statut']) && $_SESSION['log_statut'] != "1") {
    echo "<script>alert('Compte inactif! Cliquez içi pour en savoir plus')</script>";
  }
  if (isset($_SESSION['log_name']) && isset($_SESSION['log_role']) && isset($_SESSION['log_id'])) {
    $logname = $_SESSION['log_name'];
    $logrole = $_SESSION['log_role'];
    /* Form modal */
      include 'editform.php';
    /*Form modal End */
    if ($logrole == "Formateur") {
      ?>
          <ul class="info d-flex align-items-center">
            <li class="text-center"><a href="dashboard-formateur.php"><button class="btn btn-primary">Dashboard-Formateur</button></a></li>
            <li class="text-center"><button type="button" data-bs-toggle="modal" data-bs-target="#usermodal" id="edituserbtn" class="btn btn-primary">Modifier le profil</button></li>
            <li class="text-center"><img src="images/person-circle.svg" alt="" height="35px"><h6 href="sign-up.php"><?= $logname ?><p><?= $logrole ?></p></h6>
            </li>
          </ul>
      <?php 
    }else if ($logrole == "Agriculteur") {
      ?>
          <ul class="info d-flex align-items-center">
            <li class="text-center"><a href="dashboard-agriculteur.php"><button class="btn btn-primary">Dashboard-Agri</button></a></li>
            <li class="text-center"><button type="button" data-bs-toggle="modal" data-bs-target="#usermodal" id="edituserbtn" class="btn btn-primary">Modifier le profil</button></li>
            <li class="text-center"><img src="images/person-circle.svg" alt="" height="35px"><h6 href="sign-up.php"><?= $logname ?><p><?= $logrole ?></p></h6></li>
          </ul>
      <?php
    }else {
      ?>
          <ul class="info d-flex align-items-center">
            <li class="text-center"><button type="button" data-bs-toggle="modal" data-bs-target="#usermodal" id="edituserbtn" class="btn btn-primary">Modifier le profil</button></li>
            <li class="text-center"><img src="images/person-circle.svg" alt="" height="35px"><h6 href="sign-up.php"><?= $logname ?><p><?= $logrole ?></p></h6></li>
          </ul>
      <?php 
    }
  }else {
    ?>
          <ul class="info d-flex align-items-center">
            <li><i class="fa-solid fa-key"></i> <a href="sign-in.php">Se connecter</a>
            </li>
            <li><i class="fa-solid fa-user"></i> <a href="sign-up.php">S'inscrire</a>
            </li>
            <li class="text-center"><img src="images/person-circle.svg" alt="" height="35px"></li>
          </ul>
    <?php 
  }
?>
      </div>
  </div>
</div>
<?php include "header2.php"; ?>

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
           produit details
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
            produit details
           </li>
        </ul>
     </div>
  </div>
</section>
<!--Breadcumd Section End--> 

<!--Service Details Section Here-->
<section class="details__section overhid pt-130 pb-130">
  <div class="container">
    <div class="row g-4">
      <div class="col-xxl-4 col-xl-4 col-lg-4">
            <div class="sidebar__right">
                  <div class="widget__tittle mb-3 wow fadeInDown" data-wow-duration="2s">
                      <h4>Autres produits</h4>
                  </div>
                  <div class="sidebar__widget mb-5">
                     <div class="recent__wrap">
                  <?php
                    if (isset($_GET['lib'])) {
                      $libprod = $_GET['lib'];
                    }
                       // Sélection de tous les enregistrements de la table
                       $requete01 = $cdr->query("SELECT * FROM produit WHERE libelle <> '$libprod'");
                           
                       // Récupération des résultats sous forme de tableau associatif
                       $resultats01 = $requete01->fetchAll(PDO::FETCH_ASSOC);
                       // Affichage des données
                       foreach ($resultats01 as $row01) {
                  ?>
                        <a href="formation-details.php?lib=<?= $row01['libelle'] ?>" class="recent__items wow fadeInUp" data-wow-delay="0.2s">
                          <span class="thumb">
                             <img src="<?= $row01['photo'] ?>" alt="img">
                          </span>
                          <div class="recent__content">
                             <h6><?= $row01['libelle'] ?></h6>
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
      <div class="col-xxl-8 col-xl-8 col-lg-8">
        <div class="details__items service__details">
          <div class="details__thumb wow fadeInDown" data-wow-duration="2s">
            <img src="assets/img/service/details-bg.jpg" alt="details__image">
          </div>
          <div class="details__content">
           <h3 class=" wow fadeInRight" data-wow-duration="2s">
               Organic Products
           </h3>
           <p class=" wow fadeInDown" data-wow-duration="4s">
            Monotonectally integrate pandemic processes without wireless channels. Globally maintain cross-unit quality vectors before cross-platform models. Dramatically incubate distributed methodologies rather than value-added e-services. Professionally brand market-driven total linkage rather than synergistic growth strategies. Collaboratively orchestrate viral web-readiness for stand-alone ideas.

            Credibly deliver low-risk high-yield testing procedures without turnkey applications. Rapidiously customize state of the art quality vectors through scalable markets. Dramatically productivate sticky deliverables without accurate technologies. Distinctively impact orthogonal meta-services with cooperative functionalities. Interactively strategize multifunctional imperatives rather than future-proof metrics.

           </p>
          </div>
          <div class="service__wrap">
            <div class="service__list d-flex align-items-center mb-4 wow fadeInUp" data-wow-duration="4s">
              <div class="icon">
                <i class="fa-solid fa-arrow-right"></i>
              </div>
              <p>
                Monotonectally integrate pandemic processes without wireless channels. Globally maintain cross-unit quality vectors before cross-platform models.
              </p>
            </div>
            <div class="service__list d-flex align-items-center wow fadeInDown" data-wow-duration="4s">
              <div class="icon">
                <i class="fa-solid fa-arrow-right"></i>
              </div>
              <p>
                TMonotonectally integrate pandemic processes without wireless channels. Globally maintain cross-unit quality vectors before cross-platform models.
              </p>
            </div>
          </div>
          <p class="pra__text mt-30 wow fadeInUp" data-wow-duration="5s">
             Monotonectally integrate pandemic processes without wireless channels. Globally maintain cross-unit quality vectors before cross-platform models. Dramatically incubate distributed methodologies rather than value-added e-services. Professionally brand market-driven total linkage rather than synergistic growth strategies. Collaboratively orchestrate viral web-readiness for stand-alone ideas.

            Credibly deliver low-risk high-yield testing procedures without turnkey applications. Rapidiously customize state of the art quality vectors through scalable markets. Dramatically productivate sticky deliverables without accurate technologies. Distinctively impact orthogonal meta-services with cooperative functionalities. Interactively strategize multifunctional imperatives rather than future-proof metrics.
          </p>
          <div class="special__box mt-30 wow fadeInDown" data-wow-duration="5s">
              <h5>
                Credibly deliver low-risk high-yield testing procedures without turnkey applications. Rapidiously customize state of the art 
              </h5>
          </div>
          <div class="img__item mt-25">
            <div class="row g-3">
              <div class="col-lg-6 wow fadeInLeft" data-wow-duration="4s">
                <div class="thumb">
                  <img src="assets/img/service/s5.jpg" alt="image">
                </div>
              </div>
              <div class="col-lg-6 wow fadeInRight" data-wow-duration="4s">
                <div class="thumb">
                  <img src="assets/img/service/s6.jpg" alt="image">
                </div>
              </div>
             </div>
          </div>
          <div class="benefit">
            <h3 class="title wow fadeInUp" data-wow-duration="4s">
              More Benefits
            </h3>
            <p class="pra__text mb-4 wow fadeInDown" data-wow-duration="4s">
              redibly deliver low-risk high-yield testing procedures without turnkey applications. Rapidiously customize state of the art quality vectors through scalable markets. Dramatically productivate sticky deliverables without accurate technologies. Distinctively impact orthogonal meta-services with cooperative functionalities.
            </p>
            <div class="benefit__item">
              <div class="row g-4">
                <div class="col-md-6 wow fadeInLeft" data-wow-duration="5s">
                    <ul class="points">
                        <li>Distinctively impact orthogonal meta-services</li>
                        <li>Redibly deliver low-risk high-yield testing</li>
                        <li>Distinctively impact orthogonal meta-services with</li>
                    </ul>
                </div>
                <div class="col-md-6 wow fadeInRight" data-wow-duration="5s">
                    <ul class="points">
                        <li>Dramatically productivate sticky deliverables without</li>
                        <li>Actively impact orthogonal meta-services with </li>
                        <li>Procedures without turnkey applications. Rapidiously</li>
                    </ul>
                </div>
              </div>
            </div>
            <p class="pra__text mt-3 wow fadeInUp" data-wow-duration="4s">
              Redibly deliver low-risk high-yield testing procedures without turnkey applications. Rapidiously customize state of the art quality vectors through scalable markets. Dramatically productivate sticky deliverables without accurate technologies. Distinctively impact orthogonal meta-services with cooperative functionalities.
              Rapidiously customize state of the art quality vectors through scalable markets. Dramatically productivate sticky deliverables without accurate technologies. Distinctively impact orthogonal meta-services with cooperative functionalities.
            </p>
            <a href="#" class="cmn--btn mt-4 wow fadeInDown" data-wow-duration="5s">
              send a message 
            </a>
            <div class="prev__next__btns d-flex align-items-center justify-content-between mt-50">
              <a href="#" class="prev__btn d-flex align-items-center">
                  <div class="icon">
                    <i class="fa-solid fa-arrow-left"></i>
                  </div>
                  <span class="text">Previous</span>
              </a>
              <a href="#" class="next__btn d-flex align-items-center">
                  <span class="text">Next</span>
                  <div class="icon"><i class="fa-solid fa-arrow-right"></i></div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Service Details Section End-->

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