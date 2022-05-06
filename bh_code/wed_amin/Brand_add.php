
<?php
    include "header_admin.php";
  
    include "handle/brand_class.php";
?>

<?php
    $bran = new bran;
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $cartegory_id = $_POST['cartegory_id'];
        $bran_name = $_POST['bran_name'];
        $insert_bran= $bran -> insert_bran($cartegory_id,  $bran_name);
    }
?>

        <section class="longin-amin">
            <div class="longin-right">
                <div class="contenner">
                    <p>Loại sản phẩm</p>
                    <form action="" method="POST">
                        <select name="cartegory_id" id="">
                            <option value="#"> -----CHỌN------ </option>
                                <?php
                                    $show_cartegory = $bran ->show_cartegory();
                                    if ($show_cartegory){while($result = $show_cartegory ->fetch_assoc()){
                                ?>
                                <option value="<?php echo $result['cartegory_id'] ?>"> <?php echo $result['cartegory_name'] ?> </option>
                                <?php
                                    }
                                }
                                ?>
                            
                        </select><br>
                        <input type="text" name="bran_name" placeholder="Nhập tên loại sản phẩm"> <br>
                        <button type="submit">Summit</button>
                    </form>
                </div>
            </div>
            
<?php
      include "bottum.php";
?>