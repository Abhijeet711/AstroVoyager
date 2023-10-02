<?php
session_start();
include 'includes/config.php';
if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    // Redirect to the login page or display an error message
    header("Location: login.php");
    exit();
}

// Display user information
echo "Welcome, " . $_SESSION['name'] . "<br>";
echo "Email: " . $_SESSION['email'];
?>