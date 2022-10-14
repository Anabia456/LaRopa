<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ledthanhdat.vn/html/lynessa/orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 18:20:10 GMT -->
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
        <h1 class="page-title">Orders</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.html"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Orders</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<main class="site-main  main-container no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <table class="lynessa-orders-table lynessa-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table">
                                <thead>
                                <tr>
                                    <th>Order#</th>
                                    <th>Item</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Payment Info</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <?php
                                    include "connection.php";
                                    $query = "Select * from order_tbl O inner join  user_tbl U on O.u_name = U.u_id inner join product_tbl P on O.pro_id = P.p_id where U.u_id = '".$_SESSION['uId']."' ";
                                    $result = mysqli_query($connect,$query);
                                    while($fetch = mysqli_fetch_assoc($result)){
                                    $product=explode(",",$fetch['pro_id']);
                                    $images=explode(",",$fetch['p_img']);
                                ?>
                                <tbody>
                                <tr class="lynessa-orders-table__row lynessa-orders-table__row--status-on-hold order">
                                    <td class="lynessa-orders-table__cell lynessa-orders-table__cell-order-number" >
                                        <strong>#Order-<?php echo $fetch['unique_order_num']?></strong>
                                    </td>
                                    <td class="lynessa-orders-table__cell lynessa-orders-table__cell-order-date" >
                                <?php
                                    for ($j=0; $j < count($product); $j++) { 
                                        $query1 = "Select * from product_tbl where p_id = '".$product[$j]."'";
                                        $result1 = mysqli_query($connect,$query1);
                                        $fetch1 = mysqli_fetch_assoc($result1);
                                        $images1=explode(",",$fetch1['p_img']);                                      
                                ?>                                  
                                    
                                        <ul><li><img src="../images/<?php echo $images1[0]?>" class="avatar lg me-2" style="height:80px;" alt="profile-image"><span><?php echo $fetch1['p_name']?></span></li></ul><br>
                                        <!-- <ul><li><span><?php echo $fetch1['p_name']?></span></li></ul><br> -->
                                        <!-- <ul><li><img src="../../images/<?php echo $images1[0]?>" class="avatar lg me-2" style="height:80px;" alt="profile-image"></li></ul><br> -->    
                                    
                                <?php
                                    }
                                ?>
                                </td>
                                    <td class="lynessa-orders-table__cell lynessa-orders-table__cell-order-status" >
                                        <?php echo $fetch['pro_qty']?>
                                    </td>
                                    <td class="lynessa-orders-table__cell lynessa-orders-table__cell-order-total">
                                        <?php echo $fetch['o_price']?>
                                    </td>
                                    <td class="lynessa-orders-table__cell lynessa-orders-table__cell-order-actions">
                                        <?php echo $fetch['payment_method']?>
                                    </td>
                                    <td class="lynessa-orders-table__cell lynessa-orders-table__cell-order-actions">
                                        <span class="badge bg-warning" style="font-size:15px;"><?php echo $fetch['o_status']?></span>
                                    </td>
                                    <?php 
                                        if($fetch['o_status']=='Pending'){
                                    ?>
                                    <td class="lynessa-orders-table__cell lynessa-orders-table__cell-order-actions">
                                        <a class="btn btn-danger" href="ordercancel.php?id=<?php echo $fetch['o_id']?>">Cancel</a>
                                    </td>
                                    <?php
                                        }
                                    ?>
                                    
                                </tr>
                                </tbody>
                                <?php
                                    }
                                ?>
                </table>
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

<!-- Mirrored from ledthanhdat.vn/html/lynessa/orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 18:20:10 GMT -->
</html>
