
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
					<li><div class="stardust-popover" id="stardust-popover1" tabindex="0">
              <div role="button" class="user">
                <i class="icon fa fa-user"></i> My Account
              </div>
              <div aria-describedby="stardust-popover1" role="tooltip" aria-hidden="false" class="stardust-popover__popover stardust-popover__popover--show stardust-popover__popover--border" style="top: 22px; right: 0px; transform-origin: 104.242px top;">
                <div class="stardust-popover__arrow" style="top: 1px; left: 104.242px; transform: translate(-7px, -100%); border-bottom: 10px solid rgba(0, 0, 0, 0.09); border-left: 0px solid transparent; border-right: 0px solid transparent;">
                  <div class="stardust-popover__arrow--inner" style="border-bottom: 10px solid rgb(255, 255, 255); border-left: 14px solid transparent; border-right: 14px solid transparent; bottom: -10px;"></div>
                </div>
                <div class="navbar-account-drawer__content">
                  <a class="navbar-account-drawer__button navbar-user-link black" href="../account" previewlistener="true">
                    <span >Tài khoản của tôi</span>
                  </a>
                  <a class="navbar-account-drawer__button navbar-user-link black" href="./" previewlistener="true">
                    <span >Đơn Mua</span>
                  </a>
                  <button class="navbar-account-drawer__button navbar-account-drawer__button--complement navbar-user-link reset-button-style" tabindex="0">
                    <span>Đăng xuất</span>
                  </button>
                </div>
              </div>
            </div>
          </li>
					<li><a href="../../wishlist"><i class="icon fa fa-heart"></i>Wishlist</a></li>
					<li><a  href="../../cart"  ><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
					<li><a id="register" href="../../register"><i class="icon fa fa-user-plus"></i>Register</a></li>
					<li><a href="../../login"><i class="icon fa fa-lock"></i>Login</a></li>
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
          <div class="logo"> <a href="../../"> <img src="..\..\assets\images\logo.png" alt="logo"> </a> </div>
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
		<a href="../../cart" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
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
                    <!-- <img class="shop-avatar__img" src="https://down-vn.img.susercontent.com/file/5fb64c8c18f72070f47dda0f9004917e_tn"> -->
                </div>
            </a>
            <div class="vDMlrj">
                <div class="HtUK6o"><?php echo $ten_tk; ?></div>
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
                        <a class="HVZpoT" href="../../user/account/profile" previewlistener="true">
                            <span class="PcLlJr">Hồ sơ</span>
                        </a>
                       
                        <a class="HVZpoT" href="../../user/account/address" previewlistener="true">
                            <span class="PcLlJr">Địa chỉ</span>
                        </a>
                        <a class="HVZpoT" href="../../user/account/password" previewlistener="true">
                            <span class="PcLlJr">Đổi mật khẩu</span>
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
      <div style="display: contents;">
        <title></title>
  
        <div class="ashFMQ">
          <main class="gZSLwa">
            <section>
            </section>
            <section>
        
        <div class="yHE9Y5"><button class="yMANId"><svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0" class="shop-svg-icon icon-arrow-left">
              <g>
                <path d="m8.5 11c-.1 0-.2 0-.3-.1l-6-5c-.1-.1-.2-.3-.2-.4s.1-.3.2-.4l6-5c .2-.2.5-.1.7.1s.1.5-.1.7l-5.5 4.6 5.5 4.6c.2.2.2.5.1.7-.1.1-.3.2-.4.2z"></path>
              </g>
            </svg><span>TRỞ LẠI</span></button>
          <div class="a_0nqh"><span tabindex="0">MÃ ĐƠN HÀNG. <?php echo $dh['ma_dh']; ?></span><span class="ewYlfp">|</span><span class="f4gWe1" aria-role="region" aria-live="polite" tabindex="0">Đơn hàng đã hoàn thành</span></div>
        </div>
      </section>
      <section>
        
      </section>
      <section>
        
      </section>
      <section>
      <!-- stepper__step--pending -->
      <!-- stepper__step-icon--pending -->
        <div class="peteXU">
          <div class="IVFywZ HmaSt0"> </div>
          <div class="IVFywZ fT_AQM"> </div>
        </div>
        <div class="RgsTlq">
          <div class="stepper">
            <div class="stepper__step " aria-label="" tabindex="0">
              <div class="stepper__step-icon "><svg enable-background="new 0 0 32 32" viewBox="0 0 32 32" x="0" y="0" class="shop-svg-icon icon-order-order">
                  <g>
                    <path d="m5 3.4v23.7c0 .4.3.7.7.7.2 0 .3 0 .3-.2.5-.4 1-.5 1.7-.5.9 0 1.7.4 2.2 1.1.2.2.3.4.5.4s.3-.2.5-.4c.5-.7 1.4-1.1 2.2-1.1s1.7.4 2.2 1.1c.2.2.3.4.5.4s.3-.2.5-.4c.5-.7 1.4-1.1 2.2-1.1.9 0 1.7.4 2.2 1.1.2.2.3.4.5.4s.3-.2.5-.4c.5-.7 1.4-1.1 2.2-1.1.7 0 1.2.2 1.7.5.2.2.3.2.3.2.3 0 .7-.4.7-.7v-23.7z" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"></path>
                    <g>
                      <line fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3" x1="10" x2="22" y1="11.5" y2="11.5"></line>
                      <line fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3" x1="10" x2="22" y1="18.5" y2="18.5"></line>
                    </g>
                  </g>
                </svg></div>
              <div class="stepper__step-text">Đơn hàng</div>
              <div class="stepper__step-date"></div>
            </div>
            <div class="stepper__step " aria-label="" tabindex="0">
              <div class="stepper__step-icon "><svg enable-background="new 0 0 32 32" viewBox="0 0 32 32" x="0" y="0" class="shop-svg-icon icon-order-paid">
                  <g>
                    <path clip-rule="evenodd" d="m24 22h-21c-.5 0-1-.5-1-1v-15c0-.6.5-1 1-1h21c .5 0 1 .4 1 1v15c0 .5-.5 1-1 1z" fill="none" fill-rule="evenodd" stroke-miterlimit="10" stroke-width="3"></path>
                    <path clip-rule="evenodd" d="m24.8 10h4.2c.5 0 1 .4 1 1v15c0 .5-.5 1-1 1h-21c-.6 0-1-.4-1-1v-4" fill="none" fill-rule="evenodd" stroke-miterlimit="10" stroke-width="3"></path>
                    <path d="m12.9 17.2c-.7-.1-1.5-.4-2.1-.9l.8-1.2c.6.5 1.1.7 1.7.7.7 0 1-.3 1-.8 0-1.2-3.2-1.2-3.2-3.4 0-1.2.7-2 1.8-2.2v-1.3h1.2v1.2c.8.1 1.3.5 1.8 1l-.9 1c-.4-.4-.8-.6-1.3-.6-.6 0-.9.2-.9.8 0 1.1 3.2 1 3.2 3.3 0 1.2-.6 2-1.9 2.3v1.2h-1.2z" stroke="none"></path>
                  </g>
                </svg></div>
              <div class="stepper__step-text">Thông tin thanh toán</div>
              <div class="stepper__step-date"></div>
            </div>
            <div class="stepper__step " aria-label="" tabindex="0">
              <div class="stepper__step-icon "><svg enable-background="new 0 0 32 32" viewBox="0 0 32 32" x="0" y="0" class="shop-svg-icon icon-order-shipping">
                  <g>
                    <line fill="none" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" x1="18.1" x2="9.6" y1="20.5" y2="20.5"></line>
                    <circle cx="7.5" cy="23.5" fill="none" r="4" stroke-miterlimit="10" stroke-width="3"></circle>
                    <circle cx="20.5" cy="23.5" fill="none" r="4" stroke-miterlimit="10" stroke-width="3"></circle>
                    <line fill="none" stroke-miterlimit="10" stroke-width="3" x1="19.7" x2="30" y1="15.5" y2="15.5"></line>
                    <polyline fill="none" points="4.6 20.5 1.5 20.5 1.5 4.5 20.5 4.5 20.5 18.4" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"></polyline>
                    <polyline fill="none" points="20.5 9 29.5 9 30.5 22 24.7 22" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"></polyline>
                  </g>
                </svg></div>
              <div class="stepper__step-text">Vận chuyển</div>
              <div class="stepper__step-date"></div>
            </div>
            <div class="stepper__step " aria-label="" tabindex="0">
              <div class="stepper__step-icon "><svg enable-background="new 0 0 32 32" viewBox="0 0 32 32" x="0" y="0" class="shop-svg-icon icon-order-received">
                  <g>
                    <polygon fill="none" points="2 28 2 19.2 10.6 19.2 11.7 21.5 19.8 21.5 20.9 19.2 30 19.1 30 28" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"></polygon>
                    <polyline fill="none" points="21 8 27 8 30 19.1" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"></polyline>
                    <polyline fill="none" points="2 19.2 5 8 11 8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"></polyline>
                    <line fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" x1="16" x2="16" y1="4" y2="14"></line>
                    <path d="m20.1 13.4-3.6 3.6c-.3.3-.7.3-.9 0l-3.6-3.6c-.4-.4-.1-1.1.5-1.1h7.2c.5 0 .8.7.4 1.1z" stroke="none"></path>
                  </g>
                </svg></div>
              <div class="stepper__step-text">Chờ giao hàng</div>
              <div class="stepper__step-date"></div>
            </div>
            <div class="stepper__step " aria-label="" tabindex="0">
              <div class="stepper__step-icon "><svg enable-background="new 0 0 32 32" viewBox="0 0 32 32" x="0" y="0" class="shop-svg-icon icon-order-rating">
                  <polygon fill="none" points="16 3.2 20.2 11.9 29.5 13 22.2 19 24.3 28.8 16 23.8 7.7 28.8 9.8 19 2.5 13 11.8 11.9" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"></polygon>
                </svg></div>
              <div class="stepper__step-text">Đánh giá</div>
              <div class="stepper__step-date"></div>
            </div>
            <div class="stepper__line">
              <div class="stepper__line-background" style="background: rgb(224, 224, 224);"></div>
              <div class="stepper__line-foreground" style="width: calc(0% - 140px); background: rgb(45, 194, 88);"></div>
            </div>
          </div>
        </div>
      </section>
      <section>
        
        <div class="peteXU">
          <div class="IVFywZ HmaSt0"> </div>
          <div class="IVFywZ fT_AQM"> </div>
        </div>
        <div>
          <div class="TCV5k7">
            <div class="CwM4QF" tabindex="0"><span>Cảm ơn bạn đã mua sắm tại !</span><br></div>
            <div class="m4BV8O">
              <div><button class="stardust-button stardust-button--primary QY7kZh">Mua lại</button></div>
            </div>
          </div>
        </div>
      </section>
      <section>
        
        <div class="peteXU">
          <div class="IVFywZ HmaSt0"> </div>
          <div class="IVFywZ fT_AQM"> </div>
        </div>
        <div>
          <div class="TCV5k7">
            <div class="CwM4QF"></div>
            <div class="m4BV8O">
              <div><button class="stardust-button stardust-button--secondary QY7kZh">Liên hệ Người bán</button></div>
            </div>
          </div>
          <div class="TCV5k7">
            <div class="CwM4QF"></div>
            <div class="m4BV8O">
              <div><button class="stardust-button stardust-button--secondary QY7kZh">Xem đánh giá Shop</button></div>
            </div>
          </div>
        </div>
      </section>
      <section>
        
      </section>
      <section>
       
      </section>
      <section>
        
        <div>
          <div class="TWLNg9">
            <div class="qJkRlY"></div>
          </div>
          <div class="As_i5J">
            <div class="sZoQ_a">
              <div class="S2fAjM" tabindex="0">Địa chỉ nhận hàng</div>
            </div>
            <div class="PC1hTf">
              <div class="jXhS5s">
                <div class="BWtzco" tabindex="0"><?php echo $addres['Names']; ?></div>
                <div class="rRE7pF"><span tabindex="0"><?php echo $addres['sdt']; ?></span><br><span tabindex="0"><?php echo $addres['addres']; ?></span></div>
              </div>
              <div class="vI5S3N">
                <div>
                  <div class="J5ACWV I7tulI">
                    <div class="SFVZ1q"></div>
                    <div class="qhDYac">
                      <div class="OFUToM"><img class="ZreXno" title="image" alt="Đã giao" src="https://cf.shopee.vn/file/delivered_parcel_active_3x"></div>
                      <div class="e73NiD">11:45 24-01-2024</div>
                      <div class="LKrsme">
                        <p class="bVaMks">Đã giao</p>
                        <p>Đơn hàng đã được giao thành công
                        <div><span>Người nhận hàng: Ng Hiệp--. </span><span class="E9Qz0x" tabindex="0">Xem hình ảnh giao hàng.</span></div>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="J5ACWV">
                    <div class="SFVZ1q"></div>
                    <div class="qhDYac">
                      <div class="OFUToM"><img class="ZreXno" title="image" alt="Đang giao hàng" src="https://cf.shopee.vn/file/domestic_transit_3x"></div>
                      <div class="e73NiD">09:21 24-01-2024</div>
                      <div class="LKrsme">
                        <p class="bVaMks">Đang giao hàng</p>
                        <p>Đơn hàng đang trên đường giao đến bạn
                        <div></div>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="J5ACWV">
                    <div class="SFVZ1q"></div>
                      <div class="qhDYac">
                        <div class="OFUToM"><img class="ZreXno" title="image" alt="Đang được chuẩn bị" src="https://cf.shopee.vn/file/preparing_to_ship_3x"></div>
                        <div class="e73NiD">11:41 22-01-2024</div>
                        <div class="LKrsme">
                          <p class="bVaMks">Đang được chuẩn bị</p>
                          <p>Người bán đang chuẩn bị hàng
                            <div></div>
                          </p>
                        </div>
                    </div>
                  </div>
                  <div class="J5ACWV">
                    <div class="SFVZ1q"></div>
                    <div class="qhDYac">
                      <div class="OFUToM"><img class="ZreXno" title="image" alt="Đặt hàng thành công" src="https://cf.shopee.vn/file/order_placed_3x"></div>
                      <div class="e73NiD">23:57 21-01-2024</div>
                      <div class="LKrsme">
                        <p class="bVaMks">Đặt hàng thành công</p>
                        <p>Đơn hàng đã được đặt
                          <div></div>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        
      </section>
      <section>
      
      </section>
      <section>
      
        <div>
          <section>
        
            <div class="qj8u7l">
              <div class="P2JMvg">
                <div class="RBPP9y">
                  <div>
                    <div class="Es_V3Q xzDLS0"><svg viewBox="0 0 24 11">
                        <title>Mall</title>
                        <g fill="#fff" fill-rule="evenodd">
                          <path d="M19.615 7.143V1.805a.805.805 0 0 0-1.611 0v5.377H18c0 1.438.634 2.36 1.902 2.77V9.95c.09.032.19.05.293.05.444 0 .805-.334.805-.746a.748.748 0 0 0-.498-.69v-.002c-.59-.22-.885-.694-.885-1.42h-.002zm3 0V1.805a.805.805 0 0 0-1.611 0v5.377H21c0 1.438.634 2.36 1.902 2.77V9.95c.09.032.19.05.293.05.444 0 .805-.334.805-.746a.748.748 0 0 0-.498-.69v-.002c-.59-.22-.885-.694-.885-1.42h-.002zm-7.491-2.985c.01-.366.37-.726.813-.726.45 0 .814.37.814.742v5.058c0 .37-.364.73-.813.73-.395 0-.725-.278-.798-.598a3.166 3.166 0 0 1-1.964.68c-1.77 0-3.268-1.456-3.268-3.254 0-1.797 1.497-3.328 3.268-3.328a3.1 3.1 0 0 1 1.948.696zm-.146 2.594a1.8 1.8 0 1 0-3.6 0 1.8 1.8 0 1 0 3.6 0z"></path>
                          <path d="M.078 1.563A.733.733 0 0 1 .565.89c.423-.15.832.16 1.008.52.512 1.056 1.57 1.88 2.99 1.9s2.158-.85 2.71-1.882c.19-.356.626-.74 1.13-.537.342.138.477.4.472.65a.68.68 0 0 1 .004.08v7.63a.75.75 0 0 1-1.5 0V3.67c-.763.72-1.677 1.18-2.842 1.16a4.856 4.856 0 0 1-2.965-1.096V9.25a.75.75 0 0 1-1.5 0V1.648c0-.03.002-.057.005-.085z" fill-rule="nonzero"></path>
                        </g>
                      </svg></div>
                  </div>
                  <div class="UDaMW3" tabindex="0"> <?php echo $ten_ncc; ?></div>
                  <!-- <div class="B2SOGC">
                    <button class="stardust-button stardust-button--primary"><svg viewBox="0 0 17 17" class="shopee-svg-icon icon-btn-chat" style="fill: white;">
                        <g fill-rule="evenodd">
                          <path d="M13.89 0C14.504 0 15 .512 15 1.144l-.003.088-.159 2.117.162.001c.79 0 1.46.558 1.618 1.346l.024.15.008.154v9.932a1.15 1.15 0 01-1.779.963l-.107-.08-1.882-1.567-7.962.002a1.653 1.653 0 01-1.587-1.21l-.036-.148-.021-.155-.071-.836h-.01L.91 13.868a.547.547 0 01-.26.124L.556 14a.56.56 0 01-.546-.47L0 13.429V1.144C0 .512.497 0 1.11 0h12.78zM15 4.65l-.259-.001-.461 6.197c-.045.596-.527 1.057-1.106 1.057L4.509 11.9l.058.69.01.08a.35.35 0 00.273.272l.07.007 8.434-.001 1.995 1.662.002-9.574-.003-.079a.35.35 0 00-.274-.3L15 4.65zM13.688 1.3H1.3v10.516l1.413-1.214h10.281l.694-9.302zM4.234 5.234a.8.8 0 011.042-.077l.187.164c.141.111.327.208.552.286.382.131.795.193 1.185.193s.803-.062 1.185-.193c.225-.078.41-.175.552-.286l.187-.164a.8.8 0 011.042 1.209c-.33.33-.753.579-1.26.753A5.211 5.211 0 017.2 7.4a5.211 5.211 0 01-1.706-.28c-.507-.175-.93-.424-1.26-.754a.8.8 0 010-1.132z" fill-rule="nonzero"></path>
                        </g>
                      </svg><span>chat</span></button></div> -->
                    <a class="Mr26O7" href="/aptunisex?entryPoint=OrderDetail" previewlistener="true">
                    <div class="stardust-button"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon icon-btn-shop">
                        <path d="m15 4.8c-.1-1-.8-2-1.6-2.9-.4-.3-.7-.5-1-.8-.1-.1-.7-.5-.7-.5h-8.5s-1.4 1.4-1.6 1.6c-.4.4-.8 1-1.1 1.4-.1.4-.4.8-.4 1.1-.3 1.4 0 2.3.6 3.3l.3.3v3.5c0 1.5 1.1 2.6 2.6 2.6h8c1.5 0 2.5-1.1 2.5-2.6v-3.7c.1-.1.1-.3.3-.3.4-.8.7-1.7.6-3zm-3 7c0 .4-.1.5-.4.5h-8c-.3 0-.5-.1-.5-.5v-3.1c.3 0 .5-.1.8-.4.1 0 .3-.1.3-.1.4.4 1 .7 1.5.7.7 0 1.2-.1 1.6-.5.5.3 1.1.4 1.6.4.7 0 1.2-.3 1.8-.7.1.1.3.3.5.4.3.1.5.3.8.3zm.5-5.2c0 .1-.4.7-.3.5l-.1.1c-.1 0-.3 0-.4-.1s-.3-.3-.5-.5l-.5-1.1-.5 1.1c-.4.4-.8.7-1.4.7-.5 0-.7 0-1-.5l-.6-1.1-.5 1.1c-.3.5-.6.6-1.1.6-.3 0-.6-.2-.9-.8l-.5-1-.7 1c-.1.3-.3.4-.4.6-.1 0-.3.1-.3.1s-.4-.4-.4-.5c-.4-.5-.5-.9-.4-1.5 0-.1.1-.4.3-.5.3-.5.4-.8.8-1.2.7-.8.8-1 1-1h7s .3.1.8.7c.5.5 1.1 1.2 1.1 1.8-.1.7-.2 1.2-.5 1.5z"></path>
                      </svg><span>Xem Shop</span></div>
                  </a>
                </div>
                <div class="jgIyoX">
                  <div class="stardust-popover n9Tl39" id="stardust-popover2" tabindex="0">
                    <div role="button" class="stardust-popover__target">
                      <div><svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path clip-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14z" stroke="#000" stroke-opacity=".54"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M8 6a1 1 0 100-2 1 1 0 000 2zM7.25 7.932v3.636c0 .377.336.682.75.682s.75-.305.75-.682V7.932c0-.377-.336-.682-.75-.682s-.75.305-.75.682z" fill="#000" fill-opacity=".54"></path>
                        </svg></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ElUDW8"></div>
              <div class="FNHV0p">
                <div>
                  <section><a class="mZ1OWk" aria-label="" href="/Quần-Jogger-Nỉ-Bông-Thu-Đông-APT-Unisex-Quần-Dài-Bo-Gấu-Chất-Liệu-Nỉ-Bông-Dày-Dặn-Ấm-Áp-Thu-Đông-2024-i.697931037.22855807673" previewlistener="true">
                      <div class="dJaa92">
                        <div class="images">
                          <img src="../../<?php echo $sp['Images']; ?>" class="gQuHsZ" alt="" tabindex="0">
                        </div>
                          <div class="nmdHRf">
                          <div>
                            <div class="zWrp4w"><span class="DWVWOJ" tabindex="0"><?php echo $sp['ten_sp']; ?></span></div>
                          </div>
                          <div>
                            <!-- <div class="rsautk" tabindex="0">Phân loại hàng: Be,L</div> -->
                            <div class="j3I_Nh" tabindex="0">x<?php echo $dh['sl']; ?></div>
                            <!-- <span class="IHpphz">7 ngày trả hàng</span> -->
                          </div>
                        </div>
                      </div>
                      <div class="ylYzwa" tabindex="0">
                        <div class="YRp1mm">
                          <!-- <span class="q6Gzj5">₫220.000</span> -->
                          <span class="nW_6Oi PNlXhK">$<?php echo $dh['gia']; ?></span>
                        </div>
                      </div>
                      <div class="w7VHRB">
                        <div class="qfsEhV">Đánh giá Shop</div>
                        <div class="gu3Sjq">
                          <div class="rating-stars__container">
                            <div class="rating-stars__star OtkdSc" style="width: 15px; height: 15px;"><svg viewBox="0 0 30 30" class="DpFJzd">
                                <defs>
                                  <linearGradient id="star__hollow" x1="50%" x2="50%" y1="0%" y2="99.0177926%">
                                    <stop offset="0%" stop-color="#FFD211"></stop>
                                    <stop offset="100%" stop-color="#FFAD27"></stop>
                                  </linearGradient>
                                </defs>
                                <path fill="none" fill-rule="evenodd" stroke="url(#star__hollow)" stroke-width="2" d="M23.226809 28.390899l-1.543364-9.5505903 6.600997-6.8291523-9.116272-1.4059447-4.01304-8.63019038-4.013041 8.63019038-9.116271 1.4059447 6.600997 6.8291523-1.543364 9.5505903 8.071679-4.5038874 8.071679 4.5038874z"></path>
                              </svg><svg viewBox="0 0 30 30" class="DpFJzd" style="width: 100%;">
                                <defs>
                                  <linearGradient id="star__solid" x1="50%" x2="50%" y1="0%" y2="100%">
                                    <stop offset="0%" stop-color="#FFCA11"></stop>
                                    <stop offset="100%" stop-color="#FFAD27"></stop>
                                  </linearGradient>
                                </defs>
                                <path fill="url(#star__solid)" fill-rule="evenodd" d="M14.9988798 25.032153l-8.522024 4.7551739c-.4785069.2670004-.7939037.0347448-.7072938-.5012115l1.6339124-10.1109185-6.8944622-7.1327607c-.3871203-.4005006-.2499178-.7947292.2865507-.8774654l9.5090982-1.46652789L14.5740199.51703028c.2346436-.50460972.6146928-.50543408.8497197 0l4.2693588 9.18141263 9.5090986 1.46652789c.545377.0841102.680337.4700675.28655.8774654l-6.894462 7.1327607 1.633912 10.1109185c.08788.5438118-.232337.7662309-.707293.5012115l-8.5220242-4.7551739z"></path>
                              </svg></div>
                            <div class="rating-stars__star OtkdSc" style="width: 15px; height: 15px;"><svg viewBox="0 0 30 30" class="DpFJzd">
                                <defs>
                                  <linearGradient id="star__hollow" x1="50%" x2="50%" y1="0%" y2="99.0177926%">
                                    <stop offset="0%" stop-color="#FFD211"></stop>
                                    <stop offset="100%" stop-color="#FFAD27"></stop>
                                  </linearGradient>
                                </defs>
                                <path fill="none" fill-rule="evenodd" stroke="url(#star__hollow)" stroke-width="2" d="M23.226809 28.390899l-1.543364-9.5505903 6.600997-6.8291523-9.116272-1.4059447-4.01304-8.63019038-4.013041 8.63019038-9.116271 1.4059447 6.600997 6.8291523-1.543364 9.5505903 8.071679-4.5038874 8.071679 4.5038874z"></path>
                              </svg><svg viewBox="0 0 30 30" class="DpFJzd" style="width: 100%;">
                                <defs>
                                  <linearGradient id="star__solid" x1="50%" x2="50%" y1="0%" y2="100%">
                                    <stop offset="0%" stop-color="#FFCA11"></stop>
                                    <stop offset="100%" stop-color="#FFAD27"></stop>
                                  </linearGradient>
                                </defs>
                                <path fill="url(#star__solid)" fill-rule="evenodd" d="M14.9988798 25.032153l-8.522024 4.7551739c-.4785069.2670004-.7939037.0347448-.7072938-.5012115l1.6339124-10.1109185-6.8944622-7.1327607c-.3871203-.4005006-.2499178-.7947292.2865507-.8774654l9.5090982-1.46652789L14.5740199.51703028c.2346436-.50460972.6146928-.50543408.8497197 0l4.2693588 9.18141263 9.5090986 1.46652789c.545377.0841102.680337.4700675.28655.8774654l-6.894462 7.1327607 1.633912 10.1109185c.08788.5438118-.232337.7662309-.707293.5012115l-8.5220242-4.7551739z"></path>
                              </svg></div>
                            <div class="rating-stars__star OtkdSc" style="width: 15px; height: 15px;"><svg viewBox="0 0 30 30" class="DpFJzd">
                                <defs>
                                  <linearGradient id="star__hollow" x1="50%" x2="50%" y1="0%" y2="99.0177926%">
                                    <stop offset="0%" stop-color="#FFD211"></stop>
                                    <stop offset="100%" stop-color="#FFAD27"></stop>
                                  </linearGradient>
                                </defs>
                                <path fill="none" fill-rule="evenodd" stroke="url(#star__hollow)" stroke-width="2" d="M23.226809 28.390899l-1.543364-9.5505903 6.600997-6.8291523-9.116272-1.4059447-4.01304-8.63019038-4.013041 8.63019038-9.116271 1.4059447 6.600997 6.8291523-1.543364 9.5505903 8.071679-4.5038874 8.071679 4.5038874z"></path>
                              </svg><svg viewBox="0 0 30 30" class="DpFJzd" style="width: 100%;">
                                <defs>
                                  <linearGradient id="star__solid" x1="50%" x2="50%" y1="0%" y2="100%">
                                    <stop offset="0%" stop-color="#FFCA11"></stop>
                                    <stop offset="100%" stop-color="#FFAD27"></stop>
                                  </linearGradient>
                                </defs>
                                <path fill="url(#star__solid)" fill-rule="evenodd" d="M14.9988798 25.032153l-8.522024 4.7551739c-.4785069.2670004-.7939037.0347448-.7072938-.5012115l1.6339124-10.1109185-6.8944622-7.1327607c-.3871203-.4005006-.2499178-.7947292.2865507-.8774654l9.5090982-1.46652789L14.5740199.51703028c.2346436-.50460972.6146928-.50543408.8497197 0l4.2693588 9.18141263 9.5090986 1.46652789c.545377.0841102.680337.4700675.28655.8774654l-6.894462 7.1327607 1.633912 10.1109185c.08788.5438118-.232337.7662309-.707293.5012115l-8.5220242-4.7551739z"></path>
                              </svg></div>
                            <div class="rating-stars__star OtkdSc" style="width: 15px; height: 15px;"><svg viewBox="0 0 30 30" class="DpFJzd">
                                <defs>
                                  <linearGradient id="star__hollow" x1="50%" x2="50%" y1="0%" y2="99.0177926%">
                                    <stop offset="0%" stop-color="#FFD211"></stop>
                                    <stop offset="100%" stop-color="#FFAD27"></stop>
                                  </linearGradient>
                                </defs>
                                <path fill="none" fill-rule="evenodd" stroke="url(#star__hollow)" stroke-width="2" d="M23.226809 28.390899l-1.543364-9.5505903 6.600997-6.8291523-9.116272-1.4059447-4.01304-8.63019038-4.013041 8.63019038-9.116271 1.4059447 6.600997 6.8291523-1.543364 9.5505903 8.071679-4.5038874 8.071679 4.5038874z"></path>
                              </svg><svg viewBox="0 0 30 30" class="DpFJzd" style="width: 100%;">
                                <defs>
                                  <linearGradient id="star__solid" x1="50%" x2="50%" y1="0%" y2="100%">
                                    <stop offset="0%" stop-color="#FFCA11"></stop>
                                    <stop offset="100%" stop-color="#FFAD27"></stop>
                                  </linearGradient>
                                </defs>
                                <path fill="url(#star__solid)" fill-rule="evenodd" d="M14.9988798 25.032153l-8.522024 4.7551739c-.4785069.2670004-.7939037.0347448-.7072938-.5012115l1.6339124-10.1109185-6.8944622-7.1327607c-.3871203-.4005006-.2499178-.7947292.2865507-.8774654l9.5090982-1.46652789L14.5740199.51703028c.2346436-.50460972.6146928-.50543408.8497197 0l4.2693588 9.18141263 9.5090986 1.46652789c.545377.0841102.680337.4700675.28655.8774654l-6.894462 7.1327607 1.633912 10.1109185c.08788.5438118-.232337.7662309-.707293.5012115l-8.5220242-4.7551739z"></path>
                              </svg></div>
                            <div class="rating-stars__star OtkdSc" style="width: 15px; height: 15px;"><svg viewBox="0 0 30 30" class="DpFJzd">
                                <defs>
                                  <linearGradient id="star__hollow" x1="50%" x2="50%" y1="0%" y2="99.0177926%">
                                    <stop offset="0%" stop-color="#FFD211"></stop>
                                    <stop offset="100%" stop-color="#FFAD27"></stop>
                                  </linearGradient>
                                </defs>
                                <path fill="none" fill-rule="evenodd" stroke="url(#star__hollow)" stroke-width="2" d="M23.226809 28.390899l-1.543364-9.5505903 6.600997-6.8291523-9.116272-1.4059447-4.01304-8.63019038-4.013041 8.63019038-9.116271 1.4059447 6.600997 6.8291523-1.543364 9.5505903 8.071679-4.5038874 8.071679 4.5038874z"></path>
                              </svg><svg viewBox="0 0 30 30" class="DpFJzd" style="width: 100%;">
                                <defs>
                                  <linearGradient id="star__solid" x1="50%" x2="50%" y1="0%" y2="100%">
                                    <stop offset="0%" stop-color="#FFCA11"></stop>
                                    <stop offset="100%" stop-color="#FFAD27"></stop>
                                  </linearGradient>
                                </defs>
                                <path fill="url(#star__solid)" fill-rule="evenodd" d="M14.9988798 25.032153l-8.522024 4.7551739c-.4785069.2670004-.7939037.0347448-.7072938-.5012115l1.6339124-10.1109185-6.8944622-7.1327607c-.3871203-.4005006-.2499178-.7947292.2865507-.8774654l9.5090982-1.46652789L14.5740199.51703028c.2346436-.50460972.6146928-.50543408.8497197 0l4.2693588 9.18141263 9.5090986 1.46652789c.545377.0841102.680337.4700675.28655.8774654l-6.894462 7.1327607 1.633912 10.1109185c.08788.5438118-.232337.7662309-.707293.5012115l-8.5220242-4.7551739z"></path>
                              </svg></div>
                          </div>
                        </div>
                      </div>
                    </a></section>
                </div>
                <div class="PB3XKx"></div>
              </div>
            </div>
            <div class="wGEXn5">
              <div class="kW3VDc">
                <div class="Vg5MF2"><span>Tổng tiền hàng</span></div>
                <div class="Tfejtu">
                  <div>$<?php echo $dh['gia']*$dh['sl']; ?></div>
                </div>
              </div>
              <!-- <div class="kW3VDc">
                <div class="Vg5MF2"><span>Phí vận chuyển</span></div>
                <div class="Tfejtu">
                  <div>₫32.800</div>
                </div>
              </div>
              <div class="kW3VDc">
                <div class="Vg5MF2"><span>Giảm giá phí vận chuyển</span>
                  <div class="stardust-popover R3s_PT" id="stardust-popover3" tabindex="0">
                    <div role="button" class="stardust-popover__target">
                      <div><span><svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14z" stroke="#000" stroke-opacity=".54"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 6a1 1 0 100-2 1 1 0 000 2zM7.25 7.932v3.636c0 .377.336.682.75.682s.75-.305.75-.682V7.932c0-.377-.336-.682-.75-.682s-.75.305-.75.682z" fill="#000" fill-opacity=".54"></path>
                          </svg></span></div>
                    </div>
                  </div>
                </div>
                <div class="Tfejtu">
                  <div>-₫24.800</div>
                </div>
              </div>
              <div class="kW3VDc">
                <div class="Vg5MF2"><span>Voucher từ Shopee</span></div>
                <div class="Tfejtu">
                  <div>-₫10.032</div>
                </div>
              </div>
              <div class="kW3VDc">
                <div class="Vg5MF2"><span>Sử dụng 100 Shopee xu</span></div>
                <div class="Tfejtu">
                  <div>-₫100</div>
                </div>
              </div> -->
              <div class="kW3VDc WKCLpC">
                <div class="Vg5MF2 oKK6bX"><span>Thành tiền</span></div>
                <div class="Tfejtu">
                  <div class="PUZuMi">$<?php echo $dh['gia']; ?></div>
                </div>
              </div>
            </div>
            <div class="oxzZe8"><svg height="16" width="16" viewBox="0 0 16 16" class="shop-svg-icon immERe">
                <g fill-rule="evenodd">
                  <path d="m8 15c-3.8596721 0-7-3.1397891-7-6.9994612 0-3.8602109 3.1403279-7.0005388 7-7.0005388 3.8602109 0 7 3.1403279 7 7.0005388 0 3.8596721-3.1397891 6.9994612-7 6.9994612z" fill="none" stroke-width="1" stroke="currentColor"></path>
                  <path d="m10.4132188 9.3999583h-5.050999c-.204396 0-.3841766-.1081321-.4918691-.297583-.0404396-.0712089-.1556047-.3239567.0413188-.6303309.0694507-.1248354.1643959-.2835171.2738467-.4593416.1050552-.1701102.1969235-.3371435.2791214-.5112098.086154-.1789015.1617586-.3705502.2259345-.5709901.0553847-.1771432.0839562-.3674733.0839562-.5652758 0-.2738467.0404396-.5287923.1204398-.7556059.075165-.2197807.1797806-.4193415.3098907-.5934078.125275-.1674729.2747258-.3151655.4457152-.4382426.1397805-.0989013.2826379-.1775828.4276932-.2369235.6247463-.29029 1.6628604-.0523078 1.6487945.0083517.1424179.0589012.2707698.1279123.3890118.2096707.1767036.1217585.333627.2747258.4646163.4540668.1283519.1784619.2312092.3810997.3050556.6013199.0760441.2232971.1147255.4738471.1147255.7437377 0 .1912092.0281319.3802205.0848353.5626385.0637364.2052751.1397805.3995612.2268136.5780231.0887914.1850553.1832971.3542864.2821984.5050559.1046156.1604399.1982421.297583.2826379.4123085.0874727.1160442.1296706.2505499.122198.3876931-.0061539.1107695-.0404396.2162642-.0989013.3041764-.0562639.0870331-.1305497.1591212-.2101103.2026378-.0685716.0404396-.1665937.0892309-.2769236.0892309zm-3.9906114.7572683h3.0423323c-.1878895.8170573-.6949449 1.2255859-1.5211662 1.2255859s-1.3332766-.4085286-1.5211662-1.2255859z" stroke="none" fill="currentColor"></path>
                </g>
              </svg>
              <div class="_RKjYr"><span>Vui lòng thanh toán <span class="GWTw5A">$<?php echo $dh['gia']; ?></span> khi nhận hàng. </span></div>
            </div>
          </section>
        </div>
      </section>
      <section>
        <div class="OrQ7SU">
          <div class="peteXU">
            <div class="IVFywZ HmaSt0"> </div>
            <div class="IVFywZ fT_AQM"> </div>
          </div>
          <div class="kW3VDc">
            <div class="Vg5MF2"><span><span class="R_ufN9"><span class="mx_ECD"><svg width="16" height="17" viewBox="0 0 253 263" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <title>Shopee Guarantee</title>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M126.5 0.389801C126.5 0.389801 82.61 27.8998 5.75 26.8598C5.08763 26.8507 4.43006 26.9733 3.81548 27.2205C3.20091 27.4677 2.64159 27.8346 2.17 28.2998C1.69998 28.7657 1.32713 29.3203 1.07307 29.9314C0.819019 30.5425 0.688805 31.198 0.689995 31.8598V106.97C0.687073 131.07 6.77532 154.78 18.3892 175.898C30.003 197.015 46.7657 214.855 67.12 227.76L118.47 260.28C120.872 261.802 123.657 262.61 126.5 262.61C129.343 262.61 132.128 261.802 134.53 260.28L185.88 227.73C206.234 214.825 222.997 196.985 234.611 175.868C246.225 154.75 252.313 131.04 252.31 106.94V31.8598C252.31 31.1973 252.178 30.5414 251.922 29.9303C251.667 29.3191 251.292 28.7649 250.82 28.2998C250.35 27.8358 249.792 27.4696 249.179 27.2225C248.566 26.9753 247.911 26.852 247.25 26.8598C170.39 27.8998 126.5 0.389801 126.5 0.389801Z" fill="#ee4d2d"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M207.7 149.66L119.61 107.03C116.386 105.472 113.914 102.697 112.736 99.3154C111.558 95.9342 111.772 92.2235 113.33 88.9998C114.888 85.7761 117.663 83.3034 121.044 82.1257C124.426 80.948 128.136 81.1617 131.36 82.7198L215.43 123.38C215.7 120.38 215.85 117.38 215.85 114.31V61.0298C215.848 60.5592 215.753 60.0936 215.57 59.6598C215.393 59.2232 215.128 58.8281 214.79 58.4998C214.457 58.1705 214.063 57.909 213.63 57.7298C213.194 57.5576 212.729 57.4727 212.26 57.4798C157.69 58.2298 126.5 38.6798 126.5 38.6798C126.5 38.6798 95.31 58.2298 40.71 57.4798C40.2401 57.4732 39.7735 57.5602 39.3376 57.7357C38.9017 57.9113 38.5051 58.1719 38.1709 58.5023C37.8367 58.8328 37.5717 59.2264 37.3913 59.6604C37.2108 60.0943 37.1186 60.5599 37.12 61.0298V108.03L118.84 147.57C121.591 148.902 123.808 151.128 125.129 153.884C126.45 156.64 126.797 159.762 126.113 162.741C125.429 165.72 123.755 168.378 121.363 170.282C118.972 172.185 116.006 173.221 112.95 173.22C110.919 173.221 108.915 172.76 107.09 171.87L40.24 139.48C46.6407 164.573 62.3785 186.277 84.24 200.16L124.49 225.7C125.061 226.053 125.719 226.24 126.39 226.24C127.061 226.24 127.719 226.053 128.29 225.7L168.57 200.16C187.187 188.399 201.464 170.892 209.24 150.29C208.715 150.11 208.2 149.9 207.7 149.66Z" fill="#fff"></path>
                    </svg></span></span><span class="jy0lDq">Phương thức Thanh toán</span></span></div>
            <div class="Tfejtu">
              <div><?php echo $dh['payment_method']; ?></div>
            </div>
          </div>
          </div>
        </section>
        <section>
       
        </section>
      </main>
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

  const statuss_ct = document.querySelector('.RgsTlq > .stepper');debugger;
  const line = statuss_ct.querySelector('.stepper__line-foreground');
  var statuss_ht = <?php echo $max;?>;
  var icon ;
  var icon1 ;
  var text_s;
  var date_s;
  const stepperSteps = statuss_ct.querySelectorAll('.stepper__step');
  <?php for($i = 0 ; $i <= $max ; $i++){?>
      stepperSteps[<?php echo $i ?>].classList.add('stepper__step--finish');
      icon = stepperSteps[<?php echo $i ?>].querySelector('.stepper__step-icon');
      icon.classList.add('stepper__step-icon--finish');
      text_s = stepperSteps[<?php echo $i ?>].querySelector('.stepper__step-text');
      text_s.innerHTML = "<?php echo dh_statuss_name($statuss[$i]["Id_statuss"]); ?>";
      date_s = stepperSteps[<?php echo $i ?>].querySelector('.stepper__step-date');
      date_s.innerHTML = "<?php echo $statuss[$i]["dates"];?>";
      <?php
  }?>
      
  <?php if($max<4){?>
      stepperSteps[<?php echo $max +1 ?>].classList.add('stepper__step--pending');
      icon1 = stepperSteps[<?php echo $max +1 ?>].querySelector('.stepper__step-icon');
      icon1.classList.add('stepper__step-icon--pending');
      line.style.width = "calc("+ (34 + ((<?php echo $max ?>) * 22)) +"% - 140px)";
  <?php }else{?>
      line.style.width = "calc(100% - 140px)";
  <?php } ?>


// giới hạn thời gian tồn tại cho thông báo
     setTimeout(function() {
    var div = document.getElementById("alert");
    if (div) {
        div.parentNode.removeChild(div); // Xóa phần tử div khỏi DOM
        <?php unset($_SESSION['a']); ?>
    }
}, 5000);  

const logout = document.querySelector('.reset-button-style');

logout.addEventListener('click', function(){
  debugger;
  window.location.href = '../../login/logout.php';
});
       

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