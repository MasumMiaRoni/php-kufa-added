            <?php require 'db.php'?>    
            
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
                                 <h4 class="header-title mb-4">User Overview</h4>

         <?php
          if (isset($_SESSION['delete'])) {
            ?>
           <div class="alert alert-danger">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" style="font-size:20px">×</span>
              </button>    

            <strong>Hey!</strong><?= $_SESSION['delete']?>.
          </div>
            <?php
    
          unset($_SESSION['delete']);
         }

        ?>  
           

          <table class="table table-bordered" id ="table_id">
            <thead>
              <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
              </tr>
            </thead>
            <?php

                $select = "SELECT * FROM users where status = 1";
                $query = mysqli_query($db,$select);

            ?>
            <tbody>

                <?php
                    $sl = 1;
                    foreach ($query as $key => $value) {
                ?>

            <tr>
                <td><?php echo $sl++ ?></td>
                <td class="text-center"><?php echo $value['name']?></td>
                <td><?php echo $value['email']?></td>
                <td><?php echo $value['phone']?></td>
                <td class="text-center">

                      <?php 

                            if ($_SESSION['user_role'] == 2) {
                               ?>

                    <a class="btn btn-outline-primary" href="edit-user.php?id=<?php
                    echo $value['id']?>">Edit</a>
                    <a class="btn btn-outline-danger"href="user-delete.php?id=<?php
                    echo $value['id']?>">Delete</a>

                               <?php
                            }

                            else{
                                echo "you are not allow";
                            }

                            ?>

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




          

           