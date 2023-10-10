<?php 
    session_start();
    include 'includes/config.php';
    if (!isset($_SESSION['id']) || empty($_SESSION['id']) || $_SESSION['id'] !== 'admin') {
        // Redirect to the login page or display an error message
        header("Location: admintest.php");
        exit();
    }
    echo "Welcome, " . $_SESSION['id'] . "<br>";
?>