
            <?php include 'session.php'?>

    <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                    <!-- LOGO -->
                    <div class="topbar-left">
                  


                        <a href="../backend/dashboard.php" class="logo">
                            <span>
                                <img src="../back/assets/images/logo.png" alt="" height="22">
                            </span>
                            <i>
                                <img src="back/assets/images/logo_sm.png" alt="" height="28">
                            </i>
                        </a>
                    </div>

                    <!-- User box -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="../back/assets/images/users/IMG_20191023_115601.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        </div>
                        <h5><a href="#"><?php echo $_SESSION['name']?></a> </h5>
                        <p class="text-muted">
                            
                            <?php 

                            if ($_SESSION['user_role'] == 1) {
                                echo "User";
                            }

                            else{
                                echo "Admin";
                            }

                            ?>

                        </p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <!--<li class="menu-title">Navigation</li>-->

                            <li>
                                <a href="../backend/dashboard.php">
                                    <i class="fi-air-play"></i><span class="badge badge-danger badge-pill float-right"></span> <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-users"></i> <span> Banner </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="banner-add.php">Add Banner</a></li>
                                    <li><a href="banner-view.php"> Banner View</a></li>
                                    <li><a href="../backend/icon-add.php">Social Icon </a></li>
                                </ul>
                            </li>

                             <li>
                               <a href="#">
                                    <i class="fas fa-cloud"></i> <span> About  </span>
                                </a>
                                 <ul class="nav-second-level" aria-expanded="false">
                                    <li> <a href="../backend/about-add.php">
                                    <i class="fas fa-heart"></i> <span> About Add </span>
                                </a>
                                <li> <a href="../backend/about-view.php">
                                    <i class="fas fa-file"></i> <span> About View </span>
                                </a>
                                    </li>

                                    <li> <a href="../backend/education-add.php">
                                    <i class="fas fa-file"></i> <span> Education Add </span>
                                </a>
                                    </li>
                                  
                                </ul>
                            </li>



                              <li>
                                <a href="javascript: void(0);"><i class="fa fa-users"></i> <span> Users </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="../backend/user-view.php">View User</a></li>
                                    <li><a href="../backend/user-add.php">Add User</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-mail"></i><span> Message </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="../backend/message-view.php">View Message</a></li>
                                </ul>
                            </li>

                            
                           

                             <li>
                               <a href="../backend/services-add.php">
                                    <i class="fi-command"></i> <span> Service  </span>
                                </a>
                                 <ul class="nav-second-level" aria-expanded="false">
                                    <li> <a href="../backend/services-add.php">
                                    <i class="fi-command"></i> <span> Service Add </span>
                                </a>
                                <li> <a href="../backend/services-view.php">
                                    <i class="fi-command"></i> <span> Service View </span>
                                </a>
                                    </li>
                                  
                                </ul>
                            </li>

                              <li>
                                <a href="../backend/portfolios-add.php">
                                    <i class="fi-command"></i> <span> Portfolios </span>
                                </a>
                                 <ul class="nav-second-level" aria-expanded="false">
                                    <li> <a href="../backend/portfolios-view.php">
                                    <i class="fi-command"></i> <span> Portfolios View </span>
                                </a>
                                    </li>
                                    <li><a href="../backend/portfolios-add.php">
                                    <i class="fi-command"></i> <span> Portfolios Add </span></a>
                                    </li>
                                </ul>
                            </li>
                            
                               
                            <li>
                               <a href="#">
                                    <i class="fas fa-cloud"></i> <span> Testomonial  </span>
                                </a>
                                 <ul class="nav-second-level" aria-expanded="false">
                                    <li> <a href="../backend/testomonial-add.php">
                                    <i class="fas fa-heart"></i> <span>Testomonial  Add </span>
                                </a>
                                <li> <a href="../backend/testomonial-view.php">
                                    <i class="fas fa-file"></i> <span> Testomonial View </span>
                                </a>
                                    </li>
                                 </ul>
                            </li>

                            

                              <li>
                               <a href="#">
                                    <i class="fas fa-cloud"></i> <span> Contact  </span>
                                </a>
                                 <ul class="nav-second-level" aria-expanded="false">
                                    <li> <a href="../backend/contact-add.php">
                                    <i class="fas fa-heart"></i> <span>Contact  Add </span>
                                </a>
                                <li> <a href="../backend/contact-view.php">
                                    <i class="fas fa-file"></i> <span> Contact View </span>
                                </a>
                                    </li>
                                 </ul>
                               </li>



                           

                           
                           

                          

                           

                           
                        

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->
    </div>