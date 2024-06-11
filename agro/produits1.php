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
  <title>Produits</title>
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
            produits
        </h2>
        <ul class="right__content wow fadeInUp" data-wow-duration="2s">
           <li>
              <a href="index.php">
                <i class="fa-solid fa-house"></i>
                 Home
              </a>
           </li>
           <li>
              <i class="fa-solid fa-chevron-right"></i>
           </li>
           <li>
            produits
           </li>
        </ul>
     </div>
  </div>
</section>
<!--Breadcumd Section End--> 

<!--Service Section Here-->
<section class="service__section overhid pt-130 pb-130 section__bg">
  <div class="container">
  <div class="service__wrapper owl-carousel owl-theme">
      <?php 
          // Sélection de tous les enregistrements de la table
          $requete22 = $cdr->query("SELECT * FROM produit");
                                            
          // Récupération des résultats sous forme de tableau associatif
          $results22 = $requete22->fetchAll(PDO::FETCH_ASSOC);
          // Affichage des données
          foreach ($results22 as $row22) {
      ?>
      <div class="service__items">
        <div class="service__thumb">
          <img src="<?= $row22['photo'] ?>" alt="produit__image">
        </div>
        <div class="service__content">
          <h6>
            <a href="produit-details.php?lib=<?= $row22['libelle'] ?>">
              <?= $row22['libelle'] ?>
            </a>
          </h6>
          <p><?= $row22['description'] ?></p>
        </div>
      </div>
      <?php
          }
      ?>
    </div>
  </div>
</section>
<!--Service Section End-->


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