<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ledthanhdat.vn/html/lynessa/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 18:14:47 GMT -->
<?php 
    include "css.php";
?>
<body>
<!-- HEADER -->
<?php
include "header.php";
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
                                <h2>Register</h2>
                                <?php 
                                    if (isset($_SESSION['alreadyTaken'])) {
                                    ?>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Hey!</strong> <?php echo $_SESSION['alreadyTaken'];?>
                                        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php   
                                        unset($_SESSION['alreadyTaken']); 
                                    }else{
                                        echo "";
                                    }
                                    ?>
                                <form method="POST" action="" class="lynessa-form lynessa-form-register register">
                               
                                    <div class="form-group">
                                      <label style="float:left; font-size: 15px;">
                                        <b>Username<span style="color: red;">*</span></b>
                                      </label>
                                      <input type="text"
                                          class="form-control" name="uName" size="45" pattern="[A-Z,a-z]{3,50}" placeholder="Enter your username" 
                                          required>
                                    </div>

                                    <div class="form-group">
                                      <label style="float:left; font-size: 15px;">
                                        <b>Phone Number<span style="color: red;">*</span></b>
                                      </label>
                                      <input type="tel"
                                          class="form-control" name="uphone" placeholder="format (1234) - 4567890" 
                                          required pattern="[0-9]{4}-[0-9]{7}">
                                    </div>

                                    <div class="form-group">
                                      <label style="float:left; font-size: 15px;">
                                          <b>Email Address<span style="color: red;">*</span></b>
                                      </label>
                                      <input type="email"
                                        id="email"
                                        class="form-control" name="uEmail" placeholder="Enter your email" 
                                        pattern='^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$'
                                        required>
                                    </div>

                                    <div class="form-group">
                                      <label style="float:left; font-size: 15px;">
                                          <b>Password<span style="color: red;">*</span></b>
                                      </label>
                                      <input type="password"
                                        id="password" class="form-control" name="uPassword" placeholder="Enter your password" 
                                        pattern=".{8,}" title="Eight or more characters" required>
                                    </div>

                                    <div class="form-group">
                                      <label style="float:left; font-size: 15px;">
                                        <b>Home Address<span style="color: red;">*</span></b>
                                      </label>
                                      <input type="text"
                                          class="form-control" name="uaddress" placeholder="Enter your address" 
                                          required>
                                    </div>

                                    <div class="form-group">
                                      <label style="float:left; font-size: 15px;">
                                        <b>Country<span style="color: red;">*</span></b>
                                      </label>
                                      <input type="text"
                                          class="form-control" name="ucountry" placeholder="Enter country" 
                                          required>
                                    </div>

                                    <div class="form-group">
                                      <label style="float:left; font-size: 15px;">
                                        <b>Town / City<span style="color: red;">*</span></b>
                                      </label>
                                      <input type="text"
                                          class="form-control" name="ucity" placeholder="Enter city" 
                                          required>
                                    </div>

                                    <div class="lynessa-privacy-policy-text"><p>Your personal data will be used to
                                        support your experience throughout this website, to manage access to your
                                        account, and for other purposes described in our <a
                                        href="#" class="lynessa-privacy-policy-link"
                                        target="_blank">privacy policy</a>.</p>
                                    </div>
                                    
                                      <input type="submit" name="regBtn" value="Register" id="submitbtn" class="lynessa-Button button">
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
</html> 

<?php

    if( isset($_POST['regBtn']) ){

        include "connection.php";
        $uName = $_POST['uName'];
        $uEmail = $_POST['uEmail'];
        $uPhone = $_POST['uphone'];
        $uAddress = $_POST['uaddress'];
        $uCountry = $_POST['ucountry'];
        $uCity = $_POST['ucity'];
        $uPassword = $_POST['uPassword'];
        $encryptPassword = md5($uPassword);

        $selQuery = mysqli_query($connect,"Select * from user_tbl where u_name = '$uName'");
        // echo $selQuery;

        if (mysqli_num_rows($selQuery) == 0) {
            $insertQuery = "INSERT INTO `user_tbl`(`u_name`,`u_role`,`u_phone` ,`u_email`, `u_password`,`u_address`, `u_country`, `u_city`) VALUES ('$uName', 'customer','$uPhone','$uEmail','$encryptPassword','$uAddress','$uCountry','$uCity')";
            $result = mysqli_query($connect,$insertQuery);
            if(!$result){
                echo "Try to insert data again!!";
            }
            else{
                echo "Data Inserted!!";
                echo  "<script>window.location.assign('login.php')</script>";
            }
        }
        else{
            echo  "<script>window.location.assign('register.php')</script>";
            $_SESSION['alreadyTaken']= "The entered Username is already taken!!";
        }

        


        // $email = "bia.ahmed202@gmail.com";
        // $header = 'From:' . $uEmail;
        // mail($uEmail, "La Ropa", "Thanks For Signing up on La Ropa", $header);
        // echo "Mail";
    }

?>
