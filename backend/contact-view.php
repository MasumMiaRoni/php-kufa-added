
            
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
                                 <h4 class="header-title mb-4">Services View</h4>

         <?php
          if (isset($_SESSION['delete'] )) {
            ?>
           <div class="alert alert-danger">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" style="font-size:20px">×</span>
              </button>    

            <strong>Hey!</strong><?= $_SESSION['delete'] ?>...
          </div>
            <?php
    
          unset($_SESSION['delete'] );
         }

        ?>  
           

          <table class="table table-bordered" id ="table_id">
            <thead>
              <tr>
                <th>SL</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </thead>
            <?php

                require 'db.php';


                $select = "SELECT * FROM contact_table";
                $query = mysqli_query($db,$select);

            ?>
            <tbody>

                <?php
                    $sl = 1;
                    foreach ($query as $key => $value) {
                ?>

            <tr>
                <td><?php echo $sl++ ?></td>
                <td class="text-center"><?php echo $value['address']?></td>
                <td><?php echo $value['phone']?></td>
                <td><?php echo substr($value['email'] ,0 ,50 )?></td>
                
                <td class="text-center">
                 <a class="btn btn-outline-primary" href="contact-edit.php?id=<?php
                    echo $value['id']?>">Edit</a>
                 <a class="btn btn-outline-danger" href="contact-delete.php?id=<?php
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




          

           