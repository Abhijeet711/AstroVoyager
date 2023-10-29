<!-- background image and stlye for table -->
<style>
    body{
        background: url(assets/img/space.jpg) center;
    }
    legend{
        margin-top: 6%;
    }
    .container{
        margin: auto;
    }
    h1{
        background-color: #3d0066;
        color: #ffd500 !important;
        font-size: xx-large !important;
        border: 0px !important;
        padding:15px;
        border-radius: 25px;
        width: 300px;
    }
    .legenda{
        background-color: #3d0066;
        color: #ffd500;
        border: 1px solid #fdc500;
        font-size: large;
        padding:15px;
        border-radius: 25px;
        text-align: center;
    }
    table {
        margin-top: 2%;
    }
    table, th, td, tr, select, input{
        background-color: #3d0066;
        color: #ffd500;
        border: 1px solid #fdc500;
        padding:25px;
        text-align: center;
        font-size: large;
    }
    input{
        border: 0px transparent;
    }
    .idb{
        background-color: #3d0066;
        color: #ffd500;
        border: 1px solid #fdc500;
        padding:15px;
        text-align: center;
        border-radius: 8px;
    }
</style>
<!-- Bootstrap CSS File -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php 
    session_start();
    include 'includes/config.php';
    if (!isset($_SESSION['id']) || empty($_SESSION['id']) || $_SESSION['id'] !== 'admin') {
        // Redirect to the login page or display an error message
        header("Location: adminlogin.html");
        exit();
    }
    // echo "Welcome, " . $_SESSION['id'] . "<br>";
    include 'includes/header.php';
    $table_name = "users"; // table name
    $sql = "SELECT email, name, phone, dob, country FROM $table_name";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    echo "<center><legend><h1>User Details</h1></legend>
    <table border='1'>
    <tr>
    <th>Email ID</th>
    <th>Name</th>
    <th>Phone Number</th>
    <th>Date of Birth</th>
    <th>Country</th>
    </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td>" . $row['dob'] . "</td>";
        echo "<td>" . $row['country'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    } else {
    echo "No records found.";
    }
?>
        <div class="mt-4" style="width:250px;">
            <form name="form1" method="GET" action="adminuserCRUD.php" class="legenda">
                <input type="submit" value="Edit User Details">
            </form>
        </div>
        <div class="mt-4" style="width:250px;">
            <form name="form1" method="GET" action="includes/logout.php" class="legenda">
                <input type="submit" value="Logout">
            </form>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>