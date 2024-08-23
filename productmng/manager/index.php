<?php
// Tạo biến $action nhận các yêu cầu từ trình duyệt web
// Các yêu cầu có thể nhận: xem thông tin sản phầm; xoá sản phẩm; xem bảng thêm sp; thêm sản phẩm

// $action khi lần đầu ứng dụng được gọi
require ("../model/database.php");
require ("../model/category_db.php");
require ("../model/product_db.php");
require ("../model/ncc.php");
require ("../model/img.php");
require ("../model/classify.php");
require("../model/cart.php");
require("../model/tk.php");

ini_set('session.cookie_secure', 1);
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_lifetime', 0); // Hết hạn khi đóng trình duyệt
ini_set('session.cookie_samesite', 'Strict');

// Start the session after setting the ini settings
session_start();

// Tạo lại session ID sau mỗi đăng nhập thành công
session_regenerate_id();

$cart_sl = 0;
$total = 0;

// lấy thông tin tk nếu có
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $cart_sl = lay_sl_giohang($user['id']);
}


$action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
        if ($action == NULL) {
            $action = 'xem_san_pham';
        }
    }

// dk với các TH tk
if($_SESSION['user'] == null){

        $a = array("text" => "Bạn chưa đăng nhập , vui lòng đăng nhập.", "title" => "Thông báo","type" => "info", "icon" => "fa-solid fa-circle-info");
        $_SESSION['a'] = $a;
        header("Location: ../login");
    
}
elseif($user['roles'] != '0'){

    $a = array("text" => "Tài khoản này không có quyền truy cập.", "title" => "Thông báo","type" => "info", "icon" => "fa-solid fa-circle-info");
    $_SESSION['a'] = $a;
    header("Location: ../login");
  

}
// Nếu nhận yêu cầu từ trình duyệt là xem sản phẩm
elseif ($action == 'xem_san_pham' && $user['roles'] == '0') {
    $category_id = filter_input(INPUT_GET, 'category_id', FILTER_VALIDATE_INT);
    if ($category_id == NULL || $category_id == FALSE) {
        $category_id = 1;
    }
    if(isset($_SESSION['user']) && $_SESSION['user'] != null ){
        $user = $_SESSION['user'];
        $category_name = ten_san_pham($category_id);
        $categories = danh_muc_san_pham();
        $categoriess = alldanhmuc();
        $nccs = lay_ncc_sp();
        $products = lay_san_pham_categoryID($category_id);
        include ("products_list.php");
    }else{
        header("Location: ../login");
    }

}

// thêm sp
elseif ($action == 'them_san_pham') {
    $category_id = isset($_POST['loai']) ? filter_var($_POST['loai'], FILTER_VALIDATE_INT) : '';
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $gia = isset($_POST['gia']) ? filter_var($_POST['gia'], FILTER_VALIDATE_FLOAT) : '';
    $nsx = isset($_POST['nsx']) ? filter_var($_POST['nsx'], FILTER_VALIDATE_INT) : '';
    $image = isset($_POST['anh']) ? htmlspecialchars($_POST['anh']) : '';

    if (san_pham($category_id , $name , $gia , $nsx , $image)!="không") {
        $text = san_pham($category_id , $name , $gia , $nsx , $image);
        $a = array("text" => $text, "title" => "Lỗi","type" => "error", "icon" => "fa-solid fa-circle-exclamation");
    } else { 
        them_san_pham( $name,$category_id, $gia, $nsx);
        $id = lay_idsp_new();
        luu_anhs($image, $name , $id['ID_sp']);
        $a = array("text" => "Đã thêm mới sản phẩm.", "title" => "Thông báo","type" => "success", "icon" => "fa-solid fa-circle-check");
    }
    $_SESSION['a'] = $a;
    header("Location: .?category_id=$category_id");
}

