
<?php
    include "header.php";
?>

<section class="event">
<div class="event-top">
            <img id="hinh" src="../uploads/khuyenmai1.jpg" alt="">
            <div class="control">
                <i class="fa fa-circle-chevron-left" onclick="trai()"></i>
                <i class="fa fa-circle-chevron-right" onclick="phai()"></i>
            </div>
        </div>
        <div class="event-contener-top">
            <h1>KHUYẾN MÃI CỰC SỐC</h1>
        </div>
        <div class="event-contener">
        <?php
                    $event = new giaodien;
                    $show_discount = $event -> show_discountz();
                ?>
                <?php
                if ($show_discount){ $i = 0;
                    while ($result = $show_discount -> fetch_assoc()) { $i++;
            
                ?>
                    <div class="event-contener-item">
                        <img src="../uploads/<?php echo  $result['discount_img'] ?>" alt="">
                        <div class="desc">
                                Tên:  <?php echo  $result['discount_name'] ?> <br>
                                HSD: <?php echo  $result['discount_date'] ?> <br>
                                Giá đã giảm: <span style="color: red;"> <?php echo  $result['discount_slump'] ?>
                                </span> <sup>đ</sup> <br>
                                Chi tết: <?php echo  $result['discount_desc'] ?>
                        </div>
                        <h2><?php echo  $result['discount_name'] ?></h2>
                        <p><?php echo  $result['discount_price'] ?><sup>đ</sup></p>
                        <button>MUA</button>
                    </div>
                <?php
                    }
                }
                ?>
        </div>
        <div class="event-other-top">
            <i class="fa-solid fa-gift"></i>
            <h1>TRÁI CÂY CÁC LOẠI</h1>
            <div class="event-other-top-item">
                <p>28 khuyến mãi hấp dẫn</p>
            </div>
            <div class="event-other-top-item">
                <p>Trái cây nhập khẩu</p>
            </div>
            <div class="event-other-top-item">
                <p>Trái cây nội địa</p>
            </div>
            <div class="event-other-top-item">
                <p>Trái cây sấy khô</p>
            </div>
        </div>
        <div class="event-other">
                <?php
                    $event = new giaodien;
                    $show_discount = $event -> show_discountx();
                ?>
                <?php
                if ($show_discount){ $i = 0;
                    while ($result = $show_discount -> fetch_assoc()) { $i++;
            
                ?>
                    <div class="event-other-item">
                        <img src="../uploads/<?php echo  $result['discount_img'] ?>" alt="">
                        <div class="desc">
                                Tên:  <?php echo  $result['discount_name'] ?> <br>
                                HSD: <?php echo  $result['discount_date'] ?> <br>
                                Giá đã giảm: <span style="color: red;"> <?php echo  $result['discount_slump'] ?>
                                </span> <sup>đ</sup> <br>
                                Chi tết: <?php echo  $result['discount_desc'] ?>
                        </div>
                        <h2><?php echo  $result['discount_name'] ?></h2>
                        <p><?php echo  $result['discount_price'] ?><sup>đ</sup></p>
                        <button>MUA</button>
                    </div>
                <?php
                    }
                }
                ?>
        </div>
        <div class="event-buttum-top">
            <i class="fa-solid fa-certificate"></i>
            <h1>RAU, CỦ, NẤM</h1>
            <div class="event-buttum-top-item">
                <p>60 khuyến mãi hấp dẫn</p>
            </div>
            <div class="event-buttum-top-item">
                <p>Rau hữu cơ</p>
            </div>
            <div class="event-buttum-top-item">
                <p>Củ hửu cơ</p>
            </div>
            <div class="event-buttum-top-item">
                <p>Rau, củ, quả đà lạt</p>
            </div>
        </div>
        <div class="event-buttum-other">
                <?php
                    $event = new giaodien;
                    $show_discount = $event -> show_discounty();
                ?>
                <?php
                if ($show_discount){ $i = 0;
                    while ($result = $show_discount -> fetch_assoc()) { $i++;
            
                ?>
                    <div class="event-buttum-other-item">
                        <img src="../uploads/<?php echo  $result['discount_img'] ?>" alt="">
                        <div class="desc">
                                Tên:  <?php echo  $result['discount_name'] ?> <br>
                                HSD: <?php echo  $result['discount_date'] ?> <br>
                                Giá đã giảm: <span style="color: red;"> <?php echo  $result['discount_slump'] ?>
                                </span> <sup>đ</sup> <br>
                                Chi tết: <?php echo  $result['discount_desc'] ?>
                        </div>
                        <h2><?php echo  $result['discount_name'] ?></h2>
                        <p><?php echo  $result['discount_price'] ?><sup>đ</sup></p>
                        <button>MUA</button>
                    </div>
                <?php
                    }
                }
                ?>
        </div>
       
     
    </section>
    <hr>
    <section class="app-contenr">
        <p> Tải ứng dụng Bách Hóa Ngọc Diệp</p>
        <div class="app-google">
            <img src="../uploads/app-store.png">
            <img src="../uploads/gg-play.png">
        </div>
        <p> Nhập bản tin của Bách Hóa Ngọc Diệp</p>
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
           Cửa hàng Bách Hóa Ngọc Diệp với số đăng ký kinh doanh: 0105777651 <br>
            Địa chỉ đăng ký: Đường 30/4, Thị Xã Cây Lại, Tỉnh Tiền Giang<br>
            Đặt hàng online : <b>0397516328</b> .
        </p>
    </div>
    <div class="footer-bottom">
        ©NgocDiep All rights reserved
    </div>

</body>
<script>
const itemliderbar = document.querySelectorAll(".cartegory-left-li")
itemliderbar.forEach(function(menu, index){
menu.addEventListener("click", function(){
    menu.classList.toggle("block")
}) 
})

var arr_hinh = [
        "../uploads/khuyenmai1.jpg",
        "../uploads/khuyenmai2.jpg",
        "../uploads/khuyenmai3.jpg",
    ]
    var i = 0;
    function trai(){
        i--;
        if (i < 0) i = arr_hinh.length - 1;
        var hinh = document.getElementById("hinh");
        hinh.src = arr_hinh[i]; 
    }
    function phai(){
        i++;
        if (i >= arr_hinh.length) i = 0;
        var hinh = document.getElementById("hinh");
        hinh.src = arr_hinh[i]; 
    }
</script>
</html>