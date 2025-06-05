<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = ""; // Default password for XAMPP is empty
$database = "school";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
