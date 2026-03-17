<?php
if (isset($_POST['remove']) && !empty($_POST['comment_id'])) {
//create a query
$sql = "DELETE FROM detail
WHERE comment_id = :comment_id
AND user_id = :user_id";
//prepare the query
$stmt = $dbh->prepare($sql);
//connect form fields with db container
$stmt->bindValue(':comment_id', $_POST['comment_id'], PDO::PARAM_INT);
$stmt->bindValue(':user_id', $_SESSION['user_id'], PDO::PARAM_INT);
//Sends the query to the database
$stmt->execute();

if ($stmt->rowCount() > 0) {
header("Location: ../../detail.php?action=deleted");
} else {
echo "Du har inte behörighet att radera denna kommentar.";
}

exit;
}