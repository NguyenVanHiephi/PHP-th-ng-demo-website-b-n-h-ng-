<?php

require ("../model/database.php");
    require("../model/cart.php");

session_start();
   
$total = 0;
$cart_sl = 0;
    
    
    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
        if ($action == NULL) {
            $action = 'blog';
        }
    }

    if($action == 'blog'){
        include ("blog.php");
        
       
        
        
    }else  if($action == 'post'){
        include ("post.php");
       
        

    }

?>