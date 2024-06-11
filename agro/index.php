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
  <title>Acceuil | Connectivité des agriculteurs</title>
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
    <link rel="stylesheet" href="assets/css/chat.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
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
    <!-- WhatsApp Chat Icon -->
    <a href="https://chat.whatsapp.com/DFKgF13ea2TDny8rwMs75Q" class="whatsapp-chat" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>


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
    echo "<script>alert('Compte inactif!')</script>";
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
            <li>
              <!-- Translation Code here -->
                <span>
                    <div class="translate" id="google_translate_element"></div>

                                  <script type="text/javascript">
                                      function googleTranslateElementInit() {  new google.translate.TranslateElement({pageLanguage: 'fr'}, 'google_translate_element');}
                                  </script>
                                  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                </span>
              <!-- Translation Code End here -->
            </li>
            <li><i class="fa-solid fa-arrow-circle-left"></i> <a href="sign-out.php">Se déconnecter</a>
            <li class="text-center"><a href="dashboard-formateur.php"><button class="btn btn-primary">Tableau de bord</button></a></li>
            <li class="text-center"><button type="button" data-bs-toggle="modal" data-bs-target="#usermodal" id="edituserbtn" class="btn btn-primary">Modifier le profil</button></li>
            <li class="text-center"><img src="images/person-circle.svg" alt="" height="35px"><h6><?= $logname ?><p><?= $logrole ?></p></h6>
            </li>
          </ul>
      <?php 
    }else if ($logrole == "Agriculteur") {
      ?>
          <ul class="info d-flex align-items-center">
            <li>
              <!-- Translation Code here -->
                <span>
                    <div class="translate" id="google_translate_element"></div>

                                  <script type="text/javascript">
                                      function googleTranslateElementInit() {  new google.translate.TranslateElement({pageLanguage: 'fr'}, 'google_translate_element');}
                                  </script>
                                  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                </span>
              <!-- Translation Code End here -->
            </li>
            <li><i class="fa-solid fa-arrow-circle-left"></i> <a href="sign-out.php">Se déconnecter</a>
            <li class="text-center"><a href="dashboard-agriculteur.php"><button class="btn btn-primary">Tableau de bord</button></a></li>
            <li class="text-center"><button type="button" data-bs-toggle="modal" data-bs-target="#usermodal" id="edituserbtn" class="btn btn-primary">Modifier le profil</button></li>
            <li class="text-center"><img src="images/person-circle.svg" alt="" height="35px"><h6><?= $logname ?><p><?= $logrole ?></p></h6></li>
          </ul>
      <?php
    }else {
      ?>
          <ul class="info d-flex align-items-center">
            <li>
              <!-- Translation Code here -->
                <span>
                    <div class="translate" id="google_translate_element"></div>

                                  <script type="text/javascript">
                                      function googleTranslateElementInit() {  new google.translate.TranslateElement({pageLanguage: 'fr'}, 'google_translate_element');}
                                  </script>
                                  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                </span>
              <!-- Translation Code End here -->
            </li>
            <li><i class="fa-solid fa-arrow-circle-left"></i><a href="sign-out.php">Se déconnecter</a>
            <li class="text-center"><button type="button" data-bs-toggle="modal" data-bs-target="#usermodal" id="edituserbtn" class="btn btn-primary">Modifier le profil</button></li>
            <li class="text-center"><img src="images/person-circle.svg" alt="" height="35px"><h6><?= $logname ?><p><?= $logrole ?></p></h6></li>
          </ul>
      <?php 
    }
  }else {
    ?>
          <ul class="info d-flex align-items-center">
            <li>
              <!-- Translation Code here -->
                <span>
                    <div class="translate" id="google_translate_element"></div>

                                  <script type="text/javascript">
                                      function googleTranslateElementInit() {  new google.translate.TranslateElement({pageLanguage: 'fr'}, 'google_translate_element');}
                                  </script>
                                  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                </span>
              <!-- Translation Code End here -->
            </li>
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
  <?php 
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (isset($_POST['recherche'])) {
            $recherche = htmlspecialchars($_POST['search']);
              // Sélection de tous les enregistrements de la table
							$spreq = $cdr->query("SELECT * FROM produit WHERE libelle LIKE '%$recherche%'"); 
							$sfreq = $cdr->query("SELECT * FROM formations WHERE titre LIKE '%$recherche%'");
              if ($spreq->rowCount() > 0) {
                echo "<script>window.location.href='produit-details.php?lib=$recherche';</script>";
                // header("Location: produit-details.php?lib=$recherche");
              }else {
                echo "<script>alert('Aucun produit trouvé')</script>";
              }
              if ($sfreq->rowCount() > 0) {
                echo "<script>window.location.href='formation-details.php?titre=$recherche';</script>";
                // header("Location: formation-details.php?titre=$recherche");
              }else {
                echo "<script>alert('Aucune formation trouvée')</script>";
              }
          }
      }
  ?>
  <div class="search-inner">
      <i class="fas fa-times search-close" id="search-close"></i>
      <div class="search-cell">
          <form method="post">
            <label for="search" class="justify-content-center text-success d-flex">Rechercher un produit , une formation...</label>
              <div class="search-field-holder d-flex">
                  <input id="search" type="search" name="search" class="main-search-input">
                  <button type="submit" class="btn btn-primary" name="recherche">Rechercher</button>
              </div>
          </form>
      </div>
  </div>
