<?php
    include ("../views/header_m.php");
?>

<div class="body-content">
	<div class="container">
		<div class="track-order-page">
			<div class="row">
				<div class="col-md-12"> 
    <h1 class="heading-title">Thông tin tài khoản</h1>

    <section>
    <section class="content-header" id="form">
</section>
        <table class="table compare-table inner-top-vs">
                <tr>
                    <th>Tên tài khoản</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>&nbsp;</th>
                </tr>
                <?php foreach ($tks as $tk) : ?>
                <tr>
                    <td><?php echo $tk['Names'];?></td>
                    <td><?php echo $tk['Email'];?></td>
                    <td><?php echo $tk['sdt'];?></td>
                    <td>
                   
                        <form action="." method="POST">
                            <input type="hidden" name="action" value="xoa_tk">
                           
                            <input type="hidden" name="id" value="<?php echo $tk['id'];?>">
                         
                            <input type="submit" class="btn-upper btn btn-primary checkout-page-button" style="background:red;"  value="Xoá ">
                        </form>
                    </td>
                </tr>
                <?php endforeach;?>
            </table>
        <p class="last_paragraph">
            <a onclick="Add('add','0')" class="btn-upper btn btn-primary checkout-page-button add">Thêm mới tài khoản</a>
        </p>
    </section>
</div>			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div>

<script>

let newDiv = null;

function Add(sk,i) {
    
     
    let name_form = '' ;
    let action_form = '';
    let id = '' ;
    let name = '' ;
    let email = '' ;
    let pass = '' ;
    let role = '' ;
    let sdt = '' ;
    let bt = '' ;
    
 
 if (newDiv !== null) {
           newDiv.remove();
       }
 debugger;
 if(sk==='add'){
     
     var add = document.querySelector(".add");
     add.style.display = "none";
     name_form='Form thêm mới tài khoản ';
     action_form = 'add_tk';
     bt = 'Thêm' ;
     
 }
 
 // tạo nội dung cần thiết
  newDiv = document.createElement("div");
  var url = "index.php";

 

  
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
       <input type="hidden" class="form-control" name="id"  value="`+id+`">
       <input type="hidden" class="form-control" name="action"  value="`+action_form+`">
                 <div class="row">
                   <div class="col-sm-6">
                     <!-- text input -->
                     <div class="form-group">
                       <label>Tên tài khoản</label>
                       <input type="text" class="form-control" name="name" placeholder="Enter ..." value="`+name+`">
                     </div>
                   </div>
                   <div class="col-sm-6">
                     <div class="form-group">
                       <label>Email</label>
                       <input type="text" class="form-control" name="email" placeholder="Enter ..." value="`+email+`">
                     </div>
                   </div>
                 </div>
                 <div class="row">
                   <div class="col-sm-6">
                     <!-- textarea -->
                     <div class="form-group">
                       <label>Mật khẩu</label>
                       <input type="text" class="form-control" name="pass" placeholder="Enter ..." value="`+pass+`" >
                     </div>
                   </div>
                   <div class="col-sm-6">
                     <div class="form-group">
                       <label>Quyền</label>
                       <input type="text" class="form-control" name="role" placeholder="Enter ..." value="`+role+`" >
                     </div>
                   </div>
                 </div>
                   <div class="row">
                   <div class="col-sm-6">
                     <!-- textarea -->
                     <div class="form-group"> 
                     <label>Số điện thoại</label>
                     <input type="text" class="form-control" name="sdt" placeholder="Enter ..." value="`+sdt+`" >  
                      </div>
                   </div>
                   <div class="col-sm-6">
                     <div class="form-group">
                        
                       
                                
                     </div>
                   </div>
                 </div>

                    <div class="col-sm-6-left">

               <br>
           <ol class="float-sm-right">
              <button type="submit" class="btn btn-block btn-danger btn-sm">`+bt+`</button>
            
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
    include ("../views/footer.php");
?>