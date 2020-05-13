    
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
                                 <h4 style="color:#02c0ce" class="header-title mb-4">Add Portfolios </h4>

                                  <form action="portfolios-add-post.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control email" id="title" placeholder="Enter Title" name="title">
    </div>

    <div class="form-group">
      <label for="icon">Image:</label>
      <input type="file" class="form-control Icon" id="icon" placeholder="Enter Image" name="images">
    </div>
    
      
     <div class="form-group">
      <label for="description">Description:</label>
      <!-- <input type="text" class="form-control" id="description" placeholder="Enter Description" name="description"> -->
      <textarea class="form-control" name="description"></textarea>
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

           