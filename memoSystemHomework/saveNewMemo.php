<?php
include 'dbconnect.php';

$memoName = $_POST["memoName"];
$contents = $_POST["contents"];
//This is memoId
$id = $_POST["id"];

$sql = "INSERT INTO memos(memoName, contents, boardId) VALUES ('$memoName', '$contents', '$id')";

if($conn->query($sql) === true){
	// echo "Your topic was registered succesfully";
    // echo "<a href='toppage.php'>back to toppage</a>";
    header("location: showBoard.php?id=".$id);
    exit();
}else {
	echo "Error during registration" . $conn->error;
}
?>