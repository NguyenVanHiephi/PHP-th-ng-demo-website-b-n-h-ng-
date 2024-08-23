<?php


//1. Lấy thông tin  trong bảng classify theo id_sp
function lay_nhap_sp_id_sp($id) {
    global $db;
    $query = 'SELECT * FROM nhap_sp WHERE id_sp = :id ';
    $statement = $db->prepare($query);
    $statement->bindValue(":id",$id);
    $statement->execute();
    $p = $statement->fetchAll();
    $statement->closeCursor();
    return $p;
}

//2. Lấy thông tin  trong bảng classify theo ID
function lay_nhap_sp_id($id) {
    global $db;
    $query = 'SELECT * FROM nhap_sp WHERE id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(":id",$id);
    $statement->execute();
    $p = $statement->fetch();
    $statement->closeCursor();
    return $p;
}

// Lấy thông tin  trong bảng classify theo id_ncc
function lay_nhap_sp_id_ncc($id) {
    global $db;
    $query = 'SELECT * FROM nhap_sp WHERE id_ncc = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(":id",$id);
    $statement->execute();
    $p = $statement->fetch();
    $statement->closeCursor();
    return $p;
}

// Lấy thông tin tất cả classify 
function lay_nhap_sp() {
    global $db;
    $query = 'SELECT * FROM nhap_sp';
    $statement = $db->prepare($query);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;
}

//3. Xoá thông tin  trong bảng classify theo ID
function xoa_nhap_sp($id) {
    global $db;
    
    $query = 'DELETE FROM nhap_sp WHERE id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(":id",$id);
    $statement->execute();
    $statement->closeCursor();
}

//4. Thêm  vào bảng classify
function them_nhap_sp( $Names, $sl, $gia, $color, $sizes, $img, $id_ncc, $id_sp, $id_user, $dates, $KH, $actions) {
    global $db;

    $query = 'INSERT INTO nhap_sp (Names, sl, gia, color, sizes, img, id_ncc, id_sp, id_user, dates, KH, actions) 
                VALUES ( :Names, :sl, :gia, :color, :sizes, :img, :id_ncc, :id_sp, :id_user, :dates, :KH, :actions)';
    $statement = $db->prepare($query);
    $statement->bindValue(":Names",$Names);
    $statement->bindValue(":sl",$sl);
    $statement->bindValue(":gia",$gia);
    $statement->bindValue(":color",$color);
    $statement->bindValue(":sizes",$sizes);
    $statement->bindValue(":sl",$sl);
    $statement->bindValue(":img",$img); 
    $statement->bindValue(":id_ncc",$id_ncc);
    $statement->bindValue(":id_sp",$id_sp);
    $statement->bindValue(":id_user",$id_user);
    $statement->bindValue(":dates",$dates); 
    $statement->bindValue(":KH",$KH);
    $statement->bindValue(":actions",$actions);
    $statement->execute();
    $statement->closeCursor();

}   

// // Update lại thông tin bang classify 
// function sua_nhap_sp($id,  $sl, $gia, $color, $sizes, $img, $id_ncc, $id_sp, $id_user, $dates, $KH, $actions) {
//     global $db;

//     $query = 'UPDATE  nhap_sp SET Names = :Names, sl = :sl, gia = :gia,  color = :color, sizes = :sizes, img = :img, id_ncc = :id_ncc, id_sp = :id_sp, id_user :id_user, dates :dates, KH :KH, actions :actions  WHERE  id = :id';
//     $statement = $db->prepare($query);
//     $statement->bindValue(":Names",$Names);
//     $statement->bindValue(":sl",$sl);
//     $statement->bindValue(":gia",$gia);
//     $statement->bindValue(":color",$color);
//     $statement->bindValue(":sizes",$sizes);
//     $statement->bindValue(":sl",$sl);
//     $statement->bindValue(":img",$img); 
//     $statement->bindValue(":id_ncc",$id_ncc);
//     $statement->bindValue(":id_sp",$id_sp);
//     $statement->bindValue(":id_user",$id_user);
//     $statement->bindValue(":dates",$dates); 
//     $statement->bindValue(":KH",$KH);
//     $statement->bindValue(":actions",$actions);
//     $statement->bindValue(":id",$id);
//     $statement->execute();
//     $statement->closeCursor();

// }   

?>