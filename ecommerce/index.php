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
<style>
    .btnSign{
        display: inline-block;
        height: 44px;
        line-height: 44px;
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        color: #ffffff;
        padding: 0 35px;
        background: #cf9163;
    }
    .btnSign:hover{
        background:black;
        color:#fff;
    }
</style>
<body>

<!-- HEADER -->
    <?php
        include "header.php";
    ?>
<!-- HEADER -->
    <?php
        if(!isset($_SESSION['myCart'])){
            $_SESSION['myCart'] = array();
        }

        if (!isset($_SESSION['myQty'])) {
            $_SESSION['myQty'] = array();
        }

        if (!isset($_SESSION['wishlist'])) {
            $_SESSION['wishlist'] = array();
        }
    ?>


<div class="fullwidth-template">
    <div class="slide-home-02">
        <div class="response-product product-list-owl owl-slick equal-container better-height"
             data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:0,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:1,&quot;rows&quot;:1}"
             data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}}]">
            <div class="slide-wrap">
                <img src="../assets/images/slide21.jpg" alt="image">
                <div class="slide-info">
                    <div class="container">
                        <div class="slide-inner">
                            <h5>Sale up to <span>40%</span> Off</h5>
                            <h1>The Summer</h1>
                            <h2>This Week Only</h2>
                            <a href="mensEast.php">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-wrap">
                <img src="../assets/images/slide22.jpg" alt="image">
                <div class="slide-info">
                    <div class="container">
                        <div class="slide-inner">
                            <h5>Hurry Up !</h5>
                            <h1>New Arrival</h1>
                            <h2>For Your Just In</h2>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-wrap">
                <img src="../assets/images/slide23.jpg" alt="image">
                <div class="slide-info">
                    <div class="container">
                        <div class="slide-inner">
                            <h5>Special Offer</h5>
                            <h1>Flash Sale</h1>
                            <h2>Up to <span>70%</span> Off</h2>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<br ><br ><div class="section-011">
        <div class="container">
            <div class="lynessa-heading style-01">
                <div class="heading-inner">
                    <h3 class="title">
                        New Arrival <span></span> </h3>
                    <div class="subtitle">
                        Nunc mauris enim, pretium quis orci eget.
                    </div>
                </div>
            </div>
        <div class="lynessa-products style-04">
                <div class="response-product product-list-owl owl-slick equal-container better-height"
                     data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:4,&quot;rows&quot;:1}"
                     data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                
            <?php 
            include "connection.php";
            $query=mysqli_query($connect,"Select * from product_tbl P inner join status_tbl Z on Z.s_id=P.status where s_id='4'");   
            while($row=mysqli_fetch_assoc($query)){ 
                $images=explode(",",$row['p_img']);
            ?>
                <div class="product-item recent-product style-04 rows-space-0 post-93 product type-product status-publish has-post-thumbnail product_cat-light product_cat-table product_cat-new-arrivals product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-simple  ">
                     <div class="product-inner tooltip-top tooltip-all-top">
                            <div class="product-thumb">
                                    <img class="img-responsive"
                                         src="../images/<?php echo $images[0]?>"
                                         alt="KNIT LIKE" width="270" height="350">
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <div class="group-button">
                                        <?php
                                            if($row['p_availiblity'] == 'In Stock'){
                                        ?>
                                            <div class="add-to-cart">
                                                <a href="addtocart.php?id=<?php echo $row['p_id']?>&name=index.php"
                                                class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to
                                                 cart</a>
                                            </div>

                                        <?php
                                            }                                      
                                        ?>
                                    <a href="quickView.php?id=<?php echo $row['p_id']?>&name=index.php" class="button yith-wcqv-button">Quick View</a>
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="addtowishlist.php?id=<?php echo $row['p_id']?>&name=index.php" class="add_to_wishlist">Add to Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-name product_title">
                                    <a href="#"
                                       tabindex="0"><?php echo $row['p_name']?></a>
                                </h3>
                                <span class="price"><span class="lynessa-Price-amount amount"><span
                                        class="lynessa-Price-currencySymbol">Rs.</span><?php echo $row['p_price']?></span></span>
                            </div>
                    </div>
                </div>  
            <?php
            }
            ?>
            </div>
        </div>
    </div>
