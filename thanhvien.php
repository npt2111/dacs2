<?php
session_start();
require_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Team Flash VN Esports</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="icomoon/icomoon.css">
    <link rel="stylesheet" type="text/css" media="all" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/vendor.css">
    <link rel="stylesheet" type="text/css" href="style3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
  </head>
  <style>
    header{
      position: fixed;
      top: 0;
      right: 0;
      left: 0;
      z-index: 999;
    }
    body{
      background: black;
    }
    hr{
      color: white;
    }
    
    
  </style>
  <body>

    <div class="preloader-wrapper">
      <div class="preloader">
      </div>
    </div>

    <div class="search-popup">
      <div class="search-popup-container">

        <form role="search" method="get" class="search-form" action="">
          <input type="search" id="search-form" class="search-field" placeholder="Type and press enter" value="" name="s" />
          <button type="submit" class="search-submit"><a href="#"><i class="icon icon-search"></i></a></button>
        </form>

        <h5 class="cat-list-title">Browse Categories</h5>
        
        <ul class="cat-list">
          <li class="cat-list-item">
            <a href="shop.html" title="Men Jackets">Men Jackets</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.html" title="Fashion">Fashion</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.html" title="Casual Wears">Casual Wears</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.html" title="Women">Women</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.html" title="Trending">Trending</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.html" title="Hoodie">Hoodie</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.html" title="Kids">Kids</a>
          </li>
        </ul>
      </div>
    </div>
    <header id="header" style="background-color: black;">
      <div id="header-wrap">
        <nav class="secondary-nav border-bottom">
          <div class="container">
            <div class="row d-flex align-items-center">
              <div class="col-md-4 header-contact">
              </div>
              <div class="col-md-4 shipping-purchase text-center">
                <p>Team Flash VN Esports</p>
              </div>
              <div class="col-md-4 col-sm-12 user-items">
                <ul class="d-flex justify-content-end list-unstyled">
                <li>
                    <?php
                    if(isset($_SESSION['admin'])){
                      echo '<a href="admin/template/admin.php" style="color: white;" href="">Admin: '.$_SESSION['admin'].'</a>';
                    }
                    else if(isset($_SESSION['user'])){
                      echo '<a style="color: white;" href="">User: '.$_SESSION['user'].'</a>';
                    }
                    else{
                      echo' <a href="dangnhap/login.php">
                      <i class="icon icon-user"></i>
                    </a>';
                    }
                    ?>
                   
                  </li>
                  <li>
                    <a href="cart.php">
                      <i class="icon icon-shopping-cart"></i>
                    </a>
                  </li>
                  
                  <li class="user-items search-item pe-3">
                    <a href="#" class="search-button">
                      <i class="icon icon-search"></i>
                    </a>
                  </li>
                  <li>
                    <a href="dangnhap/dangxuat.php"><img src="admin/template/assets/images/logout.png" alt="" width="17px" ></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
        <nav class="primary-nav padding-small" style="padding: 0px;background-color: black;">
          <div class="container" style=" background-color: black;">
            <div class="row d-flex align-items-center" >
              <div class="col-lg-2 col-md-2">
                <div class="main-logo">
                  <a href="index.php">
                    <img src="admin/template/assets/images/logoFlash1.png" alt="logo" width="80px">
                  </a>
                </div>
              </div>
              <div class="col-lg-10 col-md-10">
                <div class="navbar">

                  <div id="main-nav" class="stellarnav d-flex justify-content-end right">
                    <ul class="menu-list">

                      <li class="menu-item has-sub">
                        <a href="index.php" class="item-anchor d-flex align-item-center" data-effect="Home">Trang chủ</a>
                        
                      </li>

                      <li><a href="tintuc.php" class="item-anchor" data-effect="About">Tin tức</a></li>

                      <li class="menu-item has-sub">
                        <a href="#" class="item-anchor active d-flex align-item-center" data-effect="Shop">Our Teams<i class="icon icon-chevron-down"></i></a>
                        <ul class="submenu">
                          <li><a href="thanhvien.php?theloai=1" class="item-anchor">Liên Quân Mobile</a></li>
                          <li><a href="thanhvien.php?theloai=2" class="item-anchor">Free Fire</a></li>
                          <li><a href="thanhvien.php?theloai=3" class="item-anchor">Liên Minh Huyền Thoại</a></li>
                          <li><a href="thanhvien.php?theloai=4" class="item-anchor">Liên Minh Huyền Thoại: Tốc Chiến</a></li>                        
                        </ul>
                      </li>
                      <li class="menu-item has-sub">
                        <a href="#" class="item-anchor d-flex align-item-center" data-effect="Shop">Thi đấu<i class="icon icon-chevron-down"></i></a>
                        <ul class="submenu">
                          <li><a href="thidau.php" class="item-anchor">Lịch thi đấu</a></li>
                          <li><a href="xephang.php" class="item-anchor">Xếp hạng</a></li>                        
                        </ul>
                      </li>
                      <li class="menu-item has-sub">
                        <a href="shop.php" class="item-anchor d-flex align-item-center" data-effect="Pages">Shop</a>
                      </li>

                      <li class="menu-item has-sub">
                        <a href="diendan.php" class="item-anchor d-flex align-item-center" data-effect="Blog">Diễn đàn</a>
                        
                      </li>

                      <li><a href="lienhe.php" class="item-anchor" data-effect="Contact">Liên hệ</a></li>

                    </ul>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>

    
