<?php
// Tạo một biến $action để nhận thông tin yêu cầu từ trình duyệt web
// Các yêu có thể nhận được: 1. Xem giao diện danh mục sp
// 2. Xem giao diện về thông tin chi tiết của sản phẩm
// Dựa vào 2 yêu cầu trên để lấy data từ lớp model để tạo view

// Kiểm tra thông tin biến $action
// Nếu $action == NULL; set $action = 'xem_san_pham'
require("../model/database.php");
require("../model/category_db.php");
require("../model/product_db.php");
require("../model/cart.php");

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

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'xem_san_pham';
    }
}
if ($action == 'xem_san_pham') {
 // Gọi hàm lấy danh mục loại sản phẩm
 // Gọi hàm lấy tên sản phẩm được chọn
 // Gọi hàm lấy các sản phẩm được chọn theo tên loại sản phẩm
 // Xác thực mã ID của loại sản phẩm
    $category_id = filter_input(INPUT_GET, 'category_id', FILTER_VALIDATE_INT);
    if ($category_id == NULL || $category_id == FALSE) {
        $category_id = 1;    
    } 
    if(isset($_SESSION['user']) && $_SESSION['user'] != null ){
        $user = $_SESSION['user'];
        $categories = danh_muc_san_pham();
    $category_name = ten_san_pham($category_id);
    $products = lay_san_pham_categoryID($category_id);
    include("product_list.php");
    }else{
        header("Location: ../login");
    }

} elseif ($action == 'chi_tiet_sp') {
 // Nếu nhận được yêu cầu từ trình duyệt gửi tới là xem chi tiết sản phẩm
 // Gọi hàm lấy tên sản phẩm được chọn
 // Gọi hàm lấy tên danh mục loại sản phẩm
 // Gọi hàm lấy thông tin sản phẩm
 // Xác thực mã ID của sản phẩm 
    $product_id = filter_input(INPUT_GET, 'product_id', FILTER_VALIDATE_INT);
    if ($product_id == NULL || $product_id == FALSE) {

        $error = 'Lỗi xác thực mã ID sản phẩm được lựa chọn';
        include("../errors/error.php");

    } else {

        $categories = danh_muc_san_pham();
        $product = lay_san_pham_productid($product_id);
        $anhs = lay_anh_spid($product_id);
        if (isset($_SESSION['user'])) {
			$user = $_SESSION['user'];
            $cart_sl = lay_sl_giohang($user['id']);
		}

        // Lấy thông tin chi tiết về sản phẩm
       
        include("product_view.php");
    } 
    
}  elseif($action == 'add'){

    if (!isset($_SESSION['user'])) {
        
        header("Location: ../login");
        
    }
    $id_user = $_SESSION['user'];
    $id_sp = filter_input(INPUT_POST, 'id_sp');
    $sl = filter_input(INPUT_POST, 'sl');
    $sp_data = lay_san_pham_productid($id_sp);
    $sp = lay_sp_id_user($id_user['id'] ,$id_sp);
    if ($id_sp == NULL || $id_sp == FALSE || $sl == NULL || $sl == FALSE) {
        $a = array("text" => "Lỗi xác thực các thông tin về sản phẩm.", "title" => "Lỗi","type" => "error", "icon" => "fa-solid fa-circle-exclamation"); 
    }
    else if($sp != null){
        $sl = $sp['sl'] + $sl ;
        $cart = sua_giohang($sp['id'],  $sl);
        $a = array("text" => "Đã thêm sản phẩm vào giỏ hàng.", "title" => "Thông báo","type" => "success", "icon" => "fa-solid fa-circle-check"); 
    }else {
        them_giohang($sp_data['ten_sp'], $sl, $sp_data['Gia_sp'], $sp_data['Images'], $id_sp, $id_user['id']);
        $a = array("text" => "Đã thêm sản phẩm vào giỏ hàng.", "title" => "Thông báo","type" => "success", "icon" => "fa-solid fa-circle-check");
    }
    // $a = array("text" => "$sp", "title" => "Thông báo","type" => "success", "icon" => "fa-solid fa-circle-check");
    $_SESSION['a'] = $a;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

?>