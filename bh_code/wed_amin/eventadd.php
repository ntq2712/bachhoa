
<?php
    include "header_admin.php";
  
    include "handle/event_class.php";
?>

<?php
    $product = new event;
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $insert_product = $product -> insert_discount();
    }
?>

        <section class="longin-amin">
            <div class="longin-right">
                <div class="contenner-product">
                    <p>Sản phẩm discount</p>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <label for="">Tên sản phẩm: </label>
                        <input required type="text" name="discount_name"> <br>
                        <label for="">Giá sản phẩm <span style="color: red;">*</span>:</label>
                        <input name="discount_price" required type="text"><br>
                        <label for="">Giá giảm<span style="color: red;">*</span>:</label>
                        <input name="discount_slump" type="text"><br>
                        <label for="">Hạn sữ dụng <span style="color: red;">*</span>:</label>
                        <input name="discount_date" type="text"><br>
                        <label for="">Mô tả sản phẩm :</label>
                        <textarea required name="discount_desc" id="" cols="30" rows="10" placeholder="Mô tả"></textarea><br>
                        <label for="">Ảnh sản phẩm <span style="color: red;">*</span>:</label>
                        <input name="discount_img" required type="file" accept=".jpg, .png"><br>  
                        <label for="">Active :</label>
                        <input name="discount_active" type="text"><br>
                        <button type="submit">Summit</button>
                </form>
                </div>
            </div>
          
<?php
      include "bottum.php";
?>