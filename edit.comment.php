<?php
//unclude header
require_once 'assets/includes/header.php';
?>

<main class="mb-4 textc-cust">
    <!-- php sucsess massage -->
    <?php
    //check if action is set
    if (isset($_GET['action'])) {
        //checks which action is set
        switch ($_GET['action']) {
            case 'succsess':
                echo '
                        <div class="alert alert-success">
                            Kommentaren har laggts upp!
                        </div>
                    ';
                break;
        }
    }
    ?>

    <!-- Start of detail page -->
    <!-- back button -->
    <div class="m-3">
        <a href="detail.php" class="btnc disabled"><i class="fa-solid fa-arrow-left"></i> Tillbaka</a>
    </div>

    <!-- edit comment -->
    <?php if (!empty($row) && $row['user_id'] == $_SESSION['user_id']): ?>
        <form action="edit.comment.php" method="post">
            <div class="bg-cust2 p-3 rounded container">
                <div class="row p-3 border m-2 bg-white border rounded">
                    <div class="col-1 fa-3x">
                        <i class="fa-solid fa-circle-user"></i>
                    </div>
                    <div class="col-11">
                        <p class="fw-bold"><?php echo $row['firstname'] . ' ' . $row['lastname']; ?> <i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-regular fa-star"></i></p>
                        <p>
                            <input class="form-control" type="text" value="<?php echo $row['comment']; ?>" name="comment">
                        </p>
                        <div class="row justify-content-between">
                            <input type="hidden" name="comment_id" value="<?php echo $row['comment_id']; ?>">
                            <div class="col-10"> <!-- uppdate button -->
                                <button class="btnc" type="submit" name="update">
                                    Uppdatera <i class="mx-1 fa-solid fa-pen-to-square"></i>
                                </button>
                            </div>
                            <div class="col-2">
                                <div class="col-2">
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    <?php else: ?>
        <div class="alert bg-cust3 text-white container">
            Kommentaren hittades inte.
        </div>
    <?php endif; ?>
</main>

<?php
// Include footer
require_once 'assets/includes/footer.php';
?>