<?php
    include("../views/header_m.php");
?>
<div class="body-content">
	<div class="container">
		<div class="track-order-page">
			<div class="row">
				<div class="col-md-12"> 
                <h1>Thông tin kho sản phẩm</h1>
        <aside>
            <h2 class="heading-title">Loại sản phẩm</h2>
            <section class="content-header" id="form">
</section>
            <nav>
                <table class="table compare-table inner-top-vs">
                    <tr>
                        <th>Danh mục cha</th>
                        <th>Danh mục con</th>
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
            <a onclick="Add()"  class="btn-upper btn btn-primary checkout-page-button add">Thêm</a>
        </p> 
        <p class="last_paragraph">
            <a href="?action=xem_danh_muc_sp" class="btn-upper btn btn-primary checkout-page-button">Xem loại sản phẩm</a>
        </p>    
</div>			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div>
<script>

let newDiv = null;

$(document).ready(function() {
      var data = [
          
        <?php foreach ($categoryrelations as $categoryrelation) : ?>
        
               {id:<?php echo $categoryrelation['relation_id'];?>,name_cha:'<?php echo $categoryrelation['parent_Loai_sp'];?>',name_con:'<?php echo $categoryrelation['child_Loai_sp'];?>'} ,
                 
               <?php endforeach;?>
          
      ];
      
      debugger;
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
          `+ record.name_cha +`
                        </td>
                        <td>    
                        `+ record.name_con +`
                        <td>
                            <form action="." method="POST">
                                <input type="hidden" name="action" value="xoa_rt">
                                <input type="hidden" name="id" value="`+ record.id +`">
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

function Add() {
    

 
 if (newDiv !== null) {
           newDiv.remove();
    }

    newDiv = document.createElement("div");
  
  newDiv.innerHTML = `<section class="content">

     <!-- Default box -->
       <div class="card card-primary">
       <div class="card-header">
             <h3 class="card-title"><font style="vertical-align: inherit ;"><font style="vertical-align: inherit;">Thêm mối quan hệ danh mục</font></font></h3>

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
               <form action="." method="POST">
      
       <input type="hidden" class="form-control" name="action"  value="add_categoryrelation">
                
       <div class="row">
       <div class="col-sm-6">
                     <div class="form-group">
                       <label>Danh mục cha</label>
                        <select id="inputStatus" class="form-controls  custom-select" name="cha">
                        <?php foreach ($categoriess as $category) : ?>
                          <option value="<?php echo $category['ID_loai_sp'];?>"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $category['Loai_sp']; ?></font></font></option>
                    <?php endforeach;?>
                 <option selected="" value="0" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mời chọn danh mục sản phẩm</font></font></option>
               </select>
                     </div>
                   </div>
                   <div class="col-sm-6">
                     <div class="form-group">
                       <label>Danh mục con</label>
                       <select id="inputStatus" class="form-controls  custom-select" name="con">
                        <?php foreach ($categoriesss as $category) : ?>
                          <option value="<?php echo $category['ID_loai_sp'];?>"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $category['Loai_sp']; ?></font></font></option>
                    <?php endforeach;?>
                 <option selected="" value="0" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mời chọn danh mục sản phẩm</font></font></option>
               </select>
                     </div>
                   </div>
                 </div>
                    <div class="col-sm-6-left">

               <br>
           <ol class="float-sm-right">
              <button type="submit" class="btn btn-block btn-danger btn-sm">Thêm mới</button>
            
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



    
       

</script>
<?php
    include("../views/footer.php");
?>