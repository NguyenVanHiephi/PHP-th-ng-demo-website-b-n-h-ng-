<?php
    include ("../views/header.php");
?>


<div class="body-content">
	<div class="container">
		<div class="my-wishlist-page">
			<div class="row">
				<div class="col-md-12 my-wishlist">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th colspan="4" class="heading-title">My Wishlist</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($wishlist as  $wish) : 
				
				$sp = lay_san_pham_productid($wish['id_sp']);

				?>
				<tr>
					<td class="col-md-2"><img src="../<?php echo $sp['Images']; ?>" alt="imga"></td>
					<td class="col-md-7">
						<div class="product-name"><a href="#"><?php echo $sp['ten_sp']; ?></a></div>
						<!-- <div class="rating">
							<i class="fa fa-star rate"></i>
							<i class="fa fa-star rate"></i>
							<i class="fa fa-star rate"></i>
							<i class="fa fa-star rate"></i>
							<i class="fa fa-star non-rate"></i>
							<span class="review">( 06 Reviews )</span>
						</div> -->
						<div class="price">
							$<?php echo $sp['Gia_sp']; ?>
							<!-- <span>$900.00</span> -->
						</div>
					</td>
					<td class="col-md-2">
						<a onclick="add('<?php echo $wish['id_sp'];?>')" class="btn-upper btn btn-primary">Add to cart</a>
					</td>
					<td class="col-md-1 close-btn">
						<a onclick="remove('<?php echo $wish['id']; ?>')" class=""><i class="fa fa-times"></i></a>
					</td>
				</tr>
				<?php endforeach; ?> 
			</tbody>
		</table>
	</div>
</div>			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div>

<script>
function add(id_sp ){debugger;
    
	
	
	$.ajax({
   		url: ".",
   		type: "GET",
		data: { action: 'show_gio' , id_sp: id_sp},
		success: function(sp) {debugger;
		var jsonData = JSON.parse(sp);


	
		var confirmed = confirm("Sản phẩm đã có trong giỏ hàng . Có xác nhận thêm vào giỏ hàng ?");
		if (!confirmed) {
      		return; // If not confirmed, do not proceed with adding the product
  		}

		},
   		error: function() {
       		debugger; 
    		console.log("Có lỗi xảy ra trong khi gửi yêu cầu");
   		}
 	});

	var form = document.createElement("form");
  	form.method = "POST";
 	form.action = ".";

  	// Tạo các trường input
  	var a_Input = document.createElement("input");
  	a_Input.type = "text";
  	a_Input.name = "action";
  	a_Input.value = "add";

  	var id_spInput = document.createElement("input");
  	id_spInput.type = "text";
  	id_spInput.name = "id_sp";
  	id_spInput.value = id_sp;




  	// Thêm các trường input vào form
  	form.appendChild(a_Input);
  	form.appendChild(id_spInput);

  	// Thêm form vào body của trang
  	document.body.appendChild(form);
  	debugger;
  	// Gửi form
  	form.submit();

}


function remove(id ){
    
    var form = document.createElement("form");
    form.method = "POST";
    form.action = ".";


    var a_Input = document.createElement("input");
    a_Input.type = "text";
    a_Input.name = "action";
    a_Input.value = "xoa";

    var id_spInput = document.createElement("input");
    id_spInput.type = "text";
    id_spInput.name = "id";
    id_spInput.value = id;

    form.appendChild(a_Input);
    form.appendChild(id_spInput);

    // Thêm form vào body của trang
    document.body.appendChild(form);
    debugger;
    // Gửi form
    form.submit();

    
}

// giới hạn thời gian tồn tại cho thông báo
setTimeout(function() {
    var div = document.getElementById("alert");
    if (div) {
        div.parentNode.removeChild(div); // Xóa phần tử div khỏi DOM
        <?php unset($_SESSION['a']); ?>
    }
}, 5000);  


</script>

<?php
    include ("../views/footer.php");
?>