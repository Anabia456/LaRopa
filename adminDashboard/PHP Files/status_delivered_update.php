<?php 
    include "connection.php";
    $id=$_GET['id'];
    $name=$_GET['name'];
    $query=mysqli_query($connect,"UPDATE `order_tbl` SET `o_status`='Delivered' WHERE o_id='$id'");
    echo "<script>window.location.assign('$name?id=$id')</script>";
?>