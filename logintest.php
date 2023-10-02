<?php
session_start();
include 'includes/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>test login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="logintest.php">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // SQL query to fetch email and password based on the provided email
    $sql = "SELECT email, password, name FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Fetch user data
        $row = $result->fetch_assoc();
        
        // Store user data in session variables
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['name'];

        // Redirect to the home page
        header("Location: hometest.php");
        exit();
    } else {
        echo "<script>alert('Incorrect password. Please try again.');</script>";
    }
} else {
    echo "<script>alert('User not found. Please check your email.');</script>";
}
?>
</body>
</html>