</div>
<!-- fullscreen search bar area end here -->
<!--Banner Section Here--> 
<section class="banner__section overhid" id="01">
  <div class="swiper banner__slider">
      <div class="swiper-wrapper">
      <?php 

$limite = 200;
 $emplacement = "carousel";
 $reqa->execute();

             
    $resultats = array();        
   $resultats = $reqa->fetchall();
 if(sizeof($resultats)>0)
 {   
   foreach($resultats as $rowcamp)
   { $file = $rowcamp['file'];
     $titre = $rowcamp['titre'];
     $id = $rowcamp['id'];
     $texte = $rowcamp['texte'];
          
       ?>

<!--DEBUT CODE HTML DE LA ZONE A REPETEE -->
          <div class="swiper-slide">
              <div class="banner__image" style="background: url(<?php echo $file; ?>) no-repeat center center;"></div>
              <div class="container">
                <div class="row">
                    <div class="col-xxl-7 col-lg-7 ">
                        <div class="banner__content">
                            <h1 data-animation="fadeInUp" data-delay="1.3s">
                            <?php echo $titre; ?>
                            </h1>
                            <p data-animation="fadeInUp" data-delay="1.6s">
                            <?php echo $texte; ?>
                            </p>
                           <!-- <div class="banner__button d-flex align-items-center flex-wrap">
                            <a href="signin.php" data-animation="fadeInUp" data-delay="1.9s" class="cmn--btn">
                              <span>Read more</span>
                            </a>
                            <a href="signin.php" data-animation="fadeInUp" data-delay="1.9s" class="cmn--btn2">
                              <span>Learn More</span>
                            </a>
                           </div> -->
                        </div>
                    </div>
                </div>
              </div>
          </div>
<!-- FIN CODE HTML DE LA ZONE A REPETEE -->   

<?php
      }
      }            
                      
                       
?>
      </div>
      <div class="arry__button">
        <button class="arry__prev banner__arry-prev"><i class="fa-solid fa-angle-up"></i></button> <br>
        <button class="arry__next banner__arry-next"><i class="fa-solid fa-angle-down"></i></button>
      </div>
  </div>
</section>
<div class="textecentre"><?php 
$type ="image,titre,texte";$sel="01";$tailImg="";include("admin/inc_appel_lien_modifier.php");
?></div>
<!--Banner Section End--> 

