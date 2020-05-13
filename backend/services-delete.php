<?php
session_start();
require 'db.php';
	
if ($_SERVER['REQUEST_METHOD']=="GET") {

	$id =  $_GET['id'];

	$delete = "DELETE FROM `services` WHERE id = $id";
	$query = mysqli_query($db,$delete);

	if ($query) {
		$_SESSION['delete'] = "your data deleted ";
		header('location:services-view.php');
	}
	else{
		$_SESSION['delete'] = "your are failed ";
		header('location:services-view.php');
	}
}

?>