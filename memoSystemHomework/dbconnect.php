<?php
$host = 'mysql';
$user = 'root';
$pass = 'GlobalIT@123';
$db = 'memo_application';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage() . "<br>";
}
?>