<!--About Section Here-->
<section class="about__section pt-130 pb-130 overhid">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-xxl-6 col-xl-6 col-lg-6 wow fadeInLeft" data-wow-duration="3s">
        <div class="about__thumb">
          <img src="assets/img/about/about.jpg" alt="about__image">
        </div>
      </div>
      <div class="col-xxl-6 col-xl-6 col-lg-6 wow fadeInRight" data-wow-duration="5s">
        <div class="about__content">
          <div class="about__header">
            <h6>
              A propos
            </h6>
            <div class="witr_bar_main">
                <div class="witr_bar_inner witr_bar_innerc">
              </div>
            </div>
          </div>
          <h3 class="mb-4">
              L'agriculture pour le développement futur
          </h3>
          <p>
          Tout au long de l’histoire de l’humanité, notre relation avec le sol a affecté notre capacité à cultiver et influencé le succès des civilisations. Cette relation entre les humains, la terre et les sources de nourriture affirme que le sol est le fondement de l’agriculture.
          </p>
          <ul class="check__list mt-4">
            <li class="list d-flex align-items-center mb-2">
                <i class="fa-solid fa-check"></i>
                <p>L'agriculture est le fondement de notre sécurité alimentaire et de notre survie, fournissant les aliments de base nécessaires à notre alimentation quotidienne.</p>
            </li>
            <li class="list d-flex align-items-center mb-2">
                <i class="fa-solid fa-check"></i>
                <p>L'agriculture joue un rôle crucial dans la création d'emplois, le renforcement des infrastructures locales et la stimulation de l'économie rurale, ce qui favorise le développement durable et la résilience des communautés.</p>
            </li>
            <li class="list d-flex align-items-center">
               <i class="fa-solid fa-check"></i>
                <p>L'innovation et la modernisation de l'agriculture permettent d'augmenter la productivité, de mieux utiliser les ressources naturelles et de répondre aux défis environnementaux pour assurer un développement durable.</p>
            </li>
          </ul>
          <div class="profile__item d-flex align-items-center mt-5 wow fadeInUp" data-wow-duration="6s">
            <div class="profile d-flex align-items-center">
                    <?php 
                      $sql01 = $cdr->query("SELECT * FROM users WHERE role = 'Formateur'");
                      $result01 = $sql01->fetch(PDO::FETCH_ASSOC);
                    ?>
                <div class="profile__thumb">
                    <img src="<?= $result01['photo'] ?>" alt="profile__image">
                </div>
                <div class="text">
                    <p>Formateur</p>
                    <h6><?= $result01['nom']." ".$result01['prenom'] ?></h6>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--About Section End-->

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


<!--Agriculture Section Here-->
<section class="agriculture__section overhid">
  <div class="container">
    <div class="content center wow fadeInDown" data-wow-duration="3s">
      <h2>
      L'agriculture est importante pour l'avenir
      </h2>
      <a href="#0" class="cmn--btn wow fadeInUp" data-wow-duration="3s">En savoir plus</a>
    </div>
  </div>
</section>
<!--Agriculture Section End-->

