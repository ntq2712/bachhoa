<?php
    include "../database.php";
    
?>

<?php
    class highlight {
        private $db;

        public function __construct()
        {
            $this -> db = new Database();
        }
        public function insert_highlight(){
            $slider_img = $_FILES['highlight_img']['name'];
            $highlight_active = $_POST['highlight_active'];
            move_uploaded_file( $_FILES['highlight_img']['tmp_name'],"../uploads/".$_FILES['highlight_img']['name']);
            $query = "INSERT INTO tbl_highlight (highlight_img, highlight_active) VALUES ('$slider_img', '$highlight_active')";
            $result = $this -> db -> insert($query);
            return $result;
        }
        public function show_cartegory(){
            $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function get_cartegory($cartegory_id){
            $query = "SELECT * FROM tbl_cartegory WHERE cartegory_id = '$cartegory_id'";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function  update_cartegory($cartegory_id, $cartegory_name){
            $query = "UPDATE tbl_cartegory SET cartegory_name = '$cartegory_name' WHERE cartegory_id = '$cartegory_id'";
            $result = $this -> db -> update($query);
            header('Location:cartegorylist.php');
            return $result;
        }
        public function  delete_cartegory($cartegory_id){
            $query = "DELETE FROM tbl_cartegory WHERE cartegory_id = '$cartegory_id'";
            $result = $this -> db -> delete($query);
            header('Location:cartegorylist.php');
            return $result;
        }
    }
?>