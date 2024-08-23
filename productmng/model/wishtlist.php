<?php

// Lấy danh sách  trong bảng wish với id_user 
if (!function_exists('wish')){
    function wish($id) {
        global $db;
        $query = 'SELECT * FROM wishlist WHERE id_user = :id';
        $statement = $db->prepare($query);
        $statement->bindValue(":id",$id);
        $statement->execute();
        $ncc = $statement->fetchAll();
        $statement->closeCursor();
        return $ncc;
    }
}

// kiểm tra thông tin sp wish
if (!function_exists('wish_id_sp')){
    function wish_id_sp($id_user , $id_sp) {
        global $db;
        $query = 'SELECT * FROM wishlist WHERE id_sp = :id_sp AND id_user = :id_user';
        $statement = $db->prepare($query);
        $statement->bindValue(":id_sp",$id_sp);
        $statement->bindValue(":id_user",$id_user);
        $statement->execute();
        $ncc = $statement->fetchAll();
        $statement->closeCursor();
        return $ncc;
    }
}

// Xoá thông tin wish theo ID
if (!function_exists('xoa_w')){
    function xoa_w($id) {
        global $db;
        $query = 'DELETE FROM wishlist WHERE id = :id';
        $statement = $db->prepare($query);
        $statement->bindValue(":id",$id);
        $statement->execute();
        $statement->closeCursor();
    }
    }
    
// Thêm  vào bảng wish 
    if (!function_exists('them_w')){
    function them_w( $id_sp, $id_user) {
        global $db;
        $query = 'INSERT INTO wishlist (id_sp,id_user) 
                    VALUES ( :id_sp,:id_user )';
        $statement = $db->prepare($query);
        $statement->bindValue(":id_sp",$id_sp);
        $statement->bindValue(":id_user",$id_user);
        $statement->execute();
        $statement->closeCursor();
    }   
    }



?>