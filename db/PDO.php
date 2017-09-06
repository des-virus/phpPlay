<?php

function getConnection() {
// Set options
    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
// Create a new PDO instanace
    try {
        $db = new PDO('mysql:host=localhost;dbname=ten_csdl', 'user_dang_nhap_csdl', 'password_csdl', $options);
        return $db;
    }
// Catch any errors
    catch (PDOException $e) {
        echo $e->getMessage();
        exit();
    }
}
