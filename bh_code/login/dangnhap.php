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
                 include "dangnhap_class.php";
            ?>
            <?php
                $dangnhap = new dangnhap;
                if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                    $username = $_POST['username'];
                    $pass = $_POST['pass'];
                    $show_dangnhap =  $dangnhap -> show_dangnhap($username, $pass);
                }
                
            ?>
				<form class="login100-form validate-form flex-sb flex-w" method="POST">
					<span class="login100-form-title p-b-53">
						ĐĂNG NHẬP VỚI
					</span>

					<a href="#" class="btn-face m-b-20" onclick="fbLogin()">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a>

					<a href="#" class="btn-google m-b-20">
						<img src="images/icons/icon-google.png" alt="GOOGLE">
						Google
					</a>

					<div class="p-t-31 p-b-9">
						<span class="txt1">
							TÀI KHOẢNG
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<input class="input100" type="text" name="username" autocomplete="off" required>
						<span class="focus-input100"></span>
					</div>

					<div class="p-t-13 p-b-9">
						<span class="txt1">
							MẬT KHẨU
						</span>

						<a href="#" class="txt2 bo1 m-l-5">
							QUÊN MẬT KHẨU?
						</a>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass" autocomplete="off" required>
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							ĐĂNG NHẬP
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Chưa có tài khoảng?
						</span>

						<a href="dangky.php" class="txt2 bo1">
							Đăng ký
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="display">
		<div id="status"></div>
		<a id="fbLink"></a>
		<div id="userData"></div>
	</div>
</body>
<script>
		let secretAppKey = "6d0173227c2e7a500639076525aa602f";
		let appID = "913831392877244";
		window.fbAsyncInit = function () {
			FB.init({
				appId: appID,
				cookie: true,
				xfbml: true,
				version: 'v3.2'
			});
			FB.getLoginStatus(function (response) {
				if (response.status === 'connected') {
					getFbUserData();
				}
			});
		};
		(function (d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));

		function fbLogin() {
			FB.login(function (response) {
				if (response.authResponse) {
					getFbUserData();
				} else {
					document.getElementsByClassName('limiter')[0].style.display = 'none'
					document.getElementById('status').innerHTML = 'Lỗi';
				}
			}, { scope: 'email' });
		}
		function getFbUserData() {
			FB.api('/me', { locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture' },
				function (response) {
					document.getElementsByClassName('limiter')[0].style.display = 'none'
					document.getElementById('fbLink').setAttribute("onclick", "fbLogout()");
					document.getElementById('fbLink').innerHTML = 'Đăng Xuất';
					document.getElementById('status').innerHTML = '<p>Đăng Nhập Thành Công</p>';
					document.getElementById('userData').innerHTML = '<h2>Facebook Profile</h2><p><img src="' + response.picture.data.url + '"/></p><p><b>FB ID:</b> ' + response.id + '</p><p><b>Tên:</b> ' + response.first_name + ' ' + response.last_name + '</p><p><b>Email:</b> ' + response.email + '</p><p><b>Giới Tính:</b> ' + response.gender + '</p>';
				});
		}
		function fbLogout() {
			FB.logout(function () {
				document.getElementById('fbLink').setAttribute("onclick", "fbLogin()");
				document.getElementById('status').innerHTML = 'Đăng Xuất Thành Công';
				document.getElementById('fbLink').innerHTML = '';
				document.getElementById('userData').innerHTML = 'Chuyển hướng sang trang Đăng Nhập trong 3 giây';
				setTimeout(() => {
					document.getElementById('userData').innerHTML = 'Chuyển hướng sang trang Đăng Nhập trong 2 giây';
				}, 1000);
				setTimeout(() => {
					document.getElementById('userData').innerHTML = 'Chuyển hướng sang trang Đăng Nhập trong 1 giây';
				}, 2000);
				setTimeout(() => {
					document.getElementsByClassName('limiter')[0].style.display = 'block'
				}, 3000);
			});
		}
	</script>
</html>