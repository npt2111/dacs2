<?php
    session_start();
    require_once 'connect.php';
    $sql = "DELETE FROM tintuc WHERE id=".$_GET['id'];
    $kq = mysqli_query($conn, $sql);
    header("Location: tintuc.php");
?>