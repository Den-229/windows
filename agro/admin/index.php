<?php 
 if(!isset($_SESSION))
	{session_start();
	}
	
$_SESSION['accesPageMpasseOublier']	= "1";

if(isset($_POST['login']) && isset($_POST['login']) && strlen($_POST['login'])> '0' && strlen($_POST['mpasse'])> '0' )
{   require_once('inc_con_bd.php');
	$req = $cdr->prepare("SELECT count(*) as nbre FROM identification WHERE login=:log AND mpasse=:mpasse");
        $req->bindParam(":log",$log,PDO::PARAM_STR);
	$req->bindParam(":mpasse",$mpasse,PDO::PARAM_STR);
	
	$log = $_POST['login'];
	$mpasse = md5($_POST['mpasse']);
	$req->execute();
	$row = $req->fetch(PDO::FETCH_ASSOC);
	
	if($row['nbre']=="0")
	{header("Location:index.php");
	 exit();
	}
	else
	{ 
	 $_SESSION['admin'] = $log;
	 header("Location: ../index.php");
	 exit();
    }

}

if(isset($_GET['page']) && $_GET['page']=="dec")
{if(!isset($_SESSION))
	{session_start();
	}
	 session_unset();
	 session_destroy();
	
}

?>


<!DOCTYPE html>
<html>
<head>
  <title>ADMIN</title>
  <meta name="robots" content="noindex, nofollow">
   <!--Made with love by Mutiullah Samim -->
   
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!--Custom styles-->
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 

</head>
<body>
<div class="container">
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <h3>Connexion</h3>
        <!--<div class="d-flex justify-content-end social_icon">
          <span><i class="fab fa-facebook-square"></i></span>
          <span><i class="fab fa-google-plus-square"></i></span>
          <span><i class="fab fa-twitter-square"></i></span>
        </div> -->
      </div>
      <div class="card-body">
        <form id="form1" name="form1" method="POST" action="">
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="login" id="login" class="form-control" placeholder="Utilisateur">
            
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" name="mpasse" id="mpasse" placeholder="Mot de passe">
          </div>
          <div class="row align-items-center remember">
           <!-- <input type="checkbox">Remember Me -->
          </div>
          <div class="form-group">
            <input type="submit" value="Valider" name="button" id="button" class="btn float-right login_btn">
          </div>
        </form>
      </div>
       <!-- <div class="card-footer">
        <div class="d-flex justify-content-center links">
          Don't have an account?<a href="#">Sign Up</a>
        </div>
		 -->
        <div class="d-flex justify-content-center">
         <span class="blanc"> <a href="mpasseoublie.php">Mot de passe oublié ?</a></span>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
