<?php
// Configuration de base
$page_title = "YDIA CONSTRUCTION - Bâtissons l'avenir ensemble";
$company_name = "YDIA CONSTRUCTION";
$slogan = "Bâtissons l'avenir ensemble";
$primary_color = "#FF6B00";
$secondary_color = "#FFFFFF";
$dark_color = "#333333";
$light_color = "#F5F5F5";

// Vérification si le formulaire a été soumis

// 1. CONFIGURATION PHP INITIALE
// ============================
// Détection de la méthode de requête pour le formulaire de contact
$formSubmitted = false;
$formMessage = '';
$formMessageClass = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['contact_submit'])) {
    // Traitement du formulaire de contact
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r", "\n"), array(" ", " "), $name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = trim($_POST["phone"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    // Validation des données
    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $formMessage = "Veuillez remplir correctement le formulaire.";
        $formMessageClass = "error";
    } else {
        // Simulation d'envoi d'email (à remplacer par un vrai envoi en production)
        $formSubmitted = true;
        $formMessage = "Merci ! Votre message a été envoyé.";
        $formMessageClass = "success";

        // En production, décommenter ceci :
        /*
        $recipient = "contact@ydia-construction.com";
        $email_subject = "Nouveau message de $name : $subject";
        $email_content = "Nom: $name\n";
        $email_content .= "Email: $email\n";
        $email_content .= "Téléphone: $phone\n\n";
        $email_content .= "Message:\n$message\n";
        $email_headers = "From: $name <$email>";
        
        if (mail($recipient, $email_subject, $email_content, $email_headers)) {
            $formSubmitted = true;
            $formMessage = "Merci ! Votre message a été envoyé.";
            $formMessageClass = "success";
        } else {
            $formMessage = "Oops! Une erreur s'est produite lors de l'envoi de votre message.";
            $formMessageClass = "error";
        }
        */
    }
}


// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Récupération des données du formulaire
//     $name = strip_tags(trim($_POST["name"]));
//     $name = str_replace(array("\r", "\n"), array(" ", " "), $name);
//     $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
//     $phone = trim($_POST["phone"]);
//     $subject = trim($_POST["subject"]);
//     $message = trim($_POST["message"]);

//     // Validation des données
//     if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         // Retourner une erreur si validation échoue
//         http_response_code(400);
//         echo "Veuillez remplir correctement le formulaire.";
//         exit;
//     }

//     // Destinataire
//     $recipient = "konitokouassi0@gmail.com";

//     // Sujet de l'email
//     $email_subject = "Nouveau message de $name : $subject";

//     // Construction du contenu de l'email
//     $email_content = "Nom: $name\n";
//     $email_content .= "Email: $email\n";
//     $email_content .= "Téléphone: $phone\n\n";
//     $email_content .= "Message:\n$message\n";

//     // En-têtes de l'email
//     $email_headers = "From: $name <$email>";

//     // Envoi de l'email
//     if (mail($recipient, $email_subject, $email_content, $email_headers)) {
//         // Succès
//         http_response_code(200);
//         echo "Merci ! Votre message a été envoyé.";
//     } else {
//         // Erreur
//         http_response_code(500);
//         echo "Oops! Une erreur s'est produite lors de l'envoi de votre message.";
//     }
// } else {
//     // Méthode non autorisée
//     http_response_code(403);
//     echo "Une erreur s'est produite, veuillez réessayer.";
// }
// require 'phpmailer/PHPMailer.php';
// require 'phpmailer/SMTP.php';
// require 'phpmailer/Exception.php';

// $mail = new PHPMailer\PHPMailer\PHPMailer(true);

// try {
//     $mail->isSMTP();
//     $mail->Host = 'localhost'; // Papercut écoute ici
//     $mail->Port = 25;
//     $mail->SMTPAuth = false;

//     $mail->setFrom('test@local.com', 'Test Local');
//     $mail->addAddress('konitokouassi0@gmail.com', 'Destinataire');

//     $mail->Subject = 'Test PHPMailer + Papercut';
//     $mail->Body    = 'Ceci est un email de test local.';

//     $mail->send();
//     echo '✅ Email envoyé (visible dans Papercut)';
// } catch (PHPMailer\PHPMailer\Exception $e) {
//     echo '❌ Erreur d\'envoi : ' . $e->getMessage();
// }

// // Traitement du formulaire si requête AJAX
// if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ajax'])) {
//     header('Content-Type: application/json');

//     // Récupération des données
//     $name = htmlspecialchars($_POST['name'] ?? '');
//     $email = htmlspecialchars($_POST['email'] ?? '');
//     $phone = htmlspecialchars($_POST['phone'] ?? '');
//     $subject = htmlspecialchars($_POST['subject'] ?? '');
//     $message = htmlspecialchars($_POST['message'] ?? '');

//     // Validation
//     if (empty($name) || empty($email) || empty($subject) || empty($message)) {
//         echo json_encode(['success' => false, 'message' => 'Tous les champs obligatoires doivent être remplis.']);
//         exit;
//     }

