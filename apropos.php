<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations - KAKA ENERGIE</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            transition: transform 0.3s;
            height: 100%;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .testimonial-section {
            background-color: #343a40;
            color: white;
            padding: 50px 0;
        }
        .testimonial-card {
            background-color: rgba(255, 255, 255, 0.1);
            border: none;
            color: white;
        }
        footer {
            background: rgba(0, 0, 0, 0.9);
            padding: 15px;
            font-size: 0.9rem;
            text-align: center;
            color: rgba(255, 255, 255, 0.5);
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
            <li class="nav-item"><a class="nav-link" href="Contact.php">Contact</a></li>
            <li class="nav-item"><a class="btn btn-primary shadow ms-2" href="form.php">Connexion</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header Section -->
    <div class="bg-primary text-white text-center py-5 mb-5">
        <div class="container">
            <h1 class="display-4 fw-bold">À propos de KAKA ENERGIE</h1>
            <p class="lead">Découvrez notre vision, nos objectifs et notre mission pour un avenir énergétique durable.</p>
        </div>
    </div>

    <!-- Info Cards Section -->
    <div class="container mb-5">
        <div class="row g-4">
            <!-- But -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="fa fa-bullseye fa-3x text-primary"></i>
                        </div>
                        <h3 class="card-title fw-bold">Notre But</h3>
                        <p class="card-text text-muted">
                            Fournir une énergie fiable et accessible à toutes les communautés, en réduisant la dépendance aux énergies fossiles et en promouvant des solutions vertes.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Objectif -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="fa fa-chart-line fa-3x text-success"></i>
                        </div>
                        <h3 class="card-title fw-bold">Nos Objectifs</h3>
                        <p class="card-text text-muted">
                            Devenir le leader régional de l'énergie renouvelable d'ici 2030, en électrifiant plus de 50 000 foyers ruraux et en innovant constamment.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Mission -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="fa fa-rocket fa-3x text-danger"></i>
                        </div>
                        <h3 class="card-title fw-bold">Notre Mission</h3>
                        <p class="card-text text-muted">
                            Accompagner le développement économique local par des infrastructures énergétiques durables, tout en respectant l'environnement et les populations.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="testimonial-section">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Ce que disent nos clients</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card testimonial-card p-4 text-center">
                                    <div class="card-body">
                                        <p class="fs-5 fst-italic">"Grâce à KAKA ENERGIE, notre village a enfin accès à une électricité stable. Cela a changé nos vies !"</p>
                                        <h5 class="mt-3 fw-bold">- Jean Dupont, Chef de village</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card testimonial-card p-4 text-center">
                                    <div class="card-body">
                                        <p class="fs-5 fst-italic">"Un service client impeccable et une installation rapide. Je recommande vivement leurs services."</p>
                                        <h5 class="mt-3 fw-bold">- Marie Curie, Commerçante</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card testimonial-card p-4 text-center">
                                    <div class="card-body">
                                        <p class="fs-5 fst-italic">"L'énergie verte est l'avenir, et KAKA ENERGIE nous y conduit avec professionnalisme."</p>
                                        <h5 class="mt-3 fw-bold">- Albert Einstein, Agriculteur</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Précédent</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Suivant</span>
                        </button>
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