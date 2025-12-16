<?php
$is_local = false;
if ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['SERVER_PORT'] == 8000) {
    $is_local = true;
}

if ($is_local) {
    $host = 'my-db';
    $db   = 'project1_db';
    $user = 'root';
    $pass = 'root';
} else {
    $host = "sql302.infinityfree.com";
    $dbname = "if0_40245835_phpproject";
    $username = "if0_40245835";
    $password = "H8pHYNWlysy";
}


try {

    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $conn = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    header("Content-Type: application/json; charset=UTF-8");
    echo json_encode(["error" => "Lỗi kết nối Database: " . $e->getMessage()]);
    exit();
}
