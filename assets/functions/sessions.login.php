<?php
//checks whether submit button has been set
if (isset($_POST['login'])) {

    //Checks whether e-mail and password fields are empty
    if (empty($_POST['email']) || empty($_POST['password'])) {
        //Redriect user to error page
        header('Location: index.php?error=empty');
        exit();
    }

    // Trims e-mail and password
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Creates, prepares, binds and executes a query
    $sql = '
    SELECT *
    FROM users
    WHERE email = :email
    AND password = :password
    ';

    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':password', $password);
    $stmt->execute();

    //Counts rows returned from database
    $count = $stmt->rowCount();

    //checks whether user exists in database
    if ($count > 0) {
        //Save results to variable
        $row = $stmt->fetch();
        // Creates sessions varibles with user id
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        // Redirect user to index page
        header('Location: ../../index.php');
        exit();
    } else {
        // Redirect user to error page

        header('Location: ../../index.php?action=error');
        exit();
    }
}
