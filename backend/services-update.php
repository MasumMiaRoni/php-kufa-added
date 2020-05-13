<?php
// session_start();
require 'db.php';
require 'session.php';
if ($_SERVER['REQUEST_METHOD']=="POST") {

$id = $_POST['id'];
$service_title = $_POST['service_title'];
$service_icon = $_POST['service_icon'];
$service_description = $_POST['service_description'];


$update = "UPDATE services SET service_title='$service_title' , service_icon = '$service_icon' , service_description = '$service_description' WHERE id = '$id'";

$query = mysqli_query($db,$update);
if ($query) {
	header('location:services-view.php');
	// die('ok');
}
else{
	echo "error";
}



}

?>