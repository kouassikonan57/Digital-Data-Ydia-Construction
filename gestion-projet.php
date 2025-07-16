<?php
// Configuration de base (identique à la page principale)
$page_title = "YDIA CONSTRUCTION - Gestion de Projet";
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
        /* Styles de base identiques à la page principale */
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
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <a href="index.php">
                    <img src="image/logo/logo_Ydia.png" alt="<?php echo htmlspecialchars($company_name); ?> Logo">
                </a>
            </div>

            <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Menu mobile">
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

    <!-- Hero Section -->
    <section class="hero-gestion">
        <div class="slideshow-container">
            <!-- Slide 1 -->
            <div class="mySlides fade">
                <div class="slide-image" style="background-image: url('https://images.unsplash.com/photo-1507679799987-c73779587ccf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
                <div class="hero-content-gestion">
                    <h1>Gestion de Projet</h1>
                    <p>Une méthodologie rigoureuse pour des résultats optimaux</p>
                    <a href="#methodologie" class="btn">Notre méthodologie</a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="mySlides fade">
                <div class="slide-image" style="background-image: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
                <div class="hero-content-gestion">
                    <h1>Suivi Précis</h1>
                    <p>Outils avancés pour un contrôle en temps réel de votre projet</p>
                    <a href="#outils" class="btn">Nos outils</a>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="mySlides fade">
                <div class="slide-image" style="background-image: url('https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
                <div class="hero-content-gestion">
                    <h1>Équipe Expérimentée</h1>
                    <p>Des professionnels dédiés à la réussite de votre projet</p>
                    <a href="#projets" class="btn">Nos réalisations</a>
                </div>
            </div>
        </div>

        <!-- Indicateurs -->
        <div class="dots-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </section>

    <!-- Section Méthodologie -->
    <section class="methodologie" id="methodologie">
        <div class="container">
            <h2 class="section-title text-center">Notre Méthodologie</h2>
            <p class="text-center" style="max-width: 700px; margin: 0 auto 40px;">Nous appliquons une approche structurée en 6 étapes clés pour assurer le succès de chaque projet.</p>

            <div class="etapes-gestion">
                <div class="etape-card">
                    <div class="etape-number">1</div>
                    <h3>Étude de faisabilité</h3>
                    <p>Analyse approfondie des contraintes techniques, réglementaires et financières pour valider la viabilité du projet.</p>
                </div>

                <div class="etape-card">
                    <div class="etape-number">2</div>
                    <h3>Conception détaillée</h3>
                    <p>Élaboration des plans techniques, spécifications et planning prévisionnel en collaboration avec tous les acteurs.</p>
                </div>

                <div class="etape-card">
                    <div class="etape-number">3</div>
                    <h3>Planification</h3>
                    <p>Définition des jalons, allocation des ressources et établissement du budget détaillé avec suivi des indicateurs clés.</p>
                </div>

                <div class="etape-card">
                    <div class="etape-number">4</div>
                    <h3>Exécution</h3>
                    <p>Coordination des équipes et sous-traitants avec des points de contrôle qualité réguliers et reporting transparent.</p>
                </div>

                <div class="etape-card">
                    <div class="etape-number">5</div>
                    <h3>Contrôle & Suivi</h3>
                    <p>Surveillance permanente des coûts, délais et qualité avec ajustements proactifs pour anticiper les risques.</p>
                </div>

                <div class="etape-card">
                    <div class="etape-number">6</div>
                    <h3>Livraison & Bilan</h3>
                    <p>Remise des ouvrages avec documentation complète et analyse post-projet pour capitaliser sur les enseignements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Outils -->
    <section class="outils-gestion" id="outils">
        <div class="container">
            <h2 class="section-title text-center">Nos Outils de Gestion</h2>
            <p class="text-center" style="max-width: 700px; margin: 0 auto 40px;">Nous utilisons les technologies les plus avancées pour une gestion optimale de vos projets.</p>

            <div class="outils-grid">
                <div class="outil-card">
                    <div class="outil-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <h3>MS Project & Primavera</h3>
                    <p>Planification détaillée et suivi avancé des plannings avec outils professionnels.</p>
                </div>

                <div class="outil-card">
                    <div class="outil-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>BIM (Revit, ArchiCAD)</h3>
                    <p>Modélisation 3D intelligente pour une coordination parfaite entre tous les corps de métier.</p>
                </div>

                <div class="outil-card">
                    <div class="outil-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Tableaux de bord</h3>
                    <p>Reporting visuel en temps réel sur l'avancement, les coûts et les indicateurs clés.</p>
                </div>

                <div class="outil-card">
                    <div class="outil-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Application mobile</h3>
                    <p>Suivi de chantier en temps réel avec photos, remarques et validation des points clés.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Projets -->
    <section class="projets-gestion" id="projets">
        <div class="container">
            <h2 class="section-title text-center">Projets Récemment Gérés</h2>
            <p class="text-center" style="max-width: 700px; margin: 0 auto 40px;">Découvrez quelques-uns de nos projets récents où notre expertise en gestion a fait la différence.</p>

            <div class="projet-item">
                <div class="projet-media">
                    <img src="https://images.unsplash.com/photo-1600607688969-a5bfcd646154?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Complexe résidentiel">
                </div>
                <div class="projet-content">
                    <h3>Complexe Résidentiel "Les Hauts de Seine"</h3>
                    <p>Gestion complète d'un programme de 120 logements répartis sur 3 bâtiments avec espaces communs et parking souterrain.</p>
                    <div class="projet-stats">
                        <div class="stat">24 mois</div>
                        <div class="stat">35MFCFA</div>
                        <div class="stat">Livré à temps</div>
                    </div>
                    <p><strong>Défis relevés :</strong> Coordination de 15 corps de métiers différents, respect strict des normes acoustiques, gestion des approvisionnements en période de pénurie.</p>
                    <a href="etudes de cas/etude-cas-hauts-de-seine.php" class="btn btn-outline">Voir l'étude de cas</a>
                </div>
            </div>

            <div class="projet-item">
                <div class="projet-media">
                    <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Siège social">
                </div>
                <div class="projet-content">
                    <h3>Siège Social Groupe Financier</h3>
                    <p>Construction et aménagement d'un bâtiment de 12 000m² avec technologies intelligentes et espaces collaboratifs.</p>
                    <div class="projet-stats">
                        <div class="stat">18 mois</div>
                        <div class="stat">28MFCFA</div>
                        <div class="stat">Budget respecté</div>
                    </div>
                    <p><strong>Particularités :</strong> Travaux en site occupé (déménagement progressif), intégration de technologies IoT, respect des normes de sécurité renforcées.</p>
                    <a href="etudes de cas/etude-cas-siege-social.php" class="btn btn-outline">Voir l'étude de cas</a>
                </div>
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
                        <li><a href="index.php#home">Accueil</a></li>
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