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
        <h2 class="left__content wow fadeInUp"data-wow-duration="2s">
          Détails produit
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
            Détails produit
           </li>
        </ul>
     </div>
  </div>
</section>
<!--Breadcumd Section End--> 

<!--Shop Single Section Here-->
<section class="shop__single pt-80 pb-80 overhid">
  <div class="container">
      <div class="row g-5">
                  <?php 
                        if (isset($_GET['lib'])) {
                           $lib = $_GET['lib'];
                        }
                        // Sélection de tous les enregistrements de la table
                        $requete = $cdr->query("SELECT * FROM produit WHERE libelle='$lib'");
                           
                        // Récupération des résultats sous forme de tableau associatif
                        $resultats = $requete->fetch(PDO::FETCH_ASSOC);
                  ?>
          <div class="col-xxl-5 col-xl-5 col-lg-5">
              <div class="image img">
                  <img src="<?= $resultats['photo'] ?>" alt="" width="120%">
              </div>
          </div>
          <div class="col-xxl-7 col-xl-7 col-lg-7 d-flex justify-content-center">
              <div class="shop__single__content">
                  <h3 class=" wow fadeInUp" data-wow-duration="2s">
                      <?= $resultats['libelle'] ?>
                  </h3>
                  <div class="describtion__reviews wow fadeInDown" data-wow-duration="5s">
                     <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                           Description
                        </button>
                        </li>
                      </ul>
                      <div class="tab-content" id="describtion">
                        <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                           <p class="describtion__text">
                              <?= $resultats['description'] ?>
                           </p>
                        </div>
                      </div>
                  </div>
                <form action="" method="post">
									<input type="hidden" name="produitid" value="<?= $resultats['idproduit'] ?>">
									<input type="hidden" name="prodqte" value="<?= $resultats['quantite'] ?>">
                  <div class="product-description__content-footer wow fadeInUp"data-wow-duration="5s">
                     <div class="product-pricing">                          
                         <div class="product-pricing-single product-pricing-calculator">
                            <label for="qte"><b>Quantité</b></label>
                            <input id="qte" type="number" class="form-control" step="1" min="1" max="<?= $resultats['quantite'] ?>" name="quantite" value="<?= $resultats['quantite'] ?>">
                         </div>
                         <div class="product-pricing-single">
                            <input id="prix" type="hidden" class="form-control product-pri" name="prix" value="<?= $resultats['prix'] ?>">
                            <p><b>Prix:</b> <span><?= $resultats['prix']." " ?></span>FCFA</p>
                         </div>
                     </div>
                  </div>
                  <div class="mt-5">
                      <button type="submit" class="mt-5 btn btn-primary" name="addcart">Ajouter au panier</button>
                  </div>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
									if (isset($_POST['addcart'])) {
										$prid = $_POST['produitid'];
										$prodqte = $_POST['prodqte'];
										$qtecmd = $_POST['quantite'];
										$prix = $_POST['prix'];
                    $newqte = $prodqte - $qtecmd;
                    // Récupérer la date et l'heure actuelle
                    date_default_timezone_set('Africa/Porto-Novo');
                    $datecmd = date("Y-m-d H:i:s");
                    $montcmd = $qtecmd*$prix;
										$logid = $_SESSION['log_id'];
										$sql12 = $cdr->query("SELECT * FROM commander WHERE idproduit='$prid' AND iduser ='$logid'");
										if ($sql12->rowCount() > 0) {
											echo "<script>alert('Le produit a déjà été ajouté au panier!')</script>";
										}else {
                                 if (!isset($_SESSION['log_id'])) {
                                    echo "<script>window.location.href='sign-out.php';</script>";
                                  }else {
										$req2 = $cdr->prepare("INSERT INTO commander(iduser, idproduit, datecommande, montantcommande, qtecmd) VALUES(:iduser, :idproduit, :datecmd, :montcmd, :qtecmd)");
										$req2->bindParam(':iduser', $logid);
										$req2->bindParam(':idproduit', $prid);
										$req2->bindParam(':datecmd', $datecmd);
										$req2->bindParam(':montcmd', $montcmd);
										$req2->bindParam(':qtecmd', $qtecmd);
										// Exécution de la requête
    								$req2->execute();
                           $sqlupdate = $cdr->prepare("UPDATE produit SET quantite=:newqte WHERE idproduit=:idproduit");
                           $sqlupdate->bindParam(':newqte', $newqte);
                           $sqlupdate->bindParam(':idproduit', $prid);
                           // Exécution de la requête
    								$sqlupdate->execute();
										echo "<script>alert('Produit ajouté au panier');
										window.location.href='panier.php';
										</script>";
                           }
									}
									}
								}
								?>
              </div>
          </div>
      </div>
  </div>
