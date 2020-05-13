
            
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
                                 <h4 class="header-title mb-4">Portfolio View</h4>

         <?php
          if (isset($_SESSION['delete-p-o'])) {
            ?>
           <div class="alert alert-danger">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" style="font-size:20px">×</span>
              </button>    

            <strong>Hey!</strong><?= $_SESSION['delete-p-o']?>...
          </div>
            <?php
    
          unset($_SESSION['delete-p-o']);
         }

        ?>  
           

          <table class="table table-bordered" id ="table_id">
            <thead>
              <tr>
                <th>SL</th>
                <th>Title</th>
                <th>Images</th>
                <th>Description</th>
                <th>Action</th>
              </tr>
            </thead>
            <?php

                require 'db.php';


                $select = "SELECT * FROM banner";
                $query = mysqli_query($db,$select);

            ?>
            <tbody>

                <?php
                    $sl = 1;
                    foreach ($query as $key => $value) {
                ?>

            <tr>
                <td><?php echo $sl++ ?></td>
                <td class="text-center"><?php echo $value['title']?></td>
                <td><img height="150" style="height: 100px; border-radius: 40%" src="../images/<?php echo $value['images']?>"></td>
                <td><?php echo substr($value['description'] ,0 ,50 )?></td>
                
                <td class="text-center">
                 <a class="btn btn-outline-primary" href="banner-edit.php?id=<?php
                    echo $value['id']?>">Edit</a>
                 <a class="btn btn-outline-danger" href="banner-delete.php?id=<?php
                  echo $value['id']?>">Delete</a>

                </td>

               
             </tr>

          <?php

             }

             ?>

      
            </tbody>
          </table>
                        </div>
                     </div>
                  </div>
               </div> 
            </div>
                 <!-- content -->

               <?php include '../include/footer.php'?>




          

           