<?php

 

//1. Lấy thông tin  trong bảng giohang theo ID
function lay_giohang_id_user($id_user) {
    global $db;
    $query = 'SELECT * FROM giohang WHERE id_user = :id_user ';
    $statement = $db->prepare($query);
    $statement->bindValue(":id_user",$id_user);
    $statement->execute();
    $p = $statement->fetchAll();
    $statement->closeCursor();
    return $p;
}

// Lấy thông tin sản phẩm trong bảng giohang theo ID_user
function lay_sp_id_user($id_user ,$id_sp) {
    global $db;
    $query = 'SELECT * FROM giohang WHERE id_user = :id_user and id_sp = :id_sp';
    $statement = $db->prepare($query);
    $statement->bindValue(":id_user",$id_user);
    $statement->bindValue(":id_sp",$id_sp);
    $statement->execute();
    $p = $statement->fetch();
    $statement->closeCursor();
    return $p;
}

//2. Lấy thông tin  trong bảng giohang theo ID
function lay_giohang_id($id) {
    global $db;
    $query = 'SELECT * FROM giohang WHERE id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(":id",$id);
    $statement->execute();
    $p = $statement->fetch();
    $statement->closeCursor();
    return $p;
}

// Lấy thông tin tất cả giohang 
function lay_giohang() {
    global $db;
    $query = 'SELECT * FROM giohang';
    $statement = $db->prepare($query);
    $statement->execute();
    $product = $statement->fetchAll();
    $statement->closeCursor();
    return $p;
}

//3. Xoá thông tin  trong bảng giohang theo ID
function xoa_giohang($id) {
    global $db;
    
    $query = 'DELETE FROM giohang WHERE id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(":id",$id);
    $statement->execute();
    $statement->closeCursor();
}

//4. Thêm  vào bảng giohang
function them_giohang(  $Names, $sl, $gia, $img, $id_ncc , $id_sp, $id_user) {
    global $db;

    $query = 'INSERT INTO giohang ( Names, sl, gia,	img, id_ncc , id_sp , id_user) 
                VALUES ( :Names, :sl, :gia, :img, :id_ncc, :id_sp, :id_user)';
    $statement = $db->prepare($query);
    $statement->bindValue(":Names",$Names);
    $statement->bindValue(":sl",$sl);
    $statement->bindValue(":gia",$gia);
    $statement->bindValue(":img",$img);
    $statement->bindValue(":id_ncc",$id_ncc);
    $statement->bindValue(":id_sp",$id_sp); 
    $statement->bindValue(":id_user",$id_user);
    $statement->execute();
    $statement->closeCursor();
     
}   

// Update lại thông tin bang giohang 
function sua_giohang($id,  $sl) {
    global $db;

    $query = 'UPDATE  giohang SET sl = :sl WHERE  id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(":sl",$sl);
    $statement->bindValue(":id",$id);
    $statement->execute();
    $statement->closeCursor();

}   

// Lấy số lượng sản phẩm trong bảng giohang theo ID người dùng 
function lay_sl_giohang($id) {
    global $db;
    $query = 'SELECT * FROM giohang WHERE id_user = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(":id",$id);
    $statement->execute();
    $result = $statement->rowCount();
    $statement->closeCursor();
    return  $result;
}

// Lấy tổng tiền trong bảng giohang theo ID_user
function tong_id_user($id_user) {
    global $db;
    $p = 0 ;
    $query = 'SELECT SUM(gia * sl) AS total FROM giohang WHERE id_user = :id_user ';
    $statement = $db->prepare($query);
    $statement->bindValue(":id_user",$id_user);
    $statement->execute();
    if ($statement->rowCount() > 0) {
        while($row = $statement->fetch()) {
            $p = $p + $row['total'];
        }
    }
    $statement->closeCursor();
    return $p;
}

// convert mảng 
function format_giohang_item($item) {
    return array(
        "id" => $item['id'],
        0 => $item['id'],
        "Names" => $item['Names'],
        1 => $item['Names'],
        "sl" => $item['sl'],
        2 => $item['sl'],
        "gia" => $item['gia'],
        3 => $item['gia'],
        "img" => $item['img'],
        4 => $item['img'],
        "id_ncc" => $item['id_ncc'],
        5 => $item['id_ncc'],
        "id_sp" => $item['id_sp'],
        6 => $item['id_sp'],
        "id_user" => $item['id_user'],
        7 => $item['id_user']
    );
}

