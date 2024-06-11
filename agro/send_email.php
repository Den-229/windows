<?php
require 'assets/PHPMailer/Exception.php';
require 'assets/PHPMailer/PHPMailer.php';
require 'assets/PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire
    $nom = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $message = htmlspecialchars($_POST['message']);

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
        $mail->setFrom($email, $nom);
        $mail->addAddress('assogbadenis710@gmail.com', 'Destinataire');

        // Contenu de l'email
        $mail->isHTML(true);
        $mail->Subject = 'Nouveau message depuis le formulaire de contact';
        $mail->Body    = "<p><strong>Nom:</strong> $nom</p>" .
                         "<p><strong>Email:</strong> $email</p>" .
                         "<p><strong>Téléphone:</strong> $telephone</p>" .
                         "<p><strong>Message:</strong> $message</p>";

        // Envoyer l'email
        $mail->send();
        echo 'Le message a été envoyé avec succès';
    } catch (Exception $e) {
        echo "Le message n'a pas pu être envoyé. Erreur de PHPMailer : {$mail->ErrorInfo}";
    }
}
?>
