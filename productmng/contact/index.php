<?php 

require ("../model/database.php");
require("../model/cart.php");
require("../model/contact.php");


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
            $action = 'xem';
        }
    }

if($action == 'xem'){
    if(isset($_SESSION['user']) && $_SESSION['user'] != null ){
        $user = $_SESSION['user'];
        $cart = lay_giohang_id_user($user['id']);
        $cart_sl = lay_sl_giohang($user['id']);
    }
    include ("contact.php");
}elseif($action == 'post'){

    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email');
    $title = filter_input(INPUT_POST, 'title');
    $comment = filter_input(INPUT_POST, 'comment');
    add_contact($name , $email , $title , $comment);
    $a = array("text" => "Đã gửi đi đóng góp của bạn.", "title" => "Thông báo","type" => "success", "icon" => "fa-solid fa-circle-check");
    $_SESSION['a'] = $a;
    header("Location: ./");

}


?>