<!--Faq Section Here-->
<section class="faq__section overhid pt-130 pb-130">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-xxl-6 col-xl-6 col-lg-6 wow fadeInLeft" data-wow-duration="3s">
        <div class="faq__thumb">
          <img src="assets/img/faq/faq1.jpg" alt="faq__image">
          <div class="dot">
            <img src="assets/img/dot/dot2.png" alt="dot">
          </div>
          <div class="dot2">
            <img src="assets/img/dot/dot.png" alt="dot">
          </div>
        </div>
      </div>
      <div class="col-xxl-6 col-xl-6 col-lg-6">
        <div class="faq__header mb-30 wow fadeInDown" data-wow-delay="0.3s">
          <h6>faq</h6>
          <div class="witr_bar_main">
            <div class="witr_bar_inner witr_bar_innerc">
          </div>
          <h2>Quelques questions et réponses</h2>
        </div>
        </div>
        <div class="accordion__wrap mb-5">
          <div class="accordion" id="accordionExample">
             <!--Accordion items-->
             <div class="accordion-item wow fadeInRight" data-wow-delay="0.3s">
               <h2 class="accordion-header" id="headingOne">
                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                 Quelle est l'importance de l'agriculture dans l'économie béninoise ?
                 </button>
               </h2>
               <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                 <div class="accordion-body">
                   <p>
                   L'agriculture joue un rôle crucial dans l'économie du Bénin. Elle représente environ 32% du PIB et emploie près de 70% de la population active. Les principales cultures comprennent le coton, le maïs, le manioc, le riz, et l'ananas. Le coton, en particulier, est une culture d'exportation majeure, contribuant significativement aux revenus en devises étrangères du pays.
                   </p>
                 </div>
               </div>
             </div>
             <!--Accordion items-->
             <div class="accordion-item wow fadeInRight" data-wow-delay="0.5s">
               <h2 class="accordion-header" id="headingTwo">
                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                 Quels sont les principaux défis auxquels les agriculteurs béninois sont confrontés ?
                 </button>
               </h2>
               <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                 <div class="accordion-body">
                   <p>
                   Les agriculteurs béninois font face à plusieurs défis, notamment l'accès limité au financement, les infrastructures inadéquates, la faible productivité des terres, les impacts du changement climatique, et l'accès restreint aux marchés. De plus, il existe des problèmes liés à l'insuffisance des services de vulgarisation agricole et à la gestion inefficace des ressources en eau.
                   </p>
                 </div>
               </div>
             </div>
             <!--Accordion items-->
             <div class="accordion-item wow fadeInRight" data-wow-delay="0.7s">
               <h2 class="accordion-header" id="headingThree">
                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                 Quels sont les conseils pour une gestion efficace de l'eau en agriculture ?
                 </button>
               </h2>
               <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                 <div class="accordion-body">
                   <p>
                   Pour une gestion efficace de l'eau en agriculture, les agriculteurs peuvent adopter plusieurs stratégies. L'irrigation goutte-à-goutte est une méthode efficace qui minimise les pertes d'eau en appliquant l'eau directement aux racines des plantes. L'utilisation de paillis organiques ou synthétiques aide à réduire l'évaporation de l'eau du sol. La collecte des eaux de pluie à travers des systèmes de réservoirs ou de bassins permet de stocker l'eau pour une utilisation future pendant les périodes sèches. De plus, la sélection de variétés de cultures résistantes à la sécheresse et la mise en œuvre de pratiques de conservation de l'eau, comme le labour minimal, contribuent également à une utilisation plus durable et efficiente de l'eau en agriculture.
                   </p>
                 </div>
               </div>
             </div>
             <!--Accordion items-->
             <div class="accordion-item wow fadeInRight" data-wow-delay="0.3s">
                <h2 class="accordion-header" id="headingThree4">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree">
                  Comment améliorer la fertilité du sol de manière naturelle ?
                  </button>
                </h2>
                <div id="collapseThree4" class="accordion-collapse collapse" aria-labelledby="headingThree4" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                    Pour améliorer la fertilité du sol de manière naturelle, les agriculteurs peuvent utiliser des techniques comme le compostage, la rotation des cultures, et l'utilisation de cultures de couverture. Le compostage ajoute des matières organiques riches en nutriments au sol, améliorant ainsi sa structure et sa capacité à retenir l'eau. La rotation des cultures aide à prévenir l'épuisement des nutriments spécifiques et à réduire les maladies et les ravageurs. Les cultures de couverture, telles que le trèfle ou la luzerne, peuvent enrichir le sol en azote et protéger contre l'érosion. L'intégration de ces pratiques dans la gestion des sols contribue à une agriculture plus durable et productive.
                    </p>
                  </div>
                </div>
              </div>
             <!--Accordion items-->
             <div class="accordion-item wow fadeInRight" data-wow-delay="0.5s">
              <h2 class="accordion-header" id="headingThree5">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree">
                  Que faut-il faire pour augmenter la productivité agricole tout en préservant l'environnement ?
                  </button>
               </h2>
              <div id="collapseThree5" class="accordion-collapse collapse" aria-labelledby="headingThree5" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                      <p>
                      Pour augmenter la productivité agricole tout en préservant l'environnement, il est crucial d'adopter des pratiques durables. Cela inclut l'intégration d'arbres dans les systèmes agricoles (agroforesterie) pour améliorer la biodiversité et prévenir l'érosion, et l'utilisation d'engrais organiques tout en appliquant les engrais chimiques de manière ciblée pour éviter la pollution. La conservation des sols via des techniques comme le labour minimal et les cultures de couverture, ainsi que la diversification des cultures et la rotation pour réduire les maladies et ravageurs, sont également importantes. Utiliser des systèmes d'irrigation efficaces, comme l'irrigation goutte-à-goutte, aide à économiser l'eau et prévenir la salinisation. Enfin, l'adoption de technologies modernes, telles que les capteurs de sol et les drones, ainsi que les applications mobiles pour accéder à des informations et conseils en temps réel, sont essentielles pour une agriculture durable et productive.
                      </p>
                  </div>
              </div>
             </div>
             <!--Accordion items-->
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.7s">
                  <h2 class="accordion-header" id="headingThree6">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree6" aria-expanded="false" aria-controls="collapseThree">
                      Quelles stratégies faut-il adopter pour contrôler les ravageurs des cultures de manière écologique et efficace ?
                      </button>
                  </h2>
                  <div id="collapseThree6" class="accordion-collapse collapse" aria-labelledby="headingThree6" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                          <p>
                          Pour contrôler les ravageurs des cultures de manière écologique et efficace, privilégiez d'abord la prévention en favorisant la biodiversité sur votre exploitation. Utilisez des techniques de rotation des cultures pour perturber les cycles de vie des ravageurs et minimisez l'utilisation de pesticides chimiques. Encouragez la présence de prédateurs naturels en aménageant des habitats favorables sur votre exploitation. Utilisez également des méthodes physiques telles que le piégeage et la barrière physique pour limiter l'infestation. Si nécessaire, choisissez des produits biologiques ou des pesticides naturels en dernier recours, en veillant à les utiliser de manière ciblée et en respectant les bonnes pratiques d'application pour minimiser les impacts sur l'environnement et la santé humaine.
                          </p>
                      </div>
                  </div>
              </div>
             <!--Accordion items-->
           </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Faq Section End-->

