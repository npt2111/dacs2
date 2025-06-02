<?php
session_start();
require_once 'connect.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $noidung = $_POST["noidung"];
        $date = $_POST["date"];

            if($fullname == "" || $email == "" || $noidung == ""){
                echo '<script>alert("Chưa nhập đầy đủ!")</script>';
            }else{
                $sql = "INSERT INTO binhluan(fullname, email, noidung, date) VALUES('$fullname','$email','$noidung','$date')";
                $kq = mysqli_query($conn, $sql);
                header("Location: diendan.php");
            }
    }

?>