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
  <title>Inscription | Connectivité des agriculteurs</title>
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
          Inscription
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
          Inscription
         </li>
        </ul>
     </div>
  </div>
</section>
<!--Breadcumd Section End-->
                    <?php 
											if ($_SERVER["REQUEST_METHOD"] == "POST") {
												if (isset($_POST['inscrire'])) {
													$nom = trim(htmlspecialchars($_POST['nom']));
													$prenoms = trim(htmlspecialchars($_POST['prenom']));
													$email = trim(htmlspecialchars($_POST['email']));
													$password = trim(htmlspecialchars($_POST['password']));
													$confpassword = trim(htmlspecialchars($_POST['confpassword']));
													$role = trim(htmlspecialchars($_POST['role']));
													$sql0 = $cdr->query("SELECT * FROM users WHERE email='$email'");
													if ($sql0->rowCount() > 0) {
                            $error_message1 = "L'email existe déjà! Veuillez entrer un autre!";
														// echo "<div class='alert alert-danger'>L'email existe déjà! Veuillez entrer un autre!</div>";
													}else {
													if ($password != $confpassword) {
                            $error_message2 = "Veuillez entrer des mots de passes identiques!";
														// echo "<div class='container'><div class='alert alert-danger'>Veuillez entrer des mots de passes identiques!</div></div>";
													}else {
														$password = password_hash($password, PASSWORD_DEFAULT);
                            if (isset($_FILES["cv"]) && $_FILES["cv"]["error"] == UPLOAD_ERR_OK) {
                              // Chemin de destination pour sauvegarder le fichier
                              $dossier_destination = "assets/img/cv/";
                      
                              // Récupération du nom et de l'extension du fichier
                              $nom_fichier = basename($_FILES["cv"]["name"]);
                              $chemin_destination = $dossier_destination . $nom_fichier;
                              // Déplacement du fichier téléchargé vers le dossier de destination
                              if (move_uploaded_file($_FILES["cv"]["tmp_name"], $chemin_destination)) {
                                 $statut = true;
                                 if ($role == "Acheteur") {
                                          $sql = $cdr->prepare("INSERT INTO users(nom,prenom,email,mdp,estActif,photo,role) VALUES(:nom, :prenoms, :email, :mdp, :estActif, :photo, :role)");
														$sql->bindParam(':nom', $nom);
														$sql->bindParam(':prenoms', $prenoms);
														$sql->bindParam(':email', $email);
														$sql->bindParam(':mdp', $password);
														$sql->bindParam(':estActif', $statut);
														$sql->bindParam(':photo', $chemin_destination);
														$sql->bindParam(':role', $role);
														// Exécution de la requête
    													$sql->execute();
                                          $success_message = "Inscription réussie. <a class='btn btn-primary' href='sign-in.php'>Connectez-vous!</a>";
                                 }else {
														$sql = $cdr->prepare("INSERT INTO users(nom,prenom,email,mdp,estActif,cv,role) VALUES(:nom, :prenoms, :email, :mdp, :estActif, :cv, :role)");
														$sql->bindParam(':nom', $nom);
														$sql->bindParam(':prenoms', $prenoms);
														$sql->bindParam(':email', $email);
														$sql->bindParam(':mdp', $password);
														$sql->bindParam(':estActif', $statut);
														$sql->bindParam(':cv', $chemin_destination);
														$sql->bindParam(':role', $role);
														// Exécution de la requête
    													$sql->execute();
                                          $success_message = "Inscription réussie. <a class='btn btn-primary' href='sign-in.php'>Connectez-vous!</a>";
                          }
                        }
                            }else {
                              $statut = true;
                              $sql = $cdr->prepare("INSERT INTO users(nom,prenom,email,mdp,estActif,role) VALUES(:nom, :prenoms, :email, :mdp, :estActif, :role)");
														$sql->bindParam(':nom', $nom);
														$sql->bindParam(':prenoms', $prenoms);
														$sql->bindParam(':email', $email);
														$sql->bindParam(':mdp', $password);
														$sql->bindParam(':estActif', $statut);
														$sql->bindParam(':role', $role);
														// Exécution de la requête
    													$sql->execute();
                              $success_message = "Inscription réussie. <a class='btn btn-primary' href='sign-in.php'>Connectez-vous!</a><br>Veuillez demander l'activation de votre compte";
                            }
													}
												}
												}
											}
										?>
