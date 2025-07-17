<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

// Charge les variables d'environnement
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name    = htmlspecialchars(trim($_POST["name"] ?? ''));
    $email   = filter_var($_POST["email"] ?? '', FILTER_SANITIZE_EMAIL);
    $phone   = htmlspecialchars(trim($_POST["phone"] ?? ''));
    $subject = htmlspecialchars(trim($_POST["subject"] ?? ''));
    $message = htmlspecialchars(trim($_POST["message"] ?? ''));

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "❌ Adresse e-mail invalide.";
        exit;
    }

    $email_subject = "Nouveau message de contact : $subject";
    $email_body = "
        <h2>Message reçu depuis le formulaire de contact :</h2>
        <p><strong>Nom :</strong> $name</p>
        <p><strong>Email :</strong> $email</p>
        <p><strong>Téléphone :</strong> $phone</p>
        <p><strong>Sujet :</strong> $subject</p>
        <p><strong>Message :</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>
    ";

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = $_ENV['MAIL_HOST'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['MAIL_USERNAME'];
        $mail->Password   = $_ENV['MAIL_PASSWORD'];
        $mail->SMTPSecure = $_ENV['MAIL_ENCRYPTION'];
        $mail->Port       = $_ENV['MAIL_PORT'];

        $mail->setFrom($_ENV['MAIL_CONTACT_FROM'], $_ENV['MAIL_CONTACT_NAME']);
        $mail->addAddress($_ENV['MAIL_CONTACT_TO']);
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = $email_subject;
        $mail->Body    = $email_body;

        $mail->send();
        echo "✅ Votre message a bien été envoyé.";
    } catch (Exception $e) {
        echo "❌ Erreur lors de l'envoi : " . $mail->ErrorInfo;
    }
} else {
    echo "❌ Requête invalide.";
}
