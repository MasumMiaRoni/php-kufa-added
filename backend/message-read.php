            
            <?php 
             
             include '../include/head.php'
             ?>
          

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
               


               <table class="table table-bordered" >
            <thead>
              <tr>
                
                <th>Description</th><br>
                
              </tr>
            </thead>
            
            <tbody>
            
                <?php

                        require 'db.php';

                        $id = $_GET['id'];
                        $select = "SELECT * FROM contact where id ='$id'";
                        $query = mysqli_query($db,$select);

                     
                        $assoc = mysqli_fetch_assoc($query);
                       ?>

                        <?php

                            // $select = "SELECT * FROM contact where status = 1";
                            // $query = mysqli_query($db,$select);

                        ?>

                        <tr><br>
                        <td class="text-center"><?php echo $assoc['message']?></td>
                       
                        </tr>


                       <?php

                        if (isset($id)) {
                            $update = "UPDATE contact SET status = 2 WHERE id = '$id'";
                            $query = mysqli_query($db,$update);
                        }
                      
                    ?>
                


      
            </tbody>
          </table>

               

                 <!-- content -->

               <?php include '../include/footer.php'?>

           