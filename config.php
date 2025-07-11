<?php
$host = "sql107.infinityfree.com";
$user = "if0_39447868";  // default for XAMPP
$pass = "QrAttent2025";      // default is blank
$dbname = "if0_39447868_qrAttendence";

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
