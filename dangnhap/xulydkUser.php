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
        $username = $_GET['username'];
        $password = $_GET['password'];
        $password2 = $_GET['password2'];
        $email = $_GET['email'];
        $sdt = $_GET['sdt'];
        $ns = $_GET['ns'];

            if($username == "" || $password == "" || $password2 == "" || $email == "" || $sdt == "" || $ns == ""){
                echo '<script>alert("Chưa nhập đủ thông tin!");</script>';
                 header("Location: dkUser.php");
            }else{
                if(!preg_match("/^[a-zA-Z0-9' ]*$/",$username)){
                    echo '<script>alert("Tên không chứa kí tự đặc biệt!");</script>';
                    header("Location: dkUser.php");
                }else{
                    if($password != $password2){
                        echo '<script>alert("Mật khẩu không khớp!");</script>';
                        header("Location: dkUser.php");
                    }else{
                        $sql = "INSERT INTO user(username, password, email, sdt, ns) VALUES('$username','$password','$email','$sdt','$ns')";
                        $kq = mysqli_query($conn, $sql);
                        echo '<script>alert("Đăng nhập thành công.");</script>';
                        header("Location: dnUser.php");
                    }
                }
            }
    ?>
</body>
</html>