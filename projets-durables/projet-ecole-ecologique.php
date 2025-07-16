<?php
$page_title = "YDIA - École Écologique";
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
        /* Styles de base */
        :root {
            --primary: <?php echo $primary_color; ?>;
            --primary-dark: #E05E00;
            --secondary: <?php echo $dark_color; ?>;
            --light: <?php echo $secondary_color; ?>;
            --light-gray: <?php echo $light_color; ?>;
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
            color: var(--text);
            background-color: var(--light);
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
            background-color: var(--primary);
            color: var(--light);
            border-radius: 4px;
            font-weight: 600;
            transition: var(--transition);
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: var(--secondary);
            transform: translateY(-2px);
        }

        .btn-outline {
            background-color: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }

        .btn-outline:hover {
            background-color: var(--primary);
            color: var(--light);
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 30px;
            position: relative;
            display: inline-block;
            color: var(--text);
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 70px;
            height: 4px;
            background-color: var(--primary);
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
            background-color: var(--light);
            box-shadow: var(--shadow);
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
            margin-left: 18px;
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
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
            color: var(--primary);
        }

        .mobile-menu-btn {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
            background: none;
            border: none;
            color: var(--primary);
        }

        /* Project Hero Section */
        .project-hero {
            height: 70vh;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url('assets/projets/ecole-ecologique/hero.jpg') no-repeat center center/cover;
            display: flex;
            align-items: center;
            color: white;
            text-align: center;
            margin-top: 80px;
        }

        .project-hero .container {
            width: 100%;
        }

        .project-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .project-hero p {
            font-size: 1.5rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        /* Project Content */
        .project-content {
            padding: 80px 0;
        }

        .project-overview {
            max-width: 800px;
            margin: 0 auto 60px;
            text-align: center;
        }

        .tech-badges {
            margin: 40px 0;
            text-align: center;
        }

        .tech-badge {
            display: inline-block;
            background: var(--primary);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            margin: 5px;
            font-size: 0.9rem;
        }

        .project-features {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin: 60px 0;
        }

        .feature-column h3 {
            color: var(--primary);
            margin-bottom: 20px;
        }

        .feature-column ul {
            line-height: 2;
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
            background-color: var(--secondary);
            color: var(--light);
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
            background-color: var(--primary);
        }

        .footer-col p {
            margin-bottom: 20px;
            opacity: 0.8;
            text-align: justify;
        }

        .footer-links li {
            margin-bottom: 15px;
        }

        .footer-links a {
            opacity: 0.8;
            transition: opacity 0.3s ease, color 0.3s ease;
        }

        .footer-links a:hover {
            opacity: 1;
            color: var(--primary);
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
            transition: var(--transition);
        }

        .social-links a:hover {
            background-color: var(--primary);
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

        /* Scroll to top button */
        #scrollTopBtn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
            background-color: var(--primary);
            color: var(--light);
            border: none;
            padding: 12px 16px;
            border-radius: 50%;
            font-size: 20px;
            cursor: pointer;
            box-shadow: var(--shadow);
            transition: opacity 0.3s ease, transform 0.3s ease;
            opacity: 0;
            pointer-events: none;
        }

        #scrollTopBtn.show {
            opacity: 1;
            pointer-events: auto;
        }

        #scrollTopBtn:hover {
            background-color: var(--primary-dark);
            transform: scale(1.05);
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .section-title {
                font-size: 2.2rem;
            }

            .project-hero h1 {
                font-size: 3rem;
            }

            .project-hero p {
                font-size: 1.3rem;
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
                background-color: var(--light);
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

            .project-hero {
                height: 60vh;
                margin-top: 70px;
            }

            .project-hero h1 {
                font-size: 2.5rem;
            }

            .project-hero p {
                font-size: 1.1rem;
            }

            .project-features {
                grid-template-columns: 1fr;
                gap: 30px;
            }
        }

        @media (max-width: 576px) {
            .section-title {
                font-size: 2rem;
            }

            .project-hero h1 {
                font-size: 2rem;
            }

            .project-hero p {
                font-size: 1rem;
            }

            #scrollTopBtn {
                bottom: 20px;
                right: 20px;
                padding: 10px 14px;
                font-size: 18px;
            }
        }

        .comparison-table {
            width: 100%;
            border-collapse: collapse;
            margin: 40px 0;
        }

        .comparison-table th,
        .comparison-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .comparison-table th {
            background-color: <?php echo $primary_color; ?>;
            color: white;
        }

        .before {
            background-color: #ffecec;
        }

        .after {
            background-color: #e8f5e9;
        }
    </style>
</head>

<body>
    <header>
        <div class="container header-container">
            <div class="logo">
                <a href="../index.php">
                    <img src="../image/logo/logo_Ydia.png" alt="Logo YDIA">
                    <!-- <span class="logo-text">YDIA</span> -->
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

    <section class="project-hero">
        <div class="container">
            <h1>École Primaire du Plateau</h1>
            <p>Transformation en bâtiment à énergie positive</p>
        </div>
    </section>

    <section class="container" style="padding:80px 20px;">
        <h2 class="section-title text-center">Rénovation durable</h2>

        <table class="comparison-table">
            <tr>
                <th>Critère</th>
                <th class="before">Avant</th>
                <th class="after">Après</th>
            </tr>
            <tr>
                <td>Consommation énergétique</td>
                <td class="before">150 kWh/m²/an</td>
                <td class="after">35 kWh/m²/an</td>
            </tr>
            <tr>
                <td>Qualité de l'air</td>
                <td class="before">Ventilation naturelle</td>
                <td class="after">VMC double flux</td>
            </tr>
            <tr>
                <td>Isolation</td>
                <td class="before">Simple vitrage</td>
                <td class="after">Isolation renforcée</td>
            </tr>
            <tr>
                <td>Production d'énergie</td>
                <td class="before">100% réseau</td>
                <td class="after">50% solaire</td>
            </tr>
        </table>

        <div style="margin:60px 0;">
            <h3 style="text-align:center; color:<?php echo $primary_color; ?>;">Témoignage</h3>
            <blockquote style="max-width:800px; margin:0 auto; font-style:italic; padding:20px; border-left:4px solid <?php echo $primary_color; ?>;">
                "Depuis la rénovation, les absences pour maladie ont diminué de 30% et les résultats scolaires se sont améliorés. Les enfants sont plus attentifs dans des salles bien isolées et bien ventilées."
                <p style="text-align:right; font-weight:bold;">— Directrice de l'école</p>
            </blockquote>
        </div>
    </section>

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
                    <ul class="footer-links">
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
                        <li><a href="../construction-durable.php">Construction durable</a></li>
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
                <p>&copy; <?php echo date('Y'); ?> <?php echo $company_name; ?>. Tous droits réservés. | <a href="#">Mentions légales</a> | <a href="#">Politique de confidentialité</a></p>
                <p>by KFernand</p>
            </div>
        </div>
    </footer>

    <button id="scrollTopBtn" title="Remonter en haut">
        <i class="fas fa-chevron-up"></i>
    </button>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
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
        });
    </script>
</body>

</html>