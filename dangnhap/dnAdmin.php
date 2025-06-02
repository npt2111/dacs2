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
        <div class="form-value"  name="form">
            <form action="xulydnAdmin.php" >
                <h2>Đăng Nhập <br> Admin</h2>
                <div class="input">
                    <input id="username" type="text" name="adminname" placeholder="Tên đăng nhập">
                </div>
                <div class="input">
                    <input id="pass"type="password" name="password" placeholder="Mật khẩu">
                    <i id="eye" class="fa fa-eye" onclick="myfunction()"></i>
                </div>
                </div>
                <div class="button">
                    <input id="dangnhap" class="dn" type="submit" value="Đăng nhập"></input>
                </div>
                <div class="links">
                    <p>Bạn chưa có tài khoản?</p>
                    <a href="dkAdmin.php">Đăng ký</a>
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