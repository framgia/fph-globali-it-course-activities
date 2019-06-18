<?php
include "User.php";

if (isset($_POST['addUser'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];

    $user = new User(); // instatiate a new User Object
    $user->saveData(array($firstName, $lastName, $email, $gender, $age)); // save the data to database
} else if (isset($_POST['updateUser'])) {
    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];

    User::updateData(array($firstName, $lastName, $email, $gender, $age, $id)); // save changes to DB
} else if (isset($_POST['deleteUser'])) {
    $id = $_POST['id'];
    
    User::deleteData(array($id)); // delete data in database
}
?>