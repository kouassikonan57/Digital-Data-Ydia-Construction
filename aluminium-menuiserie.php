<?php
// Configuration de base (identique à la page principale)
$page_title = "YDIA CONSTRUCTION - Aluminium & Menuiserie";
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
    .hero-aluminium {
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

    .hero-content-aluminium {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: white;
      width: 100%;
      padding: 0 20px;
    }

    .hero-content-aluminium h1 {
      font-size: 3.5rem;
      margin-bottom: 20px;
      line-height: 1.2;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .hero-content-aluminium p {
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

    /* Section Produits */
    .produits {
      padding: 100px 0;
      background-color: <?php echo $light_color; ?>;
    }

    .produits-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
      margin-top: 50px;
    }

    .produit-card {
      background: <?php echo $secondary_color; ?>;
      border-radius: 8px;
      padding: 30px;
      box-shadow: var(--shadow);
      transition: var(--transition);
      position: relative;
      overflow: hidden;
      border-top: 4px solid var(--primary);
    }

    .produit-card:hover {
      transform: translateY(-10px);
      box-shadow: var(--shadow-hover);
    }

    .produit-card p {
      text-align: justify;
    }

    .produit-icon {
      position: absolute;
      top: 20px;
      right: 20px;
      font-size: 2.5rem;
      color: rgba(255, 107, 0, 0.1);
    }

    .produit-card h3 {
      font-size: 1.5rem;
      margin-bottom: 15px;
      color: var(--primary);
    }

    /* Section Avantages */
    .avantages {
      padding: 100px 0;
      background-color: <?php echo $secondary_color; ?>;
    }

    .avantages-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      margin-top: 50px;
    }

    .avantage-card {
      background: <?php echo $light_color; ?>;
      border-radius: 8px;
      padding: 30px;
      text-align: center;
      box-shadow: var(--shadow);
      transition: var(--transition);
    }

    .avantage-card:hover {
      transform: translateY(-5px);
      box-shadow: var(--shadow-hover);
    }

    .avantage-card p {
      text-align: justify;
    }

    .avantage-icon {
      font-size: 3rem;
      color: var(--primary);
      margin-bottom: 20px;
    }

    .avantage-card h3 {
      margin-bottom: 15px;
    }

    /* Section Projets */
    .projets-aluminium {
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
      .hero-content-aluminium h1 {
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

      .hero-content-aluminium h1 {
        font-size: 2.5rem;
      }

      .hero-aluminium {
        height: 60vh;
      }
    }

    @media (max-width: 576px) {
      .section-title {
        font-size: 2rem;
      }

      .hero-content-aluminium h1 {
        font-size: 2rem;
      }

      .hero-content-aluminium p {
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

    .empty-content {
      background-color: #e85d00;
      color: #ffff;
      padding: 30px 50px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      font-size: 24px;
      font-weight: bold;
      text-align: center;
      animation: pulse 2s infinite;
    }

    @keyframes pulse {
      0% {
        transform: scale(1);
      }

      50% {
        transform: scale(1.05);
      }

      100% {
        transform: scale(1);
      }
    }

    .realisation-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      padding: 0 15px;
      box-sizing: border-box;
      width: 100%;
      max-width: 1200px;
      margin: 30px auto;
    }

    .realisation-item {
      text-align: center;
      aspect-ratio: 4 / 3;
      overflow: hidden;
    }

    .realisation-item img {
      width: 100%;
      height: 100%;
      display: block;
      border-radius: 10px;
      object-fit: cover;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .realisation-item img:hover {
      transform: scale(1.05);
    }

    .realisation-item p {
      margin-top: 10px;
      font-weight: bold;
      font-size: 16px;
      color: #333;
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
  <section class="hero-aluminium">
    <div class="slideshow-container">
      <!-- Slide 1 -->
      <div class="mySlides fade">
        <div class="slide-image" style="background-image: url('image/heroM.jpg');"></div>
        <div class="hero-content-aluminium">
          <h1>Aluminium & Menuiserie</h1>
          <p>Des solutions sur mesure pour vos portes, fenêtres et baies vitrées</p>
          <a href="#produits" class="btn">Nos produits</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="mySlides fade">
        <div class="slide-image" style="background-image: url('image/hero2M.jpg');"></div>
        <div class="hero-content-aluminium">
          <h1>Qualité & Durabilité</h1>
          <p>Des matériaux haut de gamme pour une performance optimale</p>
          <a href="#avantages" class="btn">Nos avantages</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="mySlides fade">
        <div class="slide-image" style="background-image: url('image/hero3M.jpg');"></div>
        <div class="hero-content-aluminium">
          <h1>Design Personnalisé</h1>
          <p>Des créations uniques adaptées à vos besoins et à votre style</p>
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

  <!-- Section Produits -->
  <section class="produits" id="produits">
    <div class="container">
      <h2 class="section-title text-center">Nos Produits en Aluminium</h2>
      <p class="text-center" style="max-width: 700px; margin: 0 auto 40px;">Découvrez notre gamme complète de produits en aluminium alliant esthétique, performance et durabilité.</p>

      <div class="produits-grid">
        <div class="produit-card">
          <div class="produit-icon">
            <i class="fas fa-door-open"></i>
          </div>
          <h3>Portes en Aluminium</h3>
          <p>Portes d'entrée et intérieures en aluminium avec une variété de finitions, couleurs et designs. Sécurité renforcée, isolation thermique et acoustique optimale.</p>
        </div>

        <div class="produit-card">
          <div class="produit-icon">
            <i class="fas fa-window-maximize"></i>
          </div>
          <h3>Fenêtres sur Mesure</h3>
          <p>Fenêtres en aluminium coulissantes, oscillo-battantes ou fixes, avec vitrage simple, double ou triple selon vos besoins d'isolation.</p>
        </div>

        <div class="produit-card">
          <div class="produit-icon">
            <i class="fas fa-store-alt"></i>
          </div>
          <h3>Baies Vitrées</h3>
          <p>Baies coulissantes ou fixes pour ouvrir vos espaces sur l'extérieur. Grandes dimensions possibles grâce à la résistance de l'aluminium.</p>
        </div>

        <div class="produit-card">
          <div class="produit-icon">
            <i class="fas fa-vector-square"></i>
          </div>
          <h3>Vérandas & Pergolas</h3>
          <p>Structures en aluminium pour créer des espaces extérieurs couverts, avec possibilité de vitrage, stores intégrés et systèmes d'ouverture motorisés.</p>
        </div>

        <div class="produit-card">
          <div class="produit-icon">
            <i class="fas fa-border-style"></i>
          </div>
          <h3>Cloisons & Brise-soleil</h3>
          <p>Solutions architecturales en aluminium pour diviser les espaces ou protéger des rayons du soleil tout en laissant passer la lumière.</p>
        </div>

        <div class="produit-card">
          <div class="produit-icon">
            <i class="fas fa-grip-lines"></i>
          </div>
          <h3>Menuiserie Extérieure</h3>
          <p>Portails, clôtures et garde-corps en aluminium résistant aux intempéries avec finitions anti-corrosion pour une durabilité maximale.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section Avantages -->
  <section class="avantages" id="avantages">
    <div class="container">
      <h2 class="section-title text-center">Nos Avantages Concurrentiels</h2>
      <p class="text-center" style="max-width: 700px; margin: 0 auto 40px;">Pourquoi choisir nos solutions en aluminium et menuiserie ?</p>

      <div class="avantages-grid">
        <div class="avantage-card">
          <div class="avantage-icon">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3>Durabilité Exceptionnelle</h3>
          <p>L'aluminium résiste à la corrosion, aux UV et aux intempéries, garantissant une longévité incomparable sans entretien particulier.</p>
        </div>

        <div class="avantage-card">
          <div class="avantage-icon">
            <i class="fas fa-leaf"></i>
          </div>
          <h3>Écologique & Recyclable</h3>
          <p>Matériau 100% recyclable, notre aluminium est produit selon des procédés respectueux de l'environnement avec une faible empreinte carbone.</p>
        </div>

        <div class="avantage-card">
          <div class="avantage-icon">
            <i class="fas fa-paint-roller"></i>
          </div>
          <h3>Design Personnalisable</h3>
          <p>Large choix de couleurs, finitions (mat, satiné, brillant) et styles pour s'adapter parfaitement à votre projet architectural.</p>
        </div>

        <div class="avantage-card">
          <div class="avantage-icon">
            <i class="fas fa-bolt"></i>
          </div>
          <h3>Performance Énergétique</h3>
          <p>Nos profilés à rupture de pont thermique et nos vitrages performants optimisent l'isolation thermique et acoustique de votre habitat.</p>
        </div>

        <div class="avantage-card">
          <div class="avantage-icon">
            <i class="fas fa-ruler-combined"></i>
          </div>
          <h3>Précision d'Exécution</h3>
          <p>Fabrication sur mesure avec des machines à commande numérique pour une parfaite adaptation à vos dimensions et contraintes architecturales.</p>
        </div>

        <div class="avantage-card">
          <div class="avantage-icon">
            <i class="fas fa-medal"></i>
          </div>
          <h3>Garantie Étendue</h3>
          <p>Nos produits bénéficient d'une garantie décennale sur la structure et de garanties étendues sur les finitions et mécanismes.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section Projets -->
  <section class="projets-aluminium" id="projets">
    <div class="container">
      <h2 class="section-title text-center">Nos Réalisations</h2>
      <p class="text-center" style="max-width: 700px; margin: 0 auto 40px;">Découvrez quelques-uns de nos projets récents en aluminium et menuiserie.</p>

      <div class="realisation-grid">
        <div class="realisation-item">
          <img src="image/realis (1).jpeg" alt="Réalisation 1">
          <p>Nom du projet 1</p>
        </div>
        <div class="realisation-item">
          <img src="image/realis (2).jpeg" alt="Réalisation 2">
          <p>Nom du projet 2</p>
        </div>
        <div class="realisation-item">
          <img src="image/realis (3).jpeg" alt="Réalisation 3">
          <p>Nom du projet 3</p>
        </div>
        <!-- Ajoute d'autres projets ici -->
      </div>

      <!-- <div class="empty-content">
        Disponible bientôt
      </div> -->

      <!-- <div class="projet-item">
                <div class="projet-media">
                    <img src="image/menuiserie-projet1.jpg" alt="Résidence Les Almadies">
                </div>
                <div class="projet-content">
                    <h3>Résidence Les Almadies</h3>
                    <p>Fourniture et pose de baies vitrées coulissantes avec vitrage sécurit et stores intégrés pour cette résidence haut de gamme à Abidjan.</p>
                    <div class="projet-stats">
                        <div class="stat">120 m²</div>
                        <div class="stat">12 semaines</div>
                        <div class="stat">Livré à temps</div>
                    </div>
                    <p><strong>Particularités :</strong> Profilés extra-plats de 50mm, finition anthracite, motorisation des ouvrants avec commande domotique.</p>
                    <a href="etudes de cas/etude-cas-almadies.php" class="btn btn-outline">Voir l'étude de cas</a>
                </div>
            </div>

            <div class="projet-item">
                <div class="projet-media">
                    <img src="image/menuiserie-projet2.jpg" alt="Siège Social NSIA">
                </div>
                <div class="projet-content">
                    <h3>Siège Social NSIA</h3>
                    <p>Réalisation de façades rideaux et brise-soleil en aluminium pour le nouveau siège social de la NSIA à Abidjan Plateau.</p>
                    <div class="projet-stats">
                        <div class="stat">850 m²</div>
                        <div class="stat">6 mois</div>
                        <div class="stat">Budget respecté</div>
                    </div>
                    <p><strong>Innovations :</strong> Système de ventilation naturelle intégré, traitement anti-reflet pour le vitrage, profilés structurels de grande portée.</p>
                    <a href="etudes de cas/etude-cas-nsia.php" class="btn btn-outline">Voir l'étude de cas</a>
                </div>
            </div>

            <div class="projet-item">
                <div class="projet-media">
                    <img src="image/menuiserie-projet3.jpg" alt="Villa Anono">
                </div>
                <div class="projet-content">
                    <h3>Villa Anono</h3>
                    <p>Menuiserie aluminium complète (portes, fenêtres, véranda) pour cette villa contemporaine avec des ouvertures panoramiques.</p>
                    <div class="projet-stats">
                        <div class="stat">35 ouvertures</div>
                        <div class="stat">8 semaines</div>
                        <div class="stat">Sur mesure</div>
                    </div>
                    <p><strong>Design :</strong> Profilés couleur bronze, poignées invisibles, système d'ouverture dissimulé pour un design épuré et moderne.</p>
                    <a href="etudes de cas/etude-cas-villa-anono.php" class="btn btn-outline">Voir l'étude de cas</a>
                </div>
            </div> -->
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
            <li><a href="location-engins.php">Location d'engins BTP</a></li>
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
          <div id="formMessage" style="display:none; margin-top: 10px;"></div>
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