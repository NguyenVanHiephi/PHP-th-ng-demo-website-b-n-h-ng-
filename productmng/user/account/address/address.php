
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
<link rel="stylesheet" href="..\..\..\assets\css\custom.scss">

<!-- tìm kiếm select -->



<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="..\..\..\assets\css\bootstrap.min.css">

<!-- Customizable CSS -->
<link rel="stylesheet" href="..\..\..\assets\css\main.css">
<link rel="stylesheet" href="..\..\..\assets\css\blue.css">
<link rel="stylesheet" href="..\..\..\assets\css\owl.carousel.css">
<link rel="stylesheet" href="..\..\..\assets\css\owl.transitions.css">
<link rel="stylesheet" href="..\..\..\assets\css\animate.min.css">
<link rel="stylesheet" href="..\..\..\assets\css\rateit.css">
<link rel="stylesheet" href="..\..\..\assets\css\bootstrap-select.min.css">
<link href="..\..\..\assets\css\lightbox.css" rel="stylesheet">

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="..\..\..\assets\css\font-awesome.css">

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
                  <a class="navbar-account-drawer__button navbar-user-link black" href="../" previewlistener="true">
                    <span >Tài khoản của tôi</span>
                  </a>
                  <a class="navbar-account-drawer__button navbar-user-link black" href="../../purchase" previewlistener="true">
                    <span >Đơn Mua</span>
                  </a>
                  <button class="navbar-account-drawer__button navbar-account-drawer__button--complement navbar-user-link reset-button-style" tabindex="0">
                    <span>Đăng xuất</span>
                  </button>
                </div>
              </div>
            </div>
          </li>
					<li><a href="../../../wishlist"><i class="icon fa fa-heart"></i>Wishlist</a></li>
					<li><a  href="../../../cart"  ><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
					<li><a id="register" href="./register"><i class="icon fa fa-user-plus"></i>Register</a></li>
					<li><a href="../../../login"><i class="icon fa fa-lock"></i>Login</a></li>
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
          <div class="logo"> <a href="../../../"> <img src="..\..\..\assets\images\logo.png" alt="logo"> </a> </div>
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
                    <!-- <img class="shop-avatar__img" src="https://down-vn.img.susercontent.com/file/5fb64c8c18f72070f47dda0f9004917e_tn"> -->
                </div>
            </a>
            <div class="vDMlrj">
                <div class="HtUK6o"><?php echo $ten_tk; ?></div>
                <div>
                    <a class="Kytn1s" href="../profile" previewlistener="true">
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
                    <a class="jHbobZ" href="../profile" previewlistener="true">
                        <div class="U7dHrp">
                            <img src="https://down-vn.img.susercontent.com/file/ba61750a46794d8847c3f463c5e71cc4">
                        </div>
                        <div class="mY8KSl">
                            <span class="fnmbfn">Tài khoản của tôi</span>
                        </div>
                    </a>
                </div>
                <div class="stardust-dropdown__item-body stardust-dropdown__item-body--open" >
                    <div class="hGOWVP">
                        <a class="HVZpoT" href="../profile" previewlistener="true">
                            <span class="PcLlJr">Hồ sơ</span>
                        </a>
                        <!-- <a class="HVZpoT" href="/user/account/payment" previewlistener="true">
                            <span class="PcLlJr">Ngân hàng</span>
                        </a> -->
                        <a class="HVZpoT" href="../address" previewlistener="true">
                            <span class="PcLlJr">Địa chỉ</span>
                        </a>
                        <a class="HVZpoT" href="../password" previewlistener="true">
                            <span class="PcLlJr">Đổi mật khẩu</span>
                        </a>
                        <!-- <a class="HVZpoT" href="/user/setting/notification/" previewlistener="true">
                            <span class="PcLlJr">Cài đặt thông báo</span>
                        </a>
                        <a class="HVZpoT VfX643" href="/user/setting/privacy" previewlistener="true">
                            <span class="PcLlJr">Những thiết lập riêng tư</span>
                        </a> -->
                    </div>
                </div>
            </div>
            <div class="stardust-dropdown">
                <div class="stardust-dropdown__item-header">
                    <a class="jHbobZ" href="../../purchase" previewlistener="true">
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
       <div class="YTmAr0">
            <div class="qtYn7m">
                <div class="Oe_bEi">
                    <div class="lOB9lY">Địa chỉ của tôi</div>
                    <div class="rT9Vbd"></div>
                </div>
                <div>
                    <div class="y3hZ9E">
                        <div style="display: flex;">
                            <button class="shop-button-solid shop-button-solid--primary qTzF0g" onclick="addCustomContent('a','0')">
                                <div class="psXjeQ">
                                    <div class="zNqMl2">
                                        <svg enable-background="new 0 0 10 10" viewBox="0 0 10 10" x="0" y="0" class="shop-svg-icon icon-plus-sign">
                                            <polygon points="10 4.5 5.5 4.5 5.5 0 4.5 0 4.5 4.5 0 4.5 0 5.5 4.5 5.5 4.5 10 5.5 10 5.5 5.5 10 5.5"></polygon>
                                        </svg>
                                    </div>
                                    <div>Thêm địa chỉ mới</div>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="KK80cT">
                <div class="stardust-spinner--hidden stardust-spinner">
                    <div class="stardust-spinner__background">
                        <div class="stardust-spinner__main" role="img">
                            <svg width="34" height="12" viewBox="-1 0 33 12">
                                <circle class="stardust-spinner__spinner" cx="4" cy="6" r="4" fill="#EE4D2D"></circle>
                                <circle class="stardust-spinner__spinner" cx="16" cy="6" r="4" fill="#EE4D2D"></circle>
                                <circle class="stardust-spinner__spinner" cx="28" cy="6" r="4" fill="#EE4D2D"></circle>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="OrZkCF">
                    <div class="e65FdS">Địa chỉ</div>
                  
                    <?php if($address != null){ foreach ($address as $addres) :?> 
                    <div class="UUD4No SXp5o_">
                        <div class="_RPpod">
                            <div role="heading" class="X57SfF V4So7f">
                                <div id="address-card_ff8dc10b-f33c-4d7c-980d-ae78fa9a7895_header" class="QyRpwQ lWXnp3">
                                    <span class="Fi1zsg OwAhWT">
                                        <div class="mjiDsj"><?php echo $addres['Names']; ?></div>
                                    </span>
                                    <div class="YJU6OK"></div>
                                    <div role="row" class="N_WJUf lw_xYb E24UKj"><?php echo $addres['sdt']; ?></div>
                                </div>
                                <div class="YziUfM">
                                    <button class="T_oZqJ" onclick="addCustomContent('u','<?php echo $addres['id']; ?>')">Cập nhật</button>
                                    <?php  if($addres['statuss'] == true) { ?>
                                    <button class="T_oZqJ">Xóa</button>
                                    <?php   } ?>
                                </div>
                            </div>
                            <div id="address-card_ff8dc10b-f33c-4d7c-980d-ae78fa9a7895_content" role="heading" class="X57SfF V4So7f">
                                <div class="QyRpwQ lWXnp3">
                                    <div class="We6XvC">
                                        <!-- <div role="row" class="E24UKj">Số nhà 67 thôn 6 xóm 10</div> -->
                                        <div role="row" class="E24UKj"><?php echo $addres['addres']; ?></div>
                                    </div>
                                </div>
                                <div class="KFu3R3 YziUfM">
                                    <button class="k8tV5Y zvyzwn zDPndA"  <?php  if($addres['statuss'] == false) { ?>disabled=""<?php   } ?> >Thiết lập mặc định</button>
                                </div>
                            </div>
                            <div id="address-card_ff8dc10b-f33c-4d7c-980d-ae78fa9a7895_badge" role="row" class="vy2yND E24UKj">
                            <?php  if($addres['statuss'] == false) { ?>
                              <span role="mark" class="wZ_1w7 aCY_5O ZDVTqW">Mặc định</span>
                                    <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; }?>
                </div>
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
            <li><img src="..\..\..\assets\images\payments\1.png" alt=""></li>
            <li><img src="..\..\..\assets\images\payments\2.png" alt=""></li>
            <li><img src="..\..\..\assets\images\payments\3.png" alt=""></li>
            <li><img src="..\..\..\assets\images\payments\4.png" alt=""></li>
            <li><img src="..\..\..\assets\images\payments\5.png" alt=""></li>
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
       
function addCustomContent(sk,i) {

    let name_form = '' ;
    let action_form = '';
    let name = '' ;
    let dc = '' ;
    let sdt = '' ;
    let type = '' ;
    let statuss = true;
    let id_user = '';
    let id = '';


    if(sk==='a'){
     
      $.ajax({
        url: "../../../cart/",
        type: "GET",
        data: { action: 'show_address' },
        success: function(sp) {debugger;
        var jsonData = JSON.parse(sp);
        if(sp === "false  "){debugger;
          statuss = false;
        }

        },
        error: function() {
          debugger; 
          console.log("Có lỗi xảy ra trong khi gửi yêu cầu");
        }
      });

    
      name_form='Địa chỉ mới';
      action_form = 'add_address';
     
    }else if(sk==='u'){
     
      name_form ='Cập nhật địa chỉ';
      action_form = 'up_address';
    }
 
 
 // tạo nội dung cần thiết
  newDiv = document.createElement("div");
  var url = ".";

 $.ajax({
   url: url,
   type: "GET",
   data: { action: 'show_a' , id: i},
   success: function(sp) {debugger;
    var jsonData = JSON.parse(sp);
  if(sp!=='false'){

    id = jsonData.id;
    name = jsonData.Names;
    type =  jsonData.types;
    dc =  jsonData.addres;
    sdt =  jsonData.sdt;
    statuss =  jsonData.statuss;
    //  id_user = jsonData.id_user;
     
 }
     debugger;

    // Create a new div element
    var newDiv = document.createElement("div");
    newDiv.innerHTML = `<aside tabindex="0" role="dialog" aria-modal="true" aria-label="modal" class="BNBQAv">
  <div class="u_oUO3 undefined">
    <div class="w3X3nN">
      <div class="ZrzEDE">`+name_form+`</div>
      <form action="." method="POST">
            <input type="hidden" class="form-control" name="id"  value="`+id+`">
            <input type="hidden" class="form-control" name="action"  value="`+action_form+`">
        <div class="jypd7H">
          <div class="kTXLeO">
            <div class="R1TwAI">
              <div class="OanBpz Jl3DqQ">
                <div class="t0HxU5">
                  <div class="rG6mJB">Họ và tên</div><input class="AukTuV" type="text" name="names" placeholder="Họ và tên" autocomplete="name" maxlength="64" aria-describedby="input-error-message_bdc51cfc-1808-48eb-a8e7-9f298ea34238" value="`+name+`">
                </div>
              </div>
              <div class="FqyAgi"></div>
              <div class="OanBpz H7kyc3">
                <div class="t0HxU5">
                  <div class="rG6mJB">Số điện thoại</div><input class="AukTuV" type="text" name="phone" placeholder="Số điện thoại" autocomplete="user-address-phone" aria-describedby="phone-error-message_56d048ce-f690-4179-94a0-4506e9614036" value="`+sdt+`">
                </div>
              </div>
            </div>
          <!--<div class="R1TwAI">
              <div class="hCKmck">
                <div class="iP0OHO">
                  <div class="eOA8Kb">
                    <div class="qHbU5s">Tỉnh/ Thành phố, Quận/Huyện, Phường/Xã</div>
                    <div class="ZJintp Uow5O5">Tỉnh/ Thành phố, Quận/Huyện, Phường/Xã</div> 
                    <input autocomplete="user-administrative-divisions" class="fmiIx2 fCvFX1" type="text" placeholder="Tỉnh/ Thành phố, Quận/Huyện, Phường/Xã" value=""> 
                    <div class="GA1yrZ">
                      <div class="qbh5io"></div>
                      <div class="Ewz5VL"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="R1TwAI">
              <div class="XODmKx">
                <div class="LzFExT U42F79 j_0_nc">
                  <div class="DHKqPc">
                    <div class="cdREm2">Địa chỉ cụ thể</div><textarea class="SvyEcF" name="address"  rows="2" placeholder="Địa chỉ cụ thể" autocomplete="user-street-address" maxlength="128" >`+dc+`</textarea>
                  </div>
                </div>
                <div class="DoWgsT"></div>
              </div>
            </div>
            <!-- <div class="R1TwAI">
              <div class="AybxRd">
                <div class="UHEKt8 pdx9Xo _knSr5"><svg fill="none" viewBox="0 0 440 120" preserveAspectRatio="xMidYMid slice" class="v1NFi5">
                    <g clip-path="url(#clip0)">
                      <path fill="#F7F8F9" d="M0 0h440v120H0z"></path>
                      <g filter="url(#filter0_d)" stroke="#FBFBFC">
                        <path stroke-width="10" d="M-6.779-.48l123 61"></path>
                        <path stroke-width="12" d="M11.524 124.548l30-67"></path>
                        <path stroke-width="10" d="M-7.796 33.512l112 55"></path>
                        <path stroke-width="12" d="M103.473 88.664l41-97"></path>
                        <path stroke-width="10" d="M322.96 33.054l35-48m5.078 109.853l-51-10M442.064 94l-78 1"></path>
                        <path stroke-width="12" d="M410.037 130.663l-4-36"></path>
                        <path stroke-width="11" d="M73.36 39.047l28-44"></path>
                        <path stroke-width="12" d="M31.552 19.486l12-26"></path>
                        <path stroke-width="10" d="M116.01 60.422l41 18"></path>
                        <path stroke-width="12" d="M140.286 123.17l41-128"></path>
                        <path stroke-width="10" d="M164.244 42.682l-32-12"></path>
                        <path stroke-width="11" d="M256.298 124.068l-89-81"></path>
                        <path stroke-width="10" d="M242.102 24.626l-78-32M273.319-4.26l-80 71m26.348 26.974l-82 29m184.93-91.441l-102 62"></path>
                        <path stroke-width="11" d="M144.386 123.146l-39-34"></path>
                        <path stroke-width="12" d="M79.949 125.762l25-39"></path>
                        <path d="M241.5-7c18 8 70.203 32.864 82 39.5 16 9 39.5 35 39.5 61 0 27-18 34.5-28.5 42.5" stroke-width="10"></path>
                        <path d="M240 23.5c31 25.5 74 52 72.5 62s-51.5 28.333-77 41M337.5 13s23.5-7 28-8S445 7.5 445 7.5" stroke-width="10"></path>
                        <path d="M413 4c-1 13-3.4 40.5-5 42.5s-39.667 9-56 12" stroke-width="11"></path>
                      </g>
                    </g>
                    <defs>
                      <clipPath id="clip0">
                        <path fill="#fff" d="M0 0h440v120H0z"></path>
                      </clipPath>
                      <filter id="filter0_d" x="-14" y="-21.892" width="463.232" height="165.869" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                        <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                        <feOffset></feOffset>
                        <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                        <feComposite in2="hardAlpha" operator="out"></feComposite>
                        <feColorMatrix values="0 0 0 0 0.960784 0 0 0 0 0.964706 0 0 0 0 0.968627 0 0 0 1 0"></feColorMatrix>
                        <feBlend in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                        <feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                      </filter>
                    </defs>
                  </svg><button class="RrE141 aDRFHd" disabled=""><svg viewBox="0 0 10 10" class="Lb7qQo">
                      <path stroke="none" d="m10 4.5h-4.5v-4.5h-1v4.5h-4.5v1h4.5v4.5h1v-4.5h4.5z"></path>
                    </svg>Thêm vị trí</button></div>
              </div>
            </div> -->
            <!-- <div class="MQwrMT">
              <div class="CC_rOr">Loại địa chỉ:</div>
              <div class="VvJpHo" role="radiogroup" aria-label="Loại địa chỉ:" aria-describedby="label-group-error-message_e3d5433a-905c-4eac-98c5-2aa7a5deb79d">
                <div class="v_wxlL" role="radio" aria-checked="false" aria-disabled="false" tabindex="0"><span class="q3TqCc">Nhà Riêng</span></div>
                <div class="v_wxlL" role="radio" aria-checked="false" aria-disabled="false" tabindex="0"><span class="q3TqCc">Văn Phòng</span></div>
              </div>
            </div>-->
            <div class="NlC19f"><label class="_uXoWc ${statuss == false ? 'UWv91s' : ''}"><input class="sp7inB" ${statuss == false ? 'checked' : ''} type="checkbox" name="status" role="checkbox" aria-checked=""  aria-disabled="false">
                <div class="H4iGzY ${statuss == false ? 'ltxYiB' : ''}"></div>Đặt làm địa chỉ mặc đinh
              </label></div>
          </div>
          <div class="Lr7eTF"><button class="zvyzwn Jp08En">Trở Lại</button><button type="submit" class="zvyzwn Dr0Xm6">Hoàn thành</button></div>
        </div>
      </form>
    </div>
  </div>
  <div class="EVQyHG"></div>
  </aside>`;

    // Insert the new div element before the footer
    var footer = document.querySelector('footer');
    footer.before(newDiv);

    var checkbox_md = document.querySelector(".sp7inB");

checkbox_md.addEventListener("click", function() {
if (checkbox_md.getAttribute("aria-checked") === "false") {
  checkbox_md.setAttribute("aria-checked", "true");
  checkbox_md.checked = true;
  checkbox_md.nextElementSibling.classList.add("ltxYiB"); // Thay "yourClassName" bằng tên class bạn muốn thêm vào
} else {
  checkbox_md.setAttribute("aria-checked", "false");
  checkbox_md.checked = false;
  checkbox_md.nextElementSibling.classList.remove("ltxYiB"); // Thay "yourClassName" bằng tên class bạn muốn xóa đi
}
});

var out = document.querySelector('.Jp08En');
out.addEventListener('click', function(){

  newDiv.remove();

});

  },
   error: function() {
       debugger; 
     console.log("Có lỗi xảy ra trong khi gửi yêu cầu");
   }
 }
 );
    
  }

 
  const logout = document.querySelector('.reset-button-style');

logout.addEventListener('click', function(){
  debugger;
  window.location.href = '../../../login/logout.php';
});

</script>
<!-- ============================================================= FOOTER : END============================================================= --> 

<!-- For demo purposes – can be removed on production --> 

<!-- For demo purposes – can be removed on production : End --> 

<!-- JavaScripts placed at the end of the document so the pages load faster --> 
<script src="..\..\..\assets\js\jquery-1.11.1.min.js"></script> 
<script src="..\..\..\assets\js\bootstrap.min.js"></script> 
<script src="..\..\..\assets\js\bootstrap-hover-dropdown.min.js"></script> 
<script src="..\..\..\assets\js\owl.carousel.min.js"></script> 
<script src="..\..\..\assets\js\echo.min.js"></script> 
<script src="..\..\..\assets\js\jquery.easing-1.3.min.js"></script> 
<script src="..\..\..\assets\js\bootstrap-slider.min.js"></script> 
<script src="..\..\..\assets\js\jquery.rateit.min.js"></script> 
<script type="text/javascript" src="..\..\..\assets\js\lightbox.min.js"></script> 
<script src="..\..\..\assets\js\bootstrap-select.min.js"></script> 
<script src="..\..\..\assets\js\wow.min.js"></script> 
<script src="..\..\..\assets\js\scripts.js"></script>
<script src="..\..\..\assets\js\navigation.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.js"></script>
</body>
</html>