<?php
session_start();
require_once '../connect.php';

    $username = $_GET['username'];
    $password = $_GET['password'];

    if($username == "" || $password == ""){
        header("Location: dnUser.php");
    }else{
        $sql = "SELECT*FROM user WHERE username='$username' AND password='$password'";
        $kq =  mysqli_query($conn, $sql);
        if(mysqli_num_rows($kq)>0){
            $_SESSION['user'] = $username;
            header("Location: ../index.php");

        }
    }  
?>