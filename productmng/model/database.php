<?php
    $dsn = 'mysql:host=localhost;dbname=nhom_h';
    $username = "root";
    $password = "";

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_db = $e->getMessage();
        include ("../login");
        exit();
    }
?>