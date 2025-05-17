<?php
$host = "localhost";
$dbname = "gdrhkwmq_test";
$username = "gdrhkwmq_root";
$password = "i65=K{(m8505";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
