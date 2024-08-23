
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="MediaCenter, Template, eCommerce">
<meta name="robots" content="all">
<title></title>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link rel="stylesheet" href="..\..\assets\css\custom.scss">

<!-- tìm kiếm select -->



<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="..\..\assets\css\bootstrap.min.css">

<!-- Customizable CSS -->
<link rel="stylesheet" href="..\..\assets\css\main.css">
<link rel="stylesheet" href="..\..\assets\css\blue.css">
<link rel="stylesheet" href="..\..\assets\css\owl.carousel.css">
<link rel="stylesheet" href="..\..\assets\css\owl.transitions.css">
<link rel="stylesheet" href="..\..\assets\css\animate.min.css">
<link rel="stylesheet" href="..\..\assets\css\rateit.css">
<link rel="stylesheet" href="..\..\assets\css\bootstrap-select.min.css">
<link href="..\..\assets\css\lightbox.css" rel="stylesheet">

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="..\..\assets\css\font-awesome.css">

<!-- Fonts -->
<!-- thông báo -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<?php
	    $user = null;
        if (isset($_SESSION['user'])) {
			$user = $_SESSION['user'];
      $urls =lay_dm_user($user['roles']);
		}

     ?>
<body class="cnt-home">
<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1"> 
  
  <!-- ============================================== TOP MENU ============================================== -->
  <div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				<ul class="list-unstyled">
					<li><a href="#"><i class="icon fa fa-user"></i>My Account</a></li>
					<li><a href="#"><i class="icon fa fa-heart"></i>Wishlist</a></li>
					<li><a <?php if($user!=null) { ?> href="..\cart" <?php }else{?> href="../login"  <?php } ?> ><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
					<li><a id="register" href="./register"><i class="icon fa fa-user-plus"></i>Register</a></li>
					<li><a href="../login"><i class="icon fa fa-lock"></i>Login</a></li>
				</ul>
			</div><!-- /.cnt-account -->

			<div class="cnt-block">
				<ul class="list-unstyled list-inline">

				</ul><!-- /.list-unstyled -->
			</div><!-- /.cnt-cart -->
			<div class="clearfix"></div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->
  <!-- ============================================== TOP MENU : END ============================================== -->
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder"> 
          <!-- ============================================================= LOGO ============================================================= -->
          <div class="logo"> <a href="../"> <img src="..\..\assets\images\logo.png" alt="logo"> </a> </div>
          <!-- /.logo --> 
          <!-- ============================================================= LOGO : END ============================================================= --> </div>
        <!-- /.logo-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder"> 
          <!-- /.contact-row --> 
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <div class="search-area">
    <form>
        <div class="control-group">

            <ul class="categories-filter animate-dropdown">
                <li class="dropdown">

                </li>
            </ul>

            <input class="search-field" placeholder="Search here..."  >

            <a class="search-button" href="#"></a>    

        </div>
    </form>
</div><!-- /.search-area -->
          <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>
        <!-- /.top-search-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row"> 
          <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
          <div class="dropdown dropdown-cart">
		<a href="../cart" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
			<div class="items-cart-inner">
            <div class="basket">
					<i class="glyphicon glyphicon-shopping-cart"></i>
				</div>
				<div class="basket-item-count"><span class="count"><?php echo $cart_sl ?></span></div>
				<div class="total-price-basket">
					
				</div>
				
			
		    </div>
		</a>
	
	</div><!-- /.dropdown-cart --> 
          
          <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= --> </div>
        <!-- /.top-cart-row --> 
      </div>
      <!-- /.row --> 
     
      
    </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.main-header --> 
  
  <!-- ============================================== NAVBAR ============================================== -->
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
       <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
       <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav">
             
              </ul>
              <!-- /.navbar-nav -->
              <?php
            $a = null ;

            if (isset($_SESSION['a'])) {
               $a = $_SESSION['a'];
               
            } 
      
      ?>
      <?php if($a!=null){?>
       <div id="alert" class="" style="line-height: 28px; position: fixed; top: 30px;
        right: 20px;" >
                    <div class="toastnew <?php echo $a['type']?>">
                <i class="<?php echo $a['icon']?>"></i>
                <div class="content">
                    <div class="title"><?php echo $a['title']?></div>
                    <span><?php echo $a['text']?></span>
                </div>
                <i class="fa-solid fa-xmark" onclick="(this.parentElement).remove()"></i>
            </div>
                </div>
        <?php } ?>
              <div class="clearfix"></div>
           
            </div>
            <!-- /.nav-outer --> 
          </div>
          <!-- /.navbar-collapse --> 
          
        </div>
        <!-- /.nav-bg-class --> 
      </div>
      <!-- /.navbar-default --> 
    </div>
    <!-- /.container-class --> 
    
  </div>
  <!-- /.header-nav --> 
  <!-- ============================================== NAVBAR : END ============================================== --> 
  
</header>

