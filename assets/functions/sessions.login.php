<?php
//checks whether submit button has been set
if (isset($_POST['login'])) {

    // Always redirect back to the page where login was submitted.
     $currentPath = $_SERVER['REQUEST_URI'] ?? '/index.php';
    if (!is_string($currentPath) || $currentPath === '' || $currentPath[0] !== '/') {
        $currentPath = '/index.php';
    }

    //Checks whether e-mail and password fields are empty
    if (empty($_POST['email']) || empty($_POST['password'])) {
        //Redriect user to error page
        $separator = strpos($currentPath, '?') !== false ? '&' : '?';
        header('Location: ' . $currentPath . $separator . 'action=empty');
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
        // Redirect user to the page they logged in from
        header('Location: ' . $currentPath);
        exit();
    } else {
        // Redirect user to error page

        $separator = strpos($currentPath, '?') !== false ? '&' : '?';
        header('Location: ' . $currentPath . $separator . 'action=error');
        exit();
    }
}
