<?php
session_start();
require('FPDF/fpdf.php');
require "admin/inc_con_bd_bis.php";

// Créer un objet FPDF
$pdf = new FPDF();
$pdf->AddPage();

// Ajouter un titre
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'Liste des Demandes', 0, 1, 'C');

// Définir la couleur de remplissage en bleu
$pdf->SetFillColor(0, 0, 255); // Bleu

// Ajouter une en-tête pour le tableau
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetTextColor(255, 255, 255); // Texte en blanc sur fond bleu// true indique que la cellule doit être remplie
$pdf->Cell(30, 10, 'Motif', 1, 0, 'C', true);
$pdf->Cell(50, 10, 'Date de création', 1, 0, 'C', true);
$pdf->Cell(45, 10, 'Date de mise à jour', 1, 0, 'C', true);
$pdf->Cell(28, 10, 'Statut', 1, 0, 'C', true);
$pdf->Cell(30, 10, 'Appréciation Formateur', 1, 1, 'C', true);
$pdf->Cell(30, 10, 'Agriculteur', 1, 1, 'C', true);

if (isset($_SESSION['log_id'])) {
    $logid = $_SESSION['log_id'];
}
// Sélection de tous les enregistrements de la table
$requete0 = $cdr->query("SELECT * FROM users WHERE iduser='$logid'");
$resultat0 = $requete0->fetch(PDO::FETCH_ASSOC);
$requete = $cdr->query("SELECT * FROM demanderoleformateur WHERE iduser='$logid'");

// Récupération des résultats sous forme de tableau associatif
$data = $requete->fetchAll(PDO::FETCH_ASSOC);

// Setting text color and color fill
        // for the background
        $pdf->SetFillColor(224, 235, 255);
        $pdf->SetTextColor(0);
        // Ajouter le contenu du tableau au PDF
        $pdf->SetFont('Arial', '', 12);

        // Data
        $fill = 0;
foreach ($data as $row) {
    $pdf->MultiCell(50, 10, $row["motif"], 1);
    // Obtenir les coordonnées actuelles
    $x = $pdf->GetX();
    $y = $pdf->GetY();

    // Insérer plusieurs cellules sur la même ligne que la multicellule
    $pdf->SetXY($x + 80, $y - 30); // Déplacer vers la droite de la multicellule
    $pdf->Cell(30, 30, $row["datecreation"], 1, 0, 'C',);
    
    $pdf->Cell(45, 30, $row["datemiseajour"], 1, 0, 'C');
    $pdf->Cell(28, 30, $row["statut"], 1, 0, 'C');
    $pdf->Cell(30, 30, $row["appreciationformateur"], 1, 0, 'C');
    $pdf->Cell(30, 30, $resultat0["prenom"], 1, 1, 'C');
    $fill=!$fill;
}

// Télécharger le PDF
$pdf->Output('D', 'liste-formation.pdf',);
?>
