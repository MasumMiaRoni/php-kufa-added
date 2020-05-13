    
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
                                 <h4 style="color:#02c0ce" class="header-title mb-4">Add Icon </h4>

                                  <form action="icon-add-post.php" method="post" >
    <div class="form-group">
      <label for="title">icon:</label>
      <input type="text" class="form-control email" id="title" placeholder="Enter Icon" name="icon">
    </div>

    <div class="form-group">
      <label for="link">link:</label>
      <input type="text" class="form-control Icon" id="link" placeholder="Enter link" name="link">
    </div>
    
      
    

 <div class="form-group text-center">
    <button name="button" type="submit" class="btn btn-primary">Add</button>
 </div>

</form>

                        </div>
                     </div>
                  </div>
               </div> 
            </div>

               

                 <!-- content -->

               <?php include '../include/footer.php'?>

           