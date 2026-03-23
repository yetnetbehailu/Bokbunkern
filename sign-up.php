<?php
//Show errors for debugging
require_once 'assets/includes/display_errors.php';
//Include database connection
require_once 'assets/config/db.php';
// Register information to database
require_once 'assets/functions/insert.php';
//Include header and navigation
require_once 'assets/includes/header.php';
?>
<main class="container mt-5">
    <?php
    //Checks if a action is set
    if (isset($_GET['action'])) {
        //Checks which action is set
        switch ($_GET['action']) {
            case 'success':
                echo '
                 div class="alert alert-success">
                Användaren har registrerats!
              </div>
              ';
                break;
        }
    }
    ?>
    <form action="sign-up.php" method="POST">
        <div class="container mt-5">
            <div class="row mb-3">
                <label for="firstname" class="col-1 col-form-label">Förnamn</label>
                <div class="col-4">
                    <input type="text" class="form-control" id="firstname" name="firstname">
                </div>
            </div>

            <div class="row mb-3">
                <label for="lastname" class="col-1 col-form-label">Efternamn</label>
                <div class="col-4">
                    <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-1 col-form-label">E-post</label>
                <div class="col-4">
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="col-1 col-form-label">Lösenord</label>
                <div class="col-4">
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            </div>
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