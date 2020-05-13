 <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>testimonial</span>
                                <h2>happy customer quotes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="testimonial-active">

                                 <?PHP
                            

                          

                            $select = "SELECT * FROM  testomonial";
                            $query = mysqli_query($db,$select);
                            // $assoc = mysqli_fetch_assoc($query);

                     

                            foreach ($query as $key => $value) {

                                ?>
                               
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img height = "100"src="images/<?php echo $value['images']?>" alt="img">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span><?php echo $value['description']?> <span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?php echo $value['title']?></h5>
                                            <span>head of idea</span>
                                        </div>
                                    </div>
                                </div>
                  

                        <?PHP

                    }

                    ?>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </section>