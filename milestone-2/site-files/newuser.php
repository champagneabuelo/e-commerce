<?php
include 'dbconnect.php';

// connect to the ecomm database
$conn = openCon();

$fn 	= $_POST['firstname'];
$ln 	= $_POST['lastname'];
$email  = $_POST['email'];
$addr 	= $_POST['address'];
$city 	= $_POST['city'];
$st	= $_POST['state'];
$zip	= $_POST['zip'];
$pw	= $_POST['password'];


$saveuser = "INSERT INTO siteusers 
		(firstName, lastName, email, password, address, city, state, zipcode)
		VALUES
		('$fn','$ln','$email','$addr','$city','$st','$zip','$pw')";

$result = mysqli_query($conn, $saveuser);

if ($result) {
	echo "Save successful!";
} else {
	echo "Save failed.";
}

?>
