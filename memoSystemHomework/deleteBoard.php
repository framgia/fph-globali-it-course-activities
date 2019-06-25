<?php
include 'dbconnect.php';

$id = $_GET["id"];

$sql_memos = "DELETE FROM memos WHERE boardId = $id";
$sql_boards = "DELETE FROM boards WHERE id = $id";

if($conn->query($sql_memos) && $conn->query($sql_boards) === TRUE){
    // echo "<div class='success'>Your topic was deleted successfully.</div>";
    header("location: boards.php");
    exit();
}else{
    echo "<div class='error'>Error during deleting.</div>" . $conn->error;
}
?>