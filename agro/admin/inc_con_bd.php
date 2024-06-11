<?php
date_default_timezone_set('Africa/Porto-Novo');
$date = date("d-m-Y");
$heure = date("H:i");
include("../bdconnect/con_bd.php");
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try 
{
	$cdr = new PDO('mysql:host=localhost;dbname='.$nom_bd, $username_bd, $password_bd,$options);
	$cdr->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo 'Échec lors de la connexion :' . $e->getMessage();
}
?>
