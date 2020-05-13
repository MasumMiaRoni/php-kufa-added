
            <?php  include '../include/head.php'?>
          

            <!-- ========== Left Sidebar Start ========== -->
            <?php  include '../include/sidebar.php'?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
               <?php include '../include/topbar.php'?>
                <!-- Top Bar End -->



                <!-- Start Page content -->
                
            <div class="content">
     <div class="container-fluid">
         <div class="row">
             <div class="col-12">
                 <div class="card-box">
                     <h4 style="color:#02c0ce" class="header-title mb-4">Edit User Overview</h4>

                      <?php
    require'db.php';
    // include '../include/head.php';

                       ?> 
    <?php
    $id = $_GET['id'];
    $select = "SELECT * FROM users where id ='$id'";
    $query = mysqli_query($db,$select);
      $assoc = mysqli_fetch_assoc($query);
    ?>

<div class="container">
    <div class="text-center">
        <h2>User Update <?php echo $_GET['id'];?> </h2>
    </div>
  <div class="row">
    
    <div class="col-sm-10 offset-1">
      <form action="user-update.php" method="post">
      <input type="text" name="id" value="<?php echo $assoc['id']?>">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control name" id="name" placeholder="Enter Name" value="<?php echo $assoc['name']?>" name="name">
    </div>
    
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control email" id="email" placeholder="Enter Email" value="<?php echo $assoc['email']?>" name="email">
    </div>

     <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter Password" value="" name="password">
    </div>

     <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter phone" value="<?php echo $assoc['phone']?>" name="phone">
    </div>

    <div class="form-group">
      <label>Gender:</label><br>
      <input type="radio" <?php echo $assoc['gender'] == 'male'?'checked':''?> name="gender"value="male">Male
      <input type="radio" <?php echo $assoc['gender'] == 'female'?'checked':''?> name="gender"value="female">Female
      <input type="radio" <?php echo $assoc['gender'] == 'others'?'checked':''?> name="gender"value="others">Others
    </div>

 <div class="form-group text-center">
    <button name="button" type="submit" class="btn btn-outline-info">Update</button>
 </div>

  </form>
    </div>
  </div>
</div>

</body>
</html>


 





                 </div>
             </div>
         </div>
     </div> 
</div>

               

                 <!-- content -->

               <?php include '../include/footer.php'?>

           