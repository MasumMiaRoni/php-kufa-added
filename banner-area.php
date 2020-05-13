 <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">

                                <?php 

                            $select = "SELECT * FROM banner";
                            $query = mysqli_query($db,$select);
                            $assoc = mysqli_fetch_assoc($query);

                                ?>

                                <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s"><?php echo $assoc['title']?></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s"><?php echo $assoc['description']?></p>


                               

                           

                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                                    <ul>

                                        <?PHP
                          
                            $select = "SELECT * FROM social_icon";
                            $query = mysqli_query($db,$select);
                            // $assoc = mysqli_fetch_assoc($query);

                            foreach ($query as $key => $value) {

                                ?>

                                         <li><a href="<?php echo $value['link']?>">
                                            <i class="<?php echo $value['icon']?>"></i></a>
                                         </li>
                               <?php

                               }

                               ?>
                                    </ul>
                                </div>
                            <!-- Education Item -->
                           

                                
                               
                                <a href="#portfolio" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img src="images/<?php echo $assoc['images']?>" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="asset/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>