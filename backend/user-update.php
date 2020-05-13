<?php
// session_start();
require 'db.php';
require 'session.php';
if ($_SERVER['REQUEST_METHOD']=="POST") {

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$phone = $_POST['phone'];
$gender = $_POST['gender'];

$update = "UPDATE users SET name='$name' , email = '$email' , password = '$password' , phone = '$phone' , gender = '$gender' WHERE id = '$id'";

$query = mysqli_query($db,$update);
if ($query) {
	header('location:user-view.php');
}
else{
	echo "error";
}



}

?>