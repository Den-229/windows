  <?php
 function modifier($champ_form,$sel,$emplacement,$limite, $resultats,$tailImg) {
			if(isset($_SESSION['admin'])) 
           {
            if(isset($limite) && isset($resultats) && is_array($resultats))
            { if(sizeof($resultats)>0)
               { if($limite > 1) 
                  { $requete = "i";
               	}
               	elseif($limite == 1) 
               	{ $requete = "u";
               	}
               		
               }
               elseif(sizeof($resultats) == 0)
               {$requete = "i";
               }


            }
            
        



            if(isset($requete) && isset($emplacement) && isset($champ_form)  && isset($sel))
            {//echo  "<div class='sgtic_admin'> <a href='admin/inc_form.php?iframe&req=".$requete."&type=".$champ_form."&emplacement=".$emplacement."' class='various1'>Modifier</a> </div>";
           ?>
             <a onmouseout="DeSelectDivModifier('<?php echo $sel; ?>')" onmouseover="selectDivModifier('<?php echo $sel; ?>');"  href="admin/inc_form.php?iframe&req=<?php echo $requete ?>&type=<?php echo $champ_form ?>&emplacement=<?php echo $emplacement ?>">Modifier <?php if(!empty($tailImg)){echo "(".$tailImg.")";} ?></a>
           <?php
		   }
           else 
            {echo "Il manque une donnée";
            }
            
            
            

}



} 




function recupUrl()
  {
   if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
   {
    $url = "https"; 
   }
   else
   {
    $url = "http"; 
   }
  
    
  // Ajoutez // à l'URL.
  $url .= "://"; 
    
  // Ajoutez l'hôte (nom de domaine, ip) à l'URL.
  $url .= $_SERVER['HTTP_HOST']; 
    
  // Ajouter l'emplacement de la ressource demandée à l'URL
  $url .= $_SERVER['REQUEST_URI']; 
      
  // Afficher l'URL
  return  $url; 
  }

$_SESSION['urlencours']=recupUrl();


?>


