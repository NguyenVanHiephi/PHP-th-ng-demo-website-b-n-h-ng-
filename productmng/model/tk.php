<?php

// require('../PHPMailer/PHPMailerAutoload.php');


// Đăng nhập với tài khoản
if (!function_exists('login'))
{
function login($name){

    global $db;
    $querry_category_name = 'SELECT COUNT(1) FROM user WHERE Names = :ten || Email = :email ';
    $statement = $db->prepare($querry_category_name);
    $statement->bindValue(":ten", $name);
    $statement->bindValue(":email", $name);
    $statement->execute();
    $check = $statement->fetch();
    $statement->closeCursor();                          
    return $check;

}
}

// Lấy thông tin người dùng 
if (!function_exists('layid'))
{
function layid($name){

    global $db;
    $querry_category_name = 'SELECT * FROM user WHERE Names = :ten || Email = :email ';  
    $statement = $db->prepare($querry_category_name);
    $statement->bindValue(":ten", $name);
    $statement->bindValue(":email", $name);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;

}
}

// Lấy id người dùng cuối cùng
if (!function_exists('layid_last'))
{
function layid_last(){

    global $db;
    $querry_category_name = 'SELECT id FROM user ORDER BY id DESC LIMIT 1;';  
    $statement = $db->prepare($querry_category_name);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;

}
}

// Lấy thông tin của các tài khoản 
if (!function_exists('lay_thong_tin_tk'))
{
function lay_thong_tin_tk(){

    global $db;
    $querry_category_name = 'SELECT * FROM user ';
    $statement = $db->prepare($querry_category_name);
    $statement->execute();
    $product = $statement->fetchAll();
    $statement->closeCursor();
    return $product ;

}
}

// Lấy tên của  tài khoản 
if (!function_exists('get_name_tk'))
{
function get_name_tk($id){

    global $db;
    $querry_category_name = 'SELECT * FROM user Where id = :id';
    $statement = $db->prepare($querry_category_name);
    $statement->bindValue(":id", $id);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product['Names'] ;

}
}

// Kiểm tra xem tên có bị trùng không 
if (!function_exists('cname'))
{
function cname($name){

    global $db;
    $querry_category_name = 'SELECT COUNT(1)  FROM user WHERE Names = :ten';
    $statement = $db->prepare($querry_category_name);
    $statement->bindValue(":ten", $name);
    $statement->execute();
    $check = $statement->fetch();
    $statement->closeCursor();
    return $check;

}
}
// Kiểm tra xem email đã lập tài khoản chưa 
if (!function_exists('cemail'))
{
function cemail($name){

    global $db;
    $querry_category_name = 'SELECT COUNT(1)  FROM user WHERE Email = :email';
    $statement = $db->prepare($querry_category_name);
    $statement->bindValue(":email", $name);
    $statement->execute();
    $check = $statement->fetch();
    $statement->closeCursor();
    return $check;

}
}
// Thêm mới tài khoản 
if (!function_exists('adduser'))
{
function adduser($name, $email, $pass, $role){

    global $db;
    $querry = 'INSERT INTO user(Names,Email,Pass,roles) 
    VALUES ( :ten, :email , :pass, :roles)';
    $statement = $db->prepare($querry);
    $statement->bindValue(":ten",$name);
    $statement->bindValue(":email",$email);
    $statement->bindValue(":pass",$pass);
    $statement->bindValue(":roles",$role);
    $statement->execute();
    $statement->closeCursor();

}
}
// Lấy thông tin tài khoản
if (!function_exists('lay_user_id'))
{
function lay_user_id($product_id) {
    global $db;
    $query = 'SELECT * FROM user WHERE id = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":product_id",$product_id);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;
}
}
// Sửa thông tin tài khoản 
if (!function_exists('updateuser'))
{
function updateuser($id, $name, $email, $pass, $role){

    global $db;
    $querry = 'UPDATE user set username = :ten, email = :email, roles = :roles where id =:id';
    $statement = $db->prepare($querry);
    $statement->bindValue(":ten",$name);
    $statement->bindValue(":email",$email);
    $statement->bindValue(":roles",$role);
    $statement->bindValue(":id",$id);
    $statement->execute();
    $statement->closeCursor();

}
}

// Sửa lại mk
if (!function_exists('up_pass_user'))
{
function up_pass_user( $email, $pass ){

    global $db;
    $querry = 'UPDATE user set Pass = :pass Where Email = :email';
    $statement = $db->prepare($querry);
    $statement->bindValue(":email",$email);
    $statement->bindValue(":pass",$pass);
    $statement->execute();
    $statement->closeCursor();

}
}