<div class="container BtZOqO">
    <div class="epUsgf">
        <div class="u6SDuY">
            <a class="w37kB7" href="/user/account/profile" previewlistener="true">
                <div class="shop-avatar">
                    <div class="shop-avatar__placeholder">
                        <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shop-svg-icon icon-headshot">
                            <g>
                                <circle cx="7.5" cy="4.5" fill="none" r="3.8" stroke-miterlimit="10"></circle>
                                <path d="m1.5 14.2c0-3.3 2.7-6 6-6s6 2.7 6 6" fill="none" stroke-linecap="round" stroke-miterlimit="10"></path>
                            </g>
                        </svg>
                    </div>
                    <img class="shop-avatar__img" src="https://down-vn.img.susercontent.com/file/5fb64c8c18f72070f47dda0f9004917e_tn">
                </div>
            </a>
            <div class="vDMlrj">
                <div class="HtUK6o">hiephi1234</div>
                <div>
                    <a class="Kytn1s" href="/user/account/profile" previewlistener="true">
                        <svg width="12" height="12" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg" style="margin-right: 4px;">
                            <path d="M8.54 0L6.987 1.56l3.46 3.48L12 3.48M0 8.52l.073 3.428L3.46 12l6.21-6.18-3.46-3.48" fill="#9B9B9B" fill-rule="evenodd"></path>
                        </svg>Sửa hồ sơ
                    </a>
                </div>
            </div>
        </div>
        <div class="WDmP96">
            <div class="stardust-dropdown stardust-dropdown--open">
                <div class="stardust-dropdown__item-header">
                    <a class="jHbobZ" href="/user/account/profile" previewlistener="true">
                        <div class="U7dHrp">
                            <img src="https://down-vn.img.susercontent.com/file/ba61750a46794d8847c3f463c5e71cc4">
                        </div>
                        <div class="mY8KSl">
                            <span class="fnmbfn">Tài khoản của tôi</span>
                        </div>
                    </a>
                </div>
                <div class="stardust-dropdown__item-body stardust-dropdown__item-body--open">
                    <div class="hGOWVP">
                        <a class="HVZpoT" href="/user/account/profile" previewlistener="true">
                            <span class="PcLlJr">Hồ sơ</span>
                        </a>
                        <a class="HVZpoT" href="/user/account/payment" previewlistener="true">
                            <span class="PcLlJr">Ngân hàng</span>
                        </a>
                        <a class="HVZpoT" href="/user/account/address" previewlistener="true">
                            <span class="PcLlJr">Địa chỉ</span>
                        </a>
                        <a class="HVZpoT" href="/user/account/password" previewlistener="true">
                            <span class="PcLlJr">Đổi mật khẩu</span>
                        </a>
                        <a class="HVZpoT" href="/user/setting/notification/" previewlistener="true">
                            <span class="PcLlJr">Cài đặt thông báo</span>
                        </a>
                        <a class="HVZpoT VfX643" href="/user/setting/privacy" previewlistener="true">
                            <span class="PcLlJr">Những thiết lập riêng tư</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="stardust-dropdown">
                <div class="stardust-dropdown__item-header">
                    <a class="jHbobZ" href="/user/purchase" previewlistener="true">
                        <div class="U7dHrp">
                            <img src="https://down-vn.img.susercontent.com/file/f0049e9df4e536bc3e7f140d071e9078">
                        </div>
                        <div class="mY8KSl">
                            <span class="fnmbfn">Đơn Mua</span>
                        </div>
                    </a>
                </div>
                <div class="stardust-dropdown__item-body">
                    <div class="hGOWVP"></div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="fkIi86">
      <div class="QWyLHK">
        <div class="ivev7h">
          <div class="d4sH04 tQvnyz">
            <img width="invalid-value" height="invalid-value" class="tQvnyz XHFeME" style="object-fit: contain" src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/4e653cf704e352fd.png">
          </div>
          <p>Chưa có cập nhật đơn hàng</p>
        </div>
      </div>
    </div>
</div>

