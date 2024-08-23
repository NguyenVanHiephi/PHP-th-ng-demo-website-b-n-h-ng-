<?php
    include("../views/header.php");
?>
<div class="body-content">
	<div class="container">
		<div class="track-order-page">
			<div class="row">
				<div class="col-md-12"> 
                <h1>Kho sản phẩm</h1>
        <aside>
            <h2 class="heading-title">Loại sản phẩm</h2>
            <section class="content-header" id="form">
</section>
            <nav>
                <table class="table compare-table inner-top-vs">
                    <tr>
                        <th>Tên SP</th>
                        <th>Màu</th>
                        <th>Size</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Ảnh</th>
                         <th>Người tạo</th>
                        <th>Thời gian tạo</th>
                        <th>Người cập nhật</th>
                        <th>Thời gian cập nhật</th>
                        <th>&nbsp;</th>
                    </tr>
                    <tbody id="dataBody">
                 
                 
                 </tbody>
              
                </table>
                <ul class="pagination" id="pagination" >
      <!-- Nút phân trang sẽ được thêm vào đây bằng JavaScript -->
            </nav>
        </aside>
        

        <br>
        <p class="last_paragraph">
            <a onclick="Add('add','0')"  class="btn-upper btn btn-primary checkout-page-button add">Nhập or Xuất</a>
        </p> 
          
</div>			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div>

<br>


<div class="body-content">
	<div class="container">
		<div class="track-order-page">
			<div class="row">
				<div class="col-md-12"> 
                <h1>Các yêu cầu của kho hàng</h1>
                <aside>
            <h2 class="heading-title">Các yêu cầu của kho hàng</h2>
            <section class="content-header" id="form">
</section>
            <nav>
                <table class="table compare-table inner-top-vs">
                    <tr>
                        <th>Tên SP</th>
                        <th>Màu</th>
                        <th>Size</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Ảnh</th>
                        <th>Thời gian</th>
                        <th>Tài Khoản</th>
                        <th>Hoạt động</th>
                        <th>&nbsp;</th>
                    </tr>
                    <tbody id="dataBody_0">
                 
                 
                 </tbody>
              
                </table>
                <ul class="pagination" id="pagination" >
      <!-- Nút phân trang sẽ được thêm vào đây bằng JavaScript -->
            </nav>
        </aside>
        

       
        <!-- <p class="last_paragraph">
            <a onclick="Add('add','0')" class="btn-upper btn btn-primary checkout-page-button">Xuất</a>
        </p>     -->
</div>			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div>
<script>

let newDiv = null;



