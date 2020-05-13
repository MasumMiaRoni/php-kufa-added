
            
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
                                 <h4 style="color:#02c0ce" class="header-title mb-4">Add Contact </h4>

                                  <form action="contact-add-post.php" method="post">
    <div class="form-group">
      <label for="title">Address:</label>
      <input type="text" class="form-control email" id="title" placeholder="Enter Address" name="address">
    </div>

    <div class="form-group">
      <label for="icon">Phone:</label>
      <input type="text" class="form-control Icon" id="icon" placeholder="Enter Phone" name="phone">
    </div>

     <div class="form-group">
      <label for="icon">Email:</label>
      <input type="text" class="form-control Icon" id="icon" placeholder="Enter Email" name="email">
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




          

           