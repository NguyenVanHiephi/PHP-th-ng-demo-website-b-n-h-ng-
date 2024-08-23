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
	<h1 class="">Quên mật khẩu</h1>
    <br>
	<form action="." method="POST" class="register-form outer-top-xs" role="form">
    <input type="hidden" name="action" value="forget">
		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Email<span>*</span></label>
		    <input type="text" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div>
		
		
	  	<input type="submit"  class="btn-upper btn btn-primary checkout-page-button" value="Xác nhận"> 

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

</script>
<?php
    include ("../views/footer.php");
?>