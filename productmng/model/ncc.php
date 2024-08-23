<?php


//1. Lấy thông tin ncc trong bảng ncc 
if (!function_exists('lay_ncc')){
function lay_ncc() {
    global $db;
    $query = 'SELECT * FROM nha_cung_cap';
    $statement = $db->prepare($query);
    $statement->execute();
    $ncc = $statement->fetchAll();
    $statement->closeCursor();
    return $ncc;
}
}

// Lấy tên nhà cung cấp
if (!function_exists('lay_ten_ncc')){
function lay_ten_ncc($ncc_id) {
    global $db; 
    $query = 'SELECT Ten_Ncc FROM nha_cung_cap WHERE ID_Ncc = :ncc_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':ncc_id', $ncc_id);
    $statement->execute();
    $ncc = $statement->fetch();
    $statement->closeCursor();
    if ($ncc) {
        return $ncc['Ten_Ncc'];
    } else {
        return "Supplier not found";
    }
}
}

//2. Lấy thông tin ncc trong bảng ncc theo ID
if (!function_exists('lay_ncc_id')){
function lay_ncc_id($id_ncc) {
    global $db;
    $query = 'SELECT * FROM nha_cung_cap WHERE ID_Ncc = :id_ncc';
    $statement = $db->prepare($query);
    $statement->bindValue(":id_ncc",$id_ncc);
    $statement->execute();
    $ncc = $statement->fetch();
    $statement->closeCursor();
    return $ncc;
}
}

//3. Xoá thông tin ncc trong bảng ncc theo ID
if (!function_exists('xoa_ncc')){
function xoa_ncc($id_ncc) {
    global $db;
    $query = 'DELETE FROM nha_cung_cap WHERE ID_Ncc = :id_ncc';
    $statement = $db->prepare($query);
    $statement->bindValue(":id_ncc",$id_ncc);
    $statement->execute();
    $statement->closeCursor();
}
}

//4. Thêm ncc vào bảng ncc 
if (!function_exists('them_ncc')){
function them_ncc( $Name, $Loai, $Gia , $Nsx) {
    global $db;
    $query = 'INSERT INTO nha_cung_cap (Ten_Ncc,Dia_chi,email,Sdt) 
                VALUES ( :Ten_Ncc,:Dia_chi,:email,:Sdt )';
    $statement = $db->prepare($query);
    $statement->bindValue(":Ten_Ncc",$Name);
    $statement->bindValue(":Dia_chi",$Loai);
    $statement->bindValue(":email",$Gia);
    $statement->bindValue(":Sdt",$Nsx);
    
    $statement->execute();
    $statement->closeCursor();
}   
}

//5. Sửa ncc vào bảng ncc
if (!function_exists('sua_ncc')){
function sua_ncc($id, $Name, $Loai, $Gia , $Nsx) {
    global $db;
    $query = 'UPDATE  nha_cung_cap SET Ten_Ncc = :Ten_Ncc, Dia_chi = :Dia_chi, email = :email, Sdt = :Sdt WHERE  ID_Ncc = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(":Ten_Ncc",$Name);
    $statement->bindValue(":Dia_chi",$Loai);
    $statement->bindValue(":email",$Gia);
    $statement->bindValue(":Sdt",$Nsx);
    $statement->bindValue(":id",$id);
    $statement->execute();
    $statement->closeCursor();
}   
}

// lấy dữ liệu để gắn ncc cho sp
if (!function_exists('lay_ncc_sp')){
function lay_ncc_sp() {
    global $db;
    $query = 'SELECT  ID_Ncc, Ten_Ncc FROM nha_cung_cap';
    $statement = $db->prepare($query);
    $statement->execute();
    $ncc = $statement->fetchAll();
    $statement->closeCursor();
    return $ncc;
}
}

?>