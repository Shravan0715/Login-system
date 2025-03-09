<?php
$host = "127.0.0.1";  // Use IP instead of localhost
$user = "root";
$pass = "";
$dbname = "loginsystem";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
