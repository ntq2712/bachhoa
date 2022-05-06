<?php
    include "../database.php";
    
?>

<?php
    class bran {
        private $db;

        public function __construct()
        {
            $this -> db = new Database();
        }
        public function insert_bran($cartegory_id, $bran_name){
            $query = "INSERT INTO tbl_bran (cartegory_id, bran_name) VALUES ('$cartegory_id', '$bran_name')";
            $result = $this -> db -> insert($query);
            return $result;
        }
        public function show_bran(){
            $query = "SELECT tbl_bran.*, tbl_cartegory.cartegory_name 
            FROM tbl_bran INNER JOIN tbl_cartegory ON tbl_bran.cartegory_id = tbl_cartegory.cartegory_id 
            ORDER BY tbl_bran.bran_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_cartegory(){
            $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function get_bran($bran_id){
            $query = "SELECT * FROM tbl_bran WHERE bran_id = '$bran_id'";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function update_bran( $bran_id, $bran_name){
            $query = "UPDATE tbl_bran SET bran_name = '$bran_name' WHERE bran_id = '$bran_id'";
            $result = $this -> db -> update($query);
            header('Location:branlist.php');
            return $result;
        }
        public function  delete_bran($bran_id){
            $query = "DELETE FROM tbl_bran WHERE bran_id = '$bran_id'";
            $result = $this -> db -> delete($query);
            header('Location:branlist.php');
            return $result;
        }
    }
?>