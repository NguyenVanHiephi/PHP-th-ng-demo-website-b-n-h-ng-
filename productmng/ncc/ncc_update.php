<?php
    include ("../views/header_m.php");
?>

<div class="body-content">
	<div class="container">
		<div class="track-order-page">
			<div class="row">
				<div class="col-md-12"> 
                <h1>
        Chỉnh sửa nhà cung cấp
    </h1>
    <form action="index.php" method="POST" id="add_product_form">
        <input type="hidden" name="action" value="sua_ncc">
        <input type="hidden" name="ncc_id" value="<?php echo $products['ID_Ncc'];?>">
         <br>

        <label class="info-title" for="">Tên nhà cung cấp:</label>
        <input class="form-control unicase-form-control text-input" type="text" value="<?php echo $products['Ten_Ncc'];?>" name="name"><br>

        <label class="info-title" for="">Địa chỉ:</label>
        <input class="form-control unicase-form-control text-input" type="text" value="<?php echo $products['Dia_chi'];?>" name="dc"><br>

        <label class="info-title" for="">Email:</label>
        <input class="form-control unicase-form-control text-input" type="text" value="<?php echo $products['email'];?>" name="email"><br>

        <label class="info-title" for="">Số điện thoại:</label>
        <input class="form-control unicase-form-control text-input" type="text" value="<?php echo $products['Sdt'];?>" name="sdt"><br>


        <label for="">&nbsp;</label>
        <input class="btn-upper btn btn-primary checkout-page-button" type="submit" value="Sửa"><br>
    </form>
    <br>
    <p class="last_paragraph">
        <a href="." class="btn-upper btn btn-primary checkout-page-button">Xem thông tin nhà cung cấp</a>
    </p>
</div>			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div>
<?php
    include ("../views/footer.php");
?>