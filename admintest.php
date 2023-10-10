<?php
session_start();
include 'includes/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>admin test login</title>
    <link src="../assets/css/style.css" rel="stylesheet"/>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="admintest.php">
        <label for="id">Admin ID:</label>
        <input id="id" name="id" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
} else {
    echo "<script>alert('Such admin details not found. Please check your credentials again.');</script>";
}
?>
</body>
</html>