<!--Process Section Here-->
<section class="process__section section__bg overhid pt-130 pb-130">
  <div class="container">
    <div class="title__content center wow fadeInUp" data-wow-duration="1.3s">
      <h6>Processus de Travail</h6>
      <div class="witr_bar_main">
        <div class="witr_bar_inner witr_bar_innerc center">
      </div>
       <h3>Étapes du processus agricole</h3>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="2s">
        <div class="process__items">
          <div class="process__thumb">
            <img src="assets/img/process/p1.jpg" alt="process__image">
          </div>
          <div class="process__content center">
            <h6>
            Plannification
            </h6>
            <p>
            Cette étape implique une analyse approfondie des facteurs climatiques, du sol, des exigences du marché et des objectifs de l'exploitation.
            </p>
          </div>
        </div>
      </div>
      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="4s">
        <div class="process__items">
          <div class="process__thumb">
            <img src="assets/img/process/p2.jpg" alt="process__image">
          </div>
          <div class="process__content center">
            <h6>
            CROISSANCE
            </h6>
            <p>
            Cette étape exige des soins et une surveillance constants pour optimiser le rendement et la qualité des produits.
            </p>
          </div>
        </div>
      </div>
      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="6s">
        <div class="process__items">
          <div class="process__thumb">
            <img src="assets/img/process/p3.jpg" alt="process__image">
          </div>
          <div class="process__content center">
            <h6>
            Récolte
            </h6>
            <p>
            Cette étape de récolte marque la fin de la phase de croissance et le début de la transformation des produits agricoles.
            </p>
          </div>
        </div>
      </div>
      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="8s">
        <div class="process__items">
          <div class="process__thumb">
            <img src="assets/img/process/p4.jpg" alt="process__image">
          </div>
          <div class="process__content center">
            <h6>
            Traitement
            </h6>
            <p>
            Le traitement post-récolte vise à transformer les produits agricoles bruts en produits finis prêts à la consommation ou à la commercialisation.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Process Section End-->