// xem danh mục sp
elseif ($action == 'xem_danh_muc_sp') {
    $categories = alldanhmuc();
    include("category_list.php");

} 
// xóa loại sp
elseif ($action == 'xoa_loai_sp') {
    $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
    if ($category_id == NULL || $category_id == FALSE) {
        $a = array("text" => "Lỗi xác thực các thông tin về sản phẩm.", "title" => "Lỗi","type" => "error", "icon" => "fa-solid fa-circle-exclamation");
    } else {
        xoa_loai_sp($category_id);
        $a = array("text" => "Đã xóa loại sản phẩm", "title" => "Thông báo","type" => "success", "icon" => "fa-solid fa-circle-check");
        
    }   
    $_SESSION['a'] = $a;
    header("Location: .?action=xem_danh_muc_sp");
    
} 
// thêm loại sp
elseif ($action == 'them_loai_sp') {
    $name = filter_input(INPUT_POST, 'name');
    $image = filter_input(INPUT_POST, 'anh');
    if ($name == null) {
         $a = array("text" => "Lỗi xác thực các thông tin về sản phẩm.", "title" => "Lỗi","type" => "error", "icon" => "fa-solid fa-circle-exclamation");
    }else{
        if($image != null){
        $type_file = type_img($image);
        $name_file = uniqid(str_replace(" ", "_", $name)).$type_file;
        $i = saveimg($image, $name_file);
        }else{
            $image = "";
        }
    them_loai_sp($name,$image);
    $a = array("text" => "Đã thêm mới loại sản phẩm.", "title" => "Thông báo","type" => "success", "icon" => "fa-solid fa-circle-check");
    }
    $_SESSION['a'] = $a;
    header("Location: .?action=xem_danh_muc_sp");
}
// lấy dữ liệu d sp
else if($action == "show_sp"){
    $product_id= $_GET['product_id'];
    $products = lay_san_pham_productid($product_id);
    $product_anh = lay_anh_spid($product_id);
    
    $products['Images'] = $product_anh; // or another logic to match products with images

    // Step 2: Encode the updated $products array to JSON
    $jsonData = json_encode($products);
    // Output the JSON data
    echo $jsonData;
}
// update sp
elseif ($action == 'sua_san_pham') {
    $product_id = isset($_POST['id']) ? filter_var($_POST['id'], FILTER_VALIDATE_INT) : '';
        $category_id = isset($_POST['loai']) ? filter_var($_POST['loai'], FILTER_VALIDATE_INT) : '';
        $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
        $gia = isset($_POST['gia']) ? filter_var($_POST['gia'], FILTER_VALIDATE_FLOAT) : '';
        $nsx = isset($_POST['nsx']) ? filter_var($_POST['nsx'], FILTER_VALIDATE_INT) : '';
        $image = isset($_POST['anh']) ? htmlspecialchars($_POST['anh']) : '';
        if ($product_id == NULL || $product_id == "" || san_pham($category_id , $name , $gia , $nsx , $image)!="không") {
            if(san_pham($category_id , $name , $gia , $nsx , $image)!="không"){
                $text = san_pham($category_id , $name , $gia , $nsx , $image);
            $a = array("text" => $text , "title" => "Lỗi","type" => "error", "icon" => "fa-solid fa-circle-exclamation");
            }else{
                $a = array("text" => "Lỗi id của sản phẩm.", "title" => "Lỗi","type" => "error", "icon" => "fa-solid fa-circle-exclamation");
            }
        } else {
            xoa_anhs($product_id);
            xoa_anh_sp($product_id);
            if($image!=NULL){
                
                luu_anhs( $image , $name , $product_id);

            }
            
            sua_san_pham($product_id, $name,$category_id, $gia, $nsx);
            $a = array("text" => "Đã chỉnh sửa sản phẩm", "title" => "Thông báo","type" => "success", "icon" => "fa-solid fa-circle-check");
            // $a = array("text" => "Đã chỉnh sửa sản phẩm", "title" => "Thông báo","type" => "warning", "icon" => "fa-solid fa-triangle-exclamation");
            // $a = array("text" => "Đã chỉnh sửa sản phẩm", "title" => "Thông báo","type" => "info", "icon" => "fa-solid fa-circle-info");
            
        }
        $_SESSION['a'] = $a;
        header("Location: .?category_id=$category_id");
} 
// xóa sp
elseif ($action == 'xoa') {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
        if ($category_id == NULL || $category_id == FALSE || $id == NULL 
        || $id == FALSE ) {
            $a = array("text" => "Lỗi xác thực các thông tin về sản phẩm.", "title" => "Lỗi","type" => "error", "icon" => "fa-solid fa-circle-exclamation");
        } else {

            xoa_anhs($id);
            $xoa_anh = xoa_anh_sp($id);
            xoa_san_pham($id);
            $a = array("text" => "Đã xóa sản phẩm thành công.", "title" => "Thông báo","type" => "success", "icon" => "fa-solid fa-circle-check");
        
        }
        $_SESSION['a'] = $a;
        header("Location: .?category_id=$category_id");
}
// mối qh giữa các dm
elseif($action == 'qh_dm'){
    $categoriess = alldanhmuc();
    $categoriesss = alldanhmuc();
    $categoryrelations = allcategoryrelations();
    include ("categoryrelations.php");

}
// thêm mối qh giữa các dm
elseif($action == "add_categoryrelation"){
    $id_cha = filter_input(INPUT_POST, 'cha', FILTER_VALIDATE_INT);
    $id_con = filter_input(INPUT_POST, 'con', FILTER_VALIDATE_INT);
    if ($id_cha == NULL || $id_cha == FALSE || $id_con == NULL || $id_con == FALSE ) {
        $a = array("text" => "Lỗi xác thực các id danh mục.", "title" => "Lỗi","type" => "error", "icon" => "fa-solid fa-circle-exclamation");
    } else {
    them_qh_sp($id_cha , $id_con);
    $a = array("text" => "Đã thêm quan hệ danh mục thành công.", "title" => "Thông báo","type" => "success", "icon" => "fa-solid fa-circle-check");
        
    }
    $_SESSION['a'] = $a;
    header("Location: .?action=qh_dm");
}
// xóa mối qh giữa các dm
elseif($action == "xoa_rt"){
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    if ($id == NULL || $id == FALSE ) {
        $a = array("text" => "Lỗi xác thực id của bảng.", "title" => "Lỗi","type" => "error", "icon" => "fa-solid fa-circle-exclamation");
    } else {
        xoa_rt_dm($id);
        $a = array("text" => "Đã xóa quan hệ danh mục thành công.", "title" => "Thông báo","type" => "success", "icon" => "fa-solid fa-circle-check");
        
    }
    $_SESSION['a'] = $a;
    header("Location: .?action=qh_dm");

}
// danh mục đơn hàng của khách
elseif($action == "dh"){
    $dhs = all_donhang();
    include ("order.php");
}
// cập nhật lại trạng thái đơn hàng
elseif($action == "up_dh"){
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    $status = filter_input(INPUT_POST, 'status');
    $up =  up_dh($id , $status);
    header("Location: .?action=dh");
}
// xem thông tin chi tiết đơn hàng
elseif($action == "ct_dh"){
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $dh = lay_donhang_id($id);
    $statuss = all_dh_status_id($id);
    $ten_ncc = lay_ten_ncc($dh['id_ncc']);
    $sp = lay_san_pham_productid($dh['id_sp']);
    $addres = lay_address_id($dh['id_address']);

    include ("order_ct.php");
}
// elseif ($action == 'classify' && $user['roles'] == '0') {
        
