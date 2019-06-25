<?php
include 'dbconnect.php';

$id = $_GET['id'];
// get information of boards
$sql = "SELECT * FROM boards WHERE id = $id";
$boards = $conn->query($sql);
$board = $boards->fetch_assoc();

$id = $board['id'];
$current_boardName = $board['boardName'];
$current_description = $board['description'];

// get information of memos
$sql_memos = "SELECT * FROM memos WHERE boardId = $id";
$memos = $conn->query($sql_memos);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>My Boards</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="boards.php"><div class="navbar-brand text-white nav-title" href="#">My Memo System</div></a>
    </nav>
    </nav>
    <div class="container">
        <h1>Memos</h1>
        <div class="row">
            <div class="col-sm-4">
                <?php
                    $sql = "SELECT * FROM boards";
                    $boards = $conn->query($sql);
                ?>
                <?php if($boards->num_rows > 0) : ?>
                    <?php foreach ($boards as $board) : ?>
                        <?php 
                            $boardListId = $board["id"];
                            $boardName = $board["boardName"];
                            $description = $board["description"];
                        ?>
                        <a href="showBoard.php?id=<?php echo $boardListId; ?>" style="text-decoration: none; color: black;">
                            <div class="card mb-2 p-2">
                                <h3 class=""><?php echo $boardName; ?></h3>
                                <div class=""><?php echo $description; ?></div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="col-sm-8">
                <div class="card text-white bg-dark p-2">
                    <div class="row">
                        <div class="col-sm-9"><h1><?php echo $current_boardName; ?></h1></div>
                        <div class="col-sm-3"><a href="createNewMemo.php?id=<?php echo $id; ?>" style="text-decoration: none; color: white;">+ Create New Memo</a></div>
                    </div>
                    <div class=""><?php echo $current_description; ?></div>
                </div>
                <div class="container">
                    <div class="row">
                        <?php foreach ($memos as $memo) : ?>
                            <?php
                                $memoId = $memo['id'];
                                $memoName = $memo['memoName'];
                                $contents = $memo['contents'];
                            ?>
                            <a href="showEditMemo.php?id=<?php echo $memoId; ?>" style="text-decoration: none; color: black;">
                                <div class="card m-2 p-2" style="width: 14.2rem;">
                                    <h4><?php echo $memoName; ?></h4>
                                    <div><?php echo $contents; ?></div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>