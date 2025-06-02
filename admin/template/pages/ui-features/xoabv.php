<?php
    session_start();
    require_once '../../../../connect.php';

    $xoabv =  "DELETE FROM tintuc WHERE id=".$_GET['id'];
    $kq = mysqli_query($conn,$xoabv);
    echo '<script>alert("Đã xóa!");</script>';
    echo '<script>window.history.back();</script>';
?>