<?php 
  $reqid = $cdr->prepare("SELECT * FROM groupe_page WHERE id=:id ");
  $reqid->bindParam(":id",$id,PDO::PARAM_STR);

  if(isset($_GET['id']) && ctype_digit($_GET['id']))
  {$id = $_GET['id'];
  }
  else
  {$id = 0;
  }
    
$reqid->execute();
    
    
?>