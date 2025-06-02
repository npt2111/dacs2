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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
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
                        <a href="index.php" class="item-anchor active d-flex align-item-center" data-effect="Home">Trang chủ</a>
                        
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

    <section id="billboard" class="overflow-hidden" style="padding-top: 70px;">

      <button class="button-prev">
        <i class="icon icon-chevron-left"></i>
      </button>
      <button class="button-next">
        <i class="icon icon-chevron-right"></i>
      </button>
      <div class="swiper main-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-image: url('admin/template/assets/images/slider_3.jpg');background-repeat: no-repeat;background-size: contain;background-position: center;">
            <div class="banner-content">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                   
                    <div class="btn-wrap">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" style="background-image: url('admin/template/assets/images/slider_1.jpg');background-repeat: no-repeat;background-size: contain;background-position: center;">
            <div class="banner-content">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="btn-wrap">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" style="background-image: url('admin/template/assets/images/slider_2.jpg');background-repeat: no-repeat;background-size: contain;background-position: center;">
            <div class="banner-content">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="btn-wrap">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" style="background-image: url('admin/template/assets/images/slider_4.jpg');background-repeat: no-repeat;background-size: contain;background-position: center;">
            <div class="banner-content">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                   <div class="btn-wrap">
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" style="background-image: url('admin/template/assets/images/slider_5.jpg');background-repeat: no-repeat;background-size: contain;background-position: center;">
            <div class="banner-content">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="btn-wrap">
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>


    <section id="featured-products" class="product-store padding-large">
      <div class="container">
        <div class="section-header d-flex flex-wrap align-items-center justify-content-between">
          <h2 class="section-title" style="color: white">OUR TEAMS</h2>            
          <div class="btn-wrap">
         </div>            
        </div>
        <div class="swiper product-swiper overflow-hidden">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="product-item">
                <div class="image-holder">
                  <img src="admin/template/assets/images/lienquan_logo.jpg" alt="Books" class="product-image">
                </div>
                
                <div class="product-detail">
                  <h3 class="product-title"style="text-align:center;color: white">
                    <a href="thanhvien.php?theloai=1" >Liên Quân Mobile</a>
                  </h3>
                    </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-item">
                <div class="image-holder">
                  <img src="admin/template/assets/images/freefire_logo.jpg" alt="Books" class="product-image">
                </div>
                
                <div class="product-detail">
                  <h3 class="product-title" style="text-align:center;color: white">
                    <a href="thanhvien.php?theloai=2">Free Fire</a>
                  </h3>
                    </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-item">
                <div class="image-holder">
                  <img src="admin/template/assets/images/lol_logo.jpg" alt="Books" class="product-image">
                </div>
                
                <div class="product-detail">
                  <h3 class="product-title" style="text-align:center;color: white">
                    <a href="thanhvien.php?theloai=3">LOL: League Of Legends</a>
                  </h3>
                     </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-item">
                <div class="image-holder">
                  <img src="admin/template/assets/images/tocchien_logo.jpg" alt="Books" class="product-image">
                </div>
                
                <div class="product-detail">
                  <h3 class="product-title" style="text-align:center;color: white">
                    <a href="thanhvien.php?theloai=4">League Of Legends: WildRift</a>
                  </h3>
                    </div>
              </div>
            </div>
            
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>

    <section id="latest-collection">
      <div class="container">
        <div class="product-collection row">
          <div class="col-lg-7 col-md-12 left-content">
            <div class="collection-item">
              <div class="products-thumb">
                <img src="admin/template/assets/images/gioithieu_Flash.jpg" alt="collection item" class="large-image image-rounded" style="background-size: contain;">
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 product-entry">
                <div class="categories" style="color: white">Đội của chúng ta</div>
                <h3 class="item-title" style="color: white">TEAM FLASH</h3>
                 <div class="btn-wrap">
                  <a href="gioithieuteam.php" class="d-flex align-items-center" style="color: white">Chi tiết <i class="icon icon-arrow-io"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 right-content flex-wrap">
            <div class="collection-item top-item">
              <div class="products-thumb">
                <img src="admin/template/assets/images/shop_flash.jpg" alt="collection item" class="small-image image-rounded">
              </div>
              <div class="col-md-6 product-entry">
                <div class="categories" style="color: white">Team Flash</div>
                <h3 class="item-title" style="color: white">SHOP</h3>
                <div class="btn-wrap">
                  <a href="shop.php" class="d-flex align-items-center" style="color: white">Xem tất cả<i class="icon icon-arrow-io"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="collection-item bottom-item">
              <div class="products-thumb">
                <img src="admin/template/assets/images/tintuc_flash.jpg" alt="collection item" class="small-image image-rounded">
              </div>
              <div class="col-md-6 product-entry">
                <div class="categories" style="color: black">Team Flash</div>
                <h3 class="item-title" style="color: black">Tin Nổi Bật</h3>
                <div class="btn-wrap">
                  <a href="tintuc.php" class="d-flex align-items-center" style="color: black">Xem tất cả<i class="icon icon-arrow-io"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="shoppify-section-banner">
      <div class="container">
        <div class="product-collection">
          <div class="left-content collection-item">
            <div class="products-thumb">
              <img src="admin/template/assets/images/bgFlash.jpg" style="background-size: contain;" alt="collection item" class="large-image image-rounded">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 product-entry">
              <div class="categories"></div>
              
              <div class="btn-wrap">
                <a href="shop.php" class="d-flex align-items-center" style="color: white">Xem<i class="icon icon-arrow-io"></i>
                </a>
              </div>
            </div>
          </div>
        </div>        
      </div>
    </section>


    <section id="selling-products" class="product-store bg-dark-grey padding-large" style="background-color: black;">
      <div class="container">
        
  
        <div class="section-header d-flex flex-wrap align-items-center justify-content-between">
          <h2 class="section-title" style="color: white;">Sản Phẩm Nổi Bật</h2>
          <div class="btn-wrap align-right">
            <a href="shop.php" class="d-flex align-items-center" style="color: white;">Xem tất cả<i class="icon icon icon-arrow-io"></i>
            </a>
          </div>
        </div>
        
        <div class="tab-content">
          <div id="all" data-tab-content class="active">
            <div class="row">

            
            <?php
                $sp = "SELECT*FROM sanpham LIMIT 0,4";
                $kq = mysqli_query($conn, $sp);
                while($rowsp =  mysqli_fetch_array($kq)){
                  ?>
                  <div class="col-3">
                    <div class="product-item col-lg-3 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="admin/template/assets/images/<?php echo $rowsp['hinhanh']?>" alt="Books" class="product-image">
                      </div>
                    <div class="cart-concern">
                      <div class="cart-button d-flex justify-content-between align-items-center">
                        <a href="xulycart.php?idsp=<?php echo $rowsp['id'] ?>"><button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button></a>
                        <a href=""> <button type="button" class="view-btn tooltip
                          d-flex">
                        <i class="icon icon-screen-full"></i>
                        <span class="tooltip-text">Quick view</span>
                        </button></a>
                        <button type="button" class="wishlist-btn">
                        <i class="icon icon-heart"></i>
                        </button>
                      </div>
                    </div>
                    <div class="product-detail">
                    <div>
                    <a href="#" class="blog-categories" style="font-size: 10px;display: flex;align-items: center;justify-content: center;">Team Flash</a>
                    </div>
                      <h3 class="product-title">
                       <a href="single-product.html" style="color: white; text-align: center; display: flex;align-items: center;justify-content: center;"><?php echo $rowsp['tensp'] ?></a>
                      </h3>
                    <div class="item-price text-primary" style="display: flex;align-items: center;justify-content: center;"><?php echo number_format($rowsp['gia'],0,',','.').'vnđ'; ?></div>
                    </div>
                    </div>
              
                  </div>
            <?php
                }
            ?>
           
          </div>
          </div>
        </div>
      </div>
    </section>

   

    
 
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