<?php
    include ("../views/header_m.php");
    $total = 0;
?>

<div class="body-content">
	<div class="container">
        
            <div class="UWJJw6">
            <div class="kvWjhK">
                <div class="iSSCtq">
                    <div class="k7UefF l0wK0t">
                        <div class="zgWBzz">Sản phẩm</div>
                    </div>
                    <div class="k7UefF ">Người đặt</div>
                    <div class="k7UefF ">Nhà cung cấp</div>
                    <div class="k7UefF ">Đơn giá</div>
                    <div class="k7UefF">Số lượng</div>
                    <div class="k7UefF ">Thành tiền</div>
                    <div class="k7UefF ">Trạng thái</div>
                </div>
            </div>
            <div>
         <?php foreach ($dhs as $dh) : ?>
        <div class="QroV_K">
            <div class="_MbENL">
                <a href="?action=ct_dh&&id=<?php echo $dh['id'] ?>">
                <div class="CZ00qG gTUoYD"><?php  $sp = lay_san_pham_productid($dh['id_sp']);?>
                    <div class="FisIRS ysaw0G">
                        <img class="Yzo0tI" alt="product image" src="../<?php echo $sp['Images']; ?>" width="50" height="50">
                        <span class="dUcW_h">
                            <span class="TvB7XR"><?php echo $sp['ten_sp']; ?></span>
                            <input class="id" type="hidden" value=""/>
                            <div class="uzZsfB"></div>
                        </span>
                    </div>
                    <div class="FisIRS"><?php echo get_name_tk($dh['id_user']) ?></div>
                    <div class="FisIRS"><?php echo lay_ten_ncc($dh['id_ncc']) ?></div>
                    <div class="FisIRS">$<?php echo $dh['gia'] ?></div>
                    <div class="FisIRS"><?php echo $dh['sl'] ?></div>

                    <div class="FisIRS ">$<?php echo $dh['sl'] * $dh['gia'] ?></div>
                    <div class="FisIRS "><?php echo dh_statuss_name(dh_status_now($dh['id'])); ?></div>
                </div>
                </a>
            </div>
           
        </div>  
        <?php endforeach;?>
        </div> 
</div>


</div>
</div>
<script>


</script>   
<?php
    include ("../views/footer.php");
?>