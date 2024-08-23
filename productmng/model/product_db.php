<?php


//1. Lấy thông tin sản phẩm trong bảng products theo categoryID
if (!function_exists('lay_san_pham_categoryID'))
{
function lay_san_pham_categoryID($category_id) {
    global $db;
    $query = 'SELECT ql_tt_sp.ID_sp , ten_sp , ID_loai_sp , Gia_sp , Ten_Ncc AS Nsx , img.Images
    FROM nhom_h.ql_tt_sp AS ql_tt_sp
    LEFT JOIN (
        SELECT ID_sp, Images, rn
    FROM (
        SELECT ID_sp, Images, 
               ROW_NUMBER() OVER (PARTITION BY ID_sp ORDER BY id ) AS rn
        FROM image_sp
    ) AS img_sub
    WHERE rn = 1
) AS img ON ql_tt_sp.ID_sp = img.ID_sp
    LEFT JOIN nhom_h.nha_cung_cap AS ncc ON ql_tt_sp.Nsx = ncc.ID_Ncc
    LEFT JOIN categoryrelations AS cr ON ql_tt_sp.ID_loai_sp = cr.child_category_id
WHERE cr.parent_category_id = :category_id OR ql_tt_sp.ID_loai_sp = :category_id;';
    $statement = $db->prepare($query);
    $statement->bindValue(":category_id",$category_id);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
    return $products;
}
}

//2. Lấy thông tin sản phẩm trong bảng products theo productID
if (!function_exists('lay_san_pham_productID')){
function lay_san_pham_productid($product_id) {
    global $db;
    $query = 'SELECT ql_tt_sp.ID_sp , ten_sp , ID_loai_sp , Gia_sp , Ten_Ncc AS Nsx , Images
    FROM nhom_h.ql_tt_sp AS ql_tt_sp
    LEFT JOIN (
        SELECT        
            ID_sp, 
            Images AS Images,
            ROW_NUMBER() OVER (PARTITION BY ID_sp ORDER BY id) AS rn
        FROM nhom_h.image_sp
    ) AS t ON ql_tt_sp.ID_sp = t.ID_sp AND t.rn = 1
    LEFT JOIN nhom_h.nha_cung_cap AS ncc ON ql_tt_sp.Nsx = ncc.ID_Ncc WHERE ql_tt_sp.ID_sp = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":product_id",$product_id);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;
}
}

//2. Lấy thông tin sản phẩm trong bảng products theo productID có id_ncc
if (!function_exists('lay_sp_productid_ncc')){
function lay_sp_productid_ncc($product_id) {
    global $db;
    $query = 'SELECT ql_tt_sp.ID_sp , ten_sp , ID_loai_sp , Gia_sp ,  Nsx , Images
    FROM nhom_h.ql_tt_sp AS ql_tt_sp
    LEFT JOIN (
        SELECT        
            ID_sp, 
            Images AS Images,
            ROW_NUMBER() OVER (PARTITION BY ID_sp ORDER BY id) AS rn
        FROM nhom_h.image_sp
    ) AS t ON ql_tt_sp.ID_sp = t.ID_sp AND t.rn = 1
    WHERE ql_tt_sp.ID_sp = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":product_id",$product_id);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;
}
}

// Lấy thông tin tất cả sản phẩm
if (!function_exists('lay_san_pham')){
function lay_san_pham() {
    global $db;
    $query = 'SELECT ql_tt_sp.ID_sp , ten_sp , ID_loai_sp , Gia_sp , Ten_Ncc AS Nsx , Images
    FROM nhom_h.ql_tt_sp AS ql_tt_sp
    LEFT JOIN (
        SELECT        
            ID_sp, 
            Images AS Images,
            ROW_NUMBER() OVER (PARTITION BY ID_sp ORDER BY id) AS rn
        FROM nhom_h.image_sp
    ) AS t ON ql_tt_sp.ID_sp = t.ID_sp AND t.rn = 1
    LEFT JOIN nhom_h.nha_cung_cap AS ncc ON ql_tt_sp.Nsx = ncc.ID_Ncc;';
    $statement = $db->prepare($query);
    $statement->execute();
    $product = $statement->fetchAll();
    $statement->closeCursor();
    return $product;
}
}

//3. Xoá thông tin sản phẩm trong bảng products theo productID
if (!function_exists('xoa_san_pham')){
function xoa_san_pham($product_id) {
    global $db;
    
    $query = 'DELETE FROM ql_tt_sp WHERE ID_sp = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":product_id",$product_id);
    $statement->execute();
    $statement->closeCursor();
}
}

//4. Thêm sản phẩm vào bảng products 
if (!function_exists('them_san_pham')){
function them_san_pham( $Name, $Loai, $Gia , $Nsx ) {
    global $db;

    $query = 'INSERT INTO ql_tt_sp ( ten_sp, ID_loai_sp, Gia_sp , Nsx ) 
                VALUES ( :ten, :loai , :gia, :nsx )';
    $statement = $db->prepare($query);
    $statement->bindValue(":ten",$Name);
    $statement->bindValue(":loai",$Loai);
    $statement->bindValue(":gia",$Gia);
    $statement->bindValue(":nsx",$Nsx); 
    $statement->execute();
    $statement->closeCursor();

}   
}

