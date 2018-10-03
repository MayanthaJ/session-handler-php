 <?php
    if(isset($_GET['response'])){
        if($_GET['response']=="Login Success!"){
            ?>
                 <div class="text-center" style="background-color:#2ecc71; color:#FFF; padding:5px;">
                    <?php echo $_GET['response']; ?>
                </div>
            <?php
        }elseif($_GET['response']=="Session Exist!"){
            ?>
                 <div class="text-center" style="background-color:#0984e3; color:#FFF; padding:5px;">
                    <?php echo $_GET['response']; ?>
                </div>
            <?php
        }elseif($_GET['response']=="Request Successfully Sent! Token Matched."){
            ?>
                 <div class="text-center" style="background-color:#16a085; color:#FFF; padding:5px;">
                    <?php echo $_GET['response']; ?>
                </div>
            <?php
        }elseif($_GET['response']=="Request Sending Failed! Token Miss-Match."){
            ?>
                 <div class="text-center" style="background-color:#f39c12; color:#FFF; padding:5px;">
                    <?php echo $_GET['response']; ?>
                </div>
            <?php
        }else{
            ?>
                 <div class="text-center" style="background-color:#e74c3c; color:#FFF; padding:5px;">
                    <?php echo $_GET['response']; ?>
                </div>
            <?php
        }
    }
 ?>

 <!-- Site Header -->
 <header>
                <div class="container">
                    <!-- Site Logo -->
                    <a href="index.php" class="site-logo">
                        <i class="gi gi-flash"></i> <strong>Session</strong>Handler
                    </a>
                    <!-- Site Logo -->

                    <!-- Site Navigation -->
                    <nav>
                        <!-- Menu Toggle -->
                        <!-- Toggles menu on small screens -->
                        <a href="javascript:void(0)" class="btn btn-default site-menu-toggle visible-xs visible-sm">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- END Menu Toggle -->

                        <!-- Main Menu -->
                        <ul class="site-nav">
                            <!-- Toggles menu on small screens -->
                            <li class="visible-xs visible-sm">
                                <a href="javascript:void(0)" class="site-menu-toggle text-center">
                                    <i class="fa fa-times"></i>
                                </a>
                            </li>
                            <!-- END Menu Toggle -->
                            
                            <li>
                                <a href="home.php">HOME</a>
                            </li>
                            <?php 
                                if(isset($_SESSION['isLogged'])){
                                    ?>
                                        <li>
                                            <a href="logout.php" class="btn btn-primary">Log Out</a>
                                        </li>
                                    <?php
                                }else{
                                    ?>
                                        <li>
                                            <a href="index.php" class="btn btn-primary">Log In</a>
                                        </li>
                                    <?php
                                }
                            ?>
                        </ul>
                        <!-- END Main Menu -->
                    </nav>
                    <!-- END Site Navigation -->
                </div>
            </header>
            <!-- END Site Header -->