<?php
session_start();
require_once '../connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý</title>
</head>
<body>
<?php
        $adminname = $_GET['adminname'];
        $password = $_GET['password'];
        $password2 = $_GET['password2'];
        $email = $_GET['email'];
        $sdt = $_GET['sdt'];
        $ns = $_GET['ns'];

            if($adminname == "" || $password == "" || $password2 == "" || $email == "" || $sdt == "" || $ns == ""){
                echo '<script>alert("Chưa nhập đủ thông tin!");</script>';
                 header("Location: dkAdmin.php");
            }else{
                if(!preg_match("/^[a-zA-Z0-9' ]*$/",$adminname)){
                    echo '<script>alert("Tên không chứa kí tự đặc biệt!");</script>';
                    header("Location: dkAdmin.php");
                }else{
                    if($password != $password2){
                        echo '<script>alert("Mật khẩu không khớp!");</script>';
                        header("Location: dkAdmin.php");
                    }else{
                        $sql = "INSERT INTO admin(adminname, password, email, sdt, ns) VALUES('$adminname','$password','$email','$sdt','$ns')";
                        $kq = mysqli_query($conn, $sql);
                        echo '<script>alert("Đăng nhập thành công.");</script>';
                        header("Location: dnAdmin.php");
                    }
                }
            }
    ?>
</body>
</html>