// hash lại mật khẩu trước khi lưu trữ hoặc so sánh
if (!function_exists('hashpass'))
{
function hashpass($pass){

    $passwordWithSalt = $pass . SALT;
    
    $hashedPassword = password_hash($passwordWithSalt, PASSWORD_BCRYPT);
    return $hashedPassword;
}
}
// Lấy thông tin tài khoản
if (!function_exists('lay_dm_user'))
{
function lay_dm_user($product_id) {
    global $db;
    $query = 'SELECT * FROM danh_muc WHERE id in (SELECT id_dm FROM user_q WHERE quyen = :product_id and r = 1)';
    $statement = $db->prepare($query);
    $statement->bindValue(":product_id",$product_id);
    $statement->execute();
    $product = $statement->fetchAll();
    $statement->closeCursor();
    return $product;
}
}

// gửi email cho người dùng 
if (!function_exists('post_email'))
{
function post_email($name_email , $subject , $content , $content_no) {

    $a = "Code bị dừng trong hàm";
    
    $mail = new PHPMailer;
    
    //$mail->SMTPDebug = 3;                               // Enable verbose debug output
    
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'hieppi1980@gmail.com';                 // SMTP username
    $mail->Password = 'ezcukcmbmlpcdajw';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    
    $mail->setFrom('hieppi1980@gmail.com', 'Hiep');
    $mail->addAddress($name_email , 'tôi');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');
    
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML
    
    $mail->Subject = $subject;
    $mail->Body    = $content;//'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody =  $content_no;
    
    if(!$mail->send()) {
        $a = 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    } else {
        $a = 'Message has been sent';
    }

    return $a;
}
}
if (!function_exists('ma_code'))
{
function ma_code() {

    $a = substr(str_shuffle(str_repeat('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz', 6)), 0, 6);

    return $a;
}
}

// Thêm mới địa chỉ
if (!function_exists('add_address'))
{
function add_address($name, $sdt, $address , $status , $id_user){

    global $db;
    $querry = 'INSERT INTO addres(Names ,  sdt ,  addres  ,  statuss , id_user) 
    VALUES ( :ten, :sdt , :addres , :statuss , :id_user )';
    $statement = $db->prepare($querry);
    $statement->bindValue(":ten",$name);
    $statement->bindValue(":sdt",$sdt);
    $statement->bindValue(":addres",$address);
    $statement->bindValue(":statuss",$status);
    $statement->bindValue(":id_user",$id_user);
    $statement->execute();
    $statement->closeCursor();

}
}

// Lấy thông tin tất cả địa chỉ của user
if (!function_exists('lay_address_user_id'))
{
function lay_address_user_id($id) {
    global $db;
    $query = 'SELECT * FROM addres WHERE id_user = :id_user';
    $statement = $db->prepare($query);
    $statement->bindValue(":id_user",$id);
    $statement->execute();
    $product = $statement->fetchAll();
    $statement->closeCursor();
    return $product;
}
}

// Lấy thông tin từng địa chỉ của user
if (!function_exists('lay_address_id'))
{
function lay_address_id($id) {
    global $db;
    $query = 'SELECT * FROM addres WHERE id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(":id",$id);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;
}
}

// Lấy thông tin  địa chỉ của user mặc định
if (!function_exists('lay_address_md'))
{
function lay_address_md($id) {
    global $db;
    $query = 'SELECT * FROM addres WHERE id_user = :id AND statuss = 0';
    $statement = $db->prepare($query);
    $statement->bindValue(":id",$id);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;
}
}

// Sửa thông tin địa chỉ  
if (!function_exists('up_address'))
{
function up_address($id, $name, $sdt, $address , $status){

    global $db;
    $querry = 'UPDATE addres set Names = :ten, sdt = :sdt, addres = :addres  , statuss =:statuss where id =:id';
    $statement = $db->prepare($querry);
    $statement->bindValue(":ten",$name);
    $statement->bindValue(":sdt",$sdt);
    $statement->bindValue(":addres",$address);
    $statement->bindValue(":statuss",$status);
    $statement->bindValue(":id",$id);
    $statement->execute();
    $statement->closeCursor();

}
}

// Lấy thông tin  tt của user 
if (!function_exists('get_user_id'))
{
function get_user_id($id) {
    global $db;
    $query = 'SELECT * FROM user_tt WHERE id_user = :id ';
    $statement = $db->prepare($query);
    $statement->bindValue(":id",$id);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;
}
}

// sửa thông tin user 
if (!function_exists('up_user_tt'))
{
function up_user_tt($id, $name, $sex, $ns){

    global $db;
    $querry = 'UPDATE user_tt set Names = :ten,  sex = :sex  , ns =:ns where id_user =:id';
    $statement = $db->prepare($querry);
    $statement->bindValue(":ten",$name);
    $statement->bindValue(":sex",$sex);
    $statement->bindValue(":ns",$ns);
    $statement->bindValue(":id",$id);
    $statement->execute();
    $statement->closeCursor();

}
}

// thêm tt user
if (!function_exists('add_user_tt'))
{
function add_user_tt( $id, $ns){

    global $db;
    $querry = 'INSERT INTO user_tt( ns  , id_user) 
    VALUES (  :ns  , :id )';
    $statement = $db->prepare($querry);
    $statement->bindValue(":ns",$ns);
    $statement->bindValue(":id",$id);
    $statement->execute();
    $statement->closeCursor();

}
}

?>