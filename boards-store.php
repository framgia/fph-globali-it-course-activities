<?php
include 'dbconnect.php';

$name = $_POST["name"];
$description = $_POST["description"];

$sql = "INSERT INTO boards(name, description, created_at) VALUES ('$name', '$description', cast(now() as date))";

if ($conn->query($sql)){
    header('location: boards.php');
    exit();
} else {
	echo "Error during registration" . $conn->error;
}
?>