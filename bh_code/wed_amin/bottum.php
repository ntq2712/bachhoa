<div class="information">
                <h1>Thông Tin</h1>
                <div class="information-items">
                    <div class="information-items-other">
                        <div class="information-items-other-right">
                            <label for="name">Full Name: </label>
                            <label for="name">Birth Day: </label>
                            <label for="name">Address: </label>
                            <label for="phone">Phone: </label>
                            <label for="postion">Postinon: </label>
                        </div>
                        <div class="information-items-other-left">
                            <p>Nguyễn Trọng Quí</p>                               
                            <p>27/12/200</p>               
                            <p>Giồng Trôm, Bên tre</p>
                            <p>0397516228</p>
                            <p>Chủ cửa hàng</p>
                        </div>
                        </div>       
                </div>
            </div>
        </section>
        <!-- footer -->
        <hr>
        <section class="app-contenr">
            <p> Project management: Nguyễn Trọng Quí</p>
            <div class="app-google">
                <img src="../uploads/app-store.png">
                <img src="../uploads/gg-play.png">
            </div>
            <p> Nhập hổ trợ từ nhà phát triển</p>
            <input type="text" placeholder="Nhập email của bạn....">
        </section>
    
        <div class="footer-top">
            <li> <a href=""><img src="../uploads/thongbao.png"></a></li>
            <li> <a href="">Liên hệ</a></li>
            <li> <a href="">Tuyển dụng</a></li>
            <li> <a href="">Giới thiệu</a></li>
            <li>
                <a href=""><img src="../uploads/fb.png"></a>
                <a href=""><img src="../uploads/yt.jpg"></a>
                <a href=""><img src="../uploads/tw.png"></a>
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
<script>
    $(document).ready(function() {
       $('#toggle').click(function(){
           $('nav').slideToggle();
       });
    })

    $(document).ready(function(){
        $("#cartegory_id").change(function(){
            var x = $(this).val()
            $.get("productax.php",{cartegory_id:x},function(data){
                $("#bran_id").html(data);
            })
        })
    })
</script>
</html>