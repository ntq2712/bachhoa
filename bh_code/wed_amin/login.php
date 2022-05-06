<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script> 
    <link rel="stylesheet" href="amin.css">
    <title>Document</title>
</head>


<script>
    $(document).ready(function() {
       $('#toggle').click(function(){
           $('nav').slideToggle();
       });
    })
</script>

<body>
    <header>
        <div id="wrapper">
            <div class="header">
                <div id="toggle">
                    <i class="fas fa-bars"></i>
                </div>
                <nav>
                    <ul id="main-menu">
                        <li><a href="">Trang Chủ</a></li>
                        <li><a href="">Danh Mục</a></li>
                        <li><a href="">Loại Sản Phẩm</a></li>
                        <li><a href="">Sản Phẩm</a></li>
                        <li><a href="">Khách Hàng</a></li>
                        <li><a href="">Hình Ảnh</a></li>
                        <li><a href="">Đơn Hàng</a></li>
                        <li><a href="">Giới Thiệu</a></li>
                        <li><a href="">Xem Dữ Liệu</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
<?php
    include "handle/loginax.php"
?>

<?php
    $dangnhap = new dangnhap;
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $show_dangnhap =  $dangnhap -> show_admin($username, $pass);
    }
?>

        <section class="longin-amin">
        <div class="longin-right">
            <p>Bạn cần đăng nhập tài khoảng để vào trang này.</p>
        </div>
        <div class="longin">
            <form action="" method="POST">
                <p>ĐĂNG NHẬP</p>
                <input name="username" type="text" placeholder="Nhập tài khoản của bạn....">
                <input name="pass" type="password" placeholder="Nhập mật khẩu của bạn...."><br>
                <button type="submit">Đăng nhập</button><br>
                <a href="">Quên mật khẩu</a>
            </form>
          
        </div>
        </section>
    <!-- footer -->
    <hr>
    <section class="app-contenr">
        <p> Project management: Nguyễn Trọng Quí</p>
        <div class="app-google">
            <img src="../upload/app-store.png">
            <img src="../upload/gg-play.png">
        </div>
        <p> Nhập hổ trợ từ nhà phát triển</p>
        <input type="text" placeholder="Nhập email của bạn....">
    </section>
   
    <div class="footer-top">
        <li> <a href=""><img src="../upload/thongbao.png"></a></li>
        <li> <a href="">Liên hệ</a></li>
        <li> <a href="">Tuyển dụng</a></li>
        <li> <a href="">Giới thiệu</a></li>
        <li>
            <a href=""><img src="../upload/fb.png"></a>
            <a href=""><img src="../upload/yt.jpg"></a>
            <a href=""><img src="../upload/tw.png"></a>
        </li>
    </div>
    <div class="footer-center">
        <p>
           Công ty phát triển phần mềm NTQ: 0105777651 <br>
            Địa chỉ đăng ký: Đường 30/4, Thị Xã Cây Lại, Tỉnh Tiền Giang<br>
            Hotline : <b>0397516328</b> .
        </p>
    </div>
    <div class="footer-bottom">
        ©TrongQui All rights reserved
    </div>
</body>
</html>