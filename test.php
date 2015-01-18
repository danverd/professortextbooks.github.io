<?php
$servername = "23.101.118.145";
$username = "professortextbooks\professortextbooks";
$password = "Boagiemaster123";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";