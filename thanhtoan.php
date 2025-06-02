<?php
    session_start();
    require_once 'connect.php';

    $idkh = $_SESSION['user'];
    $code_order = rand(0,9999);
    
    $giohang = "INSERT INTO giohang(idkh, mahang, trangthai) VALUE('$idkh','$code_order','1')";
    $kqgh =  mysqli_query($conn, $giohang);

    if($giohang){
        foreach($_SESSION['cart'] as $key => $value){
            $idsp = $value['id'];
            $soluong = $value['']
        }
    }
?>