<?php /* echo "<div class='container'><div class='alert alert-danger'>$error_message</div></div>"; */ ?>
<!--Signup Section Here--> 
<section class="signup__section pt-130 pb-130">
<?php 
  if (isset($error_message1)) {
 ?>
  <div class="container"><div class="alert alert-info text-center"><?= $error_message1 ?></div></div><br>
 <?php
  }
  if (isset($error_message2)) {
 ?>
  <div class="container"><div class="alert alert-danger text-center"><?= $error_message2 ?></div></div>
 <?php
  }
  if (isset($success_message)) {
    ?>
     <div class="container"><div class="alert alert-success text-center"><?= $success_message ?></div></div>
    <?php
     }
  ?>
  <div class="container">
     <div class="row justify-content-center align-items-center">
        <div class="col-lg-6 wow bounceInLeft"data-wow-duration="3s">
           <div class="signup__boxes round16">
              <h3 class="title mb-3">
                Inscrivez-vous maintenant
              </h3>
              <form action="" method="post" class="write__review" enctype="multipart/form-data">
                 <div class="row g-4 ">
                    <div class="col-lg-6">
                       <div class="frm__grp">
                          <label for="name" class="fz-18 fw-500 inter title mb-3">Nom</label>
                          <input type="text" id="name" name="nom" placeholder="Entrez votre nom...">
                       </div>
                    </div>
                    <div class="col-lg-6">
                       <div class="frm__grp">
                          <label for="lname" class="fz-18 fw-500 inter title mb-3">Prénom(s)</label>
                          <input type="text" id="lname" name="prenom" placeholder="Entrez votre Prénom...">
                       </div>
                    </div>
                    <div class="col-lg-12">
                       <div class="frm__grp">
                          <label for="enamee" class="fz-18 fw-500 inter title mb-3">Entrez votre Mail</label>
                          <input type="text" id="enamee" name="email" placeholder="Entrez votre Mail...">
                       </div>
                    </div>
                    <div class="col-lg-12" id="colcv">
                       <div class="frm__grp">
                          <label for="pas" class="fz-18 fw-500 inter title mb-3">CV / Photo(Acheteur)</label>
                          <input type="file" id="cv" name="cv" placeholder="Envoyer CV...">
                       </div>
                    </div>
                    <div class="col-lg-6">
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
                    <div class="col-lg-6">
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
                    <div class="col-lg-12">
                       <div class="frm__grp">
                          <label for="role" class="fz-18 fw-500 inter title mb-3">Choisir un Role</label>
                          <select style="border-radius: 100px; border: 1px solid black;" name="role" id="role">
                           <option value="">Choisir role...</option>
                           <option value="Formateur">Formateur</option>
                           <option value="Agriculteur">Agriculteur</option>
                           <option value="Acheteur">Acheteur</option>
                          </select>
                       </div>
                       <?php
                           /* if ($_SERVER["REQUEST_METHOD"] == "POST") {   
                              $role1 = $_POST['role'];
                              if ($role1 == "Acheteur") { */
                        ?>
                              <!-- <script>
                                 var cvField = document.getElementById("colcv");
                                 cvField.style.display = "none";
                              </script> -->
                        <?php
                           /*    }
                           } */
                       ?>
                    </div>
                    <p class="fz-16 fw-400 title inter">
                       Avez-vous un compte? <a href="sign-in.php" class="base">Se connecter</a>
                    </p> 
                    <div class="col-lg-6">
                       <div class="frm__grp">
                          <button type="submit" class="cmn--btn" name="inscrire">
                             <span>
                              S'inscrire
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