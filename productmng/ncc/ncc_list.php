<?php
    include ("../views/header_m.php");
?>

<div class="body-content">
	<div class="container">
		<div class="track-order-page">
			<div class="row">
				<div class="col-md-12"> 
    <h1 class="heading-title">Thông tin nhà cung cấp</h1>

    <section>
       
        <table class="table compare-table inner-top-vs">
                <tr>
                    <th>Tên nhà cung cấp</th>
                    <th>Địa chỉ</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>&nbsp;</th>
                </tr>
                <?php foreach ($nccs as $ncc) : ?>
                <tr>
                    <td><?php echo $ncc['Ten_Ncc'];?></td>
                    <td><?php echo $ncc['Dia_chi'];?></td>
                    <td><?php echo $ncc['email'];?></td>
                    <td><?php echo $ncc['Sdt'];?></td>
                    <td>
                    <form action="." method="GET">
                            <input type="hidden" name="action" value="show_ncc">
                            <input type="hidden" name="ncc_id" value="<?php echo $ncc['ID_Ncc'];?>">
                           
                            <input type="submit" class="btn-upper btn btn-primary checkout-page-button" value="Sửa ">
                        </form>
                        <br>
                        <form action="." method="POST">
                            <input type="hidden" name="action" value="xoa_ncc">
                           
                            <input type="hidden" name="ncc_id" value="<?php echo $ncc['ID_Ncc'];?>">
                         
                            <input type="submit" class="btn-upper btn btn-primary checkout-page-button" style="background:red;"  value="Xoá ">
                        </form>
                    </td>
                </tr>
                <?php endforeach;?>
            </table>
        <p class="last_paragraph">
            <a href="?action=xem_bang_them_ncc" class="btn-upper btn btn-primary checkout-page-button">Thêm mới nhà cung cấp</a>
        </p>
    </section>
</div>			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div>
<?php
    include ("../views/footer.php");
?>