 <?php
require'backend/db.php';
session_start();
include 'include/head.php';
 ?> 



<div class="container">
	  <div class="text-center">
	    	<h2>Register form</h2>
	  </div>
	<div class="row">
		<div class="col-sm-10">
<form action="register-post.php" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control name" id="name" placeholder="Enter Name" name="name">
    </div>
		<span style="color:red">
		<?php
		if (isset($_SESSION['name'])) {
		?>
			<style type="text/css">
				.name{
					border: 1px solid red;
				}
			</style>
		<?php
			echo $_SESSION['name'];
			unset($_SESSION['name']);
		}
		?>
		</span>


    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control email" id="email" placeholder="Enter Email" name="email">
    </div>
    	<span style="color:red">
		<?php
		if (isset($_SESSION['email'])) {
		?>
			<style type="text/css">
				.email{
					border: 1px solid red;
				}
			</style>
		<?php
			echo $_SESSION['email'];
			unset($_SESSION['email']);
		}
		?>
		</span>


     <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
    </div>

     <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
    </div>

    <div class="form-group">
      <label>Gender:</label><br>
      <input type="radio"name="gender"value="male">Male
      <input type="radio"name="gender"value="female">Female
      <input type="radio"name="gender"value="others">Others
    </div>

 <div class="form-group text-center">
    <button name="button" type="submit" class="btn btn-primary">Submit</button>
 </div>

</form>
		</div>
	</div>

</div>
	<?php

	include 'include/footer.php';
	?>


 



