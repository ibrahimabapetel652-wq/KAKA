<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paiement en ligne - KAKA ENERGIE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url("../images/file_00000000bab0620abf5d6f2898d8d661.png") no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }
        .overlay {
            background: rgba(0, 0, 0, 0.6);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .content-wrapper {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 20px 0;
        }
        footer {
            background: rgba(0, 0, 0, 0.7);
            padding: 15px;
            font-size: 0.9rem;
            text-align: center;
            color: rgba(255, 255, 255, 0.5);
        }
        .card {
            color: #212529;
        }
    </style>
</head>
<body>
    <div class="overlay">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
            <div class="container">
                <a class="navbar-brand fw-bold" href="index.php"><i class="fa fa-bolt text-warning"></i> KAKA ENERGIE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php"><i class="fa fa-home"></i> Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="apropos.php">À propos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                        <li class="nav-item"><a class="btn btn-primary shadow ms-2" href="form.php">Connexion</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content-wrapper">
            <div class="container">
        <h2 class="text-center mb-4">Bienvenue sur le site de paiement en ligne</h2>
        <p class="text-center">
            Vous êtes sur la plateforme de paiement en ligne de l'entreprise <b>KAKA ENERGIE</b>
        </p>

        <div class="card shadow-lg p-4 mx-auto" style="max-width: 500px;">
            <h4 class="mb-3 text-center">Effectuer un dépôt</h4>
            
            <form action="api.php" method="POST">
                <div class="mb-3">
                    <label for="customer_name" class="form-label">Nom complet</label>
                    <input type="text" class="form-control" id="customer_name" name="customer_name" required>
                </div>

                <div class="mb-3">
                    <label for="customer_email" class="form-label">Adresse email</label>
                    <input type="email" class="form-control" id="customer_email" name="customer_email" required>
                </div>

                <div class="mb-3">
                    <label for="customer_phone" class="form-label">Numéro de téléphone</label>
                    <input type="tel" class="form-control" id="customer_phone" name="customer_phone" required>
                </div>

                <div class="mb-3">
                    <label for="amount" class="form-label">Montant (FCFA)</label>
                    <input type="number" class="form-control" id="amount" name="amount" min="100" required>
                </div>

                <button type="submit" class="btn btn-warning w-100">
                    <i class="fa fa-mobile fa-lg"></i> Payer maintenant
                </button>
            </form>
        </div>
    </div>
        </div>

        <!-- Footer -->
        <footer>
            <p>&copy; 2025 KAKA ENERGIE - Tous droits réservés</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
