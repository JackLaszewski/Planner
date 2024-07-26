<?php
$db_host = 'localhost';
$db_name = 'my_php_project';
$db_user = 'jack_laszewski'; 
$db_pass = 'Jl220234'; 

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
