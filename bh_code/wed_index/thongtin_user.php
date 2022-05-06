<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER</title>
</head>
<?php
    session_start();
?>
<style>
    h1{
        margin-top: 20px;
        margin-bottom: 20px;
        color: brown;
    }
    .page_user{
        border: 2px solid #dddd;
        width: 500px;
        height: 500px;
        text-align: center;
        margin-top: 100px;
        margin-left: 500px;
        background-color: #dddd;
    }
    button{
        width: 100px;
        height: 30px;
        border: 2px solid #dddd;
        background-color: brown;
        
    }
    a{
        color: #fff;
        font-weight: bold;
    }

</style>
<body>
    <div class="page_user">
        <h1>TRANG CỦA TÔI</h1>
        <label for="">ID: <?php echo $_SESSION['id'] ?></label> </br>
        <label for="">Tên user: <?php echo $_SESSION['name'] ?></label> </br>
        <label for="">Tên tài khoản: <?php echo  $_SESSION['account'] ?></label> </br>
    </div>
</body>