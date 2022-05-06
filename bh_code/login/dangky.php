<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login Bằng Facebook</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
            <?php
                include "dangky_class.php";
                $customer = new dangky;
                if ($_SERVER['REQUEST_METHOD'] === 'POST'){
					$customer_name = $_POST['customer_name'];
					$a = $customer -> show_account($customer_name);
					$checkacc = isset($a -> num_rows) ? $a -> num_rows : "";
					if ($checkacc){
						echo 'tài khoảng đã tồn tại';
					}else{
						$insert_customer = $customer -> insert_dangky();
					}
                   
                }
            ?>
				<form class="login100-form validate-form flex-sb flex-w" method="POST">
                    <span class="login100-form-title p-b-53">
						ĐĂNG KÝ TÀI KHOẢNG
					</span>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							HỌ VÀ TÊN
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<input class="input100" type="text" name="customer_name_user" autocomplete="off" required>
						<span class="focus-input100"></span>
					</div>
                    <div class="p-t-31 p-b-9">
						<span class="txt1">
							TÀI KHOẢNG
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<input class="input100" type="text" name="customer_name" autocomplete="off" required>
						<span class="focus-input100"></span>
					</div>

                    <div class="p-t-13 p-b-9">
						<span class="txt1">
							MẬT KHẨU
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="customer_pass" autocomplete="off" required>
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							ĐĂNG KÝ
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
</body>

</html>