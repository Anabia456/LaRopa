<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ledthanhdat.vn/html/lynessa/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 18:14:55 GMT -->
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
        <br><br><br><br><br><br><br>
        <h1 class="page-title">Checkout</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.html"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Checkout</span>
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
                        <div class="lynessa-notices-wrapper"></div>
                        <div class="checkout-before-top">                         
                        </div>
                        <form name="checkout" method="POST" class="checkout lynessa-checkout"
                              enctype="multipart/form-data"
                              novalidate="novalidate">
                            <div class="col2-set" id="customer_details">
                                <div class="col-1">
                                    <div class="lynessa-billing-fields">
                                        <h3>Billing details</h3>
                                        <div class="lynessa-billing-fields__field-wrapper">
                                            <p class="form-row form-row-first validate-required"
                                               id="billing_first_name_field" data-priority="10"><label
                                                    for="billing_first_name" class="">Username&nbsp;<abbr
                                                    class="required" title="required">*</abbr></label><span
                                                    class="lynessa-input-wrapper"><input type="text"
                                                    class="input-text "
                                                    name="u_name"
                                                    id="billing_first_name"
                                                    placeholder="" disabled value="<?php echo $_SESSION['uName']?>"
                                                    autocomplete="given-name"></span>
                                            </p>
                                            <p class="form-row form-row-last validate-required validate-email"
                                               id="billing_email_field" data-priority="110"><label for="billing_email"
                                                                                                   class="">Email
                                                address&nbsp;<abbr class="required"
                                                                   title="required">*</abbr></label><span
                                                    class="lynessa-input-wrapper"><input type="email"
                                                    class="input-text "
                                                    name="u_email"
                                                    id="billing_email"
                                                    placeholder=""  disabled value="<?php echo $_SESSION['uEmail']?>"
                                                    autocomplete="email username"></span>
                                                    
                                            </p>
                                            
                                            <p class="form-row form-row-wide address-field update_totals_on_change validate-required"
                                               id="u_country" data-priority="40"><label
                                                    for="billing_country" class="">Country&nbsp;<abbr></abbr></label>
                                                
                                                <span
                                                    class="lynessa-input-wrapper"><input type="text" required
                                                                                             class="input-text "
                                                                                             name="u_country"
                                                                                             id="billing_address_1"
                                                                                             placeholder="" disabled value="<?php echo $_SESSION['uCountry']?>"
                                                                                             autocomplete="address-line1"
                                                                                             data-placeholder="House number and street name"></span>
                                            </p>
                                            <p class="form-row form-row-wide address-field"
                                               id="billing_address_1_field" data-priority="50"><label
                                                    for="billing_address_1" class="">Street address&nbsp;<abbr
                                                    class="required" title="required">*</abbr></label>
                                                    <span
                                                    class="lynessa-input-wrapper"><input type="text"
                                                                                             name="u_address"
                                                                                             id="billing_address_1"
                                                                                             disabled value="<?php echo $_SESSION['uAddress']?>"
                                                                                             required></span>
                                            </p>

                                            <p class="form-row form-row-wide address-field validate-required"
                                               id="billing_city_field" data-priority="70"
                                               data-o_class="form-row form-row-wide address-field validate-required">
                                                <label for="billing_city" class="">Town / City&nbsp;<abbr
                                                        class="required" title="required">*</abbr></label><span
                                                    class="lynessa-input-wrapper"><input type="text"
                                                                                             class="input-text "
                                                                                             name="u_city"
                                                                                             id="billing_city"
                                                                                             disabled value="<?php echo $_SESSION['uCity']?>"
                                                                                             autocomplete="address-level2" required></span>
                                            </p>

                                            <p class="form-row form-row-wide validate-required validate-phone"
                                               id="billing_phone_field" data-priority="100"><label for="billing_phone"
                                                                                                   class="">Phone&nbsp;<abbr
                                                    class="required" title="required">*</abbr></label><span
                                                    class="lynessa-input-wrapper"><input type="tel"
                                                                                             name="u_phone"
                                                                                             id="billing_phone"
                                                                                             disabled value="<?php echo $_SESSION['uPhone']?>"></span>
                                            </p>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <h3 id="order_review_heading">Your order</h3>
                            <div id="order_review" class="lynessa-checkout-review-order">
                                <table class="shop_table lynessa-checkout-review-order-table">
                                    <thead>
                                    <tr>
                                        <th class="product-name">Product</th>
                                        <th class="product-total">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include "connection.php";
                                            $price = 0;
                                            for ($i=0; $i < count($_SESSION['myCart']); $i++) { 
                                                $query = "Select * from product_tbl where p_id = ". $_SESSION['myCart'][$i];
                                                $result = mysqli_query($connect,$query);
                                                $fetch = mysqli_fetch_assoc($result);
                                                $explodeImages = explode(",",$fetch['p_img']);
                                                $price += $fetch['p_price'] * $_SESSION['myQty'][$i] ;
                                        ?>
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            <?php echo $fetch['p_name']?>&nbsp;&nbsp; <strong class="product-quantity">×
                                            <?php echo $_SESSION['myQty'][$i]?></strong></td>
                                        <td class="product-total">
                                            <span class="lynessa-Price-amount amount"><span
                                                    class="lynessa-Price-currencySymbol"></span><?php echo $fetch['p_price'] * $_SESSION['myQty'][$i]?></span> PKR</td>
                                    </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td><span class="lynessa-Price-amount amount"><span
                                                class="lynessa-Price-currencySymbol"></span><?php echo $price?></span> PKR</td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td><strong><span class="lynessa-Price-amount amount"><span
                                                class="lynessa-Price-currencySymbol"></span><?php echo $price?></span> PKR</strong>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                                <input type="hidden" name="lang" value="en">
                                        <button type="submit" class="button alt" name="place_order"
                                                id="place_order" value="Place order" data-value="Place order">Place
                                            order
                                        </button>
                            </div>
                        </form>
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

<!-- Mirrored from ledthanhdat.vn/html/lynessa/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 18:14:57 GMT -->
</html>

<?php
    include "connection.php";
    $permitted_chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

    function generate_string($input, $strength = 6){
        $input_length = strlen($input);
        $random_string = '';
        for ($i=0; $i < $strength; $i++) { 
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }

        return $random_string;
    }

    if(isset($_POST['place_order'])){
        $unique_order_num = generate_string($permitted_chars,8);
        $u_name = $_SESSION["uId"];
        $u_email = $_SESSION["uId"];
        $cart = $_SESSION['myCart'];
        $u_product = implode(",",$cart);
        $u_product_qty = implode(",",$_SESSION['myQty']);
        $uPhone = $_SESSION["uId"];
        $uAddress = $_SESSION["uId"];
        $uCountry = $_SESSION["uId"];
        $uCity = $_SESSION["uId"];
        $u_price = $price;
        // echo $q;

        $insertQuery = "INSERT INTO `order_tbl`(`unique_order_num`, `u_name`, `o_status`, `pro_id`, `p_size`, `pro_qty`, `o_price`, `payment_method`) VALUES ('$unique_order_num','$u_name','Pending', '$u_product', '',$u_product_qty', '$u_price','Cash on delivery')";
        // unset($_SESSION['myCart']);
        // unset($_SESSION['myQty']);
        echo "<script>window.location.assign('msg.php')</script>";
    }
?>