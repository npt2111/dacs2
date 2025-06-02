<?php
    session_start();
    require_once '../../../../connect.php';

    $xoasp =  "DELETE FROM sanpham WHERE id=".$_GET['id'];
    $kq = mysqli_query($conn,$xoasp);
    echo '<script>alert("Đã xóa!");</script>';
    echo '<script>window.history.back();</script>';
?>