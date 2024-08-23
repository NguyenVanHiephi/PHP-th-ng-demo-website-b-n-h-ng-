<?php
    include ("../views/header.php");
?>
<link rel="stylesheet" href="../assets\css\qty.css">

    
    <div class="body-content">
	<div class="container">
        <div class="track-order-page ">
        <h1 class="heading-title">Giỏ hàng</h1>
    <?php
        if ( $cart != null ) : ?>
        
            <table class="table compare-table inner-top-vs">
                <tr id=cart_header>
                    <th class="right"><input type="checkbox" ></th>
                    <th class="right">Sản phẩm</th>
                    <th class="right">Giá sản phẩm</th>
                    <th class="right">Số lượng</th>
                    <th class="right">Thanh toán</th>
                    <th>&nbsp;</th>
                </tr>
                <?php foreach ($cart as  $item) :?>
                <tr>
                    <td><input type="checkbox" value="<?php echo $item['id']; ?>" aria-label="Chọn sản phẩm này"></td>
                    <td>
                        <div class="bzhajK">
                            <a title="" href="" previewlistener="true">
                                <img class="jFEiVQ" src="../<?php echo $item['img']; ?>" alt="product image">
                            </a>
                                <div class="Ou_0WX">
                                    <a class="c54pg1" title="" href="" previewlistener="true"><?php echo $item['Names']; ?></a>
                                    <div class="gvFc9h"></div>
                                </div>
                        </div>
                    </td>
                    <td class="right gia">$<?php echo $item['gia']; ?></td>
                    <td class="right">
                    <div class="quantity">
                          <div class="quantity_selector" >
                              <span class="minus" onclick="up('<?php echo $item['id']; ?>','-1')" >
                                  <i class="fa fa-minus" aria-hidden="true"></i></span>
                                <span id="quantity_value"><?php echo $item['sl']; ?></span>
				<span class="plus" onclick="up('<?php echo $item['id']; ?>','1')" >
                                    <i class="fa fa-plus" aria-hidden="true"></i></span>
			    </div>
                          </div>
                    </td>
                    <?php $t = $item['gia']*$item['sl']; ?>
                    <td class="right">$<?php echo $t ?></td>
                    <td>
                    <a id="dgh" onclick="remove('<?php echo $item['id']; ?>')" class="btn-upper btn btn-primary checkout-page-button" style="background:red;" >Xóa</a>
                    </td>
                </tr>
                <?php endforeach; ?>
               
            </table>
       
    <?php else: ?>
        <p>Không có sản phẩm trong giỏ hàng</p>
       
        <?php endif; ?>
    </div>
        <section class="yn6AIc dhqg2H">
            <div class="WhvsrO Kk1Mak">
                <div class="u4pma8">
                    <input type="checkbox" aria-label="Chọn tất cả các sản phẩm">
                </div>
                <button class="v5CBXg clear-btn-style">Chọn Tất Cả (<?php echo $cart_sl;?>)</button>
                <button class="clear-btn-style QmkEaL">Lưu vào mục Đã thích</button>
                <div class="BV92a3" role="region">
                    <div class="DScaTh">
                        <div class="znJ7TE">
                            <div class="CoYXUV">Tổng thanh toán (0 Sản phẩm):</div>
                            <div class="mketV9">$0</div>
                        </div>
                    </div>
                </div>
                <button class="shop-button-solid shop-button-solid--primary">
                    <span class="SHq91i">Mua hàng</span>
                </button>
            </div>
</section>

    </div>

</div>


 <!-- qty -->
 <script src="../dist\js\qty.js"></script>
 <script src="..\assets\js\cart.js"></script>
 <script>
 function up(id,sl){
        
    var form = document.createElement("form");
    form.method = "POST";
    form.action = "index.php";
 
    // Tạo các trường input
    var a_Input = document.createElement("input");
    a_Input.type = "text";
    a_Input.name = "action";
    a_Input.value = "up";

    var id_spInput = document.createElement("input");
    id_spInput.type = "text";
    id_spInput.name = "id";
    id_spInput.value = id;
 
 
    var slInput = document.createElement("input");
    slInput.type = "text";
    slInput.name = "sl";
    slInput.value = sl;
 
    // Thêm các trường input vào form
    form.appendChild(a_Input);
    form.appendChild(id_spInput);
    form.appendChild(slInput);
 
    // Thêm form vào body của trang
    document.body.appendChild(form);
    debugger;
    // Gửi form
    form.submit();
 }

 function remove(id){
        
        var form = document.createElement("form");
        form.method = "POST";
        form.action = "index.php";
     
        // Tạo các trường input
        var a_Input = document.createElement("input");
        a_Input.type = "text";
        a_Input.name = "action";
        a_Input.value = "del";
    
        var id_spInput = document.createElement("input");
        id_spInput.type = "text";
        id_spInput.name = "id";
        id_spInput.value = id;
     
        // Thêm các trường input vào form
        form.appendChild(a_Input);
        form.appendChild(id_spInput);
     
        // Thêm form vào body của trang
        document.body.appendChild(form);
        debugger;
        // Gửi form
        form.submit();
     }
    

     const logout = document.querySelector('.reset-button-style');

logout.addEventListener('click', function(){
  debugger;
  window.location.href = '../login/logout.php';
});



 </script>
<?php
    include ("../views/footer.php");
?>