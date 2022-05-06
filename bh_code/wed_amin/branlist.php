<?php
    include "header_admin.php";
    include "menu_view.php";
    include "handle/brand_class.php";
?>

<?php
    $bran = new bran;
    $show_bran = $bran -> show_bran();
?>

                <div class="view-data">
                    <h1>Dữ Liệu</h1>
                    <div class="all-view">
                            <table>
                                <tr>
                                    <th id="1">STT</th>
                                    <th id="2">ID</th>
                                    <th id="3">TÊN DANH MỤC</th>
                                    <th id="4"> LOẠI SẢN PHẨM</th>
                                    <th id="4">Tùy biến</th>
                                </tr>
                                <?php
                                    if ($show_bran){ $i = 0;
                                        while ($result = $show_bran -> fetch_assoc()) { $i++;
                                
                                ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $result['bran_id'] ?> </td>
                                    <td><?php echo $result['cartegory_name'] ?> </td>
                                    <td><?php echo $result['bran_name'] ?></td>
                                    <td><a href="Brand_update.php?bran_id=<?php echo $result['bran_id'] ?>"><i class="fa-solid fa-square-pen"></i></a>
                                    <a href="Brand_delete.php?bran_id=<?php echo $result['bran_id'] ?>"><i class="fa-regular fa-trash-can"></i></a></td>
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