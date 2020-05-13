<?php
	require 'db.php';
	include'session.php';
	
if ($_SERVER['REQUEST_METHOD']=="POST") {

	$id = $_POST['id'];
	
$title = $_POST['title'];
// $images = $_POST['images'];
$description = $_POST['description'];
	
	

	if ($_FILES['images']['name']) {
		$images = explode('.', $_FILES['images']['name']);
		$ext = end($images);
		$allow_format = ['jpg', 'png', 'gif'];
		$allow = in_array($ext,$allow_format);
		if ($allow) {
			if ($_FILES['images']['size'] < 50000000){

				
				$select = "SELECT * FROM testomonial WHERE id = '$id'";
				$query = mysqli_query($db,$select);
				$assoc = mysqli_fetch_assoc($query);
				
				if (file_exists('../images/'.$assoc['images'])) {
					unlink('../images/'.$assoc['images']);
				}


				$img_id = $id.'.'.$ext;
				$new_location = '../images/'.$img_id;
				move_uploaded_file($_FILES['images']['tmp_name'], $new_location);

				$update = "UPDATE testomonial SET images = '$img_id'  title = '$title' ,description = '$description' WHERE id = '$id'";		

				$update_query = mysqli_query($db,$update);	
				die('update with image');

			}
			else{
				echo "image size not allow";
			}
		}
		else{
			echo "nai";
		}
		
	}
	$update = "UPDATE testomonial SET title = '$title' ,description = '$description' WHERE id = '$id'";	
	$update_query = mysqli_query($db,$update);	

	if ($update_query) {
		echo "updated without image";
	}
	else{
		echo "updated without image error";
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