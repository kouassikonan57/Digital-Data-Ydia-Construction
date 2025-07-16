<?php
// Configuration de base
$page_title = "YDIA CONSTRUCTION - Construction de Bâtiments";
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
        /* [Tous les styles CSS communs restent identiques] */
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

        /* Hero Slider */
        .hero-slider {
            position: relative;
            height: 100vh;
            overflow: hidden;
            margin-top: 80px;
        }

        .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: <?php echo $secondary_color; ?>;
        }

        .slide.active {
            opacity: 1;
        }

        .slide::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
        }

        .slide-content {
            position: relative;
            max-width: 800px;
            padding: 0 20px;
            z-index: 1;
        }

        .slide h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
            color: <?php echo $secondary_color; ?>;
        }

        .slide p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            color: <?php echo $secondary_color; ?>;
        }

        .hero-btns {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .slider-nav {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 2;
        }

        .slider-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .slider-dot.active {
            background-color: <?php echo $primary_color; ?>;
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

        /* Hero Section spécifique */
        .construction-hero {
            height: 80vh;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1487958449943-2429e8be8625?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
            color: white;
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

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        /* Section Projets Bâtiments */
        .building-projects {
            padding: 80px 0;
            background-color: <?php echo $light_color; ?>;
        }

        .project-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .building-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .building-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .building-img {
            height: 250px;
            overflow: hidden;
        }

        .building-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .building-card:hover .building-img img {
            transform: scale(1.1);
        }

        .building-content {
            padding: 25px;
        }

        .building-content h3 {
            color: <?php echo $primary_color; ?>;
            margin-bottom: 10px;
        }

        .building-meta {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
            font-size: 0.9rem;
            color: <?php echo $dark_color; ?>;
        }

        .building-meta span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .building-meta i {
            color: <?php echo $primary_color; ?>;
        }

        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content p {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <a href="index01.php">
                    <img src="image/logo/logo_Ydia.png" alt="YDIA CONSTRUCTION Logo">
                </a>
            </div>

            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>

            <nav id="mainNav">
                <ul>
                    <li><a href="index01.php">Accueil</a></li>
                    <li><a href="index01.php#about">Qui sommes-nous</a></li>
                    <li><a href="index01.php#services">Domaines d'expertise</a></li>
                    <li><a href="index01.php#projects">Nos projets</a></li>
                    <li><a href="index01.php#careers">Carrières</a></li>
                    <li><a href="index01.php#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-slider">
        <!-- Slide 1 -->
        <div class="slide active" style="background-image: url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
            <div class="slide-content">
                <h1>Construction de Bâtiments</h1>
                <p>Expertise, innovation et qualité dans la réalisation de bâtiments résidentiels, commerciaux et industriels sur mesure.</p>
                <div class="hero-btns">
                    <a href="index01.php#projects" class="btn">Voir nos réalisations</a>
                    <a href="index01.php#contact" class="btn btn-outline">Nous contacter</a>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1517502884422-41eaead166d4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
            <div class="slide-content">
                <h1>Travaux Publics</h1>
                <p>Infrastructures routières, ponts et ouvrages d'art réalisés avec les plus hauts standards de qualité et de sécurité.</p>
                <div class="hero-btns">
                    <a href="index01.php#projects" class="btn">Nos références</a>
                    <a href="index01.php#services" class="btn btn-outline">Nos services</a>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
            <div class="slide-content">
                <h1>Solutions Durables</h1>
                <p>Engagés dans la construction verte avec des matériaux écologiques et des techniques respectueuses de l'environnement.</p>
                <div class="hero-btns">
                    <a href="index01.php#about" class="btn">Notre engagement</a>
                    <a href="index01.php#contact" class="btn btn-outline">En savoir plus</a>
                </div>
            </div>
        </div>

        <!-- Slider Navigation Dots -->
        <div class="slider-nav">
            <div class="slider-dot active" data-slide="0"></div>
            <div class="slider-dot" data-slide="1"></div>
            <div class="slider-dot" data-slide="2"></div>
        </div>
    </section>

    <!-- Section Description -->
    <section class="about" style="padding: 80px 0;">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2 class="section-title">Notre Expertise en Construction</h2>
                    <p>YDIA CONSTRUCTION maîtrise l'ensemble des métiers de la construction de bâtiments, de la conception à la livraison clé en main. Nos équipes pluridisciplinaires interviennent sur tous types de projets, des petits bâtiments aux grands ensembles immobiliers.</p>
                    <p>Nous combinons savoir-faire traditionnel et technologies innovantes pour répondre aux exigences les plus pointues en matière de qualité, de sécurité et de performance énergétique.</p>
                    <ul style="margin: 20px 0 30px;">
                        <li><i class="fas fa-check" style="color: <?php echo $primary_color; ?>; margin-right: 10px;"></i> Bâtiments résidentiels (immeubles, maisons individuelles)</li>
                        <li><i class="fas fa-check" style="color: <?php echo $primary_color; ?>; margin-right: 10px;"></i> Bâtiments commerciaux et tertiaires</li>
                        <li><i class="fas fa-check" style="color: <?php echo $primary_color; ?>; margin-right: 10px;"></i> Bâtiments industriels et logistiques</li>
                        <li><i class="fas fa-check" style="color: <?php echo $primary_color; ?>; margin-right: 10px;"></i> Structures complexes et ouvrages d'art</li>
                    </ul>
                </div>
                <div class="about-img">
                    <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Chantier de construction">
                </div>
            </div>
        </div>
    </section>

    <!-- Section Projets -->
    <section class="building-projects" id="projects">
        <div class="container">
            <h2 class="section-title text-center">Nos Réalisations en Bâtiment</h2>
            <p class="text-center" style="max-width: 800px; margin: 0 auto 40px;">Découvrez une sélection de nos projets les plus emblématiques dans le domaine de la construction de bâtiments.</p>

            <div class="project-grid">
                <!-- Projet 1 -->
                <div class="building-card">
                    <div class="building-img">
                        <img src="https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Tour résidentielle">
                    </div>
                    <div class="building-content">
                        <h3>Tour résidentielle "Les Cèdres"</h3>
                        <div class="building-meta">
                            <span><i class="fas fa-map-marker-alt"></i> Paris</span>
                            <span><i class="fas fa-calendar-alt"></i> 2022</span>
                            <span><i class="fas fa-home"></i> Résidentiel</span>
                        </div>
                        <p>Construction d'une tour de 25 étages comprenant 120 appartements haut de gamme avec espaces communs premium.</p>
                        <a href="projet-les-cedres.php" class="btn btn-outline" style="margin-top: 15px; display: inline-block;">Détails du projet</a>
                    </div>
                </div>

                <!-- Projet 2 -->
                <div class="building-card">
                    <div class="building-img">
                        <img src="https://images.unsplash.com/photo-1600607688969-a5bfcd646154?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Centre commercial">
                    </div>
                    <div class="building-content">
                        <h3>Centre commercial "Les Terrasses"</h3>
                        <div class="building-meta">
                            <span><i class="fas fa-map-marker-alt"></i> Marseille</span>
                            <span><i class="fas fa-calendar-alt"></i> 2019</span>
                            <span><i class="fas fa-shopping-cart"></i> Commercial</span>
                        </div>
                        <p>Réalisation d'un complexe commercial de 45 000m² intégrant espaces verts et solutions énergétiques durables.</p>
                        <a href="projet-les-terrasses.php" class="btn btn-outline" style="margin-top: 15px; display: inline-block;">Détails du projet</a>
                    </div>
                </div>

                <!-- Projet 3 -->
                <div class="building-card">
                    <div class="building-img">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Siège social">
                    </div>
                    <div class="building-content">
                        <h3>Siège social TechnoSoft</h3>
                        <div class="building-meta">
                            <span><i class="fas fa-map-marker-alt"></i> Bordeaux</span>
                            <span><i class="fas fa-calendar-alt"></i> 2021</span>
                            <span><i class="fas fa-building"></i> Bureaux</span>
                        </div>
                        <p>Construction du siège social de 5 000m² avec technologies intelligentes pour une gestion optimale de l'espace.</p>
                        <a href="projet-technosoft.php" class="btn btn-outline" style="margin-top: 15px; display: inline-block;">Détails du projet</a>
                    </div>
                </div>

                <!-- Projet 4 -->
                <div class="building-card">
                    <div class="building-img">
                        <img src="https://images.unsplash.com/photo-1600607688969-a5bfcd646154?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Résidence étudiante">
                    </div>
                    <div class="building-content">
                        <h3>Résidence étudiante "Campus Vert"</h3>
                        <div class="building-meta">
                            <span><i class="fas fa-map-marker-alt"></i> Lyon</span>
                            <span><i class="fas fa-calendar-alt"></i> 2020</span>
                            <span><i class="fas fa-university"></i> Éducation</span>
                        </div>
                        <p>Construction d'une résidence étudiante de 200 chambres avec espaces communs et bibliothèque intégrée.</p>
                        <a href="projet-campus-vert.php" class="btn btn-outline" style="margin-top: 15px; display: inline-block;">Détails du projet</a>
                    </div>
                </div>

                <!-- Projet 5 -->
                <div class="building-card">
                    <div class="building-img">
                        <img src="https://images.unsplash.com/photo-1600566752355-35792bedcfea?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Usine durable">
                    </div>
                    <div class="building-content">
                        <h3>Usine durable GreenTech</h3>
                        <div class="building-meta">
                            <span><i class="fas fa-map-marker-alt"></i> Nantes</span>
                            <span><i class="fas fa-calendar-alt"></i> 2021</span>
                            <span><i class="fas fa-industry"></i> Industriel</span>
                        </div>
                        <p>Construction d'une usine écologique avec système de récupération des eaux et toiture végétalisée.</p>
                        <a href="projet-greentech.php" class="btn btn-outline" style="margin-top: 15px; display: inline-block;">Détails du projet</a>
                    </div>
                </div>

                <!-- Projet 6 -->
                <div class="building-card">
                    <div class="building-img">
                        <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Complexe sportif">
                    </div>
                    <div class="building-content">
                        <h3>Complexe sportif municipal</h3>
                        <div class="building-meta">
                            <span><i class="fas fa-map-marker-alt"></i> Toulouse</span>
                            <span><i class="fas fa-calendar-alt"></i> 2022</span>
                            <span><i class="fas fa-running"></i> Sportif</span>
                        </div>
                        <p>Réalisation d'un complexe sportif avec piscine olympique, salle omnisports et espaces wellness.</p>
                        <a href="projet-complexe-sportif.php" class="btn btn-outline" style="margin-top: 15px; display: inline-block;">Détails du projet</a>
                    </div>
                </div>
            </div>

            <div class="text-center" style="margin-top: 50px;">
                <a href="index01.php#contact" class="btn">Un projet de construction ? Contactez-nous</a>
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
                        <li><a href="index01.php">Accueil</a></li>
                        <li><a href="index01.php#about">Qui sommes-nous</a></li>
                        <li><a href="index01.php#services">Domaines d'expertise</a></li>
                        <li><a href="nos-projet.php">Nos projets</a></li>
                        <li><a href="index01.php#careers">Carrières</a></li>
                        <li><a href="index01.php#contact">Contact</a></li>
                        <li><a href="#">Yadi Groupe</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3>Services Bâtiment</h3>
                    <ul class="footer-links">
                        <li><a href="#">Construction résidentielle</a></li>
                        <li><a href="#">Bâtiments commerciaux</a></li>
                        <li><a href="#">Structures industrielles</a></li>
                        <li><a href="#">Ouvrages d'art</a></li>
                        <li><a href="#">Construction modulaire</a></li>
                        <li><a href="#">Gros œuvre</a></li>
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
    </script>

    <script>
        // Slider Hero simplifié
        function initHeroSlider() {
            const slides = document.querySelectorAll('.hero-slider .slide');
            const dots = document.querySelectorAll('.hero-slider .slider-dot');
            let current = 0;

            function updateSlider() {
                slides.forEach((slide, i) => {
                    slide.classList.toggle('active', i === current);
                    if (dots[i]) dots[i].classList.toggle('active', i === current);
                });
            }

            function next() {
                current = (current + 1) % slides.length;
                updateSlider();
            }

            // Clic sur les dots
            dots.forEach((dot, i) => {
                dot.addEventListener('click', () => {
                    current = i;
                    updateSlider();
                });
            });

            // Auto-slide
            setInterval(next, 5000);

            // Initialisation
            updateSlider();
        }

        document.addEventListener('DOMContentLoaded', initHeroSlider);
    </script>
</body>

</html>