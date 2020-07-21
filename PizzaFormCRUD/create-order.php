<?php
include 'database.php';

$name = $_POST["name"];
$topping = $_POST["topping"];
$sauce = $_POST["sauce"];
$extra_cheese = $_POST["extra_cheese"];
$gluten_free = $_POST["gluten_free"];
$instructions = $_POST["instructions"];

if ($extra_cheese == "true") {
    $extra_cheese = 1;
} else {
    $extra_cheese = 0;
}

if ($gluten_free == "true") {
    $gluten_free = 1;
} else {
    $gluten_free = 0;
}

$sql = "INSERT INTO orders(customer_name, topping, sauce, extra_cheese, gluten_free, instructions) VALUES ('$name', '$topping', '$sauce', '$extra_cheese, '$gluten_free', '$instructions');";

if ($conn->query($sql)){
    header('location: index.php');
    exit();
} else {
	echo "Error during registration" . $conn->errorInfo();
}
?>