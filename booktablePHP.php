<?php
	$servername = "localhost";
	$username = "root";
	$password = "boagiemaster123";
	$dbname = "book";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	else {
		echo " Welcome!"
		 }


	// sql to create table
	$sql = "CREATE TABLE book (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	TextBookName VARCHAR(30) NOT NULL,
	ISBN INT(13) NOT NULL,
	CourseName VARCHAR(50),
	ProfessorName VARCHAR(30),

	)";

	if ($conn->query($sql) === TRUE) {
	    echo "Tabole MyGuests created successfully";
	} else {
	    echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>