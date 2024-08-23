<?php

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
    

    if(isset($_SESSION['user']) && $_SESSION['user'] != null ){
        $user = $_SESSION['user'];
        $dhs = all_donhang_user($user['id']);
        $cart_sl = lay_sl_giohang($user['id']);
        $total = tong_id_user($user['id']);
        header("Location: ./purchase");
        }else{
        header("Location: ../login");
        }

?>