<!--Testimonial Section Here-->
<section class="testimonial__section overhid pt-130 pb-130">
  <div class="container">
    <div class="title__content center wow fadeInUp" data-wow-duration="1.3s">
      <h6>avis des utilisateurs</h6>
      <div class="witr_bar_main">
        <div class="witr_bar_inner witr_bar_innerc center">
      </div>
       <h3>ce que disent les utilisateurs</h3>
      </div>
    </div>
      <div class="swiper testimonial__wrapper">
          <div class="swiper-wrapper">
            <?php 
                // Sélection de tous les enregistrements de la table
                $requete022 = $cdr->query("SELECT * FROM avis, users WHERE avis.iduser=users.iduser");
                                            
                // Récupération des résultats sous forme de tableau associatif
                $resultats022 = $requete022->fetchAll(PDO::FETCH_ASSOC);
                if (isset($resultats022) && count($resultats022) > 0){                
                // Affichage des données
                foreach ($resultats022 as $row022) {
                  $note2 = htmlspecialchars($row022['note']);
                    switch ($note2) {
                        case '1':
                            $dispnote = "<li><i class='fas fa-star'></i></li>";
                            break;
                        case '2':
                            $dispnote = "<li><i class='fas fa-star'></i></li><li><i class='fas fa-star'></i></li>";
                            break;
                        case '3':
                            $dispnote = "<li><i class='fas fa-star'></i></li><li><i class='fas fa-star'></i></li><li><i class='fas fa-star'></i></li>";
                            break;
                        case '4':
                            $dispnote = "<li><i class='fas fa-star'></i></li><li><i class='fas fa-star'></i></li><li><i class='fas fa-star'></i></li><li><i class='fas fa-star'></i></li>";
                            break;
                        case '5':
                            $dispnote = "<li><i class='fas fa-star'></i></li><li><i class='fas fa-star'></i></li><li><i class='fas fa-star'></i></li><li><i class='fas fa-star'></i></li><li><i class='fas fa-star'></i></li>";
                            break;
                        
                        default:
                            break;
                    }
            ?>
              <div class="swiper-slide">
                  <div class="testi__items">
                      <div class="testi__wrap">
                          <div class="testi__thumb">
                              <img width="125px" height="125px" src="<?= $row022['photo'] ?>" alt="testi__image">
                          </div>
                          <div class="content">
                              <h6>
                              <?= $row022['prenom'] ?>
                              </h6>
                              <span><?= $row022['role'] ?></span>
                          </div>
                      </div>
                      <p>
                      <?= $row022['contenu'] ?>
                      </p>
                      <ul>
                        <?= $dispnote ?>
                      </ul>
                  </div>
              </div>
            <?php 
                }
              }else {
                ?>
                <div class="container">
                  <div class="row">
                      <p class="alert alert-warning text-center">Aucun avis enregistré pour le moment.</p>
                  </div>
                </div>
                <?php 
              }
            ?>
          </div>
          <div class="swiper-dot text-center pt-5">
              <div class="dot"></div>
          </div>
      </div>
  </div>
</section>
<!--Testimonial Section End-->

