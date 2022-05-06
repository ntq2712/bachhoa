
<?php
    include "header.php";
?>

 <!-- ------------------cart------------------------ -->
 <section class="cart">
        <div class="container">
            <div class="cart-top-wrap">
                <div class="cart-top">
                    <div class="cart-top-cart cart-top-item">
                        <i class="fa fa-shopping-cart " aria-hidden="true"></i>
                    </div>
                    <div class="cart-top-marker cart-top-item">
                        <i class="fa fa-map-marker " aria-hidden="true"></i>
                    </div>
                    <div class="cart-top-card cart-top-item">
                        <i class="fa fa-credit-card " aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="cart-container  row">
                <div class="cart-container-left">
                    <table>
                        <tr>
                            <th id="">SẢN PHẨM</th>
                            <th id="">TÊN SẢN PHẨM</th>
                            <th id="">SL</th>
                            <th id="">THÀNH TIỀN</th>
                            <th id="">XÓA</th>
                        </tr>
            
                        <?php
                            $giaodien = new giaodien;
                            $show_cart = $giaodien -> show_cart();
                        ?>

                    <?php
                        if ($show_cart){ $i = 0;
                            while ($result =  $show_cart -> fetch_assoc()) { $i++;
                    
                    ?>
                        <tr>
                            <td> <img src="../uploads/<?php echo $result['product_img'] ?>"> </td>
                            <td> <p><?php echo $result['product_name'] ?></p> </td>
                            <td> <span><?php echo $result['product_count'] ?> </span> </td>
                            <td>  <p><?php echo number_format($result['product_price'],0,',','.') ?><sup>đ</sup></p></td>
                            <td> <a href="delete_cart.php?cart_id=<?php echo $result['cart_id'] ?> "><span>X</span></a>  </td>
                        </tr>
                <?php
                        }
                    }
                ?>
            
            
                    </table>
                </div>
                <?php
                    $giaodien = new giaodien;
                    $show_cart = $giaodien -> show_cart();
                ?>
                <?php
                    if ($show_cart){$i=0;
                        $c = 0;
                        while($result = $show_cart -> fetch_assoc()){
                            $c = $c + $result['product_count'];
                            $a = $result['product_price']*$result['product_count'];
                            $i = $i + $a;
                        }
                    }
                    
                ?>
                <div class="cart-container-right">
                    <table>
                        <tr>
                            <th id="" colspan="2">TỔNG TIỀN GIỎ HÀNG</th>
                        </tr>
                        <tr>
                            <td>TỔNG SẢN PHẨM</td>
                            <td><?php echo $c ?></td>
                        </tr>
                        <tr>
                            <td>TỔNG TIỀN HÀNG</td>
                            <td>  <p><?php echo number_format($i,0,',','.')?><sup>đ</sup></p> <td> 
                        </tr>
                        <tr>
                            <td>THÀNH TIỀN</td>
                            <td><p><?php echo number_format($i,0,',','.')?><sup>đ</sup></p></td>
                        </tr>
                        <tr>
                            <td>TẠM TÍNH</td>
                            <td><p><?php echo number_format($i,0,',','.')?><sup>đ</sup></p></td>
                        </tr>
                    </table>
                    <div class="cart-container-right-text">
                        <p>Bạn sẽ được miễn phí ship khi đơn hàng của bạn có tổng giá trị trên 2.000.000 đ</p>
                        <p style="color: red; font-weight: bold;">Mua thêm <span style="font-size: 19px;">194.000đ</span> để được miễn phí SHIP</p>
                    </div>
                    <div class="cart-container-right-buttom">
                        <button> <a href="index.php">TIẾP TỤC MUA SẮM</a> </button>
                        <button> <a href="pay.php"> <span style="color : white">THANH TOÁN</span></a> </button>
                    </div>
                    <div class="cart-container-right-dangnhap">
                        <p>TÀI KHOẢN Shop</p>
                        <p>Hãy <a href="../login/dangnhap.php" style="color: red;">đăng nhập</a> tài khoản của bạn để tích điểm thành viên.</p>
                    </div>
                </div>
               
            </div>
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
    const header = document.querySelector("header")
    window.addEventListener("scroll", function(){
        x = window.pageYOffset
        if (x > 0){
            header.classList.add("sticky")
        }else{
            header.classList.remove("sticky")
        }
    })
</script>
</html>