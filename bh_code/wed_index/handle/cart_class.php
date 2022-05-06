<?php
    include "../database.php";
?>

<?php
    class cart {
        private $db;

        public function __construct()
        {
            $this -> db = new Database();
        }
        public function insert_cart($product_id){
            $product_count = $_POST['product_count'];
            $query = "INSERT INTO tbl_cart
            (
                product_id,
                product_count 
            ) 
            VALUES 
            (
                '$product_id',
                '$product_count'
            )";
            $result = $this -> db -> insert($query);
            return $result;
        }
    }
?>