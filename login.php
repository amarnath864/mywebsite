<?php
include('heading/header.php');
?>

       <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="page-title-heading">
                                <h1 class="title">Login</h1>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span class="mr-1"><i class="ti ti-home"></i></span>
                                <a title="Homepage" href="index.php">Home</a>
                                <span class="ttm-bread-sep">&nbsp;/&nbsp;</span>
                                <span class="ttm-textcolor-skincolor">Login</span>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>                    
        </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">

        <!--login-section-->
        <section class="login-section bg-img2 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 ml-auto mr-auto">
                        <div class="wrap-login">
                            <form action="#" id="loginForm">
                                <div class="form-group">
                                    <i class="fa fa-envelope-o"></i>
                                    <input type="email" name='email' placeholder="Email"/>     
                                </div>
                                <div class="form-group">
                                    <i class="fa fa-lock"></i>
                                    <input type="password" name='password' placeholder="password"/>     
                                </div>
                                <div class="pt-5">
                                    <h6 class="font-weight-normal">OR</h6>
                                </div>
                                <div class="login-social-buttons">
                                    <button id="login-with-facebook" data-network="Facebook" class="social-account-button facebook-button">
                                        <i class="ti ti-facebook">
                                        </i>
                                        <span>Facebook</span>
                                    </button>
                                    &nbsp;&nbsp;
                                    <button id="login-with-google" data-network="google" class="social-account-button google-button">
                                        <i class="ti ti-google">
                                        </i>
                                        <span>Google</span>
                                    </button>
                                </div>
                                <div class="form-group">
                                    <button id="login-button" class="button action-button expand-center mb-15">
                                        <span class="label">Login</span>
                                        <span class="spinner"></span>
                                    </button>
                                </div>
                                <div class="form-group d-flex justify-content-between">
                                    <div class="d-flex flex-row align-items-center justify-content-start">
                                        <input type="checkbox"> <span class="ttm-textcolor-darkgrey">Remember Me</span>
                                    </div>
                                    <div class="d-flex flex-row align-items-center justify-content-end">
                                        <a href="forget_password.php" id="forgot-password-link" class="forgot-password-link">Forgot <u>Password?</u></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--login-section end-->

    </div><!--site-main end-->

    <?php
include('heading/footer.php');
?>

    <!-- Javascript -->

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery.easing.js"></script>    
    <script src="js/jquery-waypoints.js"></script>    
    <script src="js/jquery-validate.js"></script> 
    <script src="js/numinate.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/price_range_script.js"></script>
    <script src="js/easyzoom.js"></script>
    <script src="js/main.js"></script>
    <!-- Javascript end-->

</body>

<!-- Mirrored from themetechmount.com/html/fixfellow/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Jan 2023 05:09:32 GMT -->
</html>