<!--Contact Info Section Here-->
<div class="contact__info__section pt-130 pb-130 section__bg overhid">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-7 wow fadeInLeft" data-wow-delay="0.3s">
        <div class="contact__right">
          <div class="info__header">
            <h6>Vous avez des questions ?</h6>
            <div class="witr_bar_main">
              <div class="witr_bar_inner witr_bar_innerc">
            </div>
            </div>
            <h3>
              Envoyer nous un message
            </h3>
          </div>
          <form action="send_email.php" id="contact-form" method="POST">
             <div class="row g-4">
                <div class="col-lg-12">
                   <div class="form__clt">
                      <input type="text" name="name" id="name" placeholder="Votre Name..." required>
                   </div>
                </div>
                <div class="col-lg-6">
                   <div class="form__clt">
                      <input type="email" name="email" id="email" placeholder=" Votre Email..." required>
                   </div>
                </div>
                <div class="col-lg-6">
                   <div class="form__clt">
                      <input type="text" name="telephone" id="number" placeholder="Votre Numéro..." required>
                   </div>
                </div>
                <div class="col-lg-12">
                   <div class="form__clt__big">
                      <textarea name="message" id="message" placeholder="Message..." required></textarea> 
                   </div>
                </div>
                <div class="col-lg-4">
                    <button type="submit" class="cmn--btn">
                      <i class="fa-solid fa-paper-plane"></i> Envoyer
                     </button>
                </div>
             </div>
             
          </form>
          <p class="form-message"></p>
       </div>
      </div>
      <div class="col-lg-5 wow fadeInRight" data-wow-delay="0.3s">
        <div class="left__info">
          <div class="left__header">
            <h3>Contact Information</h3>
          </div>
          <div class="info__wrap d-flex align-items-center mt-5">
            <div class="icon">
              <i class="fa-solid fa-phone"></i>
            </div>
            <div class="content">
              <h6>
                Téléphone
              </h6>
              <p>
                +229 54722596
              </p>
            </div>
          </div>
          <div class="info__wrap d-flex align-items-center mt-4">
            <div class="icon">
              <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="content">
              <h6>
                Email
              </h6>
              <p>
                agri@gmail.com
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Contact Info Section End-->

<!--Blog Section Here-->
<section class="blog__section overhid pt-130 pb-130">
  <div class="container">
    <div class="title__content center wow fadeInUp" data-wow-duration="1.3s">
      <h6>Nos Formations</h6>
      <div class="witr_bar_main">
        <div class="witr_bar_inner witr_bar_innerc center">
      </div>
       <h3>Formations disponibles</h3>
      </div>
    </div>
      <div class="row g-4">
          <?php
            // Sélection de tous les enregistrements de la table
            $requete = $cdr->query("SELECT * FROM formations WHERE dateheure > NOW()");
                                            
            // Récupération des résultats sous forme de tableau associatif
            $resultats2 = $requete->fetchAll(PDO::FETCH_ASSOC);
            if ($requete->rowCount() > 0) {
            // Affichage des données
            foreach ($resultats2 as $row2) {
              $id1 = $row2['iduser'];
              // Sélection de tous les enregistrements de la table
            $requete01 = $cdr->query("SELECT * FROM users WHERE iduser='$id1'");
                                            
            // Récupération des résultats sous forme de tableau associatif
            $resultat01 = $requete01->fetch(PDO::FETCH_ASSOC);
              ?>
          <div class="col-xl-4 col-md-6 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s">
              <div class="blog__items">
                  <div class="blog__thumb">
                      <img src="assets/img/blog/blog1.jpg" alt="blog__image">
                      <div class="content">
                          <h5><?= $row2['titre']?></h5>
                          <div class="info">
                              <strong>Publiée par:</strong>
                              <a href="#0"><?= $resultat01['role'] ?></a><br>
                              <strong>Date et heure Formation:</strong>
                              <span><?= $row2['dateheure'] ?></span>
                          </div>
                      </div>
                  </div>
                  <div class="content__up">
                      <h5>
                          <a href="formation-details.php?titre=<?= $row2['titre'] ?>">
                            <?= $row2['titre']?>
                          </a>
                      </h5>
                      <p>
                      <?= $row2['description'] ?>
                      </p>
                      <a href="formation-details.php?titre=<?= $row2['titre'] ?>" class="cmn--btn">Details de la formation<i class="fa-solid fa-arrow-right"></i></a>
                  </div>
              </div>
          </div>    
              <?php 
            }
          }else {
            echo "<div class='alert alert-info text-center'>Aucune formation disponible</div>";
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