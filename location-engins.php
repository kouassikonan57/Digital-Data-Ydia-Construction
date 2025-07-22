<?php
// Configuration de base
$page_title = "YDIA CONSTRUCTION - Location d'Engins BTP";
$company_name = "YDIA CONSTRUCTION";
$slogan = "Location d'engins pour tous vos chantiers";
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
        /* Styles de base identiques */
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

        /* Hero Section spécifique à la location d'engins */
        /* Styles pour la vidéo Hero */
        .hero-location {
            position: relative;
            height: 80vh;
            display: flex;
            align-items: center;
            text-align: center;
            margin-top: 80px;
            overflow: hidden;
        }

        .hero-video-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .hero-video {
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
            z-index: 1;
        }

        .hero-content-location {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
            color: <?php echo $secondary_color; ?>;
        }

        .hero-content-location h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .hero-content-location p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        @media (max-width: 768px) {
            .hero-location {
                height: 70vh;
            }

            .hero-content-location h1 {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 576px) {
            .hero-content-location h1 {
                font-size: 2rem;
            }

            .hero-content-location p {
                font-size: 1rem;
            }
        }

        /* Section Nos Engins */
        .engins-location {
            padding: 100px 0;
            background-color: <?php echo $light_color; ?>;
        }

        .engins-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .engin-card {
            background-color: <?php echo $secondary_color; ?>;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .engin-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .engin-img {
            height: 200px;
            overflow: hidden;
        }

        .engin-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .engin-card:hover .engin-img img {
            transform: scale(1.05);
        }

        .engin-content {
            padding: 20px;
        }

        .engin-content h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: var(--primary);
        }

        .engin-specs {
            margin-bottom: 15px;
            color: var(--dark-gray);
        }

        .engin-specs span {
            display: block;
            margin-bottom: 5px;
        }

        .engin-price {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 15px;
        }

        /* Tarifs Section */
        .tarifs-location {
            padding: 100px 0;
            background-color: <?php echo $secondary_color; ?>;
        }

        .tarifs-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 40px;
            box-shadow: var(--shadow);
        }

        .tarifs-table th,
        .tarifs-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid var(--medium-gray);
        }

        .tarifs-table th {
            background-color: var(--primary);
            color: var(--light);
            font-weight: 600;
        }

        .tarifs-table tr:nth-child(even) {
            background-color: var(--light-gray);
        }

        .tarifs-table tr:hover {
            background-color: rgba(255, 107, 0, 0.1);
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .hero-content-location h1 {
                font-size: 2.8rem;
            }
        }

        @media (max-width: 768px) {
            .hero-content-location h1 {
                font-size: 2.5rem;
            }

            .hero-location {
                height: 70vh;
            }

            .tarifs-table {
                display: block;
                overflow-x: auto;
            }
        }

        @media (max-width: 576px) {
            .hero-content-location h1 {
                font-size: 2rem;
            }

            .hero-content-location p {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <!-- Header identique à la page principale -->
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

    <!-- Hero Section pour la location d'engins -->
    <!-- Hero Section avec vidéo -->
    <section class="hero-location">
        <!-- Vidéo en arrière-plan -->
        <div class="hero-video-container">
            <video class="hero-video" autoplay muted loop playsinline>
                <source src="image/video-hero.mp4" type="video/mp4">
                <!-- Fallback image si la vidéo ne peut pas être chargée -->
                <img src="image/compacteur à main.jpg" alt="Engins BTP">
            </video>
            <!-- Overlay sombre pour améliorer la lisibilité du texte -->
            <div class="video-overlay"></div>
        </div>

        <div class="hero-content-location">
            <h1>Location d'Engins BTP</h1>
            <p>Une large gamme d'engins de chantier disponibles à la location pour tous vos projets</p>
            <a href="#engins" class="btn">Découvrez notre parc</a>
        </div>
    </section>

    <!-- Section Nos Engins -->
    <section class="engins-location" id="engins">
        <div class="container">
            <h2 class="section-title text-center">Notre Parc d'Engins</h2>
            <p class="text-center" style="max-width: 700px; margin: 0 auto 40px;">Découvrez notre gamme complète d'engins de chantier disponibles à la location.</p>

            <div class="engins-grid">
                <!-- Engin 1 -->
                <div class="engin-card">
                    <div class="engin-img">
                        <img src="image/Pelle hydraulique.jpg" alt="Pelle hydraulique">
                    </div>
                    <div class="engin-content">
                        <h3>Tractopelle</h3>
                        <div class="engin-specs">
                            <span><strong>Modèle:</strong> ...</span>
                            <span><strong>Poids:</strong> ...</span>
                            <span><strong>Puissance:</strong> ...</span>
                        </div>
                        <!-- <div class="engin-price">À partir de 1 500 FCFA/jour</div> -->
                        <a href="index.php#contact" class="btn btn-outline">Demander un devis</a>
                    </div>
                </div>
                <!-- Engin 2 -->
                <div class="engin-card">
                    <div class="engin-img">
                        <img src="image/chargeuse.jpg" alt="Pelle hydraulique">
                    </div>
                    <div class="engin-content">
                        <h3>Pelle Hydraulique</h3>
                        <div class="engin-specs">
                            <span><strong>Modèle:</strong> ...</span>
                            <span><strong>Poids:</strong> ...</span>
                            <span><strong>Puissance:</strong> ...</span>
                        </div>
                        <!-- <div class="engin-price">À partir de 1 500 FCFA/jour</div> -->
                        <a href="index.php#contact" class="btn btn-outline">Demander un devis</a>
                    </div>
                </div>

                <!-- Engin 3 -->
                <div class="engin-card">
                    <div class="engin-img">
                        <img src="image/bulldozer.jpg" alt="Chargeuse sur pneus">
                    </div>
                    <div class="engin-content">
                        <h3>Chargeuse</h3>
                        <div class="engin-specs">
                            <span><strong>Modèle:</strong> ...</span>
                            <span><strong>Capacité:</strong> ...</span>
                            <span><strong>Puissance:</strong> ...</span>
                        </div>
                        <!-- <div class="engin-price">À partir de 1 200 FCFA/jour</div> -->
                        <a href="index.php#contact" class="btn btn-outline">Demander un devis</a>
                    </div>
                </div>

                <!-- Engin 4 -->
                <div class="engin-card">
                    <div class="engin-img">
                        <img src="image/bulldozers.png" alt="Bulldozer">
                    </div>
                    <div class="engin-content">
                        <h3>Bulldozer</h3>
                        <div class="engin-specs">
                            <span><strong>Modèle:</strong> ...</span>
                            <span><strong>Poids:</strong> ...</span>
                            <span><strong>Puissance:</strong> ...</span>
                        </div>
                        <!-- <div class="engin-price">À partir de 1 800 FCFA/jour</div> -->
                        <a href="index.php#contact" class="btn btn-outline">Demander un devis</a>
                    </div>
                </div>

                <!-- Engin 5 -->
                <div class="engin-card">
                    <div class="engin-img">
                        <img src="image/niveleuse.jpg" alt="Niveleuse">
                    </div>
                    <div class="engin-content">
                        <h3>Niveleuse</h3>
                        <div class="engin-specs">
                            <span><strong>Modèle:</strong> ...</span>
                            <span><strong>Longueur:</strong> ...</span>
                            <span><strong>Puissance:</strong> ...</span>
                        </div>
                        <!-- <div class="engin-price">À partir de 1 300 FCFA/jour</div> -->
                        <a href="index.php#contact" class="btn btn-outline">Demander un devis</a>
                    </div>
                </div>

                <!-- Engin 6 -->
                <div class="engin-card">
                    <div class="engin-img">
                        <img src="image/compacteur (2).jpg" alt="Compacteur">
                    </div>
                    <div class="engin-content">
                        <h3>Compacteur</h3>
                        <div class="engin-specs">
                            <span><strong>Modèle:</strong> ...</span>
                            <span><strong>Poids:</strong> ...</span>
                            <span><strong>Largeur:</strong> ...</span>
                        </div>
                        <!-- <div class="engin-price">À partir de 900 FCFA/jour</div> -->
                        <a href="index.php#contact" class="btn btn-outline">Demander un devis</a>
                    </div>
                </div>

                <!-- Engin 7 -->
                <div class="engin-card">
                    <div class="engin-img">
                        <img src="image/camion-benne.jpg" alt="Camion benne">
                    </div>
                    <div class="engin-content">
                        <h3>Camion Benne</h3>
                        <div class="engin-specs">
                            <span><strong>Modèle:</strong> ...</span>
                            <span><strong>Charge utile:</strong> ...</span>
                            <span><strong>Volume:</strong> ...</span>
                        </div>
                        <!-- <div class="engin-price">À partir de 800 FCFA/jour</div> -->
                        <a href="index.php#contact" class="btn btn-outline">Demander un devis</a>
                    </div>
                </div>
                <!-- Engin 8 -->
                <div class="engin-card">
                    <div class="engin-img">
                        <img src="image/compacteur-à-mains.jpg" alt="compacteur à mains">
                    </div>
                    <div class="engin-content">
                        <h3>Compacteur à mains</h3>
                        <div class="engin-specs">
                            <span><strong>Modèle:</strong> ...</span>
                            <span><strong>Charge utile:</strong> ...</span>
                            <span><strong>Volume:</strong> ...</span>
                        </div>
                        <!-- <div class="engin-price">À partir de 800 FCFA/jour</div> -->
                        <a href="index.php#contact" class="btn btn-outline">Demander un devis</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Tarifs -->
    <section class="tarifs-location">
        <div class="container">
            <h2 class="section-title text-center">Nos Tarifs de Location</h2>
            <p class="text-center" style="max-width: 700px; margin: 0 auto 40px;">Consultez nos tarifs compétitifs pour la location de nos engins de chantier.</p>

            <!-- <table class="tarifs-table">
                <thead>
                    <tr>
                        <th>Engin</th>
                        <th>Prix journalier</th>
                        <th>Prix hebdomadaire</th>
                        <th>Prix mensuel</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Pelle Hydraulique (22t)</td>
                        <td>1 500 FCFA</td>
                        <td>7 500 FCFA</td>
                        <td>25 000 FCFA</td>
                    </tr>
                    <tr>
                        <td>Chargeuse sur Pneus</td>
                        <td>1 200 FCFA</td>
                        <td>6 000 FCFA</td>
                        <td>20 000 FCFA</td>
                    </tr>
                    <tr>
                        <td>Bulldozer</td>
                        <td>1 800 FCFA</td>
                        <td>9 000 FCFA</td>
                        <td>30 000 FCFA</td>
                    </tr>
                    <tr>
                        <td>Niveleuse</td>
                        <td>1 300 FCFA</td>
                        <td>6 500 FCFA</td>
                        <td>22 000 FCFA</td>
                    </tr>
                    <tr>
                        <td>Compacteur à Pneus</td>
                        <td>900 FCFA</td>
                        <td>4 500 FCFA</td>
                        <td>15 000 FCFA</td>
                    </tr>
                    <tr>
                        <td>Camion Benne (30t)</td>
                        <td>800 FCFA</td>
                        <td>4 000 FCFA</td>
                        <td>13 000 FCFA</td>
                    </tr>
                    <tr>
                        <td>Mini-pelle (5t)</td>
                        <td>600 FCFA</td>
                        <td>3 000 FCFA</td>
                        <td>10 000 FCFA</td>
                    </tr>
                    <tr>
                        <td>Dumper</td>
                        <td>700 FCFA</td>
                        <td>3 500 FCFA</td>
                        <td>12 000 FCFA</td>
                    </tr>
                </tbody>
            </table> -->

            <div style="text-align: center; margin-top: 40px;">
                <p><em>Tarifs HT - Options conducteur et transport disponibles</em></p>
                <a href="#contact" class="btn">Contactez-nous pour un devis personnalisé</a>
            </div>
        </div>
    </section>

    <!-- Footer identique à la page principale -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-col">
                    <h3><?php echo $company_name; ?></h3>
                    <p><?php echo $slogan; ?></p>
                    <p>Entreprise leader dans le secteur du BTP, proposant des solutions complètes de location d'engins pour tous vos chantiers.</p>

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
                    <h3>Nos Engins</h3>
                    <ul class="footer-links">
                        <li><a href="#engins">Pelles hydrauliques</a></li>
                        <li><a href="#engins">Chargeuses</a></li>
                        <li><a href="#engins">Bulldozers</a></li>
                        <li><a href="#engins">Niveleuses</a></li>
                        <li><a href="#engins">Compacteurs</a></li>
                        <li><a href="#engins">Camions bennes</a></li>
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
                    <div id="formMessage" style="display:none; margin-top: 10px;"></div>
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
        // Scroll to top button
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

        // Scripts identiques à la page principale
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
    </script>

    <script>
        // Vérification de la prise en charge de la vidéo
        document.addEventListener('DOMContentLoaded', function() {
            const heroVideo = document.querySelector('.hero-video');

            heroVideo.addEventListener('error', function() {
                // Si la vidéo ne peut pas être chargée, afficher l'image de fallback
                const fallbackImage = this.querySelector('img');
                if (fallbackImage) {
                    this.parentNode.style.backgroundImage = 'url(' + fallbackImage.src + ')';
                    this.style.display = 'none';
                    fallbackImage.style.display = 'block';
                    fallbackImage.style.width = '100%';
                    fallbackImage.style.height = '100%';
                    fallbackImage.style.objectFit = 'cover';
                }
            });

            // Démarrer la vidéo (nécessaire pour certains navigateurs mobiles)
            heroVideo.play().catch(e => console.log("La lecture automatique n'est pas autorisée:", e));
        });
    </script>
</body>

</html>