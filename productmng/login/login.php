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
		<div class="sign-in-page" >

				<!-- Sign-in -->			
<div class=" sign-in">
	<h1 class="">Đăng nhập</h1>
    <br>
	<form action="." method="POST" class="register-form outer-top-xs" role="form">
    <input type="hidden" name="action" value="login">
		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Email hoặc Tên tài khoản <span>*</span></label>
		    <input type="text" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div>
	  	<div class="form-group">
		    <label class="info-title" for="exampleInputPassword1">Mật khẩu <span>*</span></label>
		    <input type="password" name="pass" class="form-control unicase-form-control text-input" id="exampleInputPassword1">
		</div>
		
	  	<input type="submit"  class="btn-upper btn btn-primary checkout-page-button" value="Đăng nhập"> 

		 <div class="radio outer-xs">
		  	<a href="" class="forgot-password">Quên mật khẩu ?</a>
		</div>
	</form>					
</div>
<!-- Sign-in -->

<!-- create a new account -->
	
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

var forgot = document.querySelector(".forgot-password");
forgot.addEventListener('click', function(event) {

event.preventDefault();




var form = document.createElement("form");
form.method = "POST";
form.action = ".";

// Tạo các trường input
var a_Input = document.createElement("input");
a_Input.type = "text";
a_Input.name = "action";
a_Input.value = "forgot_form";


// Thêm các trường input vào form
form.appendChild(a_Input);

// Thêm form vào body của trang
document.body.appendChild(form);
debugger;
// Gửi form
form.submit();

});

</script>
<?php
    include ("../views/footer_l.php");
?>