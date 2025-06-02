<?php
session_start();
require_once "connect.php";
 if(isset($_SESSION['cart']) && $_GET['xoa']){
    $id = $_GET['xoa'];
    unset($_SESSION['cart'][$id]);

    header("Location: cart.php");
}
?>