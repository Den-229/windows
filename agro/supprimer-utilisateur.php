<?php
// Inclusion du script de connexion à la base de données
require_once("admin/inc_con_bd_bis.php"); 
$table = "users";

// Vérification si un ID est passé en paramètre
if(isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo "ID non spécifié.";
    exit();
}

// Suppression de l'enregistrement
try {
    $requete = $conn->prepare("DELETE FROM $table WHERE iduser = :id");
    $requete->bindParam(':id', $id);
    $requete->execute();
    
    // Redirection vers la page d'affichage
    // header("Location: dashboard-formateur.php");
    echo "<script>window.history.back();</script>";
} catch (PDOException $e) {
    // En cas d'erreur lors de la suppression
    echo "Erreur lors de la suppression des données : " . $e->getMessage();
    // Arrêt du script
    exit();
}
?>