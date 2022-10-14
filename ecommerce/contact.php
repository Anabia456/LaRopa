<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include "css.php"
    ?>
</head>
<body>
    <?php
        include "header.php"
    ?>
    <?php
        include "connection.php";
        if(isset($_POST['send'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $msg = $_POST['message'];
            $query = "INSERT INTO `contact_tbl`(`c_name`, `c_email`, `c_msg`) VALUES ('$name','$email','$msg')";
            $result = mysqli_query($connect,$query);
            // echo "<script>alert('Message Sent!!')</script>";
        }
    ?>
<div class="banner-wrapper has_background">
    <img src="../assets/images/banner-for-all2.jpg"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
       <br><br><br><br><br><br><br><h1 class="page-title">Contact</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.php"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Contact</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="site-main main-container no-sidebar">
    <div class="section-041">
        <div class="container">
            <div class="google-map">
                <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </div>
    <div class="section-042">
        <div class="container">
            <div class="row">
                <div class="col-md-12 offset-xl-1 col-xl-10 col-lg-12">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="az_custom_heading">WP SHOP THEME</h4>
                            <p>3100 West Cary Street Richmond, Virginia 23221<br>
                                P: 804.355.4383 F: 804.367.7901</p>
                            <h4 class="az_custom_heading">Store Hours</h4>
                            <p>Monday-Saturday 11am-7pm ET<br>
                                Sunday 11am-6pm ET</p>
                            <h4 class="az_custom_heading">Specialist Hours</h4>
                            <p>Monday-Friday 9am-5pm ET</p>
                        </div>
                        <div class="col-md-6">
                            <div role="form" class="wpcf7">
                                <form class="wpcf7-form" action="" method="POST">
                                    <p><label> Username *<br>
                                        <span class="wpcf7-form-control-wrap your-name">
                                            <input name="name" value="" size="40" required
                                                   class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                   type="text"></span>
                                    </label></p>
                                    <p><label> Email Address*<br>
                                        <span class="wpcf7-form-control-wrap your-email">
                                            <input name="email" value="" size="40" 
                                                pattern='^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$'
                                                required
                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                type="email"></span>
                                    </label></p>
                                    <p><label> Your Message *<br>
                                        <span class="wpcf7-form-control-wrap your-message">
                                            <textarea name="message" required
                                                      cols="40" rows="10"
                                                      class="wpcf7-form-control wpcf7-textarea"></textarea></span>
                                    </label></p>
                                    <p><input value="Send" name="send" class="wpcf7-form-control wpcf7-submit" type="submit"></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FOOTER -->
<?php
include "footer.php";
?>
<!-- FOOTER -->
<a href="#" class="backtotop active">
    <i class="fa fa-angle-up"></i>
</a>
<!-- SCRIPTS -->
<?php
include "scripts.php";
?>
<!-- SCRIPTS -->
</body>
</html>