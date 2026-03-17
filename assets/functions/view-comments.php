<?php
//Gets all information about the comments and shows them on the detail page
$sql = ' SELECT comment, date
FROM detail
ORDER BY date 
DESC
';

//prepare the query
$stmt = $dbh->prepare($sql);
//sends query to database
$stmt->execute();
