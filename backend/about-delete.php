<?php
session_start();
require 'db.php';
	
if ($_SERVER['REQUEST_METHOD']=="GET") {

	$id =  $_GET['id'];

	$select = "SELECT * FROM about WHERE id = '$id'";
	$query = mysqli_query($db,$select);
	$assoc = mysqli_fetch_assoc($query);
	
	if (file_exists('../images/'.$assoc['images'])) {
		unlink('../images/'.$assoc['images']);
	}
		$delete = "DELETE FROM `about` WHERE id = $id";
		$query = mysqli_query($db,$delete);

		if ($query) {
			$_SESSION['delete-p-o'] = "your data deleted ";
			header('location:about-view.php');
		}
		else{
			$_SESSION['delete-p-n'] = "your are failed ";
			header('location:about-view.php');
		}
	
	

	
}

?>