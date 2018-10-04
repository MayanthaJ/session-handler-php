<?php
session_start();
if(!isset($_SESSION['isLogged'])){
    header('Location: index.php');
    exit();
}
?>
<?php include('includes/ui/header.php'); ?>

    <script type="text/javascript">
                window.onload=function(){
                $.ajax({
                        url:'includes/action/get_chrf_action.php',
                        cache:false,
                        success:function(data){
                            var val=  document.getElementById("csrf_token");
                            val.value=data;
                        }
                    });
                };
    </script>

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
                    <h1 class="text-center animation-slideDown"><strong>Send Request</strong></h1>
                    <h2 class="h3 text-center animation-slideUp">Contact System Admin</h2>
                </div>
            </section>
            <!-- END Intro -->

            <section class="site-content site-section"> 
                <div class="container">
                    <div class="row"  style="margin-top:60px; margin-bottom:120px;">
                        <div class="col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 site-block">
                           
                            <form action="includes/action/request_send_action.php" method="post" id="form-log-in" class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                            <input type="hidden" id="csrf_token" name="csrf_token" class="form-control input-lg">
                                            <input type="email" id="email" name="email" class="form-control input-lg" placeholder="Email" value="test@test.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-iphone"></i></span>
                                            <input type="text" id="phone" name="phone" class="form-control input-lg" placeholder="Phone" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                            <input type="text" id="subject" name="subject" class="form-control input-lg" placeholder="Subject" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-circle_question_mark"></i></span>
                                            
                                            <input type="text" id="message" name="message" class="form-control input-lg" placeholder="Message" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-actions">
                                    <div class="col-xs-12 text-right">
                                        <input type="submit" value="Send"  class="btn btn-sm btn-primary">
                                        <!-- <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Log In</button> -->
                                    </div>
                                </div>
                                <div class="form-group">

                                </div>
                            </form>
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