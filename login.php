<head>
    <meta charset="utf-8">
    <title !important>Login Page</title>
</head>
<?php
session_start();
include 'includes/config.php';
include 'includes/header.php';
?>
    <style>
        /* 
        COLOR PALETTE: 
        3d0066 - purple most 
        510087 - purple medium
        5c0099 - purple
        fdc500 - yellow ochre
        ffd500 - yellow 
        */
        body{
            background-color: #510087 !important;
            color: #ffd500 !important;
        }
        .formdown{
            margin-top:9%;
            margin-bottom:6%;
            width: 700px;
            text-align: left;
            padding: 20px;
            font-size: x-large;
        }
        .btn{
            color: #ffd500 !important;
            font-size: large !important;
            background-color: #510087 !important;
            border: 1px solid #ffd500 !important;
            border-radius: 25px !important;
            padding: 10px 20px !important;
            cursor: pointer !important;
        }
        .form-text{
            font-size: medium !important;
        }
        .inpt{
            width: 100% !important;
            border: 1px solid #ffd500 !important;
            border-radius: 25px !important;
            padding: 5px !important;
            background-color: #3d0066 !important;
            color: #fdc500 !important;
            font-size: large !important;
        }
    </style>
    <center>
        <form class="formdown" action="login.php" method="POST">
            <label class="form-label">Email address:</label>
            <input type="email" class="form-control inpt" id="email" name="email" autocomplete="off" required>
            <div id="emailHelp" class="form-text mb-3">We'll never share your email with anyone else.</div>
            <label class="form-label">Password:</label>
            <input type="password" class="form-control inpt" id="password" name="password" autocomplete="off" required>
            <button type="submit" class="btn mt-3">Login</button>
            <div id="emailHelp" class="form-text mt-2 mb-3">Don't have an account? Sign up <a style="color: #ffd500 !important; text-decoration: underline;" href="registration.php">here</a>!</div>
        </form>
    </center>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
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
        echo "<script>window.location.href = 'booking.php';</script>";
        exit();
    } else {
        echo "<script>alert('Incorrect password. Please try again.');</script>";
    }
} else {
    echo "<script>alert('User not found. Please check your email.');</script>";
}
include 'includes/footer.php';
?>