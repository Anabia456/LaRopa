<?php
    session_start();
    $getIdd = $_GET['id'];
    $getIndex = $_GET['index'];
    $getName = $_GET['name'];

    $key = array_search($getIdd,$_SESSION['wishlist']);

    unset($_SESSION['wishlist'][$key]);

    $_SESSION['wishlist'] = array_values($_SESSION['wishlist']);

    header("location:$getName");
?>