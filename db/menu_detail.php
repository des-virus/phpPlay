<?php
    
require './PDO.php';
$menu_id = $_POST['data'];
echo getMenuDetail($menu_id);
