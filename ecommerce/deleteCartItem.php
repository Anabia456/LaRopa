<?php
    session_start();
    $getIdd = $_GET['id'];
    $getIndex = $_GET['index'];
    $getName = $_GET['name'];

    $key = array_search($getIdd,$_SESSION['myCart']);
    $Ikey = array_search($getIndex,$_SESSION['myQty']);

    unset($_SESSION['myCart'][$key]);
    unset($_SESSION['myQty'][$Ikey]);

    $_SESSION['myCart'] = array_values($_SESSION['myCart']);
    $_SESSION['myQty'] = array_values($_SESSION['myQty']);

    header("location:$getName");
?>