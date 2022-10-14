<?php 
include "connection.php";
$id=$_GET['id'];
$query=mysqli_query($connect,"UPDATE `product_tbl` SET `p_availiblity`='In Stock' WHERE p_id='$id'");
echo "<script>window.location.assign('ProductTable.php')</script>";
?>