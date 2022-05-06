
<?php
    include "header_admin.php";
  
    include "handle/product_class.php";
?>

<?php
    $product = new product;
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $cartegory_id = $_POST['cartegory_id'];
    $insert_product = $product -> insert_product();
    }
?>

        <section class="longin-amin">
            <div class="longin-right">
                <div class="contenner-product">
                    <p>Danh mục sản phẩm</p>
                    <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">Tên sản phẩm: </label>
                    <input required type="text" name="product_name"> <br>
                    <label for="">Danh mục sản phẩm:</label>
                    <select name="cartegory_id" id="cartegory_id">
                        <option value="#">-----CHỌN------</option>
                         <?php
                                $show_cartegory = $product ->show_cartegory();
                                if ($show_cartegory){while($result = $show_cartegory ->fetch_assoc()){
                            ?>
                            <option value="<?php echo $result['cartegory_id'] ?>"> <?php echo $result['cartegory_name'] ?> </option>
                            <?php
                                }
                            }
                        ?>
                    </select> <br>
                    <label for="">Loại doanh mục:</label>
                    <select name="bran_id" id="bran_id">
                        <option value="#">-----CHỌN------</option>
                    </select><br>
                    <label for="">Giá sản phẩm <span style="color: red;">*</span>:</label>
                    <input name="product_price" required type="text"><br>
                    <label for="">Giá giá " % "<span style="color: red;">*</span>:</label>
                    <input name="product_slump" type="text"><br>
                    <label for="">Hạn sữ dụng <span style="color: red;">*</span>:</label>
                    <input name="product_date" type="text"><br>
                    <label for="">Mô tả sản phẩm :</label>
                    <textarea required name="product_desc" id="" cols="30" rows="10" placeholder="Mô tả"></textarea><br>
                    <label for="">Ảnh sản phẩm <span style="color: red;">*</span>:</label>
                    <input name="product_img" required type="file" accept=".jpg, .png"><br>
                    <label for="">Ảnh mô tả <span style="color: red;">*</span>:</label>
                    <input name="product_imga" required type="file" accept=".jpg, .png"><br>
                    <input name="product_imgb" required type="file" accept=".jpg, .png"><br>
                    <input name="product_imgc" required type="file" accept=".jpg, .png"><br>
                    <input name="product_imgd" required type="file" accept=".jpg, .png"><br>        
                    <button type="submit">Summit</button>
                </form>
                </div>
            </div>
          
<?php
      include "bottum.php";
?>