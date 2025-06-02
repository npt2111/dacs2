<?php
session_start();
require_once "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $idsp = $_GET['idsp'];
        $soluong = 0;
        if(isset($_SESSION['cart'][$idsp])){
            $soluong = $_SESSION['cart'][$idsp] + 1;
        }else{
            $soluong = 1;
        }
        $_SESSION['cart'][$idsp] = $soluong;
        header("Location: cart.php");
    ?>
    <?php
        if(isset($_GET['xoatatca']) && $_GET['xoatatca']==1){
            unset($_SESSION['cart']);
            header("Location: cart.php");
        }
       
    ?>
</body>
</html>