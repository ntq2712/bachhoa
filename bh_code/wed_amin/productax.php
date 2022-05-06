<?php
     include "handle/product_class.php";
     $product = new product;

     $cartegory_id = $_GET['cartegory_id'];

  
?>

<?php
    
    $show_branax = $product ->show_branax($cartegory_id);
    if ($show_branax){while($result = $show_branax ->fetch_assoc()){
?>
<option value="<?php echo $result['bran_id'] ?>"> <?php echo $result['bran_name'] ?> </option>
<?php
    }
}
?>