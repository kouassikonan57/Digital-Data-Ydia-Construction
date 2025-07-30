<?php
// Configuration de base
$page_title = "YDIA CONSTRUCTION - Demande de devis Location d'Engins BTP";
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
  <link href="image/favicon.png" rel="icon" />
  <link href="image/apple-touch-icon.png" rel="apple-touch-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
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
      margin-right: 10px;
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
    }

    /* Form Styles */
    .devis-form {
      margin: 150px auto 50px auto;
      max-width: 1000px;
      background-color: var(--light);
      border: 1px solid var(--medium-gray);
      border-radius: 8px;
      padding: 30px;
      box-shadow: var(--shadow);
    }

    .form-columns {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-bottom: 20px;
    }

    .form-columns fieldset {
      flex: 1;
      min-width: 300px;
    }

    fieldset {
      border: 1px solid var(--medium-gray);
      border-radius: 5px;
      padding: 20px;
      background-color: var(--light-gray);
    }

    legend {
      font-weight: bold;
      color: var(--primary);
      padding: 0 10px;
    }

    label {
      display: block;
      margin: 10px 0 5px;
      font-weight: 600;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="number"],
    input[type="date"],
    select,
    textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid var(--medium-gray);
      border-radius: 4px;
      box-sizing: border-box;
      background-color: var(--light);
      transition: border-color 0.3s ease;
    }

    input:focus,
    select:focus,
    textarea:focus {
      outline: none;
      border-color: var(--primary);
    }

    textarea {
      resize: vertical;
      min-height: 100px;
    }

    .dev[type="submit"] {
      background-color: var(--primary);
      color: var(--light);
      border: none;
      padding: 12px 30px;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      display: block;
      margin: 20px auto 0;
    }

    .dev[type="submit"]:hover {
      background-color: var(--primary-dark);
    }

    @media (max-width: 768px) {
      .devis-form {
        margin-top: 120px;
        padding: 20px;
      }

      .devis-form .section-title {
        font-size: 1.8rem;
        white-space: normal;
        word-wrap: break-word;
        padding: 0 10px;
        width: 100%;
      }

      .form-columns fieldset {
        min-width: 100%;
      }
    }

    @media (max-width: 576px) {
      .devis-form .section-title {
        font-size: 1.5rem;
        line-height: 1.3;
      }

      .devis-form {
        margin-left: 15px;
        margin-right: 15px;
        width: calc(100% - 30px);
      }
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

    .btn {
      display: inline-block;
      padding: 12px 25px;
      background-color: #FF6B00;
      color: #FFFFFF;
      border-radius: 4px;
      font-weight: 600;
      transition: all 0.3s ease;
      border: none;
      cursor: pointer;
      margin-top: 12px;
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

      .section-title {
        font-size: 2rem;
      }

    }

    @media (max-width: 576px) {
      .section-title {
        font-size: 1.8rem;
      }

      #scrollTopBtn {
        bottom: 20px;
        right: 20px;
        padding: 10px 14px;
        font-size: 18px;
      }
    }


    .loading-spinner {
      display: inline-block;
      width: 1em;
      height: 1em;
      border: 2px solid rgba(0, 0, 0, 0.3);
      border-radius: 50%;
      border-top-color: #000;
      animation: spin 1s ease-in-out infinite;
      margin-right: 8px;
      vertical-align: middle;
    }

    @keyframes spin {
      to {
        transform: rotate(360deg);
      }
    }

    /* Style existant amélioré */
    .message-container {
      margin: 20px auto;
      padding: 15px;
      border-radius: 5px;
      text-align: center;
      font-weight: bold;
      max-width: 80%;
    }

    .message-success {
      background-color: #d4edda;
      color: #155724;
      border: 1px solid #c3e6cb;
    }

    .message-error {
      background-color: #f8d7da;
      color: #721c24;
      border: 1px solid #f5c6cb;
    }
  </style>
</head>

