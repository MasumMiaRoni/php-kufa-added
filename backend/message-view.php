
            
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

                <!-- Start Page content -->
        
            <div class="content">
                 <div class="container-fluid">
                     <div class="row">
                         <div class="col-12">
                             <div class="card-box">
                                 <h4 class="header-title mb-4">Customer Message</h4>

         
           

          <table class="table table-bordered" id ="table_id">
            <thead>
              <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Action</th>
              </tr>
            </thead>
            <?php

                require 'db.php';


                $select = "SELECT * FROM contact";
                $query = mysqli_query($db,$select);

            ?>
            <tbody>

                <?php
                    $sl = 1;
                    foreach ($query as $key => $value) {
                ?>

            <tr

            <?php

            if ($value['status'] == 1) {

               ?>
                 style ="background:#e3eaef"



              <?php
            }

            ?>

            >
                <td><?php echo $sl++ ?></td>
                <td class="text-center"><?php echo $value['name']?></td>
                <td><?php echo $value['email']?></td>
                <td><?php echo substr($value['message'] ,0 ,50 )?></td>
                

                <td class="text-center">


                    <a class="btn btn-outline-primary" href="message-read.php?id=<?php
                    echo $value['id']?>">

                  <?php
                  if ($value['status'] == 1) {

                    echo "Read";
                  }
                  else{
                    echo "Unread";
                  }
                  
                    ?>
                  </a>
                </td>
               
              
              <td>

                  <?php 

                            if ($_SESSION['user_role'] == 2) {
                               ?>

                    
                    <a class="btn btn-outline-danger"href="message-delete.php?id=<?php
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




          

           