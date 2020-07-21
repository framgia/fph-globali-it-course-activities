# Database

1. Create the database
```sql
CREATE DATABASE pizza_app;
```

2. Create Orders Table
```sql
CREATE TABLE `pizza_app`.`orders` (
 `id` INT NOT NULL AUTO_INCREMENT,
 `customer_name` VARCHAR(255) NULL,
 `topping` VARCHAR(45) NULL,
 `sauce` VARCHAR(45) NULL,
 `extra_cheese` BOOLEAN NULL,
 `gluten_free` BOOLEAN NULL,
 `instructions` TEXT(1024) NULL,
 PRIMARY KEY (`id`));
```

3. Create database.php first (To check Database Connection, open the file through the Server)
```php
<?php
$host = 'mysql';
$user = 'root';
$pass = 'GlobalIT@123';
$db = 'pizza_app';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage() . "<br>";
}
?>
```

4. Make the Pizza Form!