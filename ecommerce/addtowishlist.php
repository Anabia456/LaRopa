<?php
    session_start();
    $getId = $_GET['id'];
    $getName = $_GET['name'];
    
    if( !in_array($getId,$_SESSION['wishlist']) ){
        array_push($_SESSION['wishlist'],$getId);
    }

    else{
        $key = array_search($getId,$_SESSION['wishlist']);
        echo $key;
    }
    
     header("Location:$getName");
?>