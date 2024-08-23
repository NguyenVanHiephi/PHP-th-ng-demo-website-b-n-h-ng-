
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
                    <a class="Kytn1s" href="../../user/account/profile" previewlistener="true">
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
                    <a class="jHbobZ" href="../../user/account/profile" previewlistener="true">
                        <div class="U7dHrp">
                            <img src="https://down-vn.img.susercontent.com/file/ba61750a46794d8847c3f463c5e71cc4">
                        </div>
                        <div class="mY8KSl">
                            <span class="fnmbfn">Tài khoản của tôi</span>
                        </div>
                    </a>
                </div>
                <!-- <div class="stardust-dropdown__item-body stardust-dropdown__item-body--open">
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
                        <a class="HVZpoT" href="../../user/setting/notification/" previewlistener="true">
                            <span class="PcLlJr">Cài đặt thông báo</span>
                        </a>
                        <a class="HVZpoT VfX643" href="../../user/setting/privacy" previewlistener="true">
                            <span class="PcLlJr">Những thiết lập riêng tư</span>
                        </a>
                    </div>
                </div> -->
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
        <div class="ashFMQ">  
          <div></div>
          <!-- <section class="QmO3Bu" aria-role="tablist"> 
            <a class="KI5har mRVNLm" title="Tất cả" aria-role="tab" aria-selected="true" aria-controls="olp_panel_id-0.06591060462470022" id="olp_tab_id-0.06591060462470022" href="/user/purchase?type=6" previewlistener="true">
              <span class="NoH9rC">Tất cả</span>
            </a>
            <a class="KI5har" title="Chờ thanh toán" aria-role="tab" aria-selected="false" aria-controls="olp_panel_id-0.9084220533802971" id="olp_tab_id-0.9084220533802971" href="/user/purchase?type=9" previewlistener="true">
              <span class="NoH9rC">Chờ thanh toán</span>
            </a>
            <a class="KI5har" title="Vận chuyển" aria-role="tab" aria-selected="false" aria-controls="olp_panel_id-0.27622386762091433" id="olp_tab_id-0.27622386762091433" href="/user/purchase?type=7" previewlistener="true">
              <span class="NoH9rC">Vận chuyển</span>
            </a>
            <a class="KI5har" title="Chờ giao hàng" aria-role="tab" aria-selected="false" aria-controls="olp_panel_id-0.7022669455024106" id="olp_tab_id-0.7022669455024106" href="/user/purchase?type=8" previewlistener="true">
              <span class="NoH9rC">Chờ giao hàng</span> 
            </a>
            <a class="KI5har" title="Hoàn thành" aria-role="tab" aria-selected="false" aria-controls="olp_panel_id-0.7432061783982196" id="olp_tab_id-0.7432061783982196" href="/user/purchase?type=3" previewlistener="true">
              <span class="NoH9rC">Hoàn thành</span>
            </a>
            <a class="KI5har" title="Đã hủy" aria-role="tab" aria-selected="false" aria-controls="olp_panel_id-0.075992479427885" id="olp_tab_id-0.075992479427885" href="/user/purchase?type=4" previewlistener="true">
              <span class="NoH9rC">Đã hủy</span>
            </a>
            <a class="KI5har" title="Trả hàng/Hoàn tiền" aria-role="tab" aria-selected="false" aria-controls="olp_panel_id-0.2889019124046681" id="olp_tab_id-0.2889019124046681" href="/user/purchase?type=12" previewlistener="true">
              <span class="NoH9rC">Trả hàng/Hoàn tiền</span>
            </a>
          </section> -->
          <!-- <section>
            <div class="Gv8cvd">
              <svg width="19px" height="19px" viewBox="0 0 19 19">
                <g id="Search-New" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="my-purchase-copy-27" transform="translate(-399.000000, -221.000000)" stroke-width="2">
                    <g id="Group-32" transform="translate(400.000000, 222.000000)">
                      <circle id="Oval-27" cx="7" cy="7" r="7"></circle>
                      <path d="M12,12 L16.9799555,16.919354" id="Path-184" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                  </g>
                </g>
              </svg>
              <input aria-label="" role="search" autocomplete="off" placeholder="Bạn có thể tìm kiếm theo tên Shop, ID đơn hàng hoặc Tên Sản phẩm" value="">
            </div>
          </section> -->
          <main aria-role="tabpanel" aria-labelledby="olp_tab_id-0.06591060462470022" id="olp_panel_id-0.06591060462470022">
            <div>
            <?php foreach ($dhs as  $sp) : ?>
              <div class="YL_VlX">
                <div> 
                  <div class="J632se">
                    <section>
                      <div class="P2JMvg">
                        <div class="RBPP9y">
                          <div>
                            <div class="Es_V3Q xzDLS0">
                              <svg viewBox="0 0 24 11">
                                <title>Mall</title>
                                <g fill="#fff" fill-rule="evenodd">
                                  <path d="M19.615 7.143V1.805a.805.805 0 0 0-1.611 0v5.377H18c0 1.438.634 2.36 1.902 2.77V9.95c.09.032.19.05.293.05.444 0 .805-.334.805-.746a.748.748 0 0 0-.498-.69v-.002c-.59-.22-.885-.694-.885-1.42h-.002zm3 0V1.805a.805.805 0 0 0-1.611 0v5.377H21c0 1.438.634 2.36 1.902 2.77V9.95c.09.032.19.05.293.05.444 0 .805-.334.805-.746a.748.748 0 0 0-.498-.69v-.002c-.59-.22-.885-.694-.885-1.42h-.002zm-7.491-2.985c.01-.366.37-.726.813-.726.45 0 .814.37.814.742v5.058c0 .37-.364.73-.813.73-.395 0-.725-.278-.798-.598a3.166 3.166 0 0 1-1.964.68c-1.77 0-3.268-1.456-3.268-3.254 0-1.797 1.497-3.328 3.268-3.328a3.1 3.1 0 0 1 1.948.696zm-.146 2.594a1.8 1.8 0 1 0-3.6 0 1.8 1.8 0 1 0 3.6 0z"></path>
                                  <path d="M.078 1.563A.733.733 0 0 1 .565.89c.423-.15.832.16 1.008.52.512 1.056 1.57 1.88 2.99 1.9s2.158-.85 2.71-1.882c.19-.356.626-.74 1.13-.537.342.138.477.4.472.65a.68.68 0 0 1 .004.08v7.63a.75.75 0 0 1-1.5 0V3.67c-.763.72-1.677 1.18-2.842 1.16a4.856 4.856 0 0 1-2.965-1.096V9.25a.75.75 0 0 1-1.5 0V1.648c0-.03.002-.057.005-.085z" fill-rule="nonzero"></path>
                                </g>
                              </svg>
                            </div>
                          </div>
                          <div class="UDaMW3" tabindex="0"><?php echo $sp['Nsx']; ?></div>
                          <!-- <div class="B2SOGC">
                            <button class="stardust-button stardust-button--primary">
                              <svg viewBox="0 0 17 17" class="shop-svg-icon icon-btn-chat" style="fill: white;">
                                <g fill-rule="evenodd">
                                  <path d="M13.89 0C14.504 0 15 .512 15 1.144l-.003.088-.159 2.117.162.001c.79 0 1.46.558 1.618 1.346l.024.15.008.154v9.932a1.15 1.15 0 01-1.779.963l-.107-.08-1.882-1.567-7.962.002a1.653 1.653 0 01-1.587-1.21l-.036-.148-.021-.155-.071-.836h-.01L.91 13.868a.547.547 0 01-.26.124L.556 14a.56.56 0 01-.546-.47L0 13.429V1.144C0 .512.497 0 1.11 0h12.78zM15 4.65l-.259-.001-.461 6.197c-.045.596-.527 1.057-1.106 1.057L4.509 11.9l.058.69.01.08a.35.35 0 00.273.272l.07.007 8.434-.001 1.995 1.662.002-9.574-.003-.079a.35.35 0 00-.274-.3L15 4.65zM13.688 1.3H1.3v10.516l1.413-1.214h10.281l.694-9.302zM4.234 5.234a.8.8 0 011.042-.077l.187.164c.141.111.327.208.552.286.382.131.795.193 1.185.193s.803-.062 1.185-.193c.225-.078.41-.175.552-.286l.187-.164a.8.8 0 011.042 1.209c-.33.33-.753.579-1.26.753A5.211 5.211 0 017.2 7.4a5.211 5.211 0 01-1.706-.28c-.507-.175-.93-.424-1.26-.754a.8.8 0 010-1.132z" fill-rule="nonzero"></path>
                                </g>
                              </svg>
                              <span>chat</span>
                            </button>
                          </div>
                          <a class="Mr26O7" href="/aptunisex?entryPoint=OrderDetail" previewlistener="true">
                            <div class="stardust-button">
                              <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shop-svg-icon icon-btn-shop">
                                <path d="m15 4.8c-.1-1-.8-2-1.6-2.9-.4-.3-.7-.5-1-.8-.1-.1-.7-.5-.7-.5h-8.5s-1.4 1.4-1.6 1.6c-.4.4-.8 1-1.1 1.4-.1.4-.4.8-.4 1.1-.3 1.4 0 2.3.6 3.3l.3.3v3.5c0 1.5 1.1 2.6 2.6 2.6h8c1.5 0 2.5-1.1 2.5-2.6v-3.7c.1-.1.1-.3.3-.3.4-.8.7-1.7.6-3zm-3 7c0 .4-.1.5-.4.5h-8c-.3 0-.5-.1-.5-.5v-3.1c.3 0 .5-.1.8-.4.1 0 .3-.1.3-.1.4.4 1 .7 1.5.7.7 0 1.2-.1 1.6-.5.5.3 1.1.4 1.6.4.7 0 1.2-.3 1.8-.7.1.1.3.3.5.4.3.1.5.3.8.3zm.5-5.2c0 .1-.4.7-.3.5l-.1.1c-.1 0-.3 0-.4-.1s-.3-.3-.5-.5l-.5-1.1-.5 1.1c-.4.4-.8.7-1.4.7-.5 0-.7 0-1-.5l-.6-1.1-.5 1.1c-.3.5-.6.6-1.1.6-.3 0-.6-.2-.9-.8l-.5-1-.7 1c-.1.3-.3.4-.4.6-.1 0-.3.1-.3.1s-.4-.4-.4-.5c-.4-.5-.5-.9-.4-1.5 0-.1.1-.4.3-.5.3-.5.4-.8.8-1.2.7-.8.8-1 1-1h7s .3.1.8.7c.5.5 1.1 1.2 1.1 1.8-.1.7-.2 1.2-.5 1.5z"></path>
                              </svg>
                              <span>Xem Shop</span>
                            </div>
                          </a> -->
                        </div>
                        <!-- <div class="jgIyoX">
                          <div class="LY5oll">
                            <a class="lXbYsi" href="/user/purchase/order/159555441270812?type=6" previewlistener="true">
                              <span class="O2yAdQ">
                                <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shop-svg-icon icon-free-shipping-line">
                                  <g>
                                    <line fill="none" stroke-linejoin="round" stroke-miterlimit="10" x1="8.6" x2="4.2" y1="9.8" y2="9.8"></line>
                                    <circle cx="3" cy="11.2" fill="none" r="2" stroke-miterlimit="10"></circle>
                                    <circle cx="10" cy="11.2" fill="none" r="2" stroke-miterlimit="10"></circle>
                                    <line fill="none" stroke-miterlimit="10" x1="10.5" x2="14.4" y1="7.3" y2="7.3"></line>
                                    <polyline fill="none" points="1.5 9.8 .5 9.8 .5 1.8 10 1.8 10 9.1" stroke-linejoin="round" stroke-miterlimit="10"></polyline>
                                    <polyline fill="none" points="9.9 3.8 14 3.8 14.5 10.2 11.9 10.2" stroke-linejoin="round" stroke-miterlimit="10"></polyline>
                                  </g>
                                </svg>
                              Đơn hàng đã được giao thành công</span>
                            </a>
                            <div class="shop-drawer" id="pc-drawer-id-0" tabindex="0">
                              <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shop-svg-icon icon-help">
                                <g>
                                  <circle cx="7.5" cy="7.5" fill="none" r="6.5" stroke-miterlimit="10"></circle>
                                  <path d="m5.3 5.3c.1-.3.3-.6.5-.8s.4-.4.7-.5.6-.2 1-.2c.3 0 .6 0 .9.1s.5.2.7.4.4.4.5.7.2.6.2.9c0 .2 0 .4-.1.6s-.1.3-.2.5c-.1.1-.2.2-.3.3-.1.2-.2.3-.4.4-.1.1-.2.2-.3.3s-.2.2-.3.4c-.1.1-.1.2-.2.4s-.1.3-.1.5v.4h-.9v-.5c0-.3.1-.6.2-.8s.2-.4.3-.5c.2-.2.3-.3.5-.5.1-.1.3-.3.4-.4.1-.2.2-.3.3-.5s.1-.4.1-.7c0-.4-.2-.7-.4-.9s-.5-.3-.9-.3c-.3 0-.5 0-.7.1-.1.1-.3.2-.4.4-.1.1-.2.3-.3.5 0 .2-.1.5-.1.7h-.9c0-.3.1-.7.2-1zm2.8 5.1v1.2h-1.2v-1.2z" stroke="none"></path>
                                </g>
                              </svg>
                            </div>
                          </div>
                          <div class="bv3eJE" tabindex="0">Đánh giá</div>
                        </div> -->
                      </div>
                    </section>
                    <div class="kG_yF0"></div>
                    <section>
                      <a aria-label="" href="?action=ct_dh&&id=<?php echo $sp['id']; ?>" previewlistener="true">
                        <div>
                          <div class="bdAfgU">
                            <div class="FNHV0p">
                              <div>
                                <section>
                                  <div class="mZ1OWk">
                                    <div class="dJaa92">
                                      <diV class="images">
                                        <img src="../../<?php echo $sp['Images']; ?>" class="gQuHsZ" alt="" tabindex="0">
                                      </div>
                                      <div class="nmdHRf">
                                        <div>
                                          <div class="zWrp4w">
                                            <span class="DWVWOJ" tabindex="0"><?php echo $sp['ten_sp']; ?></span>
                                          </div>
                                        </div>
                                        <div>
                                          <!-- <div class="rsautk" tabindex="0">Phân loại hàng: Be,L</div> -->
                                          <div class="j3I_Nh" tabindex="0">x<?php echo $sp['sl']; ?></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="ylYzwa" tabindex="0">
                                      <div class="YRp1mm">
                                        <!-- <span class="q6Gzj5">₫220.000</span> -->
                                        <span class="nW_6Oi PNlXhK">$<?php echo $sp['gia']; ?></span>
                                      </div>
                                    </div>
                                  </div>
                                </section>
                              </div>
                              <div class="PB3XKx"></div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </section>
                    <div class="Ze0Icc"></div>
                  </div>
                </div>
                <div class="peteXU">
                  <div class="IVFywZ HmaSt0"> </div>
                  <div class="IVFywZ fT_AQM"> </div>
                </div>
                <div class="LwXnUQ">
                  <div class="NWUSQP">
                    <span class="R_ufN9">
                      <div class="afBScK" tabindex="0">
                        <svg width="16" height="17" viewBox="0 0 253 263" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <title>Shopee Guarantee</title>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M126.5 0.389801C126.5 0.389801 82.61 27.8998 5.75 26.8598C5.08763 26.8507 4.43006 26.9733 3.81548 27.2205C3.20091 27.4677 2.64159 27.8346 2.17 28.2998C1.69998 28.7657 1.32713 29.3203 1.07307 29.9314C0.819019 30.5425 0.688805 31.198 0.689995 31.8598V106.97C0.687073 131.07 6.77532 154.78 18.3892 175.898C30.003 197.015 46.7657 214.855 67.12 227.76L118.47 260.28C120.872 261.802 123.657 262.61 126.5 262.61C129.343 262.61 132.128 261.802 134.53 260.28L185.88 227.73C206.234 214.825 222.997 196.985 234.611 175.868C246.225 154.75 252.313 131.04 252.31 106.94V31.8598C252.31 31.1973 252.178 30.5414 251.922 29.9303C251.667 29.3191 251.292 28.7649 250.82 28.2998C250.35 27.8358 249.792 27.4696 249.179 27.2225C248.566 26.9753 247.911 26.852 247.25 26.8598C170.39 27.8998 126.5 0.389801 126.5 0.389801Z" fill="#ee4d2d"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M207.7 149.66L119.61 107.03C116.386 105.472 113.914 102.697 112.736 99.3154C111.558 95.9342 111.772 92.2235 113.33 88.9998C114.888 85.7761 117.663 83.3034 121.044 82.1257C124.426 80.948 128.136 81.1617 131.36 82.7198L215.43 123.38C215.7 120.38 215.85 117.38 215.85 114.31V61.0298C215.848 60.5592 215.753 60.0936 215.57 59.6598C215.393 59.2232 215.128 58.8281 214.79 58.4998C214.457 58.1705 214.063 57.909 213.63 57.7298C213.194 57.5576 212.729 57.4727 212.26 57.4798C157.69 58.2298 126.5 38.6798 126.5 38.6798C126.5 38.6798 95.31 58.2298 40.71 57.4798C40.2401 57.4732 39.7735 57.5602 39.3376 57.7357C38.9017 57.9113 38.5051 58.1719 38.1709 58.5023C37.8367 58.8328 37.5717 59.2264 37.3913 59.6604C37.2108 60.0943 37.1186 60.5599 37.12 61.0298V108.03L118.84 147.57C121.591 148.902 123.808 151.128 125.129 153.884C126.45 156.64 126.797 159.762 126.113 162.741C125.429 165.72 123.755 168.378 121.363 170.282C118.972 172.185 116.006 173.221 112.95 173.22C110.919 173.221 108.915 172.76 107.09 171.87L40.24 139.48C46.6407 164.573 62.3785 186.277 84.24 200.16L124.49 225.7C125.061 226.053 125.719 226.24 126.39 226.24C127.061 226.24 127.719 226.053 128.29 225.7L168.57 200.16C187.187 188.399 201.464 170.892 209.24 150.29C208.715 150.11 208.2 149.9 207.7 149.66Z" fill="#fff"></path>
                        </svg>
                      </div>
                    </span>
                    <label class="juCcT0">Thành tiền:</label>
                    <?php $t = $sp['gia']*$sp['sl'];?>
                    <div class="t7TQaf" tabindex="0" aria-label="Thành tiền: $<?php echo $t; ?>">$<?php echo $t; ?></div>
                  </div>
                </div>
                <div class="yyqgYp">
                  <div class="iwUeSD">
                    <div></div>
                  </div>
                  <section class="po9nwN">
                    <div class="aAXjeK">
                      <div>
                        <button class="stardust-button stardust-button--primary QY7kZh yaOLa5">Đã nhận hàng</button>
                      </div>
                    </div>
                    <div class="hbQXWm">
                      <div>
                        <button class="stardust-button stardust-button--secondary QY7kZh yaOLa5">Yêu cầu Trả hàng/Hoàn tiền</button>
                      </div>
                    </div>
                    <div class="hbQXWm">
                      <div>
                        <button class="stardust-button stardust-button--secondary QY7kZh">Liên hệ Người bán</button>
                      </div>
                    </div>
                  </section>
                  <!-- <section class="po9nwN">
                    <div class="aAXjeK">
                      <div>
                        <button class="stardust-button stardust-button--primary QY7kZh">Mua lại</button>
                      </div>
                    </div>
                    <div class="hbQXWm">
                      <div>
                        <button class="stardust-button stardust-button--secondary QY7kZh">Liên hệ Người bán</button>
                      </div>
                    </div>
                    <div class="hbQXWm">
                      <div>
                        <button class="stardust-button stardust-button--secondary QY7kZh">Xem đánh giá Shop</button>
                      </div>
                    </div>
                  </section> -->
                </div>
              </div>
              <?php endforeach; ?>   
              <!-- <div class="YL_VlX">
                <div>
                  <div class="J632se">
                    <section>
                      <div class="P2JMvg">
                        <div class="RBPP9y">
                          <div class="Koi0Pw">
                            <svg xmlns="http://www.w3.org/2000/svg" width="62" height="16" fill="none">
                              <title>Preferred Seller</title>
                              <path fill="#EE4D2D" fill-rule="evenodd" d="M0 2C0 .9.9 0 2 0h58a2 2 0 012 2v12a2 2 0 01-2 2H2a2 2 0 01-2-2V2z" clip-rule="evenodd"></path>
                              <g clip-path="url(#clip0)">
                                <path fill="#fff" d="M8.7 13H7V8.7L5.6 6.3A828.9 828.9 0 004 4h2l2 3.3a1197.3 1197.3 0 002-3.3h1.6L8.7 8.7V13zm7.9-1.7h1.7c0 .3-.2.6-.5 1-.2.3-.5.5-1 .7l-.6.2h-.8c-.5 0-1 0-1.5-.2l-1-.8a4 4 0 01-.9-2.4c0-1 .3-1.9 1-2.6a3 3 0 012.4-1l.8.1a2.8 2.8 0 011.3.7l.4.6.3.8V10h-4.6l.2 1 .4.7.6.5.7.1c.4 0 .7 0 .9-.2l.2-.6v-.1zm0-2.3l-.1-1-.3-.3c0-.2-.1-.2-.2-.3l-.8-.2c-.3 0-.6.2-.9.5l-.3.5a4 4 0 00-.3.8h3zm-1.4-4.2l-.7.7h-1.4l1.5-2h1.1l1.5 2h-1.4l-.6-.7zm8.1 1.6H25V13h-1.7v-.5.1H23l-.7.5-.9.1-1-.1-.7-.4c-.3-.2-.4-.5-.6-.8l-.2-1.3V6.4h1.7v3.7c0 1 0 1.6.3 1.7.2.2.5.3.7.3h.4l.4-.2.3-.3.3-.5.2-1.4V6.4zM34.7 13a11.2 11.2 0 01-1.5.2 3.4 3.4 0 01-1.3-.2 2 2 0 01-.5-.3l-.3-.5-.2-.6V7.4h-1.2v-1h1.1V5h1.7v1.5h1.9v1h-2v3l.2 1.2.1.3.2.2h.3l.2.1c.2 0 .6 0 1.3-.3v1zm2.4 0h-1.7V3.5h1.7v3.4a3.7 3.7 0 01.2-.1 2.8 2.8 0 013.4 0l.4.4.2.7V13h-1.6V9.3 8.1l-.4-.6-.6-.2a1 1 0 00-.4.1 2 2 0 00-.4.2l-.3.3a3 3 0 00-.3.5l-.1.5-.1.9V13zm5.4-6.6H44V13h-1.6V6.4zm-.8-.9l1.8-2h1.8l-2.1 2h-1.5zm7.7 5.8H51v.5l-.4.5a2 2 0 01-.4.4l-.6.3-1.4.2c-.5 0-1 0-1.4-.2l-1-.7c-.3-.3-.5-.7-.6-1.2-.2-.4-.3-.9-.3-1.4 0-.5.1-1 .3-1.4a2.6 2.6 0 011.6-1.8c.4-.2.9-.3 1.4-.3.6 0 1 .1 1.5.3.4.1.7.4 1 .6l.2.5.1.5h-1.6c0-.3-.1-.5-.3-.6-.2-.2-.4-.3-.8-.3s-.8.2-1.2.6c-.3.4-.4 1-.4 2 0 .9.1 1.5.4 1.8.4.4.8.6 1.2.6h.5l.3-.2.2-.3v-.4zm4 1.7h-1.6V3.5h1.7v3.4a3.7 3.7 0 01.2-.1 2.8 2.8 0 013.4 0l.3.4.3.7V13h-1.6V9.3L56 8.1c-.1-.3-.2-.5-.4-.6l-.6-.2a1 1 0 00-.3.1 2 2 0 00-.4.2l-.3.3a3 3 0 00-.3.5l-.2.5V13z"></path>
                              </g>
                              <defs>
                                <clipPath id="clip0">
                                  <path fill="#fff" d="M0 0h55v16H0z" transform="translate(4)"></path>
                                </clipPath>
                              </defs>
                            </svg>
                          </div>
                          <div class="UDaMW3" tabindex="0">Zacci Studio</div>
                          <div class="B2SOGC">
                            <button class="stardust-button stardust-button--primary">
                              <svg viewBox="0 0 17 17" class="shop-svg-icon icon-btn-chat" style="fill: white;">
                                <g fill-rule="evenodd">
                                  <path d="M13.89 0C14.504 0 15 .512 15 1.144l-.003.088-.159 2.117.162.001c.79 0 1.46.558 1.618 1.346l.024.15.008.154v9.932a1.15 1.15 0 01-1.779.963l-.107-.08-1.882-1.567-7.962.002a1.653 1.653 0 01-1.587-1.21l-.036-.148-.021-.155-.071-.836h-.01L.91 13.868a.547.547 0 01-.26.124L.556 14a.56.56 0 01-.546-.47L0 13.429V1.144C0 .512.497 0 1.11 0h12.78zM15 4.65l-.259-.001-.461 6.197c-.045.596-.527 1.057-1.106 1.057L4.509 11.9l.058.69.01.08a.35.35 0 00.273.272l.07.007 8.434-.001 1.995 1.662.002-9.574-.003-.079a.35.35 0 00-.274-.3L15 4.65zM13.688 1.3H1.3v10.516l1.413-1.214h10.281l.694-9.302zM4.234 5.234a.8.8 0 011.042-.077l.187.164c.141.111.327.208.552.286.382.131.795.193 1.185.193s.803-.062 1.185-.193c.225-.078.41-.175.552-.286l.187-.164a.8.8 0 011.042 1.209c-.33.33-.753.579-1.26.753A5.211 5.211 0 017.2 7.4a5.211 5.211 0 01-1.706-.28c-.507-.175-.93-.424-1.26-.754a.8.8 0 010-1.132z" fill-rule="nonzero"></path>
                                </g>
                              </svg>
                              <span>chat</span>
                            </button>
                          </div>
                          <a class="Mr26O7" href="/zaccistudio.me?entryPoint=OrderDetail" previewlistener="true">
                            <div class="stardust-button">
                              <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shop-svg-icon icon-btn-shop">
                                <path d="m15 4.8c-.1-1-.8-2-1.6-2.9-.4-.3-.7-.5-1-.8-.1-.1-.7-.5-.7-.5h-8.5s-1.4 1.4-1.6 1.6c-.4.4-.8 1-1.1 1.4-.1.4-.4.8-.4 1.1-.3 1.4 0 2.3.6 3.3l.3.3v3.5c0 1.5 1.1 2.6 2.6 2.6h8c1.5 0 2.5-1.1 2.5-2.6v-3.7c.1-.1.1-.3.3-.3.4-.8.7-1.7.6-3zm-3 7c0 .4-.1.5-.4.5h-8c-.3 0-.5-.1-.5-.5v-3.1c.3 0 .5-.1.8-.4.1 0 .3-.1.3-.1.4.4 1 .7 1.5.7.7 0 1.2-.1 1.6-.5.5.3 1.1.4 1.6.4.7 0 1.2-.3 1.8-.7.1.1.3.3.5.4.3.1.5.3.8.3zm.5-5.2c0 .1-.4.7-.3.5l-.1.1c-.1 0-.3 0-.4-.1s-.3-.3-.5-.5l-.5-1.1-.5 1.1c-.4.4-.8.7-1.4.7-.5 0-.7 0-1-.5l-.6-1.1-.5 1.1c-.3.5-.6.6-1.1.6-.3 0-.6-.2-.9-.8l-.5-1-.7 1c-.1.3-.3.4-.4.6-.1 0-.3.1-.3.1s-.4-.4-.4-.5c-.4-.5-.5-.9-.4-1.5 0-.1.1-.4.3-.5.3-.5.4-.8.8-1.2.7-.8.8-1 1-1h7s .3.1.8.7c.5.5 1.1 1.2 1.1 1.8-.1.7-.2 1.2-.5 1.5z"></path>
                              </svg>
                              <span>Xem Shop</span>
                            </div>
                          </a>
                        </div>
                        <div class="jgIyoX">
                          <div class="LY5oll">
                            <a class="lXbYsi" href="/user/purchase/order/159555441270808?type=6" previewlistener="true">
                              <span class="O2yAdQ">
                                <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shop-svg-icon icon-free-shipping-line">
                                  <g>
                                    <line fill="none" stroke-linejoin="round" stroke-miterlimit="10" x1="8.6" x2="4.2" y1="9.8" y2="9.8"></line>
                                    <circle cx="3" cy="11.2" fill="none" r="2" stroke-miterlimit="10"></circle>
                                    <circle cx="10" cy="11.2" fill="none" r="2" stroke-miterlimit="10"></circle>
                                    <line fill="none" stroke-miterlimit="10" x1="10.5" x2="14.4" y1="7.3" y2="7.3"></line>
                                    <polyline fill="none" points="1.5 9.8 .5 9.8 .5 1.8 10 1.8 10 9.1" stroke-linejoin="round" stroke-miterlimit="10"></polyline>
                                    <polyline fill="none" points="9.9 3.8 14 3.8 14.5 10.2 11.9 10.2" stroke-linejoin="round" stroke-miterlimit="10"></polyline>
                                  </g>
                                </svg> Đơn hàng đã được giao thành công
                              </span>
                            </a>
                            <div class="shop-drawer" id="pc-drawer-id-4" tabindex="0">
                              <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shop-svg-icon icon-help">
                                <g>
                                  <circle cx="7.5" cy="7.5" fill="none" r="6.5" stroke-miterlimit="10"></circle>
                                  <path d="m5.3 5.3c.1-.3.3-.6.5-.8s.4-.4.7-.5.6-.2 1-.2c.3 0 .6 0 .9.1s.5.2.7.4.4.4.5.7.2.6.2.9c0 .2 0 .4-.1.6s-.1.3-.2.5c-.1.1-.2.2-.3.3-.1.2-.2.3-.4.4-.1.1-.2.2-.3.3s-.2.2-.3.4c-.1.1-.1.2-.2.4s-.1.3-.1.5v.4h-.9v-.5c0-.3.1-.6.2-.8s.2-.4.3-.5c.2-.2.3-.3.5-.5.1-.1.3-.3.4-.4.1-.2.2-.3.3-.5s.1-.4.1-.7c0-.4-.2-.7-.4-.9s-.5-.3-.9-.3c-.3 0-.5 0-.7.1-.1.1-.3.2-.4.4-.1.1-.2.3-.3.5 0 .2-.1.5-.1.7h-.9c0-.3.1-.7.2-1zm2.8 5.1v1.2h-1.2v-1.2z" stroke="none"></path>
                                </g>
                              </svg>
                            </div>
                          </div>
                          <div class="bv3eJE" tabindex="0">Hoàn thành</div>
                        </div>
                      </div>
                    </section>
                    <div class="kG_yF0"></div>
                    <section>
                      <h3 class="a11y-hidden"></h3>
                      <a aria-label="" href="/user/purchase/order/159555441270808?type=6" previewlistener="true">
                        <div>
                          <div class="bdAfgU">
                            <div class="FNHV0p">
                              <div>
                                <section>
                                  <div class="mZ1OWk">
                                    <div class="dJaa92">
                                      <img src="https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-lp3j2cq5gsbf6f_tn" class="gQuHsZ" alt="" tabindex="0">
                                      <div class="nmdHRf">
                                        <div>
                                          <div class="zWrp4w">
                                            <span class="DWVWOJ" tabindex="0">Áo khoác phao nam YUMICLOTHES trần bông 3 lớp dày dặn, chất liệu tráng bạc cản gió cản bụi siêu ấm AB01</span>
                                          </div>
                                        </div>
                                        <div>
                                          <div class="rsautk" tabindex="0">Phân loại hàng: Đen,XL (66-75Kg)</div>
                                          <div class="j3I_Nh" tabindex="0">x1</div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="ylYzwa" tabindex="0">
                                      <div class="YRp1mm">
                                        <span class="q6Gzj5">₫449.000</span>
                                        <span class="nW_6Oi PNlXhK">₫239.000</span>
                                      </div>
                                    </div>
                                  </div>
                                </section>
                              </div>
                              <div class="PB3XKx"></div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </section>
                    <div class="Ze0Icc"></div>
                  </div>
                </div>
                <div class="peteXU">
                  <div class="IVFywZ HmaSt0"> </div>
                  <div class="IVFywZ fT_AQM"> </div>
                </div>
                <div class="LwXnUQ">
                  <div class="NWUSQP">
                    <span class="R_ufN9">
                      <div class="afBScK" tabindex="0">
                        <svg width="16" height="17" viewBox="0 0 253 263" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <title>Shopee Guarantee</title>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M126.5 0.389801C126.5 0.389801 82.61 27.8998 5.75 26.8598C5.08763 26.8507 4.43006 26.9733 3.81548 27.2205C3.20091 27.4677 2.64159 27.8346 2.17 28.2998C1.69998 28.7657 1.32713 29.3203 1.07307 29.9314C0.819019 30.5425 0.688805 31.198 0.689995 31.8598V106.97C0.687073 131.07 6.77532 154.78 18.3892 175.898C30.003 197.015 46.7657 214.855 67.12 227.76L118.47 260.28C120.872 261.802 123.657 262.61 126.5 262.61C129.343 262.61 132.128 261.802 134.53 260.28L185.88 227.73C206.234 214.825 222.997 196.985 234.611 175.868C246.225 154.75 252.313 131.04 252.31 106.94V31.8598C252.31 31.1973 252.178 30.5414 251.922 29.9303C251.667 29.3191 251.292 28.7649 250.82 28.2998C250.35 27.8358 249.792 27.4696 249.179 27.2225C248.566 26.9753 247.911 26.852 247.25 26.8598C170.39 27.8998 126.5 0.389801 126.5 0.389801Z" fill="#ee4d2d"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M207.7 149.66L119.61 107.03C116.386 105.472 113.914 102.697 112.736 99.3154C111.558 95.9342 111.772 92.2235 113.33 88.9998C114.888 85.7761 117.663 83.3034 121.044 82.1257C124.426 80.948 128.136 81.1617 131.36 82.7198L215.43 123.38C215.7 120.38 215.85 117.38 215.85 114.31V61.0298C215.848 60.5592 215.753 60.0936 215.57 59.6598C215.393 59.2232 215.128 58.8281 214.79 58.4998C214.457 58.1705 214.063 57.909 213.63 57.7298C213.194 57.5576 212.729 57.4727 212.26 57.4798C157.69 58.2298 126.5 38.6798 126.5 38.6798C126.5 38.6798 95.31 58.2298 40.71 57.4798C40.2401 57.4732 39.7735 57.5602 39.3376 57.7357C38.9017 57.9113 38.5051 58.1719 38.1709 58.5023C37.8367 58.8328 37.5717 59.2264 37.3913 59.6604C37.2108 60.0943 37.1186 60.5599 37.12 61.0298V108.03L118.84 147.57C121.591 148.902 123.808 151.128 125.129 153.884C126.45 156.64 126.797 159.762 126.113 162.741C125.429 165.72 123.755 168.378 121.363 170.282C118.972 172.185 116.006 173.221 112.95 173.22C110.919 173.221 108.915 172.76 107.09 171.87L40.24 139.48C46.6407 164.573 62.3785 186.277 84.24 200.16L124.49 225.7C125.061 226.053 125.719 226.24 126.39 226.24C127.061 226.24 127.719 226.053 128.29 225.7L168.57 200.16C187.187 188.399 201.464 170.892 209.24 150.29C208.715 150.11 208.2 149.9 207.7 149.66Z" fill="#fff"></path>
                        </svg>
                      </div>
                    </span>
                    <label class="juCcT0">Thành tiền:</label>
                    <div class="t7TQaf" tabindex="0" aria-label="Thành tiền: ₫243.900">₫243.900</div>
                  </div>
                </div>
                <div class="yyqgYp">
                  <div class="iwUeSD">
                    <div>
                      <span class="CDsaN0" aria-label="Vui lòng chỉ nhấn &quot;Đã nhận được hàng&quot; khi đơn hàng đã được giao đến bạn và sản phẩm nhận được không có vấn đề nào." tabindex="0">Vui lòng chỉ nhấn "Đã nhận được hàng" khi đơn hàng đã được giao đến bạn và sản phẩm nhận được không có vấn đề nào.</span>
                    </div>
                  </div>
                  <section class="po9nwN">
                    <div class="aAXjeK">
                      <div>
                        <button class="stardust-button stardust-button--primary QY7kZh yaOLa5">Đã nhận hàng</button>
                      </div>
                    </div>
                    <div class="hbQXWm">
                      <div>
                        <button class="stardust-button stardust-button--secondary QY7kZh yaOLa5">Yêu cầu Trả hàng/Hoàn tiền</button>
                      </div>
                    </div>
                    <div class="hbQXWm">
                      <div>
                        <button class="stardust-button stardust-button--secondary QY7kZh">Liên hệ Người bán</button>
                      </div>
                    </div>
                  </section>
                </div>
              </div> -->
            </div>
            <div></div>
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