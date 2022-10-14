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

$name=$_POST['pName'];
$size=$_POST['size'];
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
  if($filetype=='jpg' || $filetype=='jpeg' || $filetype=='png' || $filetype=='jfif' || $filetype=='webp') {
    if (move_uploaded_file($_FILES['files']['tmp_name'][$i],$uploadfile)) {
      header('Location:ProductTable.php');
      echo $query;

        // echo "uploaded!!"; 
    }else{
      header('Location:ProductAdd.php');
        // echo "not uploaded!!"; 

    }
  }
}
$pimg=implode(",",$images);
$chk = "";
foreach($size as $size1){
    $chk .= $size1.",";
}
$query = mysqli_query($connect,"insert into product_tbl(p_name,p_size,p_desc,p_price,p_availiblity,p_category,p_subcategory,status,p_img)
        value('$name','$chk','$des','$price','$avail','$cat','$subcat','$status','$pimg')");
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
                                <h3 class="fw-bold mb-0">Add Product</h3>
                                <a href="producttable.php" type="submit" class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">View</a>
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
                                        <div class="row g-3 align-items-center">
                                            <div class="col-md-6">
                                                <label  class="form-label">Product Name</label>
                                                <input type="text" name="pName"class="form-control" pattern="[A-Z a-z]{4,50}" required>
                                            </div>
                                            <!-- pattern="[A-Z a-z]{4,50}"  -->
                                            <div class="col-md-6">
                                                <label  class="form-label">Product Price</label>
                                                <input type="number" name ="pPrice" class="form-control" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Product Description</label>
                                                    <input type="text" name="pDescription" class="form-control" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Product Availiblity</label>
                                                <input type="text" name="pAvail" class="form-control" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="sel1" class="form-label">Product Category</label>
                                                <select name="pCat" id="category" class="form-control" required>
                                                <option value="">Select Category</option>
                                                    <?php
                                                        include "connection.php";
                                                        $result = mysqli_query($connect,"select * from category_tbl");
                                                       
                                                        while( $fetch = mysqli_fetch_array($result)){
                                                            echo "<option value=".$fetch["c_id"].">".$fetch["c_name"]."</option>";
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
                                                        <label for="sel1" class="form-label">Product Sizes</label><br>
                                                        <input type="checkbox" name="size[]" value="Small">&nbsp;
                                                        <label for="sel1" class="form-label">Small</label><br>
                                                        <input type="checkbox" name="size[]" value="Medium">&nbsp;
                                                        <label for="sel1" class="form-label">Medium</label><br>
                                                        <input type="checkbox" name="size[]" value="Large">&nbsp;
                                                        <label for="sel1" class="form-label">Large</label><br>
                                                    </div>
                                            <div class="col-md-6">
                                                <label for="sel1" class="form-label">Product Status</label>
                                                <select name="status" class="form-control" required>
                                                <option value="">Select here</option>
                                                    <?php
                                                        include "connection.php";
                                                        $result1 = mysqli_query($connect,"select * from status_tbl");
                                                       
                                                        while( $fetch1 = mysqli_fetch_array($result1)){
                                                            echo "<option value=".$fetch1["s_id"].">".$fetch1["s_status"]."</option>";
                                                        }
                                                    ?>
                                                </select>
                                            </div>

                                                    <div class="col-md-12">
                                                        <label class="form-label">Product Image</label>
                                                        <input type="file"  name="files[]" multiple="multiple" class="form-control">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary w-25 float-left" name="add">Add Product</button>
                                                </div>
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