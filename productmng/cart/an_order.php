<?php
    include ("../views/header.php");
    $total = 0;
?>

<div class="body-content">
	<div class="container">
        <div class="m6A2B1">
            <div class="xBNaac"></div>  
                <div class="hYgtuo">
                    <div class="SvK9MH">
                        <div class="IZawzb">
                            <div class="qclVa9">
                                <svg height="16" viewBox="0 0 12 16" width="12" class="shop-svg-icon icon-location-marker"><path d="M6 3.2c1.506 0 2.727 1.195 2.727 2.667 0 1.473-1.22 2.666-2.727 2.666S3.273 7.34 3.273 5.867C3.273 4.395 4.493 3.2 6 3.2zM0 6c0-3.315 2.686-6 6-6s6 2.685 6 6c0 2.498-1.964 5.742-6 9.933C1.613 11.743 0 8.498 0 6z" fill-rule="evenodd"></path></svg>
                            </div>
                            <h2>Địa chỉ nhận hàng</h2>
                        </div>
                    </div>
                    
            </div>
        </div>
            <div class="UWJJw6">
            <div class="kvWjhK">
                <div class="iSSCtq">
                    <div class="k7UefF l0wK0t">
                        <div class="zgWBzz">Sản phẩm</div>
                    </div>
                    <div class="k7UefF zQOVG9"></div>
                    <div class="k7UefF">Đơn giá</div>
                    <div class="k7UefF">Số lượng</div>
                    <div class="k7UefF J2gurn">Thành tiền</div>
                </div>
            </div>
            <div>
            <?php foreach ($sps as  $sp) : ?>
        <div class="QroV_K">
            <div class="_MbENL">
                <div class="CZ00qG gTUoYD">
                    <div class="FisIRS ysaw0G">
                        <img class="Yzo0tI" alt="product image" src="../<?php echo $sp['img']; ?>" width="40" height="40">
                        <span class="dUcW_h">
                            <span class="TvB7XR"><?php echo $sp['Names']; ?></span>
                            <input class="id" type="hidden" value="<?php echo $sp['id_sp']; ?>"/>
                            <div class="uzZsfB"></div>
                        </span>
                    </div>
                    <div class="FisIRS ri4hV6">
                        <span class="Ev9jhR">Loại:</span>
                    </div>
                    <div class="FisIRS">$<?php echo $sp['gia']; ?></div>
                    <div class="FisIRS sl"><?php echo $sp['sl']; ?></div>
                    <?php $t = $sp['gia']*$sp['sl'];  $total = $total + $t;?>
                    <div class="FisIRS BeMjeR">$<?php echo $t ?></div>
                </div>
            </div>
           
        </div>  
    <?php endforeach; ?>   
        </div> 
</div>
<div class="N02iLl">
    <div class="aSiS8B">
        <h2 class="a11y-visually-hidden">Phương thức thanh toán</h2>
        <div class="IN_fAG">
            <div class="UPSKhT wp5W5e">Phương thức thanh toán</div>
            <div class="LhNuge">Thanh toán khi nhận hàng</div>
            <button class="BM_J3y div-style">Thay đổi</button>
        </div>
    </div>
    <div class="yHG0SE" aria-live="polite">
        <h3 class="o13Lc4 hERTPn cFXdGN">Tổng tiền hàng</h3><div class="o13Lc4 X9R_0O cFXdGN">$<?php echo $total ?></div>
        <!-- <h3 class="o13Lc4 hERTPn fwPZIN">Phí vận chuyển</h3><div class="o13Lc4 X9R_0O fwPZIN">₫54.100</div>
        <h3 class="o13Lc4 hERTPn vsmMk7">Miễn Phí Vận Chuyển</h3><div class="o13Lc4 X9R_0O vsmMk7">-₫2.000</div>
        <h3 class="o13Lc4 hERTPn ISsAYD">Tổng cộng Voucher giảm giá:</h3><div class="o13Lc4 X9R_0O ISsAYD">-₫5.000</div>
        <h3 class="o13Lc4 hERTPn cNgneA">Tổng thanh toán</h3><div class="o13Lc4 fYeyE4 X9R_0O cNgneA">₫409.100</div> -->
        <div class="s7CqeD">
            <div class="sQArKu">
            </div>
            <button class="stardust-button stardust-button--primary stardust-button--large LtH6tW">Đặt hàng</button>
        </div>
    </div>
