<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitel ?? 'Egypt Tours' ?> | Egypt Tours</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include("inc/data.php") ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom border-warning border-3">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">DiscoverEgypt </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'home')
                            echo 'active fw-bold'; ?>"
                            href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'details')
                            echo 'active fw-bold'; ?>"
                            href="details.php">Cities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contant</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="py-5 bg-dark text-white">
        <div class="container text-center">
            <h1 class="display-4 fw-bold text-uppercase text-warning"> Discover Egypt</h1>
        </div>
    </header>