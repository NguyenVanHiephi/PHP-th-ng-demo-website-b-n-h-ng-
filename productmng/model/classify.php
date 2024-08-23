<?php


//1. Lấy thông tin  trong bảng classify theo ID
function lay_classify_id_sp($id) {
    global $db;
    $query = 'SELECT * FROM classify_sp WHERE id_sp = :id ';
    $statement = $db->prepare($query);
    $statement->bindValue(":id",$id);
    $statement->execute();
    $p = $statement->fetchAll();
    $statement->closeCursor();
    return $p;
}

//2. Lấy thông tin  trong bảng classify theo ID
function lay_classify_id($id) {
    global $db;
    $query = 'SELECT * FROM classify_sp WHERE id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(":id",$id);
    $statement->execute();
    $p = $statement->fetch();
    $statement->closeCursor();
    return $p;
}

// Lấy thông tin tất cả classify 
function lay_classify() {
    global $db;
    $query = 'SELECT * FROM classify_sp';
    $statement = $db->prepare($query);
    $statement->execute();
    $product = $statement->fetchAll();
    $statement->closeCursor();
    return $product;
}

//3. Xoá thông tin  trong bảng classify theo ID
function xoa_classify($id) {
    global $db;
    
    $query = 'DELETE FROM classify_sp WHERE id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(":id",$id);
    $statement->execute();
    $statement->closeCursor();
}

//4. Thêm  vào bảng classify
function them_classify( $Names, $color, $sizes, $sl, $img, $id_ncc, $id_sp, $created_by, $created_date) {
    global $db;

    $query = 'INSERT INTO classify_sp (Names, color, sizes, sl, img, id_ncc, id_sp, created_by, created_date, up_by, up_date) 
                VALUES ( :Names, :color, :sizes, :sl, :img, :id_ncc, :id_sp, :created_by, :created_date )';
    $statement = $db->prepare($query);
    $statement->bindValue(":Names",$Names);
    $statement->bindValue(":color",$color);
    $statement->bindValue(":sizes",$sizes);
    $statement->bindValue(":sl",$sl);
    $statement->bindValue(":img",$img); 
    $statement->bindValue(":id_ncc",$id_ncc);
    $statement->bindValue(":id_sp",$id_sp);
    $statement->bindValue(":created_by",$created_by);
    $statement->bindValue(":created_date",$created_date);
    $statement->execute();
    $statement->closeCursor();

}   

// Update lại thông tin bang classify 
function sua_classify($id,  $Names, $color, $sizes, $img, $id_ncc, $id_sp, $up_by, $up_date) {
    global $db;

    $query = 'UPDATE  classify_sp SET Names = :Names, color = :color, sizes = :sizes, img = :img, id_ncc = :id_ncc, id_sp = :id_sp, up_by = :up_by, up_date = :up_date  WHERE  id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(":Names",$Names);
    $statement->bindValue(":color",$color);
    $statement->bindValue(":sizes",$sizes);
    $statement->bindValue(":img",$img); 
    $statement->bindValue(":id_ncc",$id_ncc);
    $statement->bindValue(":id_sp",$id_sp);
    $statement->bindValue(":up_by",$up_by);
    $statement->bindValue(":up_date",$up_date);
    $statement->bindValue(":id",$id);
    $statement->execute();
    $statement->closeCursor();

}   

?>