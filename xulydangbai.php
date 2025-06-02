<?php  require_once 'connect.php'; ?>
<?php session_start() ?>

    <?php
     if($_SERVER["REQUEST_METHOD"]=="POST"){
            $tieude = $_POST["tieude"];
            $date = $_POST["date"];
            $noidung = $_POST["noidung"];
            if($tieude == "" || $date == "" || $noidung == ""){
                echo '<h3>Chưa nhập đủ thông tin</h3>';
            }else{
                if($_FILES["hinhanh"]["error"] === 4){
                    echo "<script>alert('Image does not exit');</script>";
                }else{
                    $filename = $_FILES["hinhanh"]["name"];
                    $filesize = $_FILES["hinhanh"]["size"];
                    $filetmpName = $_FILES["hinhanh"]["tmp_name"];
                    

                    $validImageExtension = ['jpg','jpeg','png'];
                    $imageExtension = explode('.', $filename);
                    $imageExtension = strtolower(end($imageExtension));
                    if(!in_array($imageExtension, $validImageExtension)){
                        echo "<script>alert('Invalid Image Extension');</script>";
                    }else if($filesize > 100000000){
                        echo "<script>alert('Image Size is too Large');</script>";
                    }
                    else{
                        // $newImageName = uniqid();
                        // $newImageName .= '.'.$imageExtension;

                        move_uploaded_file($filetmpName, 'images/'. $filename);
                        $dangbai = "INSERT INTO tintuc(tieude, hinhanh, date, noidung) VALUE('$tieude','$filename','$date', '$noidung')";
                        $kqdb = mysqli_query($conn, $dangbai);
                        echo $kqdb;
                        echo '<h3>Nhập thành công!</h3>';
                        header("Location: tintuc.php?");
                    }
                }


                 
                }
            }
    else{
        echo '<h2>Bạn chưa đăng nhập</h2> <a href="dangnhap.php">Đăng nhập</a>';
 }
?>
