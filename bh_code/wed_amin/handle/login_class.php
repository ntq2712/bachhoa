<?php
    include "../database.php";
?>

<?php
    class dangky {
        private $db;

        public function __construct()
        {
            $this -> db = new Database();
        }
        public function show_admin($admin_acc){
            $query = "SELECT * FROM tbl_admin WHERE admin_acc ='$admin_acc' ORDER BY admin_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
    }
?>