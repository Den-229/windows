<?php 
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

if(!isset($_SESSION['MM_Username']))
{
	header("Location:index.php");
	 exit();
}
else
{
require_once('../Connections/con_mjcd.php');
$req = $cdr->prepare("SELECT count(*) as nbre FROM identification WHERE login=:log");
$req->bindParam(":log",$log,PDO::PARAM_STR);

$log = $_SESSION['MM_Username'];
$req->execute();
$row = $req->fetch(PDO::FETCH_ASSOC);

        if($row['nbre']=="0")
        {header("Location:index.php");
         exit();
        }
        else
        {

                    if(isset($_POST['submitted']) && $_POST['submitted'] == "true")
                    {  
                        if(isset($_POST['editor1']) && !empty($_POST['editor1']) && isset($_POST['titre']) && !empty($_POST['titre']) && isset($_POST['emplacement']) && !empty($_POST['emplacement']) )
                        {
                           
                            include("inc_upload_immo.php");

                            if(!isset($tab_lien_im[0]))
                            {
                                $tab_lien_im[0] = "";
                            }
                             
                           if( !isset($erreur))
                           {

                                $req = $cdr->prepare("INSERT INTO  groupe_page (texte, titre, date_publication, heure_publication, file, emplacement) VALUES (:texte, :titre, :date, :heure, :file, :emplacement)");
                                $req->bindParam(":texte",$texte,PDO::PARAM_STR);
                                $req->bindParam(":titre",$titre,PDO::PARAM_STR);
                                $req->bindParam(":date",$date,PDO::PARAM_STR);
                                $req->bindParam(":heure",$heure,PDO::PARAM_STR);
                                $req->bindParam(":file",$tab_lien_im[0],PDO::PARAM_STR);
                                $req->bindParam(":emplacement",$emplacement,PDO::PARAM_STR);
                                
                               

                                $texte = $_POST['editor1'];
                                $titre = $_POST['titre'];
                                $emplacement = $_POST['emplacement'];
                                                            
                                $req->execute();

                                 header("Location: tbord.php");
                                 exit;


                             
                            }
                        }
                        else
                        { $erreur = "<strong style='color:#FF0000'>Erreur! Tous les champs doivent être remplis.</strong>";
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
<meta name="robots" content="noindex, nofollow">
<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="edit/ckeditor.js"></script>

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
	width: 700px;
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
	width: 700px;
}

</style>


</head>

<body>
<div id="entete"></div>
<div id="TOTAL">
  <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" >
    <table width="681" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
         
        
      <tr>
        <td colspan="2" align="center"><h2>Ins&eacute;rer du contenu sur site</h2></td>
      </tr>
      <tr>
        <td width="112">&nbsp;</td>
        <td width="569" align="left">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2"> <strong><a href="tbord.php">Tableau de bord</a></strong> | <strong><a href="index.php?page=dec">[D&eacute;connexion]</a></strong></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="left"><?php if(isset($erreur)) echo $erreur; ?> <br/><br/></td>
      </tr>
     
        
      <tr>
        <td>&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
        
        
        
      <tr>
        <td>&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
        
       
        
       <tr>
         <td align="left" valign="top" bgcolor="#F5F5F5"><strong>Sélectionnez l'emplacement</strong></td>
        <td align="left">
            
          <select name="emplacement" id="emplacement" class="les_select">
          <option value=" ">S&eacute;lectionnez l'emplacement</option>
          <option value="slide">SLIDE</option>
          <option value="texte_accueil">HOME TEXT</option>
          <option value="contact">CONTACT</option>
          
          <option value="apropo">ABOUT US</option>
          <option value="program">PROGRAMS</option>
          <option value="joinus">JOIN US</option>
          <option value="formations">Formations</option>
          <option value="cadrehaut_1">Career Empowerment program</option>
          <option value="cadrehaut_2">Financial literacy and Entrepreneurship Program</option>
          <option value="cadrehaut_3">Youth Leadership Conference 2017</option>
          <option value="cadrebas_4">Register for Conference</option>
          <option value="cadrebas_5">Why join us?</option>
          <option value="cadrebas_6">Become a member now</option>
          <option value="partenaire">PARTNERS</option>
           <option value="videohome">VIDEO ON HOME PAGE</option>

          <option value="galerie">Galerie</option>
          
          
        </select>

        </td>
      </tr>
         <tr>
        <td>&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
        
       
        
         <tr>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr> 
      <tr>
        <td align="left" valign="top" bgcolor="#F5F5F5"><strong>Image 1</strong></td>
        <td align="left" bgcolor="#F5F5F5"><input name="Im[]" type="file" id="file" size="40" class="les_input_tel" /></td>
      </tr>
        <tr>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr> 
        
         
         <tr>
        <td align="left" valign="top" bgcolor="#F5F5F5"><strong>Titre du texte</strong></td>
        <td align="left" bgcolor="#F5F5F5"><input name="titre" type="text" id="titre" value="<?php if(isset($_POST['titre'])) echo $_POST['titre']; ?>" size="30" class="les_input_tel" /></td>
      </tr>
        <tr>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
      
      <tr>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
     
      
      <tr>
        <td align="left" valign="top" bgcolor="#F5F5F5"><strong>Texte:</strong></td>
        <td align="left" bgcolor="#F5F5F5"><textarea class="ckeditor" name="editor1" cols="50" rows="5"><?php if(isset($_POST['editor1'])) echo $_POST['editor1']; ?></textarea>
        <input name="submitted" type="hidden" id="submitted" value="true" /></td>
      </tr>


      <tr>
        <td>&nbsp;</td>
        <td><br/><input type="submit" name="button" id="button" value="                                                                                                           VAVIDER                                                                                                     " /></td>
      </tr>
    </table>
  </form>
</div>
<div id="pied"></div>
</body>
</html>
