
<?php
    include "header_admin.php";
  
    include "handle/brand_class.php";
?>

<?php
    $bran = new bran;
    if (!isset($_GET['bran_id']) or $_GET['bran_id'] == NULL){
        echo "<script> window.location = 'branlist.php' </script>";
    }else{
        $bran_id = $_GET['bran_id'];
    }
    $get_bran = $bran -> get_bran($bran_id);
    if ($get_bran){
        $result = $get_bran -> fetch_assoc();
    }
?>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $bran_name = $_POST['bran_name'];
        $update_bran = $bran -> update_bran( $bran_id, $bran_name);
    }
?>


        <section class="longin-amin">
            <div class="longin-right">
                <div class="contenner">
                    <p>Sửa loại sản phẩm</p>
                    <form action="" method="POST">
                    <input type="text" name="bran_name" placeholder="Tên loại sản phẩm" 
                    value="<?php echo $result['bran_name'] ?>"><br>
                    <button type="submit">Update</button>
                    </form>
                </div>
            </div>
            
<?php
      include "bottum.php";
?>