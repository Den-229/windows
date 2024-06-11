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
  <title>Connexion | Connectivité des agriculteurs</title>
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
<section class="breadcumd__banner overhid">
  <div class="container">
     <div class="breadcumd__wrapper">
        <h2 class="left__content wow fadeInUp"data-wow-duration="2s">
          Connexion
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
</section>
<!--Breadcumd Section End--> 

<!--Signup Section Here--> 
<section class="signup__section pt-130 pb-130">
  <div class="container">
     <div class="row justify-content-center align-items-center">
        <div class="col-lg-6 wow bounceInLeft"data-wow-duration="3s">
           <div class="signup__boxes round16">
              <h3 class="title mb-3 text-center">
              Connectez-vous
              </h3>
              <p class="fz-16 title fw-400 inter mb-4 text-center">
              Entrez vos infos pour accéder à votre compte.
              </p>
              <?php 
											if ($_SERVER["REQUEST_METHOD"] == "POST") {
												if (isset($_POST['connecter'])) {
													$username = trim(htmlspecialchars($_POST['ID']));
													$password = trim(htmlspecialchars($_POST['password']));
													$hash = password_hash($password, PASSWORD_DEFAULT);
													$sql0 = $cdr->query("SELECT * FROM users WHERE nom='$username' OR email='$username'");
													if ($sql0->rowCount() > 0) {
													$res = $sql0->fetch(PDO::FETCH_ASSOC);
													$userid = $res['iduser'];
													$username1 = $res['nom'];
													$lastname1 = $res['prenom'];
													$email = $res['email'];
													$pass = $res['mdp'];
													$statut = $res['estActif'];
                                       $role0 = $res['role'];
													if (password_verify($password, $pass) && ($username == $username1 || $username == $email)) {
														// header("Location: index.php");
														$_SESSION['log_name'] = $lastname1;
														$_SESSION['log_role'] = $role0;
														$_SESSION['log_id'] = $userid;
														$_SESSION['log_statut'] = $statut;
                                          if (($username == "ADMIN" || $username == "admin@gmail.com") && $password == "admin") {
                                             $_SESSION['log_name'] = $lastname1;
                                             $_SESSION['log_role'] = $role0;
                                             $_SESSION['log_id'] = $userid;
                                             $_SESSION['log_statut'] = $statut;
                                             echo "<script>
                                             window.location.href='dashboard-admin.php';
                                             </script>";
                                          }
														echo "<script>
														window.location.href='index.php';
														</script>";
													}else{
														echo "<div class='alert alert-danger'>Username/Email ou Mot de passe invalide!</div>";
													}
													}else {
														echo "<div class='alert alert-danger'>Username/Email invalide!</div>";
													}
												}
											}
										?>
              <form action="" method="post" class="write__review">
                 <div class="row g-4 ">
                    <div class="col-lg-12">
                       <div class="frm__grp">
                          <label for="enamee" class="fz-18 fw-500 inter title mb-3">Entrez votre email ou votre nom</label>
                          <div class="d-flex" style="background: rgba(26, 77, 190, 0.03);border-radius: 100px;">
                            <button id="btpu" style="background: transparent;">
															<i class="fa-regular fa-user"></i>
														</button>
                          <input type="text" id="enamee" name="ID" placeholder="Entrez votre email ou votre nom...">
                          </div>
                       </div>
                    </div>
                    <div class="col-lg-12">
                       <div class="frm__grp">
                          <label for="pas" class="fz-18 fw-500 inter title mb-3">Entrez Votre Mot de passe</label>
                          <div class="d-flex" style="background: rgba(26, 77, 190, 0.03);border-radius: 100px;">
                          <button id="btpl" style="background: transparent;">
															<i class="fa-solid fa-lock"></i>
                          </button>
                          <input type="password" id="pas0" name="password" placeholder="Entrez votre mot de passe...">
                            <button id="btp0" style="background: transparent;">
														    <i id="vu0" class="fa-regular fa-eye-slash"></i>
                            </button>
                           </div>
                           <a href="reset-password-request.php" class="base fz-14 inter d-flex justify-content-end mt-2">Mot de passe oublié</a>
                       </div>
                    </div>
                    <p class="fz-16 fw-400 title inter">
                       Avez-vous un compte? <a href="sign-up.php" class="base">S'inscrire</a>
                    </p>
                    <div class="col-lg-6">
                       <div class="frm__grp">
                          <button type="submit" class="cmn--btn" name="connecter">
                             <span>
                                Connexion
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

<?php include "footer.php"; ?>

<script>
  document.getElementById("btpu").addEventListener('click', function(e){
          e.preventDefault();
        })
  document.getElementById("btp0").addEventListener('click', function(e){
          e.preventDefault();
          togglePasswordVisibility(0);
        })
  document.getElementById("btpl").addEventListener('click', function(e){
          e.preventDefault();
        })
</script>
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