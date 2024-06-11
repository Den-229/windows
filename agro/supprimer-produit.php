<?php
include("admin/inc_con_bd_bis.php");
$table = "commander";

// Vérifie si la clé du produit à supprimer est définie
if(isset($_GET['key'])) {
    $idcmd = $_GET['key'];
}
// Suppression de l'enregistrement
try {
    //Sélection des infos du produit à retirer de la commande
    $sql = $cdr->query("SELECT * FROM commander WHERE idcommande='$idcmd'");
    $result = $sql->fetch(PDO::FETCH_ASSOC);
    $idp = $result['idproduit'];
    $qtecmd = $result['qtecmd'];
    //Mise à jour de la quantité du produit
    $sql12 = $cdr->prepare("UPDATE produit SET quantite = quantite + :qte WHERE idproduit=:idprod");
    $sql12->bindParam(':qte', $qtecmd);
    $sql12->bindParam(':idprod', $idp);
    $sql12->execute();
    //Retrait du produit de la commande
    $requete = $cdr->prepare("DELETE FROM $table WHERE idcommande = :idcmd");
    $requete->bindParam(':idcmd', $idcmd);
    $requete->execute();
    
    // Redirection vers la page d'affichage
    header("Location: panier.php");
} catch (PDOException $e) {
    // En cas d'erreur lors de la suppression
    echo "Erreur lors de la suppression des données : " . $e->getMessage();
    // Arrêt du script
    exit();
}
?>