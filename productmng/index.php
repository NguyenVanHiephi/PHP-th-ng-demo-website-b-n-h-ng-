<?php

require("./model/database.php");
require("./model/category_db.php");
require("./model/product_db.php");
require("./model/cart.php");
require("./model/wishtlist.php");



ini_set('session.cookie_secure', 1);
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_lifetime', 0); // Hết hạn khi đóng trình duyệt
ini_set('session.cookie_samesite', 'Strict');

session_start();


// Tạo lại session ID sau mỗi đăng nhập thành công
session_regenerate_id();


$cart_sl = 0;

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'home';
    }
}

    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        $cart_sl = lay_sl_giohang($user['id']);
    }
    
    if($action == 'home'){
    $categories = danh_muc_san_pham();
    $products = lay_san_pham();
    $products_dt = lay_san_pham_categoryID(2);
    $products_lt = lay_san_pham_categoryID(1);
    $products_tl = lay_san_pham_categoryID(7);
    include ("home.php");
    }
    elseif ($action == 'add'){

        if (!isset($_SESSION['user'])) {
            
            header("Location: ./login");
            
        }
        $id_user = $_SESSION['user'];
        $id_sp = filter_input(INPUT_POST, 'id_sp');
        $sl = 1 ;
        $sp_data = lay_san_pham_productid($id_sp);
        $sp = lay_sp_id_user($id_user['id'] ,$id_sp);
        if ($id_sp == NULL || $id_sp == FALSE ) {
            $a = array("text" => "Lỗi xác thực các thông tin về sản phẩm.", "title" => "Lỗi","type" => "error", "icon" => "fa-solid fa-circle-exclamation"); 
        }
        else if($sp != null){
            $sl = $sp['sl'] + $sl ;
            $cart = sua_giohang($sp['id'],  $sl);
            $a = array("text" => "Đã thêm sản phẩm vào giỏ hàng.", "title" => "Thông báo","type" => "success", "icon" => "fa-solid fa-circle-check"); 
        }else {
            them_giohang($sp_data['ten_sp'], $sl, $sp_data['Gia_sp'], $sp_data['Images'], $sp_data['Nsx'] , $id_sp, $id_user['id']);
            $a = array("text" => "Đã thêm sản phẩm vào giỏ hàng.", "title" => "Thông báo","type" => "success", "icon" => "fa-solid fa-circle-check");
        }
        // $a = array("text" => "$sp", "title" => "Thông báo","type" => "success", "icon" => "fa-solid fa-circle-check");
        $_SESSION['a'] = $a;
         header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    elseif ($action == 'all'){
        include ("list_category.php");
    }
    elseif ($action == 'category'){
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        $category = ten_san_pham($id);
        $category_con = danh_muc_con_idcha($id);
        $products = lay_san_pham_categoryID($id);
        include ("category.php");
    }elseif ($action == 'wish'){

        if (!isset($_SESSION['user'])) {
            
            header("Location: ./login");
            
        }
        $id_user = $_SESSION['user'];
        $id_sp = filter_input(INPUT_POST, 'id_sp', FILTER_VALIDATE_INT);
        if ($id_sp == NULL || $id_sp == FALSE ) {
            $a = array("text" => "Lỗi xác thực các thông tin về sản phẩm.", "title" => "Lỗi","type" => "error", "icon" => "fa-solid fa-circle-exclamation"); 
        }
        else{
            $results = wish_id_sp($id_user['id'] , $id_sp);
            if (count($results) > 0) {
                $a = array("text" => "Sản phẩm đã có trong danh sách yêu thích.", "title" => "Thông báo","type" => "info", "icon" => "fa-solid fa-circle-info");         
            } else {
                them_w( $id_sp, $id_user['id']);
                $a = array("text" => "Đã thêm sản phẩm vào danh sách yêu thích.", "title" => "Thông báo","type" => "success", "icon" => "fa-solid fa-circle-check");         
            }
        }
        $_SESSION['a'] = $a;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }


?>