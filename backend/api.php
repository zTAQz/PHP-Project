<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json; charset=UTF-8");
include 'db.php';

try {
    $sql = "SELECT * FROM users";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll();
    if (count($data) > 0) {
        echo json_encode($data);
    } else {
        echo json_encode([
            ["id" => 1, "name" => "Demo User PDO", "email" => "pdo@test.com"],
            ["id" => 2, "name" => "Nguyen Van A", "email" => "nva@test2.com"]
        ]);
    }
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(["error" => "Lỗi truy vấn: " . $e->getMessage()]);
}
