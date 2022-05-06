<?php
    include "../database.php";
    
?>

<?php
    class product {
        private $db;

        public function __construct()
        {
            $this -> db = new Database();
        }
        public function show_cartegory(){
            $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_product(){
            $query = "SELECT tbl_product.*, tbl_cartegory.cartegory_name 
            FROM tbl_product INNER JOIN tbl_cartegory
            ON tbl_product.cartegory_id = tbl_cartegory.cartegory_id
            ORDER BY tbl_product.product_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_branax($cartegory_id){
                $query = "SELECT * FROM tbl_bran WHERE cartegory_id = '$cartegory_id'";
                $result = $this -> db -> select($query);
                return $result;
        }
        public function show_product_type($bran_id){
            $query = "SELECT * FROM tbl_product_type WHERE bran_id = '$bran_id'";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_bran(){
            $query = "SELECT tbl_bran.*, tbl_cartegory.cartegory_name 
            FROM tbl_bran INNER JOIN tbl_cartegory ON tbl_bran.cartegory_id = tbl_cartegory.cartegory_id 
            ORDER BY tbl_bran.bran_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function insert_product(){

            $product_name = $_POST['product_name'];
            $cartegory_id = $_POST['cartegory_id'];
            $bran_id = $_POST['bran_id'];
            $product_price = $_POST['product_price']; 
            $product_slump= $_POST['product_slump'];
            $product_date =   $_POST['product_date'];
            $product_desc = $_POST['product_desc'];
            $product_img = $_FILES['product_img']['name'];
            $product_imga = $_FILES['product_imga']['name'];
            $product_imgb = $_FILES['product_imgb']['name'];
            $product_imgc = $_FILES['product_imgc']['name'];
            $product_imgd = $_FILES['product_imgd']['name'];
            move_uploaded_file( $_FILES['product_img']['tmp_name'],"../uploads/".$_FILES['product_img']['name']);
           
            $query = "INSERT INTO tbl_product 
            (
                cartegory_id,
                bran_id,
                product_name,
                product_price,
                product_slump,
                product_date,
                product_desc,
                product_img,
                product_imga,
                product_imgb,
                product_imgc,
                product_imgd
            ) 
            VALUES 
            (   
                '$cartegory_id',
                '$bran_id',
                '$product_name',
                '$product_price',
                '$product_slump',
                '$product_date',
                '$product_desc',
                '$product_img',
                '$product_imga',
                '$product_imgb',
                '$product_imgc',
                '$product_imgd'
            )";
            $result = $this -> db -> insert($query);
            return $result;
        }
      
        public function update_bran( $bran_id, $bran_name){
            $query = "UPDATE tbl_bran SET bran_name = '$bran_name' WHERE bran_id = '$bran_id'";
            $result = $this -> db -> update($query);
            header('Location:branlist.php');
            return $result;
        }
        public function  delete_product($product_id){
            $query = "DELETE FROM tbl_product WHERE product_id = '$product_id'";
            $result = $this -> db -> delete($query);
            header('Location:productlist.php');
            return $result;
        }
    }
?>