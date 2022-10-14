<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
include "css.php";
?>
</head>
<body>
<!-- HEADER -->
    <?php
        include "header.php";
        if (isset($_POST['logBtn'])) {
            include "connection.php";

            $email = $_POST['email'];
            $password = $_POST['password'];
            $decryptedPassword = md5($password);
            $selectQuery = "Select * from `user_tbl` where u_email = '$email' AND u_password = '$decryptedPassword'";
            $result = mysqli_query($connect,$selectQuery);
            $fetch = mysqli_fetch_assoc($result);

            if ($fetch) {
                $_SESSION["uId"] = $fetch["u_id"];
                $_SESSION["uName"] = $fetch["u_name"];
                $_SESSION["uRole"] = $fetch["u_role"];
                $_SESSION["uEmail"] = $fetch["u_email"];
                $_SESSION["uPhone"] = $fetch["u_phone"];
                $_SESSION["uAddress"] = $fetch["u_address"];
                $_SESSION["uCountry"] = $fetch["u_country"];
                $_SESSION["uCity"] = $fetch["u_city"];
                if($_GET['name'] == 'viewcart.php'){
                    echo "<script>window.location.assign('checkout.php')</script>";
                }
                else{
                    echo "<script>window.location.assign('index.php')</script>";
                }
                // echo $_SESSION['uName'];
            }
            else{
                echo "<script>alert('Wrong Email OR Password!!')</script>";
            }

        };
    ?>

<!-- HEADER -->
<div class="banner-wrapper has_background">
    <img src="../assets/images/banner-for-all2.jpg"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
    <br><br><br><br><br><br><br><h1 class="page-title">My Account</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.php"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>My Account</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<main class="site-main  main-container no-sidebar">
    <div class="container">
        <div class="row">
          <div class="col-md-3">

          </div>
            <div class="main-content col-md-6">
                <div class="page-main-content">
                    <div class="lynessa">
                        <div class="lynessa-notices-wrapper"></div>
                        <div class="u-columns" id="customer_login">
                            <div class="text-center">
                                <h2 class="text-center">Login</h2>
                                <form class="lynessa-form lynessa-form-login login" method="POST" action="">
                                <p class="lynessa-form-row lynessa-form-row--wide form-row form-row-wide">
                                    <label for="username">Username or email address&nbsp;<span>*</span></label>
                                        <input type="email"
                                            id="email" name="email" class="form-control"
                                            pattern='^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$'
                                            required>
                                </p>

                                <p class="lynessa-form-row lynessa-form-row--wide form-row form-row-wide">
                                    <label for="password">Password&nbsp;<span>*</span></label>
                                        <input class="lynessa-Input lynessa-Input--text input-text"
                                               type="password" name="password" id="password"
                                               pattern=".{8,}" 
                                               required 
                                               title="Eight or more characters">
                                    </p>

                                <!-- <div class="form-group">
                                    <label style="float:left; font-size: 15px;">
                                        <b>Email Address</b>
                                    </label>
                                    <input type="email" name="email"
                                        placeholder="Enter your email"
                                        pattern='^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@
                                        ((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$'
                                        required
                                        class="form-control">
                                </div>

                                <div class="form-group">
                                    <label style="float:left; font-size: 15px;">
                                        <b>Password</b>
                                    </label>
                                    <input type="password" name="password"
                                        placeholder="Enter your password" 
                                        pattern=".{8,}" 
                                        required 
                                        title="Eight or more characters" 
                                        class="form-control">
                                </div> -->
                                    
                                    <p class="form-row">

                                    <input type="submit" name="logBtn" value="Log in" id="submitbtn" class="lynessa-Button button">

                                    </p>
                                    <p class="lynessa-LostPassword lost_password">
                                        <a href="register.php">Lost your
                                            password? | Register Again!</a>
                                    </p>
                                    <div class="lynessa-social-login">
                                        <h6>Connect a social network</h6>
                                        <ul>
                                            <li>
                                                <a class="login-facebook" href="#" target="_blank">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a  class="login-google" href="#" target="_blank">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a  class="login-twitter" href="#" target="_blank">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

          </div>
        </div>
    </div>
</main>
<!-- FOOTER -->
<?php 
include "footer.php" 
?>
<!-- FOOTER -->
<a href="#" class="backtotop active">
    <i class="fa fa-angle-up"></i>
</a>
<?php
include "scripts.php";
?>
</body>

<!-- Mirrored from ledthanhdat.vn/html/lynessa/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 18:14:49 GMT -->
</html>                         