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
                        <a href="diendan.php" class="item-anchor d-flex align-item-center" data-effect="Blog">Diễn Đàn</a>
                        
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
      <a href="index.php"><span class="post-date" style="color: orange;">Trang chủ</span></a> / <a href="shop.php" style="color: grey;">Shop</a>
    </div>
    <div>
      <h1 style="text-align: center; color: gray;">Flash Shop</h1>
    </div>
  </section>
     
<div>
  <?php
    if(isset($_SESSION['admin'])){
      ?>
      <div>
        <button style="background-color: orange; border-radius: 50px;"><a href="themsanpham.php" style="color: white;">Thêm sản phẩm</a></button>
      </div>
      <?php
    }
  ?>
</div>
<div class="shopify-grid padding-large">
      <div class="container">
        <div class="row">
        <aside class="col-md-3">
              <div class="sidebar">
                <div class="widgets widget-menu">
                  <div class="widget-search-bar">
                    <form role="search" method="get" class="d-flex">
                      <input class="search-field" placeholder="Search" type="text" name="search">
                      <button class="btn btn-dark"><i class="icon icon-search"></i></button>
                    </form>
                  </div> 
                </div>
                
              </div>
            </aside>           
          <section id="selling-products" class="col-md-9 product-store">
            <div class="container">
              <ul class="tabs list-unstyled">
                <li data-tab-target="#all" class="active tab">All</li>
                <li data-tab-target="#aoquan" class="tab">Áo Quần</li>
                <li data-tab-target="#balo" class="tab">Balo</li>
                <li data-tab-target="#pk" class="tab">Phụ kiện</li>
              </ul>
              <div class="tab-content">
                <div id="all" data-tab-content class="active">
                  <div class="row d-flex flex-wrap">
                    <?php
                        $kqsp = mysqli_query($conn, "SELECT*FROM sanpham");
                        while($row = mysqli_fetch_array($kqsp)){
                    ?>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6" style="background-color: black; border-color: gray;">
                      <div class="image-holder">
                        <img src="admin/template/assets/images/<?php echo $row['hinhanh'] ?>" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                      <div class="cart-button d-flex justify-content-between align-items-center">
                        <a href="xulycart.php?idsp=<?php echo $row['id'] ?>"><button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button></a>
                        <a href=""> <button type="button" class="view-btn tooltip
                          d-flex">
                        <i class="icon icon-screen-full"></i>
                        <span class="tooltip-text">View</span>
                        </button></a>
                        <button type="button" class="wishlist-btn">
                        <i class="icon icon-heart"></i>
                        </button>
                      </div>
                    </div>
                    <div>
                    <a href="#" class="blog-categories" style="font-size: 10px;display: flex;align-items: center;justify-content: center;">Team Flash</a>
                    </div>
                      <div class="product-detail">
                        <p class="product-title" style="text-align: justify; ">
                          <a href="single-product.html" style="color: white; font-size: 25px; display: flex;align-items: center;justify-content: center;"><?php echo $row['tensp'] ?></a>
                        </p>
                        <div class="item-price text-primary" style="font-size: 25px; display: flex;align-items: center;justify-content: center;"><?php echo number_format($row['gia'],0,',','.').'vnđ'; ?></div>
                      </div>
                      
                        <?php
                          if(isset($_SESSION['admin'])){
                              ?>
                              <div>
                                <button style="background-color: green; border-radius: 50px;"><a href="chinhsuasp.php?id=<?php echo $row['id'] ?>" style="color: white;">Chỉnh sửa</a></button>
                                <button style="background-color: red; border-radius: 50px;"><a href="xoasp.php?id=<?php echo $row['id'] ?>" style="color: white;">Xóa</a></button>
                              </div>
                              <?php
                          } /*if(isset($_SESSION['user'])){
                            ?>
                              <div>
                                <a href="xulycart.php?idsp=<?php echo $row['id'] ?>"><button style="background-color: orange;">Thêm giỏ hàng</button></a>
                                <a href=""><button style="background-color: gray;">Chi tiết</button></a>
                              </div>
                              <?php
                          }*/
                        ?>
                    </div>
                    <?php
                      }
                    ?>
                            
                  </div>
                  </div>
                </div>
                <div id="aoquan" data-tab-content>
                  <div class="row d-flex flex-wrap">
                  <?php
                        $kq1 = mysqli_query($conn, "SELECT*FROM sanpham WHERE idlsp=1");
                        while($row1 = mysqli_fetch_array($kq1)){
                    ?>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6" style="background-color: black; border-color: gray;">
                      <div class="image-holder">
                        <img src="admin/template/assets/images/<?php echo $row1['hinhanh'] ?>" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                      <div class="cart-button d-flex justify-content-between align-items-center">
                        <a href="xulycart.php?idsp=<?php echo $row1['id'] ?>"><button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button></a>
                        <a href=""> <button type="button" class="view-btn tooltip
                          d-flex">
                        <i class="icon icon-screen-full"></i>
                        <span class="tooltip-text">View</span>
                        </button></a>
                        <button type="button" class="wishlist-btn">
                        <i class="icon icon-heart"></i>
                        </button>
                      </div>
                    </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="single-product.html" style="color: white;"><?php echo $row1['tensp'] ?></a>
                        </h3>
                        <div class="item-price text-primary"><?php echo $row1['gia'] ?><sup>VNĐ</sup></div>
                      </div>
                      
                        <?php
                          if(isset($_SESSION['admin'])){
                              ?>
                              <div>
                              <button style="background-color: green;"><a href="chinhsuasp.php?id=<?php echo $row1['id'] ?>" style="color: white;">Chỉnh sửa</a></button>
                                <button style="background-color: red;"><a href="xoasp.php?id=<?php echo $row1['id'] ?>" style="color: white;">Xóa</a></button>
                              </div>
                              <?php
                          } /*if(isset($_SESSION['user'])){
                            ?>
                              <div>
                              <a href="xulycart.php?idsp=<?php echo $row['id'] ?>"><button style="background-color: orange;">Thêm giỏ hàng</button></a>
                              <a href=""><button style="background-color: gray;">Chi tiết</button></a>
                              </div>
                              <?php
                          }*/
                        ?>
                    </div>
                    <?php
                    }
                    ?>
                  </div>
                </div>
                <div id="balo" data-tab-content>
                <div class="row d-flex flex-wrap">
                  <?php
                        $kq2 = mysqli_query($conn, "SELECT*FROM sanpham WHERE idlsp=2");
                        while($row2 = mysqli_fetch_array($kq2)){
                    ?>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6" style="background-color: black; border-color: gray;">
                      <div class="image-holder">
                        <img src="admin/template/assets/images/<?php echo $row2['hinhanh'] ?>" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                      <div class="cart-button d-flex justify-content-between align-items-center">
                        <a href="xulycart.php?idsp=<?php echo $row2['id'] ?>"><button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button></a>
                        <a href=""> <button type="button" class="view-btn tooltip
                          d-flex">
                        <i class="icon icon-screen-full"></i>
                        <span class="tooltip-text">View</span>
                        </button></a>
                        <button type="button" class="wishlist-btn">
                        <i class="icon icon-heart"></i>
                        </button>
                      </div>
                    </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="single-product.html" style="color: white;"><?php echo $row2['tensp'] ?></a>
                        </h3>
                        <div class="item-price text-primary"><?php echo $row2['gia'] ?><sup>VNĐ</sup></div>
                      </div>
                      
                        <?php
                          if(isset($_SESSION['admin'])){
                              ?>
                              <div>
                              <button style="background-color: green;"><a href="chinhsuasp.php?id=<?php echo $row2['id'] ?>" style="color: white;">Chỉnh sửa</a></button>
                                <button style="background-color: red;"><a href="xoasp.php?id=<?php echo $row2['id'] ?>" style="color: white;">Xóa</a></button>
                              </div>
                              <?php
                          } /*if(isset($_SESSION['user'])){
                            ?>
                              <div>
                              <a href="xulycart.php?idsp=<?php echo $row['id'] ?>"><button style="background-color: orange;">Thêm giỏ hàng</button></a>
                              <a href=""><button style="background-color: gray;">Chi tiết</button></a>
                              </div>
                              <?php
                          }*/
                        ?>
                    </div>
                    <?php
                    }
                    ?>
                  </div>
                </div>
                <div id="pk" data-tab-content>
                  <div class="row d-flex flex-wrap">
                    <?php
                          $kq3 = mysqli_query($conn, "SELECT*FROM sanpham WHERE idlsp=3");
                          while($row3 = mysqli_fetch_array($kq3)){
                      ?>
                      <div class="product-item col-lg-4 col-md-6 col-sm-6" style="background-color: black; border-color: gray;">
                        <div class="image-holder">
                          <img src="admin/template/assets/images/<?php echo $row3['hinhanh'] ?>" alt="Books" class="product-image">
                        </div>
                        <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                        <a href="xulycart.php?idsp=<?php echo $row3['id'] ?>"><button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button></a>
                        <a href=""> <button type="button" class="view-btn tooltip
                          d-flex">
                        <i class="icon icon-screen-full"></i>
                        <span class="tooltip-text">View</span>
                        </button></a>
                        <button type="button" class="wishlist-btn">
                        <i class="icon icon-heart"></i>
                        </button>
                      </div>
                    </div>
                        <div class="product-detail">
                          <h3 class="product-title">
                            <a href="single-product.html" style="color: white;"><?php echo $row3['tensp'] ?></a>
                          </h3>
                          <div class="item-price text-primary"><?php echo $row3['gia'] ?><sup>VNĐ</sup></div>
                        </div>
                        
                          <?php
                            if(isset($_SESSION['admin'])){
                                ?>
                                <div>
                                <button style="background-color: green;"><a href="chinhsuasp.php?id=<?php echo $row3['id'] ?>" style="color: white;">Chỉnh sửa</a></button>
                                <button style="background-color: red;"><a href="xoasp.php?id=<?php echo $row3['id'] ?>" style="color: white;">Xóa</a></button>
                                </div>
                                <?php
                            } /* if(isset($_SESSION['user'])){
                              ?>
                                <div>
                                <a href="xulycart.php?idsp=<?php echo $row['id'] ?>"><button style="background-color: orange;">Thêm giỏ hàng</button></a>
                                <a href=""><button style="background-color: gray;">Chi tiết</button></a>
                                </div>
                                <?php
                            }*/
                          ?>
                      </div>
                    <?php
                    }
                    ?>
                    </div>
                </div>
                
                
                
              
                </div>
               </div>
            </div>
          </section>
          
          
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