<?php 
include "connection.php";
$id=$_GET['id'];
$query=mysqli_query($connect,"UPDATE `order_tbl` SET `o_status`='Cancelled' WHERE o_id='$id'");
echo "<script>window.location.assign('orders.php')</script>";
?>