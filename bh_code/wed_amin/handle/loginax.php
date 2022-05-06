<?php
    include "login_class.php";
?>

<?php
    class dangnhap {

        public function show_admin($username, $pass){
            $admin = new dangky;
            $show_admin = $admin -> show_admin($username);
            $check_account = isset($show_admin-> num_rows) ? $show_admin-> num_rows : "";
            
            if ($check_account == 1){
                $result = $show_admin -> fetch_assoc();
                if (md5($pass) == $result['admin_pass']){
                    session_start();
                    $_SESSION['id'] = $result['admin_id'];
                    $_SESSION['name'] = $result['admin_name'];
                    $_SESSION['account'] = $result['admin_acc'];
                    $_SESSION['pass'] =  $result['admin_pass'];
                    header('Location:./home_page.php');
                }else{
                   
                    echo '<script language="javascript">';
                    echo 'alert("Sai mật khẩu")';  
                    echo '</script>';
                   
                }

            }else{
                echo '<script language="javascript">';
                echo 'alert("Tài khoảng không tồn tại")';  
                echo '</script>';
            }
                
        }
    }
?>