// Update lại thông tin sản phẩm 
if (!function_exists('sua_san_pham')){
function sua_san_pham($id, $Name, $Loai, $Gia , $Nsx) {
    global $db;

    $query = 'UPDATE  ql_tt_sp SET ten_sp = :ten, ID_loai_sp = :loai, Gia_sp = :gia, Nsx = :nsx WHERE  ID_sp = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(":ten",$Name);
    $statement->bindValue(":loai",$Loai);
    $statement->bindValue(":gia",$Gia);
    $statement->bindValue(":nsx",$Nsx);
    $statement->bindValue(":id",$id);
    $statement->execute();
    $statement->closeCursor();

}
}

// Tìm kiếm sản phẩm
if (!function_exists('search')){
function search(  $categories,$minPrice, $maxPrice,$key){
    global $db;

    $key = "%".$key."%";
    $categoryFilter = "";
    if ($categories!= NULL) {
        $categoriesArray = explode("%1H", $categories);
        $count = count($categoriesArray);
        $categoryFilter = " AND ( cr.parent_category_id IN ( ";
        foreach($categoriesArray as $i => $value) {
            $categoryFilter .=  " '" . $value . "'";
            if ($i < $count - 1) {
                $categoryFilter .= ',';  // Nếu không phải là phần tử cuối cùng, thêm dấu phẩy
            }
        }
        // foreach ($categories as $index => $category) {
            
            // if ($index < count($categories) - 1) {
            //     $categoryFilter .= ", ";
            // }
        //}
        $categoryFilter .=  " ) OR ql_tt_sp.ID_loai_sp  IN (";
         // foreach ($categories as $index => $category) {
        foreach($categoriesArray as $i => $value) {
            $categoryFilter .=  " '" . $value . "'";
            if ($i < $count - 1) {
                $categoryFilter .= ',';  // Nếu không phải là phần tử cuối cùng, thêm dấu phẩy
            }
        }
            // if ($index < count($categories) - 1) {
            //     $categoryFilter .= ", ";
            // }
        //}
        $categoryFilter .= ") )";
    }

    $query = 'SELECT ql_tt_sp.ID_sp , ten_sp , ID_loai_sp , Gia_sp , Ten_Ncc AS Nsx , Images
    FROM nhom_h.ql_tt_sp AS ql_tt_sp
    LEFT JOIN (
        SELECT        
            ID_sp, 
            Images AS Images,
            ROW_NUMBER() OVER (PARTITION BY ID_sp ORDER BY id) AS rn
        FROM nhom_h.image_sp
    ) AS t ON ql_tt_sp.ID_sp = t.ID_sp AND t.rn = 1
    LEFT JOIN nhom_h.nha_cung_cap AS ncc ON ql_tt_sp.Nsx = ncc.ID_Ncc 
    LEFT JOIN categoryrelations AS cr ON ql_tt_sp.ID_loai_sp = cr.child_category_id
    WHERE ( ten_sp LIKE :ten OR ID_loai_sp LIKE :loai OR Gia_sp LIKE :gia OR Nsx LIKE :nsx ) AND Gia_sp BETWEEN :minPrice AND :maxPrice ' . $categoryFilter;
    $statement = $db->prepare($query);
    $statement->bindValue(":ten",$key);
    $statement->bindValue(":loai",$key);
    $statement->bindValue(":gia",$key);
    $statement->bindValue(":nsx",$key);
    $statement->bindValue(":minPrice",$minPrice);
    $statement->bindValue(":maxPrice",$maxPrice);
    $statement->execute();
    $product = $statement->fetchAll();
    $statement->closeCursor();
    return $product;
}
}



// thêm ảnh cho sản phẩm 
if (!function_exists('add_anh_sp')){
function add_anh_sp($id_sp , $anh){

    global $db;

    $query = 'INSERT INTO image_sp ( id_sp , Images) 
                VALUES ( :id, :anh )';
    $statement = $db->prepare($query);
    $statement->bindValue(":id",$id_sp);
    $statement->bindValue(":anh",$anh); 
    $statement->execute();
    $statement->closeCursor();

}
}

// xóa tất ảnh của một sản phẩm
if (!function_exists('xoa_anh_sp')){
function xoa_anh_sp($id_sp) {
    global $db;
    
    $query = 'DELETE FROM image_sp WHERE id_sp = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(":id",$id_sp);
    $statement->execute();
    $statement->closeCursor();
}
}

// xóa một ảnh của một sản phẩm
if (!function_exists('xoa_anh_sp_id')){
function xoa_anh_sp_id($id) {
    global $db;
    
    $query = 'DELETE FROM image_sp WHERE id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(":id",$id);
    $statement->execute();
    $statement->closeCursor();
}
}

// lấy tất cả ảnh của một sp
if (!function_exists('lay_anh_spid')){
function lay_anh_spid($id_sp) {
    global $db;
    $query = 'SELECT * FROM image_sp WHERE id_sp = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(":id",$id_sp);
    $statement->execute();
    $product = $statement->fetchAll();
    $statement->closeCursor();
    return $product;
}
}


// lấy id_sp vừa thêm mới 
if (!function_exists('lay_idsp_new')){
function lay_idsp_new() {
    global $db;
    $query = 'SELECT * FROM ql_tt_sp ORDER BY ID_sp DESC LIMIT 1;';
    $statement = $db->prepare($query);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;
}
}

// convert tiền Việt
if (!function_exists('format_currency_vnd')) {
    function format_currency_vnd($number) {

        $number = preg_replace('/[^0-9.]/', '', $number);

        if (is_numeric($number)) {
            $number = (float) $number; // or (int) if you don't want decimals
        } else {
            return "Invalid input"; // Return an error message or handle as needed
        }
        
        return number_format($number, 0, ',', '.') . 'đ';
    }
}

?>