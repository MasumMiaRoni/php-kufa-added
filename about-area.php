

 <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img">

                                <?php 

                            $select = "SELECT * FROM about";
                            $query = mysqli_query($db,$select);
                            $assoc = mysqli_fetch_assoc($query);

                            ?>

                                <img src="images/<?php echo $assoc['images']?>" title="me-01" alt="me-01">
                            </div>
                        </div>

                          

                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span>Introduction</span>
                                <h2><?php echo $assoc['title']?></h2>
                            </div>
                            <h3>Education:</h3>
                            <p><?php echo $assoc['description']?></p>

                            
                            <!-- End Education Item -->




                            <?PHP
                            

                          

                            $select = "SELECT * FROM education";
                            $query = mysqli_query($db,$select);
                            // $assoc = mysqli_fetch_assoc($query);

                     

                            foreach ($query as $key => $value) {

                                ?>

                            <!-- <div class="about-content">
                            </div> -->
                            <!-- Education Item -->
                            <div class="education">
                                <div class="year"><?php echo $value['year']?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?php echo $value['title']?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style=" width:<?php echo $value['percent']?>" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <?php

                       }

                       ?>


                        </div>
                    </div>
                </div>
            </section>