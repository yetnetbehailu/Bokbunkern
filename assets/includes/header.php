<?php
session_start();

// show all errors for debugging
require_once 'assets/includes/display_errors.php';
// connect to database
require_once 'assets/config/db.php';
// Process login to database
require_once 'assets/functions/sessions.login.php';
//include ability to delete comments
require_once 'assets/functions/delete.comment.function.php';
//get specific comment to edit
require_once 'assets/functions/select.comment.id.php';
//register information to database
require_once 'assets/functions/comment.to.database.php';
//include ability to showcase comments
require_once 'assets/functions/view.comments.php';
//include ability to uppdate comments
require_once 'assets/functions/comment.update.php';

$current = basename($_SERVER['PHP_SELF']);

$navLinks = [
    'index.php' => 'Hem',
    'books.php' => 'Böcker',
    'forum.php' => 'Forum',
    'about.php' => 'Om oss',
    'faq.php' => 'FAQ'
];
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
        <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
            <div class="container-fluid pe-0">

                <a class="navbar-brand d-flex align-items-center p-0" href="index.php">
                    <img class="logo-img me-3" src="assets/images/logo-bokbunkern.webp" alt="Bokbunkerns logotyp, bokhög med två lysande ögon">
                    <span class="logo-text">Bokbunkern</span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-4">
                        <?php foreach ($navLinks as $file => $label) {
                            if ($current === $file) {
                                echo '<li class="nav-item">
                                        <a class="nav-link active fs-5 fw-bolder" href="' . $file . '">' . $label . '</a></li>';
                            } else {
                                echo '<li class="nav-item">
                            <a class="nav-link fs-5" href="' . $file . '">' . $label . '</a></li>';
                            }
                        }
                        ?>
                    </ul>

                    <?php
                    // Remove query parameters from current URL (used for login form)
                    $cleanPath = strtok($_SERVER['REQUEST_URI'] ?? 'index.php', '?');
                    ?>

                    <!-- ============================== -->
                    <!-- Login and logout with dropdown -->
                    <!-- ============================== -->
                    <div class="d-flex align-items-center gap-4">

                        <?php if (isset($_SESSION['user_id'])): ?>
                            <?php
                            // If user is logged in (session exists)
                            ?>

                            <span class="nav-link fs-5 p-2 mb-0">
                                <?php
                                // Display user's first name safely
                                echo 'Välkommen ' . htmlspecialchars($_SESSION['firstname'], ENT_QUOTES, 'UTF-8');
                                ?>
                            </span>

                            <!-- Logout button -->
                            <a class="btn btn-membership fs-5" href="logout.php">Logga ut</a>

                        <?php else: ?>
                            <?php
                            // If user is not logged in → show login dropdown
                            ?>

                            <div class="dropdown">
                                <!-- Dropdown toggle button -->
                                <a class="nav-link fs-5 p-2 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                    Logga in
                                </a>

                                <!-- Dropdown menu with login form -->
                                <div class="dropdown-menu start-50 translate-middle-x mt-2 p-4" style="width: 270px;">

                                    <!-- Login form (uses clean URL without query parameters) -->
                                    <form action="<?= htmlspecialchars($cleanPath) ?>" method="post">

                                        <!-- Email input -->
                                        <div class="mb-3">
                                            <label for="email" class="form-label">E-post</label>
                                            <input type="email" class="form-control" name="email" id="email">
                                        </div>

                                        <!-- Password input -->
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Lösenord</label>
                                            <input type="password" class="form-control" name="password" id="password">
                                        </div>

                                        <!-- Submit button -->
                                        <button type="submit" name="login" class="btn btn-success w-100">
                                            Logga in
                                        </button>

                                    </form>
                                </div>
                            </div>

                            <!-- Registration link -->
                            <a class="btn btn-membership fs-5" href="sign-up.php">Bli medlem</a>

                        <?php endif; ?>

                    </div>

                </div>
            </div>
        </nav>
    </header>