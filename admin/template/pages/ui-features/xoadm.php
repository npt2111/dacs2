<?php
    session_start();
    require_once '../../../../connect.php';

    $xoadm =  "DELETE FROM loaisanpham WHERE id=".$_GET['id'];
    $kq = mysqli_query($conn,$xoadm);
    echo '<script>alert("Đã xóa!");</script>';
    echo '<script>window.history.back();</script>';
?>