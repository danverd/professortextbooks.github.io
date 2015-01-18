<?php
$textbook = mysql_real_escape_string($_POST['textbookname']);
$username = mysql_real_escape_string($_POST['bravo']);
$password = mysql_real_escape_string($_POST['charlie']);
$isbn = mysql_real_escape_string($_POST['isbn']);
$usefulness = mysql_real_escape_string($_POST['response-rate1']);
$value = mysql_real_escape_string($_POST['response-rate2']);
$clarity = mysql_real_escape_string($_POST['response-rate3']);
$need = mysql_real_escape_string($_POST['switch1']);
$comment = mysql_real_escape_string($_POST['textarea']);


// Create connection
$conn = new mysqli(23.101.118.145, professortextbooks/professortextbooks, Boagiemaster123, Catalog);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



//if ISBN finds a match {
//	sjdfodsfjsidfhsdiufhsuidfhusfhs
//	else {
//		create -------- 
 $sql = "INSERT INTO Book (TextbookName, ISBN, CourseName, UsefulnessRating, ValueRating, ClarityRating, Need, Comment, ProfessorName)
VALUES ('textbookname', 'isbn', 'coursename', 'response-rate1', 'response-rate2', 'response-rate3', 'switch1', 'textarea')";
	}
}
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>