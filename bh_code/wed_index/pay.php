
<?php
    include "header.php";
?>

 <!-- ------------------pay------------------------ -->
 <section class="pay">
        <div class="container">
            <div class="pay-top-wrap">
                <div class="pay-top">
                    <div class="pay-top-cart cart-top-item">
                        <i class="fa fa-shopping-cart " aria-hidden="true"></i>
                    </div>
                    <div class="pay-top-marker cart-top-item">
                        <i class="fa fa-map-marker " aria-hidden="true"></i>
                    </div>
                    <div class="pay-top-card cart-top-item">
                        <i class="fa fa-credit-card " aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="pay-container row">
                <div class="pay-container-left">
                    <p>Vui lòng chọn địa chỉ giao hàng</p>
                    <div class="pay-container-left-dangnhap">
                        <p><i class="fa fa-sign-in" aria-hidden="true"></i> <a href="">Đăng nhập</a> (nếu bạn đã có tài khoảng của IVY)</p>
                    </div>
                    <div class="pay-container-left-khachle row">
                        <input checked type="radio" name="loaikhach" >
                        <span style="font-weight: bold;">Khách lẻ</span>
                        <p>(Nếu bạn không muốn lưu lại thông tin)</p>
                    </div>
                    <div class="pay-container-left-dangky row">
                        <input type="radio" name="loaikhach" >
                        <span style="font-weight: bold;">Đăng ký</span>
                        <p>(Tạo mới tài khoảng với thông tin bên dưới)</p>
                    </div>
                    <div class="pay-container-left-input-top row">
                        <div class="pay-container-left-input-top-item">
                            <label for="">Họ tên <span style="color: red;">*</span></label>
                            <input type="text" name="hoten">
                        </div>
                        <div class="pay-container-left-input-top-item">
                            <label for="">Điện thoại <span style="color: red;">*</span></label>
                            <input type="text" name="dienthoai">
                        </div>
                        <div class="pay-container-left-input-top-item">
                            <label for="">Tỉnh/TP <span style="color: red;">*</span></label>
                            <input type="menu" name="tinh">
                        </div>
                        <div class="pay-container-left-input-top-item">
                            <label for="">Quận/Huyện <span style="color: red;">*</span></label>
                            <input type="text" name="quan">
                        </div>
                    </div>
                    <div class="pay-container-left-input-bottum">
                        <div class="pay-container-left-input-bottum-item">
                            <label for="">Phường/Xã <span style="color: red;">*</span></label>
                            <input type="text" name="quan">
                        </div>
                        <div class="pay-container-left-input-bottum-item">
                            <label for="">Địa chỉ <span style="color: red;">*</span></label>
                            <input type="text" name="quan">
                        </div>
                    </div>
                    <div class="pay-container-left-input-bottum row">
                        <a href="cart.php"> &lt;&lt; Quay lại giỏ hàng </a>
                        <button> <a href="payment.php"><p style="font-weight: bold;">THANH TOÁNG VÀ GIAO HÀNG</a></p></button>
                    </div>
                </div>
                <?php
                    $giaodien = new giaodien;
                    $show_cart = $giaodien -> show_cart();
                ?>
                
                <div class="pay-container-right">
                    <table>
                        <tr>
                            <th id="">Tên sản phẩm</th>
                            <th id="">Giảm giá</th>
                            <th id="">Số lượng</th>
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
                                <p> <?php echo $result['product_name'] ?><br>

                                  
                                    
                                    47M6675 /<?php echo number_format($result['product_price'],0,',','.') ?><sup>đ</sup>
                                </p>
                            </td>
                            <td> 10%</td>
                            <td><?php echo $result['product_count'] ?></td>
                            <td><p><?php echo number_format($result['product_price'],0,',','.') ?><sup>đ</sup></p></td>
                        </tr>
                        <?php
                             }
                            }
                    ?>
                        <tr>
                            <td colspan="3">Tổng tiền</td>
                            <td><p><?php echo number_format($i,0,',','.') ?><sup>đ</sup></p></td>
                        </tr>
                        <tr>
                            <td colspan="3"> Tạm tính</td>
                            <td><p><?php echo number_format($i,0,',','.') ?><sup>đ</sup></p></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <?php
        include "bottum.php";
    ?>