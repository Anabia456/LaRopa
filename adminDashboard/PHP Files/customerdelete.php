<?php 
    include "connection.php";
    $id=$_GET['id'];
    $query=mysqli_query($connect,"DELETE FROM `user_tbl` WHERE u_id='$id' ");
    echo "<script>alert('Data Deleted!!')</script>";
    header('Location:customersTable.php');
?>