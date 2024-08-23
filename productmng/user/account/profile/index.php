<?php

require("../../../model/database.php");
require("../../../model/category_db.php");
require("../../../model/product_db.php");
require("../../../model/cart.php");
require("../../../model/tk.php");

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
        $action = 'profile';
    }
}
    if($action == 'profile'){
        if (isset($_SESSION['user']) && $_SESSION['user'] != null ) {   
            $user = $_SESSION['user'];
            $cart_sl = lay_sl_giohang($user['id']);
            $tt_user = get_user_id($user['id']);
            $datetime = new DateTime($tt_user['Ns']); // Tạo đối tượng DateTime từ chuỗi ngày tháng  
            $day = $datetime->format('j'); // Lấy ngày
            $month = $datetime->format('n'); // Lấy tháng
            $year = $datetime->format('Y'); // Lấy năm
            $ten_tk = $user['Names'];
            include ("profile.php");   
        }else{
            header("Location: ../../../login");
        }
        
    }
    elseif ($action == 'up_profile'){
        $name = filter_input(INPUT_POST, 'name');
        $gt = filter_input(INPUT_POST, 'gt');
        $ns = filter_input(INPUT_POST, 'ns');
        if (isset($_SESSION['user']) && $_SESSION['user'] != null ) {   
            $user = $_SESSION['user'];
            up_user_tt($user['id'], $name, $gt, $ns);
            header('Location: .');   
        }else{
            header("Location: ../../../login");
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }



?>