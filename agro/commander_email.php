<?php
require_once("admin/inc_con_bd_bis.php"); 
require 'assets/PHPMailer/Exception.php';
require 'assets/PHPMailer/PHPMailer.php';
require 'assets/PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $logid = $_SESSION['log_id'];
    $sql01 = $cdr->query("SELECT * FROM users WHERE iduser='$logid'");
    $result = $sql01->fetch(PDO::FETCH_ASSOC);
    $nom = htmlspecialchars($result['nom']);
    $prenom = htmlspecialchars($result['prenom']);
    $email = htmlspecialchars($result['email']);
    
    // Récupérer les valeurs du formulaire
    $montant = htmlspecialchars($_POST['montant']);

    // Instancier PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configuration du serveur SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // Remplacez par votre serveur SMTP
        $mail->SMTPAuth   = true;
        $mail->Username   = 'assogbadenis753@gmail.com'; // Remplacez par votre adresse email
        $mail->Password   = 'qqrpqnkefufnngdn'; // Remplacez par votre mot de passe email
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Destinataires
        $mail->setFrom($email, 'Acheteur');
        $mail->addAddress('assogbadenis710@gmail.com', 'Destinataire');
        $mail->addReplyTo($email, 'Information');

        // Contenu de l'email
        $mail->isHTML(true);
        $mail->Subject = 'Nouvelle commande de produit depuis le site';
        $mail->Body    = "<p><strong>Nom et Prénom(s) de l'acheteur:</strong>". $nom." ".$prenom."</p><br>" .
                         "<p><strong>Email de l'acheteur:</strong> $email</p><br>" .
                         "<p><strong>Montant de la commande:</strong>". $montant. " FCFA". "</p>";

        // Envoyer l'email
        $mail->send();
        // echo 'Commande effectuée avec succès';
        echo '<script>alert("Commande effectuée avec succès");
         window.location.href="index.php";</script>';
    } catch (Exception $e) {
        echo "Le message n'a pas pu être envoyé. Erreur de PHPMailer : {$mail->ErrorInfo}";
    }   
}
?>
