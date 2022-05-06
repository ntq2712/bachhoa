
<?php
    include "header.php";
?>

<!----------------- product -------------------------->
<section class="product">
        <div class="container">
           <div class="product-contenr row">
               <div class="product-contenr-left row">
               <?php
                    $giaodien = new giaodien;
                    $product_id = $_GET['product_id'];
                    $show_product = $giaodien -> show_product_a($product_id);
                ?>

                <?php
                    if ($show_product){ $i = 0;
                        while ($result =  $show_product -> fetch_assoc()) { $i++;
                
                ?>
                     <div class="product-contenr-left-big-img">
                        <img src="../uploads/<?php echo $result['product_img'] ?>">
                    </div>
                    <div class="product-contenr-left-small-img">
                        <img src="../uploads/<?php echo $result['product_imga'] ?>">
                        <img src="../uploads/<?php echo $result['product_imgb'] ?>">
                        <img src="../uploads/<?php echo $result['product_imgc'] ?>">
                        <img src="../uploads/<?php echo $result['product_imgd'] ?>">
                    </div>
                 
               </div>
               <div class="product-contenr-right">
                    <div class="product-contenr-right-name">
                        <h1><?php echo $result['product_name'] ?></h1>
                        <p>MSP: 47M6675</p>
                    </div>
                    <div class="product-contenr-right-price">
                        <p><?php echo number_format($result['product_price'],0,',','.') ?><sup>đ</sup></p>
                    </div>
  
                   <?php
                        $giaodien = new giaodien;
                        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                            $product_name = $result['product_name'];
                            $product_price = $result['product_price'];
                            $product_img = $result['product_img'];
                            $insert_cart = $giaodien -> insert_cart($product_id,$product_name,$product_price,$product_img);
                        }
                    ?>
                    <form action="" method="POST">
                        <div class="product-contenr-right-size">
                            <p style="font-weight: bold;">Hạng sữ dụng:</p>
                            <div class="size">
                                <span><?php echo $result['product_date'] ?></span>
                            </div>
                            <div class="quantity">
                                <p style="font-weight: bold;">Số lượng:</p>
                                <button type="button" onclick="tru()"><i class="fa-solid fa-minus"></i></button>
                                <input name="product_count" type="text" value="1" id="textbox">
                                <button type="button" onclick="cong()"><i class="fa-solid fa-plus"></i></button>
                            </div>
                            <p style="color: red;">Vui lòng chọn số lượng *</p>
                            <div class="product-contenr-right-bottum">
                                <button type="submit"> <a href="cart.php"><i class="fa fa-shopping-basket"></i> MUA HÀNG </a></button>
                                <button> <p>THÊM VÀO GIỎ </p> </button>
                            </div>
                    </form>
                    
                        <div class="product-contenr-right-icon">
                            <div class="product-contenr-right-icon-item">
                                <i class="fa fa-phone" aria-hidden="true"></i> <p>Holine</p>
                            </div>
                            <div class="product-contenr-right-icon-item">
                                <i class="fa fa-comments-o fa-lg" aria-hidden="true"></i> <p>Chat</p>
                            </div>
                            <div class="product-contenr-right-icon-item">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <p>Mail</p>
                            </div>
                        </div>
                        <div class="product-contenr-right-QR">
                            <img src="../uploads/qr.jpg">
                        </div>
                        <div class="product-contenr-right-text">
                            <div class="product-contenr-right-text-top">
                                <i class="fa fa-angle-down productDetail_buttonShow_btn" aria-hidden="true"></i>
                            </div>
                            <div class="product-contenr-right-text-contenr-big">
                                <div class="product-contenr-right-text-contenr-title row">
                                    <div class="product-contenr-right-text-contenr-title-item chitiet">
                                        <p>Chi tiết </p>
                                    </div>
                                    <div class="product-contenr-right-text-contenr-title-item baoquan">
                                        <p>Bảo quản</p>
                                    </div>
                                    <div class="product-contenr-right-text-contenr-title-item">
                                        <p>Tham khảo thêm</p>
                                    </div>
                                </div>
                                <div class="product-contenr-right-text-contenr">
                                    <div class="product-contenr-right-text-contenr-chitiet">
                                        <?php echo $result['product_desc'] ?>
                                    </div>
                                    <div class="product-contenr-right-text-contenr-baoquan">
                                    Rửa nhẹ nhàng dâu tây và loại bỏ mũ lá khi bạn rửa xong. 
                                    Khi được bảo quản đúng cách tại nhà, dâu tây có thể tươi từ 2 - 4 ngày sau khi mua. 
                                    Giữ lạnh dâu tây giúp bảo quản lâu hơn. 
                                    Chúng tôi giữ các loại quả mọng trong tủ lạnh và đặc biệt khuyên bạn nên giữ chúng trong hộp đựng 
                                    ban đầu và làm lạnh chúng càng sớm càng tốt. 
                                    Không rửa trước khi cho vào tủ lạnh.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
               </div>
               <?php
            }
                }
    ?>
              
           </div>
        </div>
    </section>
    <!-- product-ralated -------------------------->
    <section class="product-ralated">
        <hr>
        <div class="product-ralated-title row">
            <p>LOẠI KHÁC</p>
            <P>MUA CÙNG VỚI</P>
        </div>
        <div class="product-ralated-contenr row">
            <div class="product-ralated-item">
                <img src="../uploads/c3.jpg" alt="">
                <h1>CẢI BẸ NGỌT - 250g</h1>
                <p>12.000<sup>đ</sup></p>
            </div>
            <div class="product-ralated-item">
                <img src="../uploads/c8.jpg" alt="">
                <h1>CÀ CHUA ĐÀ LẠT - 500g</h1>
                <p>40.000<sup>đ</sup></p>
            </div>
            <div class="product-ralated-item">
                <img src="../uploads/c5.jpg" alt="">
                <h1>CỦ DỀNH ĐỎ - 500g</h1>
                <p>30.000<sup>đ</sup></p>
            </div>
            <div class="product-ralated-item">
                <img src="../uploads/c6.jpg" alt="">
                <h1>CÀ RỐT ĐÀ LẠT - 500g</h1>
                <p>40.000<sup>đ</sup></p>
            </div>
            <div class="product-ralated-item">
                <img src="../uploads/c7.jpg" alt="">
                <h1>MĂN TÂY SAPA - 250g</h1>
                <p>40.000<sup>đ</sup></p>
            </div>
        </div>
    </section>
    <!--------------- footer ---------------------------->
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
    const baoquan = document.querySelector(".baoquan")
    const chitiet = document.querySelector(".chitiet")
    if (baoquan){
        baoquan.addEventListener("click", function(){
            document.querySelector(".product-contenr-right-text-contenr-chitiet").style.display = "none"
            document.querySelector(".product-contenr-right-text-contenr-baoquan").style.display = "block"
        })
    }
    if (chitiet){
        chitiet.addEventListener("click", function(){
            document.querySelector(".product-contenr-right-text-contenr-chitiet").style.display = "block"
            document.querySelector(".product-contenr-right-text-contenr-baoquan").style.display = "none"
        })
    }
    const bottum = document.querySelector(".product-contenr-right-text-top")
    if (bottum){
        bottum.addEventListener("click", function(){
            document.querySelector(".product-contenr-right-text-contenr-big").classList.toggle("ativiB") 
        })
    }
    const header = document.querySelector("header")
    window.addEventListener("scroll", function(){
        x = window.pageYOffset
        if (x > 0){
            header.classList.add("sticky")
        }else{
            header.classList.remove("sticky")
        }
    })
    const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
    const imgContenr = document.querySelector(".aspect-ratio-169")
    const dotItem = document.querySelectorAll(".dot")
    let imgNuber = imgPosition.length
    let index = 0
    imgPosition.forEach(function(image, index){
         image.style.left = index*100 + "%"
         dotItem[index].addEventListener("click", function (){
            slide (index)
         })
    })
    function imgSlide (){
        index++
        if ( index >= imgNuber ) {index=0}
        slide (index)
    }
    function slide (index){
        imgContenr.style.left = '-' + index*100 + '%'
        const dotActive = document.querySelector(".active")
        dotActive.classList.remove('active')
        dotItem[index].classList.add('active')
    }
 setInterval(imgSlide, 5000)

    const itemliderbar = document.querySelectorAll(".menu-right-li")
    itemliderbar.forEach(function(menu, index){
    menu.addEventListener("click", function(){
        menu.classList.toggle("block")
    }) 
    })
function cong(){
    var t = document.getElementById("textbox").value;
        document.getElementById("textbox").value = parseInt(t)+1;
}
function tru(){
    var t = document.getElementById("textbox").value;
    if (parseInt(t)>1){
        document.getElementById("textbox").value = parseInt(t)-1;
    }
        
}
</script>
</html>