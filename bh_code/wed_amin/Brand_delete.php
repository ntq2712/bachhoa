<?php
    include "handle/brand_class.php";
    $bran = new bran;
    if (!isset($_GET['bran_id']) or $_GET['bran_id'] == NULL){
        echo "<script> window.location = 'branlist.php' </script>";
    }else{
        $bran_id = $_GET['bran_id'];
    }
    $delete_bran = $bran -> delete_bran($bran_id);
?>