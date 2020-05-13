<?php
	require 'db.php';
	include'session.php';
	
if ($_SERVER['REQUEST_METHOD']=="POST") {

$title = $_POST['title'];
// $images = $_POST['images'];
$description = $_POST['description'];

	// print_r($_FILES['images']);

	if ($_FILES['images']) {
		$images = explode('.', $_FILES['images']['name']);
		$ext = end($images);
		$allow_format = ['jpg', 'png', 'gif'];
		$allow = in_array($ext,$allow_format);
		if ($allow) {
			if ($_FILES['images']['size'] < 5000000000){

				$insert="INSERT INTO testomonial (title ,description) VALUES ('$title' ,'$description')";
				$query = mysqli_query($db,$insert);
				$get_id = mysqli_insert_id($db);
				$img_id = $get_id.'.'.$ext;
				$new_location = '../images/'.$img_id;
				move_uploaded_file($_FILES['images']['tmp_name'], $new_location);
				$update = "UPDATE testomonial SET images = '$img_id' WHERE id = '$get_id'";	
				$update_query = mysqli_query($db,$update);	
				header('location:testomonial-add.php');


			}
			else{
				echo "image size not allow";
			}
		}
		else{
			echo "nai";
		}
		
	}
	else{
		echo "picture dai nai";
	}


	// $insert="INSERT INTO portfolios (title ,images ,description) VALUES ('$title' ,'$images' ,'$description')";
	// $query = mysqli_query($db,$insert);
	// if ($query) {
	// 	header('location:portfolios-add.php');
	// 	// echo "ok";
	// }
	// else{
	// 	echo "nitu";
	// }
}
?>