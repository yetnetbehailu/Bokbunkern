<?php
if (isset($_POST['remove'])) {
    //create a query
    $sql = 'DELETE FROM detail WHERE comment_id = :comment_id';

    //prepare the query
    $stmt = $dbh->prepare($sql);

    //connect form fields with db container
    $stmt->bindValue(':comment_id', $_POST['comment_id']);

    //Sends the query to the database
    try {
        $stmt->execute();
        header('Location: ../../detail.php?action=deleted');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
