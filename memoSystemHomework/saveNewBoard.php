<?php
include 'dbconnect.php';

$boardName = $_POST["boardName"];
$description = $_POST["description"];

$sql = "INSERT INTO boards(boardName, description, createdAt) VALUES ('$boardName', '$description', cast(now() as date))";

if($conn->query($sql) === true){
	// echo "Your topic was registered succesfully";
    // echo "<a href='toppage.php'>back to toppage</a>";
    header('location: boards.php');
    exit();
}else {
	echo "Error during registration" . $conn->error;
}
?>