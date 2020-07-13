<?php
include 'dbconnect.php';

$id = $_POST["id"];
$sql_boards = "DELETE FROM boards WHERE id = '$id'";

if ($conn->exec($sql_boards)) {
    header('location: boards.php');
    exit();
} else {
    echo "Error during deleting: " . $conn->errorInfo();
}
?>