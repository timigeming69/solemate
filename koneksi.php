<?php

define('HOST','localhost'); 
define('USER','root'); 
define('PASS',''); 
define('DB','solemate');

$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

// if (mysqli_connect_errno()) {
//     echo "Failed to connect to MySQL: " . mysqli_connect_error();
//     exit();
// } else {
//     echo "Connected successfully";
// }
?>
