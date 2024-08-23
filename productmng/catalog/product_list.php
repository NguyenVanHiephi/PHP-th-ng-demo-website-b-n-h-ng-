<?php
    include("../views/header.php");
?>

<div class="body-content">
	<div class="container">
		<div class="track-order-page">
			<div class="row">
				<div class="col-md-12"> 
    
	<h2 class="heading-title">Loại sản phẩm </h2>
    <nav>  
            <ul>
            <?php foreach ($categories as $category) : ?>
                <li>
                    <a href="?category_id=<?php echo $category['ID_loai_sp'];?>">
                    <?php echo $category['Loai_sp'];?>
                    </a>
                </li>
            <?php endforeach; ?>
            </ul>
        </nav>
        <h1><?php echo $category_name;?></h1>
        <nav>
            <ul class="nav navbar-nav">
                <?php foreach ($products as $product) : ?>
                    <li>
                        <a href="?action=chi_tiet_sp&amp;product_id=<?php echo $product['ID_sp'];?>" class="btn-upper btn btn-primary checkout-page-button">
                        <?php echo $product['ten_sp'];?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
</div>			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->
<?php
    include("../views/footer.php");
?>