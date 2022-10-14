<?php
    include "connection.php";
    $id = $_GET['did'];
    $index = $_GET['index'];

    $mysql = "Select * from product_tbl where p_id = '$id'";
    $result = mysqli_query($connect,$mysql);
    $row = mysqli_fetch_assoc($result);
    $images = explode(",",$row['p_img']);
    // echo print_r($images);
    unset($images[$index]);
    // echo print_r($images);
    $p_imgs = implode(",",$images);
    $mysqli = "update product_tbl set p_img = '$p_imgs' where p_id = '$id'";
    mysqli_query($connect,$mysqli);
    header("location:producttable.php");

?>