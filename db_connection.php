<?php
// Replace these with your database credentials
$host = "localhost";
$username = "root";
$password = "";
$database = "hardware_store";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>