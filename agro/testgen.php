<?php
// Inclure la bibliothèque PHPExcel
/* require 'PHPExcel/Classes/PHPExcel.php';

// Connexion à la base de données MySQL
$conn = new mysqli('localhost', 'root', '', 'agriconnect');

// Vérifier la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Requête SQL pour extraire les données
$sql = "SELECT iduser, nom, prenom FROM users";
$result = $conn->query($sql);

// Créer un nouvel objet PHPExcel
$objPHPExcel = new PHPExcel();

// Créer une feuille de calcul
$objPHPExcel->setActiveSheetIndex(0);
$sheet = $objPHPExcel->getActiveSheet();

// Entêtes de colonnes
$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'Nom');
$sheet->setCellValue('C1', 'Email');

// Lignes de données
$row = 2;
while ($row_data = $result->fetch_assoc()) {
    $sheet->setCellValue('A'.$row, $row_data['iduser']);
    $sheet->setCellValue('B'.$row, $row_data['nom']);
    $sheet->setCellValue('C'.$row, $row_data['prenom']);
    $row++;
}

// Sauvegarder le fichier Excel
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5'); // Format Excel5 (xls)
$objWriter->save('users.xls');

// Fermer la connexion à la base de données
$conn->close();

echo "Le fichier Excel a été créé avec succès."; */

// Clé API OpenWeatherMap
$apiKey = 'ae92a9bd150411483df44970e4333caa';

// Emplacement (ex: Cotonou, Benin)
$location = 'Paris';

// URL de l'API pour les alertes
$url = 'https://api.openweathermap.org/data/2.5/alerts?q=' . $location . '&appid=' . $apiKey;

// Récupérer les données d'alerte
$json = file_get_contents($url);
$data = json_decode($json, true);

// Vérifier si des alertes sont présentes
if (isset($data['alerts'])) {
    // Parcourir les alertes et afficher les informations
    foreach ($data['alerts'] as $alert) {
        $type = $alert['event'];
        $severity = $alert['severity'];
        $description = $alert['description'];
        $area = $alert['area'];

        echo '<div class="alert alert-' . ($severity === 'alert' ? 'warning' : 'danger') . '">';
        echo '<strong>' . $type . ' - ' . $severity . '</strong><br>';
        echo $description . '<br>';
        echo 'Zone affectée: ' . $area . '</div>';
    }
} else {
    echo '<p>Aucune alerte météo pour cette région.</p>';
}

?>
