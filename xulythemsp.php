<?php
    session_start();
    require_once 'connect.php';


        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $tensp = $_POST['tensp'];
            $gia = $_POST['gia'];
            $soluong = $_POST['soluong'];
            $idlsp = $_POST['idlsp'];

            if($tensp == ""|| $gia == "" || $soluong == "" || $idlsp == ""){
                echo '<script>alert("Chưa điền đủ thông tin!")</script>';
            }else{
                if($_FILES["image"]["error"] === 4){
                    echo 'Loi!';
                }else{
                    $filename = $_FILES["image"]["name"];
                    $filesize = $_FILES["image"]["size"];
                    $filetmpName = $_FILES["image"]["tmp_name"];

                    $validImageExtension = ['jpg','jpeg','png'];
                    $imageExtension = explode('.', $filename);
                    $imageExtension = strtolower(end($imageExtension));
                    if(!in_array($imageExtension, $validImageExtension)){
                        echo '<script>alert("Loi!")</script>';
                    }else{
                       

                        move_uploaded_file($filetmpName, 'images/'.$filename);

                        $themsp = "INSERT INTO sanpham(tensp, gia, soluong, idlsp, hinhanh) VALUES('$tensp','$gia','$soluong','$idlsp','$filename')";
                        $kqsp = mysqli_query($conn, $themsp);
                        header("Location: shop.php");
                    }
                }
            }
        }

?>