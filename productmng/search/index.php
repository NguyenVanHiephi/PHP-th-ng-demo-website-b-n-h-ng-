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
    
   
        $key = filter_input(INPUT_GET, 'key');
        if ($key == NULL) {
            header("Location: ../");
        }
    
    
    $minPrice = $_GET['minPrice'] ?? 0;
    $maxPrice = $_GET['maxPrice'] ?? PHP_FLOAT_MAX;
    $categoriess = $_GET['category']??NULL;
    

    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        $cart_sl = lay_sl_giohang($user['id']);
    }
    $categories = danh_muc_san_pham();
    $products = search( $categoriess,$minPrice, $maxPrice , $key);
    include ("search.php");
    
    
        
     



?>