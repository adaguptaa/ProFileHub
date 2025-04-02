<?php
$host = "localhost";  // MAMP default
$username = "root";   // MAMP default username
$password = "root";   // MAMP default password
$dbname = "file_upload_db";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
