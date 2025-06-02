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
    table{
      border: 1px solid white;
      color: white;
      border-radius: 10px;
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

                      <li><a href="tintuc.php" class="item-anchor " data-effect="About">Tin tức</a></li>

                      <li class="menu-item has-sub">
                        <a href="#" class="item-anchor d-flex align-item-center" data-effect="Shop">Our Teams<i class="icon icon-chevron-down"></i></a>
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
                        <a href="shop.php" class="item-anchor active d-flex align-item-center" data-effect="Pages">Shop</a>
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

<div class="container">
  <form class="col-md-12" method="post">
  <table class="table" width="100%">
  <thead>
    <tr>
      <td></td>
      <th scope="col">Hình ảnh</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Giá</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Thành tiền</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    if(!empty($_SESSION['cart'])){
      if(isset($_SESSION['cart'])){
        $tongtien = 0;
        foreach($_SESSION['cart'] as $key=>$value){
          $item[] = $key;
         
        }
        $str = implode(",", $item);
        $sql = "SELECT*FROM sanpham WHERE id in ($str)";
        $kq = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($kq)){
          ?>
          <tr>
          <td><input type="checkbox" style="margin-left:10px;"></td>
          <td><img src="admin/template/assets/images/<?php echo $row['hinhanh'] ?>" width="100px"></td>
          <td><?php echo $row['tensp'] ?></td>
          <td><?php echo number_format($row['gia'],0,',','.') ?></td>
          <td><?php echo $_SESSION['cart'][$row['id']] ?></td>
          <td><?php echo number_format(($row['gia']*$_SESSION['cart'][$row['id']]),0,',','.') ?></td>
          <td><a href="xoatungcart.php?xoa=<?php echo $row['id'] ?>" style="color: white;">X</a></td>
        </tr>
       <?php $tongtien += ($row['gia']*$_SESSION['cart'][$row['id']]); ?>
      <?php
        }
      
      }
    }else{
      ?>
      <tr>
        <td colspan="7"><p style="text-align: center; font-size:20px;">Hiện tại giỏ hàng trống.</p></td>
      </tr>
      <?php
    }
  ?>
  </tbody>
  </table>
  
  </form>
      <div class="row">
        <div class="col-md-6">
          <div class="row mb-5">
          <div class="col-md-4">
              <a href="xulycart.php?xoatatca=1"><button class="btn btn-black btn-sm btn-block"  style="background-color: red; border-radius: 50px;">DELETE ALL</button></a>
            </div>
            <div class="col-md-4">
              <a href=""><button class="btn btn-black btn-sm btn-block"  style="background-color: green; border-radius: 50px;">Update Cart</button></a>
            </div>
            <div class="col-md-4">
              <a href="shop.php"><button style="background-color: orange; border-radius: 50px;">Continue Shopping</button></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 pl-5" >
                  <div class="row justify-content-end" >
                  <div class="col-md-6"></div>
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-12 text-center border-bottom mb-5">
                          <h3 class="text-black h4 text-uppercase">Tổng Tiền Giỏ Hàng</h3>
                        </div>
                      </div>
                      <div class="row mb-3">
                      </div>
                      <div class="row mb-5">
                        <div class="col-md-6">
                          <span class="text-black" style="color: white;">Tổng</span>
                        </div>
                        <div class="col-md-6 text-right">
                          <strong class="text-black"><?php 
                          if(isset($_SESSION['cart'])){
                            echo number_format($tongtien,0,',','.').' vnđ'; 
                          }else{
                            ?><p>0</p>
                             <?php
                          }
                          
                          ?></strong>
                        </div>
                      </div>
        
                      <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                          <?php
                            if(isset($_SESSION['cart'])){
                              ?>
                              <a href=""><button class="btn btn-black btn-lg py-3 btn-block" style="background-color: gray; border-radius: 50px;">Thanh toán</button></a>
                              <?php
                            }
                          ?>
                        </div>
                        <div class="col-md-4"></div>
                      </div>
                    </div>
                  </div>
                </div>
      </div>
</div>
 
    
 
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
                <img src="admin/template/assets/images/logoFlash1.png" alt="" width="100px">
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