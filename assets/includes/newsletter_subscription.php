<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: /index.php");
    exit;
}

// If email has been input removes unwanted whitespaces else replaced with empty string 
$email = trim($_POST["newsletter-email"] ?? "");

// Validates email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: /index.php?newsletter_subscription=invalid");
    exit;
}

// Connection to database
require_once __DIR__ . "/../../db.php";

try {
    // Checks if email exists
    $check = $dbh->prepare("SELECT id FROM newsletter_subscribers WHERE email = ?");
    $check->execute([$email]);

    if ($check->rowCount() > 0) {
        // Redirects user to homepage if email already in database register
        header("Location: /index.php?newsletter=exists");
        exit;
    }

    // Saves subscriber email to newsletter_subscribers tabel
    $stmt = $dbh->prepare("INSERT INTO newsletter_subscribers (email) VALUES (?)");
    $stmt->execute([$email]);

    header("Location: /index.php?newsletter=success");
    exit;

    // Alerts errors
} catch (PDOException $e) {
    header("Location: /index.php?newsletter=error");
    exit;
}
