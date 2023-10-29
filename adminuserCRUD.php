<?php 
session_start();
    include 'includes/config.php';
    if (!isset($_SESSION['id']) || empty($_SESSION['id']) || $_SESSION['id'] !== 'admin') {
        // Redirect to the login page or display an error message
        echo "<script>window.location.href = 'adminlogin.html';</script>";
        exit();
    }
    include 'includes/header.php';
?>
<style>
    body{
        background: url(assets/img/space.jpg) center;
    }
    label,input,button{
        background-color: #3d0066;
        color: #ffd500;
        border: 1px solid #fdc500;
        padding:20px;
        text-align: center;
        border-radius: 25px;
        font-size: larger;
    }
    .legenda{
        background-color: #3d0066;
        color: #ffd500;
        border: 1px solid #fdc500;
        font-size: larger;
        padding:20px;
        border-radius: 25px;
        text-align: center;
        margin-left:8px;
    }
    .legendx{
        text-align:left !important;
    }
</style>
<!-- Bootstrap CSS File -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php
    $con = mysqli_connect("localhost:3306","root","","astrovoyager") or die("unable to connect to sql server");
?>
        <center>
            <div style='margin-top:6%;margin-bottom:2%'>
            <form name="form1" method="GET" action="adminpanel.php">
            <input type="submit" value="View All Records" class="legenda">
            </form>
            </div>
            <div style='margin-bottom:2%'>
            <form name="form1" method="GET" action="adminuserCRUDc.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="legenda legendx"><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="legenda legendx"><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" class="legenda legendx"><br><br>

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" class="legenda legendx"><br><br>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" class="legenda legendx"><br><br>

            <label for="country">Country:</label>
            <input type="text" id="country" name="country" class="legenda legendx"><br><br>

            <input type="submit" name="action" value="Insert Record" onclick="form1.action=adminuserCRUDc.php; return true" class="legenda">
            <input type="submit" name="action" value="Update Record" onclick="form1.action=adminuserCRUDc.php; return true" class="legenda">
            <input type="submit" name="action" value="Delete Record" onclick="form1.action=adminuserCRUDc.php; return true" class="legenda">
            <input type="reset" name="action" value="Clear Form" class="legenda">
            </form>
            </div>
        </center>
<?php
    include 'includes/footer.php';
?>