<?php
    session_start();
    include 'includes/config.php';
    $id = $_POST['id'];
    $password = $_POST['password'];
    $sql = "SELECT id, password FROM admin WHERE id = '$id' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Fetch user data
        $row = $result->fetch_assoc();
        
        // Store user data in session variables
        $_SESSION['id'] = $row['id'];

        // Redirect to the home page
        header("Location: adminpanel.php");
        exit();
    } else {
        echo "<script>alert('Incorrect password. Please try again.');</script>";
    }
?>
