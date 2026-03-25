<?php
// Start session to access session data
session_start();

// Destroy all session data (logs out the user)
session_destroy();

// Redirect to homepage with logout message
header('Location: index.php?action=logout');
exit();
