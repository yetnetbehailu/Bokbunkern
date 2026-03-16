<?php
// Gets all information about the comments and the user who posted them.
// We join the users table so we can show firstname/lastname and include comment_id
// for edit/delete links.
$sql = 'SELECT
    d.comment_id,
    d.comment,
    d.date,
    u.firstname,
    u.lastname
FROM detail AS d
JOIN users AS u ON u.user_id = d.user_id
ORDER BY d.date DESC
';

//prepare the query
$stmt = $dbh->prepare($sql);
//sends query to database
$stmt->execute();
