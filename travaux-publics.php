<?php
// Configuration de base (identique à la page principale)
$page_title = "YDIA CONSTRUCTION - Travaux Publics";
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
            height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
            color: <?php echo $secondary_color; ?>;
            display: flex;
            align-items: center;
            text-align: center;
            margin-top: 80px;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .hero-btns {
            display: flex;
            justify-content: center;
            gap: 20px;
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

        /* Styles spécifiques à la page Travaux Publics */
        .video-slider {
            position: relative;
            width: 100%;
            height: 70vh;
            overflow: hidden;
            margin-top: 80px;
        }

        .video-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .video-slide.active {
            opacity: 1;
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
        }

        .video-overlay h2 {
            font-size: 3rem;
            margin-bottom: 20px;
            color: <?php echo $primary_color; ?>;
        }

        .video-overlay p {
            font-size: 1.2rem;
            max-width: 800px;
        }

        .video-controls {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 15px;
            z-index: 10;
        }

        .video-control {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .video-control.active {
            background-color: <?php echo $primary_color; ?>;
            transform: scale(1.2);
        }

        .public-works-projects {
            padding: 80px 0;
            background-color: <?php echo $light_color; ?>;
        }

        .project-item {
            display: flex;
            align-items: center;
            gap: 50px;
            margin-bottom: 60px;
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

        .project-content h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: <?php echo $primary_color; ?>;
        }

        .project-content p {
            margin-bottom: 20px;
            text-align: justify;
        }

        .project-details {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 20px;
        }

        .detail-item {
            flex: 1 1 200px;
        }

        .detail-item h4 {
            color: <?php echo $primary_color; ?>;
            margin-bottom: 5px;
            font-size: 1rem;
        }

        @media (max-width: 992px) {

            .project-item,
            .project-item:nth-child(even) {
                flex-direction: column;
            }

            .video-overlay h2 {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .video-overlay h2 {
                font-size: 2rem;
            }

            .video-overlay p {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <!-- Header (identique à la page principale) -->
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

    <!-- Hero Section avec vidéos -->
    <section class="video-slider">
        <div class="video-slide active">
            <video autoplay muted loop>
                <source src="videos/travaux-publics1.mp4" type="video/mp4">
                Votre navigateur ne supporte pas les vidéos HTML5.
            </video>
            <div class="video-overlay">
                <h2>Infrastructures Routières</h2>
                <p>Conception et réalisation de réseaux routiers performants et durables pour faciliter les déplacements et stimuler l'économie locale.</p>
            </div>
        </div>

        <div class="video-slide">
            <video autoplay muted loop>
                <source src="videos/travaux-publics2.mp4" type="video/mp4">
                Votre navigateur ne supporte pas les vidéos HTML5.
            </video>
            <div class="video-overlay">
                <h2>Ouvrages d'Art</h2>
                <p>Construction de ponts, viaducs et autres ouvrages d'art avec une expertise reconnue dans les projets complexes.</p>
            </div>
        </div>

        <div class="video-slide">
            <video autoplay muted loop>
                <source src="videos/travaux-publics3.mp4" type="video/mp4">
                Votre navigateur ne supporte pas les vidéos HTML5.
            </video>
            <div class="video-overlay">
                <h2>Réseaux Urbains</h2>
                <p>Aménagement complet des réseaux d'assainissement, d'adduction d'eau et d'éclairage public pour des villes plus fonctionnelles.</p>
            </div>
        </div>

        <div class="video-controls">
            <div class="video-control active" data-slide="0"></div>
            <div class="video-control" data-slide="1"></div>
            <div class="video-control" data-slide="2"></div>
        </div>
    </section>

    <!-- Section Projets de Travaux Publics -->
    <section class="public-works-projects">
        <div class="container">
            <h2 class="section-title text-center">Nos Réalisations en Travaux Publics</h2>
            <p class="text-center" style="max-width: 800px; margin: 0 auto 50px;">Découvrez une sélection de nos projets phares qui témoignent de notre expertise et de notre engagement envers l'excellence dans le domaine des travaux publics.</p>

            <div class="project-item">
                <div class="project-img">
                    <img src="https://images.unsplash.com/photo-1600758208050-a22f17dc5bb9?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Pont autoroutier A14">
                </div>
                <div class="project-content">
                    <h3>Pont autoroutier A14</h3>
                    <p>Construction d'un ouvrage d'art majeur sur l'autoroute A14, avec une portée principale de 250 mètres. Ce projet complexe a nécessité des techniques de construction innovantes pour minimiser l'impact sur la circulation existante.</p>
                    <div class="project-details">
                        <div class="detail-item">
                            <h4>Localisation</h4>
                            <p>Normandie, France</p>
                        </div>
                        <div class="detail-item">
                            <h4>Année</h4>
                            <p>2021</p>
                        </div>
                        <div class="detail-item">
                            <h4>Longueur</h4>
                            <p>850 mètres</p>
                        </div>
                        <div class="detail-item">
                            <h4>Budget</h4>
                            <p>45 millions €</p>
                        </div>
                    </div>
                    <a href="travaux-publics/projet-pont-a14.php" class="btn">Voir les détails</a>
                </div>
            </div>

            <div class="project-item">
                <div class="project-img">
                    <img src="https://images.unsplash.com/photo-1605276374104-dee2a0ed3cd6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Réseau d'assainissement">
                </div>
                <div class="project-content">
                    <h3>Réseau d'assainissement Toulouse</h3>
                    <p>Réhabilitation complète du réseau d'assainissement du centre-ville de Toulouse, incluant la pose de 12 km de canalisations et la modernisation des stations de pompage. Ce projet a permis de réduire significativement les risques d'inondation.</p>
                    <div class="project-details">
                        <div class="detail-item">
                            <h4>Localisation</h4>
                            <p>Toulouse, France</p>
                        </div>
                        <div class="detail-item">
                            <h4>Année</h4>
                            <p>2018</p>
                        </div>
                        <div class="detail-item">
                            <h4>Longueur</h4>
                            <p>12 kilomètres</p>
                        </div>
                        <div class="detail-item">
                            <h4>Budget</h4>
                            <p>28 millions €</p>
                        </div>
                    </div>
                    <a href="travaux-publics/projet-assainissement-toulouse.php" class="btn">Voir les détails</a>
                </div>
            </div>

            <div class="project-item">
                <div class="project-img">
                    <img src="https://images.unsplash.com/photo-1581093450021-4a7360e9a6a6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Voie rapide urbaine">
                </div>
                <div class="project-content">
                    <h3>Voie rapide urbaine Lyon-Est</h3>
                    <p>Aménagement d'une voie rapide de 8 km en zone urbaine dense, comprenant 3 échangeurs, 2 tunnels et des dispositifs de réduction sonore avancés. Ce projet a considérablement amélioré la fluidité du trafic dans l'est lyonnais.</p>
                    <div class="project-details">
                        <div class="detail-item">
                            <h4>Localisation</h4>
                            <p>Lyon, France</p>
                        </div>
                        <div class="detail-item">
                            <h4>Année</h4>
                            <p>2019</p>
                        </div>
                        <div class="detail-item">
                            <h4>Longueur</h4>
                            <p>8 kilomètres</p>
                        </div>
                        <div class="detail-item">
                            <h4>Budget</h4>
                            <p>62 millions €</p>
                        </div>
                    </div>
                    <a href="travaux-publics/projet-voie-lyon.php" class="btn">Voir les détails</a>
                </div>
            </div>

            <div class="text-center" style="margin-top: 50px;">
                <a href="index.php#projects" class="btn">Voir tous nos projets</a>
            </div>
        </div>
    </section>

    <!-- Footer (identique à la page principale) -->
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
    </script>
    <script>

        // Script spécifique pour le slider vidéo
        document.addEventListener("DOMContentLoaded", function() {
            const slides = document.querySelectorAll('.video-slide');
            const controls = document.querySelectorAll('.video-control');
            let currentSlide = 0;
            let slideInterval;

            function showSlide(n) {
                slides.forEach(slide => slide.classList.remove('active'));
                controls.forEach(control => control.classList.remove('active'));

                currentSlide = (n + slides.length) % slides.length;

                slides[currentSlide].classList.add('active');
                controls[currentSlide].classList.add('active');
            }

            function nextSlide() {
                showSlide(currentSlide + 1);
            }

            // Démarre le slider automatique
            function startSlider() {
                slideInterval = setInterval(nextSlide, 5000);
            }

            // Arrête le slider automatique
            function pauseSlider() {
                clearInterval(slideInterval);
            }

            // Ajoute les événements aux contrôles
            controls.forEach((control, index) => {
                control.addEventListener('click', () => {
                    pauseSlider();
                    showSlide(index);
                    startSlider();
                });
            });

            // Pause le slider quand la souris est sur la zone
            const slider = document.querySelector('.video-slider');
            if (slider) {
                slider.addEventListener('mouseenter', pauseSlider);
                slider.addEventListener('mouseleave', startSlider);
            }

            // Initialise le slider
            showSlide(0);
            startSlider();
        });
    </script>

</body>

</html>