//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         echo json_encode(['success' => false, 'message' => 'L\'adresse email n\'est pas valide.']);
//         exit;
//     }

//     // Construction du message
//     $to = "konitokouassi0@gamil.com"; // À remplacer par votre email
//     $email_subject = "[YDIA CONSTRUCTION] $subject";
//     $email_message = "Nouveau message de contact\n\n";
//     $email_message .= "Nom: $name\n";
//     $email_message .= "Email: $email\n";
//     $email_message .= "Téléphone: " . ($phone ? $phone : "Non fourni") . "\n";
//     $email_message .= "Sujet: $subject\n\n";
//     $email_message .= "Message:\n$message";

//     // En-têtes
//     $headers = "From: $email\r\n";
//     $headers .= "Reply-To: $email\r\n";
//     $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

//     // Envoi de l'email
//     if (mail($to, $email_subject, $email_message, $headers)) {
//         echo json_encode(['success' => true, 'message' => 'Merci pour votre message! Nous vous contacterons bientôt.']);
//     } else {
//         echo json_encode(['success' => false, 'message' => 'Une erreur s\'est produite lors de l\'envoi du message.']);
//     }
//     exit;
// }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Reset et styles de base */
        :root {
            --primary: #FF6B00;
            --primary-dark: #E05E00;
            --secondary: #333333;
            --light: #FFFFFF;
            --light-gray: #F5F5F5;
            --medium-gray: #E0E0E0;
            --dark-gray: #666666;
            --text: #333333;
            --text-light: #777777;
            --shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            --shadow-hover: 0 8px 25px rgba(0, 0, 0, 0.15);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            line-height: 1.6;
            color: <?php echo $dark_color; ?>;
            background-color: <?php echo $secondary_color; ?>;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn {
            display: inline-block;
            padding: 12px 25px;
            background-color: <?php echo $primary_color; ?>;
            color: <?php echo $secondary_color; ?>;
            border-radius: 4px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: <?php echo $dark_color; ?>;
            transform: translateY(-2px);
        }

        .btn-outline {
            background-color: transparent;
            border: 2px solid <?php echo $primary_color; ?>;
            color: <?php echo $primary_color; ?>;
        }

        .btn-outline:hover {
            background-color: <?php echo $primary_color; ?>;
            color: <?php echo $secondary_color; ?>;
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 30px;
            position: relative;
            display: inline-block;
            color: <?php echo $dark_color; ?>;
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 70px;
            height: 4px;
            background-color: <?php echo $primary_color; ?>;
        }

        .text-center {
            text-align: center;
        }

        .text-center .section-title:after {
            left: 50%;
            transform: translateX(-50%);
        }

        /* Header */
        header {
            background-color: <?php echo $secondary_color; ?>;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }

        .logo {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .logo img {
            height: 50px;
            margin-right: 10px;
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: 700;
            color: <?php echo $primary_color; ?>;
        }

        nav ul {
            display: flex;
        }

        nav ul li {
            margin-left: 30px;
            position: relative;
        }

        nav ul li a {
            font-weight: 600;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: <?php echo $primary_color; ?>;
        }

        .mobile-menu-btn {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            position: relative;
            height: 100vh;
            min-height: 600px;
            color: <?php echo $secondary_color; ?>;
            display: flex;
            align-items: center;
            text-align: center;
            margin-top: 80px;
            overflow: hidden;
        }

        /* Nouveaux styles pour la vidéo de fond */
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
            z-index: -2;
        }

        .hero-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.7;
            /* Transparence de la vidéo */
            mix-blend-mode: overlay;
            /* Effet de fusion avec l'image */
        }

        .hero-video video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Conserve vos styles existants */
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            z-index: 1;
            animation: fadeInUp 1s ease-out;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        .hero-btns {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero {
                height: auto;
                padding: 120px 0;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero-btns {
                flex-direction: column;
                align-items: center;
            }

            .hero-video {
                opacity: 0.5;
                /* Plus transparent sur mobile */
            }
        }

        /* About Section */
        .about {
            padding: 100px 0;
            background-color: <?php echo $secondary_color; ?>;
        }

        .about-content {
            display: flex;
            align-items: center;
            gap: 50px;
        }

        .about-text {
            flex: 1;
        }

        .about-text p {
            text-align: justify;
        }

        .about-img {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .about-img img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* Section Stats */
        .stats {
            background: var(--primary);
            color: var(--light);
            padding: 70px 0;
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 30px;
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            transition: font-size 0.3s ease;
        }

        .stat-text {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Responsive Design */
        @media screen and (max-width: 768px) {
            .stat-number {
                font-size: 2.5rem;
            }

            .stat-text {
                font-size: 1rem;
            }
        }

        @media screen and (max-width: 480px) {
            .stat-number {
                font-size: 2rem;
            }

            .stat-text {
                font-size: 0.95rem;
            }

            .stats-container {
                grid-template-columns: 1fr;
                text-align: center;
            }
        }

        /* Services Section */
        .services {
            padding: 100px 0;
            background-color: <?php echo $light_color; ?>;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .service-card {
            background-color: <?php echo $secondary_color; ?>;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .service-img {
            height: 200px;
            overflow: hidden;
        }

        .service-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .service-card:hover .service-img img {
            transform: scale(1.1);
        }

        .service-content {
            padding: 25px;
        }

        .service-content h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: <?php echo $primary_color; ?>;
        }

        .service-content p {
            text-align: justify;
        }

        /* Projects Section */
        .projects {
            padding: 100px 0;
            background-color: <?php echo $secondary_color; ?>;
        }

        .projects-filter {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
            gap: 10px;
        }

        .filter-btn {
            padding: 8px 20px;
            background-color: transparent;
            border: 1px solid <?php echo $primary_color; ?>;
            color: <?php echo $primary_color; ?>;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn.active,
        .filter-btn:hover {
            background-color: <?php echo $primary_color; ?>;
            color: <?php echo $secondary_color; ?>;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
        }

        .project-card {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            height: 250px;
        }

        .project-img {
            width: 100%;
            height: 100%;
        }

        .project-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .project-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 20px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .project-card:hover .project-overlay {
            opacity: 1;
        }

        .project-overlay h3 {
            color: <?php echo $secondary_color; ?>;
            margin-bottom: 10px;
            transform: translateY(20px);
            transition: transform 0.3s ease;
        }

        .project-overlay p {
            color: rgba(255, 255, 255, 0.8);
            transform: translateY(20px);
            transition: transform 0.3s ease 0.1s;
        }

        .project-card:hover .project-overlay h3,
        .project-card:hover .project-overlay p {
            transform: translateY(0);
        }

        /* Careers Section */
        .careers {
            padding: 100px 0;
            background-color: <?php echo $light_color; ?>;
        }

        .careers-content {
            display: flex;
            gap: 50px;
            align-items: center;
        }

        .careers-text {
            flex: 1;
        }

        .careers-text p {
            text-align: justify;
        }

        .careers-img {
            flex: 1;
        }

        .careers-img img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Testimonials Section */
        .testimonials {
            padding: 100px 0;
            background-color: <?php echo $secondary_color; ?>;
        }

        .testimonials-slider {
            max-width: 800px;
            margin: 50px auto 0;
            position: relative;
        }

        .testimonial {
            background-color: <?php echo $light_color; ?>;
            padding: 40px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            display: none;
        }

        .testimonial.active {
            display: block;
        }

        .testimonial-text {
            font-size: 1.1rem;
            font-style: italic;
            margin-bottom: 30px;
            position: relative;
        }

        .testimonial-text:before,
        .testimonial-text:after {
            content: '"';
            font-size: 2rem;
            color: <?php echo $primary_color; ?>;
            opacity: 0.5;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .author-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
        }

        .author-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .author-info h4 {
            color: <?php echo $primary_color; ?>;
            margin-bottom: 5px;
        }

        .author-info p {
            color: <?php echo $dark_color; ?>;
            opacity: 0.7;
            font-size: 0.9rem;
        }

        .slider-controls {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .slider-dot {
            width: 12px;
            height: 12px;
            background-color: #ccc;
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .slider-dot.active {
            background-color: <?php echo $primary_color; ?>;
        }

        /* Contact Section */
        .contact {
            padding: 100px 0;
            background-color: <?php echo $light_color; ?>;
        }

        .contact-container {
            display: flex;
            gap: 50px;
        }

        .contact-info {
            flex: 1;
        }

        .contact-info h3 {
            font-size: 1.8rem;
            margin-bottom: 30px;
            color: <?php echo $primary_color; ?>;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
        }

        .info-icon {
            font-size: 1.5rem;
            color: <?php echo $primary_color; ?>;
            margin-right: 15px;
            margin-top: 5px;
        }

        .info-text h4 {
            margin-bottom: 5px;
        }

        .contact-form {
            flex: 1;
            background-color: <?php echo $secondary_color; ?>;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: <?php echo $primary_color; ?>;
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        .info-item .map-container {
            margin-top: 10px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .map-link {
            display: block;
            text-align: center;
            margin-top: 8px;
            color: <?php echo $light_color; ?>;
            font-size: 0.9em;
            text-decoration: none;
        }

        .map-link:hover {
            text-decoration: underline;
        }

        /* Adaptation pour mobile */
        @media (max-width: 768px) {
            .info-item .map-container iframe {
                height: 150px;
            }
        }

        /* Footer */
        footer {
            background-color: <?php echo $dark_color; ?>;
            color: <?php echo $secondary_color; ?>;
            padding: 70px 0 30px;
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 50px;
        }

        .footer-col h3 {
            font-size: 1.3rem;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-col h3:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: <?php echo $primary_color; ?>;
        }

        .footer-col p {
            margin-bottom: 20px;
            opacity: 0.8;
            text-align: justify;
        }

        .footer-links li {
            margin-bottom: 15px;
        }

        #linkss li {
            margin: 7px 0;
        }

        .footer-links a {
            opacity: 0.8;
            transition: opacity 0.3s ease, color 0.3s ease;
        }

        .footer-links a:hover {
            opacity: 1;
            color: <?php echo $primary_color; ?>;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background-color: <?php echo $primary_color; ?>;
            transform: translateY(-3px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer-bottom p {
            opacity: 0.7;
            font-size: 0.9rem;
        }

        /* Responsive Design */
        @media (max-width: 992px) {

            .about-content,
            .careers-content,
            .contact-container {
                flex-direction: column;
            }

            .about-img,
            .careers-img,
            .contact-info,
            .contact-form {
                width: 100%;
            }

            .hero h1 {
                font-size: 2.8rem;
            }
        }

        @media (max-width: 768px) {
            .mobile-menu-btn {
                display: block;
            }

            nav {
                position: fixed;
                top: 80px;
                left: -100%;
                width: 100%;
                height: calc(100vh - 80px);
                background-color: <?php echo $secondary_color; ?>;
                transition: left 0.3s ease;
                padding: 30px 0;
                overflow-y: auto;
            }

            nav.active {
                left: 0;
            }

            nav ul {
                flex-direction: column;
                align-items: center;
            }

            nav ul li {
                margin: 15px 0;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero-btns {
                flex-direction: column;
                gap: 15px;
            }

            .projects-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .section-title {
                font-size: 2rem;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }
        }

        #scrollTopBtn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
            background-color: #FF6B00;
            /* orange */
            color: #FFFFFF;
            border: none;
            padding: 12px 16px;
            border-radius: 50%;
            font-size: 20px;
            cursor: pointer;
            box-shadow: 0 2px 6px rgba(51, 51, 51, 0.3);
            transition: opacity 0.3s ease, transform 0.3s ease;
            opacity: 0;
            pointer-events: none;
        }

        #scrollTopBtn.show {
            opacity: 1;
            pointer-events: auto;
        }

        /* Effet au survol */
        #scrollTopBtn:hover {
            background-color: #e85d00;
            transform: scale(1.05);
        }

        /* Responsive : adapter taille et position sur petits écrans */
        @media screen and (max-width: 768px) {
            #scrollTopBtn {
                bottom: 20px;
                right: 20px;
                padding: 10px 14px;
                font-size: 18px;
            }
        }

        @media screen and (max-width: 480px) {
            #scrollTopBtn {
                bottom: 15px;
                right: 15px;
                padding: 8px 12px;
                font-size: 16px;
            }
        }

        /* zone partenaires */
        .partners-section {
            padding: 50px 0;
            overflow: hidden;
        }

        .partners-section h2 {
            text-align: center;
            margin-bottom: 40px;
            color: #333;
        }

        .partners-flow {
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .partners-track {
            display: flex;
            width: calc(250px * 10);
            /* Largeur totale adaptée au nombre de logos */
            animation: scroll 30s linear infinite;
        }

        .partner {
            width: 200px;
            height: 100px;
            margin: 0 25px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .partner img {
            max-width: 100%;
            max-height: 100%;
            filter: grayscale(100%);
            opacity: 0.7;
            transition: all 0.3s ease;
        }

        .partner:hover img {
            filter: grayscale(0%);
            opacity: 1;
            transform: scale(1.05);
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-250px * 5));
                /* Déplacement de la moitié de la largeur totale */
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <a href="index.php">
                    <img src="image/logo/logo_Ydia.png" alt="YDIA CONSTRUCTION Logo">
                </a>
            </div>

            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>

            <nav id="mainNav">
                <ul>
                    <li><a href="#home">Accueil</a></li>
                    <li><a href="#about">Qui sommes-nous</a></li>
                    <li><a href="#services">Domaines d'expertise</a></li>
                    <li><a href="#projects">Nos projets</a></li>
                    <li><a href="#careers">Carrières</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <!-- Vidéo de fond -->
        <div class="hero-video">
            <video autoplay muted loop playsinline>
                <source src="image/hero_index.mp4" type="video/mp4">
                <!-- Fallback image si la vidéo ne charge pas -->
                <img src="image/construction-pont.mp4" alt="Fond de construction">
            </video>
            <div class="video-overlay"></div>
        </div>
        <div class="hero-content">
            <h1><?php echo $slogan; ?></h1>
            <p>YDIA CONSTRUCTION est une entreprise spécialisée dans le BTP (Batiment Travaux Publics), offrant des solutions innovantes et durables pour tous vos projets de construction.</p>
            <div class="hero-btns">
                <a href="#contact" class="btn">Nous contacter</a>
                <a href="#services" class="btn btn-outline">Nos services</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <h2 class="section-title">Qui sommes-nous</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>YDIA CONSTRUCTION est une filiale de YADI GROUP, créée en 2022 pour accompagner la diversification de nos activités et répondre aux besoins croissants en infrastructures modernes, tant en milieu urbain que rural.</p>
                    <p>Spécialisée dans le Bâtiment et les Travaux Publics (BTP), notre entreprise s'appuie sur une équipe qualifiée composée d’ingénieurs, de techniciens et d’ouvriers expérimentés.</p>
                    <p>Notre approche allie expertise technique, rigueur professionnelle et innovation, avec pour objectif de livrer des projets durables, fonctionnels et adaptés aux exigences de nos clients.</p>
                    <p>Nous plaçons la qualité, la sécurité et le respect des délais au cœur de chacune de nos réalisations, dans une logique de collaboration transparente et de satisfaction durable.</p>
                    <a href="#services" class="btn" style="margin-top: 20px;">Découvrez nos services</a>
                </div>

                <div class="about-img">
                    <img src="image/qui-sommes-nous.png" alt="Équipe YDIA CONSTRUCTION">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-container">
                <div class="stat-item">
                    <div class="stat-number" data-target="3" data-suffix="+">0</div>
                    <div class="stat-text">Ans d'expérience</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-target="100" data-suffix="+">0</div>
                    <div class="stat-text">Projets réalisés</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-target="50" data-suffix="+">0</div>
                    <div class="stat-text">Clients satisfaits</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-target="100" data-suffix="%">0</div>
                    <div class="stat-text">Engagement qualité</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <h2 class="section-title text-center">Domaines d'expertise</h2>

            <div class="services-grid">
                <div class="service-card">
                    <div class="service-img">
                        <img src="image/construction-batiment.jpg" alt="Construction de bâtiments">
                    </div>
                    <div class="service-content">
                        <h3>Construction de bâtiments</h3>
                        <p>Conception et construction de bâtiments résidentiels, commerciaux et industriels sur mesure, répondant aux normes les plus strictes.</p>
                        <a href="construction-batiments.php" class="btn btn-outline" style="margin-top: 15px;">En savoir plus</a>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Travaux publics">
                    </div>
                    <div class="service-content">
                        <h3>Travaux publics</h3>
                        <p>Réalisation de travaux publiques : Voiries et Resaux Divers, routes, ponts, dallots, etc.</p>
                        <a href="travaux-publics.php" class="btn btn-outline" style="margin-top: 15px;">En savoir plus</a>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-img">
                        <img src="image/renovation.jpg" alt="Rénovation">
                    </div>
                    <div class="service-content">
                        <h3>Rénovation</h3>
                        <p>Réhabilitation et modernisation de bâtiments existants pour améliorer leur fonctionnalité, efficacité énergétique et esthétique.</p>
                        <a href="renovation.php" class="btn btn-outline" style="margin-top: 15px;">En savoir plus</a>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Aménagement intérieur">
                    </div>
                    <div class="service-content">
                        <h3>Aménagement intérieur</h3>
                        <p>Création d'espaces intérieurs fonctionnels et esthétiques, alliant design et qualité pour un confort optimal.</p>
                        <a href="amenagement-interieur.php" class="btn btn-outline" style="margin-top: 15px;">En savoir plus</a>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-img">
                        <img src="image/bulldozer.jpg" alt="Engins de chantier BTP">
                    </div>
                    <div class="service-content">
                        <h3>Location d'engins BTP</h3>
                        <p>Nous mettons à votre disposition une large gamme d'engins de chantier : pelles hydrauliques, bulldozers, niveleuses, camions bennes, compacteurs, et plus encore. Disponibilité rapide, matériel fiable, avec ou sans opérateur.</p>
                        <a href="location-engins.php" class="btn btn-outline" style="margin-top: 15px;">En savoir plus</a>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-img">
                        <img src="image/gestion-de-projets.jpg" alt="Gestion de projet">
                    </div>
                    <div class="service-content">
                        <h3>Gestion de projet</h3>
                        <p>Coordination complète de votre projet de construction, de la conception à la livraison, garantissant qualité, délais et budget.</p>
                        <a href="gestion-projet.php" class="btn btn-outline" style="margin-top: 15px;">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="projects" id="projects">
        <div class="container">
            <h2 class="section-title text-center">Nos réalisations</h2>
            <p class="text-center" style="max-width: 700px; margin: 0 auto 40px;">Découvrez une sélection de nos projets récents qui témoignent de notre expertise et de notre engagement envers l'excellence.</p>

            <div class="projects-filter">
                <button class="filter-btn active" data-filter="all">Tous</button>
                <button class="filter-btn" data-filter="batiment">Bâtiments</button>
                <button class="filter-btn" data-filter="travaux-publics">Travaux publics</button>
                <button class="filter-btn" data-filter="renovation">Rénovation</button>
                <button class="filter-btn" data-filter="interieur">Aménagement intérieur</button>
            </div>

            <div class="projects-grid">
                <div class="project-card" data-category="batiment">
                    <div class="project-img">
                        <img src="https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Tour résidentielle">
                    </div>
                    <div class="project-overlay">
                        <h3>Tour résidentielle "Les Cèdres"</h3>
                        <!-- <p>Côte d'Ivoire, 2022 - 25 étages, 120 appartements</p> -->
                    </div>
                </div>

                <div class="project-card" data-category="travaux-publics">
                    <div class="project-img">
                        <img src="image/route a14.jpg" alt="Pont autoroutier">
                    </div>
                    <div class="project-overlay">
                        <h3>Pont autoroutier A14</h3>
                        <!-- <p>Bingerville, 2021 - Longueur: 850m</p> -->
                    </div>
                </div>

                <div class="project-card" data-category="renovation">
                    <div class="project-img">
                        <img src="image/renov (9).jpeg" alt="Rénovation d'hôtel">
                    </div>
                    <div class="project-overlay">
                        <h3>Institut Pasteur</h3>
                        <!-- <p>Lyon, 2020 - Rénovation complète 5 étoiles</p> -->
                    </div>
                </div>

                <div class="project-card" data-category="interieur">
                    <div class="project-img">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Bureaux modernes">
                    </div>
                    <div class="project-overlay">
                        <h3>Siège social Yadi Groupe</h3>
                        <!-- <p>Yopougon, 2021 - 5 000m² d'espaces de travail</p> -->
                    </div>
                </div>

                <div class="project-card" data-category="batiment">
                    <div class="project-img">
                        <img src="image/centre commercial.jpg" alt="Centre commercial">
                    </div>
                    <div class="project-overlay">
                        <h3>Centre commercial "Les Terrasses"</h3>
                        <!-- <p>Adjame, 2019 - 45 000m² de surface commerciale</p> -->
                    </div>
                </div>

                <div class="project-card" data-category="travaux-publics">
                    <div class="project-img">
                        <img src="image/reseau d'assainissement.jpg" alt="Réseau d'assainissement">
                    </div>
                    <div class="project-overlay">
                        <h3>Réseau d'assainissement</h3>
                        <!-- <p>Cocody, 2018 - 12km de canalisations</p> -->
                    </div>
                </div>
            </div>

            <div class="text-center" style="margin-top: 50px;">
                <a href="nos-projets.php" class="btn">Voir tous nos projets</a>
            </div>
        </div>
    </section>

    <!-- Careers Section -->
    <section class="careers" id="careers">
        <div class="container">
            <h2 class="section-title">Carrières</h2>

            <div class="careers-content">
                <div class="careers-text">
                    <p>Rejoignez une équipe dynamique et passionnée qui repousse constamment les limites de l'innovation dans le secteur du BTP. Chez YDIA CONSTRUCTION, nous croyons que nos collaborateurs sont notre plus grande richesse.</p>
                    <p>Nous offrons des opportunités de carrière stimulantes dans divers domaines : ingénierie, gestion de projet, construction, architecture, et bien d'autres. Que vous soyez un professionnel expérimenté ou un jeune diplômé, nous avons une place pour vous.</p>
                    <p>Nos avantages :</p>
                    <ul style="margin: 20px 0 30px;">
                        <li><i class="fas fa-check" style="color: <?php echo $primary_color; ?>; margin-right: 10px;"></i> Formations continues et développement professionnel</li>
                        <li><i class="fas fa-check" style="color: <?php echo $primary_color; ?>; margin-right: 10px;"></i> Environnement de travail innovant et collaboratif</li>
                        <li><i class="fas fa-check" style="color: <?php echo $primary_color; ?>; margin-right: 10px;"></i> Rémunération compétitive et avantages sociaux</li>
                        <li><i class="fas fa-check" style="color: <?php echo $primary_color; ?>; margin-right: 10px;"></i> Opportunités d'évolution de carrière</li>
                    </ul>
                    <a href="offres emploi.php" class="btn">Voir nos offres d'emploi</a>
                </div>

                <div class="careers-img">
                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Équipe YDIA CONSTRUCTION au travail">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <h2 class="section-title text-center">Ils nous font confiance</h2>

            <div class="partners-section">
                <h2>Nos Partenaires</h2>
                <div class="partners-flow">
                    <div class="partners-track">
                        <!-- Première série de logos -->
                        <div class="partner">
                            <img src="image/logo/logo yadi car center-01.png" alt="Yadi Car Center">
                        </div>
                        <div class="partner">
                            <img src="image/logo/YADI Group_Logotype_DDCS_- Vf.jpg" alt="DDCS">
                        </div>
                        <div class="partner">
                            <img src="image/partenaires/enez-cam-logo.jpg" alt="ENEZ CAM">
                        </div>
                        <!-- <div class="partner">
                            <img src="chemin/vers/logo4.png" alt="Partenaire 4">
                        </div>
                        <div class="partner">
                            <img src="chemin/vers/logo5.png" alt="Partenaire 5">
                        </div> -->
                    </div>
                </div>
            </div>

            <!-- <div class="slider-controls">
                <div class="slider-dot active" data-slide="0"></div>
                <div class="slider-dot" data-slide="1"></div>
                <div class="slider-dot" data-slide="2"></div>
            </div> -->
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <h2 class="section-title text-center">Contactez-nous</h2>

            <div class="contact-container">
                <div class="contact-info">
                    <h3>Informations de contact</h3>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-text">
                            <h4>Adresse</h4>
                            <p>123 Avenue des Constructeurs<br>75 Abidjan, Côte d'Ivoire</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="info-text">
                            <h4>Téléphone</h4>
                            <p>+225 07 23 45 67 89</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-text">
                            <h4>Email</h4>
                            <p>contact@ydia-construction.com</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="info-text">
                            <h4>Heures d'ouverture</h4>
                            <p>Lundi - Vendredi: 8h00 - 18h00<br>Samedi: 9h00 - 12h00</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <div class="info-text">
                            <h4>Localisation</h4>
                            <div class="map-container">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2036.6842509804612!2d-3.9730721087485996!3d5.380333403496543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ed76a47d82a7%3A0xc6a9bfa28b626c19!2sROND%20POINT%20CNPS!5e1!3m2!1sfr!2sci!4v1752680035305!5m2!1sfr!2sci"
                                    width="100%"
                                    height="300"
                                    style="border:0;"
                                    allowfullscreen=""
                                    loading="lazy">
                                </iframe>
                                <a href="https://maps.app.goo.gl/nfQ9nkkd1dPaatNR7"
                                    target="_blank"
                                    class="map-link">
                                    Ouvrir dans Google Maps
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <form id="contactForm" action="contact.php" method="POST">
                        <div class="form-group">
                            <label for="name">Nom complet</label>
                            <input type="text" id="name" name="name" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Téléphone</label>
                            <input type="tel" id="phone" name="phone" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                            <label for="subject">Sujet</label>
                            <input type="text" id="subject" name="subject" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" class="form-control" autocomplete="off" required></textarea>
                        </div>

                        <button type="submit" class="btn" style="width: 100%;">Envoyer le message</button>
                    </form>
                    <div id="formMessage" style="display:none; margin-top: 10px;"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-col">
                    <h3><?php echo $company_name; ?></h3>
                    <p><?php echo $slogan; ?></p>
                    <p>Entreprise leader dans le secteur du BTP, engagée dans la construction d'un avenir meilleur grâce à des solutions innovantes et durables.</p>

                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="footer-col">
                    <h3>Liens rapides</h3>
                    <ul class="footer-links" id="linkss">
                        <li><a href="#home">Accueil</a></li>
                        <li><a href="#about">Qui sommes-nous</a></li>
                        <li><a href="#services">Domaines d'expertise</a></li>
                        <li><a href="#projects">Nos projets</a></li>
                        <li><a href="#careers">Carrières</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#">Yadi Groupe</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3>Services</h3>
                    <ul class="footer-links">
                        <li><a href="construction-batiments.php">Construction de bâtiments</a></li>
                        <li><a href="travaux-publics.php">Travaux publics</a></li>
                        <li><a href="renovation.php">Rénovation</a></li>
                        <li><a href="amenagement-interieur.php">Aménagement intérieur</a></li>
                        <li><a href="location-engins.php">Location d'engind BTP</a></li>
                        <li><a href="gestion-projet.php">Gestion de projet</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3>Newsletter</h3>
                    <p>Abonnez-vous à notre newsletter pour recevoir nos dernières actualités et offres.</p>
                    <form class="newsletter-form" action="newsletter.php" method="POST">
                        <div class="form-group" style="margin-bottom: 15px;">
                            <input type="email" placeholder="Votre email" class="form-control" required>
                        </div>
                        <button type="submit" class="btn">S'abonner</button>
                    </form>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> <?php echo $company_name; ?>. Tous droits réservés. | <a href="#">Mentions légales</a> | <a href="#">Politique de confidentialité</a></p>
                <p>by KFernand</p>
            </div>
        </div>
    </footer>

    <!-- Button scroll -->
    <button id="scrollTopBtn" title="Remonter en haut">
        <i class="fas fa-chevron-up"></i>
    </button>

    <script>
        const scrollTopBtn = document.getElementById("scrollTopBtn");

        window.addEventListener("scroll", function() {
            if (window.scrollY > 300) {
                scrollTopBtn.classList.add("show");
            } else {
                scrollTopBtn.classList.remove("show");
            }
        });

        scrollTopBtn.addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>

    <script>
        // Menu mobile
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mainNav = document.getElementById('mainNav');

        mobileMenuBtn.addEventListener('click', () => {
            mainNav.classList.toggle('active');
            mobileMenuBtn.innerHTML = mainNav.classList.contains('active') ? '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
        });

        // Filtrage des projets
        const filterBtns = document.querySelectorAll('.filter-btn');
        const projectCards = document.querySelectorAll('.project-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Retirer la classe active de tous les boutons
                filterBtns.forEach(b => b.classList.remove('active'));
                // Ajouter la classe active au bouton cliqué
                btn.classList.add('active');

                const filter = btn.dataset.filter;

                projectCards.forEach(card => {
                    if (filter === 'all' || card.dataset.category === filter) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // Slider témoignages
        const testimonials = document.querySelectorAll('.testimonial');
        const dots = document.querySelectorAll('.slider-dot');
        let currentSlide = 0;

        function showSlide(n) {
            testimonials.forEach(testimonial => testimonial.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));

            currentSlide = (n + testimonials.length) % testimonials.length;

            testimonials[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active');
        }

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => showSlide(index));
        });

        // Slider automatique
        setInterval(() => {
            showSlide(currentSlide + 1);
        }, 5000);

        // Smooth scrolling pour les liens d'ancrage
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                if (this.getAttribute('href') === '#') return;

                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 80,
                        behavior: 'smooth'
                    });

                    // Fermer le menu mobile si ouvert
                    if (mainNav.classList.contains('active')) {
                        mainNav.classList.remove('active');
                        mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
                    }
                }
            });
        });

        // Gestion de la soumission du formulaire de contact
        // document.addEventListener('DOMContentLoaded', function() {
        //     const contactForm = document.getElementById('contactForm');

        //     if (contactForm) {
        //         contactForm.addEventListener('submit', function(e) {
        //             e.preventDefault();

        //             const formData = new FormData(contactForm);
        //             formData.append('ajax', '1'); // clé importante pour activer le traitement côté PHP

        //             fetch(window.location.href, {
        //                     method: 'POST',
        //                     body: formData
        //                 })
        //                 .then(response => response.json())
        //                 .then(data => {
        //                     if (data.success) {
        //                         alert(data.message); // succès
        //                         contactForm.reset();
        //                     } else {
        //                         alert('Erreur : ' + data.message); // erreur renvoyée par le PHP
        //                     }
        //                 })
        //                 .catch(error => {
        //                     alert("Une erreur s'est produite. Veuillez réessayer.");
        //                     console.error('Erreur AJAX :', error);
        //                 });
        //         });
        //     }
        // });

        // Gestion du formulaire de contact
        // const contactForm = document.querySelector('#contact form');
        // if (contactForm) {
        //     contactForm.addEventListener('submit', function(e) {
        //         e.preventDefault();

        //         const formData = new FormData(this);
        //         const formMessage = document.querySelector('.form-message');

        //         fetch('', {
        //             method: 'POST',
        //             body: formData
        //         })
        //         .then(response => response.text())
        //         .then(data => {
        //             // Gérer la réponse ici si nécessaire
        //             // Dans notre cas, le PHP gère déjà l'affichage du message
        //             window.location.href = '#contact';
        //         })
        //         .catch(error => {
        //             console.error('Error:', error);
        //         });
        //     });
        // }

        // Animation au défilement
        window.addEventListener('scroll', () => {
            const scrollPosition = window.scrollY;

            // Vous pouvez ajouter des animations supplémentaires ici en fonction de la position de défilement
        });
    </script>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const form = e.target;
            const formData = new FormData(form);
            const formMessage = document.getElementById('formMessage');

            fetch(form.action, {
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    return response.text().then(data => {
                        // ✅ On a à la fois "data" ET "response"
                        formMessage.textContent = data;
                        formMessage.style.display = 'block';

                        if (response.ok) {
                            formMessage.style.color = 'green';
                            form.reset();
                        } else {
                            formMessage.style.color = 'red';
                        }
                    });
                })
                .catch(error => {
                    formMessage.textContent = '❌ Une erreur s\'est produite. Veuillez réessayer.';
                    formMessage.style.color = 'red';
                    formMessage.style.display = 'block';
                });
        });
    </script>


    <!-- script stats section -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const counters = document.querySelectorAll(".stat-number");
            let hasAnimated = false;

            const animateCounter = (el, target) => {
                const duration = 1500;
                const increment = target / (duration / 20);
                let count = 0;

                const update = () => {
                    count += increment;
                    if (count < target) {
                        el.textContent = Math.floor(count);
                        requestAnimationFrame(update);
                    } else {
                        el.textContent = target + (el.dataset.suffix || '');
                    }
                };
                update();
            };

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !hasAnimated) {
                        hasAnimated = true;
                        counters.forEach(counter => {
                            const target = +counter.getAttribute("data-target");
                            animateCounter(counter, target);
                        });
                    }
                });
            }, {
                threshold: 0.5
            });

            const statsSection = document.querySelector(".stats");
            if (statsSection) observer.observe(statsSection);
        });

        // Script pour redémarrer la vidéo au survol zone hero
        document.querySelector('.hero-video video').addEventListener('mouseenter', function() {
            this.currentTime = 0;
            this.play();
        });

        // Détection des navigateurs mobiles qui bloquent l'autoplay
        if (/Android|iPhone|iPad/i.test(navigator.userAgent)) {
            const video = document.querySelector('.hero-video video');
            video.play().catch(e => {
                video.style.display = 'none';
            });
        }
    </script>

</body>

</html>