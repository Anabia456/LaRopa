<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ledthanhdat.vn/html/lynessa/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 18:18:59 GMT -->
<head>
    <?php 
    include "css.php"
    ?>
</head>
<body class="single single-product">
 <!-- HEADER -->
 <?php
    include "header.php"
    ?>
    <!-- HEADER -->
<div class="banner-wrapper has_background">
<img src="../assets/images/banner-for-all2.jpg"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <!-- <div class="banner-wrapper-inner">
        <nav class="lynessa-breadcrumb"><a href="index.html">Home</a><i class="fa fa-angle-right"></i><a href="#">Shop</a>
            <i class="fa fa-angle-right"></i>Single Product
        </nav>
    </div> -->
</div>
<!-- ---------------------------  -->
<?php
include "connection.php";
$getid = $_GET['id'];
$query = "select * from product_tbl P inner join status_tbl S on P.status = S.s_id  where p_id = '$getid'";
$result = mysqli_query($connect,$query);
$fetch = mysqli_fetch_assoc($result);
$images = explode(",",$fetch['p_img']);
?>
<div class="single-thumb-vertical main-container shop-page no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="lynessa-notices-wrapper"></div>
                <div id="product-27"
                     class="post-27 product type-product status-publish has-post-thumbnail product_cat-table product_cat-new-arrivals product_cat-lamp product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-variable has-default-attributes">
                    <div class="main-contain-summary">
                        <div class="contain-left has-gallery">
                            <div class="single-left">
                                <div class="lynessa-product-gallery lynessa-product-gallery--with-images lynessa-product-gallery--columns-4 images">
                                    <!-- <a href="#" class="lynessa-product-gallery__trigger">
                                        <img draggable="false" class="emoji" alt="🔍" 
                                             src="https://s.w.org/images/core/emoji/11/svg/1f50d.svg"></a> -->
                                    <div class="flex-viewport">
                                        <figure class="lynessa-product-gallery__wrapper">
                                            <div class="lynessa-product-gallery__image">
                                                <img alt="img"
                                                     src="../images/<?php echo $images[0]?>" style="width:100%;height70%">
                                            </div>
                                            <div class="lynessa-product-gallery__image">
                                                <img src="../images/<?php echo $images[1]?>" style="width:100%;height70%"
                                                     alt="img">
                                            </div>
                                            <div class="lynessa-product-gallery__image">
                                                <img src="../images/<?php echo $images[2]?>" style="width:100%;height70%"
                                                     class="" alt="img">
                                            </div>
                                            <div class="lynessa-product-gallery__image">
                                                <img src="../images/<?php echo $images[3]?>" style="width:100%;height:70%"
                                                     class="" alt="img">
                                            </div>
                                        </figure>
                                    </div>
                                    <ol class="flex-control-nav flex-control-thumbs">
                                        <?php 
                                            for ($i=0; $i<count($images); $i++) {
                                        ?>
                                        <li><img
                                                src="../images/<?php echo $images[$i]?>"
                                                alt="img">
                                        </li>
                                        <?php        
                                            }
                                        ?>
                                        <!-- <li><img
                                                src="../images/<?php echo $images[0]?>"
                                                alt="img">
                                        </li>
                                        <li><img
                                                src="../images/<?php echo $images[1]?>"
                                                alt="img">
                                        </li>
                                        <li><img
                                                src="../images/<?php echo $images[2]?>"
                                                alt="img">
                                        </li> -->
                                        <!-- <li><img
                                                src="../images/<?php echo $images[3]?>"
                                                alt="img">
                                        </li> -->
                                    </ol>
                                </div>
                            </div>
                            <div class="summary entry-summary">
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <h1 class="product_title entry-title"><?php echo $fetch['p_name']?></h1>
                                <p class="price"><span class="lynessa-Price-amount amount"><span
                                        class="lynessa-Price-currencySymbol"></span><?php echo $fetch['p_price']?></span> PKR</p>
                                <p class="stock in-stock">
                                    Availability: <span><?php echo $fetch['p_availiblity']?></span>
                                </p>
                                <div class="lynessa-product-details__short-description">
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                        turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor
                                        sit amet, ante.</p>
                                    <ul>
                                        <li>Water-resistant fabric with soft lycra detailing inside</li>
                                        <li>CLean zip-front, and three piece hood</li>
                                        <li>Subtle branding and diagonal panel detail</li>
                                    </ul>
                                </div>
                                <?php
                                    $getname = $_GET['name'];
                                ?>
                                <form class="variations_form cart" action="addtocart.php?id=<?php echo $fetch['p_id']?>&name=<?php echo $getname?>" method="POST">
                                    <div class="single_variation_wrap">
                                        <div class="lynessa-variation single_variation"></div>
                                        <div class="lynessa-variation-add-to-cart variations_button ">
                                      
                                            <div class="quantity">
                                                <span class="qty-label">Quantity:</span>
                                                <div class="control">
                                                    <a class="btn-number qtyminus quantity-minus" href="#">-</a>

                                                    <input type="text" data-step="1" min="1" max="" name="qty" value="0" title="Qty" class="input-qty input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
                                                    <a class="btn-number qtyplus quantity-plus" href="#">+</a>
                                                </div>
                                            </div>
                                            <?php 
                                               
                                            if($fetch['p_availiblity'] == 'In Stock'){
                                            ?>
                                            <button type="submit" class="single_add_to_cart_button button alt lynessa-variation-selection-needed" >Add To Cart</button>
                                            
                                            <!-- <a href="addtocart.php?id=<?php echo $fetch['p_id']?>&name=<?php echo $getname?>&size=<?php echo $selectedSize?>" type="submit" class="single_add_to_cart_button button alt lynessa-variation-selection-needed" style="background-color:black;color:#fff;">Add To Cart</a> -->
                                            <br ><div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button show">
                                                    <a href="addtowishlist.php?id=<?php echo $fetch['p_id']?>&name=<?php echo $getname?>" rel="nofollow"
                                                    data-product-id="27" data-product-type="variable" class="add_to_wishlist">
                                                    Add to Wishlist</a>
                                                </div>
                                            </div>
                                            <?php 
                                            }else{
                                            ?>
                                            <br ><div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button show">
                                                    <a href="addtowishlist.php?id=<?php echo $fetch['p_id']?>&name=<?php echo $getname?>" rel="nofollow"
                                                    data-product-id="27" data-product-type="variable" class="add_to_wishlist">
                                                    Add to Wishlist</a>
                                                </div>
                                            </div>
                                            <?php   
                                            }
                                            ?>
                                            <!-- <button type="submit" class="single_add_to_cart_button button alt lynessa-variation-selection-needed" >Add To Cart</button> -->
                                            <!-- <a href="addtocart.php?id=<?php echo $fetch['p_id']?>&name=<?php echo $getname?>" type="submit" class="single_add_to_cart_button button alt lynessa-variation-selection-needed" style="background-color:black;color:#fff;">Add To Cart</a> -->
                                            <!-- <input name="add-to-cart" value="27" type="hidden">
                                            <input name="product_id" value="27" type="hidden">
                                            <input name="variation_id" class="variation_id" value="0" type="hidden"> -->
                                        </div>
                                    </div>
                                </form>
                                <!-- <div class="yith-wcwl-add-to-wishlist">
                                    <div class="yith-wcwl-add-button show">
                                        <a href="#" rel="nofollow"
                                           data-product-id="27" data-product-type="variable" class="add_to_wishlist">
                                            Add to Wishlist</a>
                                    </div>
                                </div> -->
                                <div class="clear"></div>
                                <!-- <a href="#"
                                   class="compare button" data-product_id="27" rel="nofollow">Compare</a> -->
                                <div class="product_meta">
                                    <div class="wcml-dropdown product wcml_currency_switcher">
                                        <ul>
                                            <li class="wcml-cs-active-currency">
                                                <a class="wcml-cs-item-toggle">USD</a>
                                                <ul class="wcml-cs-submenu">
                                                    <li>
                                                        <a>EUR</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- <span class="sku_wrapper">SKU: <span class="sku">885B712</span></span> -->
                                    <p class="stock in-stock">

                                        Categories: <span> <?php echo $fetch['s_status']?></span>
                                    </p>
                                </div>
                                <div class="lynessa-share-socials">
                                    <h5 class="social-heading">Share: </h5>
                                    <a target="_blank" class="facebook" href="#">
                                        <i class="fa fa-facebook-f"></i>
                                    </a>
                                    <a target="_blank" class="twitter"
                                       href="#"><i class="fa fa-twitter"></i>
                                    </a>
                                    <a target="_blank" class="pinterest"
                                       href="#"> <i class="fa fa-pinterest"></i>
                                    </a>
                                    <a target="_blank" class="googleplus"
                                       href="#"><i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        
           
        </div>
    </div>
</div>

<!-- ---------------------------------  -->

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

<!-- Mirrored from ledthanhdat.vn/html/lynessa/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 18:19:55 GMT -->
</html>

  <!-- <div class="control"> -->
                                                <!-- <?php
                                                    $size = explode(",",$fetch['p_size']);
                                                    ?>
                                                    <input type="radio" name="size" value="<?php echo $size[0]?>" id="">&nbsp; <span><?php echo $size[0]?></span>&nbsp;&nbsp;
                                                    <input type="radio" name="size" value="<?php echo $size[1]?>" id="">&nbsp; <span><?php echo $size[1]?></span>&nbsp;&nbsp;
                                                    <input type="radio" name="size" value="<?php echo $size[2]?>" id="">&nbsp; <span><?php echo $size[2]?></span>&nbsp;&nbsp; -->
                                                <!-- </div> -->