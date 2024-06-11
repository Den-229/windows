<?php include_once("admin/inc_admin.php"); 

require_once("bdconnect/con_bd.php");    
 
$reqa = $cdr->prepare("SELECT * FROM groupe_page WHERE emplacement=:emplacement ORDER BY id DESC LIMIT :lalimit");
$reqa->bindParam(":emplacement",$emplacement,PDO::PARAM_STR);
$reqa->bindParam(":lalimit",$limite,PDO::PARAM_INT);

?>
