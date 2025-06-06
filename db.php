<?php
$host = "localhost";
$dbname = "gdrhkwmq_test";
$username = "gdrhkwmq_root";
$password = "&E}[26V@EEfo";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
