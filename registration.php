<head>
    <meta charset="utf-8">
    <title !important>Registration Page</title>
</head>
<?php
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
            margin-top:5.5%;
            margin-bottom:1%;
            width: 700px;
            text-align: left;
            padding: 20px;
            font-size: larger;
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
        <form class="formdown" action="registrationwork.php" method="POST">
            <label class="form-label">Name:</label>
            <input type="name" class="form-control inpt" id="name" name="name" autocomplete="off" required>
            <label class="form-label mt-3">Email address:</label>
            <input type="email" class="form-control inpt" id="email" name="email" autocomplete="off" required>
            <div id="emailHelp" class="form-text mb-3">We'll never share your email with anyone else.</div>
            <label class="form-label">Password:</label>
            <input type="password" class="form-control inpt" id="password" name="password" autocomplete="off" required>
            <label class="form-label mt-3">Phone Number:</label>
            <input type="number" class="form-control inpt" id="phone" name="phone" autocomplete="off" maxlength="10" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
            <label class="form-label mt-3">Date of Birth:</label><br>
            <input type="date" class="form-control inpt" id="dob" name="dob"><br>
            <label class="form-label">Country:</label>
            <input type="country" class="form-control inpt" id="country" name="country" autocomplete="off" required>
            <button type="submit" class="btn mt-3">Register</button>
            <div id="emailHelp" class="form-text mt-2 mb-2">Already have an account? Sign in <a style="color: #ffd500 !important; text-decoration: underline;" href="login.php">here</a>!</div>
        </form>
    </center>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/country.js"></script>
<?php
    include 'includes/footer.php';
?>
