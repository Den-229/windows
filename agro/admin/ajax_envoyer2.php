<?php
//require_once("inc_date_erreur_reporting.php");
  if(isset($_POST['civilite']) && !empty($_POST['civilite'])
          && isset($_POST['nom']) && !empty($_POST['nom'])
          && isset($_POST['pays']) && !empty($_POST['pays'])
	      && isset($_POST['ville']) && !empty($_POST['ville'])
          && isset($_POST['quartier']) && !empty($_POST['quartier'])
          && isset($_POST['telephone']) && !empty($_POST['telephone'])
          && isset($_POST['email']) && !empty($_POST['email'])
          && isset($_POST['bien']) && !empty($_POST['bien'])
          && isset($_POST['message']) && !empty($_POST['message'])
          && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))  {
                          $civiliteemail = strip_tags($_POST['civilite']);
						  $nomemail = strip_tags($_POST['nom']);
						  $paysemail = strip_tags($_POST['pays']);
						  $villeemail = strip_tags($_POST['ville']);
						  $quartieremail = strip_tags($_POST['quartier']);
						  $telemail = strip_tags($_POST['telephone']);
						  $emailemail = strip_tags($_POST['email']);
						  $bien = strip_tags($_POST['bien']);
						  $texteemail = strip_tags($_POST['message']);
						  $body = "Civilite: $civiliteemail\n\n Nom: $nomemail\n\n Pays: $paysemail\n\n ville:$villeemail\n\n Quartier:$quartieremail \n\n Telephone:$telemail \n\n  Email: $emailemail\n\n Bien: $bien\n\n Texte:$texteemail \n\n";
	  $body = wordwrap ($body, 70);
	  @mail('contact@avenobgroupe-immo.com','Message de venant de nom_de_domaine.com', $body, "From: $emailemail");
	  echo "Nous avons bien reçu votre message. Nous vous répondrons à l'adresse $emailemail dans les meilleurs d&eacute;lais. Merci***";
$_POST = array();} else { echo "1";} 
                    

?>
