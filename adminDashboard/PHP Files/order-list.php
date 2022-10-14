<?php
    session_start();
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- Mirrored from www.pixelwibes.com/template/ebazar/html/dist/order-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jun 2022 18:40:37 GMT -->
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
            ?>

            <!-- Body: Body -->
            <div class="body d-flex py-3">  
                <div class="container-xxl"> 
                    <div class="row align-items-center"> 
                        <div class="border-0 mb-4"> 
                            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0">Orders List</h3>
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                    <div class="row g-3 mb-3"> 
                        <div class="col-md-12">
                            <?php 
                            if (isset($_SESSION['action'])) {
                            ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Hey!</strong> <?php echo $_SESSION['action'];?>
                                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php   
                            unset($_SESSION['action']); 
                            }
                            ?>
                            <div class="card"> 
                                <div class="card-body"> 
                                    <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">  
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Item</th>
                                                <th>Customer Name</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Payment Info</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            include "connection.php";
                                            $query = "Select * from order_tbl O inner join  user_tbl U on O.u_name = U.u_id inner join product_tbl P on O.pro_id = P.p_id";
                                            $result = mysqli_query($connect,$query);
                                            while($fetch = mysqli_fetch_assoc($result)){
                                                $product=explode(",",$fetch['pro_id']);
                                                $images=explode(",",$fetch['p_img']);
                                        ?>
                                            <tr>
                                                <td><a href="orderDetail.php?id=<?php echo $fetch['o_id']?>"><strong>#Order-<?php echo $fetch['unique_order_num']?></strong></a></td>
                                                <!-- <td><strong>#Order-<?php echo $fetch['unique_order_num']?></strong></td> -->
                                                <td>

                                                <?php
                                                    for ($j=0; $j < count($product); $j++) { 
                                                        $query1 = "Select * from product_tbl where p_id = '".$product[$j]."'";
                                                        $result1 = mysqli_query($connect,$query1);
                                                        $fetch1 = mysqli_fetch_assoc($result1);
                                                        $images1=explode(",",$fetch1['p_img']);
                                                        
                                                        ?>
                                                        
                                                    <ul><li style="list-style-type:none;"><img src="../../images/<?php echo $images1[0]?>" class="avatar lg me-2" style="height:80px;" alt="profile-image"><br><span><?php echo $fetch1['p_name']?></span></li></ul><br>
                                                <?php
                                                    }
                                                ?>
                                                </td>

                                                <td><?php echo $fetch['u_name']?></td>
                                                <td><?php echo $fetch['pro_qty']?></td>
                                                <td><?php echo $fetch['o_price']?></td>
                                                <td><?php echo $fetch['payment_method']?></td>
                                                <td><span class="badge bg-warning" style="font-size: 10px;"><?php echo $fetch['o_status']?></span></td>
                                                <?php 
                                                    if($fetch['o_status']=='Pending'){
                                                ?>
                                                    <td>
                                                    <a href="status_delivered_update.php?id=<?php echo $fetch['o_id']?>&name=order-list.php" class="btn btn-success text-light">Delivered</a>
                                                    <span style="font-size: 25px;">|</span>
                                                    <a class="btn btn-danger" href="orderdelete.php?id=<?php echo $fetch['o_id']?>">Delete</a>
                                                    </td>
                                                <?php
                                                    }else{
                                                ?>
                                                <td>
                                                <a class="btn btn-danger" href="orderdelete.php?id=<?php echo $fetch['o_id']?>">Delete</a>
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
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                </div>
            </div>  
        </div>                                 

    </div> 
    <?php
        }
        else{
            echo  "<script>window.location.assign('signin.php')</script>";
        }
    ?>
    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script>

    <!-- Plugin Js -->
    <script src="assets/bundles/dataTables.bundle.js"></script>  

    <!-- Jquery Page Js -->
    <script src="../js/template.js"></script>
    <script>
        $('#myDataTable')
        .addClass( 'nowrap')
        .dataTable( {
            responsive: true,
            columnDefs: [
                { targets: [-1, -3], className: 'dt-body-right' }
            ]
        });
    </script>
</body>

<!-- Mirrored from www.pixelwibes.com/template/ebazar/html/dist/order-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jun 2022 18:40:37 GMT -->
</html> 