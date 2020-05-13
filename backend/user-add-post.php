<?php
	session_start();
	require 'db.php';
	
if ($_SERVER['REQUEST_METHOD']=="POST") {

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'],PASSWORD_BCRYPT);
$phone = $_POST['phone'];
$gender = $_POST['gender'];

if (!empty($name)) {
	if (!empty($email)) {
		
		$insert = "INSERT INTO users (name, email, password, phone,  gender) VALUES ('$name', '$email', '$password', '$phone', '$gender')";

	$query = mysqli_query($db,$insert);
	if ($query) {
	header('location:user-view.php');
	}
	else{
		echo "nai";
	}

	}
	else{
		$_SESSION['email_empty'] = "Please enter your email";
	header('location:user-add.php');
	}
}

else{
	$_SESSION['name_empty'] = "Please enter your name";
	header('location:user-add.php');
}
}
?>