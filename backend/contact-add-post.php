<?php
	require 'db.php';
	include'session.php';
	
if ($_SERVER['REQUEST_METHOD']=="POST") {

$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];

	$insert="INSERT INTO contact_table (address ,phone ,email) VALUES ('$address' ,'$phone' ,'$email')";
	$query = mysqli_query($db,$insert);

	// die('ok');
	if ($query) {
		header('location:contact-add.php');
		// echo "ok";
	}
	else{
		echo "nitu";
	}
}
?>