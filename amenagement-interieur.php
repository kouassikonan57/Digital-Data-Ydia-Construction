<?php
// Configuration de base (identique à la page principale)
$page_title = "YDIA CONSTRUCTION - Aménagement Intérieur";
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

        /* Styles spécifiques à la page Aménagement Intérieur */
        .interior-hero {
            height: 70vh;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
            color: <?php echo $secondary_color; ?>;
            display: flex;
            align-items: center;
            text-align: center;
            margin-top: 80px;
            position: relative;
        }

        .interior-hero-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .interior-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
            color: <?php echo $primary_color; ?>;
        }

        .interior-hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .design-approach {
            padding: 80px 0;
            background-color: <?php echo $secondary_color; ?>;
        }

        .approach-container {
            display: flex;
            gap: 50px;
            align-items: center;
        }

        .approach-text {
            flex: 1;
        }

        .approach-image {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .approach-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }

        .approach-image:hover img {
            transform: scale(1.05);
        }

        .interior-styles {
            padding: 80px 0;
            background-color: <?php echo $light_color; ?>;
        }

        .styles-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .style-card {
            background-color: <?php echo $secondary_color; ?>;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .style-card:hover {
            transform: translateY(-10px);
        }

        .style-image {
            height: 250px;
            overflow: hidden;
        }

        .style-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .style-card:hover .style-image img {
            transform: scale(1.1);
        }

        .style-content {
            padding: 25px;
        }

        .style-content h3 {
            color: <?php echo $primary_color; ?>;
            margin-bottom: 15px;
            font-size: 1.5rem;
        }

        .style-content p {
            margin-bottom: 15px;
        }

        .style-features {
            margin-top: 20px;
        }

        .style-features li {
            margin-bottom: 8px;
            position: relative;
            padding-left: 25px;
        }

        .style-features li:before {
            content: "✓";
            color: <?php echo $primary_color; ?>;
            position: absolute;
            left: 0;
            font-weight: bold;
        }

        .interior-process {
            padding: 80px 0;
            background-color: <?php echo $secondary_color; ?>;
        }

        .process-timeline {
            position: relative;
            max-width: 1200px;
            margin: 50px auto 0;
        }

        .process-timeline:after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: <?php echo $primary_color; ?>;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
        }

        .process-step {
            padding: 10px 40px;
            position: relative;
            background-color: inherit;
            width: 50%;
            box-sizing: border-box;
        }

        .process-step:after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            right: -12px;
            background-color: <?php echo $secondary_color; ?>;
            border: 4px solid <?php echo $primary_color; ?>;
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }

        .left {
            left: 0;
            text-align: right;
        }

        .right {
            left: 50%;
            text-align: left;
        }

        .left:before {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            right: 30px;
            border: medium solid <?php echo $primary_color; ?>;
            border-width: 10px 0 10px 10px;
            border-color: transparent transparent transparent <?php echo $primary_color; ?>;
        }

        .right:before {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            left: 30px;
            border: medium solid <?php echo $primary_color; ?>;
            border-width: 10px 10px 10px 0;
            border-color: transparent <?php echo $primary_color; ?> transparent transparent;
        }

        .step-content {
            padding: 20px 30px;
            background-color: <?php echo $light_color; ?>;
            position: relative;
            border-radius: 6px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .step-content h3 {
            color: <?php echo $primary_color; ?>;
            margin-bottom: 10px;
        }

        @media screen and (max-width: 768px) {
            .approach-container {
                flex-direction: column;
            }

            .process-timeline:after {
                left: 31px;
            }

            .process-step {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }

            .process-step:before {
                left: 60px;
                border: medium solid <?php echo $primary_color; ?>;
                border-width: 10px 10px 10px 0;
                border-color: transparent <?php echo $primary_color; ?> transparent transparent;
            }

            .left:after, .right:after {
                left: 18px;
            }

            .right {
                left: 0%;
            }

            .interior-hero h1 {
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
                <a href="index01.php">
                    <img src="image/logo/logo_Ydia.png" alt="YDIA CONSTRUCTION Logo">
                </a>
            </div>

            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>

            <nav id="mainNav">
                <ul>
                    <li><a href="index01.php#home">Accueil</a></li>
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
    <section class="interior-hero">
        <div class="interior-hero-content">
            <h1>Aménagement Intérieur d'Exception</h1>
            <p>Créez des espaces uniques qui reflètent votre personnalité et optimisent votre confort au quotidien. Notre équipe de designers et artisans transforme vos idées en réalité.</p>
            <a href="index01.php#contact" class="btn">Demander une consultation</a>
        </div>
    </section>

    <!-- Design Approach Section -->
    <section class="design-approach">
        <div class="container">
            <h2 class="section-title">Notre Approche Créative</h2>
            
            <div class="approach-container">
                <div class="approach-text">
                    <p>Chez YDIA CONSTRUCTION, nous croyons que l'aménagement intérieur va bien au-delà de la simple décoration. C'est une science qui allie esthétique, fonctionnalité et bien-être.</p>
                    <p>Notre processus commence par une écoute attentive de vos besoins, de votre style de vie et de vos aspirations. Nous analysons ensuite l'espace disponible sous tous ses angles pour en tirer le meilleur potentiel.</p>
                    <p>Nos designers créent alors des concepts sur mesure, intégrant les dernières tendances tout en respectant votre identité. Chaque détail est pensé pour harmoniser formes, couleurs, textures et lumière.</p>
                    <p>Nous collaborons avec des artisans locaux et des fournisseurs de qualité pour sélectionner les matériaux et meubles qui donneront vie à votre projet dans les meilleures conditions.</p>
                    <a href="#styles" class="btn" style="margin-top: 20px;">Découvrir nos styles</a>
                </div>
                
                <div class="approach-image">
                    <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Approche créative YDIA">
                </div>
            </div>
        </div>
    </section>

    <!-- Interior Styles Section -->
    <section class="interior-styles" id="styles">
        <div class="container">
            <h2 class="section-title text-center">Nos Styles d'Aménagement</h2>
            <p class="text-center" style="max-width: 800px; margin: 0 auto 40px;">Explorez notre gamme de styles intemporels et contemporains, adaptables à tous les espaces et toutes les personnalités.</p>
            
            <div class="styles-grid">
                <div class="style-card">
                    <div class="style-image">
                        <img src="https://images.unsplash.com/photo-1493809842364-78817add7ffb?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Style Moderne">
                    </div>
                    <div class="style-content">
                        <h3>Moderne</h3>
                        <p>Élégance épurée avec des lignes nettes, des matériaux innovants et une palette de couleurs sobres.</p>
                        <ul class="style-features">
                            <li>Meubles aux formes géométriques</li>
                            <li>Matériaux : verre, acier, béton ciré</li>
                            <li>Couleurs neutres avec touches vives</li>
                            <li>Éclairage design et fonctionnel</li>
                            <li>Espace épuré et organisé</li>
                        </ul>
                    </div>
                </div>
                
                <div class="style-card">
                    <div class="style-image">
                        <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Style Scandinave">
                    </div>
                    <div class="style-content">
                        <h3>Scandinave</h3>
                        <p>Lumineux et chaleureux, ce style privilégie le naturel, le confort et la simplicité fonctionnelle.</p>
                        <ul class="style-features">
                            <li>Bois clairs et textiles doux</li>
                            <li>Blanc dominant avec touches pastel</li>
                            <li>Meubles en bois massif aux lignes douces</li>
                            <li>Abondance de lumière naturelle</li>
                            <li>Décoration minimaliste et utile</li>
                        </ul>
                    </div>
                </div>
                
                <div class="style-card">
                    <div class="style-image">
                        <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Style Industriel">
                    </div>
                    <div class="style-content">
                        <h3>Industriel</h3>
                        <p>Inspiré des lofts new-yorkais, ce style assume les matériaux bruts et les structures apparentes.</p>
                        <ul class="style-features">
                            <li>Briques, métal et bois recyclé</li>
                            <li>Éclairage à ampoules visibles</li>
                            <li>Meubles en métal et cuir</li>
                            <li>Conservation des éléments structurels</li>
                            <li>Espaces ouverts et hauts plafonds</li>
                        </ul>
                    </div>
                </div>
                
                <div class="style-card">
                    <div class="style-image">
                        <img src="https://images.unsplash.com/photo-1600210492493-0946911123ea?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Style Classique">
                    </div>
                    <div class="style-content">
                        <h3>Classique</h3>
                        <p>Élégance intemporelle avec des meubles richement travaillés et des matériaux nobles.</p>
                        <ul class="style-features">
                            <li>Bois massifs sombres et patinés</li>
                            <li>Tissus riches (velours, soie, lin)</li>
                            <li>Moulures et ornements décoratifs</li>
                            <li>Symétrie et proportions harmonieuses</li>
                            <li>Lustres et éclairages d'appoint</li>
                        </ul>
                    </div>
                </div>
                
                <div class="style-card">
                    <div class="style-image">
                        <img src="https://images.unsplash.com/photo-1583845112209-6c22ce27f1a7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Style Minimaliste">
                    </div>
                    <div class="style-content">
                        <h3>Minimaliste</h3>
                        <p>L'essentiel sans superflu, où chaque élément a sa raison d'être dans l'espace.</p>
                        <ul class="style-features">
                            <li>Formes géométriques simples</li>
                            <li>Palette monochrome avec contrastes</li>
                            <li>Mobilier multifonction</li>
                            <li>Rangement intégré et invisible</li>
                            <li>Espaces dégagés et épurés</li>
                        </ul>
                    </div>
                </div>
                
                <div class="style-card">
                    <div class="style-image">
                        <img src="https://images.unsplash.com/photo-1600121848594-d8644e57abab?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Style Contemporain">
                    </div>
                    <div class="style-content">
                        <h3>Contemporain</h3>
                        <p>Un mélange actuel des meilleures influences, toujours en phase avec les modes de vie modernes.</p>
                        <ul class="style-features">
                            <li>Combinaison de matériaux naturels et industriels</li>
                            <li>Lignes courbes et organiques</li>
                            <li>Technologie intégrée discrètement</li>
                            <li>Espaces flexibles et modulables</li>
                            <li>Œuvres d'art comme pièces maîtresses</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="interior-process">
        <div class="container">
            <h2 class="section-title text-center">Notre Processus Créatif</h2>
            <p class="text-center" style="max-width: 800px; margin: 0 auto 40px;">De l'idée initiale à la réalisation finale, chaque étape est soigneusement planifiée pour garantir un résultat à la hauteur de vos attentes.</p>
            
            <div class="process-timeline">
                <div class="process-step left">
                    <div class="step-content">
                        <h3>Brief & Inspiration</h3>
                        <p>Rencontre approfondie pour comprendre vos goûts, besoins et contraintes. Création d'un book d'inspiration.</p>
                    </div>
                </div>
                
                <div class="process-step right">
                    <div class="step-content">
                        <h3>Concept & Esquisses</h3>
                        <p>Développement du concept créatif et premières esquisses en 2D/3D pour valider l'orientation stylistique.</p>
                    </div>
                </div>
                
                <div class="process-step left">
                    <div class="step-content">
                        <h3>Planification Spatiale</h3>
                        <p>Optimisation de l'espace avec plans techniques détaillés et sélection des matériaux et finitions.</p>
                    </div>
                </div>
                
                <div class="process-step right">
                    <div class="step-content">
                        <h3>Sélection Mobilier</h3>
                        <p>Choix des meubles, luminaires et accessoires, avec possibilité de pièces sur mesure fabriquées par nos artisans.</p>
                    </div>
                </div>
                
                <div class="process-step left">
                    <div class="step-content">
                        <h3>Réalisation</h3>
                        <p>Coordination des différents corps de métier pour une exécution parfaite selon les plans validés.</p>
                    </div>
                </div>
                
                <div class="process-step right">
                    <div class="step-content">
                        <h3>Livraison & Styling</h3>
                        <p>Installation finale, mise en place des derniers accessoires et remise des clés de votre nouvel espace.</p>
                    </div>
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
                        <li><a href="index01.php#home">Accueil</a></li>
                        <li><a href="index01.php#about">Qui sommes-nous</a></li>
                        <li><a href="index01.php#services">Domaines d'expertise</a></li>
                        <li><a href="index01.php#projects">Nos projets</a></li>
                        <li><a href="index01.php#careers">Carrières</a></li>
                        <li><a href="index01.php#contact">Contact</a></li>
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

    <!-- Scripts de la page principale -->
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
        
        // Script spécifique pour la timeline
        document.addEventListener("DOMContentLoaded", function() {
            // Animation au scroll pour la timeline
            const processSteps = document.querySelectorAll('.process-step');
            
            function checkTimeline() {
                const triggerBottom = window.innerHeight / 5 * 4;
                
                processSteps.forEach(step => {
                    const stepTop = step.getBoundingClientRect().top;
                    
                    if(stepTop < triggerBottom) {
                        step.style.opacity = "1";
                        step.style.transform = "translateX(0)";
                    }
                });
            }
            
            // Initial state
            processSteps.forEach((step, index) => {
                step.style.opacity = "0";
                step.style.transition = "all 0.5s ease";
                
                if(index % 2 === 0) { // left steps
                    step.style.transform = "translateX(-50px)";
                } else { // right steps
                    step.style.transform = "translateX(50px)";
                }
            });
            
            window.addEventListener('scroll', checkTimeline);
            checkTimeline(); // Run once on load
        });
    </script>

</body>

</html>