<?php


//1. Lấy thông tin  trong bảng donhang theo ID
function lay_donhang_id_user($id) {
    global $db;
    $query = 'SELECT * FROM donhang WHERE id_user = :id ';
    $statement = $db->prepare($query);
    $statement->bindValue(":id",$id);
    $statement->execute();
    $p = $statement->fetchAll();
    $statement->closeCursor();
    return $p;
}

//2. Lấy thông tin  trong bảng donhang theo ID
function lay_donhang_id($id) {
    global $db;
    $query = 'SELECT * FROM donhang WHERE id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(":id",$id);
    $statement->execute();
    $p = $statement->fetch();
    $statement->closeCursor();
    return $p;
}

// Lấy thông tin tất cả donhang 
function lay_donhang() {
    global $db;
    $query = 'SELECT * FROM donhang';
    $statement = $db->prepare($query);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;
}

//3. Xoá thông tin  trong bảng donhang theo ID
function xoa_donhang($id) {
    global $db;
    
    $query = 'DELETE FROM donhang WHERE id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(":id",$id);
    $statement->execute();
    $statement->closeCursor();
}

//4. Thêm  vào bảng donhang
function them_donhang(  $mota, $s_date, $tt, $img, $id_user) {
    global $db;

    $query = 'INSERT INTO donhang ( mota, s_date, tt, img, id_user) 
                VALUES ( :mota, :s_date, :tt, :img, :id_user)';
    $statement = $db->prepare($query);
    $statement->bindValue(":mota",$mota);
    $statement->bindValue(":s_date",$s_date);
    $statement->bindValue(":tt",$tt);
    $statement->bindValue(":img",$img); 
    $statement->bindValue(":id_user",$id_user);
    $statement->execute();
    $statement->closeCursor();

}   

// Update lại thông tin bang donhang 
function sua_donhang($id,  $mota, $s_date, $tt, $img, $id_user) {
    global $db;

    $query = 'UPDATE  donhang SET mota = :mota, s_date = :s_date, tt = :tt, img = :img, id_user = :id_user WHERE  id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(":mota",$mota);
    $statement->bindValue(":s_date",$s_date);
    $statement->bindValue(":tt",$tt);
    $statement->bindValue(":img",$img); 
    $statement->bindValue(":id_user",$id_user);
    $statement->bindValue(":id",$id);
    $statement->execute();
    $statement->closeCursor();

}  
function ma_donhang() {

    $timestamp = time();
    $uniqueId = strtoupper(substr(bin2hex(random_bytes(7)), 0, 13));


}

function statuss($id_dh){
    global $db;
    $query = 'SELECT * FROM statuss WHERE id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(":id",$id);
    $statement->execute();
    $p = $statement->fetch();
    $statement->closeCursor();
    return $p;
}

function them_statuss(  $id_dh, $statuss) {
    global $db;

    $query = 'INSERT INTO statuss ( id_dh , statuss) 
                VALUES ( :id_dh, :statuss)';
    $statement = $db->prepare($query);
    $statement->bindValue(":id_dh",$id_dh);
    $statement->bindValue(":statuss",$statuss);
    $statement->execute();
    $statement->closeCursor();

} 

?>