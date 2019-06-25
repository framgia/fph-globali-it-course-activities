<?php
include 'dbconnect.php';

$boardName = $_POST["boardName"];
$description = $_POST["description"];
$id = $_POST["id"];

$sql = "UPDATE boards SET boardName = '$boardName', description = '$description' WHERE id = $id";

if($conn->query($sql) === true){
	// echo "Your topic was registered succesfully";
    // echo "<a href='toppage.php'>back to toppage</a>";
    header("location: boards.php");
    exit();
}else {
	echo "Error during registration" . $conn->error;
}
?>