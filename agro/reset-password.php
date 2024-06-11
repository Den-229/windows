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
  <title>Réinitialisation du mot de passe</title>
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

    <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $token = $_POST['token'];
            if (isset($_POST['reset']) && isset($token)) {
               $password = $_POST['password'];
               $email = $_POST['email'];
                $confpassword = $_POST['confpassword'];
                if ($password == $confpassword) {
                    // Hacher le nouveau mot de passe
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                    $stmt = $cdr->prepare("UPDATE users SET mdp = :mdp WHERE email = :email");
                    $stmt->bindParam(":mdp", $hashed_password);
                    $stmt->bindParam(":email", $email);
                    $stmt->execute();

                    echo "<div class='container mt-5'><div class='text-center alert alert-success'>Votre mot de passe a été réinitialisé avec succès</div></div>";
                }else {
                    echo "<div class='container mt-5'><div class='text-center alert alert-danger'>Les mots de passe ne sont pas identiques</div></div>";
                }
            }
        }
    ?>
    
  <div class="container">
     <div class="row justify-content-center align-items-center">
        <div class="col-lg-6 wow bounceInLeft"data-wow-duration="3s">
           <div class="signup__boxes round16">
              <h3 class="title mb-3">
                Réinitialisation
              </h3>
              <form action="" method="post" class="write__review">
              <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>">
              <input type="hidden" name="email" value="<?php echo $_GET['e']; ?>">
                 <div class="row g-4 ">
                    <div class="col-lg-12">
                       <div class="frm__grp">
                          <label for="pas" class="fz-18 fw-500 inter title mb-3">Entrez un mot de passe</label>
                          <div class="d-flex" style="background: rgba(26, 77, 190, 0.03);border-radius: 100px;">
                          <input type="password" id="pas1" name="password" placeholder="Entrez un mot de passe...">
                            <button id="btp1" style="background: transparent;">
														    <i id="vu1" class="fa-regular fa-eye-slash"></i>
                              </button>
                            </div>
                       </div>
                    </div>
                    <div class="col-lg-12">
                       <div class="frm__grp">
                          <label for="pas" class="fz-18 fw-500 inter title mb-3">Confirmer le mot de passe</label>
                          <div class="d-flex" style="background: rgba(26, 77, 190, 0.03);border-radius: 100px;">
                          <input type="password" id="pas2" name="confpassword" placeholder="Confirmer le mot de passe...">
													<button id="btp2" style="background: transparent;">
														<i id="vu2" class="fa-regular fa-eye-slash"></i>
                          </button>
                          </div>
                       </div>
                    </div>
                    <div class="col-lg-6">
                       <div class="frm__grp">
                          <button type="submit" class="cmn--btn" name="reset">
                             <span>
                             Réinitialiser le mot de passe
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
        document.getElementById("btp1").addEventListener('click', function(e){
          e.preventDefault();
          togglePasswordVisibility(1);
        })
        document.getElementById("btp2").addEventListener('click', function(e){
          e.preventDefault();
          togglePasswordVisibility(2);
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