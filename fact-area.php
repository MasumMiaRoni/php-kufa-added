            <!-- <?php require 'backend/db.php'?> -->


  <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                        <div class="row justify-content-between">
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="flaticon-award"></i>
                                    </div>

                                     <?php  

                                        $select ="SELECT COUNT(*) as total FROM users WHERE status = 1";
                                        // $select ="SELECT * FROM users WHERE status = 1";
                                        $query = mysqli_query($db,$select);
                                        $assoc = mysqli_fetch_assoc($query);

                                       
                                    ?>
                                    <div class="fact-content">
                                        <h2><span class="count"><?php echo $assoc['total']?></span></h2>
                                        <span>Feature Item</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                       <i class="flaticon-like"></i>
                                    </div>

                                     <?php  

                                        $select ="SELECT COUNT(*) as total FROM education ";
                                        // $select ="SELECT * FROM users WHERE status = 1";
                                        $query = mysqli_query($db,$select);
                                        $assoc = mysqli_fetch_assoc($query);

                                       
                                    ?>
                                    <div class="fact-content">
                                        <h2><span class="count"><?php echo $assoc['total']?></span></h2>
                                     <span>Active Products</span>
                                    </div>
                      			</div>
                            </div>
                           <div class="col-xl-2 col-lg-3 col-sm-6">
                               <div class="fact-box text-center mb-50">
                                   <div class="fact-icon">
                                       <i class="flaticon-event"></i>
                                    </div>     

                                      <?php  

                                        $select ="SELECT COUNT(*) as total FROM portfolios ";
                                        // $select ="SELECT * FROM users WHERE status = 1";
                                        $query = mysqli_query($db,$select);
                                        $assoc = mysqli_fetch_assoc($query);

                                       
                                    ?>
                                    <div class="fact-content">
                                        <h2><span class="count"><?php echo $assoc['total']?></span></h2>
                                        <span>Year Experience</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="flaticon-woman"></i>
                                    </div>
                                    <?php  

                                        $select ="SELECT COUNT(*) as total FROM users WHERE status = 1";
                                        // $select ="SELECT * FROM users WHERE status = 1";
                                        $query = mysqli_query($db,$select);
                                        $assoc = mysqli_fetch_assoc($query);

                                       
                                    ?>
                                    <div class="fact-content">
                                        <h2><span class="count"><?php echo $assoc['total']?></span></h2>
                                        <span>Our Clients</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>