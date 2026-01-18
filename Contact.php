<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - KAKA ENERGIE</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .content-wrapper {
            flex: 1;
        }
        footer {
            background: rgba(0, 0, 0, 0.9);
            padding: 15px;
            font-size: 0.9rem;
            text-align: center;
            color: rgba(255, 255, 255, 0.5);
            margin-top: auto;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow sticky-top">
      <div class="container">
        <a class="navbar-brand fw-bold" href="index.php"><i class="fa fa-bolt text-warning"></i> KAKA ENERGIE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="index.php"><i class="fa fa-home"></i> Accueil</a></li>
            <li class="nav-item"><a class="nav-link" href="apropos.php">À propos</a></li>
            <li class="nav-item"><a class="nav-link active" href="Contact.php">Contact</a></li>
            <li class="nav-item"><a class="btn btn-primary shadow ms-2" href="form.php">Connexion</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="content-wrapper">
        <!-- Header Section -->
        <div class="bg-primary text-white text-center py-5 mb-5">
            <div class="container">
                <h1 class="display-4 fw-bold">Contactez-nous</h1>
                <p class="lead">Bienvenue sur notre espace de contact. Merci de votre confiance envers KAKA ENERGIE.</p>
                <p>Nos agents sont à votre disposition pour répondre à toutes vos demandes.</p>
            </div>
        </div>

        <!-- Contact Form Section -->
        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-4">
                            <h3 class="card-title text-center mb-4"><i class="fa fa-paper-plane text-primary"></i> Formulaire de contact</h3>
                            <form action="" method="POST">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="nom" class="form-label">Nom complet</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control" id="nom" name="nom" required placeholder="Votre nom">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Adresse Email</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                            <input type="email" class="form-control" id="email" name="email" required placeholder="name@example.com">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="sujet" class="form-label">Sujet</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa fa-tag"></i></span>
                                            <input type="text" class="form-control" id="sujet" name="sujet" required placeholder="Objet de votre message">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control" id="message" name="message" rows="5" required placeholder="Votre message..."></textarea>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary px-5 py-2 fw-bold shadow"><i class="fa fa-paper-plane"></i> Envoyer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
      <p>&copy; 2025 KAKA ENERGIE - Tous droits réservés</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
