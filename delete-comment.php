<?php
//include database connection
require_once 'db.php';
//register information to database
require_once 'assets/functions/comment-to-database.php';
// Include header
require_once 'assets/includes/header.php';
//include ability to showcase comments
require_once 'assets/functions/view-comments.php';
//get specific comment to edit
require_once 'assets/functions/select-comment-id.php';
?>


<main class="bg-cust1">

    <!-- Start of detail page -->
    <!-- back button -->
    <div class="m-3">
        <a src="" class="btnc disabled"><i class="fa-solid fa-arrow-left"></i> Tillbaka</a>
    </div>

    <!-- book description -->
    <div class="container p-4 text-bg-light border rounded">
        <div class="row align-items-start">
            <div class="col-2">
                <img src="assets/images/the-picture-of-dorian-gray.jpg"
                    class="img-thumbnail"
                    alt="En bild på bokomslaget till boken The picture of dorian grey. 
                    En man i vit kavaj stående vilande med arbågen mot en pelare">
            </div>
            <div class="col-10">
                <header class="fs-4 fw-bold">The picture of dorian grey</header>
                <p>'A triumph of execution ... one of the best narratives of
                    the "double life" of a Victorian gentleman' Peter Ackroyd</p>
                <p>Oscar Wilde's alluring novel of decadence and sin was a
                    succès de scandale on publication. It follows Dorian Gray
                    who, enthralled by his own exquisite portrait, exchanges
                    his soul for eternal youth and beauty. Influenced by his
                    friend Lord Henry Wotton, he is drawn into a corrupt double
                    life, indulging his desires in secret while remaining a
                    gentleman in the eyes of polite society. Only his portrait
                    bears the traces of his depravity. This definitive edition
                    includes a selection of contemporary reviews condemning
                    the novel's immorality.</p>
                <p>Edited with an Introduction and notes by ROBERT MIGHALL</p>
                <p><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></p>
            </div>
        </div>
    </div>

    <!-- add comment field -->
    <div class="container">
        <!-- add comment button -->
        <div class="mx-5 mb-3 mt-5 row bg-cust2 rounded p-2">
            <form action="detail.php" method="post">
                <div class="row">
                    <div class="col-10">
                        <label for="comment" class="fs-4">Lägg till kommentar</label>
                        <input class="form-control" type="text" placeholder="Dela din åsikt..." id="comment" name="comment" />
                    </div>
                    <div class="col text-end align-items-end d-flex">
                        <button class="btnc" type="submit" name="register">
                            Lägg upp <i class="mx-1 fa-solid fa-arrow-up"></i>
                        </button>
                    </div>
                </div>
                <div class="mt-1">
                    <i class="fa-regular fa-star my-2"></i>
                    <i class="fa-regular fa-star my-2"></i>
                    <i class="fa-regular fa-star my-2"></i>
                    <i class="fa-regular fa-star my-2"></i>
                    <i class="fa-regular fa-star my-2"></i>
                    <i class="fa-regular fa-star my-2 me-2"></i>
                </div>
            </form>
        </div>
    </div>

    <!-- delete comment -->
    <form action="delete-comment.php" method="post">
        <div class="bg-cust2 p-3 rounded container">
            <div class="row p-3 border m-2 bg-white border rounded">
                <p>Är du säker på att du vill radera denna kommentaren?</p>
                <p><?php echo ucwords($row['firstname']) . ' ' . ucwords($row['lastname']); ?></p>

                <div class="row justify-content-between">
                    <input type="hidden" name="comment_id" value="<?php echo $row['comment_id']; ?>">
                    <div class="col-10"> <!-- delete button -->
                        <button class="btnc" type="submit" name="remove">
                            Radera <i class="mx-1 fa-solid fa-trash-can"></i>
                        </button>
                    </div>
                </div>
            </div>
    </form>

</main>

<?php
// Include footer
require_once 'assets/includes/footer.php';
?>