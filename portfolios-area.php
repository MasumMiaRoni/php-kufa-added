<section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                    	<?php 

                    		$select = "SELECT * FROM portfolios";
                    		$query = mysqli_query($db,$select);
                    		foreach ($query as $key => $value) {

                    			?>
                    			 <div class="col-lg-4 col-md-6 pitem">
		                            <div class="speaker-box">
										<div class="speaker-thumb">
											<img src="images/<?php echo $value['images']?>" alt="img">
										</div>
										<div class="speaker-overlay">
											<span>Design</span>
											<h4><a href="portfolio-single.php?id=<?php echo $value['id']?>"><?php echo $value['title']?></a></h4>
											<a href="portfolio-single.php?id=<?php echo $value['id']?>" class="arrow-btn">More information <span></span></a>
										</div>
									</div>
                        		</div>
                    			<?php
                    		}

                    	?>

                       
                    </div>
                </div>
            </section>