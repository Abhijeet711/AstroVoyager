<!-- background image and stlye for table -->
<style>
    body{
        background: url(assets/img/space.jpg) center;
    }
    legend{
        margin-top: 6%;
    }
    .legenda{
        background-color: #3d0066;
        color: #ffd500;
        border: 1px solid #fdc500;
        font-size: 2vh;
        padding:15px;
        border-radius: 8px;
        text-align: center;
    }
    table {
        margin-top: 2%;
    }
    table, th, td, tr, select, input{
        background-color: #3d0066;
        color: #ffd500;
        border: 1px solid #fdc500;
        padding:20px;
        text-align: center;
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
    echo "<center><legend><a class='legenda' href='includes/logout.php'>LOGOUT</a></legend><table border='1'>
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
    echo "</table>
    <div class='container'>
        <div class='row'>
            <div class='col-md-4 mt-4'>
                <form action='' style='margin-right:-170%'>
                    <button type='submit' class='idb'>Insert</button>
                </form>
            </div>
            <div class='col-md-4 mt-4'>
                <form action=''>
                    <button type='submit' class='idb'>Update</button>
                </form>
            </div>
            <div class='col-md-4 mt-4'>
                <form action='' style='margin-left:-170%'>
                    <button type='submit' class='idb'>Delete</button>
                </form>
            </div>
        </div>
    </div>
    </center>";
    } else {
    echo "No records found.";
    }
?>
<!-- </div>
        <div class='col-md-6'></div>
    </div>
</div> -->