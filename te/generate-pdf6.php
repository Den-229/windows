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
$pdf->Cell(40, 10, 'Creee le', 1, 0, 'C', true);
$pdf->Cell(45, 10, 'Mise a jour le', 1, 0, 'C', true);
$pdf->Cell(15, 10, 'Statut', 1, 0, 'C', true);
$pdf->Cell(30, 10, 'Appreciation', 1, 0, 'C', true);
$pdf->Cell(20, 10, 'Utilisateur', 1, 1, 'G', true);
$requete = $cdr->query("SELECT * FROM demandes,users WHERE users.iduser=demandes.iduser");

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
    $pdf->MultiCell(30, 10, $row["motif"], 1);
    // Obtenir les coordonnées actuelles
    $x = $pdf->GetX();
    $y = $pdf->GetY();

    // Insérer plusieurs cellules sur la même ligne que la multicellule
    $pdf->SetXY($x + 30, $y - 30); // Déplacer vers la droite de la multicellule
    $pdf->Cell(40, 30, $row["datecreation"], 1, 0);
    
    $pdf->Cell(45, 30, $row["datemiseajour"], 1, 0);
    $pdf->Cell(15, 30, $row["statut"], 1, 0);
    $pdf->Cell(30, 30, $row["appreciationsysteme"], 1, 0);
    $pdf->Cell(20, 30, $row["prenom"], 1, 1);
    $fill=!$fill;
}

// Télécharger le PDF
$pdf->Output('D', 'liste-formation.pdf',);
?>
