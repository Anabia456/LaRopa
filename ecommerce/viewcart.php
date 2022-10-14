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
        <h1 class="page-title">Cart</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.html"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Cart</span>
                </li>
            </ul>
        </div>
    </div>
</div>
    <?php
        include "connection.php";
        // session_start();
        if (!empty($_SESSION['myCart'])) {
            $price = 0;
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
                                    <thead>
                                    <tr>
                                        <th class="product-remove">&nbsp;</th>
                                        <th class="product-thumbnail">&nbsp;</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        for ($i=0; $i < count($_SESSION['myCart']); $i++) { 
                                            $query = "select * from product_tbl where p_id = ". $_SESSION['myCart'][$i];
                                            $result = mysqli_query($connect,$query);
                                            $row = mysqli_fetch_assoc($result);
                                            $images = explode(",",$row['p_img']);
                                            $price += $row['p_price'] * $_SESSION['myQty'][$i];
                                        ?>
                                        <tr class="lynessa-cart-form__cart-item cart_item">
                                            <td class="product-remove">
                                                <a href="deleteCartItem.php?id=<?php echo $row['p_id']?>&index=<?php echo $i?>&name=viewcart.php"
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
                                                <form class="variations_form cart" action="viewcart.php?id=<?php echo $row['p_id']?>" method="POST">
                                                    <td class="product-quantity" data-title="Quantity">
                                                        <div class="quantity">
                                                            <span class="qty-label">Quantity:</span>
                                                            <div class="control">
                                                                <input type="text" readonly data-step="1" min="1" name="qty" value="<?php echo $_SESSION['myQty'][$i]?> "title="Qty" class="input-qty input-text qty text" inputmode="numeric">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="product-subtotal" data-title="Total">
                                                        <span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol"></span><?php echo $row['p_price'] * $_SESSION['myQty'][$i]?></span> Rs
                                                    </td>
                                                
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                    
                                    </form>

                                    </tbody>
                                </table>
                            </form>
                            <div class="cart-collaterals">
                                <div class="cart_totals ">
                                    <h2>Cart Totals</h2>
                                    <table class="shop_table shop_table_responsive" cellspacing="0">
                                        <tbody>
                                        <!-- <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td data-title="Subtotal"><span class="lynessa-Price-amount amount"><span
                                                    class="lynessa-Price-currencySymbol"></span><?php echo $price?></span> PKR</td>
                                        </tr> -->
                                        <tr class="order-total">
                                            <th>SubTotal</th>
                                            <td data-title="Total"><strong><span
                                                    class="lynessa-Price-amount amount"><span
                                                    class="lynessa-Price-currencySymbol"></span><?php echo $price?></span> PKR</strong>
                                            </td>
                                        </tr>
                                        
                                        </tbody>
                                    </table>
                                    <?php
                                        if (isset($_SESSION['uName'])) {
                                    ?>
                                        <div class="lynessa-proceed-to-checkout">
                                        <a href="checkout.php"
                                        class="checkout-button button alt lynessa-forward">
                                            Proceed to checkout</a>
                                        </div>
                                    <?php
                                        }else{
                                    ?>
                                        <div class="lynessa-proceed-to-checkout">
                                        <a href="login.php?name=viewcart.php"
                                        class="checkout-button button alt lynessa-forward">
                                            Proceed to checkout</a>
                                        </div>  
                                    <?php
                                        }
                                    ?>
                                    
                                </div>
                            </div>

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
            <h1 class="display-1">Cart Is Empty</h1>
            <a href="index.php" class="btnSign">Continue Shopping</a>
        </div><br><br>
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