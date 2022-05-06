<?php
    include "database.php";
    
?>

<?php
    class dangky {
        private $db;

        public function __construct()
        {
            $this -> db = new Database();
        }
        public function insert_dangky(){
            $customer_name_user = $_POST['customer_name_user'];
            $customer_name = $_POST['customer_name'];
            $customer_pass = md5($_POST['customer_pass']);
            $query = "INSERT INTO tbl_customer
            (
                customer_name_user,
                customer_name,
                customer_pass
            ) 
            VALUES 
            (
                '$customer_name_user',
                '$customer_name',
                '$customer_pass'
            )";
            $result = $this -> db -> insert($query);
            header('Location:dangnhap.php');
            return $result;
        }
        public function show_dangky(){
            $query = "SELECT * FROM tbl_customer ORDER BY customer_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_account($customer_name){
            $query = "SELECT * FROM tbl_customer WHERE customer_name ='$customer_name' ORDER BY customer_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function show_admin($admin_acc){
            $query = "SELECT * FROM tbl_admin WHERE admin_acc ='$admin_acc' ORDER BY admin_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
    }
?>