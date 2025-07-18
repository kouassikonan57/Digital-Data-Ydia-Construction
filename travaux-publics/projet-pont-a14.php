<?php
// Configuration de base (identique à la page principale)
$page_title = "YDIA CONSTRUCTION - Pont autoroutier A14";
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
        :root {
            --primary: <?php echo $primary_color; ?>;
            --primary-dark: #E05E00;
            --secondary: <?php echo $dark_color; ?>;
            --light: <?php echo $secondary_color; ?>;
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

        /* ... (Reprendre tous les styles CSS de votre page travaux-publics.php ici) ... */
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

        /* Styles spécifiques à la page de détail de projet */
        .project-hero {
            height: 60vh;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('../image/hero-a14.jpg') no-repeat center center/cover;
            color: <?php echo $secondary_color; ?>;
            display: flex;
            align-items: center;
            margin-top: 80px;
        }

        .project-hero-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .project-hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            text-align: center;
        }

        .project-hero p {
            font-size: 1.2rem;
            max-width: 800px;
        }

        .project-detail-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 80px 20px;
        }

        .project-main-content {
            display: flex;
            gap: 50px;
            margin-bottom: 60px;
        }

        .project-main-text {
            flex: 2;
        }

        .project-sidebar {
            flex: 1;
        }

        .project-info-card {
            background-color: <?php echo $light_color; ?>;
            padding: 30px;
            border-radius: 8px;
            box-shadow: var(--shadow);
            margin-bottom: 30px;
        }

        .project-info-card h3 {
            color: <?php echo $primary_color; ?>;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        .info-item {
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .info-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .info-item h4 {
            color: <?php echo $primary_color; ?>;
            margin-bottom: 5px;
            font-size: 1rem;
            margin-right: 5px;
            white-space: nowrap;
        }

        .info-item p {
            margin: 0;
            text-align: justify;
        }

        .info-item h4::after {
            content: " :";
        }

        .project-gallery {
            margin: 60px 0;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .gallery-item {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            height: 250px;
        }

        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .project-features {
            margin: 60px 0;
        }

        .project-features p {
            text-align: justify;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .feature-card {
            background-color: <?php echo $light_color; ?>;
            padding: 30px;
            border-radius: 8px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            text-align: center;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: <?php echo $primary_color; ?>;
            margin-bottom: 20px;
        }

        .feature-card h3 {
            margin-bottom: 15px;
            color: <?php echo $dark_color; ?>;
        }

        .project-testimonial {
            background-color: <?php echo $primary_color; ?>;
            color: <?php echo $secondary_color; ?>;
            padding: 60px;
            border-radius: 8px;
            margin: 60px 0;
            text-align: center;
        }

        .testimonial-content {
            max-width: 800px;
            margin: 0 auto;
            font-style: italic;
            font-size: 1.2rem;
            line-height: 1.8;
            position: relative;
        }

        .testimonial-content:before,
        .testimonial-content:after {
            content: '"';
            font-size: 3rem;
            color: rgba(255, 255, 255, 0.3);
            position: absolute;
        }

        .testimonial-content:before {
            top: -20px;
            left: -40px;
        }

        .testimonial-content:after {
            bottom: -40px;
            right: -40px;
        }

        .testimonial-author {
            margin-top: 30px;
            font-weight: bold;
            font-style: normal;
        }

        .project-cta {
            text-align: center;
            margin: 60px 0;
        }

        @media (max-width: 992px) {
            .project-main-content {
                flex-direction: column;
            }

            .project-hero h1 {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .project-hero {
                height: 50vh;
            }

            .project-hero h1 {
                font-size: 2rem;
            }

            .project-hero p {
                font-size: 1rem;
            }

            .testimonial-content {
                font-size: 1rem;
                padding: 0 20px;
            }
        }

        ul.orange-checks {
            list-style: none;
            padding-left: 0;
        }

        ul.orange-checks li {
            position: relative;
            padding-left: 28px;
            margin-bottom: 10px;
            line-height: 1.5;
        }

        ul.orange-checks li::before {
            content: "✔";
            position: absolute;
            left: 0;
            top: 0;
            color: orange;
            font-size: 16px;
            line-height: 1.2;
        }
    </style>
</head>

<body>
    <!-- Header (identique à la page principale) -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <a href="../index.php">
                    <img src="../image/logo/logo_Ydia.png" alt="YDIA CONSTRUCTION Logo">
                </a>
            </div>

            <button class="mobile-menu-btn" id="mobileMenuBtn">
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

    <!-- Hero Section du projet -->
    <section class="project-hero">
        <div class="project-hero-content">
            <h1>Pont autoroutier A14</h1>
            <p>Un ouvrage d'art majeur sur l'autoroute A14, symbole de notre expertise en génie civil.</p>
        </div>
    </section>

    <!-- Détails du projet -->
    <div class="project-detail-container">
        <div class="project-main-content">
            <div class="project-main-text">
                <h2 class="section-title">Description du projet</h2>
                <p>Le pont autoroutier A14 représente l'un des projets les plus ambitieux de notre entreprise. Avec une portée principale de 250 mètres, cet ouvrage d'art permet de franchir une vallée tout en maintenant la fluidité du trafic sur l'autoroute A14, axe majeur du réseau routier français.</p>

                <p>Notre équipe a relevé plusieurs défis techniques lors de la construction :</p>
                <ul style="margin: 20px 0; padding-left: 20px;" class="orange-checks">
                    <li style="margin-bottom: 10px;">Travaux en site contraint avec maintien de la circulation</li>
                    <li style="margin-bottom: 10px;">Utilisation de techniques de lançage pour les travées centrales</li>
                    <li style="margin-bottom: 10px;">Mise en œuvre de bétons haute performance pour la durabilité</li>
                    <li style="margin-bottom: 10px;">Intégration paysagère minutieuse</li>
                </ul>

                <p>Le projet a été réalisé en partenariat avec les collectivités locales et les services de l'État, avec un souci constant de minimiser l'impact environnemental et de préserver la biodiversité locale.</p>

                <div class="project-features">
                    <h2 class="section-title">Innovations techniques</h2>
                    <div class="features-grid">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-bridge"></i>
                            </div>
                            <h3>Technique de lançage</h3>
                            <p>Mise en place des travées centrales par lançage successif pour éviter les perturbations du trafic</p>
                        </div>

                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <h3>Écoconstruction</h3>
                            <p>Utilisation de matériaux recyclés et procédés à faible empreinte carbone</p>
                        </div>

                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h3>Sécurité renforcée</h3>
                            <p>Dispositifs de sécurité innovants pour les usagers et les ouvriers</p>
                        </div>

                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                            <h3>Monitoring intelligent</h3>
                            <p>Système de capteurs intégrés pour le suivi à long terme de la structure</p>
                        </div>
                    </div>
                </div>

                <div class="project-testimonial">
                    <div class="testimonial-content">
                        "YDIA Construction a fait preuve d'un professionnalisme remarquable dans la réalisation de cet ouvrage complexe. Le respect des délais et du budget, malgré les contraintes techniques, témoigne de leur expertise dans le domaine des travaux publics."
                        <div class="testimonial-author">
                            Jean Dupont, Directeur des Infrastructures - Ministère des Transports
                        </div>
                    </div>
                </div>
            </div>

            <div class="project-sidebar">
                <div class="project-info-card">
                    <h3>Informations clés</h3>
                    <div class="info-item">
                        <h4>Client</h4>
                        <p>Direction Interdépartementale des Routes Bingerville</p>
                    </div>
                    <div class="info-item">
                        <h4>Localisation</h4>
                        <p>Bingerville, Abidjan</p>
                    </div>
                    <div class="info-item">
                        <h4>Date</h4>
                        <p>2019 - 2021</p>
                    </div>
                    <div class="info-item">
                        <h4>Budget</h4>
                        <p>45 millions FCFA</p>
                    </div>
                    <div class="info-item">
                        <h4>Longueur</h4>
                        <p>850 mètres</p>
                    </div>
                    <div class="info-item">
                        <h4>Portée principale</h4>
                        <p>250 mètres</p>
                    </div>
                </div>

                <div class="project-info-card">
                    <h3>Chiffres clés</h3>
                    <div class="info-item">
                        <h4>Béton utilisé</h4>
                        <p>12 500 m³</p>
                    </div>
                    <div class="info-item">
                        <h4>Acier</h4>
                        <p>2 800 tonnes</p>
                    </div>
                    <div class="info-item">
                        <h4>Heures de travail</h4>
                        <p>150 000 heures</p>
                    </div>
                    <div class="info-item">
                        <h4>Effectif maximal</h4>
                        <p>85 personnes</p>
                    </div>
                </div>

                <div class="project-info-card">
                    <h3>Téléchargements</h3>
                    <div class="info-item">
                        <a href="#" style="color: <?php echo $primary_color; ?>;"><i class="fas fa-file-pdf"></i> Dossier technique (PDF)</a>
                    </div>
                    <div class="info-item">
                        <a href="#" style="color: <?php echo $primary_color; ?>;"><i class="fas fa-file-image"></i> Galerie haute résolution</a>
                    </div>
                    <div class="info-item">
                        <a href="#" style="color: <?php echo $primary_color; ?>;"><i class="fas fa-film"></i> Vidéo du projet</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="project-gallery">
            <h2 class="section-title">Galerie du projet</h2>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="../image/route a14.jpg" alt="Vue d'ensemble du pont A14">
                </div>
                <div class="gallery-item">
                    <img src="../image/img-projet (2).jpg" alt="Travaux de fondation">
                </div>
                <div class="gallery-item">
                    <img src="../image/route a14.jpg" alt="Mise en place des travées">
                </div>
                <div class="gallery-item">
                    <img src="../image/route a141.jpg" alt="Vue aérienne du chantier">
                </div>
                <div class="gallery-item">
                    <img src="../image/route a14.jpg" alt="Détail des piles du pont">
                </div>
                <div class="gallery-item">
                    <img src="../image/img-projet (1).jpg" alt="Inauguration du pont">
                </div>
            </div>
        </div>

        <div class="project-cta">
            <a href="../travaux-publics.php" class="btn">Retour aux travaux publics</a>
            <a href="../index.php#contact" class="btn btn-outline" style="margin-left: 15px;">Contactez-nous</a>
        </div>
    </div>

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
        // Scripts JavaScript de la page principale
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

        // Menu mobile
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mainNav = document.getElementById('mainNav');

        mobileMenuBtn.addEventListener('click', () => {
            mainNav.classList.toggle('active');
            mobileMenuBtn.innerHTML = mainNav.classList.contains('active') ? '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
        });

        // Lightbox pour la galerie
        const galleryItems = document.querySelectorAll('.gallery-item');
        const lightbox = document.createElement('div');
        lightbox.id = 'lightbox';
        document.body.appendChild(lightbox);

        galleryItems.forEach(item => {
            item.addEventListener('click', () => {
                const img = item.querySelector('img');
                lightbox.style.display = 'flex';
                lightbox.innerHTML = `<img src="${img.src}" alt="${img.alt}">`;
            });
        });

        lightbox.addEventListener('click', (e) => {
            if (e.target !== e.currentTarget) return;
            lightbox.style.display = 'none';
        });

        // Styles pour la lightbox
        const lightboxStyles = document.createElement('style');
        lightboxStyles.textContent = `
            #lightbox {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0,0,0,0.8);
                display: none;
                justify-content: center;
                align-items: center;
                z-index: 10000;
            }
            
            #lightbox img {
                max-width: 90%;
                max-height: 90%;
                border: 3px solid white;
                box-shadow: 0 0 20px rgba(0,0,0,0.6);
            }
        `;
        document.head.appendChild(lightboxStyles);
    </script>
</body>

</html>