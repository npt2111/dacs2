<?php
session_start();
require_once 'connect.php';
?>
<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $idtv = $_POST['idtv'];
        $tentv = $_POST['tentv'];
        $vitri = $_POST['vitri'];
        $idtl = $_POST['idtl'];

            if($_FILES["image"]["error"] === 4){
                echo 'Loi';
            }else{
                $filename = $_FILES["image"]["name"];
                $filesize = $_FILES["image"]["size"];
                $filetmpName = $_FILES["image"]["tmp_name"];

                $validImageExtension = ['jpg','jpeg','png'];
                $imageExtension = explode('.', $filename);
                $imageExtension =  strtolower(end($imageExtension));
                if(!in_array($imageExtension, $validImageExtension)){
                 echo 'Loi';
                }else if($filesize > 1000000000){
                    echo 'Loi';
                }else{
                    
                    move_uploaded_file($filetmpName, 'images/'. $filename);
                    $sqlupdate = "UPDATE thanhvien SET tentv='$tentv', vitri='$vitri' , hinhanh='$filename', idtheloai='$idtl' WHERE id='$idtv'";
                    $kqupdate = mysqli_query($conn, $sqlupdate);
                    echo $sqlupdate;
                    header("Location: thanhvien.php?theloai='$idtl'");
                }
            }
    }
?>