</section>
<!--Shop Single Section End-->

<!--Shop Single Section End-->
<section class="review__section pt-130 pb-130">
  <div class="container">
      <div class="row align-items-center justify-content-between">
          <div class="col-xl-6 col-lg-6">
             <div class="female__review">
                <div class="write__review__wrap">
                   <h3 class="title wow fadeInUp"data-wow-duration="2s">
                      Donner votre avis
                   </h3>
                   <?php 
                      if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (isset($_POST['soumettre'])) {
                          // Récupération des données du formulaire
                          if (!isset($_SESSION['log_id'])) {
                            echo "<div class='alert alert-success'>Désolé! Vous ne pouvez pas publier d'avis</div>";
                          }else {
                          $note = $_POST['note'];
                          $contenu = $_POST['contenu'];
                          $iduser = $_SESSION['log_id'];
                          // Récupérer la date et l'heure actuelle
                          date_default_timezone_set('Africa/Porto-Novo');
                          $datecreat = date("Y-m-d H:i:s");
                          // Préparation de la requête SQL pour insérer l'avis dans la table
                          $sql = $cdr->prepare("INSERT INTO avis(note, contenu, datecreation, iduser) VALUES (:note, :contenu, :datecreat, :iduser)");
                          $sql->bindParam(':note', $note);
                          $sql->bindParam(':contenu', $contenu);
                          $sql->bindParam(':datecreat', $datecreat);
                          $sql->bindParam(':iduser', $iduser);
                          $req = $sql->execute();
                          // Exécution de la requête
                          if ($req) {
                              echo "<div class='alert alert-success'>Avis publié avec succès</div>";
                          } else {
                            echo "<div class='alert alert-danger'>Erreur lors de la publication de l'avis</div>";
                          }
                        }
                      }
                      }
                   ?>
                   
                   <form action="" method="POST">
                      <div class="row g-4">
                         <div class="col-lg-12 wow fadeInUp"data-wow-delay="0.5s">
                            <input type="number" class="form-control" placeholder="Donnez une note de 1 à 5" id="note" min="1" max="5" name="note" required />
                         </div>
                         <div class="col-lg-12 wow fadeInDown"data-wow-delay="0.5s">
                            <textarea class="form-control" placeholder="Partagez votre expérience" id="contenu" name="contenu" required></textarea>
                         </div>
                         <button type="submit" class="cmn--btn wow fadeInUp" data-wow-duration="4s" name="soumettre"> 
                            <span>
                               Publier
                            </span>
                         </button>
                      </div>
                   </form>
                </div>
             </div>
          </div>
          <div class="col-xl-5 col-lg-5 wow bounceInRight"data-wow-duration="3s">
             <div class="female__img">
                <img src="assets/img/product/single/s3.png" alt="shop">
             </div>
          </div>
       </div>
  </div>
</section>
<!--Shop Single Section End-->

<!--Product Section Here-->
<section class="product__section pt-130 pb-130 overhid">
  <div class="container">
    <div class="top__bar d-flex flex-wrap justify-content-center align-items-center section__bg px-4 py-3 mb-30">
        <h3>Plus de produits</h3>
    </div>
      <div class="row g-4">
            <?php 
                // Sélection de tous les enregistrements de la table
                $requete22 = $cdr->query("SELECT * FROM produit WHERE libelle <> '$lib'");
                
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