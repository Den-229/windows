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

<?php include "header.php"; ?>

<!--Breadcumd Section Here--> 
<section class="breadcumd__banner overhid">
  <div class="container">
     <div class="breadcumd__wrapper">
        <h2 class="left__content wow fadeInUp"data-wow-duration="2s">
          produits
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
            produits
           </li>
        </ul>
     </div>
  </div>
</section>
<!--Breadcumd Section End--> 

<!--Product Section Here-->
<section class="product__section pt-130 pb-130 overhid">
  <div class="container">
    <div class="top__bar d-flex flex-wrap justify-content-center align-items-center section__bg px-4 py-3 mb-30">
        <h3>Produits</h3>
    </div>
      <div class="row g-4">
            <?php 
                // Sélection de tous les enregistrements de la table
                $requete22 = $cdr->query("SELECT * FROM produit");
                
                // Récupération des résultats sous forme de tableau associatif
                $results22 = $requete22->fetchAll(PDO::FETCH_ASSOC);
                // Affichage des données
                foreach ($results22 as $row22) {
            ?>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="3s">
                  <div class="product__items">
                      <div class="product__thumb">
                          <img src="<?= $row22['photo'] ?>" alt="product__image">
                          <ul class="product__icon d-flex justify-content-center">
                            <li>
                                <a href="produit-details.php?lib=<?= $row22['libelle'] ?>"><i class="fa-regular fa-eye"></i></a>
                            </li>
                            <li>
                                <a href="produit-details.php?lib=<?= $row22['libelle'] ?>"><i class="fa-solid fa-cart-shopping"></i></a>
                            </li>
                        </ul>
                      </div>
                      <div class="product__content center">
                          <h6>
                              <a href="produit-details.php?lib=<?= $row22['libelle'] ?>">
                                <?= $row22['libelle'] ?>
                              </a>
                          </h6>
                          <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                          </ul>
                            <div class="product__price d-flex align-items-center justify-content-center">
                              <h6>
                                <?= $row22['prix']. " FCFA" ?>
                              </h6>
                          </div>
                      </div>
                  </div>
                </div>
            <?php 
                }
                ?>
      </div>
  </div>
</section>
<!--Product Section End-->

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