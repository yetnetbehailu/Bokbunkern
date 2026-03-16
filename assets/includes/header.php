<?php
//Init session management
session_start();

// show all errors for debugging
require_once 'assets/includes/display_errors.php';

// connect to database
require_once 'assets/config/db.php';

// Process login to database
require_once 'assets/functions/sessions.login.php';
?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bokbunkern</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- Custom styles -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="<?php echo isset($pageClass) ? htmlspecialchars($pageClass, ENT_QUOTES, 'UTF-8') : ''; ?>">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid pe-0">

                <a class="navbar-brand d-flex align-items-center p-0" href="index.php">
                    <img class="logo-img me-3" src="assets/images/logo-bokbunkern.webp" alt="">
                    <span class="logo-text">Bokbunkern</span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">

                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-4">
                        <li class="nav-item">
                            <a class="nav-link active fs-5 fw-bolder" aria-current="page" href="index.php">Hem</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="#">Böcker</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="#">Forum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="#">Om oss</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="#">FAQ</a>
                        </li>
                        <li class="nav-item"><a href="view.php" class="nav-link">Visa användare</a></li>
                        <li class="nav-item"><a href="add.php" class="nav-link">Lägg till användare</a></li>
                    </ul>


                    <!-- Login and logout with functions and dropdown -->
                    <div class="d-flex align-items-center gap-4">
                        <?php if (isset($_SESSION['user_id'])): ?>
                            <span class="nav-link fs-5 p-2 mb-0">
                                <?php echo 'Hej ' . htmlspecialchars($_SESSION['firstname'], ENT_QUOTES, 'UTF-8'); ?>
                            </span>
                            <a class="btn btn-outline-danger fs-5" href="logout.php">Logga ut</a>
                        <?php else: ?>
                            <div class="dropdown">
                                <a class="nav-link fs-5 p-2 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Logga in
                                </a>

                                <div class="dropdown-menu start-50 translate-middle-x mt-2 p-4" style="width: 270px;">
                                    <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'] ?? 'index.php', ENT_QUOTES, 'UTF-8'); ?>" method="post">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">E-post</label>
                                            <input type="email" class="form-control" name="email" id="email">
                                        </div>

                                        <div class="mb-3">
                                            <label for="password" class="form-label">Lösenord</label>
                                            <input type="password" class="form-control" name="password" id="password">
                                        </div>

                                        <button type="submit" name="login" class="btn btn-success w-100">
                                            Logga in
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <a class="btn btn-membership fs-5" href="add.php">Bli medlem</a>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </nav>
    </header>