<footer id="footer" class="footer color-bg">
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="module-heading">
            <h4 class="module-title">Contact Us</h4>
          </div>
          <!-- /.module-heading -->
          
          <div class="module-body">
            <ul class="toggle-footer" style="">
              <li class="media">
                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i> </span> </div>
                <div class="media-body">
                  <p>128 A Đ.Hồ Tùng Mậu,Mai Dịch,Cầu Giấy,Hà Nội VN</p>
                </div>
              </li>
              <li class="media">
                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-mobile fa-stack-1x fa-inverse"></i> </span> </div>
                <div class="media-body">
                  <p>+(84) 992648378</p>
                </div>
              </li>
              <li class="media">
                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-envelope fa-stack-1x fa-inverse"></i> </span> </div>
                <div class="media-body"> <span><a href="#">flipmart@themesground.com</a></span> </div>
              </li>
            </ul>
          </div>
          <!-- /.module-body --> 
        </div>
        <!-- /.col -->
        
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="module-heading">
            <h4 class="module-title">Customer Service</h4>
          </div>
          <!-- /.module-heading -->
          
          <div class="module-body">
            <ul class='list-unstyled'>
              <li class="first"><a href="#" title="Contact us">My Account</a></li>
              <li><a href="#" title="About us">Order History</a></li>
              <li><a href="#" title="faq">FAQ</a></li>
              <li><a href="#" title="Popular Searches">Specials</a></li>
              <li class="last"><a href="#" title="Where is my order?">Help Center</a></li>
            </ul>
          </div>
          <!-- /.module-body --> 
        </div>
        <!-- /.col -->
        
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="module-heading">
            <h4 class="module-title">Corporation</h4>
          </div>
          <!-- /.module-heading -->
          
          <div class="module-body">
            <ul class='list-unstyled'>
              <li class="first"><a title="Your Account" href="#">About us</a></li>
              <li><a title="Information" href="#">Customer Service</a></li>
              <li><a title="Addresses" href="#">Company</a></li>
              <li><a title="Addresses" href="#">Investor Relations</a></li>
              <li class="last"><a title="Orders History" href="#">Advanced Search</a></li>
            </ul>
          </div>
          <!-- /.module-body --> 
        </div>
        <!-- /.col -->
        
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="module-heading">
            <h4 class="module-title">Why Choose Us</h4>
          </div>
          <!-- /.module-heading -->
          
          <div class="module-body">
            <ul class='list-unstyled'>
              <li class="first"><a href="#" title="About us">Shopping Guide</a></li>
              <li><a href="#" title="Blog">Blog</a></li>
              <li><a href="#" title="Company">Company</a></li>
              <li><a href="#" title="Investor Relations">Investor Relations</a></li>
              <li class=" last"><a href="contact-us.html" title="Suppliers">Contact Us</a></li>
            </ul>
          </div>
          <!-- /.module-body --> 
        </div>
      </div>
    </div>
  </div>
  <div class="copyright-bar">
    <div class="container">
      <div class="col-xs-12 col-sm-6 no-padding social">
        <ul class="link">
          <li class="fb pull-left"><a target="_blank" rel="nofollow" href="#" title="Facebook"></a></li>
          <li class="tw pull-left"><a target="_blank" rel="nofollow" href="#" title="Twitter"></a></li>
          <li class="googleplus pull-left"><a target="_blank" rel="nofollow" href="#" title="GooglePlus"></a></li>
          <li class="rss pull-left"><a target="_blank" rel="nofollow" href="#" title="RSS"></a></li>
          <li class="pintrest pull-left"><a target="_blank" rel="nofollow" href="#" title="PInterest"></a></li>
          <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="#" title="Linkedin"></a></li>
          <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="#" title="Youtube"></a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-6 no-padding">
        <div class="clearfix payment-methods">
          <ul>
            <li><img src="..\..\assets\images\payments\1.png" alt=""></li>
            <li><img src="..\..\assets\images\payments\2.png" alt=""></li>
            <li><img src="..\..\assets\images\payments\3.png" alt=""></li>
            <li><img src="..\..\assets\images\payments\4.png" alt=""></li>
            <li><img src="..\..\assets\images\payments\5.png" alt=""></li>
          </ul>
        </div>
        <!-- /.payment-methods --> 
      </div>
    </div>
  </div>
</footer>
<script>
// giới hạn thời gian tồn tại cho thông báo
     setTimeout(function() {
    var div = document.getElementById("alert");
    if (div) {
        div.parentNode.removeChild(div); // Xóa phần tử div khỏi DOM
        <?php unset($_SESSION['a']); ?>
    }
}, 5000);  
       

</script>
<!-- ============================================================= FOOTER : END============================================================= --> 

<!-- For demo purposes – can be removed on production --> 

<!-- For demo purposes – can be removed on production : End --> 

<!-- JavaScripts placed at the end of the document so the pages load faster --> 
<script src="..\..\assets\js\jquery-1.11.1.min.js"></script> 
<script src="..\..\assets\js\bootstrap.min.js"></script> 
<script src="..\..\assets\js\bootstrap-hover-dropdown.min.js"></script> 
<script src="..\..\assets\js\owl.carousel.min.js"></script> 
<script src="..\..\assets\js\echo.min.js"></script> 
<script src="..\..\assets\js\jquery.easing-1.3.min.js"></script> 
<script src="..\..\assets\js\bootstrap-slider.min.js"></script> 
<script src="..\..\assets\js\jquery.rateit.min.js"></script> 
<script type="text/javascript" src="..\..\assets\js\lightbox.min.js"></script> 
<script src="..\..\assets\js\bootstrap-select.min.js"></script> 
<script src="..\..\assets\js\wow.min.js"></script> 
<script src="..\..\assets\js\scripts.js"></script>
<script src="..\..\assets\js\navigation.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>
</body>
</html>