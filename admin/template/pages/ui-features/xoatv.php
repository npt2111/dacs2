<?php
    session_start();
    require_once '../../../../connect.php';

    $xoatv =  "DELETE FROM thanhvien WHERE id=".$_GET['id'];
    $kq = mysqli_query($conn,$xoatv);
    echo '<script>alert("Đã xóa!");</script>';
    echo '<script>window.history.back();</script>';
?>