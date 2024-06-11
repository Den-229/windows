<?php
include("admin/inc_con_bd_bis.php");
$table = "produit";

// Vérifie si la clé du produit à supprimer est définie
if(isset($_GET['key'])) {
    $panier_id = $_GET['key'];
}    
// Suppression de l'enregistrement
try {
    $requete = $cdr->prepare("DELETE FROM $table WHERE idproduit = :idprod");
    $requete->bindParam(':idprod', $panier_id);
    $requete->execute();
    echo "<script>window.history.back();</script>";
} catch (PDOException $e) {
    // En cas d'erreur lors de la suppression
    echo "Erreur lors de la suppression du produit : " . $e->getMessage();
    // Arrêt du script
    exit();
}
?>