<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <div class="form-box">
        <div class="form-value" method="post" name="form">
            <form action="xulydnUser.php" >
                <h2>Đăng Nhập User</h2>
                <div class="input">
                    <input id="username" type="text" placeholder="Tên đăng nhập" name="username">
                </div>
                <div class="input">
                    <input id="pass"type="password" placeholder="Mật khẩu" name="password">
                    <i id="eye" class="fa fa-eye" onclick="myfunction()"></i>
                </div>
                </div>
                <div class="button">
                    <input type="submit" name="dangnhap" value="Đăng Nhập">
                </div>
                <div class="links">
                    <p>Bạn chưa có tài khoản?</p>
                    <a href="dkUser.php">Đăng ký</a>
                </div>
                <div class="tc">
                    <a href="../index.php">Quay lại trang chủ</a>
                </div>
            </form>
        </div>
    </div>
</body>
<script type="text/javascript">
    var x =true;
    function myfunction(){
        if(x){
            document.getElementById('pass').type = "text";
      
            x=false;
        }else{
            document.getElementById('pass').type = "password";
          
            x=true;
        }
    }
</script>
</html>