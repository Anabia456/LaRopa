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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

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

            <?php
                include "navbar.php";
            ?>

            <!-- Body: Body -->
            <div class="body d-flex py-3">
                <div class="container-xxl">

                    <div class="row align-items-center">
                        <div class="border-0 mb-4">
                            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0">Edit Product</h3>
                                <!-- <button type="submit" class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">Save</button> -->
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
                                    <?php 
                                    include "connection.php";
                                    $id=$_GET['id'];
                                    $query=mysqli_query($connect,"Select P.p_id, P.p_name,P.p_desc,P.p_price,P.p_availiblity,C.c_name,S.sc_name,P.p_img
                                    from product_tbl P inner join category_tbl C on C.c_id=P.p_category 
                                    inner join subcategory_tbl S on S.sc_id=P.p_subcategory
                                    inner join status_tbl Z on Z.s_id=P.status where p_id='$id'");
                                    while($row=mysqli_fetch_assoc($query)){
                                    $images=explode(",",$row['p_img']);
                                    ?>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="row g-3 align-items-center">
                                        <div class="col-md-12">
                                                        <ul>
                                                        <?php 
                                                        for($i=0 ; $i<count($images); $i++){
                                                        ?>
                                                            
                                                            <img src="../../images/<?php echo $images[$i]?>" alt="img" height="150px"> 
                                                            <span style="font-size:30px;"><a href="dlt_img.php?did=<?php echo $row['p_id']?>&index=<?php echo $i?>"><i style="position: relative; top: -61px; left: -30px;" class="bi bi-x"></i></a></span>
                                                        <?php
                                                        }
                                                        ?>
                                                        <label for="imgUpload"  class="form-label"><i class="bi bi-file-earmark-plus mb-3" style="font-size: 120px;"></i></label>                                                       
                                                        <input id="imgUpload" hidden type="file" name="files[]" multiple="multiple" class="form-control">
                                                        </ul>
                                                    </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">Product Name</label>
                                                <input type="text" name="pName" value="<?php echo $row['p_name']?>" pattern="[A-Z a-z]{4,50}" class="form-control" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">Product Price</label>
                                                <input type="number" name ="pPrice" value="<?php echo $row['p_price']?>" class="form-control" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Product Description</label>
                                                    <input type="text" name="pDescription" value="<?php echo $row['p_desc']?>" class="form-control" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Product Availiblity</label>
                                                <input type="text" name="pAvail" value="<?php echo $row['p_availiblity']?>" class="form-control" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="sel1" class="form-label">Product Category</label>
                                                <select name="pCat" id="category" class="form-control" required>
                                                <option>Select Category</option>
                                                    <?php
                                                        include "connection.php";
                                                        $result = mysqli_query($connect,"select * from category_tbl");
                                                       
                                                        while( $fetch = mysqli_fetch_array($result)){
                                                            echo "<option  value=".$fetch["c_id"].">".$fetch["c_name"]."</option>";
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                                    <div class="col-md-6">
                                                        <label for="sel1" class="form-label">Product Sub-Category</label>
                                                        <select name="scat" id="sub_category" class="form-control" required>
                                                        
                                                        </select>
                                                    </div>

                                                    <div class="col-md-6">
                                                <label for="sel1" class="form-label">Product Status</label>
                                                <select name="status" class="form-control" required>
                                                <option>Select Here</option>
                                                    <?php
                                                        include "connection.php";
                                                        $result1 = mysqli_query($connect,"select * from status_tbl");
                                                       
                                                        while( $fetch1 = mysqli_fetch_array($result1)){
                                                            echo "<option  value=".$fetch1["s_id"].">".$fetch1["s_status"]."</option>";
                                                        }
                                                    ?>
                                                </select>
                                            </div>

                                                    <button type="submit" class="btn btn-primary w-25 float-left" name="edit">Edit Product</button>
                                                </div>
                                            </form>
                                        
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

<script>
$(document).ready(function() {
	$('#category').on('change', function() {
			var c_id = this.value;
			$.ajax({
				url: "get_subcat.php",
				type: "POST",
				data: {
					c_id: c_id
				},
				cache: false,
				success: function(dataResult){
					$("#sub_category").html(dataResult);
				}
			});		
	});
});
</script>
<?php
        }else{
            echo  "<script>window.location.assign('signin.php')</script>";
        }
    ?>
</body>
</html>
<!-- Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae cum ratione amet et in odio. -->
<?php
if(isset($_POST['edit'])){
  include "connection.php";
  
$id=$_GET['id'];
$name=$_POST['pName'];
$price=$_POST['pPrice'];
$des=$_POST['pDescription'];
$avail=$_POST['pAvail'];
$cat=$_POST['pCat'];
$status=$_POST['status'];
$subcat=$_POST['scat'];
$uploadimg= "../../images/";

$filecount=count($_FILES['files']['tmp_name']);

for ($i=0; $i < $filecount ; $i++) { 
  $uploadfile=$uploadimg.basename($_FILES['files']['name'][$i]);
  $images[]=basename($_FILES['files']['name'][$i]);
  $filetype=strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION));
  if($filetype=='jpg' || $filetype=='jpeg' || $filetype=='png' || $filetype=='jfif') {
    if (move_uploaded_file($_FILES['files']['tmp_name'][$i],$uploadfile)) {
    //   echo "<script>alert('Data Updated!')</script>";   
    }else{
      echo "<script>alert('No Data Updated!')</script>";
    }
  }
}
$pimg=implode(",",$images);
$query = mysqli_query($connect,"UPDATE `product_tbl` SET `p_name`='$name',`p_desc`='$des',`p_price`='$price',`p_availiblity`='$avail',`p_category`='$cat',`p_subcategory`='$subcat',`status`='$status', p_img='$pimg' WHERE p_id='$id'");
echo "<script>window.location.assign('ProductTable.php')</script>"; 
}

?>