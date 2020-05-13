<?php
	require 'db.php';
	include'session.php';
	
if ($_SERVER['REQUEST_METHOD']=="POST") {

$icon = $_POST['icon'];
$link = $_POST['link'];
// $description = $_POST['description'];

	$insert="INSERT INTO social_icon (icon ,link ) VALUES ('$icon' ,'$link' )";
	$query = mysqli_query($db,$insert);

	// die('ok');
	if ($query) {
		header('location:icon-add.php');
		// echo "ok";
	}
	else{
		echo "nitu";
	}
}
?>