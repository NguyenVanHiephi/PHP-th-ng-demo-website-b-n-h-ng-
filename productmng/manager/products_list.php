<?php
    include ("../views/header_m.php");
?>


<div class="body-content">
	<div class="container">
		<div class="track-order-page">
			<div class="row">
				<div class="col-md-12"> 
                <h1 >Thông tin kho sản phẩm</h1>
    <aside>
            <h2 class="heading-title">Loại sản phẩm</h2>
            <nav>
                <ul>
                    <?php foreach ($categories as $category) : ?>
                    <li>
                        <a href="?category_id=<?php echo $category['ID_loai_sp'];?>">
                        <?php echo $category['Loai_sp']; ?>
                        </a>
                    </li>
                    <?php endforeach;?>
                </ul>
            </nav>
        </aside>
        <section>
        <h2 class="heading-title">
            <?php echo $category_name; ?>
        </h2>
        <section class="content-header" id="form">
</section>
        <table class="table compare-table inner-top-vs" id="myTable">
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Nhà sản xuất</th>
                    <th>Giá sản phẩm</th>
                    <th>Ảnh</th>
                    <th>&nbsp;</th>
                </tr>
                <tbody id="dataBody">
                 
                 
                 </tbody>
                
            </table>
            <ul class="pagination" id="pagination" >
      <!-- Nút phân trang sẽ được thêm vào đây bằng JavaScript -->


       
    </section>
</div>			</div><!-- /.row -->
<p class="last_paragraph">
            <a onclick="Add('add','0')" class="btn-upper btn btn-primary checkout-page-button add">Thêm sản phẩm</a>
        </p>
        <p class="last_paragraph">
            <a href="?action=xem_danh_muc_sp" class="btn-upper btn btn-primary checkout-page-button">Thêm loại sản phẩm</a>
        </p>
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div>
<script>

let newDiv = null;

$(document).ready(function() {
      var data = [
          
        <?php foreach ($products as $product) : ?>
        
               {id:<?php echo $product['ID_sp'];?>,name:'<?php echo $product['ten_sp'];?>',loai_sp:'<?php echo $product['ID_loai_sp'];?>',gia:<?php echo $product['Gia_sp'];?>,img:'<?php echo $product['Images'];?>',nsx:'<?php echo $product['Nsx'];?>'} ,
                 
               <?php endforeach;?>
          
      ];
      
      
       var input = document.getElementById("searchInput");
var table = document.getElementById("myTable");

// input.addEventListener("keyup", function() {
//   var filter = input.value.toUpperCase();
//   debugger;
//    const results = data.filter(item => {
//   return (
//     item.name.toLowerCase().includes(filter.toLowerCase()) || // Tìm kiếm theo thuộc tính 'name'
//     item.id.toString().includes(filter)  // Tìm kiếm theo thuộc tính 'age'
//      || // Tìm kiếm theo thuộc tính 'name'
//     item.gia.toString().includes(filter) 
//      || // Tìm kiếm theo thuộc tính 'name'
//     item.nsx.toLowerCase().includes(filter.toLowerCase())
//   );
// });
  
  
//   displayData(results);
//       renderPagination(results);
// }); 
     
     


    
      debugger;
      var recordsPerPage = 3;
      var currentPage = 1;
      
      function displayData(datas) {
        var startIndex = (currentPage - 1) * recordsPerPage;
        var endIndex = startIndex + recordsPerPage;
        var currentData = datas.slice(startIndex, endIndex);
      
        var tableBody = $("#dataBody");
        tableBody.empty();
      
        $.each(currentData, function(index, record) {
            
          
          var row = $("<tr>");
          row.html(` <td>`+ record.name +`</td>
                    <td>`+ record.nsx +`</td>
                    <td>`+ record.gia +`</td>
                    <td>    <div class="product_image">
			<img width="200px" display: inline-block; src="../`+ record.img +`" alt="">
                         </div></td>
                    <td>
                    
                            <input onclick="Add('up','`+ record.id +`')" class="btn-upper btn btn-primary checkout-page-button" type="submit" value="Sửa SP">
                            <br>
                        <br>
                        <form action="." method="POST">
                            <input type="hidden" name="action" value="xoa">
                            <input type="hidden" name="category_id" value="`+ record.loai_sp +`">
                            <input type="hidden" name="id" value="`+ record.id +`">
                         
                            <input class="btn-upper btn btn-primary checkout-page-button" type="submit" style="background:red;" value="Xoá SP">
                        </form>
                    </td>`);debugger;
          tableBody.append(row);
        });
      }
      
      function renderPagination(datas) {
        var totalPages = Math.ceil(datas.length / recordsPerPage);
        var pagination = $("#pagination");
        pagination.empty();
      
        for (var i = 1; i <= totalPages; i++) {
          var button = $("<li>");
          button.addClass("page-item");
          button.html("<a class='page-link' href='javascript:void(0);'>" + i + "</a>");
          button.on("click", function() {
            currentPage = parseInt($(this).text());
            displayData(datas);
          });
          pagination.append(button);
        }
      }
      
      displayData(data);
      renderPagination(data);
    });

