<?php
   
   
    require ("../model/database.php");
    require("../model/cart.php");
    require("../model/product_db.php");
    require("../model/category_db.php");
    require("../model/wishtlist.php");


    ini_set('session.cookie_secure', 1);
    ini_set('session.cookie_httponly', 1);
    ini_set('session.cookie_lifetime', 0); // Hết hạn khi đóng trình duyệt
    ini_set('session.cookie_samesite', 'Strict');
    
    // Start the session after setting the ini settings
    session_start();
    
    // Tạo lại session ID sau mỗi đăng nhập thành công
    session_regenerate_id();
   
$cart_sl = 0;

    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
        if ($action == NULL) {
            $action = 'wishlist';
        }
    }

    if(isset($_SESSION['user']) && $_SESSION['user'] != null ){
        $user = $_SESSION['user'];
        $cart_sl = lay_sl_giohang($user['id']);
    }

    if($_SESSION['user'] == null){

        $a = array("text" => "Bạn chưa đăng nhập , vui lòng đăng nhập.", "title" => "Thông báo","type" => "info", "icon" => "fa-solid fa-circle-info");
        $_SESSION['a'] = $a;
        header("Location: ../login");
    
    }
    else if($action == 'wishlist'){
        
        $user = $_SESSION['user'];
        $wishlist = wish($user['id']);
        include ("wishlist.php");
    }
    elseif($action == 'add'){

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
    elseif($action == 'xoa'){
        
        $id = filter_input(INPUT_POST, 'id');
        if ($id == NULL || $id == FALSE ) {
            $a = array("text" => "Lỗi xác thực các thông tin .", "title" => "Lỗi","type" => "error", "icon" => "fa-solid fa-circle-exclamation"); 
        }
        else {
            xoa_w($id);
            $a = array("text" => "Đã xóa sản phẩm khỏi yêu thích.", "title" => "Thông báo","type" => "success", "icon" => "fa-solid fa-circle-check");
        }
        $_SESSION['a'] = $a;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    else if($action == "show_gio"){
        $id_sp= $_GET['id_sp'];
        $products = lay_sp_id_user($user['id'] ,$id_sp);
        $jsonData = json_encode($products);
          echo $jsonData;
        // print_r($products);
    
    }

?>