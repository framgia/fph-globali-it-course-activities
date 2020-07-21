<?php
include 'database.php';

$id = $_POST["id"];
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

$sql = "UPDATE orders SET customer_name = '$name', topping = '$topping', sauce = '$sauce', extra_cheese = '$extra_cheese', gluten_free = '$gluten_free', instructions = '$instructions'";

if($conn->exec($sql)) {
    header('location: orders.php');
    exit();
} else {
    echo 'Error while updating: ' . $conn->errorInfo();
}