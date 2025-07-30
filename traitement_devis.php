<?php
header('Content-Type: application/json'); // Important pour la réponse AJAX

ini_set('display_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$response = [
    'status' => 'error',
    'message' => 'Une erreur inconnue est survenue'
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try {
        // Validation des données
        $nom_client = htmlspecialchars(trim($_POST["nom_client"] ?? ''));
        if (empty($nom_client)) {
            throw new Exception("Le nom est requis");
        }

        $email = filter_var($_POST["email"] ?? '', FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Adresse e-mail invalide");
        }

        // Récupération des autres champs
        $entreprise = htmlspecialchars(trim($_POST["entreprise_ou_particulier_client"] ?? ''));
        $telephone = htmlspecialchars(trim($_POST["telephone"] ?? ''));
        $adresse = htmlspecialchars(trim($_POST["adresse"] ?? ''));
        $engin = htmlspecialchars(trim($_POST["engin"] ?? ''));
        $quantite = (int)($_POST["quantite"] ?? 1);
        $duree = (int)($_POST["duree"] ?? 1);
        $date_debut = htmlspecialchars(trim($_POST["date_debut"] ?? ''));
        $chauffeur = htmlspecialchars(trim($_POST["chauffeur"] ?? 'non'));
        $remarques = htmlspecialchars(trim($_POST["remarques"] ?? ''));

        // Construction de l'email
        $email_subject = "Nouvelle demande de devis location d'engins";
        
        $email_body = "
            <h2>Demande de devis - Location d'engins BTP</h2>
            <h3>Informations client</h3>
            <p><strong>Nom/Prénoms :</strong> $nom_client</p>
            <p><strong>Entreprise/Particulier :</strong> $entreprise</p>
            <p><strong>Email :</strong> $email</p>
            <p><strong>Téléphone :</strong> $telephone</p>
            <p><strong>Adresse :</strong> $adresse</p>
            
            <h3>Détails de la location</h3>
            <p><strong>Type d'engin :</strong> $engin</p>
            <p><strong>Quantité :</strong> $quantite</p>
            <p><strong>Durée :</strong> $duree jours</p>
            <p><strong>Date de début :</strong> $date_debut</p>
            <p><strong>Chauffeur inclus :</strong> " . ($chauffeur === 'oui' ? 'Oui' : 'Non') . "</p>
            
            <h3>Remarques supplémentaires</h3>
            <p>" . nl2br($remarques) . "</p>
        ";

        // Envoi de l'email
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = $_ENV['MAIL_HOST'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['MAIL_USERNAME'];
        $mail->Password   = $_ENV['MAIL_PASSWORD'];
        $mail->SMTPSecure = $_ENV['MAIL_ENCRYPTION'];
        $mail->Port       = $_ENV['MAIL_PORT'];

        $mail->setFrom($_ENV['MAIL_CONTACT_FROM'], $_ENV['MAIL_CONTACT_NAME']);
        $mail->addAddress($_ENV['MAIL_CONTACT_TO']);
        $mail->addReplyTo($email, $nom_client);

        $mail->isHTML(true);
        $mail->Subject = $email_subject;
        $mail->Body    = $email_body;

        if ($mail->send()) {
            $response = [
                'status' => 'success',
                'message' => 'Votre demande de devis a bien été envoyée. Nous vous contacterons sous peu.'
            ];
        } else {
            throw new Exception("Erreur lors de l'envoi de l'email");
        }
    } catch (Exception $e) {
        $response = [
            'status' => 'error',
            'message' => '❌ ' . $e->getMessage()
        ];
    }
} else {
    $response['message'] = '❌ Méthode non autorisée';
}

echo json_encode($response);