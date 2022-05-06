<?php
    include "dangky_class.php";
?>

<?php
    class dangnhap {
 
        public function show_dangnhap( $username, $pass){
            $customer = new dangky;
            $show_customer = $customer -> show_account($username);
            $check_account = isset( $show_customer -> num_rows) ?  $show_customer -> num_rows : "";
            
            if ($check_account == 1){
                $result = $show_customer -> fetch_assoc();
                if (md5($pass) == $result['customer_pass']){
                    session_start();
                    $_SESSION['id'] = $result['customer_id'];
                    $_SESSION['name'] = $result['customer_name_user'];
                    $_SESSION['account'] = $result['customer_name'];
                    $_SESSION['pass'] =  $result['customer_pass'];
                    header('Location:../wed_index/index_user.php');
                }else{
                    echo 'sai mật khẩu';
                }

            }else{
                echo 'tài khoản không tồn tại';
            }
                
        }

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
                    header('Location:../amin/userList.php');
                }else{
                    echo "sai mật khẩu";
                }

            }else{
                echo 'tài khoản không tồn tại';
            }
                
        }
    }
?>