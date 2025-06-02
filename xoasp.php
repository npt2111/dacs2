<?php
session_start();
require_once 'connect.php';
    $kq = mysqli_query($conn, "DELETE FROM sanpham WHERE id=".$_GET['id']);
    header("Location: shop.php");
?>