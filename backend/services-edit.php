
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
                               <h4 style="color:#02c0ce" class="header-title mb-4">Edit Services Overview</h4>

                                <?php
              require'db.php';
              // include '../include/head.php';

                                 ?> 
              <?php
              $id = $_GET['id'];
              $select = "SELECT * FROM services where id ='$id'";
              $query = mysqli_query($db,$select);
                $assoc = mysqli_fetch_assoc($query);
                
              ?>

          <div class="container">
              <div class="text-center">
                  <h2>Services Update <?php echo $_GET['id'];?> </h2>
              </div>
            <div class="row">
              
               <div class="col-sm-10 offset-1">

                <form action="services-update.php" method="post" >
                <input type="text" name="id" value="<?php echo $assoc['id']?>">
              <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control name" id="title" placeholder="Enter Name" value="<?php echo $assoc['service_title']?>" name="service_title">
              </div>
              
             
               <div class="form-group">
                <label for="service_icon">Icon:</label>
                 <input type="text" class="form-control name" id="service_icon" placeholder="Enter icon" value="<?php echo $assoc['service_icon']?>" name="service_icon">
              
              </div>

               <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="service_description"><?php echo $assoc['service_description']?></textarea>
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

           