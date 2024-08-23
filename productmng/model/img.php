<?php

// thêm ảnh vào du
function saveimg($base64Img, $name_img){ 

    
    // Loại bỏ tiền tố "data:image/png;base64," của chuỗi base64
    $parts = explode(",", $base64Img);
    
    // Giải mã base64 thành dữ liệu binar
    $imageData = base64_decode($parts[1]);

    $type_file = type_img($base64Img);
 
    
    
    // Đường dẫn đến thư mục lưu trữ ảnh
$rootDir = $_SERVER['DOCUMENT_ROOT'];

$imagesDir = $rootDir . '/productmng/';
    
    // Đường dẫn đầy đủ của file mới
    $targetPath = $imagesDir . $name_img;
    
    // Lưu ảnh vào thư mục lưu trữ
    if(file_put_contents($targetPath, $imageData)){
        $i = "Ảnh đã được lưu thành công.";
    } else {
        $i = "Có lỗi xảy ra khi lưu ảnh.";
    }
    return $i;
}

// lấy định dạng ảnh
function type_img($base64Img){

    $parts = explode(",", $base64Img);

    $slashPosition = strpos($parts[0], '/') + 1; // Vị trí của '/'
    $semicolonPosition = strpos($parts[0], ';'); // Vị trí của ';'
    
    // Trích xuất chuỗi con từ vị trí '/' đến trước vị trí ';'
             $type = substr($parts[0], $slashPosition, $semicolonPosition - $slashPosition);
             $type_file = "";
             if($type=='png'){
                   $type_file = ".png" ;
             }else if($type=='jpg'||$type=='jpeg'){
                $type_file = ".jpg" ;
             }else if($type=='gif'){
                $type_file = ".gif" ;
             }else if($type=='webp'){ 
                $type_file = ".webp" ;
            }
    return $type_file;

}

// xóa ảnh khỏi du
function del_img($img){

    $rootDir = $_SERVER['DOCUMENT_ROOT'];

$imagesDir = $rootDir . '/productmng/';

$filepath = $imagesDir . $img;
$i="";

if (file_exists($filepath)) {
    if (unlink($filepath)) {
        $i= "Xóa ảnh thành công.";
    } else {
        $i= "Không thể xóa ảnh.";
    }
} else {
    $i= "Tệp ảnh không tồn tại.";
}

   return $i;
}


?>