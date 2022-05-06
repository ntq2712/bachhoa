
<?php
    include "header.php";
?>

  <!-- ---------payment----------------------------- -->
  <section class="payment">
        <div class="container">
            <div class="payment-top-wrap">
                <div class="payment-top">
                    <div class="payment-top-cart cart-top-item">
                        <i class="fa fa-shopping-cart " aria-hidden="true"></i>
                    </div>
                    <div class="payment-top-marker cart-top-item">
                        <i class="fa fa-map-marker " aria-hidden="true"></i>
                    </div>
                    <div class="payment-top-card cart-top-item">
                        <i class="fa fa-credit-card " aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="payment-content row">
                <div class="payment-content-left">
                    <div class="payment-content-left-method-pay">
                        <p style="font-weight: bold;">Phương thức giao hàng</p>
                        <div class="payment-content-left-method-pay-item">
                            <input type="radio">
                            <label for="" style="font-size: 14px;">Giao hàng chuyển phát nhanh</label>
                            <p style="font-size: 12px;">Chuyển hàng tới địa chỉ khách hàng.</p>
                        </div>
                    </div>
                    <div class="payment-content-left-method-payment">
                        <p style="font-weight: bold;">Phương thức thanh toán</p>
                        <p style="font-size: 12px;">Mọi giao dịch đều được bảo mật và mã hóa. Thông tin thẻ tín dụng sẽ không bao giờ được lưu lại.</p>
                        <div class="payment-content-left-method-payment-item">
                            <input type="radio">
                            <label for="" style="font-size: 14px;">Thanh toán bằng thẻ tín dụng(OnePay)</label>
                        </div>
                        <div class="payment-content-left-method-payment-item-img">
                            <img src="../uploads/pay1.jpg" alt="">
                        </div>
                        <div class="payment-content-left-method-payment-item">
                            <input type="radio">
                            <label for="" style="font-size: 14px;"> Thanh toán bằng thẻ ATM(OnePay)</label>
                        </div>
                        <div class="payment-content-left-method-payment-item-img">
                            <img src="../uploads/pay2.jpg" alt="">
                        </div>
                        <div class="payment-content-left-method-payment-item">
                            <input type="radio">
                            <label for="" style="font-size: 14px;"> Thanh toán Momo </label>
                        </div>
                        <div class="payment-content-left-method-payment-item-img">
                            <img src="../uploads/pay3.jpg" alt="">
                        </div>
                        <div class="payment-content-left-method-payment-item">
                            <input type="radio">
                            <label for="" style="font-size: 14px;">  Thu tiền tận nơi </label>
                        </div>
                        <div class="payment-content-left-method row">
                            <a href="pay.php"> &lt;&lt; Quay lại </a>
                            <a href="index.php"><button><p style="font-weight: bold;">HOÀNG THÀNH</p></button></a>
                        </div>
                    </div>
                </div>
                <div class="payment-content-right">
                     <div class="payment-content-right-buttom">
                         <input type="text" placeholder="Mã giảm giá/Quà tặng">
                         <button><i class="fa fa-check" aria-hidden="true"></i></button>
                     </div>
                     <div class="payment-content-right-buttom">
                        <input type="text" placeholder="Mã cộng tác viên">
                        <button><i class="fa fa-check" aria-hidden="true"></i></button>
                     </div>
                     <div class="payment-content-right-nv">
                        <select name="" id="">
                            <option value="0">Chọn nhân viên thân thiết</option>
                            <option value="">pt07</option>
                            <option value="">pt12</option>
                            <option value="">ot45</option>
                            <option value="">ut65</option>
                            <option value="">ht12</option>
                            <option value="">kt23</option>
                            <option value="">kh15</option>
                        </select>
                    </div>
                    <?php
                    $giaodien = new giaodien;
                    $show_cart = $giaodien -> show_cart();
                ?>
                    <div class="payment-content-right-table">
                        <table>
                            <tr>
                                <th id="">Tên sản phẩm</th>
                                <th id="">Giảm giá</th>
                                <th id="">Kilogam</th>
                                <th id="">Thành tiền</th>
                            </tr>
                            <?php
                            if ($show_cart){$i=0;
                                    $c = 0;
                                    while($result = $show_cart -> fetch_assoc()){
                                        $c = $c + $result['product_count'];
                                        $a = $result['product_price']*$result['product_count'];
                                        $i = $i + $a;
                            ?>
                            <tr>
                                <td>
                                    <p><?php echo $result['product_name'] ?> <br>
    
                                        
                                        47M6675 / <?php echo number_format($result['product_price'],0,',','.')  ?><sup>đ</sup>
                                    </p>
                                </td>
                                <td>30%</td>
                                <td><?php echo $result['product_count'] ?></td>
                                <td><p><?php echo number_format($result['product_price'],0,',','.') ?><sup>đ</sup></p></td>
                            </tr>
                          <?php
                                    }
                                }
                            ?>
                            <tr>
                                <td colspan="3">Tổng tiền</td>
                                <td><p><?php echo  number_format($i,0,',','.') ?><sup>đ</sup></p></td>
                            </tr>
                            <tr>
                                <td colspan="3"> Tạm tính</td>
                                <td><p><?php echo number_format($i,0,',','.')  ?><sup>đ</sup></p></td>
                            </tr>
                            <tr>
                                <td colspan="3">Giao hàng chuyển phát nhanh</td>
                                <td><p>0<sup>đ</sup></p></td>
                            </tr>
                            <tr>
                                <td colspan="3">Tiền thanh toán</td>
                                <td><p><?php echo number_format($i,0,',','.')?><sup>đ</sup></p></td>
                            </tr>
                        </table>
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
</html>