</div>

</div>
</div>
<script>

const muahang = document.querySelector('.stardust-button--large');

muahang.addEventListener('click', function(){
    
debugger;
const dongdonhangs = document.querySelectorAll('.QroV_K');

// Tạo mảng chứa các đối tượng với thuộc tính id và số lượng
let donhang = [];

// Lặp qua từng phần tử để lấy dữ liệu bên trong
dongdonhangs.forEach(dongdonhang => {

    let id = dongdonhang.querySelector('.id').value;
    let quantity = dongdonhang.querySelector('.sl').innerText;
    donhang.push({ id: id, sl: quantity });

});

var form = document.createElement("form");
form.method = "POST";
form.action = ".";

// Tạo các trường input
var ac_Input = document.createElement("input");
ac_Input.type = "text";
ac_Input.name = "action";
ac_Input.value = "mua_hang";


var donhangInput = document.createElement("input");
donhangInput.type = "text";
donhangInput.name = "donhang";
donhangInput.value = JSON.stringify(donhang);


var pmInput = document.createElement("input");
pmInput.type = "text";
pmInput.name = "pm";
pmInput.value = document.querySelector('.LhNuge').innerText;

var id_addressInput = document.createElement("input");
id_addressInput.type = "text";
id_addressInput.name = "adress";
id_addressInput.value = document.querySelector('input[name="adress"]').value;

// Thêm các trường input vào form
form.appendChild(ac_Input);
form.appendChild(donhangInput);
form.appendChild(id_addressInput);
form.appendChild(pmInput);

// Thêm form vào body của trang
document.body.appendChild(form);
debugger;
// Gửi form
form.submit();

});

