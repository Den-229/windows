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
  <title>Argiculture - Farmer, Agriculture, Organic Farm & Organic Food HTML Template</title>
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
<?php 
    include "header1.php";
    include "header2.php";
?>

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

<!--Banner Section Here--> 
<section class="banner__section overhid">
  <div class="swiper banner__slider">
      <div class="swiper-wrapper">
          <div class="swiper-slide">
              <div class="banner__image"></div>
              <div class="container">
                <div class="row">
                    <div class="col-xxl-7 col-lg-7 ">
                        <div class="banner__content">
                            <h1 data-animation="fadeInUp" data-delay="1.3s">
                              Always Greet Farmers For The Food We Eat
                            </h1>
                            <p data-animation="fadeInUp" data-delay="1.6s">
                              Sell globally in minutes with localized currencies languages, and experie in every market. only a variety of vaping products
                            </p>
                           <div class="banner__button d-flex align-items-center flex-wrap">
                            <a href="signin.php" data-animation="fadeInUp" data-delay="1.9s" class="cmn--btn">
                              <span>Read more</span>
                            </a>
                            <a href="signin.php" data-animation="fadeInUp" data-delay="1.9s" class="cmn--btn2">
                              <span>lern More</span>
                            </a>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="banner__image imagethree"></div>
            <div class="container">
              <div class="row">
                  <div class="col-xxl-7 col-lg-7 ">
                      <div class="banner__content">
                          <h1 data-animation="fadeInUp" data-delay="1.3s">
                            Always Greet Farmers For The Food We Eat
                          </h1>
                          <p data-animation="fadeInUp" data-delay="1.6s">
                            Sell globally in minutes with localized currencies languages, and experie in every market. only a variety of vaping products
                          </p>
                         <div class="banner__button d-flex align-items-center flex-wrap">
                          <a href="signin.php" data-animation="fadeInUp" data-delay="1.9s" class="cmn--btn">
                            <span>Read more</span>
                          </a>
                          <a href="signin.php" data-animation="fadeInUp" data-delay="1.9s" class="cmn--btn2">
                            <span>lern More</span>
                          </a>
                         </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="banner__image imagetwo"></div>
          <div class="container">
            <div class="row">
                <div class="col-xxl-7 col-lg-7 ">
                    <div class="banner__content">
                        <h1 data-animation="fadeInUp" data-delay="1.3s">
                          Always Greet Farmers For The Food We Eat
                        </h1>
                        <p data-animation="fadeInUp" data-delay="1.6s">
                          Agriculture is the art and science of cultivating the soil, growing crops, and raising livestock. It includes the preparation of plant and animal products for people to use and their distribution to markets.
                        </p>
                       <div class="banner__button d-flex align-items-center flex-wrap">
                        <a href="signin.php" data-animation="fadeInUp" data-delay="1.9s" class="cmn--btn">
                          <span>Read more</span>
                        </a>
                        <a href="signin.php" data-animation="fadeInUp" data-delay="1.9s" class="cmn--btn2">
                          <span>lern More</span>
                        </a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      </div>
      <div class="arry__button">
        <button class="arry__prev banner__arry-prev"><i class="fa-solid fa-angle-up"></i></button> <br>
        <button class="arry__next banner__arry-next"><i class="fa-solid fa-angle-down"></i></button>
      </div>
  </div>
