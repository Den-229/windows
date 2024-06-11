<?php
if(!isset($_SESSION))
	{session_start();
	}
if(!isset($_SESSION['accesPageMpasseOublier']) || $_SESSION['accesPageMpasseOublier'] != 1) 
{  $erreur = "Veuillez recommencer en <a href='index.php'>cliquant ici</a> ensuite sur mot de passe oublié.";
}
else
{	// CREATION DU CODE D'ACTIVATION

                      function Genere_Password($size)
                            {
                             // Initialisation des caractères utilisables
                             $characters = array(1 ,2, 3, 4, 5, 6, 7, 8, 9, 0, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'm', 'n', 'p', 'q', 'r', 's', 't', 'u', 'v','w', 'x', 'y', 'z');
                             $key_password = array_rand($characters,$size);

                             for($i=0;$i<$size;$i++)
                             {$password_tab[] = $characters[$key_password[$i]];

                             }
                             $password = implode("",$password_tab);
                             return $password;
                             }
// Petit exemple
                    $activation = Genere_Password(12);
                    $activation = md5($activation);
					$mktime24h = strtotime("+1 day");

  require_once('inc_con_bd.php');
	$req = $cdr->prepare("UPDATE identification SET keympasseoublie=:keympasseoublie, mktime=:mktime LIMIT :lalimit");
        $req->bindParam(":keympasseoublie",$activation,PDO::PARAM_STR);
		$req->bindParam(":mktime",$mktime24h,PDO::PARAM_STR);
		 $req->bindValue(":lalimit",1,PDO::PARAM_INT);
	$req->execute();
	
	
	$req = $cdr->prepare("SELECT email FROM identification ORDER BY id ASC LIMIT :lalimit");
        $req->bindValue(":lalimit",1,PDO::PARAM_INT);
	$req->execute();
	$resultats = $req->fetchall();
    if(count($resultats) ==0 )
	{header("Location: index.php");
	 exit();
	}
	else
	{  
	 $emailMessageEnvoyer = $resultats[0]['email'];
	 $adressePageActuelle = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
	 $lien = str_replace("mpasseoublie.php","mpassemodif.php",$adressePageActuelle);
	 $lien = $lien."?reinitialisation=".urlencode($activation);
	 
	 // ENVOI DE MAESSAGE
	 $body =   "<html>
                      <head>
                       <title></title>
                      </head>
                      <body style='font-size:18px;'>
                          <p>
                         Bonjour, <br/>
      
    Vous avez demand&eacute; la r&eacute;initialisation de votre mot de passe. Veuillez cliquer sur le lien ci dessous pour confirmer.<br/><br/>
     <a href='http://".$lien."'>http://".$lien."</a><br/>
     Ce lien de réinitialisation de mot de passe expire dans quelques heures.<br/>
     Si vous n'arrivez pas &agrave; cliquer sur le lien, veuillez le copier et le coller dans la barre d'adresse de votre navigateur.<br/><br/>
     

    
            Le service Client <br/>
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

                     @mail($resultats[0]['email'],'Réinitialisation de votre mot de passe', $body, $headers, '-frebonds@sgtic.bj');

   
	 
	 
    }
}




	 session_unset();
	 session_destroy();
	


?>

<!DOCTYPE html>
<html>
<head>
  <title>ADMIN</title>
  <meta name="robots" content="noindex, nofollow">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!--Custom styles-->
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 

</head>
<body>
<?php
echo $body;

?>

<div class="container">
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <h3>Mot de passe oublié</h3>
        <!--<div class="d-flex justify-content-end social_icon">
          <span><i class="fab fa-facebook-square"></i></span>
          <span><i class="fab fa-google-plus-square"></i></span>
          <span><i class="fab fa-twitter-square"></i></span>
        </div> -->
      </div>
      <div class="card-body">
       <?php if(isset($emailMessageEnvoyer))
	   { echo "<span class='blanc'>Un message vient de vous être envoyé à: ".$emailMessageEnvoyer." pour réinitialiser votre mot de passe.</span>"; 
       }
	   elseif(isset($erreur))
	   {
          echo "<span class='blanc'>".$erreur."</span>"; 

	   }
	   
	   ?>
      </div>
       <!-- <div class="card-footer">
        <div class="d-flex justify-content-center links">
          Don't have an account?<a href="#">Sign Up</a>
        </div>
		 -->
        <div class="d-flex justify-content-center">
         <span class="blanc"> </span>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
