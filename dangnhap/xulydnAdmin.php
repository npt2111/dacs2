<?php
session_start();
require_once '../connect.php';

    $adminname = $_GET['adminname'];
    $password = $_GET['password'];

    if($adminname == "" || $password == ""){
        header("Location: dnAdmin.php");
    }else{
        $sql = "SELECT*FROM admin WHERE adminname='$adminname' AND password='$password'";
        $kq =  mysqli_query($conn, $sql);
        if(mysqli_num_rows($kq)>0){
            $_SESSION['admin'] = $adminname;
            header("Location: ../index.php");

        }
    }  
?>