</section>
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
    <div class="header__left mb-60">
      <div class="row g-4">
        <div class="col-lg-5 wow fadeInLeft" data-wow-duration="3s">
          <div class="header__content">
            <h6>What we do</h6>
            <div class="witr_bar_main">
              <div class="witr_bar_inner witr_bar_innerc">
            </div>
            </div>
            <h3>
              Currently we are
              selling organic food
            </h3>
          </div>
        </div>
        <div class="col-lg-6 offset-lg-1 wow fadeInRight" data-wow-duration="5s">
          <div class="header__right">
            <p class="mb-4">
              agricultural sciences, sciences dealing with food and fibre production and processing. They include the technologies of soil cultivation, crop cultivation and harvesting, animal production, and the processing of plant and animal products for human consumption and use.
            </p>
            <a href="service.php" class="cmn--btn">
              discover more
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="service__wrapper owl-carousel owl-theme">
      <div class="service__items">
        <div class="service__thumb">
          <img src="assets/img/service/s1.jpg" alt="service__image">
        </div>
        <div class="service__content">
          <h6>
            <a href="service-details.php">
              Agricultural Products
            </a>
          </h6>
          <p>agricultural sciences, sciences dealing with food and fibre production and processing.</p>
        </div>
      </div>
      <div class="service__items">
        <div class="service__thumb">
          <img src="assets/img/service/s2.jpg" alt="service__image">
        </div>
        <div class="service__content">
          <h6>
            <a href="service-details.php">
              Fresh Vegetables
            </a>
          </h6>
          <p>agricultural sciences, sciences dealing with food and fibre production and processing.</p>
        </div>
      </div>
      <div class="service__items">
        <div class="service__thumb">
          <img src="assets/img/service/s4.jpg" alt="service__image">
        </div>
        <div class="service__content">
          <h6>
            <a href="service-details.php">
              Sweet Exotic Fruits
            </a>
          </h6>
          <p>agricultural sciences, sciences dealing with food and fibre production and processing.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Service Section End-->

<!--Project Section Here-->
<!-- <section class="project__section overhid pt-130 pb-130">
  <div class="container">
    <div class="title__content center wow fadeInUp" data-wow-duration="1.3s">
      <h6>closed projects</h6>
      <div class="witr_bar_main">
        <div class="witr_bar_inner witr_bar_innerc center">
      </div>
       <h3>Latest Projects List</h3>
      </div>
    </div>
    <div class="swiper project__wrapper">
      <div class="swiper-wrapper">
          <div class="swiper-slide">
              <div class="project__items">
                  <div class="project__thumb">
                      <img src="assets/img/project/p1.jpg" alt="project__image">  
                      <div class="project__content d-flex align-items-center justify-content-between">
                        <h6>
                            agriculture products
                        </h6>
                        <a href="project-details.php" class="icon">
                          <i class="fa-solid fa-arrow-right"></i>
                        </a>
                      </div> 
                  </div>
              </div>
          </div>
          <div class="swiper-slide">
            <div class="project__items">
                <div class="project__thumb">
                    <img src="assets/img/project/p2.jpg" alt="project__image">  
                    <div class="project__content d-flex align-items-center justify-content-between">
                      <h6>
                          Harvest Innovation
                      </h6>
                      <a href="project-details.php" class="icon">
                        <i class="fa-solid fa-arrow-right"></i>
                      </a>
                    </div> 
                </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project__items">
                <div class="project__thumb">
                    <img src="assets/img/project/p3.jpg" alt="project__image">  
                    <div class="project__content d-flex align-items-center justify-content-between">
                      <h6>
                        Leverage Agile
                      </h6>
                      <a href="project-details.php" class="icon">
                        <i class="fa-solid fa-arrow-right"></i>
                      </a>
                    </div> 
                </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project__items">
                <div class="project__thumb">
                    <img src="assets/img/project/p1.jpg" alt="project__image">  
                    <div class="project__content d-flex align-items-center justify-content-between">
                      <h6>
                          agriculture products
                      </h6>
                      <a href="project-details.php" class="icon">
                        <i class="fa-solid fa-arrow-right"></i>
                      </a>
                    </div> 
                </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project__items">
                <div class="project__thumb">
                    <img src="assets/img/project/p2.jpg" alt="project__image">  
                    <div class="project__content d-flex align-items-center justify-content-between">
                      <h6>
                          Harvest Innovation
                      </h6>
                      <a href="project-details.php" class="icon">
                        <i class="fa-solid fa-arrow-right"></i>
                      </a>
                    </div> 
                </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project__items">
                <div class="project__thumb">
                    <img src="assets/img/project/p3.jpg" alt="project__image">  
                    <div class="project__content d-flex align-items-center justify-content-between">
                      <h6>
                        Leverage Agile
                      </h6>
                      <a href="project-details.php" class="icon">
                        <i class="fa-solid fa-arrow-right"></i>
                      </a>
                    </div> 
                </div>
            </div>
          </div>
        </div>
      <div class="swiper-dot text-center pt-5">
        <div class="dot"></div>
      </div>
    </div>
  </div>
