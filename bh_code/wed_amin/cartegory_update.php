
<?php
    include "header_admin.php";
  
    include "handle/catergory_class.php";
?>

<?php
    $cartegory = new cartegory;
    if (!isset($_GET['cartegory_id']) or $_GET['cartegory_id'] == NULL){
        echo "<script> window.location = 'cartegorylist.php' </script>";
    }else{
        $cartegory_id = $_GET['cartegory_id'];
    }
    $get_cartegory = $cartegory -> get_cartegory($cartegory_id);
    if ($get_cartegory){
        $result = $get_cartegory -> fetch_assoc();
    }
?>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $cartegory_name = $_POST['cartegory_name'];
        $update_cartegory = $cartegory -> update_cartegory( $cartegory_id, $cartegory_name);
    }
?>


        <section class="longin-amin">
            <div class="longin-right">
                <div class="contenner">
                    <p>Sửa danh mục sản phẩm</p>
                    <form action="" method="POST">
                    <input type="text" name="cartegory_name" placeholder="Nhập tên danh mục" 
                    value="<?php echo $result['cartegory_name'] ?>"><br>
                    <button type="submit">Update</button>
                    </form>
                </div>
            </div>
            
<?php
      include "bottum.php";
?>