$(document).ready(function() {
  
      var data = [
          
        <?php foreach ($list_classify as $classify) : ?>
        
        {id:<?php echo $classify['id'];?>,name:'<?php echo $classify['Names'];?>',color:'<?php echo $classify['color'];?>',sizes:<?php echo $classify['sizes'];?>, gia:<?php echo $classify['gia'];?>,img:'<?php echo $classify['img'];?>',created_by:'<?php echo $classify['created_by'];?>',created_date:'<?php echo $classify['created_date'];?>',up_by:'<?php echo $classify['up_by'];?>',up_date:'<?php echo $classify['up_date'];?>'} ,
          
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
//     item.id.toString().includes(filter) || // Tìm kiếm theo thuộc tính 'id'
//     item.loai_sp.toLowerCase().includes(filter.toLowerCase()) // Tìm kiếm theo thuộc tính 'age'
//      || // Tìm kiếm theo thuộc tính 'name'
//     item.gia.toString().includes(filter) || // Tìm kiếm theo thuộc tính 'id'
//     item.img.toString().includes(filter.toLowerCase())
//      || // Tìm kiếm theo thuộc tính 'name'
//     item.img1.toLowerCase().includes(filter.toLowerCase()) || // Tìm kiếm theo thuộc tính 'id'
//     item.img2.toString().includes(filter.toLowerCase())
//      || // Tìm kiếm theo thuộc tính 'name'
//     item.mota.toLowerCase().includes(filter.toLowerCase())
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
          row.html(`   <td>
          `+ record.name +`
                        </td>
                         <td>
          `+ record.color +`
                        </td>
                         <td>
          `+ record.sizes +`
                        </td>
                         <td>
          `+ record.sl +`
                        </td>
                         <td>
          `+ record.gia +`
                        </td>
                        <td>    <div class="product_image">
			<img width="200px" display: inline-block; src="../`+ record.img +`" alt="">
                         </div></td>
                          <td>
          `+ record.created_by +`
                        </td>
                         <td>
          `+ record.created_date +`
                        </td>
                         <td>
          `+ record.up_by +`
                        </td>
                         <td>
          `+ record.up_date +`
                        </td>
                        <td>
                            <form action="." method="POST">
                                <input type="hidden" name="action" value="xoa_loai_sp">
                                <input type="hidden" name="category_id" value="`+ record.id +`">
                                <input type="submit" style="background:red;" class="btn-upper btn btn-primary checkout-page-button" value="Xoá">
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
    let id = '' ;
    let id_ncc = '' ;
    let name_sp = '' ;
    let gia_sp = '' ;
    let color = '' ;
    let sl = '' ;
    let img_sp = '' ;
    let bt = '' ;
    
 
 if (newDiv !== null) {
           newDiv.remove();
       }
 debugger;
 if(sk==='add'){
     
     var add = document.querySelector(".add");
     add.style.display = "none";
     name_form='Form nhập xuất sản phẩm của kho hàng';
     action_form = 'them_loai_sp';
     bt = 'Thêm' ;
     
 }
 
 
 // tạo nội dung cần thiết
  newDiv = document.createElement("div");
  var url = "index.php";


     debugger; 
  
  newDiv.innerHTML = `<section class="content">

     <!-- Default box -->
       <div class="card card-primary">
       <div class="card-header">
             <h3 class="card-title"><font style="vertical-align: inherit ;"><font style="vertical-align: inherit;">Form nhập xuất sản phẩm của kho hàng</font></font></h3>

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
                       <select id="inputStatus" data-placeholder="Chọn sản phẩm" class="form-controls custom-select"  name="ten" >
                       <option value="" style="display:none;">Lựa chọn một sản phẩm</option>
                       <?php foreach ($products as $product) : ?>
                          <option value="<?php echo $product['ID_sp'];?>" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $product['ten_sp'];?></font></font></option>
                          <?php endforeach;?>
               </select>
                     </div>
                   </div>
                   <div class="col-sm-6">
                     <!-- text input -->
                     <div class="form-group">
                       <label>Màu sản phẩm</label>
                       <input type="text" class="form-control" name="color" placeholder="Enter ..." value="`+name_sp+`">
                     </div>
                   </div>
                 </div>
                 <div class="row">
                   <div class="col-sm-6">
                     <!-- text input -->
                     <div class="form-group">
                       <label>Size sản phẩm</label>
                       <input type="text" class="form-control" name="size" placeholder="Enter ..." value="`+name_sp+`">
                     </div>
                   </div>
                   <div class="col-sm-6">
                     <!-- text input -->
                     <div class="form-group">
                       <label>Số lượng sản phẩm</label>
                       <input type="text" class="form-control" name="sl" placeholder="Enter ..." value="`+name_sp+`">
                     </div>
                   </div>
                 </div>
                   <div class="row">
                   <div class="col-sm-6">
                     <div class="form-group">
                       <label>Hành động</label>
                        <select id="inputStatus" class="form-controls custom-select" name="loai">
                          <option value="1" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhập</font></font></option>
                          <option value="0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xuất</font></font></option>
               </select>
                     </div>
                   </div>
                    <div class="col-sm-6">
                     <!-- text input -->
                     <div class="form-group">
                       <label>Giá sản phẩm</label>
                       <input type="text" class="form-control" name="gia" placeholder="Enter ..." value="`+name_sp+`">
                     </div>
                   </div>
                 </div>

                 <div class="row">
                   <div class="col-sm-6">
                     <!-- textarea -->
                     <div class="form-group">
                       <label>Chọn ảnh cho sản phẩm</label>
                   <input type="hidden" name="imageData" id="imageData">
                       <input type="file"  style="display:block;" multiple="" name="image" id="imageFile" onchange="chooseFile(this)" accept="image/gif, image/jpeg, image/png" >
                     </div>
                   </div>
                   <div class="col-sm-6">
                     <div class="form-group">
                        
                        <div class="product_image">
                       <input type="hidden"  value="" id="anh"  name="anh">
           <img style="max-width:518px;" id="image" class="image" display: inline-block; src="../`+img_sp+`" alt="">
                <br>
                <br>
                       <label>Ảnh minh họa cho sản phẩm</label>
                        </div>
                                
                     </div>
                   </div>
                 </div>
                    <div class="col-sm-6-left">

               <br>
           <ol class="float-sm-right">
              <button type="submit" class="btn btn-block btn-danger btn-sm">Xác nhận</button>
            
           </ol>
           
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



 }

function bt_add(){
   
    var add = document.querySelector(".add");
     add.style.display = "";
   
}

function chooseFile(fileInput){
          var image = document.getElementById("anh");
          debugger;
          if(fileInput.files && fileInput.files[0]){
              var reader = new FileReader();
              
              reader.onload = function(e) {
                  $('#image').attr('src',e.target.result);
                  var imageData = e.target.result;
                   image.value = imageData;
              }
              reader.readAsDataURL(fileInput.files[0]);
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
    include("../views/footer.php");
?>