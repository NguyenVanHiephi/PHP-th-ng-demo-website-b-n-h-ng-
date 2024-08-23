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
        $action = 'address';
    }
}
    if($action == 'address'){
        if (isset($_SESSION['user']) && $_SESSION['user'] != null ) {
            $id_user = $_SESSION['user'];
            $ten_tk = $id_user['Names'];
            $cart_sl = lay_sl_giohang($id_user['id']);
            $address = lay_address_user_id($id_user['id']);
            include ("address.php");
        }else{
            header("Location: ../../../login");
        }
       
    }
    elseif ($action == 'add_address'){
        $name = filter_input(INPUT_POST, 'names');
        $phone = filter_input(INPUT_POST, 'phone');
        $address = filter_input(INPUT_POST, 'address');
        $status = filter_input(INPUT_POST, 'status');
        if($status == false){
            $status = true ;
        }
        if ($name == NULL || $phone == NULL || $address == NULL ) {
            $a = array("text" => "Lỗi xác thực các thông tin.", "title" => "Lỗi","type" => "error", "icon" => "fa-solid fa-circle-exclamation");
        }
        else{
            if (isset($_SESSION['user']) && $_SESSION['user'] != null ) {
                $user = $_SESSION['user'];
                if($status == false){
                    $addres = lay_address_md($user['id']);
                    up_address($addres['id'], $addres['Names'], $addres['sdt'], $addres['addres'] , true);
                }
                add_address($name, $phone, $address ,  $status , $user['id']);
            }else{
                header("Location: ../../../login");
            }
        }
        $_SESSION['a'] = $a;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    else if($action == "show_a"){
        $id= $_GET['id'];
        $adrress = lay_address_id($id);
        $jsonData = json_encode($adrress);
        
        echo $jsonData;
        // print_r($products);
    
    }
    elseif ($action == 'up_address'){
        $id = filter_input(INPUT_POST, 'id');
        $name = filter_input(INPUT_POST, 'names');
        $phone = filter_input(INPUT_POST, 'phone');
        $address = filter_input(INPUT_POST, 'address');
        $status = filter_input(INPUT_POST, 'status');
        if($status == 'on'){
            $status = false;
        }
        else{
            $status = true;
        }
        if ($name == NULL || $phone == NULL || $address == NULL ) {
            $a = array("text" => "Lỗi xác thực các thông tin .", "title" => "Lỗi","type" => "error", "icon" => "fa-solid fa-circle-exclamation");
        }
        else{
            if (isset($_SESSION['user']) && $_SESSION['user'] != null ) {
                $user = $_SESSION['user'];
                if($status == false){
                    $addres = lay_address_md($user['id']);
                    if($addres != null){
                        up_address($addres['id'], $addres['Names'], $addres['sdt'], $addres['addres'] , true);
                    }
                }
                up_address($id, $name, $phone, $address , $status);
            }else{
                header("Location: ../../../login");
            }
        }
        $_SESSION['a'] = $a;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }



?>