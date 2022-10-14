<?php 
session_start();
include "connection.php";
$id=$_GET['id'];
$query=mysqli_query($connect,"DELETE FROM `status_tbl` WHERE s_id='$id' ");
$_SESSION['action']= "Column Deleted Successfully!!";
header('Location:producttypetable.php');

?>