// tạo đơn hàng 
function them_donhang( $id_user , $currentDateTime , $ma_dh , $gia  , $sl , $id_sp , $id_ncc , $address , $payment) {
    global $db;
    $query = 'INSERT INTO donhang( id_user , dates ,  ma_dh , gia , sl , id_sp , id_ncc , id_address , payment_method ) 
                VALUES ( :id_user , :dates , :ma_dh , :gia , :sl , :id_sp , :id_ncc , :id_address , :payment )';
    $statement = $db->prepare($query);
    $statement->bindValue(":id_user",$id_user );
    $statement->bindValue(":dates",$currentDateTime );
    $statement->bindValue(":ma_dh",$ma_dh);
    $statement->bindValue(":gia",$gia);
    $statement->bindValue(":sl",$sl);
    $statement->bindValue(":id_sp",$id_sp);
    $statement->bindValue(":id_ncc",$id_ncc);
    $statement->bindValue(":id_address",$address);
    $statement->bindValue(":payment",$payment);
    $statement->execute();
    $statement->closeCursor();
     
}  

// lấy id_dh vừa thêm mới 
function lay_iddh_new() {
    global $db;
    $query = 'SELECT * FROM donhang ORDER BY id DESC LIMIT 1;';
    $statement = $db->prepare($query);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;
}

// xóa sp trong gh khi tạo đơn hàng 
function xoa_giohang_donhang($id , $id_user) {
    global $db;

    $query = 'DELETE FROM giohang WHERE id_sp = :id AND id_user = :id_user';
    $statement = $db->prepare($query);
    $statement->bindValue(":id",$id);
    $statement->bindValue(":id_user",$id_user);
    $statement->execute();
    $statement->closeCursor();
}

// lấy ds các dh 
function all_donhang() {
    global $db;
    $query = 'SELECT * FROM donhang ';
    $statement = $db->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    return  $result;
}

// Cập nhật trạng thái đh
function up_dh($id , $currentDateTime , $status) {
    global $db;

    $query = 'INSERT INTO  statuss ( id_dh , dates , Id_statuss) 
    VALUES ( :id , :dates , :statuss )';
    $statement = $db->prepare($query);
    $statement->bindValue(":id",$id);
    $statement->bindValue(":dates",$currentDateTime);
    $statement->bindValue(":statuss",$status);
    $statement->execute();
    $statement->closeCursor();

}

// lấy từng đơn hàng theo id
function lay_donhang_id($id) {
    global $db; 
    $query = 'SELECT * FROM donhang WHERE id = :id ';
    $statement = $db->prepare($query);
    $statement->bindValue(":id",$id);
    $statement->execute();
    $result = $statement->fetch();
    $statement->closeCursor();
    return $result;
}

// lấy các mốc thời gian và trạng thái của đh
function all_dh_status_id($id) {
    global $db;
    $query = 'SELECT * FROM statuss WHERE id_dh = :id_dh ';
    $statement = $db->prepare($query);
    $statement->bindValue(":id_dh",$id);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    return  $result;
}



// lấy ds các dh của từng user
function all_donhang_user($id_user) {
    global $db;
    $query = 'SELECT donhang.id , ql_tt_sp.ten_sp, donhang.gia, donhang.sl, ncc.Ten_Ncc AS Nsx, img.Images
    FROM nhom_h.donhang AS donhang
    LEFT JOIN nhom_h.ql_tt_sp AS ql_tt_sp ON donhang.ID_sp = ql_tt_sp.ID_sp
    LEFT JOIN (
        SELECT        
            ID_sp, 
            Images,
            ROW_NUMBER() OVER (PARTITION BY ID_sp ORDER BY id) AS rn
        FROM nhom_h.image_sp
    ) AS img ON donhang.ID_sp = img.ID_sp AND img.rn = 1
    LEFT JOIN nhom_h.nha_cung_cap AS ncc ON ql_tt_sp.Nsx = ncc.ID_Ncc 
    WHERE donhang.id_user = :id_user';
    $statement = $db->prepare($query);
    $statement->bindValue(":id_user",$id_user);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    return  $result;
}

// lấy tên trạng thái của đh
function dh_statuss_name($id) {
    global $db;
    $query = 'SELECT * FROM statuss_ct WHERE id_statuss = :id_s';
    $statement = $db->prepare($query);
    $statement->bindValue(":id_s",$id);
    $statement->execute();
    $result = $statement->fetch();
    $statement->closeCursor();
    return $result['name_s'];
}

// lấy  trạng thái ht của đh
function dh_status_now($id) {
    global $db;
    $query = 'SELECT MAX(id_statuss) FROM statuss WHERE id_dh = :id_dh ';
    $statement = $db->prepare($query);
    $statement->bindValue(":id_dh",$id);
    $statement->execute();
    $result = $statement->fetch();
    $statement->closeCursor();
    return  $result['MAX(id_statuss)'];
}


?>