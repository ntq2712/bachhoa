<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <title> wed bán hàng </title>
</head>
<body>
    <?php
      include "handle/giaodien_class.php";
     
    ?>

    <header>
        <div class="logo">
            <a href="">NGỌC DIỆP</a>
        </div>
        <div class="menu">
            
            <?php
                $giaodien = new giaodien;
                $show_cartegory = $giaodien -> show_cartegory();
            ?>

            <?php
                if ($show_cartegory){ $i = 0;
                    while ($result = $show_cartegory -> fetch_assoc()) { $i++;
            
            ?>
                <li id="<?php echo  $result['cartegory_id'] ?>"> <a href="cartegory.php?cartegory_id=<?php echo $result['cartegory_id'] ?>"> <?php echo  $result['cartegory_name'] ?></a>
                    <ul class="sub-menu">
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
        <form action="" method="GET">
            <div class="others">
                <li> <input type="text" name="seach"> <button><i class="fa fa-search"></i></button> </li>
                <li><i class="fa fa-paw" aria-hidden="true"></i></li>
                <li> <a href="page_user.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                <li><a href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
            </div>
        </form>   
    </header>