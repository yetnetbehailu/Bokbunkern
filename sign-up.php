<?php
// Show errors (for development/debugging)
require_once 'assets/includes/display_errors.php';

// Include database connection
require_once 'assets/config/db.php';

// Handle user registration (insert into database)
require_once 'assets/functions/insert.php';

// Include header and navigation
require_once 'assets/includes/header.php';
?>

<main class="container py-5">

    <?php
    // Check if an action parameter exists in the URL
    if (isset($_GET['action'])) {

        // Display message based on action value
        switch ($_GET['action']) {
            case 'success':
                echo '
                <div class="alert alert-success">
                    Användaren har registrerats!
                </div>
                ';
                break;
        }
    }
    ?>

    <!-- Registration form -->
    <form action="sign-up.php" method="POST">

        <div class="container mt-5">

            <!-- First name -->
            <div class="row mb-3">
                <label for="firstname" class="col-1 col-form-label">Förnamn</label>
                <div class="col-4">
                    <input type="text" class="form-control" id="firstname" name="firstname">
                </div>
            </div>

            <!-- Last name -->
            <div class="row mb-3">
                <label for="lastname" class="col-1 col-form-label">Efternamn</label>
                <div class="col-4">
                    <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
            </div>

            <!-- Email -->
            <div class="row mb-3">
                <label for="signup-email" class="col-1 col-form-label">E-post</label>
                <div class="col-4">
                    <input type="email" class="form-control" id="signup-email" name="email">
                </div>
            </div>

            <!-- Password -->
            <div class="row mb-3">
                <label for="signup-password" class="col-1 col-form-label">Lösenord</label>
                <div class="col-4">
                    <input type="password" class="form-control" id="signup-password" name="password">
                </div>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary" name="register">
                <i class="fas fa-circle-plus"></i> Registrera
            </button>

        </div>
    </form>

</main>

<?php
// Include footer
require_once 'assets/includes/footer.php';
?>