<?php
// Tạo biến $action nhận các yêu cầu từ trình duyệt web
// Các yêu cầu có thể nhận: xem thông tin sản phầm; xoá sản phẩm; xem bảng thêm sp; thêm sản phẩm

// $action khi lần đầu ứng dụng được gọi
require ("../model/database.php");
require ("../model/ncc.php");

ini_set('session.cookie_secure', 1);
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_lifetime', 0); // Hết hạn khi đóng trình duyệt
ini_set('session.cookie_samesite', 'Strict');

// Start the session after setting the ini settings
session_start();

// Tạo lại session ID sau mỗi đăng nhập thành công
session_regenerate_id();

$total = 0;
$cart_sl = 0;


$action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
        if ($action == NULL) {
            $action = 'xem_ncc';
        }
    }
// Nếu nhận yêu cầu từ trình duyệt là xem sản phẩm
if ($action == 'xem_ncc') {
// Gọi các hàm liên quan lấy thông tin từ database
if(isset($_SESSION['user']) && $_SESSION['user'] != null ){
    $user = $_SESSION['user'];
    $nccs = lay_ncc();
    include ("ncc_list.php");
}else{
    header("Location: ../login");
}
   
}
 elseif ($action == 'xem_bang_them_ncc') {
// Nếu nhận yêu cầu từ trình duyệt là xem form thêm ncc
// Gọi hàm liên quan để lấy dữ liệu từ database và chuyển hướng tới form
    
    include ("ncc_add.php");
} elseif ($action == 'them_ncc') {
// Nếu nhận yêu cầu từ trình duyệt là thêm ncc
// Gọi hàm thêm ncc
$category_id = filter_input(INPUT_POST, 'dc');
$product_code = filter_input(INPUT_POST, 'name');
$product_name = filter_input(INPUT_POST, 'email');
$list_price = filter_input(INPUT_POST, 'sdt');
 
    if ($category_id == NULL ||  $product_code == NULL 
    || $product_name == NULL||  $list_price == NULL ) {
        $error = 'Lỗi xác thực các thông tin về nhà cung cấp';
        include ("../errors/error.php");
    } else {
        them_ncc( $product_code,$category_id, $product_name, $list_price );
        header("Location: .?action=xem_ncc");
    }
} 
else if($action == "show_ncc"){
    // show thông ncc cần sửa
    $product_id= $_GET['ncc_id'];
    $products = lay_ncc_id($product_id);
    include('ncc_update.php');
}
elseif ($action == 'sua_ncc') {
    // Lấy dữ liệu và thục hiện sửa ncc
    $product_id = filter_input(INPUT_POST, 'ncc_id', FILTER_VALIDATE_INT);
        $category_id = filter_input(INPUT_POST, 'dc');
        $product_code = filter_input(INPUT_POST, 'name');
        $product_name = filter_input(INPUT_POST, 'email');
        $list_price = filter_input(INPUT_POST, 'sdt');
        if ($category_id == NULL || $product_id == FALSE || $product_code == NULL 
        || $product_name == NULL || $product_id == NULL || $list_price == NULL ) {
            $error = 'Lỗi xác thực các thông tin về sản phẩm';
            include ("../errors/error.php");
        } else {
            sua_ncc($product_id, $product_code,$category_id, $product_name, $list_price);
            header("Location: .?action=xem_ncc");
        }
    } 
    elseif ($action == 'xoa_ncc') {
        // Lấy thông tin để xóa ncc
        $id = filter_input(INPUT_POST, 'ncc_id', FILTER_VALIDATE_INT);
       
        if ( $id == NULL 
        || $id == FALSE ) {
            $error = 'Lỗi xác thực các thông tin về sản phẩm';
            include ("../errors/error.php");
        } else {
            xoa_ncc($id);
            header("Location: .?action=xem_ncc");
        }
    }
?>