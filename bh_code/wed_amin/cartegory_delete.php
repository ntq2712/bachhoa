<?php
    include "handle/catergory_class.php";
    $cartegory = new cartegory;
    if (!isset($_GET['cartegory_id']) or $_GET['cartegory_id'] == NULL){
        echo "<script> window.location = 'cartegorylist.php' </script>";
    }else{
        $cartegory_id = $_GET['cartegory_id'];
    }
    $delete_cartegory = $cartegory -> delete_cartegory($cartegory_id);
?>
