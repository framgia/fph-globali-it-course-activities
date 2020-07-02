<?php
include 'dbconnect.php';

$id = $_POST["id"];
$name = $_POST["name"];
$description = $_POST["description"];

$sql = "UPDATE boards SET name = '$name', description = '$description' WHERE id = '$id'";

if($conn->exec($sql)) {
    header('location: boards.php');
    exit();
} else {
    echo 'Error while updating: ' . $conn->errorInfo();
}
?>