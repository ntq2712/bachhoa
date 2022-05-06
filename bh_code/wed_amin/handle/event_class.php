<?php
    include "../database.php";
    
?>

<?php
    class event {
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
        public function insert_discount(){
            $discount_name = $_POST['discount_name'];
            $discount_price = $_POST['discount_price']; 
            $discount_slump= $_POST['discount_slump'];
            $discount_date =   $_POST['discount_date'];
            $discount_desc = $_POST['discount_desc'];
            $discount_active = $_POST['discount_active'];
            $discount_img = $_FILES['discount_img']['name'];
            move_uploaded_file( $_FILES['discount_img']['tmp_name'],"../uploads/".$_FILES['discount_img']['name']);
            $query = "INSERT INTO tbl_discount 
            (
                discount_name,
                discount_price,
                discount_slump,
                discount_date,
                discount_img,
                
                discount_active,
                discount_desc
                
            ) 
            VALUES 
            (   
                '$discount_name',
                '$discount_price',
                '$discount_slump',
                '$discount_date',
                '$discount_img',
                '$discount_active',
                '$discount_desc'
               
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
        public function  delete_discount($discount_id){
            $query = "DELETE FROM tbl_discount WHERE discount_id = '$discount_id'";
            $result = $this -> db -> delete($query);
            header('Location:discountlist.php');
            return $result;
        }
    }
?>