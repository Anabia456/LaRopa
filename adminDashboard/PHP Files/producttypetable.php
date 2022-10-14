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
                                <a href="producttypeAdd.php" class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">Add new</a>
                            </div>
                        </div>
                    </div> <!-- Row end  -->
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
                            <div class="card mb-3">
                                <div class="card-body">
                                    <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Product Type</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            include "connection.php";
                                            $query=mysqli_query($connect,"Select *
                                            from status_tbl ");   
                                            while($row=mysqli_fetch_assoc($query)){ 
                                            ?>
                                            <tr>
                                                <td><?php echo $row['s_id']?></td>
                                                <td><?php echo $row['s_status']?></td>
                                                <td><a href="typeedit.php?id=<?php echo $row['s_id']?>"><i class="bi bi-pencil-square" style="font-size: 25px;"></i></a>
                                                <span style="font-size: 25px;">|</span>
                                                <a href="typedelete.php?id=<?php echo $row['s_id']?>"><i class="bi bi-trash" style="font-size: 25px;"></i></a></td>
                                                
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