</div>


    <div class="section-012">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="lynessa-heading style-01">
                        <div class="heading-inner">
                            <h3 class="title">
                                Deal Of Day <span></span></h3>
                            <div class="subtitle">
                                Nunc mauris enim, pretium quis orci eget.
                            </div>
                        </div>
                    </div>
                    
                    <div class="lynessa-products style-03">                    
                    <div class="response-product product-list-owl owl-slick equal-container better-height"
                             data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:2,&quot;rows&quot;:1}"
                             data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                             <?php 
                            $query1=mysqli_query($connect,"Select * from product_tbl P inner join status_tbl Z on Z.s_id=P.status where s_id='6'");   
                            while($row1=mysqli_fetch_assoc($query1)){ 
                            $images1=explode(",",$row1['p_img']);
                            ?> 
                             <div class="product-item on_sale style-03 rows-space-0 post-36 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_tag-light product_tag-table product_tag-sock first instock sale shipping-taxable purchasable product-type-simple"
                                 data-slick-index="0" style="margin-right: 30px; width: 520px;" aria-hidden="false"
                                 tabindex="0" role="tabpanel" id="slick-slide10"
                                 aria-describedby="slick-slide-control10">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a href="quickView.php?id=<?php echo $row1['p_id']?>&name=index.php"><img class="img-responsive"
                                                 src="../images/<?php echo $images1[0]?>"
                                                 alt="SPORTY HOODIE" width="275" height="310"></a>
                                    </div>
                                    <div class="product-info equal-elem"  >
                                        <h3 class="product-name product_title">
                                            <a href="quickView.php?id=<?php echo $row1['p_id']?>&name=index.php" tabindex="0"><?php echo $row1['p_name']?></a>
                                        </h3>
                                        <span class="price"><ins><span
                                                class="lynessa-Price-amount amount"><span
                                                class="lynessa-Price-currencySymbol">Rs.</span><?php echo $row1['p_price']?></span></ins></span>
                                        <div class="process-valiable">
                                            <div class="valiable-text">
                                                <span class="text">
                                                    Available:<span><b> <?php echo $row1['p_availiblity']?></b></span>
                                                </span>
                                                <span class="text">
                                                    Status:<span><b> Deal</b></span>
                                                </span>
                                            </div>
                                                
                                        </div>
                                        <div class="countdown-product">
                                            <div class="lynessa-countdown" data-datetime="03/21/2021 12:00:00"><span
                                                    class="days"><span class="number">136</span><span
                                                    class="text">Days</span></span><span
                                                    class="hour"><span class="number">21</span><span
                                                    class="text">Hours</span></span><span
                                                    class="mins"><span class="number">55</span><span
                                                    class="text">Mins</span></span><span
                                                    class="secs"><span class="number">44</span><span
                                                    class="text">Secs</span></span>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <a href="addtocart.php?id=<?php echo $row1['p_id']?>&name=index.php" data-quantity="1"
                                               class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                               data-product_id="36" data-product_sku="098J812-1"
                                               aria-label="Add “SPORTY HOODIE” to your cart" rel="nofollow"
                                               tabindex="0">Add to cart</a></div>
                                    </div>
                                </div>
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
        </div>
    </div>


    <div class="section-013 section-001">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="lynessa-banner style-03 left-center">
                        <div class="banner-inner">
                            <figure class="banner-thumb">
                                <img src="../assets/images/banner21.jpg"
                                     class="attachment-full size-full" alt="img"></figure>
                            <div class="banner-info ">
                                <div class="banner-content">
                                    <!-- <div class="title-wrap">
                                        <h6 class="title">
                                            <a target="_self" href="#">Show now</a>
                                        </h6>
                                    </div> -->
                                    <div class="cate">Trend</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="lynessa-banner style-03 left-center">
                        <div class="banner-inner">
                            <figure class="banner-thumb">
                                <img src="../assets/images/banner201.jpg"
                                     class="attachment-full size-full" alt="img"></figure>
                            <div class="banner-info ">
                                <div class="banner-content">
                                    <!-- <div class="title-wrap">
                                        <h6 class="title">
                                            <a target="_self" href="#">Show now</a>
                                        </h6>
                                    </div> -->
                                    <div class="cate">
                                        New
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="lynessa-banner style-03 left-center">
                        <div class="banner-inner">
                            <figure class="banner-thumb">
                                <img src="../assets/images/banner23.jpg"
                                     class="attachment-full size-full" alt="img"></figure>
                            <div class="banner-info ">
                                <div class="banner-content">
                                    <!-- <div class="title-wrap">
                                        <h6 class="title">
                                            <a target="_self" href="#">Show now</a>
                                        </h6>
                                    </div> -->
                                    <div class="cate">
                                        Sale
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-007">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="lynessa-products style-06">
                        <h3 class="title">
                            <span>Best selling</span>
                        </h3>
                        <div class="response-product product-list-owl owl-slick equal-container better-height"
                             data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:1,&quot;rows&quot;:3}"
                             data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                             <?php 
                            $sel=mysqli_query($connect,"Select * from product_tbl P inner join status_tbl Z on Z.s_id=P.status where s_id= '1' ");   
                            while($fetch=mysqli_fetch_assoc($sel)){ 
                            $img=explode(",",$fetch['p_img']);
                            ?>
                             <div class="product-item best-selling style-06 rows-space-30 post-25 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-specials product_tag-light product_tag-sock first instock sale featured shipping-taxable purchasable product-type-simple">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                    <a class="thumb-link" href="quickView.php?id=<?php echo $fetch['p_id']?>&name=index.php">
                                            <img class="img-responsive"
                                                 src="../images/<?php echo $img[0]?>"
                                                 alt="HEM SMOCKING" width="90" height="90">
                                    <a/>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                        <a class="thumb-link" href="quickView.php?id=<?php echo $fetch['p_id']?>&name=index.php">
                                            <?php echo $fetch['p_name']?>
                                        </a>
                                        </h3>
                                        <div class="rating-wapper nostar">
                                            <div class="star-rating"><span
                                                    style="width:100%">Rated <strong
                                                    class="rating">5.00</strong> out of 5</span></div>
                                            <span class="review">(1)</span></div>
                                        <span class="price"><ins><span
                                                class="lynessa-Price-amount amount"><span
                                                class="lynessa-Price-currencySymbol">Rs.</span><?php echo $fetch['p_price']?></span></ins></span>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>


                <div class="col-md-12 col-lg-4">
                    <div class="lynessa-products style-06">
                        <h3 class="title">
                            <span>Top Rated</span>
                        </h3>
                        <div class="response-product product-list-owl owl-slick equal-container better-height"
                             data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:1,&quot;rows&quot;:3}"
                             data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                             <?php 
                            $sel=mysqli_query($connect,"Select * from product_tbl P inner join status_tbl Z on Z.s_id=P.status where s_id='3' ");   
                            while($fetch=mysqli_fetch_assoc($sel)){ 
                            $img=explode(",",$fetch['p_img']);
                            ?>
                             <div class="product-item best-selling style-06 rows-space-30 post-25 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-specials product_tag-light product_tag-sock first instock sale featured shipping-taxable purchasable product-type-simple">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                    <a class="thumb-link" href="quickView.php?id=<?php echo $fetch['p_id']?>&name=index.php">
                                            <img class="img-responsive"
                                                 src="../images/<?php echo $img[0]?>"
                                                 alt="HEM SMOCKING" width="90" height="90">
                            </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                        <a class="thumb-link" href="quickView.php?id=<?php echo $fetch['p_id']?>&name=index.php">
                                            <?php echo $fetch['p_name']?>
                            </a>
                                        </h3>
                                        <div class="rating-wapper nostar">
                                            <div class="star-rating"><span
                                                    style="width:100%">Rated <strong
                                                    class="rating">5.00</strong> out of 5</span></div>
                                            <span class="review">(1)</span></div>
                                        <span class="price"><ins><span
                                                class="lynessa-Price-amount amount"><span
                                                class="lynessa-Price-currencySymbol">Rs.</span><?php echo $fetch['p_price']?></span></ins></span>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>


                <div class="col-md-12 col-lg-4">
                    <div class="lynessa-products style-06">
                        <h3 class="title">
                            <span>Trendy</span>
                        </h3>
                        <div class="response-product product-list-owl owl-slick equal-container better-height"
                             data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:1,&quot;rows&quot;:3}"
                             data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                             <?php 
                            $sel=mysqli_query($connect,"Select * from product_tbl P inner join status_tbl Z on Z.s_id=P.status where s_id='2' ");   
                            while($fetch=mysqli_fetch_assoc($sel)){ 
                            $img=explode(",",$fetch['p_img']);
                            ?>
                             <div class="product-item best-selling style-06 rows-space-30 post-25 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-specials product_tag-light product_tag-sock first instock sale featured shipping-taxable purchasable product-type-simple">
                                <div class="product-inner">
                                    <div class="product-thumb">   
                                    <a class="thumb-link" href="quickView.php?id=<?php echo $fetch['p_id']?>&name=index.php">                                   
                                            <img class="img-responsive"
                                                 src="../images/<?php echo $img[0]?>"
                                                 alt="HEM SMOCKING" width="90" height="90">  
                            </a> 
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                        <a class="thumb-link" href="quickView.php?id=<?php echo $fetch['p_id']?>&name=index.php">
                                            <?php echo $fetch['p_name']?>
                            </a>
                                        </h3>
                                        <div class="rating-wapper nostar">
                                            <div class="star-rating"><span
                                                    style="width:100%">Rated <strong
                                                    class="rating">5.00</strong> out of 5</span></div>
                                            <span class="review">(1)</span></div>
                                        <span class="price"><ins><span
                                                class="lynessa-Price-amount amount"><span
                                                class="lynessa-Price-currencySymbol">Rs.</span><?php echo $fetch['p_price']?></span></ins></span>
                                    </div>
                                </div>
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
    <div class="section-014">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="lynessa-iconbox style-02">
                        <div class="iconbox-inner">
                            <div class="icon">
                                <span class="pe-7s-rocket"></span>
                            </div>
                            <div class="content">
                                <h4 class="title">Worldwide Delivery</h4>
                                <div class="desc">With sites in 5 languages, we ship to over 200 countries &amp;
                                    regions.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="lynessa-iconbox style-02">
                        <div class="iconbox-inner">
                            <div class="icon">
                                <span class="pe-7s-unlock"></span>
                            </div>
                            <div class="content">
                                <h4 class="title">Safe Shipping</h4>
                                <div class="desc">Pay with the world’s most popular and secure payment methods.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="lynessa-iconbox style-02">
                        <div class="iconbox-inner">
                            <div class="icon">
                                <span class="pe-7s-piggy"></span>
                            </div>
                            <div class="content">
                                <h4 class="title">365 Days Return</h4>
                                <div class="desc">Round-the-clock assistance for a smooth shopping experience.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="lynessa-iconbox style-02">
                        <div class="iconbox-inner">
                            <div class="icon">
                                <span class="pe-7s-help2"></span>
                            </div>
                            <div class="content">
                                <h4 class="title">Shop Confidence</h4>
                                <div class="desc">Our Buyer Protection covers your purchase from click to delivery.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-008">
        <div class="lynessa-instagram style-01">
            <div class="instagram-owl owl-slick"
                 data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:15,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:5,&quot;rows&quot;:1}"
                 data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;15&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;15&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesMargin&quot;:&quot;15&quot;}}]">
                <div class="rows-space-0">
                    <a target="_blank" href="#" class="item" tabindex="0">
                        <img class="img-responsive lazy" src="../assets/images/insta1.jpg" alt="Home 01">
                        <span class="instagram-info">
                             <span class="social-wrap">
                                <span class="social-info">1
                                    <i class="pe-7s-chat"></i>
                                </span>
                                <span class="social-info">0
                                    <i class="pe-7s-like2"></i>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="rows-space-0">
                    <a target="_blank" href="#" class="item" tabindex="0">
                        <img class="img-responsive lazy" src="../assets/images/insta2.jpg" alt="Home 01">
                        <span class="instagram-info">
                             <span class="social-wrap">
                                <span class="social-info">0
                                    <i class="pe-7s-chat"></i>
                                </span>
                                <span class="social-info">0
                                    <i class="pe-7s-like2"></i>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="rows-space-0">
                    <a target="_blank" href="#" class="item"
                       tabindex="0">
                        <img class="img-responsive lazy" src="../assets/images/insta3.jpg" alt="Home 01">
                        <span class="instagram-info">
                                         <span class="social-wrap">
                                            <span class="social-info">0
                                                <i class="pe-7s-chat"></i>
                                            </span>
                                            <span class="social-info">0
                                                <i class="pe-7s-like2"></i>
                                            </span>
                                        </span>
                                    </span>
                    </a>
                </div>
                <div class="rows-space-0">
                    <a target="_blank" href="#" class="item" tabindex="0">
                        <img class="img-responsive lazy" src="../assets/images/insta4.jpg" alt="Home 01">
                        <span class="instagram-info">
                                         <span class="social-wrap">
                                            <span class="social-info">0
                                                <i class="pe-7s-chat"></i>
                                            </span>
                                            <span class="social-info">0
                                                <i class="pe-7s-like2"></i>
                                            </span>
                                        </span>
                                    </span>
                    </a>
                </div>
                <div class="rows-space-0">
                    <a target="_blank" href="#" class="item" tabindex="0">
                        <img class="img-responsive lazy" src="../assets/images/insta5.jpg" alt="Home 01">
                        <span class="instagram-info">
                                         <span class="social-wrap">
                                            <span class="social-info">0
                                                <i class="pe-7s-chat"></i>
                                            </span>
                                            <span class="social-info">0
                                                <i class="pe-7s-like2"></i>
                                            </span>
                                        </span>
                                    </span>
                    </a>
                </div>
                <div class="rows-space-0">
                    <a target="_blank" href="#" class="item"
                       tabindex="-1">
                        <img class="img-responsive lazy" src="../assets/images/insta6.jpg" alt="Home 01">
                        <span class="instagram-info">
                                         <span class="social-wrap">
                                            <span class="social-info">0
                                                <i class="pe-7s-chat"></i>
                                            </span>
                                            <span class="social-info">0
                                                <i class="pe-7s-like2"></i>
                                            </span>
                                        </span>
                                    </span>
                    </a>
                </div>
                <div class="rows-space-0">
                    <a target="_blank" href="#" class="item"
                       tabindex="-1">
                        <img class="img-responsive lazy" src="../assets/images/insta7.jpg" alt="Home 01">
                        <span class="instagram-info">
                                         <span class="social-wrap">
                                            <span class="social-info">0
                                                <i class="pe-7s-chat"></i>
                                            </span>
                                            <span class="social-info">0
                                                <i class="pe-7s-like2"></i>
                                            </span>
                                        </span>
                                    </span>
                    </a>
                </div>
                <div class="rows-space-0">
                    <a target="_blank" href="#" class="item"
                       tabindex="-1">
                        <img class="img-responsive lazy" src="../assets/images/insta8.jpg" alt="Home 01">
                        <span class="instagram-info">
                                     <span class="social-wrap">
                                        <span class="social-info">0
                                            <i class="pe-7s-chat"></i>
                                        </span>
                                        <span class="social-info">0
                                            <i class="pe-7s-like2"></i>
                                        </span>
                                    </span>
                                </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FOOTER -->
<?php
include "footer.php";
?>
<!-- FOoter -->
<a href="#" class="backtotop active">
    <i class="fa fa-angle-up"></i>
</a>
<?php 
include "scripts.php";
?>
</body>
</html>