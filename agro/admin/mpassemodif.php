<?php 
require_once('inc_con_bd.php');
if(isset($_POST['mpasse']) && isset($_POST['rempasse']) )
{
	if(strlen($_POST['mpasse'])>= 6 && $_POST['mpasse']== $_POST['rempasse'] )
	{
	
	
	$req = $cdr->prepare("UPDATE identification SET mpasse=:mpasse  LIMIT :lalimit");
		$req->bindParam(":mpasse",$mpasse,PDO::PARAM_STR);
		 $req->bindValue(":lalimit",1,PDO::PARAM_INT);
		 $mpasse = md5($_POST['mpasse']);
	$req->execute();
	
	
	$req = $cdr->prepare("SELECT * FROM identification ORDER BY id ASC LIMIT :lalimit");
				$req->bindValue(":lalimit",1,PDO::PARAM_INT);
			$req->execute();
			$resultats = $req->fetchall();
			
			
			if(count($resultats) >0 )
	      {
		
	
			$adressePageActuelle = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
	        $lien = str_replace("mpassemodif.php","index.php",$adressePageActuelle);
			// ENVOI DU MAIL D'ACTIVATION
                 
                
  $body =   "<html>
                      <head>
                       <title></title>
                      </head>
                      <body style='font-size:18px;'>
                          <p>
                         Bonjour, <br/>
      
    Vous venez de modifier votre mot de passe.<br/>
	Vos nouveau identifiants sont:
	Login: ".$resultats[0]['login']."<br/>
	Mot de passe: ".$resultats[0]['mpasse']."<br/>
  
  Nous vous invitons à vous connecter avec vos nouveaux identifiants sur <a href='".$lien."' target='_blank'>".$lien."</a> <br/><br/>;
     

    
            SGTIC <br/>
            https://sgtic.bj <br/>
            </p>

                      </body>
                     </html>
                     "; 


                     $body = wordwrap ($body, 70);

                     // Pour envoyer un mail HTML, l'en-t?te Content-type doit ?tre d?fini
                     $headers  = 'MIME-Version: 1.0' . "\r\n";
                     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                     $headers .= 'From: SGTIC <info@sgtic.bj>' . "\r\n";

    @mail($resultats[0]['email'],'Votre mot de passe à changé', $body, $headers, '-frebonds@sgtic.bj');
	
	$reinitialisationOK ="Votre mot de passe à été bien modifié. Veuillez <a href='index.php'>cliquer ici</a> pour vous connecter avec vos nouveaux identifiants.";
}
}
else
{ $erreurForm = "Le mot de passe doit contenir au moins 6 caractères et les deux saisies doivent être les memes.";
}

  }
	



if(!isset($reinitialisationOK))
{

 if(!isset($_GET['reinitialisation']) || empty($_GET['reinitialisation']))
	{$message ="Lien de réinitialisation incorrect.";
	}
	else
	{ 
        
				$req = $cdr->prepare("SELECT * FROM identification WHERE keympasseoublie= :keympasseoublie ORDER BY id ASC LIMIT :lalimit");
				$req->bindValue(":lalimit",1,PDO::PARAM_INT);
				$req->bindParam(":keympasseoublie",$_GET['reinitialisation'],PDO::PARAM_STR);
				
			
			$req->execute();
			$resultats = $req->fetchall();
			
			
			if(count($resultats) ==0)
			{
				$message ="Lien de réinitialisation incorrect.";
			}
			else
			{
			
					$mktimActuelle =  time();
					$tempsExpiration = $mktimActuelle - $resultats[0]['mktime'];
					
					
				   if($tempsExpiration > 86400 )
					{$message ="Lien de réinitialisation a expiré. <br/>Veuillez recommencer en <a href='index.php'>cliquant ici</a> ensuite sur mot de passe oublié.";
					}
					else
					{  
					  
					}
			}

	}
}
	


?>

<!------ Include the above in your HEAD tag ---------->

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
        <h3>Modification de mot de passe.</h3>
        <!--<div class="d-flex justify-content-end social_icon">
          <span><i class="fab fa-facebook-square"></i></span>
          <span><i class="fab fa-google-plus-square"></i></span>
          <span><i class="fab fa-twitter-square"></i></span>
        </div> -->
      </div>
      <div class="card-body">
        <form id="form1" name="form1" method="POST" action="">
          <?php
		  if(isset($message))
	      { echo "<span class='blanc'>".$message."</a>";
	      }
		  elseif(isset($reinitialisationOK))
	      { echo "<span class='blanc'>".$reinitialisationOK."</a>";
	      }
		  else
		  {
			  ?>
			  <span style="color:red;" id="Empasse"> <?php if(isset($erreurForm)){ echo "<span class='blanc'>".$erreurForm."</a>";} ?>
	      </span>
			  <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="mpasse" id="mpasse" class="form-control" placeholder="Saisir le nouveau mot de passe">
            
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" name="rempasse" id="rempasse" placeholder="Resaisir le mot de passe">
          </div>
          <div class="row align-items-center remember">
           <!-- <input type="checkbox">Remember Me -->
          </div>
          <div class="form-group">
            <input type="submit" value="Valider" name="button" id="button" class="btn float-right login_btn">
          </div>
			  
			  <?php
		  }
		  ?>
		  
		  
		  
        </form>
      </div>
       <!-- <div class="card-footer">
        <div class="d-flex justify-content-center links">
          Don't have an account?<a href="#">Sign Up</a>
        </div>
		 -->
        <div class="d-flex justify-content-center">
         <span class="blanc"></span>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
