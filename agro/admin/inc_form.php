<?php 
//fonction limitation de mots 
function debutchaine2($chaine2, $nbmots2, $link) { // 1er argument : chaîne - 2e argument : nombre de mots 
$chaine2 = preg_replace('!<br.*>!iU', "", $chaine2); // remplacement des BR par des espaces 
//$chaine2 = strip_tags($chaine2); 
$chaine2 = preg_replace('/\s\s+/', ' ', $chaine2); // retrait des espaces inutiles 
$tab2 = explode(" ",$chaine2); 
if (count($tab2) <= $nbmots2) { 
$affiche2 = $chaine2; 
} else { 
$affiche2 = "$tab2[0]"; 
for ($i2=1; $i2<$nbmots2; $i2++) { 
$affiche2 .= " $tab2[$i2]"; 
} 
} 
$affiche2 .= $link; 
return $affiche2; 
}



//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

if(!isset($_SESSION['admin']))
{
	header("Location:index.php");
	 exit();
}
else
{
require_once('inc_con_bd.php');
$req = $cdr->prepare("SELECT count(*) as nbre FROM identification WHERE login=:log");
$req->bindParam(":log",$log,PDO::PARAM_STR);

$log = $_SESSION['admin'];
$req->execute();
$row = $req->fetch(PDO::FETCH_ASSOC);

        if($row['nbre']=="0")
        {header("Location:index.php");
         exit();
        }
        else
        {
          
                     
                     $extension_nonimg = array(".xsl",".xslx",".pptx",".zip",".rar",".pdf", ".ppt", ".docx", ".doc");
                     $extension_img = array(".jpeg",".jpg", ".gif", ".png");
                     
                     
                    if(isset($_POST['submitted']) && $_POST['submitted'] == "true" && isset($_GET['req']) && $_GET['req'] == "i")
                    {  
                       
                           
                         
                         
                         
                         
                         if(isset($_FILES['Im']['name'][0])) {
                         $fichier_uploade = basename($_FILES['Im']['name'][0]);
                         $extension_uploade = strrchr("$fichier_uploade",".");
                         
                         $extension_uploade = strtolower($extension_uploade);
								 
								 if(in_array($extension_uploade, $extension_img))
								 {include("inc_upload_immo.php");
								 }
								 elseif(in_array($extension_uploade,$extension_nonimg)) 
								 {include("inc_upload_fichier.php");
								 }
								 
								 }
                          

                            if(!isset($tab_lien_im[0]))
                            {
                                $tab_lien_im[0] = "";
                            }
                            
                            if(!isset($tab_lien_im[1]))
                            {
                                $tab_lien_im[1] = "";
                            }
                            if(!isset($tab_lien_im[2]))
                            {
                                $tab_lien_im[2] = "";
                            }
                            
                            if(!isset($_POST['editor1']))
                            {
                                $_POST['editor1'] = "";
                            }
                            
                            if(!isset($_POST['titre']))
                            {
                                $_POST['titre'] = "";
                            }
                            
                            if(!isset($_POST['prix']))
                            {
                                $_POST['prix'] = "";
                            }
							
							if(!isset($_POST['emailcontact']))
                            {
                                $_POST['emailcontact'] = "";
                            }
							
							if(!isset($_POST['metatitre']))
                            {
                                $_POST['metatitre'] = "";
                            }
							
							if(!isset($_POST['metamotcle']))
                            {
                                $_POST['metamotcle'] = "";
                            }
							
							if(!isset($_POST['lien']))
                            {
                                $_POST['lien'] = "";
                            }
							
							
							
							
							
                            
                             
                           if( !isset($erreur))
                           { 

                               $req = $cdr->prepare("INSERT INTO  groupe_page (texte, titre, emplacement, metatitre, metamotcle, image2, image3, prix, emailcontact, lien, file, date, heure) VALUES (:texte, :titre, :emplacement, :metatitre, :metamotcle, :image2, :image3, :prix, :emailcontact, :lien, :file, :date, :heure)");

                                $req->bindParam(":texte",$_POST['editor1'],PDO::PARAM_STR);
                                $req->bindParam(":emplacement",$emplacement,PDO::PARAM_STR);
								$req->bindParam(":metatitre",$_POST['metatitre'],PDO::PARAM_STR);
								$req->bindParam(":metamotcle",$_POST['metamotcle'],PDO::PARAM_STR);
                                $req->bindParam(":titre",$_POST['titre'],PDO::PARAM_STR);
                                $req->bindParam(":file",$tab_lien_im[0],PDO::PARAM_STR);
                                $req->bindParam(":image2",$tab_lien_im[1],PDO::PARAM_STR);
                                $req->bindParam(":image3",$tab_lien_im[2],PDO::PARAM_STR);
                                $req->bindParam(":prix",$_POST['prix'],PDO::PARAM_INT);
							    $req->bindParam(":lien",$_POST['lien'],PDO::PARAM_STR);
								$req->bindParam(":emailcontact",$_POST['emailcontact'],PDO::PARAM_STR);
                                $req->bindParam(":date",$date,PDO::PARAM_STR);
                                $req->bindParam(":heure",$heure,PDO::PARAM_STR);

                                $emplacement = $_GET['emplacement'];
                                                            
                                $req->execute();

                                
                                                            
                              header("Location:".$_SESSION['urlencours']) ; 
                              exit();
                              // $ok = "<strong>Mise à jour réussie. Actualisez la page.</strong>";
                                

                             
                            }
                       
                            

                    }
                    elseif(isset($_POST['submitted']) && $_POST['submitted'] == "true" && isset($_GET['req']) && $_GET['req'] == "u")
                    {
                    	
                    	
                    	
                    	   
                         
                         
                         if(isset($_FILES['Im']['name'][0])) {
                         $fichier_uploade = basename($_FILES['Im']['name'][0]);
                         $extension_uploade = strrchr("$fichier_uploade",".");
                         
                         $extension_uploade = strtolower($extension_uploade);
								 
								 if(in_array($extension_uploade, $extension_img))
								 {include("inc_upload_immo.php");
								 }
								 elseif(in_array($extension_uploade,$extension_nonimg)) 
								 {include("inc_upload_fichier.php");
								 }
								 }
                          

                            if(!isset($tab_lien_im[0]))
                            {
                                $tab_lien_im[0] = "--";
                            }
                            
                            if(!isset($_POST['editor1']))
                            {
                                $_POST['editor1'] = "";
                            }
                            
                            if(!isset($_POST['titre']))
                            {
                                $_POST['titre'] = "";
                            }
							
							if(!isset($_POST['emailcontact']))
                            {
                                $_POST['emailcontact'] = "";
                            }
							
                            if(!isset($_POST['prix']))
                            {
                                $_POST['prix'] = "";
                            }

							if(!isset($_POST['metatitre']))
                            {
                                $_POST['metatitre'] = "";
                            }
							
							if(!isset($_POST['metamotcle']))
                            {
                                $_POST['metamotcle'] = "";
                            }
							
							if(!isset($_POST['lien']))
                            {
                                $_POST['lien'] = "";
                            }
							
							
							

                            
                           if( !isset($erreur))
                           { 
                           
                         
                            if(count($tab_lien_im) >0 && $tab_lien_im[0]=="--")
                            {
                                $req = $cdr->prepare("UPDATE groupe_page SET texte=:texte, titre=:titre, prix=:prix, emailcontact=:emailcontact, lien=:lien, metatitre=:metatitre, metamotcle=:metamotcle, date=:date, heure=:heure WHERE id=:id");
                                $req->bindParam(":texte",$_POST['editor1'],PDO::PARAM_STR);
                                $req->bindParam(":titre",$_POST['titre'],PDO::PARAM_STR);
                                $req->bindParam(":prix",$_POST['prix'],PDO::PARAM_STR);
								$req->bindParam(":lien",$_POST['lien'],PDO::PARAM_STR);
								$req->bindParam(":emailcontact",$_POST['emailcontact'],PDO::PARAM_STR);
								$req->bindParam(":metatitre",$_POST['metatitre'],PDO::PARAM_STR);
								$req->bindParam(":metamotcle",$_POST['metamotcle'],PDO::PARAM_STR);
                                $req->bindParam(":date",$date,PDO::PARAM_STR);
                                $req->bindParam(":heure",$heure,PDO::PARAM_STR);
                               
                               
                            }
                            else 
                            {
                            	$req = $cdr->prepare("UPDATE groupe_page SET prix=:prix, texte=:texte, titre=:titre, emailcontact=:emailcontact, lien=:lien, metatitre=:metatitre, metamotcle=:metamotcle, file=:file, image2=:image2, image3=:image3, date=:date, heure=:heure WHERE id=:id");
                            	$req->bindParam(":prix",$_POST['prix'],PDO::PARAM_INT);
                                $req->bindParam(":texte",$_POST['editor1'],PDO::PARAM_STR);
                                $req->bindParam(":titre",$_POST['titre'],PDO::PARAM_STR);
								$req->bindParam(":lien",$_POST['lien'],PDO::PARAM_STR);
								$req->bindParam(":emailcontact",$_POST['emailcontact'],PDO::PARAM_STR);
								$req->bindParam(":metatitre",$_POST['metatitre'],PDO::PARAM_STR);
								$req->bindParam(":metamotcle",$_POST['metamotcle'],PDO::PARAM_STR);
                                $req->bindParam(":file",$tab_lien_im[0],PDO::PARAM_STR);
                                $req->bindParam(":image2",$tab_lien_im[1],PDO::PARAM_STR);
                                $req->bindParam(":image3",$tab_lien_im[2],PDO::PARAM_STR);
                                $req->bindParam(":date",$date,PDO::PARAM_STR);
                                $req->bindParam(":heure",$heure,PDO::PARAM_STR);
                               
                            }
                             
                               if(isset($_GET['id'])) 
                               { 
                                  $req->bindParam(":id",$_GET['id'],PDO::PARAM_INT);
                               }
                               elseif(isset($_POST['id'])) 
                               {
                               	 $req->bindParam(":id",$_POST['id'],PDO::PARAM_INT);
                               }
                               else 
                               { $req->bindValue(":id",0,PDO::PARAM_INT);
                               }
                                
                               

                                $texte = $_POST['editor1'];
                                $titre = $_POST['titre'];
								$emailcontact = $_POST['emailcontact'];
								$metatitre = $_POST['metatitre'];
								$metamotcle = $_POST['metamotcle'];
								$lien = $_POST['lien'];
								
                                
                                                            
                                $req->execute();
                                 header("Location:".$_SESSION['urlencours']) ;
                                 exit(); 

                              //  $ok = "<strong>Mise à jour réussie. Actualisez la page.</strong>";

                    	
                    	 
                         }
                    }
                    
                    




if(isset($_GET['sup']) && ctype_digit($_GET['sup']))
{
$reqa = $cdr->prepare("SELECT * FROM  groupe_page WHERE id = :id LIMIT :lalimit ");
$reqa->bindParam(":id",$_GET['sup'],PDO::PARAM_INT);
$reqa->bindParam(":lalimit",$lalimit,PDO::PARAM_INT);
$lalimit = 1;
$reqa->execute();
$resultats = $reqa->fetchall();

if(sizeof($resultats)>0)
		{
		  if(isset($resultats[0]['file']) && !empty($resultats[0]['file']) && is_file($resultats[0]['file'])) 
		  {
		  	unlink($resultats[0]['file']);
		  }
			
			
		}
	

$reqa = $cdr->prepare("DELETE FROM  groupe_page WHERE id =:id LIMIT :lalimit ");
$reqa->bindParam(":id",$_GET['sup'],PDO::PARAM_INT);
$reqa->bindParam(":lalimit",$lalimit,PDO::PARAM_INT);

$lalimit = 1;
$reqa->execute();

}

if(isset($_GET['emplacement'])) {
	$emplacement = $_GET['emplacement'];
	}
	else 
	{ $emplacement = "";
		
	}
	
if(!isset($_GET['id'])) 
{
  if(is_array($emplacement))
  {
    $reqa = $cdr->prepare("SELECT * FROM  groupe_page WHERE emplacement IN(".implode(',', array_map([$cdr, 'quote'], $emplacement)).") ORDER BY id DESC ");
  }
  else
  {
    $reqa = $cdr->prepare("SELECT * FROM  groupe_page WHERE emplacement=:emplacement ORDER BY id DESC ");
    $reqa->bindParam(":emplacement",$_GET['emplacement'],PDO::PARAM_STR);
  }
}
else 
{
 $reqa = $cdr->prepare("SELECT * FROM  groupe_page WHERE id=:id ORDER BY id DESC ");
 $reqa->bindParam(":id",$_GET['id'],PDO::PARAM_STR);
}
$reqa->execute();
$resultatsp = $reqa->fetchall();

if(sizeof($resultatsp)>0)
		{   
			foreach($resultatsp as $rowcamp)
			{ $file = $rowcamp['file'];
                          $id = $rowcamp['id'];
                          $texte = $rowcamp['texte'];
                          $titre = $rowcamp['titre'];
                          $date = $rowcamp['date'];
                          $id = $rowcamp['id'];
                          $prix = $rowcamp['prix'];
						  $emailcontact = $rowcamp['emailcontact'];
						  $metatitre = $rowcamp['metatitre'];
						  $metamotcle = $rowcamp['metamotcle'];
						  $lien = $rowcamp['lien'];
						  
         }
      }
          
            
        }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
<link rel="stylesheet" href="pagination/pagination.css" type="text/css" media="screen" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="edit/ckeditor.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<style>
.les_input_tel{
	height: 30px;
	border-right-width: 1px;
	border-top-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	background-color: #FFF;
	border-left-color: #000;
	border-bottom-color: #000;
	border-top-color: #000;
	border-right: #000;
	border-bottom-style: groove;
	border-top-style: groove;
	border-left-style: groove;
	border-right-style: groove;
	font-size: 17px;
	width: 300px;
}



.les_select{
	height: 40px;
	border-right-width: 1px;
	border-top-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	background-color: #FFF;
	border-left-color: #000;
	border-bottom-color: #000;
	border-top-color: #000;
	border-right: #000;
	border-bottom-style: groove;
	border-top-style: groove;
	border-left-style: groove;
	border-right-style: groove;
	font-size: 17px;
	width: 300px;
}

</style>


</head>

<body>
<div id="entete"></div>
<div id="TOTAL" style="width:600px; height:600px; margin-left:auto; margin-right:auto;">
  <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" >
  <?php if(isset($ok)) { echo $ok ;} ?>
<br/><br/>

<?php 


if(isset($_GET['type'])) { 
$tabType = explode(",",$_GET['type']);
for($i=0;$i<count($tabType);$i++)
{
	switch($tabType[$i])
	{
	case "image": 
	?>
	<strong>Image</strong><br/>
<input name="Im[]" type="file" id="file" class="form-control" />
<small class="form-text text-muted">Images authorisées: jpeg, jpg,  gif,  png </small>
<br/>
	<?php 
        break;
		case "fichier": 
	?>
	<strong>Fihier</strong><br/>
<input name="Im[]" type="file" id="file" class="form-control" />
	<small class="form-text text-muted">Fichiers authorisés: PDF, Word, Excel, Powerpoint, fichiers zip et rar </small>

<br/>
	<?php 
        break;
		
		
		case "titre": 
	?>
	 <strong>Titre</strong><br/>
    
    <input name="titre" type="text" id="titre" value="<?php if(isset($_GET['req']) && $_GET['req'] == 'u' && isset($titre)) {echo $titre; } ?>"  class="form-control" />  
	<br/>
	
	
	<?php 
        break;
		
		
		case "lien": 
	?>
	 <strong>Copiez/collez l'Url de la page de destination pour faire un lien</strong><br/>
    
    <input name="lien" type="text" id="titre" value="<?php if(isset($_GET['req']) && $_GET['req'] == 'u' && isset($lien)) {echo $lien; } ?>"  class="form-control" />  
	<small class="form-text text-muted">Vous pouvez laissez vide pour ne pas faire de lien de redirection</small>
	<br/>
	
	
	<?php 
        break;
		
		
		case "facebook": 
	?>
	 <strong>Copiez/collez l'url de votre page Facebook</strong><br/>
    
    <input name="titre" type="text" id="titre" value="<?php if(isset($_GET['req']) && $_GET['req'] == 'u' && isset($titre)) {echo $titre; } ?>"  class="form-control" />  
	<small class="form-text text-muted">Attention, Il s'agit de l'url de la page Facebook de votre entreprise et NON celle de votre propre compte Facebook.</small>
	<br/>
	
	
	<?php 
        break;
		
		
		case "twitter": 
	?>
	 <strong>Copiez/collez l'url de votre page Twitter</strong><br/>
    
    <input name="titre" type="text" id="titre" value="<?php if(isset($_GET['req']) && $_GET['req'] == 'u' && isset($titre)) {echo $titre; } ?>"  class="form-control" />  
	<br/>
	
	
	
	<?php 
        break;
		
		
		case "youtube": 
	?>
	 <strong>Copiez/collez l'url de votre page Youtube</strong><br/>
    
    <input name="titre" type="text" id="titre" value="<?php if(isset($_GET['req']) && $_GET['req'] == 'u' && isset($titre)) {echo $titre; } ?>"  class="form-control" />  
    <small class="form-text text-muted">
  L'url doit être sous la forme https://www.youtube.com/watch?v=XXXXXXX.
</small>

	<br/>
	
	
	
	
	
	
		<?php 
        break;
		
		
		case "onglet": 
	?>
	 <strong>Changer le nom de l'onglet</strong><br/>
    
    <input name="titre" type="text" id="titre" value="<?php if(isset($_GET['req']) && $_GET['req'] == 'u' && isset($titre)) {echo $titre; } ?>"  class="form-control" />  
	<br/>
   
	<?php 
        break;
		
		case "texte": 
	?>
	<strong>Texte </strong><br/>
    <textarea class="ckeditor" name="editor1" cols="25" rows="5" style="width:300px;"><?php if(isset($_GET['req']) && $_GET['req'] == 'u' && isset($texte)) {echo $texte; } ?></textarea>
    <br/>
	<?php 
        break;
		
		case "video": 
	?>
	<strong>Copiez/collez l'Url de la vidéo de Youtube</strong><br/>
    <input name="titre" type="text" id="titre" value="<?php if(isset($_GET['req']) && $_GET['req'] == 'u' && isset($titre)) {echo $titre; } ?>"  class="form-control" />  
    <small class="form-text text-muted">
  L'url doit être sous la forme https://www.youtube.com/watch?v=XXXXXXX.
</small>
	<br/>
   
	<?php 
        break;
		
		case "url": 
	?>
	<strong>Copiez/collez l'Url de la page</strong><br/>
    <input name="titre" type="text" id="titre" value="<?php if(isset($_GET['req']) && $_GET['req'] == 'u' && isset($titre)) {echo $titre; } ?>"  class="form-control" />  
	<br/>
	
	
	<?php 
        break;
		
		case "metatitre": 
	?>
	<strong>Titre de votre site qui apparaîtra dans Google</strong><br/>
    <input name="metatitre" type="text" id="metatitre" value="<?php if(isset($_GET['req']) && $_GET['req'] == 'u' && isset($metatitre)) {echo $metatitre; } ?>"  class="form-control" />  
	<br/>
	
	
	
	<?php 
        break;
		
		case "metamotcle": 
	?>
	<strong>Liste de mots clés qui ont rapport au domaine d'activité de votre site</strong><br/>
    <input name="metamotcle" type="text" id="metamotcle" value="<?php if(isset($_GET['req']) && $_GET['req'] == 'u' && isset($metamotcle)) {echo $metamotcle; } ?>"  class="form-control" />  
	<br/>
	
	
	<?php 
        break;
		
		case "metadescription": 
	?>
	<strong>Description de votre site qui apparaîtra dans Google </strong><br/>
    <textarea class="form-control" name="editor1" cols="25" rows="5" ><?php if(isset($_GET['req']) && $_GET['req'] == 'u' && isset($texte)) {echo $texte; } ?></textarea>
    <br/>
	
	<img src="images/google_meta.jpg">
	
	
   
	<?php 
        break;
		
			case "emailcontact": 
	?>
	<strong>Saisissez l'email qui va recevoir les messages envoyés par le formulaire de contact.</strong><br/>
    <input name="emailcontact" type="text" id="emailcontact" value="<?php if(isset($_GET['req']) && $_GET['req'] == 'u' && isset($emailcontact)) {echo $emailcontact; } ?>"  class="form-control" />  
	<small class="form-text text-muted">Attention, l'email doit être déjà créé et fonctionnel. Cette adresse email ne s'affichera pas sur le site.</small>
	<br/>
   
	<?php 
        break;
		
		case "prix": 
	?>
	<strong>Prix</strong><br/>
	
	
	<div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">FCFA</span>
        </div>
       <input name="prix" type="number" min="0" id="prix" value="<?php if(isset($_GET['req']) && $_GET['req'] == 'u' && isset($prix)) {echo $prix; } ?>"  class="form-control" />
        
      </div>
    
      
	<br/>
  
	<?php 
        break;
		default: "";
		break;
   
	}
	
}
?>
  
   <?php 
   
    }?>
    
    
    
    
  
    
    
        <input name="submitted" type="hidden" id="submitted" value="true" />
        <input name="id" type="hidden" id="id" value="<?php if(isset($id)) echo $id; ?>" />
        <br/><input type="submit" name="button" id="button" value="             VALIDER          " class="btn btn-primary" /><br/>
    <hr>
  </form>
  
  <table width="695" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    
    
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><?php 
       
         //SCRIPTE PAGINATION
         
                $limite = 20;

                $nbre_de_page = ceil(count($resultatsp)/$limite);

                if(isset($_GET['page']) && ctype_digit($_GET['page']))
                {  if($_GET['page']>0)
                {
                    $page = intval($_GET['page']);
                    if($page >= $nbre_de_page)
                    { $page = $nbre_de_page;
                    }
                }
                else{$page = 1;

                }

                }
                else
                {$page = 1;
                }
                $debut_comptage = ($page-1)*$limite;


                $reqp = $cdr->prepare("SELECT * FROM groupe_page WHERE emplacement=:emplacement ORDER BY id DESC LIMIT :debut_comptage, :affiche_par_page");
                $reqp->bindParam(":emplacement",$emplacement,PDO::PARAM_STR);
                $reqp->bindParam(":debut_comptage",$debut_comptage,PDO::PARAM_INT);
                $reqp->bindParam(":affiche_par_page",$limite,PDO::PARAM_INT);
                $reqp->execute();         
         
          $resultatsp = $reqp->fetchall();

		if(sizeof($resultatsp)>0)
		{   
			foreach($resultatsp as $rowcamp)
			{ $file = $rowcamp['file'];
                          $id = $rowcamp['id'];
                          $texte = $rowcamp['texte'];
                          $titre = $rowcamp['titre'];
                          $date = $rowcamp['date'];
                          $vue = $rowcamp['vue'];
                          $cat = $rowcamp['emplacement'];
                         
                          
?>
      
        
      <?php if(isset($_GET['req']) && $_GET['req']=="i") { 
      
      
                         $nomimg = basename($file);
                         $extension_nomimg = strrchr($nomimg,".");
                         
                         $extension_nomimg = strtolower($extension_nomimg);
								 
								 
      ?>

        
        
        
        
        
         <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="400" >
            
            <?php if(in_array($extension_nomimg, $extension_img))
                                     {echo "<img src='../".$file."' width='50' height='50'> ";
                                     }
                                     if(isset($titre) && !empty($titre) && !strpos($titre, "youtube.com") )
                                     {echo $titre;
                                     }
                                     elseif(isset($titre) && !empty($titre) && strpos($titre, "youtube.com") )
                                     { include("inc_video.php");
                                     
                                       if(isset($ImageVideo)) {echo "<div style='width:50px; height:50px; overflow:hidden'><img src='".$ImageVideo."' width='50' height='50'></div>";}
                                       if(isset($TitreVideo)) echo $TitreVideo; 
                                     }
                                     elseif(isset($texte) && !empty($texte))
                                     { echo substr($texte, 0, 100);
                                     }
                                      ?>
            
            </td></td>
            <td width="50" align="center"><a href="inc_form.php?iframe&req=u&type=<?php if(isset($_GET['type'])) echo $_GET['type']; ?>&emplacement=<?php if(isset($_GET['emplacement'])) echo $_GET['emplacement']; ?>&id=<?php if(isset($id)) echo $id; ?>" title="Modifier"><img src="images/img_modif.png" width="16" height="16" border="0" alt="Modifier" /></a></td>
            <td width="50" align="center"><a href="inc_form.php?<?php echo str_replace("inc_form.php?", "", basename($_SERVER['REQUEST_URI']));?>&sup=<?php if(isset($id)) echo $id;?>" title="Modifier" onClick="return(confirm('Etes vous sûr de supprimer ?'));"><img src="images/img_sup.png" width="16" height="16" border="0" alt="supprimer" /></a></td>
            </tr>
          <tr>
            <td colspan="3">&nbsp;</td>
          </tr>
        </table>
        
        
        
        
        <?php 
                 }
                
                         ?>
        
        
        
        
        
        
      <?php 
                 }
                }
                         ?>
      </td>
    </tr>
    <tr>
      <td colspan="2">
      
      <div style="width: 100%; height: 40px;"> 
                <?php // DEBUT PAGINATION
                  
                  include('inc_paginate.php');
                  
                  if(strpos(basename($_SERVER["REQUEST_URI"]), "?"))
                  {  $marq = "&"; 
                  }
                  else 
                  {  $marq = "?";
                  }

                        echo paginate(basename($_SERVER["REQUEST_URI"]), $marq."page=", $nbre_de_page, $page);
                        
                    // FIN PAGINATION
                    ?>
                </div>

      
      </td></td>
    </tr>
  </table>

  
                         
                         
                         

</div>
<div id="pied"></div>
</body>
</html>
