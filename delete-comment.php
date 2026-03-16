<?php
//include database connection
require_once 'assets/config/db.php';
//register information to database
require_once 'assets/functions/comment-to-database.php';
//get specific comment to edit
require_once 'assets/functions/select-comment-id.php';
//include sessions 
require_once 'assets/functions/sessions.login.php';
//include delete comment function
require_once 'assets/functions/delete-comment-function.php';
//include ability to showcase comments
require_once 'assets/functions/view-comments.php';
?>
<?php
//unclude header
require_once 'assets/includes/header.php';
?>

<main>

    <!-- Start of detail page -->
    <!-- back button -->
    <div class="m-3">
        <a href="detail.php" class="btnc disabled"><i class="fa-solid fa-arrow-left"></i> Tillbaka</a>
    </div>




    <!-- delete comment -->
    <?php if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])): ?>
        <form action="detail.php" method="post">
            <div class="bg-cust2 p-3 rounded container">
                <div class="row p-3 border m-2 bg-white border rounded">
                    <p class="text-center">Är du säker på att du vill radera denna kommentaren?</p>

                    <input type="hidden" name="comment_id" value="<?php echo $row['comment_id'] ?? ''; ?>">

                    <button class="btnc w-50 text-center mx-auto" type="submit" name="remove">
                        Radera <i class="mx-1 fa-solid fa-trash-can"></i>
                    </button>
                </div>
            </div>
        </form>
    <?php else: ?>
        <div class="container">
            <div class="alert bg-cust3 text-white mt-5">
                välj en kommentar du själv har lagt upp!
            </div>
        </div>
    <?php endif; ?>

</main>

<?php
// Include footer
require_once 'assets/includes/footer.php';
?>