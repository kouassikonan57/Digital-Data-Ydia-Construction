<?php
// Configuration de base
$page_title = "YDIA CONSTRUCTION - Bâtissons l'avenir ensemble";
$company_name = "YDIA CONSTRUCTION";
$author_name = "KFernand";
$slogan = "Bâtissons l'avenir ensemble";
$primary_color = "#FF6B00"; // Orange
$secondary_color = "#FFFFFF"; // Blanc
$dark_color = "#333333"; // Gris foncé
$light_color = "#F5F5F5"; // Gris clair
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <title>Offres d'Emploi</title>
    <style>
        /* --- Styles CSS pour la page Emploi --- */
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
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('image/Batiments-Travaux-Publics.png') no-repeat center center/cover;
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

        .job-listing {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        #job-board {
            margin-top: 150px;
            margin-bottom: 50px;
            margin-left: 80px;
            margin-right: 80px;
        }

        .job-listing-info {
            display: flex;
            align-items: center;
        }

        .job-listing img {
            max-width: 80px;
            height: auto;
            margin-right: 15px;
            border-radius: 5px;
        }

        .job-title {
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .job-location {
            color: #6c757d;
            font-size: 0.9em;
        }

        .job-deadline {
            color: #d9534f;
            font-size: 0.9em;
            font-weight: bold;
        }

        .share-button-container {
            position: relative;
            display: inline-block;
            margin-left: 10px;
        }

        .share-button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 12px;
            cursor: pointer;
            font-size: 0.9em;
            background-image: linear-gradient(to right, #007bff 0%, #007bff 50%, #0056b3 50%, #0056b3 100%);
            background-size: 200% 100%;
            background-position: 100% 0%;
            transition: background-position 0.3s ease-in-out;
        }

        .share-button:hover {
            background-position: 0% 0%;
        }

        .share-menu {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 10;
            min-width: 120px;
            padding: 5px 0;
            text-align: left;
        }

        .share-menu a {
            text-decoration: none !important;
        }

        .share-button-container.open .share-menu {
            display: block;
        }

        .share-option {
            display: block;
            padding: 8px 15px;
            text-decoration: none;
            color: #333;
            font-size: 0.9em;
            cursor: pointer;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
        }

        .share-option:hover {
            background-color: #f0f0f0;
        }

        .share-facebook {
            color: #1877f2;
        }

        .share-whatsapp {
            color: #25d366;
        }

        .share-linkedin {
            color: #0a66c2;
        }

        .share-sms {
            color: #00bfff;
        }

        .job-details-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .job-details-content {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 80%;
            overflow-y: auto;
            max-height: 90%;
            position: relative;
            text-align: left;
        }

        .job-details-content img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .job-details-title {
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 15px;
            color: <?php echo $primary_color; ?>;
        }

        .job-details-info {
            color: #6c757d;
            font-size: 0.9em;
            margin-bottom: 10px;
        }

        .job-description,
        .job-profile,
        .application-instructions {
            margin-bottom: 20px;
        }

        .job-details-content h3 {
            color: <?php echo $primary_color; ?>;
            margin-bottom: 10px;
        }

        .apply-button {
            background-color: <?php echo $primary_color; ?>;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
            transition: background-color 0.3s ease;
        }

        .apply-button:hover {
            background-color: <?php echo $dark_color; ?>;
        }

        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 1.5em;
            color: #6c757d;
            cursor: pointer;
            border: none;
            background: none;
        }

        .job-expired {
            display: none;
            background-color: #fdecea;
            color: #d9534f;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            margin-top: 10px;
        }

        .job-details-table {
            width: 80%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }

        .job-details-table th,
        .job-details-table td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .job-details-table th {
            font-weight: bold;
            background-color: #f2f2f2;
        }

        .image-container {
            width: 100%;
            height: 120px;
            margin-bottom: 10px;
            overflow: hidden;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: contain;
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
            .contact-container {
                flex-direction: column;
            }

            .contact-info,
            .contact-form {
                width: 100%;
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

            #job-board {
                margin-left: 20px;
                margin-right: 20px;
            }
        }

        @media (max-width: 576px) {
            .section-title {
                font-size: 2rem;
            }
        }

        #scrollTopBtn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
            background-color: <?php echo $primary_color; ?>;
            color: <?php echo $secondary_color; ?>;
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

        #scrollTopBtn:hover {
            background-color: #e85d00;
            transform: scale(1.05);
        }

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
                    <li><a href="index.php#home">Accueil</a></li>
                    <li><a href="index.php#about">Qui sommes-nous</a></li>
                    <li><a href="index.php#services">Domaines d'expertise</a></li>
                    <li><a href="index.php#projects">Nos projets</a></li>
                    <li><a href="index.php#careers">Carrières</a></li>
                    <li><a href="index.php#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Section de job -->
    <div id="job-board">
    </div>

    <div id="jobDetailsModal" class="job-details-modal">
        <div class="job-details-content">
            <button class="close-button">&times;</button>
            <img id="modal-job-image" src="" alt="">
            <h2 id="modal-job-title" class="job-details-title"></h2>
            <table class="job-details-table">
                <tr>
                    <th>Métier(s) :</th>
                    <td id="modal-job-metier"></td>
                </tr>
                <tr>
                    <th>Niveau(x) :</th>
                    <td id="modal-job-niveau"></td>
                </tr>
                <tr>
                    <th>Expérience :</th>
                    <td id="modal-job-experience"></td>
                </tr>
                <tr>
                    <th>Lieu :</th>
                    <td id="modal-job-lieu"></td>
                </tr>
                <tr>
                    <th>Date d'édition :</th>
                    <td id="modal-job-edition-date"></td>
                </tr>
                <tr>
                    <th>Date limite :</th>
                    <td id="modal-job-deadline"></td>
                </tr>
            </table>
            <div class="job-description">
                <h3>Description du Poste</h3>
                <p id="modal-job-description"></p>
            </div>
            <div class="job-profile">
                <h3>Profil Recherché</h3>
                <p id="modal-job-profile"></p>
            </div>
            <div class="application-instructions">
                <h3>Dossier de Candidature</h3>
                <p id="modal-application-instructions"></p>
            </div>
            <a id="applyButton" class="apply-button" href="#">Postuler</a>
        </div>
    </div>

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
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="index.php#about">Qui sommes-nous</a></li>
                        <li><a href="index.php#services">Domaines d'expertise</a></li>
                        <li><a href="index.php#projects">Nos projets</a></li>
                        <li><a href="index.php#careers">Carrières</a></li>
                        <li><a href="index.php#contact">Contact</a></li>
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
                        <li><a href="construction-durable.php">Construction durable</a></li>
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
                <p>by <?php echo $author_name; ?></p>
            </div>
        </div>
    </footer>

    <!-- Button scroll -->
    <button id="scrollTopBtn" title="Remonter en haut">
        <i class="fas fa-chevron-up"></i>
    </button>

    <script>
        const jobBoard = document.getElementById('job-board');
        const jobDetailsModal = document.getElementById('jobDetailsModal');
        const modalJobImage = document.getElementById('modal-job-image');
        const modalJobTitle = document.getElementById('modal-job-title');
        const modalJobDescription = document.getElementById('modal-job-description');
        const modalJobProfile = document.getElementById('modal-job-profile');
        const modalApplicationInstructions = document.getElementById('modal-application-instructions');
        const modalJobMetier = document.getElementById('modal-job-metier');
        const modalJobNiveau = document.getElementById('modal-job-niveau');
        const modalJobExperience = document.getElementById('modal-job-experience');
        const modalJobLieu = document.getElementById('modal-job-lieu');
        const modalJobEditionDate = document.getElementById('modal-job-edition-date');
        const modalJobDeadline = document.getElementById('modal-job-deadline');
        const applyButton = document.getElementById('applyButton');
        const closeDetailsButton = jobDetailsModal.querySelector('.close-button');

        const jobOpenings = [
            {
                id: 1,
                title: 'Développeur Web Front-end',
                location: 'Abidjan, Côte d\'Ivoire',
                image: 'image/img.png',
                description: 'Nous recherchons un développeur Front-end passionné...',
                profile: 'Expérience avec React, Angular ou Vue.js...',
                applicationInstructions: 'Envoyez votre CV et portfolio...',
                deadline: '2025-04-21',
                editionDate: '2025-04-07',
                metier: 'Développement Web',
                niveau: 'Bac +3 et plus',
                experience: '2 ans minimum',
                recipientEmail: 'recrutement@ydia.com',
                shareButtonsHTML: `
                    <div class="share-button-container">
                        <button class="share-button">Partager</button>
                        <div class="share-menu">
                            <a href="#" class="share-option share-facebook" data-platform="facebook">Facebook</a>
                            <a href="#" class="share-option share-whatsapp" data-platform="whatsapp">WhatsApp</a>
                            <a href="#" class="share-option share-linkedin" data-platform="linkedin">LinkedIn</a>
                            <a href="#" class="share-option share-sms" data-platform="sms">SMS</a>
                            <button class="share-option share-copy-link" data-platform="copylink">Copier le lien</button>
                        </div>
                    </div>
                `
            },
            {
                id: 2,
                title: 'Chef de Projet IT',
                location: 'Abidjan, Côte d\'Ivoire',
                image: 'https://',
                description: 'Nous sommes à la recherche d\'un Chef de Projet IT expérimenté...',
                profile: 'Solides compétences en gestion de projet...',
                applicationInstructions: 'Veuillez soumettre votre candidature...',
                deadline: '2025-04-20',
                editionDate: '2025-04-05',
                metier: 'Gestion de Projet',
                niveau: 'Bac +5 et plus',
                experience: '5 ans minimum',
                recipientEmail: 'recrutement@ydia.com',
                shareButtonsHTML: `
                    <div class="share-button-container">
                        <button class="share-button">Partager</button>
                        <div class="share-menu">
                            <a href="#" class="share-option share-facebook" data-platform="facebook">Facebook</a>
                            <a href="#" class="share-option share-whatsapp" data-platform="whatsapp">WhatsApp</a>
                            <a href="#" class="share-option share-linkedin" data-platform="linkedin">LinkedIn</a>
                            <a href="#" class="share-option share-sms" data-platform="sms">SMS</a>
                            <button class="share-option share-copy-link" data-platform="copylink">Copier le lien</button>
                        </div>
                    </div>
                `
            }
        ];

        function formatDate(dateString) {
            const date = new Date(dateString);
            return date.toLocaleDateString('fr-FR');
        }

        function displayJobs() {
            const now = new Date();
            jobBoard.innerHTML = '';

            let hasActiveJob = false;

            jobOpenings.forEach(job => {
                const deadlineDate = new Date(job.deadline);
                const isExpired = deadlineDate < now;

                const jobListing = document.createElement('div');
                jobListing.classList.add('job-listing');

                if (isExpired) {
                    jobListing.classList.add('job-expired');
                    jobListing.innerHTML = `<p style="color:red;">Offre expirée le ${formatDate(job.deadline)}</p>`;
                } else {
                    hasActiveJob = true;
                    jobListing.innerHTML = `
                        <div class="job-listing-info">
                            <img src="${job.image}" alt="${job.title}">
                            <div>
                                <h3 class="job-title">${job.title}</h3>
                                <p class="job-location">${job.location}</p>
                            </div>
                        </div>
                        <p class="job-deadline">Limite: ${formatDate(job.deadline)}</p>
                        ${job.shareButtonsHTML || ''}
                    `;
                    jobListing.addEventListener('click', (event) => {
                        if (!event.target.closest('.share-button-container')) {
                            showJobDetails(job);
                        }
                    });
                }

                jobBoard.appendChild(jobListing);
            });

            if (!hasActiveJob) {
                const message = document.createElement('p');
                message.textContent = "AUCUNE OFFRE DISPONIBLE";
                message.style.color = "#DF0C36";
                message.style.fontWeight = "bold";
                message.style.fontSize = "1.1em";
                message.style.textAlign = "center";
                message.style.marginTop = "20px";
                jobBoard.appendChild(message);
            }
        }

        function showJobDetails(job) {
            modalJobImage.src = job.image;
            modalJobImage.alt = job.title;
            modalJobTitle.textContent = job.title;
            modalJobMetier.textContent = job.metier;
            modalJobNiveau.textContent = job.niveau;
            modalJobExperience.textContent = job.experience;
            modalJobLieu.textContent = job.location;
            modalJobEditionDate.textContent = formatDate(job.editionDate);
            modalJobDeadline.textContent = formatDate(job.deadline);
            modalJobDescription.textContent = job.description;
            modalJobProfile.textContent = job.profile;
            modalApplicationInstructions.textContent = job.applicationInstructions;
            
            // Configuration du lien mailto pour le bouton Postuler
            const subject = `Candidature pour le poste de ${job.title}`;
            const body = `Bonjour,\n\nJe souhaite postuler pour le poste de ${job.title}.\n\nVeuillez trouver ci-joint mon CV et ma lettre de motivation.\n\nCordialement,\n[Votre nom]`;
            applyButton.href = `mailto:${job.recipientEmail}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
            
            jobDetailsModal.style.display = 'flex';
        }

        function hideJobDetails() {
            jobDetailsModal.style.display = 'none';
        }

        closeDetailsButton.addEventListener('click', hideJobDetails);
        window.addEventListener('click', function(event) {
            if (event.target === jobDetailsModal) {
                hideJobDetails();
            }
        });

        document.addEventListener('DOMContentLoaded', () => {
            jobBoard.addEventListener('click', function(event) {
                const shareButton = event.target.closest('.share-button');
                if (shareButton) {
                    event.stopPropagation();
                    const container = shareButton.closest('.share-button-container');
                    container.classList.toggle('open');
                    return;
                }

                const shareOption = event.target.closest('.share-option');
                if (shareOption) {
                    event.preventDefault();
                    event.stopPropagation();

                    const platform = shareOption.dataset.platform;
                    const jobListing = shareOption.closest('.job-listing');
                    const jobTitleElement = jobListing.querySelector('.job-title');
                    const jobTitle = jobTitleElement ? jobTitleElement.textContent : 'Offre d\'emploi';
                    const jobLink = window.location.href;

                    let shareUrl = '';
                    const shareText = `Offre d'emploi: ${jobTitle} - ${jobLink}`;

                    switch (platform) {
                        case 'facebook':
                            shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(jobLink)}`;
                            window.open(shareUrl, '_blank');
                            break;
                        case 'whatsapp':
                            shareUrl = `https://api.whatsapp.com/send?text=${encodeURIComponent(shareText)}`;
                            window.open(shareUrl, '_blank');
                            break;
                        case 'linkedin':
                            shareUrl = `https://www.linkedin.com/shareArticle?mini=true&url=${encodeURIComponent(jobLink)}&title=${encodeURIComponent(jobTitle)}&summary=&source=${encodeURIComponent(window.location.hostname)}`;
                            window.open(shareUrl, '_blank');
                            break;
                        case 'sms':
                            shareUrl = `sms:&body=${encodeURIComponent(shareText)}`;
                            window.location.href = shareUrl;
                            break;
                        case 'copylink':
                            navigator.clipboard.writeText(jobLink).then(() => {
                                alert('Lien copié dans le presse-papiers !');
                            }).catch(err => {
                                console.error('Erreur lors de la copie du lien: ', err);
                                alert('Erreur lors de la copie du lien.');
                            });
                            break;
                    }

                    const container = shareOption.closest('.share-button-container');
                    container.classList.remove('open');
                }
            });

            document.addEventListener('click', () => {
                document.querySelectorAll('.share-button-container.open').forEach(container => {
                    container.classList.remove('open');
                });
            });

            displayJobs();
        });

        // Menu mobile
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mainNav = document.getElementById('mainNav');

        mobileMenuBtn.addEventListener('click', () => {
            mainNav.classList.toggle('active');
            mobileMenuBtn.innerHTML = mainNav.classList.contains('active') ? '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
        });

        // Bouton scroll to top
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
</body>
</html>