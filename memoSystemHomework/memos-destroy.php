<?php
include 'dbconnect.php';

$id = $_POST['id'];

$sql = "SELECT * FROM memos WHERE id = '$id'";
$memo = $conn->query($sql)
                ->fetch(PDO::FETCH_ASSOC);

$board_id = $memo['board_id'];

$sql = "DELETE FROM memos WHERE id = '$id'";

if ($conn->query($sql)) {
    header("location: boards-show.php?id=" . $board_id);
    exit();
} else {
    echo "Error: " . $conn->getError();
}