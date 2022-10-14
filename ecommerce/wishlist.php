<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ledthanhdat.vn/html/lynessa/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 18:14:49 GMT -->
<head>
    <?php 
    include "css.php"
    ?>
</head>
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
        <br><br><br><br><br><br><br>
        <h1 class="page-title">Wishlist</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.php"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Wishlist</span>
                </li>
            </ul>
        </div>
    </div>
</div>
    <?php
        include "connection.php";
        // session_start();
        if (!empty($_SESSION['wishlist'])) {
    ?>
    <main class="site-main main-container no-sidebar">
        <div class="container">
            <div class="row">
                <div class="main-content col-md-12">
                    <div class="page-main-content">
                        <div class="lynessa">
                            <div class="lynessa-notices-wrapper"></div>
                            <form class="lynessa-cart-form">
                                <table class="shop_table shop_table_responsive cart lynessa-cart-form__contents"
                                    cellspacing="0">
                                    
                                    <tbody>
                                        <?php
                                        for ($i=0; $i < count($_SESSION['wishlist']); $i++) { 
                                            $query = "select * from product_tbl where p_id = ". $_SESSION['wishlist'][$i];
                                            $result = mysqli_query($connect,$query);
                                            $row = mysqli_fetch_assoc($result);
                                            $images = explode(",",$row['p_img']);
                                        ?>
                                        <tr class="lynessa-cart-form__cart-item cart_item">
                                            <td class="product-remove">
                                                <a href="deletewishlistitem.php?id=<?php echo $row['p_id']?>&index=<?php echo $i?>&name=wishlist.php"
                                                class="remove" aria-label="Remove this item" data-product_id="27"
                                                data-product_sku="885B712">×</a></td>
                                            <td class="product-thumbnail">
                                                <a href="#"><img
                                                        src="../images/<?php echo $images[0]?>"
                                                        class="attachment-lynessa_thumbnail size-lynessa_thumbnail"
                                                        alt="img" width="600" height="778"></a></td>
                                            <td class="product-name" data-title="Product">
                                                <a href="#" style="pointer-events: none;cursor:default;"><?php echo $row['p_name']?></a>
                                            </td>
                                            <td class="product-price" data-title="Price">
                                                <span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol"></span><?php echo $row['p_price']?></span> Rs</td>
                                            <td class="product-availbility">
                                                <span class="lynessa-Price-amount amount"><span
                                            class="lynessa-Price-currencySymbol"></span><?php echo $row['p_availiblity']?></span></td>
                                            <?php 
                                            if($row['p_availiblity']=='In Stock'){
                                            ?>
                                            <td class="product-add-to-cart">
                                                <a href="addtocart.php?id=<?php echo $row['p_id']?>&name=wishlist.php"
                                                data-quantity="1"
                                                class="btn single_add_to_cart_button button alt lynessa-variation-selection-needed"
                                                data-product_id="25" data-product_sku="018Q711"
                                                aria-label="Add “HEM SMOCKING” to your cart" rel="nofollow"> Add to
                                                    Cart</a>
                                            </td>
                                            <?php
                                            }
                                            ?>
                                            
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
        }
        else{
    ?>
        <div class="w-50 mx-auto mt-5 text-center">
            <h1 class="display-1">Wishlist Is Empty</h1>
            <a href="index.php" class="btnSign">Continue Shopping</a>
        </div>
        <br><br>
    <?php
        }
    ?>
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

<!-- Mirrored from ledthanhdat.vn/html/lynessa/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 18:14:55 GMT -->
</html>