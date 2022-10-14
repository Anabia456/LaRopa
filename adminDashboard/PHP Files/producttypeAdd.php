<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <?php
        include "Head.php";
    ?>
</head>
<body>
<?php
        if(isset($_SESSION["aId"])){
    ?>
<?php
if(isset($_POST['add'])){
  include "connection.php";

$name = $_POST['ptype'];
$query = mysqli_query($connect,"insert into status_tbl(s_status)
        value('$name')");
}

?>
<div id="ebazar-layout" class="theme-blue">
        
        <!-- sidebar -->
        <?php
            include "Aside.php";
        ?>
    

        <!-- main body area -->
        <div class="main px-lg-4 px-md-4"> 

            <?php
                include "navbar.php";
            ?>

            <!-- Body: Body -->
            <div class="body d-flex py-3">
                <div class="container-xxl">

                    <div class="row align-items-center">
                        <div class="border-0 mb-4">
                            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0">Add Product Type</h3>
                                <a href="producttypetable.php" type="submit" class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">View</a>
                            </div>
                        </div>
                    </div> <!-- Row end  -->  
                    
                    <div class="row g-3 mb-3">
                        <div class="col-xl-12 col-lg-8">
                            <div class="card mb-3">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Basic information</h6>
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="g-3 align-items-center">
                                            <div class="col-md-6">
                                                <label  class="form-label">Product Type</label>
                                                <input type="text" name="ptype"class="form-control" pattern="[A-Z a-z]{4,50}" required>
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-primary w-25 float-left" name="add">Add</button>
                                            </form>
                                        </div>
                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                 
                                </div>
                        </div>
                    </div>
                    
                </div>
            </div>    
        </div>
    </div>
</div>
</div>      
</div>

    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="../../../../../cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
    <script src="assets/plugin/multi-select/js/jquery.multi-select.js"></script>
    <script src="assets/plugin/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>  
    <script src="assets/plugin/cropper/cropper.min.js"></script>
    <script src="assets/plugin/cropper/cropper-init.js"></script>
    <script src="assets/bundles/dropify.bundle.js"></script>
    <script src="assets/bundles/dataTables.bundle.js"></script>
    <script src="../js/template.js"></script>

<?php
        }else{
            echo  "<script>window.location.assign('signin.php')</script>";
        }
    ?>
</body>
</html>
<!-- Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae cum ratione amet et in odio. -->