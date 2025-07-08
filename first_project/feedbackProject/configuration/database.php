<?php
//PDO - PHP Data Objects
define('DATABASE_SERVER', 'localhost');
define('DATABASE_USER', 'root');
define('DATABASE_PASSWORD', 'matkhau_moi_cua_ban');
define('DATABASE_NAME', 'phpapp');

$connection = null; // Khởi tạo biến kết nối

try{
    // Kiểm tra kết nối
   $connection = new PDO(
    'mysql:host=' . DATABASE_SERVER . ';dbname=' . DATABASE_NAME,
    DATABASE_USER, DATABASE_PASSWORD);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected successfully to the database: " . DATABASE_NAME . "<br>";
} catch (PDOException $e) {
    // Xử lý lỗi kết nối
    echo "Connection failed: " . $e->getMessage() . "<br>";
    $connection = null;
}
?>