function Add(sk,i) {
    
     
    let name_form = '' ;
    let action_form = '';
    let id_sp = '' ;
    let name_sp = '' ;
    let type_sp = '' ;
    let gia_sp = '' ;
    let nsx = '' ;
    let img_sp = '' ;
    let bt = '' ;
    let select ='selected=""';
    
 
 if (newDiv !== null) {
           newDiv.remove();
       }
 debugger;
 if(sk==='add'){
     
     var add = document.querySelector(".add");
     add.style.display = "none";
     name_form='Form thêm mới sản phẩm ';
     action_form = 'them_san_pham';
     bt = 'Thêm' ;
     
 }else if(sk==='up'){
     
     name_form ='Form chỉnh sửa sản phẩm ';
     action_form = 'sua_san_pham';
     bt = 'Sửa' ;
     select ='';
 }
 
 
 // tạo nội dung cần thiết
  newDiv = document.createElement("div");
  var url = "index.php";

 $.ajax({
   url: url,
   type: "GET",
   data: { action: 'show_sp' , product_id: i},
   success: function(sp) {debugger;
    var jsonData = JSON.parse(sp);
if(sp!=='{"Images":[]}'){
     id_sp= jsonData.ID_sp;
     name_sp = jsonData.ten_sp;
     type_sp =  jsonData.ID_loai_sp;
     gia_sp =  jsonData.Gia_sp;
     nsx =  jsonData.Nsx;
     img_sp =  jsonData.Images;
     
 }
     debugger; 

     let imgHtml = '';

      // Always create three image elements, using placeholders or empty strings if data is missing
      for (let i = 0; i < 3; i++) {
          let imageSrc = img_sp[i] && img_sp[i].Images ? `../${img_sp[i].Images}` : ''; // Use a default path if needed

          imgHtml += `
              <div class="product-image">
                  <div class="image">
                      <img id="image${i}" src="${imageSrc}" alt="">
                  </div>
              </div>
          `;
      }
      
  
  newDiv.innerHTML = `<section class="content">

     <!-- Default box -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title"><font style="vertical-align: inherit ;"><font style="vertical-align: inherit;">`+name_form+`</font></font></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Sụp đổ">
              <i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" onclick="bt_add()" data-card-widget="remove" title="Di dời">
              <i class="fa fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <form action="index.php" method="POST">
            <input type="hidden" class="form-control" name="id"  value="`+id_sp+`">
            <input type="hidden" class="form-control" name="action"  value="`+action_form+`">
              <div class="row">
                <div class="col-sm-6">
                     <!-- text input -->
                  <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter ..." value="`+name_sp+`">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Loại sản phẩm</label>
                    <select id="inputStatus" class="form-controls  custom-select" name="loai">
                        <?php foreach ($categoriess as $category) : ?>
                      <option value="<?php echo $category['ID_loai_sp'];?>" <?php echo ($category['ID_loai_sp'] == "") ? 'selected' : ''; ?>><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $category['Loai_sp']; ?></font></font></option>
                    <?php endforeach;?>
                      <option `+select+` value="0" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mời chọn loại sản phẩm</font></font></option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                     <!-- textarea -->
                  <div class="form-group">
                    <label>Giá sản phẩm</label>
                    <input type="text" class="form-control" name="gia" placeholder="Enter ..." value="`+gia_sp+`" >
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nhà sản xuất</label>
                    <select id="inputStatuss" class="form-controls  custom-select" name="nsx">
                        <?php foreach ($nccs as $ncc) : ?>
                      <option value="<?php echo $ncc['ID_Ncc'];?>"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $ncc['Ten_Ncc']; ?></font></font></option>
                    <?php endforeach;?>
                      <option `+select+` value="0" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mời chọn nhà cung cấp</font></font></option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                     <!-- textarea -->
                  <div class="form-group">
                    <label>Chọn ảnh cho sản phẩm</label>
                    <input type="hidden" name="imageData" id="imageData">
                    <input type="file"  style="display:block;" multiple="" name="image" id="imageFile" onchange="chooseFile(this)" accept="image/gif, image/jpeg, image/png, image/webp" >
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="hidden"  value="" id="anh"  name="anh">
                        ${imgHtml}
                        </div>
                      </div>
                      <label>Ảnh minh họa cho sản phẩm</label>
                    </div>  
                    <div class="col-sm-6-left">
                <br>
                  <ol class="float-sm-right">
                    <button type="submit" class="btn btn-block btn-danger btn-sm">`+bt+`</button> 
                  </ol>
                </div>    
                  </div>
                </div>          
              </div>
          </form>
        </div>
       <!-- /.card-body -->
     </div>
     <!-- /.card -->

   </section>`;
       debugger;
       // Đè thẻ div mới lên thẻ div cũ 
var oldDiv = document.getElementById("form");
oldDiv.appendChild(newDiv);
if(type_sp!==''){
document.getElementById('inputStatus').value = type_sp ;
}
if(nsx!==''){
Array.from(document.getElementById('inputStatuss').options).find(option => option.text === nsx).selected = true;
}
        },
   error: function() {
       debugger; 
     console.log("Có lỗi xảy ra trong khi gửi yêu cầu");
   }
 }
 );
      

 
 }

