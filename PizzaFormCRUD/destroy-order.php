<?php
include 'database.php';

$id = $_POST["id"];
$sql_boards = "DELETE FROM orders WHERE id = '$id'";

if ($conn->exec($sql_boards)) {
    header('location: orders.php');
    exit();
} else {
    echo "Error during deleting: " . $conn->errorInfo();
}
?>