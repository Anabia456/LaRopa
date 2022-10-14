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
            ?>

            <!-- Body: Body -->
            <div class="body d-flex py-3">
                <div class="container-xxl">
                    <div class="row align-items-center">
                        <div class="border-0 mb-4">
                            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0">Products Data</h3>
                                <a href="productadd.php" class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">Add new Product</a>
                            </div>
                        </div>
                    </div> <!-- Row end  -->

                            <div class="card mb-3">
                                <div class="card-body">
                                    <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Product Name</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                                <th>Availibility</th>
                                                <th>Category</th>
                                                <th>Sub-Category</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            // select * from order_tbl O inner join product_tbl P on O.pro_id = P.p_id inner join category_tbl C on C.c_id=P.p_category inner join subcategory_tbl S on S.sc_id=P.p_subcategory
                                            // inner join status_tbl Z on Z.s_id=P.status
                                            
                                            include "connection.php";
                                            $query=mysqli_query($connect,"Select *
                                                from product_tbl P inner join category_tbl C on C.c_id=P.p_category 
                                                inner join subcategory_tbl S on S.sc_id=P.p_subcategory
                                                inner join status_tbl Z on Z.s_id=P.status");   
                                            while($row=mysqli_fetch_assoc($query)){ 
                                                $images=explode(",",$row['p_img']);
                                            ?>
                                            <tr>
                                               
                                                <td><img src="../../images/<?php echo $images[0]?>" alt="pimage" height="100px"></td>
                                                <td><?php echo $row['p_name']?></td>
                                                <td><?php echo $row['p_desc']?></td>
                                                <td><?php echo $row['p_price']?></td>
                                                <td><?php echo $row['p_availiblity']?><br>
                                                <!-- <span style="font-size: 25px;">|</span> -->
                                                <a href="instock.php?id=<?php echo $row['p_id']?>"><i class="bi bi-bag-check-fill" style="font-size: 25px;"></i></a>
                                                <span style="font-size: 25px;">-</span>
                                                <a href="outofstock.php?id=<?php echo $row['p_id']?>"><i class="bi bi-bag-x-fill" style="font-size: 25px;"></i></a></td>
                                                <td><?php echo $row['c_name']?></td>
                                                <td><?php echo $row['sc_name']?></td>
                                                <td><?php echo $row['s_status']?></td>
                                                <td><a href="productedit.php?id=<?php echo $row['p_id']?>"><i class="bi bi-pencil-square" style="font-size: 25px;"></i></a>
                                                <span style="font-size: 25px;">|</span>
                                                <a href="productdelete.php?id=<?php echo $row['p_id']?>"><i class="bi bi-trash" style="font-size: 25px;"></i></a></td>
                                                
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
