<?php
    include ("../views/header.php");
?>

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="../">Home</a></li>
				<li class="active">Contact</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div>

<div class="container">
    <div class="contact-page">
		<div class="row">
			
				<div class="col-md-12 contact-map outer-bottom-vs">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8856263620164!2d105.7761331!3d21.0372619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b607440ec9%3A0xf7c81ff7b9fbe961!2zMTI4IEEgxJAuIEjhu5MgVMO5bmcgTeG6rXUsIE1haSBE4buLY2gsIEPhuqd1IEdp4bqleSwgSMOgIE7hu5lpIDEyMzAwMA!5e0!3m2!1svi!2s!4v1673235759509!5m2!1svi!2s" width="600" height="450" style="border:0"></iframe>
				</div>
				<div class="col-md-9 contact-form">
	<div class="col-md-12 contact-title">
		<h4>Contact Form</h4>
	</div>
	<div class="col-md-4 ">
		<form class="register-form" role="form">
			<div class="form-group">
		    <label class="info-title" for="exampleInputName">Your Name <span>*</span></label>
		    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputName" placeholder="">
		  </div>
		</form>
	</div>
	<div class="col-md-4">
		<form class="register-form" role="form">
			<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
		    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="">
		  </div>
		</form>
	</div>
	<div class="col-md-4">
		<form class="register-form" role="form">
			<div class="form-group">
		    <label class="info-title" for="exampleInputTitle">Title <span>*</span></label>
		    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputTitle" placeholder="Title">
		  </div>
		</form>
	</div>
	<div class="col-md-12">
		<form class="register-form"  role="form">
			<div class="form-group">
		    <label class="info-title" for="exampleInputComments">Your Comments <span>*</span></label>
		    <textarea class="form-control unicase-form-control" id="exampleInputComments"></textarea>
		  </div>
		</form>
	</div>
	<div class="col-md-12 outer-bottom-small m-t-20">
		<button type="submit" id="contact" class="btn-upper btn btn-primary checkout-page-button">Send Message</button>
	</div>
</div>
<div class="col-md-3 contact-info">
	<div class="contact-title">
		<h4>Information</h4>
	</div>
	<div class="clearfix address">
		<span class="contact-i"><i class="fa fa-map-marker"></i></span>
		<span class="contact-span">128 A Đ. Hồ Tùng Mậu, Mai Dịch, Cầu Giấy, Hà Nội VN</span>
	</div>
	<div class="clearfix phone-no">
		<span class="contact-i"><i class="fa fa-mobile"></i></span>
		<span class="contact-span">+(84) 992648378<br></span>
	</div>
	<div class="clearfix email">
		<span class="contact-i"><i class="fa fa-envelope"></i></span>
		<span class="contact-span"><a href="#">flipmart@email.com</a></span>
	</div>
</div>			</div><!-- /.contact-page -->
		</div><!-- /.row -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div>
<script>

const contact = document.getElementById('contact');

contact.addEventListener('click', function(event) {

    event.preventDefault();
    
  
    var form = document.createElement("form");
    form.method = "POST";
    form.action = ".";
    
    // Tạo các trường input
    var a_Input = document.createElement("input");
    a_Input.type = "text";
    a_Input.name = "action";
    a_Input.value = "post";


    var name_Input = document.createElement("input");
    name_Input.type = "text";
    name_Input.name = "name";
    name_Input.value = document.getElementById('exampleInputName').value;

    var mail_Input = document.createElement("input");
    mail_Input.type = "text";
    mail_Input.name = "email";
    mail_Input.value = document.getElementById('exampleInputEmail1').value;

    var title_Input = document.createElement("input");
    title_Input.type = "text";
    title_Input.name = "title";
    title_Input.value = document.getElementById('exampleInputTitle').value;

    var comment_Input = document.createElement("input");
    comment_Input.type = "text";
    comment_Input.name = "comment";
    comment_Input.value = document.getElementById('exampleInputComments').value;
    
    
    // Thêm các trường input vào form
    form.appendChild(a_Input);
    form.appendChild(name_Input);
    form.appendChild(mail_Input);
    form.appendChild(title_Input);
    form.appendChild(comment_Input);
    
    // Thêm form vào body của trang
    document.body.appendChild(form);
    debugger;
    // Gửi form
    form.submit();
    
  });

</script>
<?php
    include ("../views/footer.php");
?>