</section> -->
<!--Project Section End-->

<!--Agriculture Section Here-->
<section class="agriculture__section overhid">
  <div class="container">
    <div class="content center wow fadeInDown" data-wow-duration="3s">
      <h2>
        L'agriculture est importante pour l'avenir
      </h2>
      <a href="" class="cmn--btn wow fadeInUp" data-wow-duration="3s">En savoir plus</a>
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
          <img src="assets/img/faq/faq.jpg" alt="faq__image">
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
          <h2>Avez-vous des questions s'il vous plaît ?</h2>
        </div>
        </div>
        <div class="accordion__wrap mb-5">
          <div class="accordion" id="accordionExample">
             <!--Accordion items-->
             <div class="accordion-item wow fadeInRight" data-wow-delay="0.3s">
               <h2 class="accordion-header" id="headingOne">
                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  What do you do mean by agriculture?
                 </button>
               </h2>
               <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                 <div class="accordion-body">
                   <p>
                    Agriculture is the art and science of cultivating the soil, growing crops, and raising livestock. It includes the preparation of plant and animal products for people to use and their distribution to markets
                   </p>
                 </div>
               </div>
             </div>
             <!--Accordion items-->
             <div class="accordion-item wow fadeInRight" data-wow-delay="0.5s">
               <h2 class="accordion-header" id="headingTwo">
                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Which is best for agriculture?
                 </button>
               </h2>
               <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                 <div class="accordion-body">
                   <p>
                    Agriculture is the art and science of cultivating the soil, growing crops, and raising livestock. It includes the preparation of plant and animal products for people to use and their distribution to markets
                   </p>
                 </div>
               </div>
             </div>
             <!--Accordion items-->
             <div class="accordion-item wow fadeInRight" data-wow-delay="0.7s">
               <h2 class="accordion-header" id="headingThree">
                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  What is Bangladesh agricultural income?
                 </button>
               </h2>
               <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                 <div class="accordion-body">
                   <p>
                    Agriculture is the art and science of cultivating the soil, growing crops, and raising livestock. It includes the preparation of plant and animal products for people to use and their distribution to markets
                   </p>
                 </div>
               </div>
             </div>
             <!--Accordion items-->
             <div class="accordion-item wow fadeInRight" data-wow-delay="0.3s">
                <h2 class="accordion-header" id="headingThree4">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree">
                    Which is best for agriculture?
                  </button>
                </h2>
                <div id="collapseThree4" class="accordion-collapse collapse" aria-labelledby="headingThree4" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Agriculture is the art and science of cultivating the soil, growing crops, and raising livestock. It includes the preparation of plant and animal products for people to use and their distribution to markets
                    </p>
                  </div>
                </div>
              </div>
             <!--Accordion items-->
             <div class="accordion-item wow fadeInRight" data-wow-delay="0.5s">
              <h2 class="accordion-header" id="headingThree5">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree">
                    What are agricultural components?
                  </button>
               </h2>
              <div id="collapseThree5" class="accordion-collapse collapse" aria-labelledby="headingThree5" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                      <p>
                        Agriculture is the art and science of cultivating the soil, growing crops, and raising livestock. It includes the preparation of plant and animal products for people to use and their distribution to markets
                      </p>
                  </div>
              </div>
             </div>
             <!--Accordion items-->
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.7s">
                  <h2 class="accordion-header" id="headingThree6">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree6" aria-expanded="false" aria-controls="collapseThree">
                        Why is it called agriculture?
                      </button>
                  </h2>
                  <div id="collapseThree6" class="accordion-collapse collapse" aria-labelledby="headingThree6" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                          <p>
                            Agriculture is the art and science of cultivating the soil, growing crops, and raising livestock. It includes the preparation of plant and animal products for people to use and their distribution to markets
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
              Agriculture is the art and science of cultivating the soil growing.
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
              Agriculture is the art and science of cultivating the soil growing.
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
              Agriculture is the art and science of cultivating the soil growing.
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
              Agriculture is the art and science of cultivating the soil growing.
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
      <h6>avis des clients</h6>
      <div class="witr_bar_main">
        <div class="witr_bar_inner witr_bar_innerc center">
      </div>
       <h3>ce que disent les clients</h3>
      </div>
    </div>
      <div class="swiper testimonial__wrapper">
          <div class="swiper-wrapper">
              <div class="swiper-slide">
                  <div class="testi__items">
                      <div class="testi__wrap">
                          <div class="testi__thumb">
                              <img src="assets/img/testimonial/client1.jpg" alt="testi__image">
                          </div>
                          <div class="content">
                              <h6>
                                  James Lucas
                              </h6>
                              <span>client</span>
                          </div>
                      </div>
                      <p>
                          Large clean and spacious facility that has all the necessary equipment for their fitness routine.
                      </p>
                      <ul>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                      </ul>
                  </div>
              </div>
              <div class="swiper-slide">
                  <div class="testi__items">
                      <div class="testi__wrap">
                          <div class="testi__thumb">
                              <img src="assets/img/testimonial/client2.jpg" alt="testi__image">
                          </div>
                          <div class="content">
                              <h6>
                                  Ava Amelia
                              </h6>
                              <span>client</span>
                          </div>
                      </div>
                      <p>
                          Large clean and spacious facility that has all the necessary equipment for their fitness routine.
                      </p>
                      <ul>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                      </ul>
                  </div>
              </div>
              <div class="swiper-slide">
                  <div class="testi__items">
                      <div class="testi__wrap">
                          <div class="testi__thumb">
                              <img src="assets/img/testimonial/client3.jpg" alt="testi__image">
                          </div>
                          <div class="content">
                              <h6>
                                  James Henry
                              </h6>
                              <span>client</span>
                          </div>
                      </div>
                      <p>
                          Large clean and spacious facility that has all the necessary equipment for their fitness routine.
                      </p>
                      <ul>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                      </ul>
                  </div>
              </div>
              <div class="swiper-slide">
                <div class="testi__items">
                    <div class="testi__wrap">
                        <div class="testi__thumb">
                            <img src="assets/img/testimonial/client1.jpg" alt="testi__image">
                        </div>
                        <div class="content">
                            <h6>
                                James Lucas
                            </h6>
                            <span>client</span>
                        </div>
                    </div>
                    <p>
                        Large clean and spacious facility that has all the necessary equipment for their fitness routine.
                    </p>
                    <ul>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                    </ul>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="testi__items">
                    <div class="testi__wrap">
                        <div class="testi__thumb">
                            <img src="assets/img/testimonial/client2.jpg" alt="testi__image">
                        </div>
                        <div class="content">
                            <h6>
                                Ava Amelia
                            </h6>
                            <span>client</span>
                        </div>
                    </div>
                    <p>
                        Large clean and spacious facility that has all the necessary equipment for their fitness routine.
                    </p>
                    <ul>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                    </ul>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="testi__items">
                    <div class="testi__wrap">
                        <div class="testi__thumb">
                            <img src="assets/img/testimonial/client3.jpg" alt="testi__image">
                        </div>
                        <div class="content">
                            <h6>
                                James Henry
                            </h6>
                            <span>client</span>
                        </div>
                    </div>
                    <p>
                        Large clean and spacious facility that has all the necessary equipment for their fitness routine.
                    </p>
                    <ul>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                    </ul>
                </div>
            </div>
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
            <h6>have Question?</h6>
            <div class="witr_bar_main">
              <div class="witr_bar_inner witr_bar_innerc">
            </div>
            </div>
            <h3>
              Send us a Massage
            </h3>
          </div>
          <form action="contact.php" id="contact-form" method="POST">
             <div class="row g-4">
                <div class="col-lg-12">
                   <div class="form__clt">
                      <input type="text" name="name" id="name" placeholder="Your Name...">
                   </div>
                </div>
                <div class="col-lg-6">
                   <div class="form__clt">
                      <input type="text" name="email" id="email" placeholder=" Your Email...">
                   </div>
                </div>
                <div class="col-lg-6">
                   <div class="form__clt">
                      <input type="text" name="number" id="number" placeholder="Phone Number...">
                   </div>
                </div>
                <div class="col-lg-12">
                   <div class="form__clt__big">
                      <textarea name="message" id="message" placeholder="Message..."></textarea> 
                   </div>
                </div>
                <div class="col-lg-4">
                    <button type="submit" class="cmn--btn">
                      <i class="fa-solid fa-paper-plane"></i> contactez-nous
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
            <p>
              Large clean and spacious facility that has all the necessary equipment for their fitness routine for their fitness routine.
            </p>
          </div>
          <div class="info__wrap d-flex align-items-center mt-5">
            <div class="icon">
              <i class="fa-solid fa-phone"></i>
            </div>
            <div class="content">
              <h6>
                Hotline
              </h6>
              <p>
                +47 232 001
              </p>
            </div>
          </div>
          <div class="info__wrap d-flex align-items-center mt-4">
            <div class="icon">
              <i class="fa-solid fa-location-dot"></i>
            </div>
            <div class="content">
              <h6>
                oue location
              </h6>
              <p>
                Inner Circular Rose Valley Park.
              </p>
            </div>
          </div>
          <div class="info__wrap d-flex align-items-center mt-4">
            <div class="icon">
              <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="content">
              <h6>
                email
              </h6>
              <p>
                example@example.com
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
          <div class="col-xl-4 col-md-6 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s">
              <div class="blog__items">
                  <div class="blog__thumb">
                      <img src="assets/img/blog/blog1.jpg" alt="blog__image">
                      <div class="content">
                          <h5>Exploring in Modern Agriculture</h5>
                          <div class="info">
                              <strong>By:</strong>
                              <a href="#0">Admin</a>
                              <span class="px-1">|</span>
                              <span>20 Aug 2024</span>
                          </div>
                      </div>
                  </div>
                  <div class="content__up">
                      <h5>
                          <a href="blog-details.php">
                            Exploring in Modern Agriculture
                          </a>
                      </h5>
                      <p>
                        Agriculture is the art and science of cultivating the soil, growing crops and raising livestock. It includes the preparation of plant and animal products for people.
                      </p>
                      <a href="blog-details.php" class="cmn--btn">News Details <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
              </div>
          </div>
          <div class="col-xl-4 col-md-6 wow fadeInLeft" data-wow-duration="1.7s" data-wow-delay=".7s">
            <div class="blog__items">
                <div class="blog__thumb">
                    <img src="assets/img/blog/blog2.jpg" alt="blog__image">
                    <div class="content">
                        <h5>The Role of Technology and Sustainable</h5>
                        <div class="info">
                            <strong>By:</strong>
                            <a href="#0">Admin</a>
                            <span class="px-1">|</span>
                            <span>20 Aug 2024</span>
                        </div>
                    </div>
                </div>
                <div class="content__up">
                    <h5>
                        <a href="blog-details.php">
                          The Role of Technology and Sustainable
                        </a>
                    </h5>
                    <p>
                      Agriculture is the art and science of cultivating the soil, growing crops and raising livestock. It includes the preparation of plant and animal products for people.
                    </p>
                    <a href="blog-details.php" class="cmn--btn">News Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
          </div>
        <div class="col-xl-4 col-md-6 wow fadeInLeft" data-wow-duration="1.9s" data-wow-delay=".9s">
          <div class="blog__items">
              <div class="blog__thumb">
                  <img src="assets/img/blog/blog3.jpg" alt="blog__image">
                  <div class="content">
                      <h5>Revolutionizing the Agricultural Industry</h5>
                      <div class="info">
                          <strong>By:</strong>
                          <a href="#0">Admin</a>
                          <span class="px-1">|</span>
                          <span>20 Aug 2024</span>
                      </div>
                  </div>
              </div>
              <div class="content__up">
                  <h5>
                      <a href="blog-details.php">
                        Revolutionizing the Agricultural Industry
                      </a>
                  </h5>
                  <p>
                    Agriculture is the art and science of cultivating the soil, growing crops and raising livestock. It includes the preparation of plant and animal products for people.
                  </p>
                  <a href="blog-details.php" class="cmn--btn">News Details <i class="fa-solid fa-arrow-right"></i></a>
              </div>
          </div>
        </div>
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