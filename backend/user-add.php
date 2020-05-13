
            
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
                                 <h4 style="color:#02c0ce" class="header-title mb-4">Add User Overview</h4>

                                  <form action="user-add-post.php" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control name" id="name" placeholder="Enter Name" name="name">
    </div>
    <span style="color:red">
    <?php
    if (isset($_SESSION['name_empty'])) {
    ?>
      <style type="text/css">
        .name{
          border: 1px solid red;
        }
      </style>
    <?php
      echo $_SESSION['name_empty'];
      unset($_SESSION['name_empty']);
    }
    ?>
    </span>


    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control email" id="email" placeholder="Enter Email" name="email">
    </div>
      <span style="color:red">
    <?php
    if (isset($_SESSION['email_empty'])) {
    ?>
      <style type="text/css">
        .email{
          border: 1px solid red;
        }
      </style>
    <?php
      echo $_SESSION['email_empty'];
      unset($_SESSION['email_empty']);
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
               </div> 
            </div>
                 <!-- content -->

               <?php include '../include/footer.php'?>




          

           