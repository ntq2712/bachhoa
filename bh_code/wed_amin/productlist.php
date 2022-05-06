<?php
    include "header_admin.php";
    include "menu_view.php";
    include "handle/product_class.php";
?>

<?php
    $product = new product;
    $show_product = $product -> show_product();
?>

                <div class="view-data">
                    <h1>Dữ Liệu</h1>
                    <div class="product-view">
                        <table class="product_tbl">
                        <tr>
                            <th id="1">STT</th>
                            <th id="2">PRODUCT ID</th>
                            <th id="3">PRODUCT NAME</th>
                            <th id="4">CARTEGORY ID</th>
                            <th id="5">BRAN ID </th>
                            <th id="6">PRODUCT PRICE</th>
                            <th id="7">PRODUCT SLUMP</th>
                            <th id="8">PRODUCT DESC</th>
                            <th id="9">PRODUCT IMG</th>
                            <th id="10">TÙY CHỌN</th>
                        </tr>
                        <?php
                            if ($show_product){ $i = 0;
                                while ($result = $show_product -> fetch_assoc()) { $i++;
                        
                        ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $result['product_id'] ?></td>
                            <td><?php echo $result['product_name'] ?></td>
                            <td><?php echo $result['cartegory_name'] ?></td>
                            <td><?php echo $result['bran_id'] ?></td>
                            <td><?php echo $result['product_price'] ?></td>
                            <td><?php echo $result['product_slump'] ?></td>
                            <td><?php echo $result['product_desc'] ?></td>
                            <td><img src="../uploads/<?php echo $result['product_img'] ?>" alt=""></td>
                            <td>
                            <a href="product_update.php?product_id=<?php echo $result['product_id'] ?>"><i class="fa-solid fa-square-pen"></i></a>
                            <a href="product_delete.php?product_id=<?php echo $result['product_id'] ?>"><i class="fa-regular fa-trash-can"></i></a>
                            </td>
                        </tr>
                        <?php
                                }
                            }
                        ?>
                    </table>
                    </div>
                </div>
            </div>
        </div>

 <?php
    include "bottum.php";
?>