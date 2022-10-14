<?php
    session_start();
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<!-- Mirrored from www.pixelwibes.com/template/ebazar/html/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jun 2022 18:39:51 GMT -->
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
           
            <!-- Body: Header -->
            <?php
                include "navbar.php";
            ?>

            <!-- Body: Body -->
            <div class="body d-flex py-3">
                <div class="container-xxl">

                    <div class="row g-3 mb-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
                        <div class="col">
                            <div class="alert-success alert mb-0">
                                <div class="d-flex align-items-center">
                                    <div class="flex-fill ms-3 text-truncate">
                                        <div class="h6 mb-0">Customers</div>
                                        <?php 
                                            include "connection.php";
                                            $query=mysqli_query($connect,"Select COUNT(*) from user_tbl");
                                            $row=mysqli_fetch_array($query);
                                        ?>
                                        <span class="small"><?php echo $row['COUNT(*)']?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="alert-danger alert mb-0">
                                <div class="d-flex align-items-center">
                                    <div class="flex-fill ms-3 text-truncate">
                                        <div class="h6 mb-0">Contacts</div>
                                        <?php 
                                            include "connection.php";
                                            $query=mysqli_query($connect,"Select COUNT(*) from contact_tbl");
                                            $row=mysqli_fetch_array($query);
                                        ?>
                                        <span class="small"><?php echo $row['COUNT(*)']?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="alert-warning alert mb-0">
                                <div class="d-flex align-items-center">
                                    <div class="flex-fill ms-3 text-truncate">
                                        <div class="h6 mb-0">Products</div>
                                        <?php 
                                            include "connection.php";
                                            $query=mysqli_query($connect,"Select COUNT(*) from product_tbl");
                                            $row=mysqli_fetch_array($query);
                                        ?>
                                        <span class="small"><?php echo $row['COUNT(*)']?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="alert-info alert mb-0">
                                <div class="d-flex align-items-center">
                                    <div class="flex-fill ms-3 text-truncate">
                                        <div class="h6 mb-0">Orders</div>
                                        <?php 
                                            include "connection.php";
                                            $query=mysqli_query($connect,"Select COUNT(*) from order_tbl");
                                            $row=mysqli_fetch_array($query);
                                        ?>
                                        <span class="small"><?php echo $row['COUNT(*)']?></span>
                                    </div>
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

    <!-- Plugin Js -->
    <script src="assets/bundles/apexcharts.bundle.js"></script>
    <script src="assets/bundles/dataTables.bundle.js"></script>  

    <!-- Jquery Page Js -->
    <script src="../js/template.js"></script>
    <script src="../js/page/index.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1Jr7axGGkwvHRnNfoOzoVRFV3yOPHJEU&amp;callback=myMap"></script>  
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

<!-- Mirrored from www.pixelwibes.com/template/ebazar/html/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jun 2022 18:40:14 GMT -->
</html> 