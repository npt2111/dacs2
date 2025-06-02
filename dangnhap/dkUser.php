<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="styledk.css">
</head>
<body>
    <section>
        <div class="box">
            <div class="value">
                <form action="xulydkUser.php">
                <h2>Đăng Ký User</h2>
                <div class="input">
                    <input type="text" placeholder="Tên đăng nhập" name="username">
                </div>
                <div class="input">
                    <input type="email" placeholder="Email" name="email"> 
                </div>
                <div class="input">
                    <input type="tel" placeholder="Số điện thoại" name="sdt">
                </div>
                <div class="input">
                    <input type="date" name="ns">
                </div>
                <div class="input">
                    <input id="pass1" type="password" placeholder="Mật khẩu" name="password">
                </div>
                <div class="input">
                    <input id="pass2" type="password" placeholder="Nhập lại mật khẩu" name="password2">
                </div>
                <i id="eye" class="fa fa-eye" onclick="myfunction()"></i>
                
                <div class="button">
                    <input type="submit" name="dangky" value="Đăng Ký">
                </div>
                <div class="links">
                    <p>Bạn đã có tài khoản?</p>
                    <a href="dnUser.php">Đăng nhập</a>
                </div>
                <div class="tc">
                    <a href="../index.php">Quay lại trang chủ</a>
                </div>
            </form>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        var x =true;
        function myfunction(){
            if(x){
                document.getElementById('pass1').type = "text";
                document.getElementById('pass2').type = "text";
                x=false;
            }else{
                document.getElementById('pass1').type = "password";
                document.getElementById('pass2').type = "password";
                x=true;
            }
        }
    </script>
</body>
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
</html>