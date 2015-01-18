<?php
$servername = "104.131.119.185";
$username = "root";
$password = "zHfApkXelg";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";