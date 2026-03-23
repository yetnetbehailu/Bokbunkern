<?php
//unclude header
require_once 'assets/includes/header.php';
?>



<main class="mt-2">


    <!-- php sucsess massage -->
    <div class="container">
        <?php
        //check if action is set
        if (isset($_GET['action'])) {
            //checks which action is set
            switch ($_GET['action']) {
                case 'success':
                    echo '
                        <div class="alert alert-success">
                            Kommentaren har laggts upp!
                        </div>
                    ';
                    break;
                case 'updated':
                    echo '
                        <div class="alert alert-success">
                            Kommentaren har uppdaterats!
                        </div>
                    ';
                    break;
                case 'deleted':
                    echo '
                        <div class="alert alert-danger">
                            Kommentaren har raderats!
                        </div>
                    ';
                    break;
            }
        }
        ?>
    </div>

    <!-- Start of detail page -->
    <!-- back button -->
    <div class="m-3">
        <a href="books.php" class="btnc disabled"><i class="fa-solid fa-arrow-left"></i> Tillbaka</a>
    </div>

    <!-- book description -->
    <div class="container p-4 text-bg-light rounded desc-box mx-auto">
        <div class="row align-items-center">

            <div class="d-flex justify-content-center">
                <div class="col-3">
                    <img src="assets/images/acotar.jpg"
                        class="rounded w-75 border"
                        alt="En bild på bokomslaget till boken acotar.">
                </div>




                <div class="w-cust">
                    <header class="fs-4 fw-bold">A court of thorns and roses</header>
                    <p>en romantisk fantasyroman och första delen i en populär bokserie.</p>
                    <p>Boken handlar om Feyre Archeron, en ung kvinna som lever i fattigdom med sin familj. När hon jagar i skogen dödar hon en varg för att kunna försörja dem. Men vargen visar sig egentligen vara en fae (en magisk varelse).
                        Som straff kommer en mäktig fae vid namn Tamlin och tar Feyre till sitt magiska rike Prythian. Hon tvingas bo i hans hov, men upptäcker snart att världen av fae är både farlig och fascinerande.</p>
                    <p>Boken är löst inspirerad av sagan Skönheten och odjuret, men utvecklas till en större fantasyhistoria med politiska intriger och mörkare teman i senare böcker.</p>
                    <div class="d-flex justify-content-end">
                        <p><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- add comment field -->
    <?php if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])): ?>
        <div class="container">
            <!-- add comment button -->
            <div class="mx-5 mb-3 mt-5 row bg-cust1 rounded p-2">
                <form action="detail.php" method="post">
                    <div class="row">



                        <div class="col">
                            <label for="comment" class="fs-4">Lägg till kommentar</label>
                            <textarea id="comment" name="comment" rows="2" cols="125" placeholder="Dela din åsikt..."></textarea>
                        </div>




                        <div class="col text-end align-items-center d-flex">
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
    <?php else: ?>
        <div class="container">
            <div class="alert bg-cust3 text-white mt-5">
                Logga in för att kunna kommentera!
            </div>
        </div>
    <?php endif; ?>

    <!-- comments made -->


    <?php
    //checks if there are any comments to show
    if ($stmt->rowCount() > 0):
    ?>

        <?php
        //fetches all comments and shows them on the page
        while ($row = $stmt->fetch()):
        ?>

            <div class="bg-cust2 p-3 rounded container mb-4">
                <div class="row p-3 border m-2 bg-white border rounded">
                    <div class="col-1 fa-3x">
                        <i class="fa-solid fa-circle-user"></i>
                    </div>
                    <div class="col-11">
                        <p class="fw-bold"><?php echo $row['firstname'] . ' ' . $row['lastname']; ?> <i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-regular fa-star"></i></p>
                        <p>
                            <?php echo $row['comment']; ?>
                        </p>
                        <div class="row justify-content-between">
                            <div class="col-10"> <!-- edit and delete button for comment -->
                                <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $row['user_id']): ?>
                                    <a href="edit.comment.php?edit=<?php echo $row['comment_id']; ?>" class="me-4 edt-btn">
                                        <i class="fa-solid fa-pen-to-square ic"></i> Redigera
                                    </a>
                                    <form method="post" action="detail.php" style="display:inline;">
                                        <input type="hidden" name="comment_id" value="<?php echo $row['comment_id']; ?>">

                                        <a href="delete.comment.php?delete=<?php echo $row['comment_id']; ?>" name="remove" class="edt-btn">
                                            <i class="fa-solid fa-trash-can ic"></i> Radera
                                        </a>
                                    </form>
                                <?php endif; ?>
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
        <?php endwhile; ?>
    <?php else: ?>
        //if there are no comments to show, show this text
        <div class="alert bg-cust3 text-white container">
            Det finns inga kommentarer än, var först med att kommentera!
        </div>
    <?php endif; ?>
</main>

<?php
// Include footer
require_once 'assets/includes/footer.php';
?>