
<?php
    include "header_admin.php";
  
    include "handle/catergory_class.php";
?>

<?php
    $cartegory = new cartegory;
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $cartegory_name = $_POST['cartegory_name'];
        $insert_cartegory = $cartegory -> insert_cartegory($cartegory_name);
    }
?>

        <section class="longin-amin">
            <div class="longin-right">
                <div class="contenner">
                    <p>Danh mục sản phẩm</p>
                    <form action="" method="POST">
                        <input name="cartegory_name" type="text" placeholder="Nhập tên danh mục..."><br>
                        <button type="submit">Summit</button>
                    </form>
                </div>
            </div>
            
<?php
      include "bottum.php";
?>