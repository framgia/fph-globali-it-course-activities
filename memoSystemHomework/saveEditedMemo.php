<?php
include 'dbconnect.php';

$memoName = $_POST["memoName"];
$contents = $_POST["contents"];
$id = $_POST["id"];

//Getting boardId
$sql = "SELECT * FROM memos WHERE id = $id";
$memos = $conn->query($sql);
$memo = $memos->fetch_assoc();
$boardId = $memo['boardId'];

$sql = "UPDATE memos SET memoName = '$memoName', contents = '$contents' WHERE id = $id";

if($conn->query($sql) === true){
	// echo "Your topic was registered succesfully";
    // echo "<a href='toppage.php'>back to toppage</a>";
    header("location: showBoard.php?id=".$boardId);
    exit();
}else {
	echo "Error during registration" . $conn->error;
}
?>