<?php 
session_start();
include "connection.php";
$id=$_GET['id'];
$query=mysqli_query($connect,"DELETE FROM `subcategory_tbl` WHERE sc_id='$id' ");
$_SESSION['action']= "Column Deleted Successfully!!";
header('Location:Subcategorytable.php');

?>