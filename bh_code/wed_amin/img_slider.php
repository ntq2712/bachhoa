
<?php
    include "header_admin.php";
  
    include "handle/slider_class.php";
?>

<?php
    $slider = new slider ;
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        
        $insert_slider= $slider -> insert_slider();
    }
?>

        <section class="longin-amin">
            <div class="longin-right">
                <div class="contenner">
                    <p>Hình ảnh</p>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <label for="">Ảnh: </label>
                        <input type="file" name="slider_img">
                        <button type="submit">THÊM</button>
                    </form>
                </div>
            </div>
            
<?php
      include "bottum.php";
?>