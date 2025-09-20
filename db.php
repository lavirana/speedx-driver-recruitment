<?php
$host = "localhost";
$user = "root";   // your MySQL username
$pass = "root";       // your MySQL password
$db   = "driver_recruitment";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
