<?php
session_start();
if(isset($_SESSION['isLogged'])){
    header('Location: send_request.php?response=Session Exist!');
    exit();
}
?>
<?php include('includes/ui/header.php'); ?>
    </head>
    <body>
        <!-- Page Container -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!-- 'boxed' class for a boxed layout -->
        <div id="page-container">
        <?php include('includes/ui/menu.php'); ?>

            <!-- Intro -->
            <section class="site-section site-section-light site-section-top themed-background-dark">
                <div class="container">
                    <h1 class="text-center animation-slideDown"><strong>Home</strong></h1>
                    <h2 class="h3 text-center animation-slideUp">Please login to access your dashboard.</h2>
                </div>
            </section>
            <!-- END Intro -->

            <!-- Log In -->
            <section class="site-content site-section"> 
                <div class="container">
                    <div class="row"  style="margin-top:60px; margin-bottom:120px;">
                        <div class="col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 site-block">
                            <!-- Log In Form -->
                            <form action="includes/action/login_action.php"  method="post" id="form-log-in" class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                            <input type="email" id="login-email" name="login-email" class="form-control input-lg" placeholder="Email" value="test@test.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                            <input type="password" id="login-password" name="login-password" class="form-control input-lg" placeholder="Password" value="test">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-actions">
                                    <div class="col-xs-6">
                                        <label class="switch switch-primary">
                                            <input type="checkbox" id="login-remember-me" name="login-remember-me" checked><span></span>
                                        </label>
                                        <small>Remember me</small>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Log In</button>
                                    </div>
                                </div>
                                <div class="form-group">

                                </div>
                            </form>
                            <div class="text-center">
                                <a href="javascript:void(0)"><small>Forgot password?</small></a>
                            </div>
                            <!-- END Log In Form -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Log In -->

           
            <?php include('includes/ui/footer.php'); ?>
            
        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-up"></i></a>

        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="js/vendor/jquery.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="js/pages/login.js"></script>
        <script>$(function(){ Login.init(); });</script>
    </body>
</html>