
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
                     <h4 style="color:#02c0ce" class="header-title mb-4">Edit Banner Overview</h4>

                      <?php
    require'db.php';
    // include '../include/head.php';

                       ?> 
    <?php
    $id = $_GET['id'];
    $select = "SELECT * FROM banner where id ='$id'";
    $query = mysqli_query($db,$select);
      $assoc = mysqli_fetch_assoc($query);
      
    ?>

<div class="container">
    <div class="text-center">
        <h2>Portfolios Update <?php echo $_GET['id'];?> </h2>
    </div>
  <div class="row">
    
     <div class="col-sm-10 offset-1">
      <form action="banner-update.php" method="post" enctype="multipart/form-data">
      <input type="text" name="id" value="<?php echo $assoc['id']?>">
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control name" id="name" placeholder="Enter Name" value="<?php echo $assoc['title']?>" name="title">
    </div>
    
    <div class="form-group">
      <label for="images">Images:</label>
      <input type="file" class="form-control email" id="images"  value="<?php echo $assoc['images']?>" name="images">
    </div>
     <div class="form-group">
      <label for="images">Images:</label>
      <img height="100" src="../images/<?php echo $assoc['images']?>">
    </div>

     <div class="form-group">
      <label for="password">Description:</label>
      <textarea class="form-control" name="description"><?php echo $assoc['description']?></textarea>
    </div>

    


 <div class="form-group text-center">
    <button name="button" type="submit" class="btn btn-outline-info">Update</button>
 </div>

  </form>
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

           