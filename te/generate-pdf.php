<?php
require('FPDF/fpdf.php');
require "admin/inc_con_bd_bis.php";

// Créer un objet FPDF
$pdf = new FPDF();
$pdf->AddPage();

// Ajouter un titre
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'Liste des Agriculteurs', 0, 1, 'C');

// Définir la couleur de remplissage en bleu
$pdf->SetFillColor(0, 0, 255); // Bleu

// Ajouter une en-tête pour le tableau
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetTextColor(255, 255, 255); // Texte en blanc sur fond bleu
$pdf->Cell(30, 20, 'Photo', 1, 0, 'C', true); // true indique que la cellule doit être remplie
$pdf->Cell(25, 20, 'Nom', 1, 0, 'C', true);
$pdf->Cell(30, 20, 'Prenom', 1, 0, 'C', true);
$pdf->Cell(48, 20, 'Email', 1, 0, 'C', true);
$pdf->Cell(15, 20, 'Statut', 1, 0, 'C', true);
$pdf->Cell(25, 20, 'Role', 1, 1, 'C', true);

// Sélection de tous les enregistrements de la table
$requete = $cdr->query("SELECT * FROM users WHERE role='Agriculteur'");
                                            
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
    $pdf->Image($row['photo'], 10, $pdf->GetY(), 30, 20);
    $pdf->Cell(30);
    $pdf->Cell(25, 20, $row["nom"], 1, 0, 'C',);
    $pdf->Cell(30, 20, $row["prenom"], 1, 0, 'C',);
    $pdf->Cell(48, 20, $row["email"], 1, 0, 'C',);
    $pdf->Cell(15, 20, $row["estActif"], 1, 0, 'C',);
    $pdf->Cell(25, 20, $row["role"], 1, 1, 'C');
    $fill=!$fill;
}

// Télécharger le PDF
$pdf->Output('I', 'liste-agriculteurs.pdf',);
?>
