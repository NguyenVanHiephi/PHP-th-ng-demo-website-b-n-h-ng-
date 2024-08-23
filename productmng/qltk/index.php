<?php

require ("../model/database.php");
require ("../model/tk.php");
require("../model/cart.php");




session_start();
$cart_sl = 0;

    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        $cart_sl = lay_sl_giohang($user['id']);
    }

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'xem_tai_khoan';
    }
}
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
elseif ($action == 'xem_tai_khoan' && $user['roles'] == '0') {
   
    if(isset($_SESSION['user']) && $_SESSION['user'] != null ){
        $user = $_SESSION['user'];
        $tks = lay_thong_tin_tk();
        include("tk_list.php");
    }else{
        header("Location: ../login");
    }
    
}
elseif($action == 'form_add_tk') {

    include("add_tk.php");

}
elseif($action == 'add_tk' && $user['roles'] == '0'){

     // Lấy thông tin form truyền đến
     $name = filter_input(INPUT_POST, 'name');
     $email = filter_input(INPUT_POST, 'email');
     $pass = filter_input(INPUT_POST, 'pass');
     $role = filter_input(INPUT_POST, 'role');

     if($name == NULL || $pass == NULL || $role == NULL ){
        $a = array("text" => "Lỗi xác thực các thông tin về sản phẩm.", "title" => "Lỗi","type" => "error", "icon" => "fa-solid fa-circle-exclamation"); 
     }else{
     
     // check các điều kiện 
        $checkname = cname($name);
        $checkemail = cemail($name);

     // tạo tài khoản, khi tên đăng nhập và email chưa tồn tại 
        if($checkname['COUNT(1)']!=1 && $checkemail['COUNT(1)']!=1){ 
            $hashedPassword = hashpass($pass);
            adduser($name, $email, $hashedPassword, $role);
            $a = array("text" => "Đã tạo tài khoản thành công.", "title" => "Thông báo","type" => "success", "icon" => "fa-solid fa-circle-check");
        }
        elseif($checkname['COUNT(1)']==1){
            $a = array("text" => "Tên tài khoản này đã tồn tại.", "title" => "Thông báo","type" => "info", "icon" => "fa-solid fa-circle-info");
        }
        else{     
            $a = array("text" => "Email đã được đăng ký ở một tài khoản khác.", "title" => "Thông báo","type" => "info", "icon" => "fa-solid fa-circle-info");
        }
    }
    $_SESSION['a'] = $a;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}




 ?>