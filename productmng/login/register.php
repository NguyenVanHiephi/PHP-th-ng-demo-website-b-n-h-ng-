<?php
    include ("../views/header_l.php");
?>

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
		
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="container">
		<div class="sign-in-page">
				<!-- Sign-in -->			
<!-- Sign-in -->

<!-- create a new account -->
<div class="create-new-account">
	<h1 class="checkout-subtitle">Đăng ký tài khoản</h1>
	<br>
	<form action="index.php" method="POST" class="register-form outer-top-xs" role="form">
    <input type="hidden" name="action" value="register">
		<div class="form-group">
	    	<label class="info-title" for="exampleInputEmail2">Email <span>*</span></label>
	    	<input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail2">
	  	</div>  
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Tên tài khoản <span>*</span></label>
		    <input type="name" name="name" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Mật khẩu <span>*</span></label>
		    <input type="password" name="pass" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div>
         <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Nhập lại mật khẩu <span>*</span></label>
		    <input type="password" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div>
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button" style="">Xác nhận</button>
	</form>
	
	
</div>	
<!-- create a new account -->			
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->

<script>

function showAlert(message) {
  var alertBox = document.getElementById("custom-alert");
  var alertMessage = document.getElementById("custom-alert-message");

  alertMessage.textContent = message;
  alertBox.style.display = "block";

  setTimeout(function() {
    closeAlert();
  }, 3000);
}

function closeAlert() {
  var alertBox = document.getElementById("custom-alert");
  alertBox.style.display = "none";
}

</script>

<?php
    include ("../views/footer.php");
?>