<?php
    session_unset();
    session_destroy();
    header('Location:../wed_index/index.php');
?>