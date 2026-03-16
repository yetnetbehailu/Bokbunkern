<?php
if (isset($_GET['edit'])) {
    //get specific post from database
    $sql = 'SELECT * FROM detail WHERE comment_id = :comment_id';
    //prepare the query
    $stmt = $dbh->prepare($sql);
    //connect GET-variable with db container
    $stmt->bindValue(':comment_id', $_GET['edit']);
    //sends query to database
    $stmt->execute();
    //add all information about the comment to variables
    $row = $stmt->fetch();
}
