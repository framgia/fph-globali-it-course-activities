<?php
include_once 'Board.php';

if (isset($_POST['createNewBoard'])) {
    $boardName = $_POST['boardName'];
    $description = $_POST['description'];

    $board = new Board();
    $board->saveData(array($boardName, $description));

    header('Location: listOfBoards.php');
}
else if (isset($_POST['editBoard'])) {
    $id = $_POST['id'];
    $boardName = $_POST['boardName'];
    $description = $_POST['description'];

    Board::updateData(array($boardName, $description, $id));

    header('Location: listOfBoards.php');
}
else if (isset($_POST['deleteBoard'])) {
    $id = $_POST['id'];

    Board::deleteBoard(array($id));

    header('Location: listOfBoards.php');
}
?>