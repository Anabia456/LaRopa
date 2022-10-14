<?php 
session_start();
include "connection.php";
$id=$_GET['id'];
$query=mysqli_query($connect,"DELETE FROM `order_tbl` WHERE o_id='$id' ");
$_SESSION['action']= "Order Deleted Successfully!!";
header('Location:order-list.php');

?>