function bt_add(){
   
    var add = document.querySelector(".add");
     add.style.display = "";
   
}


function chooseFile(fileInput){
          var image = document.getElementById("anh");
          document.getElementById('image0').src = "";
    document.getElementById('image1').src = "";
    document.getElementById('image2').src = "";
          debugger;
          if(fileInput.files && fileInput.files[0] ){
              var reader = new FileReader();
              
              reader.onload = function(e) {
                  $('#image0').attr('src',e.target.result);
                  var imageData = e.target.result;
                   image.value = image.value + imageData;
              }
              reader.readAsDataURL(fileInput.files[0]);
          }
          if(fileInput.files && fileInput.files[1]){
              var reader = new FileReader();
              
              reader.onload = function(e) {
                  $('#image1').attr('src',e.target.result);
                  var imageData = e.target.result;
                   image.value = image.value + imageData;
              }
              reader.readAsDataURL(fileInput.files[1]);
          }
          if(fileInput.files && fileInput.files[2] ){
              var reader = new FileReader();
              
              reader.onload = function(e) {
                  $('#image2').attr('src',e.target.result);
                  var imageData = e.target.result;
                   image.value = image.value + imageData;
              }
              reader.readAsDataURL(fileInput.files[2]);
          }
  }
      
      function encodeImageFileAsURL(element) {
        var file = element.files[0];
        var reader = new FileReader();
        reader.onloadend = function() {
            document.getElementById("imageData").value = reader.result;
        }
        reader.readAsDataURL(file);
    }
      
     
       

</script>
<?php
    include ("../views/footer.php");
?>