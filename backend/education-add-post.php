<?php
	require 'db.php';
	include'session.php';
	
if ($_SERVER['REQUEST_METHOD']=="POST") {

$year = $_POST['year'];
$title = $_POST['title'];
$percent = $_POST['percent'];
// $description = $_POST['description'];

	$insert="INSERT INTO education (year ,title,percent ) VALUES ('$year' ,'$title','$percent' )";
	$query = mysqli_query($db,$insert);

	// die('ok');
	if ($query) {
		header('location:education-add.php');
		// echo "ok";
	}
	else{
		echo "nitu";
	}
}
?>