<?php
// Lấy danh mục sản phẩm
// Lấy tên sản phẩm
// Thêm loại sản phẩm

//1. Hàm lấy danh mục sản phẩm trong bảng categories
if (!function_exists('danh_muc_san_pham'))
{
function danh_muc_san_pham() {
    global $db;
    $querry_categories = "SELECT * FROM ql_sp c WHERE c.ID_loai_sp IN (SELECT parent_category_id FROM categoryrelations) || c.ID_loai_sp NOT IN (SELECT child_category_id FROM categoryrelations);";
    $statement = $db->prepare($querry_categories);
    $statement->execute();
    return $statement;
}
}

// lấy danh mục con
if (!function_exists('danh_muccon_san_pham'))
{
function danh_muccon_san_pham() {
    global $db;
    $querry_categories = "SELECT * FROM ql_sp c WHERE c.ID_loai_sp IN (SELECT child_category_id FROM categoryrelations);";
    $statement = $db->prepare($querry_categories);
    $statement->execute();
    return $statement;
}
}

// lấy danh mục con với danh mục cha
if (!function_exists('danh_muc_con_idcha'))
{  
function danh_muc_con_idcha($category_id) {
    global $db;
    $querry_categories = "SELECT * FROM ql_sp c WHERE c.ID_loai_sp IN (SELECT child_category_id FROM categoryrelations WHERE parent_category_id = :category_id);";
    $statement = $db->prepare($querry_categories);
    $statement->bindValue(":category_id", $category_id);
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    return  $results;
}
}

// lấy all danh mục 
if (!function_exists('alldanhmuc'))
{
function alldanhmuc(){

    global $db;
    $querry_categories = "SELECT * FROM ql_sp ;";
    $statement = $db->prepare($querry_categories);
    $statement->execute();
    return $statement;
}
}

//2. Hàm lấy tên sản phẩm trong bảng categories
if (!function_exists('ten_san_pham'))
{
function ten_san_pham($category_id) {
    global $db;
    $querry_category_name = "SELECT * FROM ql_sp WHERE ID_loai_sp = :category_id";
    $statement = $db->prepare($querry_category_name);
    $statement->bindValue(":category_id", $category_id);
    $statement->execute();
    $category = $statement->fetch();
    $statement->closeCursor();
    $category_name = $category["Loai_sp"];
    return $category_name;
}
}

// Thêm loại sản phẩm
if (!function_exists('them_loai_sp'))
{
function them_loai_sp($category_name , $image) {
    global $db;
    $querry = "INSERT INTO ql_sp (Loai_sp , images) VALUES (:category_name , :images)";
    $statement = $db->prepare($querry);
    $statement->bindValue(":category_name", $category_name);
    $statement->bindValue(":images", $image);
    $statement->execute();
    $statement->closeCursor();
}
}

// Xoá loại sản phẩm
if (!function_exists('xoa_loai_sp'))
{
function xoa_loai_sp($category_id){
    global $db;
    $querry = "DELETE FROM ql_sp WHERE ID_loai_sp = :category_id";
    $statement = $db->prepare($querry);
    $statement->bindValue(":category_id", $category_id);
    $statement->execute();
    $statement->closeCursor();
}
}

// thêm quan hệ cho các danh mục 
if (!function_exists('them_qh_sp'))
{
function them_qh_sp($id_cha , $id_con) {
    global $db;
    $querry = "INSERT INTO categoryrelations ( parent_category_id , child_category_id) VALUES (:id_cha , :id_con)";
    $statement = $db->prepare($querry);
    $statement->bindValue(":id_cha", $id_cha);
    $statement->bindValue(":id_con", $id_con);
    $statement->execute();
    $statement->closeCursor();
}
}

// lấy các mối quan hệ của dm 
if (!function_exists('allcategoryrelations'))
{
function allcategoryrelations(){

    global $db;
    $querry_categories = "SELECT cr.relation_id , sp1.Loai_sp AS parent_Loai_sp, sp2.Loai_sp AS child_Loai_sp
    FROM categoryrelations cr
    JOIN ql_sp sp1 ON cr.parent_category_id = sp1.ID_loai_sp
    JOIN ql_sp sp2 ON cr.child_category_id = sp2.ID_loai_sp;";
    $statement = $db->prepare($querry_categories);
    $statement->execute();
    return $statement;
}
}

// Xoá mối quan hệ của dm 
if (!function_exists('xoa_rt_dm'))
{
function xoa_rt_dm($id){
    global $db;
    $querry = "DELETE FROM categoryrelations WHERE relation_id = :id";
    $statement = $db->prepare($querry);
    $statement->bindValue(":id", $id);
    $statement->execute();
    $statement->closeCursor();
}
}
?>