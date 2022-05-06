<?php
    include "../database.php";
?>

<?php
    class user {
        private $db;

        public function __construct()
        {
            $this -> db = new Database();
        }
        public function show_slider(){
            $query = "SELECT slider_img FROM tbl_slider WHERE slider_active = '1' ORDER BY slider_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_cartegory(){
            $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_product_img($cartegory_id, $m, $n){
            $query = "SELECT * FROM tbl_product WHERE cartegory_id = '$cartegory_id' ORDER BY product_id ASC  LIMIT $m OFFSET $n";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_product_a($product_id){
            $query = "SELECT * FROM tbl_product WHERE product_id = '$product_id' ORDER BY product_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_product(){
            $query = "SELECT * FROM tbl_product ORDER BY product_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_cart(){
            $query = "SELECT * FROM tbl_cart ORDER BY cart_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_bran($cartegory_id){
            $query = "SELECT *FROM tbl_bran WHERE cartegory_id = '$cartegory_id' ORDER BY bran_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_product_type($bran_id){
            $query = "SELECT * FROM tbl_product_type WHERE bran_id = '$bran_id' ORDER BY product_type_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function insert_cart_user($customer_id,$product_id,$product_name,$product_color,$product_price,$product_img){
            $product_size = "XL";
            $product_count = $_POST['product_count'];
            $query = "INSERT INTO tbl_cart
            (
                customer_id,
                product_id,
                product_size,
                product_count,
                product_name,
                product_color,
                product_price,
                product_img
               
            ) 
            VALUES 
            (
                '$customer_id',
                '$product_id',
                '$product_size',
                '$product_count',
                '$product_name',
                '$product_color',
                '$product_price',
                '$product_img'
            )";
            $result = $this -> db -> insert($query);
            return $result;
        }
        public function delete_cart($cart_id){
            $query = "DELETE FROM tbl_cart WHERE cart_id = '$cart_id'";
            $result = $this -> db -> delete($query);
            header('Location:cart.php');
            return $result;
        }
    }
?>