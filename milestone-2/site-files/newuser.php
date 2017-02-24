<?php
include 'dbconnect.php';

// connect to the ecomm database
$conn = openCon();

$fn 	= $_POST['firstname'];
$ln 	= $_POST['lastname'];
$email  = $_POST['email'];
$pw	= $_POST['password'];
$addr 	= $_POST['address'];
$city 	= $_POST['city'];
$st	= $_POST['state'];
$zip	= $_POST['zip'];

$saveuser = "INSERT INTO siteusers 
		(firstName, lastName, email, password, address, city, state, zipcode)
		VALUES
		('$fn','$ln','$email','$pw','$addr','$city','$st','$zip')";

$result = mysqli_query($conn, $saveuser);

if ($result) {
	//echo "Save successful!";
	header("location: index.html");
} else {
	echo "Save failed.";
}

?>
