<?php
$servername = "localhost";
$username = "root";
$password = "zHfApkXelg";

// Create connection
$conn = mysql_connect("localhost", "root")

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";