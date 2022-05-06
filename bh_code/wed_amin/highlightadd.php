
<?php
    include "header_admin.php";
  
    include "handle/highlight_class.php";
?>

<?php
    $slider = new highlight ;
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        
        $insert_slider= $slider -> insert_highlight();
    }
?>

        <section class="longin-amin">
            <div class="longin-right">
                <div class="contenner">
                    <p>Hình ảnh</p>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <label for="">Ảnh: </label>
                        <input type="file" name="highlight_img">
                        <input type="text" name="highlight_active">
                        <button type="submit">THÊM</button>
                    </form>
                </div>
            </div>
            
<?php
      include "bottum.php";
?>