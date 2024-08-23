<?php

  
    // Thêm đánh giá của khách không có tài khoản
if (!function_exists('add_contact'))
{
function add_contact($your_name , $email , $title , $comment){

    global $db;
    $querry = 'INSERT INTO contact_data(your_name,email,title,comment) 
    VALUES ( :ten, :email , :title, :comments)';
    $statement = $db->prepare($querry);
    $statement->bindValue(":ten",$your_name);
    $statement->bindValue(":email",$email);
    $statement->bindValue(":title",$title);
    $statement->bindValue(":comments",$comment);
    $statement->execute();
    $statement->closeCursor();

}
}

?>