<?php
    include "handle/giaodien_class.php";
    $giaodien = new giaodien;
    if (!isset($_GET['cart_id']) or $_GET['cart_id'] == NULL){
        echo "<script> window.location = 'cart.php' </script>";
    }else{
        $cart_id = $_GET['cart_id'];
    }
    $delete_cart = $giaodien -> delete_cart($cart_id);
?>