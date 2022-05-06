
<?php
    include "header.php";
?>

<section class="cartegory">
        <div class="contenr">
        <?php
                    $giaodien = new giaodien;
                    $cartegory_id = isset($_GET['cartegory_id']) ? $_GET['cartegory_id'] : "";
                    $show_cartegory = $giaodien -> show_cartegoryx($cartegory_id );
                ?>
                <?php
                if ($show_cartegory){ $i = 0;
                    while ($result = $show_cartegory -> fetch_assoc()) { $i++;
            
                ?>
                    <div class="cartegory-top row">
                    <p>Trang chủ</p> <span>&#10230;</span> <p><?php echo  $result['cartegory_name'] ?></p> <span>&#10230;</span> <p><?php echo  $result['cartegory_name'] ?> mới về</p>
                    </div>
                <?php
                    }
                }
                ?>
        </div>
        <div class="contenr">
            <div class="row">
                <div class="cartegory-left">
        
                <?php
                    $giaodien = new giaodien;
                    $show_cartegory = $giaodien -> show_cartegory();
                ?>

            <?php
                if ($show_cartegory){ $i = 0;
                    while ($result = $show_cartegory -> fetch_assoc()) { $i++;
            
            ?>
                <li class="cartegory-left-li" id="<?php echo  $result['cartegory_id'] ?>"> <a href="cartegory.php?cartegory_id=<?php echo $result['cartegory_id'] ?>"> <?php echo  $result['cartegory_name'] ?></a>
                    <ul>
                    <?php
                        $giaodien = new giaodien;
                        $cartegory_id = $result['cartegory_id'];
                        $show_bran = $giaodien -> show_bran($cartegory_id);
                    ?>
                    <?php
                        if ($show_bran){ $i = 0;
                            while ($result = $show_bran -> fetch_assoc()) { $i++;
                     ?>
                        <li> <a href=""><?php echo  $result['bran_name'] ?></a>
                        </li>
                        <?php
                                }
                            }
                        ?>

                    </ul>
                 </li>
            <?php
                    }
                }
            ?>
                </div>
                <div class="cartegory-right row ">
                <?php
                    $giaodien = new giaodien;
                    $cartegory_id = isset($_GET['cartegory_id']) ? $_GET['cartegory_id'] : "";
                    $show_cartegory = $giaodien -> show_cartegoryx($cartegory_id );
                ?>
                <?php
                if ($show_cartegory){ $i = 0;
                    while ($result = $show_cartegory -> fetch_assoc()) { $i++;
            
                ?>
                    <div class="category-right-top-item">
                        <p>Tất cả <?php echo  $result['cartegory_name'] ?></p>
                    </div>
                <?php
                    }
                }
                ?>
                    <div class="category-right-top-item">
                        <button> <span>Bộ lọc</span><i class="fa fa-sort-down"></i></button>
                    </div>
                    <div class="category-right-top-item">
                        <select name="" id="">
                            <option value=""> Sắp xếp </option>
                            <option value=""> Giá cao đến thấp </option>
                            <option value=""> Giá thấp đến cao </option>
                        </select>
                    </div>
                    <div class="cartegory-right-content row">
                    <?php
                            $giaodien = new giaodien;
                            $seach = isset($_GET['seach']) ? $_GET['seach'] : "";
                            $cartegory_id = isset($_GET['cartegory_id']) ? $_GET['cartegory_id'] : "";
                            $m = !empty($_GET['per_page']) ? $_GET['per_page'] : 8;
                            $k = !empty($_GET['page']) ? $_GET['page'] : 1;
                            $n = ($k - 1)*$m;
                            if($seach){
                                $show_cartegory_img = $giaodien -> show_product_seach($seach, $m, $n);
                                $show_product = $giaodien -> show_product_seach_x($seach);
                               
                            }else{
                                $show_cartegory_img = $giaodien -> show_product_img($cartegory_id, $m, $n);
                                $show_product = $giaodien -> show_product($cartegory_id);
                             
                            }    
                            $count = $show_product -> num_rows;
                            $page_q = ceil($count/$m);
                        ?>

                        <?php
                            if ( $show_cartegory_img){ $i = 0;
                                while ($result =  $show_cartegory_img -> fetch_assoc()) { $i++;
                        
                        ?>
                            <div class="cartegory-right-content-item">
                                <a href="product.php?product_id=<?php echo $result['product_id'] ?>">
                                <img src="../uploads/<?php echo $result['product_img'] ?>" alt="">
                                <h1><?php echo $result['product_name'] ?></h1>
                                <p><?php echo number_format($result['product_price'],0,',','.') ?><sup>đ</sup></p>
                                </a>
                             </div>
                        <?php
                                }
                            }
                        ?>

                        <div class="cartegory-right-bottom row">
                            <div class="cartegory-right-bottom-items">
                                <p>Hiển thị 2 <span>|</span> 4 sản phẩm </p>
                            </div>
                            <div class="cartegory-right-bottom-items">
                                <p> <a href="cartegory.php?cartegory_id=<?php echo $_GET['cartegory_id']?>&per_page=<?php echo $m ?>&page=1">Trang đầu</a>  <span>&#171;</span> 
                                <?php
                                    
                                    for($num = 1; $num <= $page_q; $num++ ){
                                ?>
                                    <?php 
                                        if ($k!=$num){
                                    ?>
                                      <a href="cartegory.php?cartegory_id=<?php echo $_GET['cartegory_id']?>&per_page=<?php echo $m ?>&page=<?php echo $num ?>"> <?php echo $num ?> </a> 
                                    <?php
                                        }else{
                                    ?>
                                        <span style="color:red"> <?php echo $num ?> </span>
                                    <?php
                                        }
                                    ?>

                               <?php
                                    }
                                ?>
                                <span>&#187;</span> <a href="cartegory.php?cartegory_id=<?php echo $_GET['cartegory_id']?>&per_page=<?php echo $m ?>&page=<?php echo $page_q ?>">Trang cuối</a> </p>
                            </div>
                        </div>
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
const itemliderbar = document.querySelectorAll(".cartegory-left-li")
itemliderbar.forEach(function(menu, index){
menu.addEventListener("click", function(){
    menu.classList.toggle("block")
}) 
})
</script>
</html>