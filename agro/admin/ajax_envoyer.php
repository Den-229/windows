<?php
//require_once("inc_date_erreur_reporting.php");

require_once("../bdconnect/inc_adresse_email.php");

if(isset($adresse_email) && filter_var($adresse_email, FILTER_VALIDATE_EMAIL)) {
	
	//$site = explode("@", $adresse_email);
   //$domaine = $site[1];
   $domaine = $_SERVER['SERVER_NAME'];
 
 
  if(isset($_POST['nom']) && !empty($_POST['nom'])
          && isset($_POST['emails']) && !empty($_POST['emails'])
          && isset($_POST['objet']) && !empty($_POST['objet']) 
          && isset($_POST['message']) && !empty($_POST['message']) 
          && isset($_POST['telephone'])
          && filter_var($_POST['emails'], FILTER_VALIDATE_EMAIL))  {
						  $nomemail = strip_tags($_POST['nom']);
						  $telemail = strip_tags($_POST['telephone']);
						  $emailemail = strip_tags($_POST['emails']);
						  $objet = strip_tags($_POST['objet']);
						  $texteemail = strip_tags($_POST['message']);
						  $body = "Nom: $nomemail\n\n  Email: $emailemail\n\n Objet: $objet\n\n Telephone: $telemail\n\n Texte: $texteemail\n\n";
	  $body = wordwrap ($body, 70);
	  @mail($adresse_email,"Message de ".$domaine, $body, "From: ".$emailemail);
	  echo "Nous avons bien reçu votre message. Nous vous répondrons à l'adresse $emailemail dans les meilleurs d&eacute;lais. Merci***";
$_POST = array();} else { echo "1";} 
  
  
  
  } 
  else 
  { echo "2";
  }                  

?>
