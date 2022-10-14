<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ledthanhdat.vn/html/lynessa/edit-address.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 18:20:10 GMT -->
<head>
    <?php 
        include "css.php";
    ?>
</head>
<body>
<?php 
    include "header.php";
?>
<div class="banner-wrapper has_background">
    <img src="../assets/images/banner-for-all2.jpg"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <br><br><br><br>
        <br><br>
        <h1 class="page-title">My Profile</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.html"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>My Profile</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<main class="site-main  main-container no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="page-main-content">
                    <div class="lynessa">
                        <nav class="lynessa-MyAccount-navigation">
                            <ul>
                                <li class="lynessa-MyAccount-navigation-link lynessa-MyAccount-navigation-link--orders ">
                                    <a href="orders.php" style="font-size:30px;">Orders</a>
                                </li>
                                <li class="lynessa-MyAccount-navigation-link lynessa-MyAccount-navigation-link--edit-address">
                                    <a href="Profile.php" style="font-size:20px;">My Profile</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="lynessa-MyAccount-content">
                            <div class="lynessa-notices-wrapper"></div>
                            <p>
                                The following user details will be used on the checkout page by default.</p>
                            <div class="u-columns lynessa-Addresses col2-set addresses">
                                <div class="u-column1 col-1 lynessa-Address">
                                    <header class="lynessa-Address-title title">
                                        <h3 style="font-size:30px;">User Details</h3>
                                    </header>
                                    <address>
                                    <b style="font-size:16px;">Name : </b> <?php echo $_SESSION['uName']?>
                                    <br><b style = "font-size:16px;">Email : </b> <?php echo $_SESSION['uEmail']?>
                                    <br><b style = "font-size:16px;">Phone : </b> <?php echo $_SESSION['uPhone']?>
                                    <br><b style = "font-size:16px;">Country : </b> <?php echo $_SESSION['uCountry']?>
                                    <br><b style = "font-size:16px;">City : </b> <?php echo $_SESSION['uCity']?></address>
                                </div>
                                <div class="u-column2 col-2 lynessa-Address">
                                    <header class="lynessa-Address-title title">  
                                    <div class="block-search">                      
                                        <a href="editprofile.php" class="btnSign">EDIT</a>
                                    </div>                                    
                                    </header>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php 
    include "footer.php";
?>

<a href="#" class="backtotop active">
    <i class="fa fa-angle-up"></i>
</a>
<?php 
    include "scripts.php";
?>
</body>

<!-- Mirrored from ledthanhdat.vn/html/lynessa/edit-address.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 18:20:10 GMT -->
</html>