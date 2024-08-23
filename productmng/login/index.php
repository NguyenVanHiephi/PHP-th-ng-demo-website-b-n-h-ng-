 <?php

require ("../model/database.php");
require('../model/salt.php');
require ("../model/tk.php");

ini_set('session.cookie_secure', 1);
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_lifetime', 0); // Hết hạn khi đóng trình duyệt
ini_set('session.cookie_samesite', 'Strict');

// Start the session after setting the ini settings
session_start();

// Tạo lại session ID sau mỗi đăng nhập thành công
session_regenerate_id();

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'form_dn';
    }
}
if ($action == 'form_dn') {

    include("login.php");

}
elseif($action == 'login'){

    // Lấy thông tin form truyền đến
    $name = filter_input(INPUT_POST, 'email');
    $pass = filter_input(INPUT_POST, 'pass');
    // thực hiện kiểm tra thông tin đăng nhập 
    if ($name == NULL  || $pass == NULL ) {
        $a = array("text" => "Lỗi xác thực các thông tin đăng nhập.", "title" => "Lỗi","type" => "error", "icon" => "fa-solid fa-circle-exclamation");
    }else{
    $check = login($name);
    $tk = layid($name);
    if($check['COUNT(1)']==1){

        if (password_verify($pass . SALT , $tk['Pass'])) {
            $_SESSION['user'] = $tk;
            if($tk['roles'] == '0'){
                header("Location:../manager");
            }elseif($tk['roles'] == '1'){
                header("Location:../");
            }else {
                $a = array("text" => "Tài khoản này đang bị lỗi.", "title" => "Thông báo","type" => "info", "icon" => "fa-solid fa-triangle-exclamation");
                $_SESSION['a'] = $a;
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
        } else {
            $a = array("text" => "Mật khẩu không chính xác.", "title" => "Thông báo","type" => "warning", "icon" => "fa-solid fa-triangle-exclamation");
        }
    }
    else{ 
        $a = array("text" => "Tài khoản không tồn tại", "title" => "Thông báo","type" => "info", "icon" => "fa-solid fa-circle-info");
    }
    }
    $_SESSION['a'] = $a;
    include ("login.php");

}
elseif($action == 'register_form'){

    include("register.php");
    
}
elseif($action == 'out'){

    unset($_SESSION['user']);
    include("login.php");
    
}
elseif($action == 'register'){

     // Lấy thông tin form truyền đến
     $name = filter_input(INPUT_POST, 'name');
     $email = filter_input(INPUT_POST, 'email');
     $pass = filter_input(INPUT_POST, 'pass');
     if ($name == NULL || $email == NULL || $pass == NULL) {
        $a = array("text" => "Lỗi xác thực các thông tin đăng ký.", "title" => "Lỗi","type" => "error", "icon" => "fa-solid fa-circle-exclamation");
     }
     else {
     // check các điều kiện 
     $checkname = cname($name);
     $checkemail = cemail($email);
        
     // tạo tài khoản, khi tên đăng nhập và email chưa tồn tại 
     if($checkname['COUNT(1)']!=1 && $checkemail['COUNT(1)']!=1){ 
        $hashedPassword = hashpass($pass);
        adduser($name, $email, $hashedPassword,"1");
        $id = layid_last();
        add_user_tt( $id, '1990-01-01');

     $a = array("text" => "Đã tạo tài khoản thành công .", "title" => "Thông báo","type" => "info", "icon" => "fa-solid fa-triangle-exclamation");
     $_SESSION['a'] = $a;
     include("login.php");
     }
     elseif($checkname['COUNT(1)']==1){
        
        $a = array("text" => "Tên tài khoản đã tồn tại.", "title" => "Thông báo","type" => "info", "icon" => "fa-solid fa-triangle-exclamation");
       
        
     }elseif($checkemail['COUNT(1)']==1){
        
        $a = array("text" => "Email này đã được tạo tài khoản .", "title" => "Thông báo","type" => "info", "icon" => "fa-solid fa-triangle-exclamation");
       
        
     }
     
     
     }

     $_SESSION['a'] = $a;
     include("register.php");

}
elseif($action == 'forgot_form'){

    include("forget.php");
    
}
elseif($action == 'forget'){

    $email = filter_input(INPUT_POST, 'email');
    if($email == NULL){
         $a = array("text" => "Lỗi xác thực thông tin email.", "title" => "Lỗi","type" => "error", "icon" => "fa-solid fa-circle-exclamation");  
    }else{
        $checkemail = cemail($email);
        if($checkemail['COUNT(1)']!=1){
            $a = array("text" => "Email này chưa được tạo tài khoản .", "title" => "Thông báo","type" => "info", "icon" => "fa-solid fa-triangle-exclamation");
        }
        else{
            $code = ma_code();
            $subject = "Thay đổi mật khẩu";
            $content = "Mã đổi lại mật khẩu là : <b>" . $code ."</b>";
            $content_no = "Mã đổi lại mật khẩu là : " . $code;
            $_SESSION['code'] = $code;
            post_email($email , $subject , $content , $content_no);
            include("authentication.php");
        }
    }
    $_SESSION['a'] = $a;
    include("forget.php");
}
elseif($action == 'authentication'){
    $_SESSION['code_expiration'] = time() + (5 * 60); // Hết hạn sau 5 phút

// Kiểm tra thời gian hết hạn khi truy cập vào $_SESSION['code']
    if (isset($_SESSION['code_expiration']) && time() > $_SESSION['code_expiration']) {
        // Hết thời gian, xóa $_SESSION['code']
        unset($_SESSION['code']);
        unset($_SESSION['code_expiration']); // Xóa thời gian hết hạn
    }
    $code = filter_input(INPUT_POST, 'code');
    $email = filter_input(INPUT_POST, 'email');
    if ($code == NULL || $email == NULL) {
        $a = array("text" => "Lỗi xác thực các thông tin.", "title" => "Lỗi","type" => "error", "icon" => "fa-solid fa-circle-exclamation");
    }else{
        if (isset($_SESSION['code']) && $_SESSION['code'] == $code) {
            include("change.php");
        }else{
            $a = array("text" => "Mã không đúng hoặc đã hết hạn.", "title" => "Thông báo","type" => "info", "icon" => "fa-solid fa-triangle-exclamation");
        }
    }
    $_SESSION['a'] = $a;
    include("authentication.php");
}elseif($action == 'change'){
    $new_password = filter_input(INPUT_POST, 'pass');
    $confirm_password = filter_input(INPUT_POST, 'pass_again');
    $email = filter_input(INPUT_POST, 'email');
    if ($new_password == NULL || $confirm_password == NULL || $email == NULL) { 
        $a = array("text" => "Lỗi xác thực các thông tin.", "title" => "Thông báo","type" => "info", "icon" => "fa-solid fa-triangle-exclamation");
    }else{
        if ($new_password != $confirm_password) {
            $a = array("text" => "Mật khẩu không trùng khớp.", "title" => "Thông báo","type" => "info", "icon" => "fa-solid fa-triangle-exclamation");
        }else{
            $hashedPassword = hashpass($new_password);
            up_pass_user( $email, $hashedPassword );
            $a = array("text" => "Đã đổi mật khẩu thành công.", "title" => "Thông báo","type" => "success", "icon" => "fa-solid fa-circle-check");
            $_SESSION['a'] = $a;
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
    $_SESSION['a'] = $a;
    include("change.php");
}

 ?>