<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = "contact@tonsite.com"; // Remplace par ton email

    $name    = htmlspecialchars(strip_tags($_POST["name"]));
    $email   = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $phone   = htmlspecialchars(strip_tags($_POST["phone"]));
    $subject = htmlspecialchars(strip_tags($_POST["subject"]));
    $message = htmlspecialchars(strip_tags($_POST["message"]));

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Adresse e-mail invalide.";
        exit;
    }

    $email_subject = "Nouveau message de contact : $subject";
    $email_body = "
        <h2>Nouveau message depuis le formulaire de contact</h2>
        <p><strong>Nom :</strong> $name</p>
        <p><strong>Email :</strong> $email</p>
        <p><strong>Téléphone :</strong> $phone</p>
        <p><strong>Sujet :</strong> $subject</p>
        <p><strong>Message :</strong><br>$message</p>
    ";

    $mail = new PHPMailer(true);
    try {
        // Configuration SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Ou mailjet, sendinblue, etc.
        $mail->SMTPAuth = true;
        $mail->Username = 'konitokouassi0@gmail.com'; // ← ton adresse Gmail
        $mail->Password = 'crlm fjcc cbfz ghyk'; // ← mot de passe d'application
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Expéditeur et destinataire
        $mail->setFrom($email, $name);
        $mail->addAddress($to);

        // Contenu
        $mail->isHTML(true);
        $mail->Subject = $email_subject;
        $mail->Body    = $email_body;

        $mail->send();
        echo "✅ Votre message a bien été envoyé.";
    } catch (Exception $e) {
        echo "❌ Erreur lors de l'envoi : {$mail->ErrorInfo}";
    }
} else {
    echo "Requête invalide.";
}
?>