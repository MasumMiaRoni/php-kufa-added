<?php
	require 'db.php';
	include'session.php';
	
if ($_SERVER['REQUEST_METHOD']=="POST") {

$icon = $_POST['icon'];
$title = $_POST['title'];
$description = $_POST['description'];

	$insert="INSERT INTO services (service_icon ,service_title ,service_description) VALUES ('$icon' ,'$title' ,'$description')";
	$query = mysqli_query($db,$insert);

	// die('ok');
	if ($query) {
		header('location:services-add.php');
		// echo "ok";
	}
	else{
		echo "nitu";
	}
}
?>