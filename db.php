<?php
$servername = "localhost";
$username = "root";
$password = ""; // รหัสผ่านเริ่มต้นของ Laragon
$dbname = "testdb";

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
