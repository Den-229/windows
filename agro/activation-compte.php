<?php
// Inclusion du script de connexion à la base de données
require_once("admin/inc_con_bd_bis.php"); 
$table = "users";

// Vérification si un ID est passé en paramètre
if(isset($_GET['id'])) {
    $iduser = $_GET['id'];
} else {
    echo "ID non spécifié.";
    exit();
}

// Suppression de l'enregistrement
try {
    $estActif = true;
    $requete = $sql = $cdr->prepare("UPDATE $table SET estActif=:estActif WHERE iduser=:iduser");
    $requete->bindParam(':estActif', $estActif);
    $requete->bindParam(':iduser', $iduser);
    $requete->execute();
    
    // Redirection vers la page d'affichage
    echo "<script>window.history.back();</script>";
} catch (PDOException $e) {
    // En cas d'erreur lors de l'activation du compte
    echo "Erreur lors de l'activation du compte" . $e->getMessage();
    // Arrêt du script
    exit();
}
?>