<br><br><br><br><br>
  <section class="tieude">

    <div class="post-meta">
        <span class="post-date" style="color: orange;">Trang chủ</span> / <a href="tintuc.php" style="color: grey;">Our teams</a>
    </div>

  </section>
     
    <div class="colorlib-product">
          <div class="container">
            <div class="row row-pb-md">
              <?php
                $sqltl = "SELECT*FROM theloai WHERE id=".$_GET['theloai'];
                $kqtl = mysqli_query($conn, $sqltl);
                while($row = mysqli_fetch_array($kqtl)){
                ?>
                <div><h2 style="color: white;">Our Teams-<?php echo $row['theloai'] ?></h2></div>
                
              <?php } ?>
              <?php 
                $sql = "SELECT*FROM thanhvien WHERE idtheloai=".$_GET['theloai'];
                $kq = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($kq)){
              ?>
              <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                  <a href="#" class="prod-img">
                    <img src="admin/template/assets/images/<?php echo $row['hinhanh']; ?>" style="width: 250px;" class="img-fluid">
                  </a>
                  <div class="desc" >
                    <h2 style="color: white;"><?php echo $row['tentv'] ?></h2>
                    <h5 class="vitri" style="color: white;"><?php echo $row['vitri'] ?></h5>
                  </div>
                  <?php
                  if(isset($_SESSION['admin'])){ ?>
                    <div class="btn-admin">
                    <button style="border-color: green; border-radius: 50px;"><a href="chinhsuatv.php?id=<?php echo $row['id'] ?>" style="color: white;">Chỉnh sửa</a></button>
                    <button style="border-color: red; border-radius: 50px;"><a href="xoatv.php?id=<?php echo $row['id'] ?>" style="color: white;">Xóa</a></button>
                  </div>
                  <?php
                  }
                ?>
                  
                  

                </div>
              </div>
             <?php
              }
            ?>
            </div>
            
          </div>
        </div>
        <?php
      if(isset($_SESSION['admin'])){
        ?>
        <div class="row">
          <div class="col-12">
          <div class="col-md-5">
          </div>
          <div class="col-md-2">
            <button style="background-color: orange; border-radius: 50px;">
              <a href="themthanhvien.php">Thêm thành viên</a>
            </button>
          </div>
          <div class="col-md-5">
          </div>
          </div>
        </div>
         
        <?php
      }
   ?>

    
    <section id="shipping-information">
      <hr>
      <div class="container">
        <div class="row d-flex flex-wrap align-items-center justify-content-between">
          <div class="col-md-2 col-sm-6">
              <img src="admin/template/assets/images/logomomo.jpg" alt="">
          </div>
          <div class="col-md-2 col-sm-6">
            <img src="admin/template/assets/images/logoshope.jpg" alt="">
          </div>
          <div class="col-md-2 col-sm-6">
            <img src="admin/template/assets/images/logovinamilk.jpg" alt="">
          </div>
          <div class="col-md-2 col-sm-6">
            <img src="admin/template/assets/images/logosamsung.jpg" alt="">
          </div>
          <div class="col-md-2 col-sm-6">
            <img src="admin/template/assets/images/logoVietJet.jpg" alt="">
          </div>
          <div class="col-md-2 col-sm-6">
            <img src="admin/template/assets/images/logoNiveaMen.jpg" alt="">
          </div>
        </div>
      </div>
      <hr>
    </section>



<!--footer-->
    <footer id="footer" style="color: white">
      <div class="container">
        <div class="footer-menu-list">
          <div class="row d-flex flex-wrap justify-content-between">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <img src="images/logoFlash1.png" alt="" width="100px">
                <ul class="menu-list list-unstyled">
                  <li class="menu-item">
                    <br>
                    <p>Địa chỉ: Trường Đại học Công Nghệ Thông Tin & Truyền Thông Việt-Hàn</p>
                  </li>
                  <li class="menu-item">
                    <p>Số điện thoại: 0387237230</p>
                  </li>
                  <li class="menu-item">
                    <p>Email: thuannp.22itb@vku.vku.vn</p>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title" style="color: white">VỀ CHÚNG TÔI</h5>
                <ul class="menu-list list-unstyled">
                  <li class="menu-item">
                    <a href="faqs.html">Team Flash</a>
                  </li>
                  <li class="menu-item">
                    <a href="contact.html">Education</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Liên Hệ</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Tin Tức</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Câu hỏi</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Chính Sách</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title" style="color: white">HỖ TRỢ KHÁCH HÀNG</h5>
                <a href="#" class="email">thuannp.22itb@vku.udn.vn</a>
          
                  <strong>0387237230</strong>
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title" style="color: white">ĐĂNG KÝ NHẬN TIN</h5>
               
                <div>
                  <input type="text" style="color: white" placeholder="Nhập địa chỉ email">
                  <input type="submit" value="Đăng ký">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
    </footer>

    <div id="footer-bottom">
      <div class="container">
        <div class="d-flex align-items-center flex-wrap justify-content-between">
          <div class="copyright">
          </div>
          <div class="payment-method">
            <p>Payment options :</p>
            <div class="card-wrap">
              <img src="admin/template/assets/images/visa-icon.jpg" alt="visa">
              <img src="admin/template/assets/images/mastercard.png" alt="mastercard">
              <img src="admin/template/assets/images/american-express.jpg" alt="american-express">
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>