<?php
// Configuration de base
$page_title = "YDIA CONSTRUCTION - Étude de cas: Siège Social Groupe Financier";
$company_name = "YDIA CONSTRUCTION";
$slogan = "Bâtissons l'avenir ensemble";
$primary_color = "#FF6B00";
$secondary_color = "#FFFFFF";
$dark_color = "#333333";
$light_color = "#F5F5F5";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root {
            --primary: <?php echo $primary_color; ?>;
            --primary-dark: #E05E00;
            --secondary: <?php echo $dark_color; ?>;
            --light: <?php echo $secondary_color; ?>;
            --light-gray: #F5F5F5;
            --medium-gray: #E0E0E0;
            --dark-gray: #666666;
            --text: <?php echo $dark_color; ?>;
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
            background: none;
            border: none;
            color: <?php echo $dark_color; ?>;
        }

        /* Hero Section */
        .hero-gestion {
            height: 70vh;
            margin-top: 80px;
            position: relative;
        }

        .slideshow-container {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .mySlides {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .mySlides.active {
            opacity: 1;
        }

        .slide-image {
            position: absolute;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            z-index: -1;
        }

        .hero-content-gestion {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            width: 100%;
            padding: 0 20px;
        }

        .hero-content-gestion h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .hero-content-gestion p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        /* Boutons next & previous */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            background-color: rgba(0, 0, 0, 0.3);
            border: none;
        }

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Indicateurs */
        .dots-container {
            text-align: center;
            position: absolute;
            bottom: 20px;
            width: 100%;
        }

        .dot {
            cursor: pointer;
            height: 12px;
            width: 12px;
            margin: 0 8px;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active-dot {
            background-color: var(--primary);
        }

        /* Section Méthodologie */
        .methodologie {
            padding: 100px 0;
            background-color: <?php echo $light_color; ?>;
        }

        .etapes-gestion {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .etape-card {
            background: <?php echo $secondary_color; ?>;
            border-radius: 8px;
            padding: 30px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            border-top: 4px solid var(--primary);
        }

        .etape-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .etape-card p {
            text-align: justify;
        }

        .etape-number {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 3rem;
            font-weight: bold;
            color: rgba(255, 107, 0, 0.1);
        }

        .etape-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--primary);
        }

        /* Section Outils */
        .outils-gestion {
            padding: 100px 0;
            background-color: <?php echo $secondary_color; ?>;
        }

        .outils-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .outil-card {
            background: <?php echo $light_color; ?>;
            border-radius: 8px;
            padding: 30px;
            text-align: center;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .outil-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .outil-card p {
            text-align: justify;
        }

        .outil-icon {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .outil-card h3 {
            margin-bottom: 15px;
        }

        /* Section Projets */
        .projets-gestion {
            padding: 100px 0;
            background-color: <?php echo $light_color; ?>;
        }

        .projet-item {
            display: flex;
            align-items: center;
            gap: 50px;
            margin-bottom: 60px;
        }

        .projet-item:nth-child(even) {
            flex-direction: row-reverse;
        }

        .projet-media {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .projet-media img {
            width: 100%;
            height: auto;
            display: block;
            transition: var(--transition);
        }

        .projet-media:hover img {
            transform: scale(1.03);
        }

        .projet-content {
            flex: 1;
        }

        .projet-content h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: var(--primary);
        }

        .projet-stats {
            display: flex;
            gap: 20px;
            margin: 20px 0;
        }

        .stat {
            background: var(--primary);
            color: <?php echo $secondary_color; ?>;
            padding: 10px 20px;
            border-radius: 4px;
            font-weight: bold;
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
            color: <?php echo $secondary_color; ?>;
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

        /* Button scroll */
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

        /* Responsive Design */
        @media (max-width: 992px) {
            .hero-content-gestion h1 {
                font-size: 2.8rem;
            }

            .projet-item,
            .projet-item:nth-child(even) {
                flex-direction: column;
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

            .hero-content-gestion h1 {
                font-size: 2.5rem;
            }

            .hero-gestion {
                height: 60vh;
            }
        }

        @media (max-width: 576px) {
            .section-title {
                font-size: 2rem;
            }

            .hero-content-gestion h1 {
                font-size: 2rem;
            }

            .hero-content-gestion p {
                font-size: 1rem;
            }

            .projet-stats {
                flex-direction: column;
                gap: 10px;
            }
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

        /* Styles spécifiques à l'étude de cas */
        .cas-header {
            padding: 150px 0 80px;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1600607688969-a5bfcd646154?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
            color: white;
            text-align: center;
        }

        .cas-header h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .cas-header .meta {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 30px;
        }

        .cas-header .meta-item {
            background-color: var(--primary);
            padding: 8px 20px;
            border-radius: 4px;
            font-weight: bold;
        }

        .cas-content {
            padding: 80px 0;
        }

        .cas-section {
            margin-bottom: 60px;
        }

        .cas-section h2 {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 30px;
            position: relative;
            padding-bottom: 10px;
        }

        .cas-section h2:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 70px;
            height: 4px;
            background-color: var(--primary);
        }

        .cas-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin: 30px 0;
        }

        .cas-gallery img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .cas-gallery img:hover {
            transform: scale(1.03);
            box-shadow: var(--shadow-hover);
        }

        .cas-stats {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin: 40px 0;
        }

        .cas-stat {
            background-color: var(--light-gray);
            padding: 30px;
            border-radius: 8px;
            text-align: center;
            box-shadow: var(--shadow);
        }

        .cas-stat h3 {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .cas-stat p {
            font-weight: bold;
            color: var(--text);
        }

        .cas-challenges {
            background-color: var(--light-gray);
            padding: 30px;
            border-radius: 8px;
            margin: 40px 0;
        }

        .cas-challenges h3 {
            color: var(--primary);
            margin-bottom: 20px;
        }

        .cas-challenges ul {
            padding-left: 20px;
        }

        .cas-challenges li {
            margin-bottom: 10px;
        }

        .cas-testimonial {
            background-color: var(--primary);
            color: white;
            padding: 40px;
            border-radius: 8px;
            margin: 60px 0;
            position: relative;
        }

        .cas-testimonial:before {
            content: '"';
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 5rem;
            opacity: 0.2;
            font-family: serif;
        }

        .cas-testimonial p {
            font-size: 1.2rem;
            font-style: italic;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .cas-testimonial .author {
            font-weight: bold;
            text-align: right;
        }

        .back-to-projects {
            text-align: center;
            margin-top: 60px;
        }

        .cas-header {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <a href="../index.php">
                    <img src="../image/logo/logo_Ydia.png" alt="<?php echo htmlspecialchars($company_name); ?> Logo">
                </a>
            </div>

            <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Menu mobile">
                <i class="fas fa-bars"></i>
            </button>

            <nav id="mainNav">
                <ul>
                    <li><a href="../index.php#home">Accueil</a></li>
                    <li><a href="../index.php#about">Qui sommes-nous</a></li>
                    <li><a href="../index.php#services">Domaines d'expertise</a></li>
                    <li><a href="../index.php#projects">Nos projets</a></li>
                    <li><a href="../index.php#careers">Carrières</a></li>
                    <li><a href="../index.php#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- En-tête de l'étude de cas -->
    <section class="cas-header">
        <div class="container">
            <h1>Siège Social Groupe Financier</h1>
            <div class="meta">
                <div class="meta-item">18 mois</div>
                <div class="meta-item">.. FCFA</div>
                <div class="meta-item">12 000m²</div>
            </div>
            <p>Un bâtiment intelligent conçu pour favoriser la collaboration et l'innovation</p>
        </div>
    </section>

    <!-- Contenu de l'étude de cas -->
    <section class="cas-content">
        <div class="container">
            <div class="cas-section">
                <h2>Présentation du projet</h2>
                <p>Le nouveau siège social du groupe financier est un bâtiment intelligent de 12 000m² répartis sur 7 niveaux, intégrant les dernières technologies IoT et répondant aux plus hauts standards de sécurité. Le projet comprenait la construction du bâtiment neuf ainsi que l'aménagement intérieur complet avec des espaces de travail collaboratifs, des salles de réunion high-tech et des zones de détente pour les employés.</p>

                <div class="cas-gallery">
                    <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Vue extérieure du siège social">
                    <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Espace de travail ouvert">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Salle de réunion">
                </div>
            </div>

            <div class="cas-section">
                <h2>Chiffres clés</h2>
                <div class="cas-stats">
                    <div class="cas-stat">
                        <h3>12 000</h3>
                        <p>Mètres carrés</p>
                    </div>
                    <div class="cas-stat">
                        <h3>.. FCFA</h3>
                        <p>Budget total</p>
                    </div>
                    <div class="cas-stat">
                        <h3>18</h3>
                        <p>Mois de travaux</p>
                    </div>
                    <div class="cas-stat">
                        <h3>250+</h3>
                        <p>Capteurs IoT</p>
                    </div>
                </div>
            </div>

            <div class="cas-section">
                <h2>Notre approche</h2>
                <p>Ce projet présentait des défis uniques en raison de la nature sensible des activités du client et de la nécessité de travailler en site partiellement occupé :</p>

                <div class="cas-challenges">
                    <h3>Solutions innovantes :</h3>
                    <ul>
                        <li>Planification en phases pour permettre le déménagement progressif des services</li>
                        <li>Mise en place d'un système de sécurité renforcé pendant les travaux</li>
                        <li>Intégration BIM complète avec modélisation des systèmes IoT</li>
                        <li>Protocoles stricts de confidentialité pour tous les intervenants</li>
                        <li>Contrôle qualité renforcé pour les finitions haut de gamme</li>
                    </ul>
                </div>
            </div>

            <div class="cas-section">
                <h2>Défis relevés</h2>
                <div class="cas-challenges">
                    <h3>Principaux défis :</h3>
                    <ul>
                        <li><strong>Sécurité renforcée :</strong> Respect des protocoles de sécurité stricts du secteur financier</li>
                        <li><strong>Travaux en site occupé :</strong> Coordination complexe avec les activités en cours</li>
                        <li><strong>Technologies intégrées :</strong> Installation et configuration de 250+ capteurs IoT</li>
                        <li><strong>Flexibilité des espaces :</strong> Conception modulaire pour s'adapter aux évolutions futures</li>
                        <li><strong>Acoustique :</strong> Isolation phonique entre espaces collaboratifs et zones de concentration</li>
                    </ul>
                </div>
            </div>

            <div class="cas-testimonial">
                <p>"YDIA Construction a fait preuve d'une flexibilité et d'un professionnalisme remarquables dans la gestion de ce projet complexe. Leur capacité à s'adapter à nos contraintes opérationnelles tout en respectant nos exigences de qualité et de sécurité a été déterminante pour le succès de cette opération."</p>
                <!-- <div class="author">- Marie Lambert, Directrice des Opérations Groupe Financier</div> -->
            </div>

            <div class="cas-section">
                <h2>Résultats</h2>
                <p>Le projet a atteint tous ses objectifs :</p>
                <ul>
                    <li>Livraison dans les délais malgré la complexité du phasage</li>
                    <li>Budget respecté à 100% grâce à une gestion rigoureuse</li>
                    <li>Zéro incident de sécurité ou de confidentialité</li>
                    <li>Satisfaction client de 100% selon l'enquête post-livraison</li>
                    <li>Certification BREEAM "Excellent" obtenue</li>
                    <li>Réduction de 30% de la consommation énergétique par rapport à l'ancien siège</li>
                </ul>
            </div>

            <div class="back-to-projects">
                <a href="gestion-projet.php#projets" class="btn">Retour aux projets</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-col">
                    <h3><?php echo htmlspecialchars($company_name); ?></h3>
                    <p><?php echo htmlspecialchars($slogan); ?></p>
                    <p>Entreprise leader dans le secteur du BTP, engagée dans la construction d'un avenir meilleur grâce à des solutions innovantes et durables.</p>

                    <div class="social-links">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="footer-col">
                    <h3>Liens rapides</h3>
                    <ul class="footer-links" id="linkss">
                        <li><a href="../index.php#home">Accueil</a></li>
                        <li><a href="../index.php#about">Qui sommes-nous</a></li>
                        <li><a href="../index.php#services">Domaines d'expertise</a></li>
                        <li><a href="../index.php#projects">Nos projets</a></li>
                        <li><a href="../index.php#careers">Carrières</a></li>
                        <li><a href="../index.php#contact">Contact</a></li>
                        <li><a href="#">Yadi Groupe</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3>Services</h3>
                    <ul class="footer-links">
                        <li><a href="../construction-batiments.php">Construction de bâtiments</a></li>
                        <li><a href="../travaux-publics.php">Travaux publics</a></li>
                        <li><a href="../renovation.php">Rénovation</a></li>
                        <li><a href="../amenagement-interieur.php">Aménagement intérieur</a></li>
                        <li><a href="../location-engins.php">Location d'engins BTP</a></li>
                        <li><a href="../gestion-projet.php">Gestion de projet</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3>Newsletter</h3>
                    <p>Abonnez-vous à notre newsletter pour recevoir nos dernières actualités et offres.</p>
                    <form class="newsletter-form" action="../newsletter.php" method="POST">
                        <div class="form-group" style="margin-bottom: 15px;">
                            <input type="email" name="email" placeholder="Votre email" class="form-control" required>
                        </div>
                        <button type="submit" class="btn">S'abonner</button>
                    </form>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($company_name); ?>. Tous droits réservés. | <a href="#">Mentions légales</a> | <a href="#">Politique de confidentialité</a></p>
                <p>by KFernand</p>
            </div>
        </div>
    </footer>

    <!-- Button scroll -->
    <button id="scrollTopBtn" title="Remonter en haut" aria-label="Remonter en haut de la page">
        <i class="fas fa-chevron-up"></i>
    </button>

    <script>
        // Menu mobile
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mainNav = document.getElementById('mainNav');

        mobileMenuBtn.addEventListener('click', () => {
            mainNav.classList.toggle('active');
            mobileMenuBtn.innerHTML = mainNav.classList.contains('active') ?
                '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
        });

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

        // Script pour le slider
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");

            if (n > slides.length) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = slides.length;
            }

            for (i = 0; i < slides.length; i++) {
                slides[i].classList.remove("active");
            }

            for (i = 0; i < dots.length; i++) {
                dots[i].classList.remove("active-dot");
            }

            slides[slideIndex - 1].classList.add("active");
            dots[slideIndex - 1].classList.add("active-dot");
        }

        // Défilement automatique
        let slideInterval = setInterval(() => {
            plusSlides(1);
        }, 5000);

        // Arrêter le défilement quand l'utilisateur interagit
        const sliderContainer = document.querySelector('.slideshow-container');
        sliderContainer.addEventListener('mouseenter', () => {
            clearInterval(slideInterval);
        });

        sliderContainer.addEventListener('mouseleave', () => {
            slideInterval = setInterval(() => {
                plusSlides(1);
            }, 5000);
        });

        // Initialiser le premier slide
        document.addEventListener('DOMContentLoaded', () => {
            showSlides(slideIndex);
        });
    </script>
</body>

</html>