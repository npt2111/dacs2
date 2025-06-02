<?php  require_once 'connect.php'; ?>
<?php session_start() ?>

    <?php
     if($_SERVER["REQUEST_METHOD"]=="POST"){
            $tentv = $_POST["tentv"];
            $vitri = $_POST["vitri"];
            $idtl = $_POST["idtl"];
            if($tentv == "" || $vitri == "" || $idtl == ""){
                echo '<h3>Chưa nhập đủ thông tin</h3>';
            }else{
                if($_FILES["image"]["error"] === 4){
                    echo "<script>alert('Image does not exit');</script>";
                }else{
                    $filename = $_FILES["image"]["name"];
                    $filesize = $_FILES["image"]["size"];
                    $filetmpName = $_FILES["image"]["tmp_name"];
                    

                    $validImageExtension = ['jpg','jpeg','png'];
                    $imageExtension = explode('.', $filename);
                    $imageExtension = strtolower(end($imageExtension));
                    if(!in_array($imageExtension, $validImageExtension)){
                        echo "<script>alert('Invalid Image Extension');</script>";
                    }else if($filesize > 100000000){
                        echo "<script>alert('Image Size is too Large');</script>";
                    }
                    else{
                      

                        move_uploaded_file($filetmpName, 'images/'. $filename);
                        $themsp = "INSERT INTO thanhvien(tentv, vitri, hinhanh, idtheloai) VALUE('$tentv','$vitri','$filename', $idtl)";
                        $kqsp = mysqli_query($conn, $themsp);
                        echo '<h3>Nhập thành công!</h3>';
                        header("Location: thanhvien.php?theloai='.$idtl.'");
                    }
                }


                 
                }
            }
    else{
        echo '<h2>Bạn chưa đăng nhập</h2> <a href="dangnhap.php">Đăng nhập</a>';
 }
?>
