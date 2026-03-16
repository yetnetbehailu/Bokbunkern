<?php 
if (isset($_POST['register'])) {

//Create a query
$sql = '
INSERT INTO users (firstname, lastname, email, password, regdate)
VALUES (:firstname, :lastname, :email, :password, NOW())
';

//Prepare the query
$stmt = $dbh->prepare($sql);

//Connect form fields with db columns
$stmt->bindParam(':firstname', $_POST['firstname']);
$stmt->bindParam(':lastname', $_POST['lastname']); 
$stmt->bindParam(':email', $_POST['email']);
$stmt->bindParam(':password', $_POST['password']);

//Send query to database
try {
    $stmt->execute();
    header('Location: ../../add.php?action=success');
} catch (PDOException $e) {
    echo $e->getMessage();
}

}
?>