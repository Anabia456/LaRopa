<?php
    session_start();
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<!-- Mirrored from www.pixelwibes.com/template/ebazar/html/dist/customers.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jun 2022 18:40:37 GMT -->
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
            <div class="body d-flex py-lg-3 py-md-2">
                <div class="container-xxl">
                    <div class="row align-items-center">
                        <div class="border-0 mb-4">
                            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0">Customers Information</h3>
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                    <div class="row clearfix g-3">
                        <div class="col-sm-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Customers Name</th> 
                                                <th>Mail</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                include "connection.php";
                                                $query = "Select * from user_tbl";
                                                $result = mysqli_query($connect,$query);
                                                while($fetch = mysqli_fetch_assoc($result)){
                                            ?>
                                             <tr>
                                                <td><strong><?php echo $fetch['u_id']?></strong></td>
                                                <td>
                                                        <a href="customer-detail.html">
                                                            <img class="avatar rounded" src="assets/images/xs/avatar1.svg" alt="">
                                                            <span class="fw-bold ms-1"><?php echo $fetch['u_name']?></span>
                                                        </a>
                                                </td>
                                                <td><?php echo $fetch['u_email']?></td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <!-- <button type="button" class="btn btn-outline-secondary"  data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button> -->
                                                        <a href="customerdelete.php?id=<?php echo $fetch['u_id']?>" class="btn btn-outline-secondary"><i class="icofont-ui-delete text-danger"></i></a>
                                                        <!-- <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button> -->
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row End -->
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
        // project data table
        $(document).ready(function() {
            $('#myProjectTable')
            .addClass( 'nowrap' )
            .dataTable( {
                responsive: true,
                columnDefs: [
                    { targets: [-1, -3], className: 'dt-body-right' }
                ]
            });
            $('.deleterow').on('click',function(){
            var tablename = $(this).closest('table').DataTable();  
            tablename
                    .row( $(this)
                    .parents('tr') )
                    .remove()
                    .draw();

            } );
        });
    </script>
</body>

<!-- Mirrored from www.pixelwibes.com/template/ebazar/html/dist/customers.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jun 2022 18:40:38 GMT -->
</html>