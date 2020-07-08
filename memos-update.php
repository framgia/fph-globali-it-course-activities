<?php
include 'dbconnect.php';

$memo_name = $_POST['name'];
$memo_contents = $_POST['contents'];
$id = $_POST['id'];

$sql = "SELECT * FROM memos WHERE id = '$id'";
$memo = $conn->query($sql)
                ->fetch(PDO::FETCH_ASSOC);
$board_id = $memo['board_id'];

$sql = "UPDATE memos SET name = '$memo_name', contents = '$memo_contents' WHERE id = '$id'";

if ($conn->query($sql)) {
    header("location: boards-show.php?id=" . $board_id);
    exit();
} else {
    echo "Error: " . $conn->getError();
}
?>