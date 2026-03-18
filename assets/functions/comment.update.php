<?php
if (isset($_POST['update']) && !empty($_POST['comment_id'])) {
    //create a query
    $sql = '
    UPDATE detail
    SET comment = :comment, date = NOW()
    WHERE comment_id = :comment_id
    ';

    //prepare the query
    $stmt = $dbh->prepare($sql);

    //connect form fields with db container
    $stmt->bindValue(':comment', $_POST['comment']);
    $stmt->bindValue(':comment_id', $_POST['comment_id']);

    //Sends the query to the database
    try {
        $stmt->execute();
        header('Location: ../../detail.php?action=updated');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
