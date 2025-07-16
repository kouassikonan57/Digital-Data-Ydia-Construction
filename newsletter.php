<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$to = 'contact@tonsite.com'; // ← ton e-mail de réception

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Adresse e-mail invalide.";
        exit;
    }

    $subject = "Nouvel abonné à la newsletter";
    $message = "Un utilisateur s'est abonné avec l'adresse : $email";

    $mail = new PHPMailer(true);
    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // ou autre SMTP (Mailjet, Sendinblue…)
        $mail->SMTPAuth = true;
        $mail->Username = 'konitokouassi0@gmail.com'; // ← ton adresse
        $mail->Password = 'crlm fjcc cbfz ghyk'; // ← mot de passe d'application Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Expéditeur et destinataire
        $mail->setFrom('noreply@ydia.com', 'Newsletter');
        $mail->addAddress($to);
        $mail->addReplyTo($email); // Pour te permettre de répondre

        // Contenu
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->isHTML(false);

        $mail->send();
        echo "Merci pour votre inscription !";
    } catch (Exception $e) {
        echo "Erreur lors de l'envoi : " . $mail->ErrorInfo;
    }
} else {
    echo "Données non valides.";
}
?>