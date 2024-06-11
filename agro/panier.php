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
  <title>Panier | Connectivité des agriculteurs</title>
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
          Panier
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
            Panier
           </li>
        </ul>
     </div>
  </div>
</section>
<!--Breadcumd Section End--> 

<!--Shop Cart Section Here--> 
<section class="cart__section pt-80 pb-80 overhid">
<div class="container">
        <div class="main__cart__wrap">
          <div class="row">
              <div class="col-12 wow bounceInLeft"data-wow-duration="4s">
                  <div class="cart__wrapper">
                      <div class="cart-items-wrapper">
                          <table>
                              <thead>
                                  <tr>
                                      <th>Produit</th>
                                      <th>Prix</th>
                                      <th>Quantité</th>
                                      <th>Total</th>
                                      <th class="text-center">Retirer</th>
                                  </tr>
                              </thead>
                              <tbody>
                              <?php
										if (isset($_SESSION['log_id'])) {
										$uid = $_SESSION['log_id'];
										$reqex1 = $cdr->query("SELECT * FROM commander,produit WHERE commander.idproduit = produit.idproduit AND commander.iduser='$uid'");
										$resex1 = $reqex1->fetchAll(PDO::FETCH_ASSOC);
										$stotal = 0;
										foreach ($resex1 as $key) {
												$prodimg = $key['photo'];
												$prix_formate = number_format($key['prix'], 2, ',', ' ');
                                                $qtecmd = $key['qtecmd'];
												$total = $key['prix'] * $key['qtecmd'];
												$total_formate = number_format($total, 2, ',', ' ');
									?>
                                  <tr class="cart-item">
                                      <td class="cart-item-info">
                                          <img height="45px" src="<?= $prodimg ?>" alt="Image">
                                      </td>
                                      <td class="cart-item-price">
                                          <span class="base-price"><?= $prix_formate." " ?>FCFA</span>
                                      </td>
                                      <td>
                                          <div class="cart-item-quantity">
                                              <span><?= $qtecmd ?></span>
                                          </div>
                                      </td>
                                      <td class="cart-item-price">
                                          <span><?= $total_formate." " ?>FCFA</span>
                                      </td>
                                  <?php
                                  echo "<td class='text-center text-success'><a href='javascript:void(0)' onclick='supprimerProduit(" .$key['idcommande']. ")'><i class='fa-solid fa-trash'></i></a></td>";
                                  echo "</tr>";
                                        $stotal+=$total;
                                        }
                                        $taxe = 0.18;
                                    }else {
                                        $stotal = 0;
                                        $taxe = 0.18;
                                        // echo "<tr class='alert alert-warning text-center'><td colspan='5' height='45px'>Le panier est vide! Veuillez-vous <a href='sign-in.php' class='btn btn-primary'>connecter</a></td></tr>";
                                        echo "<tr class='alert alert-warning text-center'><td colspan='5' height='45px'>Le panier est vide!</td></tr>";
                                    }
                                  ?>
                                  
                              </tbody>
                          </table>
                      </div>
                      <!-- <div class="cart__wrapper-footer">
                          <form action="cart.php">
                              <input type="text" name="promo-code" id="promoCode" placeholder="Promo code">
                              <button type="submit" class="cmn--btn">
                        <span>
                              Apply Code
                        </span>
                        </button>
                          </form>
                          <a href="cart.php" class="cmn--btn">
                        <span>
                           Update Cart
                        </span>
                     </a>
                    </div> -->
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-6"></div>
              <div class="col-xl-6 wow bounceInRight"data-wow-duration="3s">
                  <div class="cart__pragh__box">
                      <div class="cart__graph">
                          <h4>Total Panier</h4>
                          <ul>
                              <li>
                                  <span>Sous-total</span>
                                  <span><?= $stotal. " FCFA" ?></span>
                              </li>
                              <li>
                                  <span>Taxe</span>
                                  <span><?= $taxe ?></span>
                              </li>
                              <li>
                                  <span>Total</span>
                                  <?php $mt = ($stotal + $stotal*$taxe) ?>
                                  <span><?= ($stotal + $stotal*$taxe) . " FCFA" ?></span>
                              </li>
                          </ul>
                          <div class="row">
                          <div class="col-6">
                            <div class="">
                                <button type="button" class="cmn--btn kkiapay-button" title="Finaliser la commande et payer immédiatement">
                            <span>
                            Payer maintenant
                            </span>
                                    </button>
                            </div>
                          </div>
                          <div class="col-6">
                          <form action="commander_email.php" method="POST">
                            <input type="hidden" name="montant" value="<?= $mt ?>">
                          <div class="chck col-6">
                              <button type="submit" class="cmn--btn" title="Réserver maintenant sans payer">
                        <span>
                           Précommander
                        </span>
                                </button>
                          </div>
                          </form>
                          </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!--Shop Cart Section End--> 

<?php include "footer.php"; ?>

<!--Jquery 3 7 0 Min Js-->
<script amount="<?= $mt ?>" 
        callback="#"
        data=""
        position="center" 
        theme="#0095ff"
        sandbox="true"
        key="00cc5830329211eebefc2f0d3b6f867e"
        src="https://cdn.kkiapay.me/k.js">
</script>
<!-- Fonction JavaScript pour supprimer un produit du panier -->
   <script src="assets/js/fich.js"></script>                                 
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