<!-- Bootstrap CSS File -->
<link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

<!-- link below is for triangles in footer -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
/>

<!-- Main Stylesheet File -->
<link href="assets/css/styles.css" rel="stylesheet" />

<!-- link below is for icons of instagram and facebook in footer  -->
<link
  rel="stylesheet"
  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
/>

<!-- TAILWIND -->
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css"
  referrerpolicy="no-referrer"
/>
<!-- BOOTSTRAP -->
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"
  integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
></script>

<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>Astro Voyager</title>

<?php 
    include 'includes/config.php';
    include 'includes/header.php';
    session_start();
    if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    // Redirect to the login page or display an error message
    echo "<script>window.location.href = 'login.php';</script>";
    exit();
}
?>
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"
/>
<style>
    body{
        background-color: #510087 !important;
        color: #ffd500 !important;
    }
    .form-group{
        width: 700px !important;
    }
    .centered-form-submit-button {
        color: #ffd500;
        font-size: x-large;
        background-color: #510087;
        border: 1px solid #ffd500;
        border-radius: 25px;
        padding: 10px 20px;
        cursor: pointer;
        width: 300px;
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
<link rel="stylesheet" href="assets/css/styles.css" />
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astro Voyager</title>

    <!-- Add your CSS and JavaScript links here -->

</head>
<body style="background-color: #510087; color: #ffd500 !important;">

    <?php 
        include 'includes/config.php';
        include 'includes/header.php';
        session_start();
        if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
            // Redirect to the login page or display an error message
            echo "<script>window.location.href = 'login.php';</script>";
            exit();
        }
    ?>

    <div class="container mt-5">
        <form>
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">Person 1 Details</h3>
                </div>

                <div class="col-md-6 form-group">
                    <label for="name">Enter Name <span style="color: #b7202e">*</span></label>
                    <input type="text" class="form-control inpt" name="name" id="name" placeholder="Enter full name" required>
                </div>

                <div class="col-md-6 form-group">
                    <label for="primary_mob1">Enter Contact Number <span style="color: #b7202e">*</span></label>
                    <input type="tel" class="form-control inpt" name="primary_mob1" minlength="10" maxlength="10" id="primary_mob1" placeholder="Primary Contact Number" required>
                </div>

                <div class="col-md-6 form-group">
                    <label for="passport1">Enter Passport Number <span style="color: #b7202e">*</span></label>
                    <input type="text" class="form-control inpt" name="passport1" id="passport1" placeholder="Enter Passport Number" required>
                </div>

                <div class="col-md-6 form-group">
                    <label for="primary_email1">Enter Primary Email <span style="color: #b7202e">*</span></label>
                    <input type="email" class="form-control inpt" name="primary_email1" id="primary_email1" placeholder="Enter Email Id" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">Person 2 Details</h3>
                </div>

                <div class="col-md-6 form-group">
                    <label for="name2">Enter Name <span style="color: #b7202e">*</span></label>
                    <input type="text" class="form-control inpt" name="name2" id="name2" placeholder="Enter full name" required>
                </div>

                <div class="col-md-6 form-group">
                    <label for="primary_mob2">Enter Contact Number <span style="color: #b7202e">*</span></label>
                    <input type="tel" class="form-control inpt" name="primary_mob2" minlength="10" maxlength="10" id="primary_mob2" placeholder="Primary Contact Number" required>
                </div>

                <div class="col-md-6 form-group">
                    <label for="passport2">Enter Passport Number <span style="color: #b7202e">*</span></label>
                    <input type="text" class="form-control inpt" name="passport2" id="passport2" placeholder="Enter Passport Number" required>
                </div>

                <div class="col-md-6 form-group">
                    <label for="primary_email2">Enter Primary Email <span style="color: #b7202e">*</span></label>
                    <input type="email" class="form-control inpt" name="primary_email2" id="primary_email2" placeholder="Enter Email Id" required>
                </div>
            </div>
        </form>

        <div class="row">
            <div class="col-md-12">
                <p class="idnote">
                    <h5><u>Important Note:</u></h5>
                    1. Please ensure that all the details you provide are up-to-date and correct. Any inaccuracies could impact your space travel experience.
                    <br />
                    2. Attach proper document following the specific guidelines provided. This document might be needed for purposes like verifying your identity, medical fitness, or any other essential requirements.
                    <br />
                    3. Be sure to follow the instructions provided during the booking process.
                </p>
            </div>
            <center>
            <div class="col-md-12 mt-3">
                <h2>Upload Your Latest Medical Report</h2>
                <br />
                <form action="#" method="post" enctype="multipart/form-data">
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <br>
                    <input type="submit" value="Upload File" name="submit" class="centered-form-submit-button mt-3">
                </form>
            </div>
            </center>
            <center>
            <div class="col-md-12 mt-3">
                <h2>Amount $440000</h2>
                <br />
                <input type="submit" value="Confirm Booking" class="centered-form-submit-button mb-4" />
            </div>
            </center>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<?php
    include 'includes/footer.php';
?>