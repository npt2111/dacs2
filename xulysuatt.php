<?php
session_start();
require_once 'connect.php';
?>
<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $idtt = $_POST['idtt'];
        $tieude = $_POST['tieude'];
        $date = $_POST['date'];
        $noidung = $_POST['noidung'];
            if($_FILES["hinhanh"]["error"] === 4){
                echo 'Loi';
            }else{
                $filename = $_FILES["hinhanh"]["name"];
                $filesize = $_FILES["hinhanh"]["size"];
                $filetmpName = $_FILES["hinhanh"]["tmp_name"];

                $validImageExtension = ['jpg','jpeg','png'];
                $imageExtension = explode('.', $filename);
                $imageExtension = strtolower(end($imageExtension));
                if(!in_array($imageExtension, $validImageExtension)){
                    echo 'Loi!';
                }else if($filesize > 10000000){
                    echo 'Loi!';
                }else{
                   
                    move_uploaded_file($filetmpName, 'images/'.$filename);

                    $sql = "UPDATE tintuc SET tieude='$tieude', hinhanh= '$filename', date='$date', noidung= '$noidung' WHERE id='$idtt'";
                    $kq = mysqli_query($conn, $sql);
                    header("Location: tintuc.php");
               
                }
            }

    }

?>