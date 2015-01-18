<?php
$textbook = $_POST['textbookname'];
$coursename = $_POST['coursename'];
$professor = $_POST['professor'];
$isbn = $_POST['isbn'];
$usefulness = $_POST['response-rate1'];
$value = $_POST['response-rate2'];
$clarity = $_POST['response-rate3'];
$need = $_POST['switch1']; 
if($need == null) {
	$need = "false";
}
$comment = $_POST['textarea'];


// Create connection
$conn = new mysqli("localhost", "root", "zHfApkXe1g", "catalog");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


//$sql = "SELECT ISBN FROM book";
//$result = $conn->query($sql);

if (TRUE) {
	//$sql = "UPDATE review SET courseName = $coursename, ProfessorName = $professor, UsefulnessRating = $usefulness, ValueRating = $value, ClarityRating = $clarity, Need= $switch1, Comment = $comment WHERE ($result==$isbn);" }
	//else {
	$sql = "INSERT INTO book (TextbookName, ISBN, CourseName, ProfessorName)
	VALUES ($textbook, $isbn, $coursename, $professor)";
	//$sql = "INSERT INTO review (ISBN, UsefulnessRating, ValueRating, ClarityRating, Need, Comment)
	//VALUES ($isbn, $usefulness, $value, $clarity, $need, $comment)";
}


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>