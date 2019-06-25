<?php
include 'dbconnect.php';

$id = $_GET["id"];

//Getting boardId
$sql = "SELECT * FROM memos WHERE id = $id";
$memos = $conn->query($sql);
$memo = $memos->fetch_assoc();
$boardId = $memo['boardId'];

$sql = "DELETE FROM memos WHERE id = $id";

if($conn->query($sql) === TRUE){
    // echo "<div class='success'>Your topic was deleted successfully.</div>";
    header("location: showBoard.php?id=".$boardId);
    exit();
}else{
    echo "<div class='error'>Error during deleting.</div>" . $conn->error;
}
?>