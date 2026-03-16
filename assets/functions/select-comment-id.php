<?php
if (isset($_GET['edit'])) {
    // Get the comment + the user who posted it (firstname/lastname).
    // This allows the edit form to show the commenter’s name.
    $sql = 'SELECT
        d.comment_id,
        d.comment,
        d.date,
        u.firstname,
        u.lastname
    FROM detail AS d
    JOIN users AS u ON u.user_id = d.user_id
    WHERE d.comment_id = :comment_id';

    //prepare the query
    $stmt = $dbh->prepare($sql);
    //connect GET-variable with db container
    $stmt->bindValue(':comment_id', $_GET['edit']);
    //sends query to database
    $stmt->execute();
    //add all information about the comment to variables
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
}
