<?php
// Configuration de base (identique à index.php)
$page_title = "YDIA CONSTRUCTION - Nos Réalisations";
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
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        /* [Tous les styles CSS de index.php restent identiques] */
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

        /* Styles spécifiques à la page Nos Projets */
        .video-hero {
            height: 80vh;
            position: relative;
            overflow: hidden;
            margin-top: 80px;
        }

        .video-hero p {
            font-size: 1.2rem;
            max-width: 800px;
        }

        .video-hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .video-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease;
            z-index: 1;
        }

        .video-slide.active {
            opacity: 1;
            z-index: 2;
        }

        .video-slide video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            padding: 0 20px;
            z-index: 3;
        }

        .video-controls {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 15px;
            z-index: 4;
        }

        .video-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .video-dot.active {
            background-color: #FF6B00;
            transform: scale(1.2);
        }

        /* Section Tous les Projets */
        .all-projects {
            padding: 80px 0;
            background-color: <?php echo $light_color; ?>;
        }

        .project-item {
            display: flex;
            align-items: center;
            gap: 50px;
            margin-bottom: 60px;
        }

        .project-item p {
            text-align: justify;
        }

        .project-item:nth-child(even) {
            flex-direction: row-reverse;
        }

        .project-img {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .project-img img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }

        .project-img:hover img {
            transform: scale(1.05);
        }

        .project-content {
            flex: 1;
        }

        .project-content h2 {
            font-size: 2rem;
            color: <?php echo $primary_color; ?>;
            margin-bottom: 15px;
        }

        .project-meta {
            display: flex;
            gap: 20px;
            margin-bottom: 15px;
        }

        .project-meta span {
            display: flex;
            align-items: center;
            gap: 5px;
            color: <?php echo $dark_color; ?>;
        }

        .project-meta i {
            color: <?php echo $primary_color; ?>;
        }

        @media (max-width: 992px) {

            .project-item,
            .project-item:nth-child(even) {
                flex-direction: column;
            }

            .video-overlay h1 {
                font-size: 2.5rem;
            }

            .video-overlay p {
                font-size: 1rem;
            }
        }

        @media (max-width: 768px) {
            .video-overlay h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>
    <!-- Header (identique à index.php) -->
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
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="index.php#about">Qui sommes-nous</a></li>
                    <li><a href="index.php#services">Domaines d'expertise</a></li>
                    <li><a href="index.php#projects">Nos projets</a></li>
                    <li><a href="index.php#careers">Carrières</a></li>
                    <li><a href="index.php#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section avec vidéos -->
    <section class="video-hero">
        <!-- Vidéo 1 -->
        <div class="video-slide active" data-video="1">
            <video muted loop playsinline>
                <source src="image/Background2.mp4" type="video/mp4">
            </video>
            <div class="video-overlay">
                <h1>Nos Réalisations Prestigieuses</h1>
                <p>Découvrez l'excellence de YDIA CONSTRUCTION à travers nos projets phares</p>
            </div>
        </div>

        <!-- Vidéo 2 -->
        <div class="video-slide" data-video="2">
            <video muted loop playsinline>
                <source src="image/Bacground3.mp4" type="video/mp4">
            </video>
            <div class="video-overlay">
                <h1>Innovation et Qualité</h1>
                <p>Chaque projet est une opportunité de repousser les limites</p>
            </div>
        </div>

        <!-- Vidéo 3 -->
        <div class="video-slide" data-video="3">
            <video muted loop playsinline>
                <source src="image/Background4.mp4" type="video/mp4">
            </video>
            <div class="video-overlay">
                <h1>Engagement Durable</h1>
                <p>Nous intégrons des solutions écologiques dans nos réalisations</p>
            </div>
        </div>

        <div class="video-controls">
            <div class="video-dot active" data-slide="0"></div>
            <div class="video-dot" data-slide="1"></div>
            <div class="video-dot" data-slide="2"></div>
        </div>
    </section>

    <!-- Section Tous les Projets -->
    <section class="all-projects">
        <div class="container">
            <h2 class="section-title text-center">Tous Nos Projets</h2>
            <p class="text-center" style="max-width: 800px; margin: 0 auto 50px;">Explorez notre portfolio complet de réalisations à travers la Abidjan. Chaque projet reflète notre engagement envers l'excellence, l'innovation et la satisfaction client.</p>

            <!-- Projet 1 -->
            <!-- <div class="project-item">
                <div class="project-img">
                    <img src="https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Tour résidentielle Les Cèdres">
                </div>
                <div class="project-content">
                    <h2>Tour résidentielle "Les Cèdres"</h2>
                    <div class="project-meta">
                        <span><i class="fas fa-map-marker-alt"></i> Abidjan, Côte d'Ivoire</span>
                        <span><i class="fas fa-calendar-alt"></i> 2022</span>
                        <span><i class="fas fa-building"></i> Résidentiel</span>
                    </div>
                    <p>Construction d'une tour résidentielle de haut standing comprenant 120 appartements répartis sur 25 étages. Ce projet inclut des espaces communs premium (piscine, salle de sport, spa) et des technologies intelligentes pour une gestion optimale de l'énergie.</p>
                    <a href="projet-les-cedres.php" class="btn" style="margin-top: 15px;">Voir les détails</a>
                </div>
            </div> -->

            <!-- Projet 2 -->
            <!-- <div class="project-item">
                <div class="project-img">
                    <img src="image/route a14.jpg" alt="Pont autoroutier A14">
                </div>
                <div class="project-content">
                    <h2>Pont autoroutier A14</h2>
                    <div class="project-meta">
                        <span><i class="fas fa-map-marker-alt"></i> Bingerville, Abidjan</span>
                        <span><i class="fas fa-calendar-alt"></i> 2021</span>
                        <span><i class="fas fa-road"></i> Infrastructure</span>
                    </div>
                    <p>Conception et construction d'un pont autoroutier de 850 mètres enjambant la vallée de la Seine. Ce projet complexe a nécessité des techniques innovantes pour minimiser l'impact environnemental tout en garantissant une structure robuste pour les décennies à venir.</p>
                    <a href="travaux-publics/projet-pont-a14.php" class="btn" style="margin-top: 15px;">Voir les détails</a>
                </div>
            </div> -->

            <!-- Projet 3 -->
            <div class="project-item">
                <div class="project-img">
                    <img src="image/renov (9).jpeg" alt="Hôtel Le Majestic">
                </div>
                <div class="project-content">
                    <h2>Institut Pasteur</h2>
                    <div class="project-meta">
                        <span><i class="fas fa-map-marker-alt"></i> Adiopodoumé, Abidjan</span>
                        <span><i class="fas fa-calendar-alt"></i> 2024</span>
                        <span><i class="fas fa-hotel"></i> Rénovation</span>
                    </div>
                    <p>Réhabilitation complète un département (Département des Virus Epidémique en abrégé DVE) de l’Institut du site d’Adiopodoumé. La réhabilitation consistait à modernisant les bâtiments existants, renforcer les infrastructures électriques et sanitaires, et installer des équipements de bureau de qualité. L’objectif était d’améliorer les conditions de travail des chercheurs, de sécuriser les installations et d’accroître les capacités de diagnostic et de surveillance épidémiologique.</p>
                    <a href="projet-institut.php" class="btn" style="margin-top: 15px;">Voir les détails</a>
                </div>
            </div>

            <!-- Projet 4 -->
            <!-- <div class="project-item">
                <div class="project-img">
                    <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Siège social TechnoSoft">
                </div>
                <div class="project-content">
                    <h2>Siège social TechnoSoft</h2>
                    <div class="project-meta">
                        <span><i class="fas fa-map-marker-alt"></i> Yopougon, Abidjan</span>
                        <span><i class="fas fa-calendar-alt"></i> 2021</span>
                        <span><i class="fas fa-building"></i> Bureaux</span>
                    </div>
                    <p>Construction du siège social de TechnoSoft sur 5 000m². Ce bâtiment intelligent intègre des solutions technologiques avancées pour une gestion optimale de l'espace et de l'énergie. Conception modulaire permettant une grande flexibilité d'aménagement.</p>
                    <a href="projet-technosoft.php" class="btn" style="margin-top: 15px;">Voir les détails</a>
                </div>
            </div> -->

            <!-- Projet 5 -->
            <!-- <div class="project-item">
                <div class="project-img">
                    <img src="image/centre commercial.jpg" alt="Centre commercial Les Terrasses">
                </div>
                <div class="project-content">
                    <h2>Centre commercial "Les Terrasses"</h2>
                    <div class="project-meta">
                        <span><i class="fas fa-map-marker-alt"></i> Adjame, Abidjan</span>
                        <span><i class="fas fa-calendar-alt"></i> 2019</span>
                        <span><i class="fas fa-shopping-cart"></i> Commercial</span>
                    </div>
                    <p>Réalisation d'un centre commercial de 45 000m² comprenant 120 boutiques, un hypermarché, un cinéma multiplexe et des espaces de restauration. Le design innovant intègre des espaces verts et des solutions de gestion énergétique durable.</p>
                    <a href="projet-les-terrasses.php" class="btn" style="margin-top: 15px;">Voir les détails</a>
                </div>
            </div> -->

            <!-- Projet 6 -->
            <div class="project-item">
                <div class="project-img">
                    <img src="image/reseau d'assainissement.jpg" alt="Réseau d'assainissement">
                </div>
                <div class="project-content">
                    <h2>Réseau d'assainissement</h2>
                    <div class="project-meta">
                        <span><i class="fas fa-map-marker-alt"></i> ...., ....</span>
                        <span><i class="fas fa-calendar-alt"></i> ....</span>
                        <span><i class="fas fa-water"></i> Infrastructure</span>
                    </div>
                    <p>Modernisation et extension du réseau d'assainissement sur ... dans le centre-ville historique de .... Ce projet délicat a nécessité des techniques de micro-tunnelage pour préserver le patrimoine tout en améliorant les infrastructures.</p>
                    <a href="travaux-publics/projet-assainissement.php" class="btn" style="margin-top: 15px;">Voir les détails</a>
                </div>
            </div>

            <!-- Pagination -->
            <div class="text-center" style="margin-top: 50px;">
                <div class="pagination">
                    <a href="#" class="btn btn-outline">&laquo;</a>
                    <a href="#" class="btn active">1</a>
                    <a href="#" class="btn">2</a>
                    <a href="#" class="btn">3</a>
                    <a href="#" class="btn btn-outline">&raquo;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer (identique à index.php) -->
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
                        <li><a href="location-engins.php">Location d'engins BTP</a></li>
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
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const form = e.target;
            const formData = new FormData(form);
            const formMessage = document.getElementById('formMessage');

            fetch(form.action, {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.text())
                .then(data => {
                    formMessage.textContent = data;
                    formMessage.style.display = 'block';

                    if (response.ok) {
                        formMessage.style.color = 'green';
                        form.reset();
                    } else {
                        formMessage.style.color = 'red';
                    }
                })
                .catch(error => {
                    formMessage.textContent = 'Une erreur s\'est produite. Veuillez réessayer.';
                    formMessage.style.color = 'red';
                    formMessage.style.display = 'block';
                });
        });

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
        // Animation au défilement
        window.addEventListener('scroll', () => {
            const scrollPosition = window.scrollY;

            // Vous pouvez ajouter des animations supplémentaires ici en fonction de la position de défilement
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

        // Menu mobile
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mainNav = document.getElementById('mainNav');

        mobileMenuBtn.addEventListener('click', () => {
            mainNav.classList.toggle('active');
            mobileMenuBtn.innerHTML = mainNav.classList.contains('active') ? '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
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

        // Script pour le slider de vidéos
        // Remplacer la section existante du script pour le slider vidéo par ceci :

        // Script pour le slider de vidéos
        const videoSlides = document.querySelectorAll('.video-slide');
        const videoDots = document.querySelectorAll('.video-dot');
        let currentVideoSlide = 0;
        let videoSlideInterval;

        function showVideoSlide(n) {
            // Arrêter toutes les vidéos
            document.querySelectorAll('.video-slide video').forEach(video => {
                video.pause();
            });

            videoSlides.forEach(slide => slide.classList.remove('active'));
            videoDots.forEach(dot => dot.classList.remove('active'));

            currentVideoSlide = (n + videoSlides.length) % videoSlides.length;

            videoSlides[currentVideoSlide].classList.add('active');
            videoDots[currentVideoSlide].classList.add('active');

            // Démarrer la vidéo active
            const activeVideo = videoSlides[currentVideoSlide].querySelector('video');
            if (activeVideo) {
                activeVideo.currentTime = 0;
                activeVideo.play().catch(e => console.log("Autoplay prevented:", e));
            }
        }

        function startVideoSlider() {
            // Démarrer la première vidéo
            showVideoSlide(0);

            // Configurer l'intervalle pour le changement automatique
            videoSlideInterval = setInterval(() => {
                showVideoSlide(currentVideoSlide + 1);
            }, 5000);
        }

        videoDots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                clearInterval(videoSlideInterval);
                showVideoSlide(index);
                videoSlideInterval = setInterval(() => {
                    showVideoSlide(currentVideoSlide + 1);
                }, 5000);
            });
        });

        // Démarrer le slider lorsque la page est chargée
        document.addEventListener('DOMContentLoaded', startVideoSlider);
    </script>

    <script>
        /* =========  SLIDER VIDÉO  ========= */
        document.addEventListener('DOMContentLoaded', () => {
            const slides = document.querySelectorAll('.video-slide');
            const dots = document.querySelectorAll('.video-dot');
            if (!slides.length || !dots.length) return; // Sécurité

            let current = 0;
            let timer = null;
            const DURATION = 5000; // 5 s

            /* Gestion lecture / pause */
            const play = idx => slides[idx]?.querySelector('video')?.play().catch(() => {});
            const pause = idx => slides[idx]?.querySelector('video')?.pause();

            /* Affiche le slide n */
            const goTo = n => {
                pause(current);
                slides[current].classList.remove('active');
                dots[current].classList.remove('active');

                current = (n + slides.length) % slides.length;

                slides[current].classList.add('active');
                dots[current].classList.add('active');
                play(current);

                resetTimer();
            };

            /* Timer auto */
            const resetTimer = () => {
                clearInterval(timer);
                timer = setInterval(() => goTo(current + 1), DURATION);
            };

            /* Clic sur les dots */
            dots.forEach((dot, idx) => dot.addEventListener('click', () => goTo(idx)));

            /* Démarrage */
            goTo(0);

            /* Pause si onglet caché */
            document.addEventListener('visibilitychange', () => {
                document.hidden ? clearInterval(timer) : resetTimer();
            });
        });
    </script>
</body>

</html>