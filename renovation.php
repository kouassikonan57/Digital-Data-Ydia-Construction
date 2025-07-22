<?php
// Configuration de base (identique à la page principale)
$page_title = "YDIA CONSTRUCTION - Rénovation";
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
        /* Reprendre tous les styles CSS de la page principale ici */
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

        /* Styles spécifiques à la page Rénovation */
        .renovation-hero {
            height: 70vh;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
            color: <?php echo $secondary_color; ?>;
            display: flex;
            align-items: center;
            text-align: center;
            margin-top: 80px;
            position: relative;
        }

        .renovation-hero-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .renovation-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
            color: <?php echo $primary_color; ?>;
        }

        .renovation-hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .renovation-process {
            padding: 80px 0;
            background-color: <?php echo $secondary_color; ?>;
        }

        .process-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .process-step {
            background-color: <?php echo $light_color; ?>;
            border-radius: 8px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .process-step:hover {
            transform: translateY(-10px);
        }

        .process-icon {
            font-size: 3rem;
            color: <?php echo $primary_color; ?>;
            margin-bottom: 20px;
        }

        .process-step h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .renovation-projects {
            padding: 80px 0;
            background-color: <?php echo $light_color; ?>;
        }

        .project-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 50px;
        }

        .gallery-item {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            height: 250px;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(<?php echo $primary_color == "#FF6B00" ? "255, 107, 0" : "51, 51, 51"; ?>, 0.8);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-overlay h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .renovation-services {
            padding: 80px 0;
            background-color: <?php echo $secondary_color; ?>;
        }

        .services-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .service-item {
            background-color: <?php echo $light_color; ?>;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .service-item h3 {
            color: <?php echo $primary_color; ?>;
            margin-bottom: 15px;
            font-size: 1.3rem;
        }

        .service-item ul {
            margin-left: 20px;
        }

        .service-item li {
            margin-bottom: 10px;
            position: relative;
        }

        .service-item li:before {
            content: "•";
            color: <?php echo $primary_color; ?>;
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }

        @media (max-width: 768px) {
            .renovation-hero h1 {
                font-size: 2.5rem;
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

    <!-- Hero Section -->
    <section class="renovation-hero">
        <div class="renovation-hero-content">
            <h1>Rénovation sur Mesure</h1>
            <p>Transformez vos espaces avec notre expertise en rénovation. De la conception à la réalisation, nous redonnons vie à vos bâtiments tout en préservant leur caractère et en améliorant leur performance.</p>
            <a href="#contact" class="btn">Demander un devis</a>
        </div>
    </section>

    <!-- Process Section -->
    <section class="renovation-process">
        <div class="container">
            <h2 class="section-title text-center">Notre Processus de Rénovation</h2>
            <p class="text-center" style="max-width: 800px; margin: 0 auto 40px;">Une méthodologie éprouvée pour des résultats exceptionnels à chaque étape de votre projet.</p>

            <div class="process-steps">
                <div class="process-step">
                    <div class="process-icon">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <h3>Évaluation Initiale</h3>
                    <p>Analyse approfondie de l'existant et définition des objectifs de rénovation avec nos experts.</p>
                </div>

                <div class="process-step">
                    <div class="process-icon">
                        <i class="fas fa-drafting-compass"></i>
                    </div>
                    <h3>Conception Sur Mesure</h3>
                    <p>Création de plans détaillés et sélection des matériaux adaptés à vos besoins et à votre budget.</p>
                </div>

                <div class="process-step">
                    <div class="process-icon">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <h3>Préparation du Site</h3>
                    <p>Démontage sécurisé et préparation des espaces pour une intervention optimale.</p>
                </div>

                <div class="process-step">
                    <div class="process-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Exécution des Travaux</h3>
                    <p>Réalisation des travaux par nos équipes qualifiées avec un suivi rigoureux du planning.</p>
                </div>

                <div class="process-step">
                    <div class="process-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3>Contrôle Qualité</h3>
                    <p>Vérification minutieuse de chaque détail avant la livraison finale.</p>
                </div>

                <div class="process-step">
                    <div class="process-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3>Livraison du Projet</h3>
                    <p>Remise des clés et accompagnement pour votre prise en main des nouveaux espaces.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Gallery Section -->
    <section class="renovation-projects">
        <div class="container">
            <h2 class="section-title text-center">Nos Réalisations en Rénovation</h2>
            <p class="text-center" style="max-width: 800px; margin: 0 auto 40px;">Découvrez quelques-uns de nos projets de rénovation qui ont transformé des espaces tout en préservant leur âme.</p>

            <div class="project-gallery">
                <div class="gallery-item">
                    <img src="image/renov (9).jpeg" alt="Rénovation d'hôtel">
                    <div class="gallery-overlay">
                        <h3>Institut Pasteur Adiopodoume, Abidjan"</h3>
                        <p>Rénovation complète d'une école à Adiopodoumé</p>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="image/renov (7).jpeg" alt="Rénovation d'appartement">
                    <div class="gallery-overlay">
                        <h3>Institut Pasteur Adiopodoume, Abidjan</h3>
                        <p>Réhabilitation d'un appartement Côte d'Ivoire avec conservation des éléments d'origine</p>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="image/renov (2).jpeg" alt="Rénovation de bureau">
                    <div class="gallery-overlay">
                        <h3>Institut Pasteur Adiopodoume, Abidjan</h3>
                        <p>Transformation d'un ancien entrepôt en espaces de travail modernes</p>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="image/siège-social (7).jpeg" alt="Rénovation de restaurant">
                    <div class="gallery-overlay">
                        <h3>Institut Pasteur Adiopodoume, Abidjan"</h3>
                        <p>Rénovation complète avec extension de la surface et création d'une véranda</p>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="image/renov (6).jpeg" alt="Rénovation de maison">
                    <div class="gallery-overlay">
                        <h3>Institut Pasteur Adiopodoume, Abidjan</h3>
                        <p>Réhabilitation complète avec amélioration de la performance énergétique</p>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="image/renov (4).jpeg" alt="Rénovation de commerce">
                    <div class="gallery-overlay">
                        <h3>Institut Pasteur Adiopodoume, Abidjan</h3>
                        <p>Transformation d'un ancien local industriel en espace commercial haut de gamme</p>
                    </div>
                </div>
            </div>

            <div class="text-center" style="margin-top: 50px;">
                <a href="index.php#projects" class="btn">Voir tous nos projets</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="renovation-services">
        <div class="container">
            <h2 class="section-title text-center">Nos Services de Rénovation</h2>
            <p class="text-center" style="max-width: 800px; margin: 0 auto 40px;">Une gamme complète de services pour répondre à tous vos besoins en matière de rénovation.</p>

            <div class="services-list">
                <div class="service-item">
                    <h3>Rénovation Résidentielle</h3>
                    <ul>
                        <li>Rénovation complète d'appartements et maisons</li>
                        <li>Agencement d'espaces intérieurs</li>
                        <li>Réfection de salles de bains et cuisines</li>
                        <li>Optimisation des surfaces habitables</li>
                        <li>Amélioration de l'isolation thermique et acoustique</li>
                    </ul>
                </div>

                <div class="service-item">
                    <h3>Rénovation Commerciale</h3>
                    <ul>
                        <li>Transformation de locaux commerciaux</li>
                        <li>Aménagement de bureaux et espaces de travail</li>
                        <li>Création de vitrines et enseignes</li>
                        <li>Mise aux normes ERP</li>
                        <li>Optimisation des flux clients</li>
                    </ul>
                </div>

                <div class="service-item">
                    <h3>Rénovation Patrimoniale</h3>
                    <ul>
                        <li>Restauration de bâtiments historiques</li>
                        <li>Conservation des éléments architecturaux</li>
                        <li>Mise aux normes contemporaines</li>
                        <li>Réhabilitation de monuments classés</li>
                        <li>Expertise en matériaux anciens</li>
                    </ul>
                </div>

                <div class="service-item">
                    <h3>Rénovation Énergétique</h3>
                    <ul>
                        <li>Isolation thermique par l'extérieur/intérieur</li>
                        <li>Remplacement des menuiseries</li>
                        <li>Installation de systèmes de chauffage performants</li>
                        <li>Mise en place de solutions renouvelables</li>
                        <li>Audit énergétique et conseils</li>
                    </ul>
                </div>

                <div class="service-item">
                    <h3>Rénovation de Façades</h3>
                    <ul>
                        <li>Ravalement de façades</li>
                        <li>Réparation de pierres et joints</li>
                        <li>Nettoyage et traitement des surfaces</li>
                        <li>Isolation par l'extérieur</li>
                        <li>Réfection des enduits</li>
                    </ul>
                </div>

                <div class="service-item">
                    <h3>Rénovation Technique</h3>
                    <ul>
                        <li>Mise aux normes électriques</li>
                        <li>Réfection des réseaux plomberie</li>
                        <li>Modernisation des systèmes de ventilation</li>
                        <li>Installation domotique</li>
                        <li>Sécurisation des accès</li>
                    </ul>
                </div>
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
        // Script spécifique pour la galerie
        document.addEventListener("DOMContentLoaded", function() {
            // Animation au survol des éléments de galerie
            const galleryItems = document.querySelectorAll('.gallery-item');
            
            galleryItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.querySelector('img').style.transform = 'scale(1.1)';
                    this.querySelector('.gallery-overlay').style.opacity = '1';
                });
                
                item.addEventListener('mouseleave', function() {
                    this.querySelector('img').style.transform = 'scale(1)';
                    this.querySelector('.gallery-overlay').style.opacity = '0';
                });
            });
        });
    </script>

</body>

</html>