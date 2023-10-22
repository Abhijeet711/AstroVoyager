<?php
session_start();
$_SESSION = array(); //unsetting any set session variables.
session_destroy(); //destroying the session
header("Location: ../test.html"); // redirecting to the corresponding home page(test.html)
exit();
?>