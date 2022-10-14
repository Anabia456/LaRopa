<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ledthanhdat.vn/html/lynessa/edit-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 18:20:10 GMT -->
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
        <br><br><br><br><br><br>
        <h1 class="page-title">Edit Profile</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.php"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Edit Profile</span>
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
                                    <a href="orders.php">Orders</a>
                                </li>
                                <li class="lynessa-MyAccount-navigation-link lynessa-MyAccount-navigation-link--edit-address">
                                    <a href="Profile.php">My Profile</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="lynessa-MyAccount-content">
                            <div class="lynessa-notices-wrapper"></div>
                            <form class="lynessa-EditAccountForm edit-account" action="#" method="post">
                                <p class="lynessa-form-row lynessa-form-row--first form-row form-row-first">
                                    <label for="account_first_name">First name&nbsp;<span
                                            class="required">*</span></label>
                                    <input type="text" class="lynessa-Input lynessa-Input--text input-text"
                                           name="account_first_name" id="account_first_name" autocomplete="given-name"
                                           value="Annie">
                                </p>
                                <p class="lynessa-form-row lynessa-form-row--last form-row form-row-last">
                                    <label for="account_last_name">Last name&nbsp;<span
                                            class="required">*</span></label>
                                    <input type="text" class="lynessa-Input lynessa-Input--text input-text"
                                           name="account_last_name" id="account_last_name" autocomplete="family-name"
                                           value="Taylor">
                                </p>
                                <div class="clear"></div>
                                <p class="lynessa-form-row lynessa-form-row--wide form-row form-row-wide">
                                    <label for="account_display_name">Display name&nbsp;<span class="required">*</span></label>
                                    <input type="text" class="lynessa-Input lynessa-Input--text input-text"
                                           name="account_display_name" id="account_display_name" value="admin">
                                    <span><em>This will be how your name will be displayed in the account section and in reviews</em></span>
                                </p>
                                <div class="clear"></div>
                                <p class="lynessa-form-row lynessa-form-row--wide form-row form-row-wide">
                                    <label for="account_email">Email address&nbsp;<span
                                            class="required">*</span></label>
                                    <input type="email" class="lynessa-Input lynessa-Input--email input-text"
                                           name="account_email" id="account_email" autocomplete="email"
                                           value="lynessa@example.com">
                                </p>
                                <fieldset>
                                    <legend>Password change</legend>
                                    <p class="lynessa-form-row lynessa-form-row--wide form-row form-row-wide">
                                        <label for="password_current">Current password (leave blank to leave
                                            unchanged)</label>
                                        <input type="password"
                                               class="lynessa-Input lynessa-Input--password input-text"
                                               name="password_current" id="password_current" autocomplete="off">
                                    </p>
                                    <p class="lynessa-form-row lynessa-form-row--wide form-row form-row-wide">
                                        <label for="password_1">New password (leave blank to leave unchanged)</label>
                                        <input type="password"
                                               class="lynessa-Input lynessa-Input--password input-text"
                                               name="password_1" id="password_1" autocomplete="off">
                                    </p>
                                    <p class="lynessa-form-row lynessa-form-row--wide form-row form-row-wide">
                                        <label for="password_2">Confirm new password</label>
                                        <input type="password"
                                               class="lynessa-Input lynessa-Input--password input-text"
                                               name="password_2" id="password_2" autocomplete="off">
                                    </p>
                                </fieldset>
                                <div class="clear"></div>
                                <p>
                                    <input type="hidden" id="save-account-details-nonce"
                                           name="save-account-details-nonce" value="">
                                    <input type="hidden" name="_wp_http_referer" value="">
                                    <button type="submit" class="lynessa-Button button" name="save_account_details"
                                            value="Save changes">Save changes
                                    </button>
                                    <input type="hidden" name="action" value="save_account_details">
                                </p>
                            </form>
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

<!-- Mirrored from ledthanhdat.vn/html/lynessa/edit-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 18:20:10 GMT -->
</html>