//         $list_classify =  lay_classify();
//         $products = lay_san_pham();
        
//         include ("classify_list.php");
// }
// elseif ($action == 'iae_classify') {
        
//         $id_sp = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
//         $size = filter_input(INPUT_POST, 'loai', FILTER_VALIDATE_INT);
//         $color = filter_input(INPUT_POST, 'name');
//         $gia = filter_input(INPUT_POST, 'gia', FILTER_VALIDATE_FLOAT);
//         $sl = filter_input(INPUT_POST, 'nsx');
//         $image = filter_input(INPUT_POST, 'anh');
//         if ($category_id == NULL || $category_id == FALSE || $name == NULL 
//         || $gia == NULL || $gia == FALSE || $nsx == NULL ) {
//             $a = array("text" => "Lỗi xác thực các thông tin về sản phẩm.", "title" => "Lỗi","type" => "error", "icon" => "fa-solid fa-circle-exclamation");
//         } else {
//             $products = lay_san_pham_productid($id_sp);
//             $name_file = $products['Images'];
//             if($image!=NULL){
//                 $type_file = type_img($image);
//                 $namefile = str_replace(" ", "_", $name);
//                 $name_file = 'images/'.$namefile.$type_file;
//                 $i = saveimg($image, $name_file);
//             }
            