$.ajax({
   url: ".",
   type: "GET",
   data: { action: 'show_address' },
   success: function(sp) {debugger;
    var jsonData = JSON.parse(sp);
  if(sp === "false  "){debugger;

    // Create a new div element
    var newDiv = document.createElement("div");
    newDiv.innerHTML = `<aside tabindex="0" role="dialog" aria-modal="true" aria-label="modal" class="BNBQAv">
    <div class="u_oUO3 undefined">
      <div class="w3X3nN">
        <div class="ZrzEDE">Địa chỉ mới</div>
        <form>
          <div class="jypd7H">
            <div class="kTXLeO">
              <div class="R1TwAI">
                <div class="OanBpz Jl3DqQ">
                  <div class="t0HxU5">
                    <div class="rG6mJB">Họ và tên</div><input class="AukTuV" type="text" name="names" placeholder="Họ và tên" autocomplete="name" maxlength="64" aria-describedby="input-error-message_bdc51cfc-1808-48eb-a8e7-9f298ea34238" value="">
                  </div>
                </div>
                <div class="FqyAgi"></div>
                <div class="OanBpz H7kyc3">
                  <div class="t0HxU5">
                    <div class="rG6mJB">Số điện thoại</div><input class="AukTuV" type="text" name="phone" placeholder="Số điện thoại" autocomplete="user-address-phone" aria-describedby="phone-error-message_56d048ce-f690-4179-94a0-4506e9614036" value="">
                  </div>
                </div>
              </div>
            <!--<div class="R1TwAI">
                <div class="hCKmck">
                  <div class="iP0OHO">
                    <div class="eOA8Kb">
                      <div class="qHbU5s">Tỉnh/ Thành phố, Quận/Huyện, Phường/Xã</div>
                      <div class="ZJintp Uow5O5">Tỉnh/ Thành phố, Quận/Huyện, Phường/Xã</div> 
                      <input autocomplete="user-administrative-divisions" class="fmiIx2 fCvFX1" type="text" placeholder="Tỉnh/ Thành phố, Quận/Huyện, Phường/Xã" value=""> 
                      <div class="GA1yrZ">
                        <div class="qbh5io"></div>
                        <div class="Ewz5VL"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              <div class="R1TwAI">
                <div class="XODmKx">
                  <div class="LzFExT U42F79 j_0_nc">
                    <div class="DHKqPc">
                      <div class="cdREm2">Địa chỉ cụ thể</div><textarea class="SvyEcF" name="address"  rows="2" placeholder="Địa chỉ cụ thể" autocomplete="user-street-address" maxlength="128" ></textarea>
                    </div>
                  </div>
                  <div class="DoWgsT"></div>
                </div>
              </div>
              <!-- <div class="MQwrMT">
                <div class="CC_rOr">Loại địa chỉ:</div>
                <div class="VvJpHo" role="radiogroup" aria-label="Loại địa chỉ:" aria-describedby="label-group-error-message_e3d5433a-905c-4eac-98c5-2aa7a5deb79d">
                  <div class="v_wxlL" role="radio" aria-checked="false" aria-disabled="false" tabindex="0"><span class="q3TqCc">Nhà Riêng</span></div>
                  <div class="v_wxlL" role="radio" aria-checked="false" aria-disabled="false" tabindex="0"><span class="q3TqCc">Văn Phòng</span></div>
                </div>
              </div>-->
              <div class="NlC19f"><label class="_uXoWc UWv91s"><input class="sp7inB" checked type="checkbox" name="status" role="checkbox" aria-checked=""  aria-disabled="false">
                  <div class="H4iGzY ltxYiB "></div>Đặt làm địa chỉ mặc đinh
                </label></div>
            </div>
            <div class="Lr7eTF"><button class="zvyzwn Jp08En">Trở Lại</button><button type="submit" class="zvyzwn Dr0Xm6">Hoàn thành</button></div>
          </div>
        </form>
      </div>
    </div>
    <div class="EVQyHG"></div>
    </aside>`;

    var footer = document.querySelector('footer');
    footer.before(newDiv);

    var out = document.querySelector('.Jp08En');
    out.addEventListener('click', function(){

      newDiv.remove();
      window.history.back();

    });

    var address = document.querySelector('.Dr0Xm6');
    address.addEventListener('click', function(){debugger;

      $.ajax({ 
        url: "../user/account/address/",
        type: "POST",
        data: { action: 'add_address', names: document.getElementsByName('names')[0].value, phone: document.getElementsByName('phone')[0].value, address: document.getElementsByName('address')[0].value, status: document.getElementsByName('status')[0].value},
        success: function(sp) {debugger;
        },
        error: function() {
          debugger; 
          console.log("Có lỗi xảy ra trong khi gửi yêu cầu");
        }
      });

      location.reload();

    });
  
  
  }else{
        
        var newDiv = document.createElement("div");
    newDiv.innerHTML = `<div class="i1xLmh">
                        <div>
                            <div class="y0jyrJ">
                                <div class="PzGLCh">`+ jsonData.Names +` `+ jsonData.sdt +` </div>
                                <div class="a9c4OR">`+ jsonData.addres +`</div>
                                <div class="dIzOca">Mặc định</div>
                                <input type="hidden" class="form-control" name="adress"  value="`+jsonData.id+`">
                            </div>
                        </div>
                        <button class="VNkBIJ div-style">Thay đổi</button>
                    </div>`;
    var footer = document.querySelector('.hYgtuo');
    footer.appendChild(newDiv);
    
  }


  },
   error: function() {
       debugger; 
     console.log("Có lỗi xảy ra trong khi gửi yêu cầu");
   }
 }
 );

 const logout = document.querySelector('.reset-button-style');

logout.addEventListener('click', function(){
  
  window.location.href = '../login/logout.php';
});



</script>   
<?php
    include ("../views/footer.php");
?>