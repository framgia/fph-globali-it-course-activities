<?php
include 'dbconnect.php';

$id = $_POST["id"];
$name = $_POST["name"];
$contents = $_POST["contents"];

$sql = "INSERT INTO memos(name, contents, board_id, created_at) VALUES ('$name', '$contents', '$id', cast(now() as date))";

if($conn->query($sql)) {
    header("location: boards-show.php?id=".$id);
    exit();
}else {
	echo "Error during registration" . $conn->error;
}
?>