//             $a = array("text" => "Thành công", "title" => "Thông báo","type" => "success", "icon" => "fa-solid fa-circle-check");
//             // $a = array("text" => "Đã chỉnh sửa sản phẩm", "title" => "Thông báo","type" => "warning", "icon" => "fa-solid fa-triangle-exclamation");
//             // $a = array("text" => "Đã chỉnh sửa sản phẩm", "title" => "Thông báo","type" => "info", "icon" => "fa-solid fa-circle-info");
            
//         }
//         $_SESSION['a'] = $a;
//         include ("classify_list.php");
// }


    // các báo lỗi khi nhập sản phẩm 
    function san_pham($loai , $name , $gia , $nsx , $anh){

        $a = "không";
        if($loai == NULL || $loai == "" || $loai == 0){

            if($loai == 0){
            $a = "Bạn cần chọn loại sản phẩm";    
            }else{
            $a = "Đã có lỗi khi chọn loại sản phẩm";
            }

        }elseif($name == NULL || $name == ""){

            $a = "Đã có lỗi khi nhập tên sản phẩm";

        }elseif($gia == NULL || $gia == ""){
            
            $a = "Đã có lỗi khi nhập giá sản phẩm";

        }elseif($nsx == NULL || $nsx == "" || $nsx == 0){

            if($nsx == 0){
                $a = "Bạn cần chọn nhà cung cấp sản phẩm";    
                }else{
            $a = "Đã có lỗi khi chọn nhà cung cấp sản phẩm";
                }
        }elseif($anh == NULL || $anh == ""){

            $a = "Đã có lỗi khi lấy ảnh sản phẩm";

        }
        return $a;

    }
    
    // lưu ảnh cho sản phẩm 
    function luu_anhs($base64String , $name , $id_sp){

        // Split the concatenated base64 string into individual image data
        $imageDataArray =  explode('data:image/', $base64String);

        // Xóa phần tử rỗng đầu tiên nếu có
        if (empty($imageDataArray[0])) {
            array_shift($imageDataArray);
        }

        foreach ($imageDataArray as $key => $value) {
            $imageDataArray[$key] = 'data:image/' . $value;
            $type_file = type_img($imageDataArray[$key]);
            $name_anh  = preg_replace("/[^a-zA-Z0-9.]/", "", $name);
            $namefile = uniqid(str_replace(" ", "_", $name_anh));
            $name_file = 'images/'.$namefile.$type_file;
            $i = saveimg($value, $name_file);
            add_anh_sp($id_sp , $name_file);
        }


    }

    // xóa ảnh sản phẩm ở du
    function xoa_anhs($id){
        
        $imgs = lay_anh_spid($id);
        foreach ($imgs as $img) {
        
            del_img($img['Images']);

        }

    }
?>