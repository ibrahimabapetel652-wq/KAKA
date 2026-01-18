<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KAKA ENERGIE - Accueil</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

  <style>
    body {
      margin: 0;
      padding: 0;
      background: url("file_00000000bab0620abf5d6f2898d8d661.png") no-repeat center center fixed;
      background-size: cover;
      color: #fff;
    }
    .overlay {
      background: rgba(0, 0, 0, 0.6);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    .hero {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 20px;
    }
    .hero-title {
      font-size: 3rem;
      font-weight: bold;
    }
    .hero-subtitle {
      font-size: 1.5rem;
      margin-bottom: 20px;
    }
    .btn-cta {
      font-size: 1.2rem;
      padding: 12px 30px;
      border-radius: 50px;
    }
    footer {
      background: rgba(0, 0, 0, 0.7);
      padding: 15px;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
  <div class="overlay">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
      <div class="container">
        <a class="navbar-brand fw-bold" href="form.php"><i class="fa fa-bolt text-warning"></i> KAKA ENERGIE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link active" href="#"><i class="fa fa-home"></i> Accueil</a></li>
            <li class="nav-item"><a class="nav-link" href="apropos.php">À propos</a></li>
            <li class="nav-item"><a class="nav-link" href="Contact">Contact</a></li>
            <li class="nav-item"><a class="btn btn-primary shadow ms-2" href="form.php">Connexion</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Section Hero -->
    <section class="hero">
      <h1 class="hero-title">Bienvenue chez <span class="text-warning">KAKA ENERGIE</span></h1>
      <p class="hero-subtitle">Entreprise agréée et implantée à Colomine, Est-Cameroun</p>
      <p class="hero-subtitle"> Que souhaitez-vous faire ?</p>
      <a href="form.php" class="btn btn-primary btn-cta shadow"><i class="fa fa-play"></i> Se connecter</a>
      <br>
      <a href="api.php" class="btn btn-primary btn-cta shadow" style="position: absolute; margin-top: 25% "><i class="fa fa-dollar"></i> Effectuer un paiement </a>
    </section>

    <!-- Carousel (infos) -->
    <div id="infosCarousel" class="carousel slide text-white shadow py-4" data-bs-ride="carousel">
      <div class="carousel-inner text-center">
        <div class="carousel-item active">
          <p class="fw-bold" style>⚡ Site officiel de l'entreprise KAKA ENERGIE ⚡</p>
        </div>
        <div class="carousel-item">
          <p class="fw-bold">🌍 Fournisseur d'énergie durable au Cameroun 🌍</p>
        </div>
        <div class="carousel-item">
          <p class="fw-bold">📞 Contactez-nous dès aujourd'hui 📞</p>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="text-center text-white-50 mt-auto">
      <p>&copy; 2025 KAKA ENERGIE - Tous droits réservés</p>
    </footer>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
