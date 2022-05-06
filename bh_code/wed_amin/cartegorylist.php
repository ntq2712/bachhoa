<?php
    include "header_admin.php";
    include "menu_view.php";
    include "handle/catergory_class.php";
?>

<?php
    $cartegory = new cartegory;
    $show_cartegory = $cartegory -> show_cartegory();
?>

                <div class="view-data">
                    <h1>Dữ Liệu</h1>
                    <div class="all-view">
                        <table>
                            <tr>
                                <th id="1">STT</th>
                                <th id="2">ID</th>
                                <th id="3">Danh mục</th>
                                <th id="4">Tùy biến</th>
                            </tr>
                            <?php
                                if ($show_cartegory){ $i = 0;
                                    while ($result = $show_cartegory -> fetch_assoc()) { $i++;
                            
                            ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $result['cartegory_id'] ?> </td>
                                <td><?php echo $result['cartegory_name'] ?></td>
                                <td><a href="cartegory_update.php?cartegory_id=<?php echo $result['cartegory_id'] ?>"><i class="fa-solid fa-square-pen"></i></a>
                                <a href="cartegory_delete.php?cartegory_id=<?php echo $result['cartegory_id'] ?>"><i class="fa-regular fa-trash-can"></i></a></td>
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