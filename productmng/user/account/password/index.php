<?php

require("../../../model/database.php");
require("../../../model/category_db.php");
require("../../../model/product_db.php");
require("../../../model/cart.php");
require("../../../model/tk.php");
require('../../../model/salt.php');

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
        $action = 'pass';
    }
}

// lấy thông tin tk nếu có
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $cart_sl = lay_sl_giohang($user['id']);
}
else{
    header("Location: ../../../login");
}

if($action == 'pass'){
    include ("password.php");
}
elseif($action == 'confirm_pass'){
    $pass = filter_input(INPUT_POST, 'password');
    
    if (password_verify($pass . SALT , $user['Pass'])) {
        include("re_pass.php");
    } else {
        $a = array("text" => "Mật khẩu không chính xác.", "title" => "Thông báo","type" => "warning", "icon" => "fa-solid fa-triangle-exclamation");
    }
    $_SESSION['a'] = $a;
    include ("password.php");
}
elseif($action == 're_pass'){
    $new_password = filter_input(INPUT_POST, 'password');
    $confirm_password = filter_input(INPUT_POST, 're_password');
    if ($new_password == NULL || $confirm_password == NULL ) { 
        $a = array("text" => "Lỗi xác thực các thông tin.", "title" => "Thông báo","type" => "info", "icon" => "fa-solid fa-triangle-exclamation");
    }else{
        if ($new_password != $confirm_password) {
            $a = array("text" => "Mật khẩu không trùng khớp.", "title" => "Thông báo","type" => "info", "icon" => "fa-solid fa-triangle-exclamation");
        }else{
            $hashedPassword = hashpass($new_password);
            up_pass_user( $user['Email'], $hashedPassword );
            $a = array("text" => "Đã đổi mật khẩu thành công.", "title" => "Thông báo","type" => "success", "icon" => "fa-solid fa-circle-check");
            $_SESSION['a'] = $a;
            header("Location: ../");
        }
    }
    $_SESSION['a'] = $a;
    include("re_pass.php");
}



?>