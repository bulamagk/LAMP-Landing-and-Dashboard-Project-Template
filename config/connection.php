<?php
$host = 'localhost';
$db = 'pms_db';
$user =  'root';
$password = '';

$dsn = 'mysql:host='.$host.';dbname='.$db;

try {
    $pdo = new PDO($dsn, $user, $password, 
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);

    session_start();
} catch (PDOException $e) {
    echo $e->getMessage();
}
 ?>