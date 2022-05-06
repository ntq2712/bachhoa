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
        public function show_discountx(){
            $query = "SELECT * FROM tbl_discount WHERE discount_active = '0' ORDER BY slider_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_discounty(){
            $query = "SELECT * FROM tbl_discount WHERE discount_active = '1' ORDER BY slider_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
    }
?>