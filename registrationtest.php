<?php
include 'includes/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>test registration</title>
</head>
<body>
    <form method="POST" action="registrationtest.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone"><br><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob"><br><br>

        <label for="country">Country:</label>
        <input type="text" id="country" name="country"><br><br>

        <input type="submit" value="Submit">
    </form>
<?php
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
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }    
?>
</body>
</html>

