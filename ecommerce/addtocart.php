<?php
    session_start();
    $getId = $_GET['id'];
    // $getSize = $_GET['size'];
    $getName = $_GET['name'];
    $getQty = $_POST['qty'];
    
    if( !in_array($getId,$_SESSION['myCart']) ){
        array_push($_SESSION['myCart'],$getId);

        if( $getQty != 0 ){
            array_push($_SESSION['myQty'],$getQty);
            // array_push($_SESSION['myQty'],$getSize);
        }else{
            array_push($_SESSION['myQty'],1);
            // array_push($_SESSION['myQty'],"Small");
        }
    }

    else{
        $key = array_search($getId,$_SESSION['myCart']);
        echo $key;
        $qty = $_SESSION['myQty'][$key];

        if( $getQty != 0 ){
            $_SESSION['myQty'][$key] = $getQty;
        }else{
            $_SESSION['myQty'][$key] = ++$qty;
        }
    }
    
     header("Location:$getName");
?>