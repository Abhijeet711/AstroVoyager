<?php
	$name = $_REQUEST["name"];
	$email = $_REQUEST["email"];
	$password = $_REQUEST["password"];
	$phone = $_REQUEST["phone"];
	$dob = $_REQUEST["dob"];
	$country = $_REQUEST["country"];
	$action = $_REQUEST["action"];

	$con = mysqli_connect("localhost:3306","root","","astrovoyager") or die("unable to connect to sql server");
	if($action=="Insert Record"){
    	insertrec();
	}
	if($action=="Clear Form"){
    	clearform();
	}
	if($action=="Update Record"){
    	updaterec();
	}
	if($action=="Delete Record"){
    	delrec();
	}
	function clearform(){
    	global $con;
    	reset($name);
		reset($email);
		reset($password);
		reset($phone);
		reset($dob);
		reset($country);
	}
	function insertrec(){
    	global $con;
		global $name;
    	global $email;
    	global $password;
    	global $phone;
		global $dob;
		global $country;
    	if($con){
        	$query = "INSERT INTO users(name,email,password,phone,dob,country) VALUES('$name','$email','$password','$phone','$dob','$country')";
        	if (mysqli_query($con, $query)) {
				echo "<script>alert('User Inserted successfully!'); window.location.href = 'mysqlCRUD.php';</script>";
			} else {
				echo "<script>alert('User insert failed! " . mysqli_error($con) . "'); window.location.href = 'mysqlCRUD.php';</script>";
			}
    	}
	}
	function updaterec(){
    	global $con;
		global $name;
    	global $email;
    	global $password;
    	global $phone;
		global $dob;
		global $country;
    	$query = "UPDATE users SET name = '$name', email = '$email', password = '$password', phone = '$phone', dob = '$dob', country = '$country' WHERE email = '$email' ";
    	//echo "QUERY IS: $query <br>";
    	if (mysqli_query($con, $query)) {
			echo "<script>alert('User updated successfully!!'); window.location.href = 'mysqlCRUD.php';</script>";
		} else {
			echo "<script>alert('User update failed! " . mysqli_error($con) . "'); window.location.href = 'mysqlCRUD.php';</script>";
		}
   	 
	}
	function delrec(){
    	global $con;
    	global $email;
    	$query = "DELETE FROM users WHERE email= '$email' ";
    	//echo "query is: $query, hence the following record will get deleted from database:";
    	if (mysqli_query($con, $query)) {
			echo "<script>alert('User Deleted Successfully!'); window.location.href = 'mysqlCRUD.php';</script>";
		} else {
			echo "<script>alert('User delete failed! " . mysqli_error($con) . "'); window.location.href = 'mysqlCRUD.php';</script>";
		}
	}
?>
