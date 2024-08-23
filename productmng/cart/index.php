<?php
   
   
    require ("../model/database.php");
    require("../model/cart.php");
    require("../model/product_db.php");
    require("../model/category_db.php");
    require("../model/tk.php");
    


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
            $action = 'gio_hang';
        }
    }

    
    if($action == 'gio_hang'){
        if(isset($_SESSION['user']) && $_SESSION['user'] != null ){
        $user = $_SESSION['user'];
        $cart = lay_giohang_id_user($user['id']);
        $cart_sl = lay_sl_giohang($user['id']);
        $total = tong_id_user($user['id']);
        include ("cart_list.php");
        }else{
        header("Location: ../login");
        }
    }else  if($action == 'xem_san_pham'){
       
        header("Location: ../catalog");

    }else if($action == 'up'){
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        $sl = filter_input(INPUT_POST, 'sl', FILTER_VALIDATE_INT);

        $sp = lay_giohang_id($id);
        $sl = $sp['sl'] + $sl;

        if($sl<=0){
            $del = xoa_giohang($id);
            $a = array("text" => "Đã xóa sản phẩm trong giỏ hàng.", "title" => "Thông báo","type" => "success", "icon" => "fa-solid fa-circle-check");
        }else{
        
        $cart = sua_giohang($id,  $sl);
        $a = array("text" => "Đã cập nhật lại giỏ hàng.", "title" => "Thông báo","type" => "success", "icon" => "fa-solid fa-circle-check");
        }
        $_SESSION['a'] = $a;
        header("Location: ../cart");
    }else if($action == 'del'){
        $id = filter_input(INPUT_POST, 'id');
        if ($id == NULL  || $id == FALSE ) {
            $a = array("text" => "Lỗi xác thực các thông tin giỏ hàng.", "title" => "Lỗi","type" => "error", "icon" => "fa-solid fa-circle-exclamation");
        }else{
        $del = xoa_giohang($id);
        $a = array("text" => "Đã xóa sản phẩm trong giỏ hàng.", "title" => "Thông báo","type" => "success", "icon" => "fa-solid fa-circle-check");
        }
        $_SESSION['a'] = $a;
        header("Location: ../cart");
        
    }
    elseif($action == 'show_address'){
        $user = $_SESSION['user'];
        $address = lay_address_md($user['id']);
        $jsonData = json_encode($address);
        echo $jsonData;
    }
    else  if($action == 'dat_hang'){

        $id_string = $_POST['ids'];
        $ids = explode(",", $id_string);
        
        // Sau đó, khi gọi hàm lay_giohang_id($id), bạn có thể sử dụng hàm format_giohang_item để biến đổi kết quả trả về
        $sps = array();
        foreach($ids as $id) {
            $sp_mh = lay_giohang_id($id);
            $formatted_sp_mh = format_giohang_item($sp_mh);
            $sps[] = $formatted_sp_mh;
        }
       
        include ("an_order.php");

    }
    else  if($action == 'mua_hang'){

        $json = $_POST['donhang'];
        $donhangs = json_decode($json, true);
        $address = filter_input(INPUT_POST, 'adress', FILTER_VALIDATE_INT);
        $pm = filter_input(INPUT_POST, 'pm');
        if(isset($_SESSION['user']) && $_SESSION['user'] != null ){
            $user = $_SESSION['user'];
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $currentDateTime = date("Y-m-d H:i:s");
            
            foreach ($donhangs as $donhang) {
               
                $product = lay_sp_productid_ncc($donhang['id']);
                $madh = generateOrderID($donhang['id']);
                them_donhang($user['id'] , $currentDateTime , $madh , $product['Gia_sp'] , $donhang['sl'] , $donhang['id'] , $product['Nsx'] , $address , $pm);
                $dh_new = lay_iddh_new();
                up_dh( $dh_new['id'] , $currentDateTime , 0);
                xoa_giohang_donhang($donhang['id']  , $user['id'] );
            }
            $a = array("text" => "Đã tạo đơn hàng thành công.", "title" => "Thông báo","type" => "success", "icon" => "fa-solid fa-circle-check");
            $_SESSION['a'] = $a;
            header("Location: ../");

        }else{

            $a = array("text" => "Đã có lỗi trong xác thực cần đăng nhập lại.", "title" => "Thông báo","type" => "info", "icon" => "fa-solid fa-circle-info");
            $_SESSION['a'] = $a;
            header("Location: ../login");

        }
    }


    function generateOrderID($customerID) {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    
    // Ngẫu nhiên chọn một ký tự từ vị trí thứ hai đến vị trí thứ ba trong chuỗi
   
    $secondCharacter = strval($customerID); // Chuyển số thành chuỗi
    
    // Tạo chuỗi ngẫu nhiên với 7 ký tự còn lại
    $randomString = '';
    $length = 7;
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    
    // Kết hợp ký tự thứ hai là số và chuỗi ngẫu nhiên
    $finalString = substr($randomString, 0, 1) . $secondCharacter . substr($randomString, 1);
    
    
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $timestamp = date("ymd");
        $orderID =   $timestamp  . $finalString;
        
        return $orderID;
    }
?>  