<?php
	session_start();
	require 'backend/db.php';
	
if ($_SERVER['REQUEST_METHOD']=="POST") {

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'],PASSWORD_BCRYPT);
$phone = $_POST['phone'];
$gender = $_POST['gender'];

if (!empty($name)) {

	if (!empty($email)) {

	$select = "SELECT COUNT(*) as total FROM users WHERE email = '$email'";

	//Data Connection
	$q = mysqli_query($db,$select);
	$assoc = mysqli_fetch_assoc($q);
	

	if (!$assoc['total'] > 0) {
		$insert = "INSERT INTO users (name, email, password, phone,  gender) VALUES ('$name', '$email', '$password', '$phone', '$gender')";

		$query = mysqli_query($db,$insert);
	if ($query) {
		header('location:backend/user-view.php');
	}
	else{
		echo "hsdchc";
	}
	
	}

	else{
		echo "aita cilo agar thakai";
	}
	}
	else{

	$_SESSION['email_re'] = "Please Enter your email.";
	header('location:page-register.php');

	}
	}
	else{

	$_SESSION['name_re'] = "Please Enter your name.";
	header('location:page-register.php');

	}

	

	




	



//name validation

// if (!empty($name)) {
// 	$len = strlen($name);
// 	if ($len <= 3) {
// 		echo "you are lessthan 3";
// 	}
// 	elseif ($len >=10) {
// 		echo "you enter morethan 10";
// 	}
// 	else{
// 		if (preg_match("/^[a-zA-Z0-9]*$/", $name)) {
// 			echo "you are ok";
// 		}
// 		else{
// 			echo "you are vago";
// 		}
// 	}
// }
// else{
// 	echo "Enter your name";
// }
// // email validation

// if (!empty($email)) {
// 	if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
// 		echo "you are valid";
// 	}
// 	else{
// 		echo "you are invalid";
// 	}
// }
// else{
// 	echo "Enter your email";
// }
// // password validation

// if (!empty($password)) {
// 	$len = strlen($password);
// 	if ($len <= 3) {
// 		echo "you are lessthan 3";
// 	}
// 	elseif ($len >=10) {
// 		echo "you enter morethan 10";
// 	}
// 	else{
// 		if (preg_match("/^[a-zA-Z0-9]*$/", $password)) {
// 			echo "you are ok";
// 		}
// 			else{
// 			echo "you are vago";
// 		}
// 	}
// }
// else{
// 	echo "Enter your password";
// }
// //phone validation

// if (!empty($phone)) {
// 	$len = strlen($phone);
// 	if ($len <= 3) {
// 		echo "you are lessthan 3";
// 	}
// 	elseif ($len >=10) {
// 		echo "you enter morethan 10";
// 	}
// 	else{
// 		if (preg_match("/^[a-zA-Z0-9]*$/", $phone)) {
// 			echo "you are ok";
// 		}
// 			else{
// 			echo "you are vago";
// 		}
// 	}
// }
// else{
// 	echo "Enter your phone";
// }
}

?>