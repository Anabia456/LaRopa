<?php
    session_start();
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<!-- Mirrored from www.pixelwibes.com/template/ebazar/html/dist/table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jun 2022 18:40:46 GMT -->
<head>
<?php
    include "Head.php";
?>
</head>
<body>
<?php
        if(isset($_SESSION["aId"])){
    ?>
    <div id="ebazar-layout" class="theme-blue">
        
        <!-- sidebar -->
        <?php
        include "Aside.php";
        ?>

        <!-- main body area -->
        <div class="main px-lg-4 px-md-4">
            <!-- Body: Header -->
            <?php
                include "navbar.php";
                include "connection.php";
                $get_oid = $_GET['id'];
                $query = "Select * from order_tbl O inner join  user_tbl U on O.u_name = U.u_id inner join product_tbl P on O.pro_id = P.p_id where o_id = '$get_oid'";
                $result = mysqli_query($connect,$query);
                $fetch = mysqli_fetch_assoc($result);
                $product=explode(",",$fetch['pro_id']);
                $images = explode(",",$fetch['p_img']);
            ?>

            <!-- Body: Body -->
            <div class="body d-flex py-3">
                <div class="container-xxl">
                    <div class="row align-items-center">
                        <div class="border-0 mb-4">
                            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0">Order Detail</h3>
                                <!-- <a href="productadd.php" class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">Add new Product</a> -->
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                        <div>
                    <div class="row">
                        <?php
                            for ($j=0; $j < count($product); $j++) { 
                                $query1 = "Select * from product_tbl where p_id = '".$product[$j]."'";
                                $result1 = mysqli_query($connect,$query1);
                                $fetch1 = mysqli_fetch_assoc($result1);
                                $images1=explode(",",$fetch1['p_img']);
                                $qty=explode(",",$fetch['pro_qty']);

                        ?>
                            <div class="col-md-4">
                              <img src="../../images/<?php echo $images1[0]?>" class="avatar lg me-2" style="height:300px;width:50%;border: 1px solid black;" alt="profile-image"><br><br>
                              <h6 style="font-weight:bold;"><?php echo $fetch1['p_name']?> (<?php echo $qty[$j]?>)</h6>
                            </div>
                        <?php
                            }
                        ?>
                    </div>
                            <br><br>
                        <b style="font-size:16px;">Order Id :</b> <span>#Order-<?php echo $fetch['unique_order_num']?></span><br>
                        <b style="font-size:16px;">Customer Name :</b> <span><?php echo $fetch['u_name']?></span><br>
                        <b style="font-size:16px;">Email :</b> <span><?php echo $fetch['u_email']?></span><br>
                        <b style="font-size:16px;">Phone Number :</b> <span><?php echo $fetch['u_phone']?></span><br>
                        <b style="font-size:16px;">Address :</b> <span><?php echo $fetch['u_address']?></span><br>
                        <b style="font-size:16px;">City :</b> <span><?php echo $fetch['u_city']?></span><br>
                        <b style="font-size:16px;">Country :</b> <span><?php echo $fetch['u_country']?></span><br>
                        <b style="font-size:16px;">Price :</b> <span>Rs.<?php echo $fetch['o_price']?></span><br>
                        <b style="font-size:16px;">Payment Method :</b> <span><?php echo $fetch['payment_method']?></span><br>
                        <b style="font-size:16px;">Status :</b> <span class="badge bg-warning" style="font-size: 16px;"><?php echo $fetch['o_status']?></span><br>
                        <b style="font-size:16px;">Action :</b> 
                        <?php 
                            if($fetch['o_status']=='Pending'){
                        ?>
                            <a href="status_delivered_update.php?id=<?php echo $fetch['o_id']?>&name=orderDetail.php" class="btn btn-success text-light">Delivered</a>
                            <span style="font-size: 25px;">|</span>
                            <a class="btn btn-danger" href="orderdelete.php?id=<?php echo $fetch['o_id']?>">Delete</a><br>
                        <?php
                            }else{
                        ?>
                            <a class="btn btn-danger" href="orderdelete.php?id=<?php echo $fetch['o_id']?>">Delete</a><br>
                        <?php
                            }
                        ?>
                        <!-- <div class="u-columns lynessa-Addresses col2-set addresses">
                                <div class="u-column1 col-1 lynessa-Address">
                                    <address>
                                    <b style="font-size:16px;">Name : </b> <?php echo $fetch['u_name']?>
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
                        </div> -->
                    
                        </div>
                    </div><!-- Row end  -->
                </div>
            </div>
        </div>
    </div>
    <?php
        }else{
            echo  "<script>window.location.assign('signin.php')</script>";
        }
    ?>
    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script>

    <!-- Plugin Js-->
    <script src="assets/bundles/dataTables.bundle.js"></script>

    <!-- Jquery Page Js -->
    <script src="../js/template.js"></script>
    <script>
        $(document).ready(function() {
        $('#myProjectTable')
        .addClass( 'nowrap' )
        .dataTable( {
            responsive: true,
            columnDefs: [
                { targets: [-1, -3], className: 'dt-body-right' }
            ]
        });
    });
    </script>
 </body>

<!-- Mirrored from www.pixelwibes.com/template/ebazar/html/dist/table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jun 2022 18:40:47 GMT -->
</html> 
