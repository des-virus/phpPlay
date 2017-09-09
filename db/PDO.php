<?php

function getConnection() {
// Set options
    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
// Create a new PDO instanace
    try {
        //$db = new PDO('mysql:host=localhost;dbname=id2631229_material', 'id2631229_root', 'root123456', $options);
        $db = new PDO('mysql:host=localhost;dbname=material', 'root', 'root', $options);
        return $db;
    }
// Catch any errors
    catch (PDOException $e) {
        echo $e->getMessage();
        exit();
    }
}

function getMenu(){
    $conn = getConnection();
    $sql = "SELECT id, name, type, note FROM menu ";
    
    $stmt = $conn->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute();
    $obj = $stmt->fetchAll();
    
    return json_encode($obj);
}


function getMenuDetail($menu_id){
    $conn = getConnection();
    $sql = "SELECT `id`, `menu_id`, `id_string`, `title`, `content`, `note` FROM `menu_detail` where `menu_id` = $menu_id";
    
    $stmt = $conn->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute();
    $obj = $stmt->fetchAll();
    
    
    return json_encode($obj);
}
