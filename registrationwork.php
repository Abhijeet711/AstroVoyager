<?php
    include 'includes/config.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $country = $_POST['country'];
    
    // SQL query to insert data into the database
    $sql = "INSERT INTO users (name, email, password, phone, dob, country)
            VALUES ('$name', '$email', '$password', '$phone', '$dob', '$country')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>
        alert('User Registration successful! Head on to login page to continue!');
        window.location.href = 'login.php';
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }    
?>
</body>
</html>

