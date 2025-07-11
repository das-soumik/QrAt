<?php
header('Content-Type: application/json');

$conn = new mysqli("sql107.infinityfree.com", "if0_39447868", "QrAttent2025", "if0_39447868_qrAttendence");

if ($conn->connect_error) {
    echo json_encode(["status" => "fail", "message" => "DB Connection Error"]);
    exit;
}

$sql = "SELECT id, session_name FROM sessions";
$result = $conn->query($sql);

$sessions = [];

while ($row = $result->fetch_assoc()) {
    $sessions[] = [
        "id" => $row['id'],
        "name" => $row['session_name'] // match the key used in Android
    ];
}

echo json_encode(["status" => "success", "sessions" => $sessions]);
$conn->close();
?>
