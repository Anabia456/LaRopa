<?php
    include "css.php";
?>
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
<nav id="header" class="header style-04 header-transparent header-sticky">
    <div class="header-middle">
        <div class="header-middle-inner">
            <div class="header-search-mid">
                <div class="header-search">
                <?php 
                    if(isset($_SESSION["uName"])){
                ?>
                    <div class="block-search">                      
                        <a href="logout.php" class="btnSign">Logout</a>
                    </div>
                <?php
                    }else{
                ?>
                    <div class="block-search">                      
                        <a href="login.php" class="btnSign">SignUp / LogIn</a>
                    </div>
                <?php        
                    }
                ?>
                    
                </div>
            </div>
            <div class="header-logo-menu">
                <div class="block-menu-bar">
                    <a class="menu-bar menu-toggle" href="#">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <div class="header-logo">
                    <a href="index.php">
                        <img alt="LaRopa" src="../images/logo4.png" style="width:60%;"
                    class="logo"></a></div>
            </div>
            <div class="header-control">
                <div class="header-control-inner">
                    <div class="meta-dreaming">
                        <div class="menu-item block-user block-dreaming lynessa-dropdown">
                            <a class="block-link" href="#">
                                <span class="pe-7s-user"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="menu-item lynessa-MyAccount-navigation-link lynessa-MyAccount-navigation-link--dashboard is-active">
                                    <?php 
                                        if(isset($_SESSION["uName"])){
                                        ?>
                                            <h6><strong><?php echo $_SESSION["uName"];?></strong></h6>                                                                               
                                            <a href="Profile.php">My Profile</a>
                                            <a href="orders.php">My Orders</a>
                                            <a href='logout.php'>Logout</a>
                                        <?php
                                        }else{
                                        ?>
                                            <strong><a href='login.php'>LOGIN</a></strong>
                                        <?php
                                        }
                                    ?>
                                </li>
                            </ul>
                        </div>
                        <div class="block-minicart block-dreaming lynessa-mini-cart lynessa-dropdown">
                            <div>
                                <a class="block-link link-dropdown" href="wishlist.php">
                                    <span class="pe-7s-shopbag"></span>
                                    <span></span>
                                    <?php
                                        if (isset($_SESSION['wishlist'])) {
                                    ?>
                                        <span class="count"><?php echo count($_SESSION['wishlist'])?></span>
                                    <?php
                                        }
                                        else{
                                    ?>
                                        <span class="count">0</span>
                                    <?php
                                        }
                                    ?>
                                </a>
                            </div>
                        </div>
                        <div class="block-minicart block-dreaming lynessa-mini-cart lynessa-dropdown">
                            <div class="shopcart-dropdown block-cart-link" data-lynessa="lynessa-dropdown">
                                <a class="block-link link-dropdown" href="cart.html">
                                    <span class="pe-7s-cart"></span>
                                    <span class="count"></span>
                                    <?php
                                        if (isset($_SESSION['myCart'])) {
                                    ?>
                                        <span class="count"><?php echo count($_SESSION['myCart'])?></span>
                                    <?php
                                        }
                                        else{
                                    ?>
                                        <span class="count">0</span>
                                    <?php
                                        }
                                    ?>
                                </a>
                            </div>
                            
                            <div class="widget lynessa widget_shopping_cart">
                                <div class="widget_shopping_cart_content">
                                    <h3 class="minicart-title">Your Cart<span
                                            class="minicart-number-items"></span>
                                            <?php 
                                                if(isset($_SESSION['myCart'])){
                                            ?>
                                            <span class="minicart-number-items"><?php echo count($_SESSION['myCart'])?></span>
                                            <?php        
                                                }else{
                                            ?>
                                                <span class="minicart-number-items">0</span>
                                            <?php
                                                }
                                            ?>
                                            </h3>
                                            <?php
                                                include "connection.php";
                                                // session_start();
                                                if(!empty($_SESSION['myCart'])){
                                                    $price = 0;
                                            ?>
                                                <ul class="lynessa-mini-cart cart_list product_list_widget">
                                                <?php 
                                                    for ($i=0; $i < count($_SESSION['myCart']) ; $i++) { 
                                                        $mysql = "Select * from product_tbl where p_id = ". $_SESSION['myCart'][$i];
                                                        $result = mysqli_query($connect,$mysql);
                                                        $fetch = mysqli_fetch_assoc($result);
                                                        $images = explode(",",$fetch['p_img']);
                                                        $price += $fetch['p_price'] * $_SESSION['myQty'][$i];
                                                ?>
                                                    <li class="lynessa-mini-cart-item mini_cart_item">
                                                        <a href="deleteCartItem.php?id=<?php echo $fetch['p_id']?>&index=<?php echo $i?>&name=index.php" class="remove remove_from_cart_button">×</a>
                                                        <a href="#">
                                                            <img src="../images/<?php echo $images[0]?>"
                                                                class="attachment-lynessa_thumbnail size-lynessa_thumbnail"
                                                                alt="<?php echo $fetch['p_name']?>" width="600" height="778"><?php echo $fetch['p_name']?>&nbsp;
                                                        </a>
                                                        <span class="quantity"><?php echo $_SESSION['myQty'][$i]?> × <span
                                                                class="lynessa-Price-amount amount"><span
                                                                class="lynessa-Price-currencySymbol"></span><?php echo $fetch['p_price'] ?></span> PKR</span>
                                                    </li>
                                                <?php
                                                    }
                                                ?>
                                                </ul>
                                            <?php
                                                }else{
                                            ?>
                                                <div class="w-50 mx-auto mt-5 text-center">
                                                    <h1 class="">Cart Is Empty</h1>
                                                    <a href="index.php" class="btn btn-dark mt-5 w-100">Continue Shopping</a>
                                                </div>
                                            <?php
                                                }
                                                if(!empty($_SESSION['myCart'])){
                                            ?>
                                                <p class="lynessa-mini-cart__total total"><strong>Subtotal:</strong>
                                                    <span class="lynessa-Price-amount amount"><span
                                                    class="lynessa-Price-currencySymbol"></span><?php echo $price?> PKR</span>
                                                </p>
                                            <?php
                                                }else{
                                                    echo "";
                                                }
                                            ?>
                                    <p class="lynessa-mini-cart__buttons buttons">
                                        <a href="viewcart.php" class="button lynessa-forward">Viewcart</a>
                                        <a href="clearcart.php"
                                           class="button checkout lynessa-forward">Clear Cart</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-wrap-stick">
        <div class="header-position">
            <div class="header-nav">
                <div class="container">
                    <div class="lynessa-menu-wapper"></div>
                    <div class="header-nav-inner">
                        <div class="box-header-nav menu-nocenter">
                            <ul id="menu-primary-menu"
                                class="clone-main-menu lynessa-clone-mobile-menu lynessa-nav main-menu">
                                <li id="menu-item-230"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-230 parent parent-megamenu item-megamenu menu-item-has-children">
                                    <a class="lynessa-menu-item-title" title="Home" href="index.php">Home</a>
                                    <span class="toggle-submenu"></span>
                                </li>
                                <li id="menu-item-228"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-228 parent parent-megamenu item-megamenu menu-item-has-children">
                                    <a class="lynessa-menu-item-title" title="About"
                                       href="about.php">About</a>
                                </li>
                                <li id="menu-item-229"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-229 parent parent-megamenu item-megamenu menu-item-has-children">
                                    <a class="lynessa-menu-item-title" title="Shop" href="#">Shop</a>
                                    <span class="toggle-submenu"></span>
                                    <div class="submenu megamenu megamenu-elements">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="lynessa-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">Men's</h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="mensEast.php"
                                                                   target="_self">Eastern Wear</a>
                                                            </li>
                                                            <li>
                                                                <a href="mensWest.php"
                                                                   target="_self">Western Wear</a>
                                                            </li>
                                                            <!-- <li>
                                                                <a href="mensfootwear.php"
                                                                   target="_self">
                                                                    Shoes </a>
                                                            </li> -->
                                                            <!-- <li>
                                                                <a href="mensSandles.php"
                                                                   target="_self">
                                                                   Sneakers </a>
                                                            </li> -->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="lynessa-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">Women's</h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="womensEast.php"
                                                                   target="_self">
                                                                    Eastern Wear </a>
                                                            </li>
                                                            <li>
                                                                <a href="womensWest.php"
                                                                   target="_self">
                                                                    Western Wear </a>
                                                            </li>
                                                            <!-- <li>
                                                                <a href="womensFootwear.php"
                                                                   target="_self">
                                                                    Footwear </a>
                                                            </li> -->
                                                            <!-- <li>
                                                                <a href="jwellery.php"
                                                                   target="_self">
                                                                    Jwellery </a>
                                                            </li>
                                                            <li>
                                                                <a href="cosmetics.php"
                                                                   target="_self">
                                                                    Cosmetics </a>
                                                            </li> -->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="lynessa-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">Kid's</h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="kidsEast.php"
                                                                   target="_self">
                                                                    Eastern Wear </a>
                                                            </li>
                                                            <li>
                                                                <a href="kidsWest.php"
                                                                   target="_self">
                                                                    Western Wear </a>
                                                            </li>
                                                            <!-- <li>
                                                                <a href="kidsfootwear.php"
                                                                   target="_self">
                                                                    Shoes </a>
                                                            </li> -->
                                                            <!-- <li>
                                                                <a href="testimonials.html"
                                                                   target="_self">
                                                                    Testimonials </a>
                                                            </li> -->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                
                                <li id="menu-item-237"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-237 parent">
                                    <a class="lynessa-menu-item-title" title="Contact" href="contact.php">Contact</a>                                
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mobile">
        <div class="header-mobile-left">
            <div class="block-menu-bar">
                <a class="menu-bar menu-toggle" href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            <!-- <div class="header-search lynessa-dropdown">
                <div class="header-search-inner" data-lynessa="lynessa-dropdown">
                    <a href="#" class="link-dropdown block-link">
                        <span class="pe-7s-search"></span>
                    </a>
                </div>
                <div class="block-search">
                    <form role="search" method="get"
                          class="form-search block-search-form lynessa-live-search-form">
                        <div class="form-content search-box results-search">
                            <div class="inner">
                                <input autocomplete="off" class="searchfield txt-livesearch input" name="s" value=""
                                       placeholder="Search here..." type="text">
                            </div>
                        </div>
                        <input name="post_type" value="product" type="hidden">
                        <input name="taxonomy" value="product_cat" type="hidden">
                        <div class="category">
                            <select title="product_cat" name="product_cat" id="1770352541"
                                    class="category-search-option" tabindex="-1"
                                    style="display: none;">
                                <option value="0">All Categories</option>
                                <option class="level-0" value="light">Just In</option>
                                <option class="level-0" value="chair">Restock</option>
                                <option class="level-0" value="table">Dresses</option>
                                <option class="level-0" value="bed">Shirts</option>
                                <option class="level-0" value="new-arrivals">New arrivals</option>
                                <option class="level-0" value="lamp">Leggings</option>
                                <option class="level-0" value="specials">Knit Tops</option>
                                <option class="level-0" value="sofas">Bodysuits</option>
                            </select>
                        </div>
                        <button type="submit" class="btn-submit">
                            <span class="pe-7s-search"></span>
                        </button>
                    </form>
                </div>
            </div> -->
            <!-- <ul class="wpml-menu">
                <li class="menu-item lynessa-dropdown block-language">
                    <a href="#" data-lynessa="lynessa-dropdown">
                        <img src="assets/images/en.png"
                             alt="en" width="18" height="12">
                        English
                    </a>
                    <span class="toggle-submenu"></span>
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="#">
                                <img src="assets/images/it.png"
                                     alt="it" width="18" height="12">
                                Italiano
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
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
                </li>
            </ul> -->
        </div>
        <div class="header-mobile-mid">
            <div class="header-logo">
                <a href="index.php"><img alt="Lynessa"
                                          src="../images/logo4.png"
                                          class="logo"></a></div>
        </div>
        <div class="header-mobile-right">
            <div class="header-control-inner">
                <div class="meta-dreaming">
                    <div class="menu-item block-user block-dreaming lynessa-dropdown">
                        <a class="block-link" href="#">
                            <span class="pe-7s-user"></span>
                        </a>
                        <ul class="sub-menu">
                                <li class="menu-item lynessa-MyAccount-navigation-link lynessa-MyAccount-navigation-link--dashboard is-active">
                                    <!-- <a href="#"> -->
                                    <?php 
                                        if(isset($_SESSION["uName"])){
                                            echo "<strong>";
                                            echo $_SESSION["uName"];
                                            echo "</strong>";
                                        }else{
                                            echo "<strong><a href='login.php'>LOGIN</a></strong>";
                                        }
                                    ?>
                                    <!-- </a> -->
                                </li>
                                
                                <li class="menu-item lynessa-MyAccount-navigation-link lynessa-MyAccount-navigation-link--customer-logout">
                                    <a href="logout.php">Logout</a>
                                </li>
                            </ul>
                    </div>
                    <div class="block-minicart block-dreaming lynessa-mini-cart lynessa-dropdown">
                        <div class="shopcart-dropdown block-cart-link" data-lynessa="lynessa-dropdown">
                        <a class="block-link link-dropdown" href="cart.html">
                                    <span class="pe-7s-shopbag"></span>
                                    <span class="count"></span>
                                    <?php
                                        if (isset($_SESSION['myCart'])) {
                                    ?>
                                        <span class="count"><?php echo count($_SESSION['myCart'])?></span>
                                    <?php
                                        }
                                        else{
                                    ?>
                                        <span class="count">0</span>
                                    <?php
                                        }
                                    ?>
                                </a>
                        </div>
                        <div class="widget lynessa widget_shopping_cart">
                                <div class="widget_shopping_cart_content">
                                    <h3 class="minicart-title">Your Cart<span
                                            class="minicart-number-items"></span>
                                            <?php 
                                                if(isset($_SESSION['myCart'])){
                                            ?>
                                            <span class="minicart-number-items"><?php echo count($_SESSION['myCart'])?></span>
                                            <?php        
                                                }else{
                                            ?>
                                                <span class="minicart-number-items">0</span>
                                            <?php
                                                }
                                            ?>
                                            </h3>
                                            <?php
                                                include "connection.php";
                                                // session_start();
                                                if(!empty($_SESSION['myCart'])){
                                                    $price = 0;
                                            ?>
                                                <ul class="lynessa-mini-cart cart_list product_list_widget">
                                                <?php 
                                                    for ($i=0; $i < count($_SESSION['myCart']) ; $i++) { 
                                                        $mysql = "Select * from product_tbl where p_id = ". $_SESSION['myCart'][$i];
                                                        $result = mysqli_query($connect,$mysql);
                                                        $fetch = mysqli_fetch_assoc($result);
                                                        $images = explode(",",$fetch['p_img']);
                                                        $price += $fetch['p_price'] * $_SESSION['myQty'][$i];
                                                ?>
                                                    <li class="lynessa-mini-cart-item mini_cart_item">
                                                        <a href="deleteCartItem.php?id=<?php echo $fetch['p_id']?>&index=<?php echo $i?>&name=index.php" class="remove remove_from_cart_button"></a>
                                                        <a href="#">
                                                            <img src="../images/<?php echo $images[0]?>"
                                                                class="attachment-lynessa_thumbnail size-lynessa_thumbnail"
                                                                alt="<?php echo $fetch['p_name']?>" width="600" height="778"><?php echo $fetch['p_name']?>&nbsp;
                                                        </a>
                                                        <span class="quantity"><?php echo $_SESSION['myQty'][$i]?> × <span
                                                                class="lynessa-Price-amount amount"><span
                                                                class="lynessa-Price-currencySymbol"></span><?php echo $fetch['p_price'] ?></span> PKR</span>
                                                    </li>
                                                <?php
                                                    }
                                                ?>
                                                </ul>
                                            <?php
                                                }else{
                                            ?>
                                                <div class="w-50 mx-auto mt-5 text-center">
                                                    <h1 class="">Cart Is Empty</h1>
                                                    <a href="index.php" class="btn btn-dark mt-5 w-100">Continue Shopping</a>
                                                </div>
                                            <?php
                                                }
                                                if(!empty($_SESSION['myCart'])){
                                            ?>
                                                <p class="lynessa-mini-cart__total total"><strong>Subtotal:</strong>
                                                    <span class="lynessa-Price-amount amount"><span
                                                    class="lynessa-Price-currencySymbol"></span><?php echo $price?> PKR</span>
                                                </p>
                                            <?php
                                                }else{
                                                    echo "";
                                                }
                                            ?>
                                    <p class="lynessa-mini-cart__buttons buttons">
                                        <a href="viewcart.php" class="button lynessa-forward">Viewcart</a>
                                        <a href="clearcart.php"
                                           class="button checkout lynessa-forward">Clear Cart</a>
                                    </p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- https://github.com/Sm0ky125/LaRopa.git -->
