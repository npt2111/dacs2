<?php
    session_start();
    require_once 'connect.php';

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $idsp = $_POST['idsp'];
            $tensp = $_POST['tensp'];
            $gia = $_POST['gia'];
            $soluong = $_POST['soluong'];
            $idlsp = $_POST['idlsp'];

            if($_FILES["hinhanh"]["error"] === 4){
                echo 'LOI!';
            }else{
                $filename = $_FILES["hinhanh"]["name"];
                $filesize = $_FILES["hinhanh"]["size"];
                $filetmpName = $_FILES["hinhanh"]["tmp_name"];

                $validImageExtension = ['jpg','jpeg','png'];
                $imageExtension = explode('.', $filename);
                $imageExtension = strtolower(end($imageExtension));
                if(!in_array($imageExtension, $validImageExtension)){
                    echo 'Loi!';
                }else{
                   
                    move_uploaded_file($filetmpName, 'images/'.$filename);

                    $sql = "UPDATE sanpham SET tensp='$tensp', gia='$gia', soluong='$soluong', idlsp='$idlsp', hinhanh='$filename' WHERE id='$idsp'";
                    $kq = mysqli_query($conn, $sql);
                    header("Location: shop.php");
                }
            }
        }
?>