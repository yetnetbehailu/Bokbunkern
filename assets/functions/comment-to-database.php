<?php
if (isset($_POST['register'])) {
    //create a query
    $sql = '
    INSERT INTO detail (user_id, comment, date)
    VALUES (:user_id, :comment, NOW())
    ';

    //prepare the query
    $stmt = $dbh->prepare($sql);

    //connect form fields with db container
    $stmt->bindValue(':user_id', $_SESSION['user_id']);
    $stmt->bindValue(':comment', $_POST['comment']);

    //Sends the query to the database
    try {
        $stmt->execute();
        header('location: ../../detail.php?action=success');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
