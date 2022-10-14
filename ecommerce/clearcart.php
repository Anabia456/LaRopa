<?php
    session_start();
    unset($_SESSION['myCart']);
    unset($_SESSION['myQty']);
    header("location:index.php");
?>