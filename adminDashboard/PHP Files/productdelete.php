<?php 
include "connection.php";
$id=$_GET['id'];
$query=mysqli_query($connect,"DELETE FROM `product_tbl` WHERE p_id='$id' ");
// echo "<script>alert('Data Deleted!!')</script>";
header('Location:ProductTable.php');

?>