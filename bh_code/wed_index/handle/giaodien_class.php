<?php
    include "../database.php";
?>

<?php
    class giaodien {
        private $db;

        public function __construct()
        {
            $this -> db = new Database();
        }
        public function show_slider(){
            $query = "SELECT slider_img FROM tbl_slider WHERE slider_active = '0' ORDER BY slider_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_highlight_top(){
            $query = "SELECT highlight_img FROM tbl_highlight WHERE highlight_active = '1' ORDER BY highlight_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_highlight_bottum(){
            $query = "SELECT highlight_img FROM tbl_highlight WHERE highlight_active = '0' ORDER BY highlight_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_cartegory(){
            $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id ASC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_cartegoryx($cartegory_id){
            $query = "SELECT * FROM tbl_cartegory WHERE cartegory_id = '$cartegory_id' ";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_product_img($cartegory_id, $m, $n){
            $query = "SELECT * FROM tbl_product WHERE cartegory_id = '$cartegory_id' ORDER BY product_id ASC  LIMIT $m OFFSET $n";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_product_seach($seach, $m, $n){
            $query = "SELECT * FROM tbl_product WHERE product_name LIKE '%$seach%' ORDER BY product_id ASC  LIMIT $m OFFSET $n";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_product_seach_x($seach){
            $query = "SELECT * FROM tbl_product WHERE product_name LIKE '%$seach%' ORDER BY product_id ASC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_product_a($product_id){
            $query = "SELECT * FROM tbl_product WHERE product_id = '$product_id' ORDER BY product_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_product($cartegory_id){
            $query = "SELECT * FROM tbl_product WHERE cartegory_id = '$cartegory_id' ORDER BY product_id DESC";
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
        public function insert_cart($product_id,$product_name,$product_price,$product_img){
            
            $product_count = $_POST['product_count'];
            $query = "INSERT INTO tbl_cart
            (
                product_id,
            
                product_count,
                product_name,
                product_price,
                product_img
               
            ) 
            VALUES 
            (
                '$product_id',
                '$product_count',
                '$product_name',
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
        public function insert_cart_user($customer_id,$product_id,$product_name,$product_color,$product_price,$product_img){
            $product_size = $_POST['product_size'];
            $product_count = $_POST['product_count'];
            $query = "INSERT INTO tbl_cart_user
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
        public function show_cart_user($customer_id){
            $query = "SELECT * FROM tbl_cart_user WHERE customer_id ='$customer_id' ORDER BY cart_user_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function delete_cart_user($cart_user_id){
            $query = "DELETE FROM tbl_cart_user WHERE cart_user_id = '$cart_user_id'";
            $result = $this -> db -> delete($query);
            header('Location:cart_user.php');
            return $result;
        }
        public function show_discountx(){
            $query = "SELECT * FROM tbl_discount WHERE discount_active = '0' ORDER BY discount_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_discounty(){
            $query = "SELECT * FROM tbl_discount WHERE discount_active = '1' ORDER BY discount_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_discountz(){
            $query = "SELECT * FROM tbl_discount WHERE discount_active = '2' ORDER BY discount_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
    }
?>