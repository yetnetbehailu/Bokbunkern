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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
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

                    <div class="d-flex align-items-center gap-4">
                        <a class="nav-link fs-5 p-2" href="#">Logga in</a>
                        <a class="btn btn-membership fs-5" href="#">Bli medlem</a>
                    </div>

                </div>
            </div>
        </nav>
    </header>