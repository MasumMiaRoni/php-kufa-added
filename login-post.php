<?php

	require 'backend/db.php';
	session_start();
	
	if ($_SERVER['REQUEST_METHOD']=="POST") {

		$email = $_POST['email'];
		$password = $_POST['password'];

		$select = "SELECT COUNT(*) as total, email, id, name ,password ,user_role FROM users WHERE email ='$email'";

		$query = mysqli_query($db,$select);

		$assoc = mysqli_fetch_assoc($query);
		if ($assoc['email'] == $email ) {
		//akhano thaka
			$password_verify = password_verify($password,$assoc['password']);

			if ($password_verify) {
				$_SESSION['email'] = $assoc['email'];
				$_SESSION['name'] = $assoc['name'];
				$_SESSION['password'] = $assoc['password'];
				$_SESSION['user_role'] = $assoc['user_role'];
				header('location:backend/user-view.php');
				// echo "string";
			}
			else{
				// die("hoisana");
				echo "hoisana";
			}


			}

	else{
		echo "error";
		}

}


?>