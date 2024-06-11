<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<link rel="stylesheet" href="admin/pagination/pagination.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="admin/fancybox/jquery.fancybox.min.css">
<link rel="stylesheet" href="admin/css/stylehorslogin.css" type="text/css" media="screen" />
<script type="text/javascript" src="admin/js/envoyer.js"></script>
<script type="text/javascript" src="admin/js/envoyer2.js"></script>


<script src="admin/fancybox/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="admin/js/icovideo.js"></script>

	 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<script type="text/javascript">
	$("[data-fancybox]").fancybox({
		// Options will go here
	});
</script>











<?php 

 if(isset($_GET['dec'])) {
	
	if(!isset($_SESSION))
	{session_start();
	}
	 session_unset();
	 session_destroy();
	
	}
if(isset($_SESSION['admin'])) 
           {

?>
  <link rel="stylesheet" href="admin/css/stylemodule.css" type="text/css" media="screen" />

 <script type="text/javascript" src="admin/js/logout.js"></script>
 <script type="text/javascript" src="admin/js/selectDivModifier.js"></script>

<?php 
}




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
?>