<body>
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

  <div>
    <form id="devisForm" class="devis-form" action="traitement_devis.php" method="POST">
      <h2 class="section-title text-center form-title">Demande de Devis – Location d'Engins BTP</h2>

      <div class="form-columns">
        <fieldset>
          <legend>Informations client</legend>

          <label for="nom_client">Nom / Prénoms :</label>
          <input type="text" id="nom_client" name="nom_client" required autocomplete="off">

          <label for="entreprise_ou_particulier_client">Entreprise ou Particulier :</label>
          <input type="text" id="entreprise_ou_particulier_client" name="entreprise_ou_particulier_client" required autocomplete="off">

          <label for="email">Email :</label>
          <input type="email" id="email" name="email" required autocomplete="off">

          <label for="telephone">Téléphone :</label>
          <input type="tel" id="telephone" name="telephone" required autocomplete="off">

          <label for="adresse">Adresse :</label>
          <textarea id="adresse" name="adresse" rows="2" autocomplete="off" required></textarea>
        </fieldset>

        <fieldset>
          <legend>Détails de la location</legend>

          <label for="engin">Type d'engin :</label>
          <select id="engin" name="engin" required>
            <option value="">-- Sélectionnez un engin --</option>
            <option value="tractopelle">Tractopelle</option>
            <option value="pelle">Pelle Hydraulique</option>
            <option value="chargeuse">Chargeuse</option>
            <option value="bulldozer">Bulldozer</option>
            <option value="niveleuse">Niveleuse</option>
            <option value="compacteur">Compacteur</option>
            <option value="camion_benne">Camion benne</option>
            <option value="compacteur_a_mains">Compacteur à mains</option>
          </select>

          <label for="quantite">Quantité :</label>
          <input type="number" id="quantite" name="quantite" min="1" required>

          <label for="duree">Durée de location (en jours) :</label>
          <input type="number" id="duree" name="duree" min="1" required>

          <label for="date_debut">Date de début :</label>
          <input type="date" id="date_debut" name="date_debut" required>

          <label for="chauffeur">Chauffeur inclus :</label>
          <select id="chauffeur" name="chauffeur">
            <option value="oui">Oui</option>
            <option value="non">Non</option>
          </select>
        </fieldset>
      </div>

      <fieldset>
        <legend>Remarques supplémentaires</legend>
        <textarea name="remarques" rows="4" placeholder="Indiquez ici toute précision utile..."></textarea>
      </fieldset>

      <button type="submit" class="dev">Envoyer la demande de devis</button>
    </form>
    <div id="formMessage" style="display:none;"></div>
  </div>


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
          <ul class="footer-links">
            <li><a href="index.php#home">Accueil</a></li>
            <li><a href="index.php#about">Qui sommes-nous</a></li>
            <li><a href="index.php#services">Domaines d'expertise</a></li>
            <li><a href="index.php#projects">Nos projets</a></li>
            <li><a href="index.php#careers">Carrières</a></li>
            <li><a href="index.php#contact">Contact</a></li>
            <li><a href="www.yadi.ci">Yadi Group</a></li>
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
          <form class="newsletter-form">
            <input type="email" placeholder="Votre email" required>
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

    // Validation du formulaire
    document.querySelector('form').addEventListener('submit', function(e) {
      const dateDebut = document.getElementById('date_debut');
      const today = new Date();
      today.setHours(0, 0, 0, 0);

      if (new Date(dateDebut.value) < today) {
        e.preventDefault();
        alert('La date de début ne peut pas être dans le passé');
        dateDebut.focus();
      }
    });
  </script>

  <script>
    document.getElementById('devisForm').addEventListener('submit', function(e) {
      e.preventDefault();

      const form = e.target;
      const formData = new FormData(form);
      const messageContainer = document.getElementById('formMessage');
      const submitButton = form.querySelector('button[type="submit"]');

      // Afficher l'état de chargement
      submitButton.disabled = true;
      submitButton.innerHTML = '<span class="loading-spinner"></span> Envoi en cours...';
      messageContainer.style.display = 'none';

      fetch('traitement_devis.php', {
          method: 'POST',
          body: formData
        })
        .then(response => {
          if (!response.ok) throw new Error('Erreur réseau');
          return response.json();
        })
        .then(data => {
          // Afficher le message approprié
          messageContainer.style.display = 'block';
          messageContainer.className = `message-container message-${data.status}`;
          messageContainer.innerHTML = data.message;

          // Réinitialiser le formulaire si succès
          if (data.status === 'success') {
            form.reset();
          }
        })
        .catch(error => {
          messageContainer.style.display = 'block';
          messageContainer.className = 'message-container message-error';
          messageContainer.innerHTML = '❌ Une erreur est survenue lors de l\'envoi du formulaire';
        })
        .finally(() => {
          submitButton.disabled = false;
          submitButton.textContent = 'Envoyer la demande de devis';
        });
    });
  </script>
</body>

</html>