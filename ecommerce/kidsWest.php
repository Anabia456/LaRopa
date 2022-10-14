
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ledthanhdat.vn/html/lynessa/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 18:18:05 GMT -->
<head>
    <?php 
    include "css.php"
    ?>
</head>
<body>
<?php
        session_start();

        if(!isset($_SESSION['myCart'])){
            $_SESSION['myCart'] = array();
        }

        if (!isset($_SESSION['myQty'])) {
            $_SESSION['myQty'] = array();
        }
    ?>
    <!-- HEADER -->
    <?php
    include "header.php"
    ?>
    <!-- HEADER -->
    
    <div class="banner-wrapper has_background">
    <img src="../assets/images/banner-for-all2.jpg"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img">

    <!-- <div class="banner-wrapper-inner">
        <div class="container lynessa-categories style-02">
            <div class="categories-list-owl owl-slick equal-container better-height"
                 data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:60,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:6,&quot;rows&quot;:1}"
                 data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesMargin&quot;:&quot;30&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:6,&quot;slidesMargin&quot;:&quot;40&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:6,&quot;slidesMargin&quot;:&quot;50&quot;}}]">
                    <h1 class="page-title">Shop</h1>
            </div>
        </div>
    </div> -->
</div>
<br><br><br><br>
<div class="banner-wrapper-inner">
        <div class="container lynessa-categories style-02">
            <div class="categories-list-owl owl-slick equal-container better-height"
                 data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:60,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:6,&quot;rows&quot;:1}"
                 data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesMargin&quot;:&quot;30&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:6,&quot;slidesMargin&quot;:&quot;40&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:6,&quot;slidesMargin&quot;:&quot;50&quot;}}]">
                 <div class="categories-item rows-space-0 post-740 page type-page status-publish hentry">
                    <div class="categories-inner">
                        <!-- <figure class="categories-thumb">
                            <a href="kidsfootwear.php" tabindex="0">
                                <img src="../assets/images/kidshoeimg.jpg"
                                     class="img-responsive attachment-370x370 size-370x370" alt="img"> </a>
                        </figure>
                        <h3 class="title">
                            <a href="kidsfootwear.php" tabindex="0">
                                Footwear </a>
                        </h3> -->
                    </div>
                </div>
                 <div class="categories-item rows-space-0 post-740 page type-page status-publish hentry">
                    <div class="categories-inner">
                        <figure class="categories-thumb">
                            <a href="kidsEast.php" tabindex="-1">
                                <img src="../assets/images/kideastimg.jpg"
                                     class="img-responsive attachment-370x370 size-370x370" alt="img"> </a>
                        </figure>
                        <h3 class="title">
                            <a href="kidsEast.php" tabindex="-1">
                                Eastern Wear </a>
                        </h3>
                    </div>
                </div>
                <div class="categories-item rows-space-0 post-740 page type-page status-publish hentry">
                    <div class="categories-inner">
                        <figure class="categories-thumb">
                            <a href="kidsWest.php" tabindex="-1">
                                <img src="../assets/images/kidwestimg.jpg"
                                     class="img-responsive attachment-370x370 size-370x370" alt="img"> </a>
                        </figure>
                        <h3 class="title">
                            <a href="kidsWest.php" tabindex="-1"> Western Wear </a>
                        </h3>
                    </div>
                </div>
                <!-- <div class="categories-item rows-space-0 post-740 page type-page status-publish hentry">
                    <div class="categories-inner">
                        <figure class="categories-thumb">
                            <a href="kidsfootwear.php" tabindex="0">
                                <img src="../assets/images/kidshoeimg.jpg"
                                     class="img-responsive attachment-370x370 size-370x370" alt="img"> </a>
                        </figure>
                        <h3 class="title">
                            <a href="kidsfootwear.php" tabindex="0">
                                Footwear </a>
                        </h3>
                    </div>
                </div> -->
                <!-- <div class="categories-item rows-space-0 post-740 page type-page status-publish hentry">
                    <div class="categories-inner">
                        <figure class="categories-thumb">
                            <a href="jwellery.php" tabindex="0">
                                <img src="../assets/images/jwelleryimg.jpg"
                                     class="img-responsive attachment-370x370 size-370x370" alt="img"> </a>
                        </figure>
                        <h3 class="title">
                            <a href="jwellery.php" tabindex="0">
                                jwellery </a>
                        </h3>
                    </div>
                </div>
                <div class="categories-item rows-space-0 post-740 page type-page status-publish hentry">
                    <div class="categories-inner">
                        <figure class="categories-thumb">
                            <a href="cosmetics.php" tabindex="0">
                                <img src="../assets/images/cosmeticimg.jpg"
                                     class="img-responsive attachment-370x370 size-370x370" alt="img"> </a>
                        </figure>
                        <h3 class="title">
                            <a href="cosmetics.php" tabindex="0">
                                Cosmetics </a>
                        </h3>
                    </div>
                </div>
                <div class="categories-item rows-space-0 post-740 page type-page status-publish hentry">
                    <div class="categories-inner">
                        <figure class="categories-thumb">
                            <a href="womensEast.php" tabindex="0">
                                <img src="../assets/images/sunglassesimg.jpg"
                                     class="img-responsive attachment-370x370 size-370x370" alt="img"> </a>
                        </figure>
                        <h3 class="title">
                        <a href="womensEast.php" tabindex="-1">
                               Sunglasses</a>
                        </h3>
                    </div>
                </div> -->
                <!-- <div class="categories-item rows-space-0 post-740 page type-page status-publish hentry">
                    <div class="categories-inner">
                        <figure class="categories-thumb">
                            <a href="womenswest.php" tabindex="0">
                                <img src="../assets/images/cat7.jpg"
                                     class="img-responsive attachment-370x370 size-370x370" alt="img"> </a>
                        </figure>
                        <h3 class="title">
                        <a href="womenswest.php" tabindex="-1">
                                Western Wear </a>
                        </h3>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- <h1 class="page-title">Shop</h1> -->
    <div class="main-container shop-page no-sidebar">
        <div class="container">
            <div class="row">
                <div class="main-content col-md-12">
                    <div class="shop-control shop-before-control">
                        <div class="grid-view-mode">
                            <form>
                                <a href="shop.html" data-toggle="tooltip" data-placement="top"
                                class="modes-mode mode-grid display-mode active" value="grid">
                                    <span class="button-inner">
                                        Shop Grid
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                </a>
                                <a href="shop-list.html" data-toggle="tooltip" data-placement="top"
                                class="modes-mode mode-list display-mode " value="list">
                                    <span class="button-inner">
                                        Shop List
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                </a>
                            </form>
                        </div>
                        <form class="lynessa-ordering" method="get">
                            <select title="product_cat" name="orderby" class="orderby">
                                <option value="menu_order" selected="selected">Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by latest</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </form>
                        <form class="per-page-form">
                            <label>
                                <select class="option-perpage">
                                    <option value="12" selected="">
                                        Show 12
                                    </option>
                                    <option value="5">
                                        Show 05
                                    </option>
                                    <option value="10">
                                        Show 10
                                    </option>
                                    <option value="12">
                                        Show 12
                                    </option>
                                    <option value="15">
                                        Show 15
                                    </option>
                                    <option value="20">
                                        Show All
                                    </option>
                                </select>
                            </label>
                        </form>
                    </div>
                    <div class=" auto-clear lynessa-products">
                        <ul class="row products columns-3">
                        <?php
                            include "connection.php";
                            $query = mysqli_query($connect,"SELECT * FROM `product_tbl` P inner join status_tbl Z on Z.s_id=P.status WHERE p_category = '3' AND p_subcategory = '17' AND s_id='5'");
                            while($fetch = mysqli_fetch_assoc($query)){
                                $images=explode(",",$fetch['p_img']);
                        ?>
                        
                            <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-28 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simple"
                                data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                                <div class="product-inner tooltip-left">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="quickView.php?id=<?php echo $fetch['p_id']?>&name=kidsWest.php">
                                            <img class="img-responsive"
                                                src="../images/<?php echo $images[0]?>"
                                                alt="<?php echo $fetch['p_name']?>" width="600" height="778">
                                        </a>
                                        <div class="flash">
                                            <span class="onsale"><span class="number"><?php echo $fetch['s_status']?></span></span>
                                            <span class="onnew"><span class="text">New</span></span></div>
                                        <a href="quickView.php?id=<?php echo $fetch['p_id']?>&name=kidsWest.php" class="button yith-wcqv-button" data-product_id="24">Quick View</a>
                                        <div class="group-button">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button show">
                                                    <a href="addtowishlist.php?id=<?php echo $fetch['p_id']?>&name=kidsWest.php" class="add_to_wishlist">Add to Wishlist</a>
                                                </div>
                                            </div>
                                            <a href="quickView.php?id=<?php echo $fetch['p_id']?>&name=kidsWest.php" class="button yith-wcqv-button">Quick View</a>
                                            <div class="add-to-cart">
                                                <a href="addtocart.php?id=<?php echo $fetch['p_id']?>&name=kidsWest.php" class="button product_type_simple add_to_cart_button">Add to
                                                    cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-info equal-elem">
                                        <h3 class="product-name product_title">
                                        <!-- <?php echo $fetch['c_msg']?> -->
                                            <a href="#"><?php echo $fetch['p_name']?></a>
                                        </h3>
                                        <div class="rating-wapper ">
                                            <div class="star-rating"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span>
                                            </div>
                                            <span class="review">(1)</span></div>
                                        <span class="price"><del><span class="lynessa-Price-amount amount"><span
                                                class="lynessa-Price-currencySymbol">Rs.</span>138.00</span></del> <ins><span
                                                class="lynessa-Price-amount amount"><span
                                                class="lynessa-Price-currencySymbol">Rs.</span><?php echo $fetch['p_price']?></span></ins></span>
                                        <div class="lynessa-product-details__short-description">
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                                turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                                tempor sit amet, ante.</p>
                                            <ul>
                                                <li>Water-resistant fabric with soft lycra detailing inside</li>
                                                <li>CLean zip-front, and three piece hood</li>
                                                <li>Subtle branding and diagonal panel detail</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="group-button">
                                        <div class="group-button-inner">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button show">
                                                    <a href="addtowishlist.php?id=<?php echo $fetch['p_id']?>&name=kidsWest.php" class="add_to_wishlist">Add to Wishlist</a>
                                                </div>
                                            </div>
                                           
                                            <a href="quickView.php?id=<?php echo $fetch['p_id']?>&name=kidsWest.php" class="button yith-wcqv-button">Quick View</a>
                                            <div class="add-to-cart">
                                                <a href="addtocart.php?id=<?php echo $fetch['p_id']?>&name=kidsWest.php" class="button product_type_variable add_to_cart_button">Add to Cart
                                                    </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        <?php
                            }
                        ?>
                        </ul>
                    </div>
                    <div class="shop-control shop-after-control">
                        <nav class="lynessa-pagination">
                            <span class="page-numbers current">1</span>
                            <a class="page-numbers" href="#">2</a>
                            <a class="next page-numbers" href="#">Next</a>
                        </nav>
                        <p class="lynessa-result-count">Showing 1–12 of 20 results</p>
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

<!-- Mirrored from ledthanhdat.vn/html/lynessa/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 18:18:59 GMT -->
</html>