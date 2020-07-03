<?php
include 'dbconnect.php';

$id = $_GET['id'];

$sql = "SELECT * FROM boards WHERE id = '$id'";
$board = $conn->query($sql)
                ->fetch(PDO::FETCH_ASSOC);

$id = $board['id'];
$board_name = $board['name'];
$board_description = $board['description'];

$sql_memo = "SELECT * FROM memos WHERE board_id = '$id'";
$memos = $conn->query($sql_memo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MemoSystem | Boards</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="boards.php">Memo System</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="boards.php">Boards <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="row">
            <h1 class="col-12">Boards</h1>
            <div class="col-4">
                <?php $boards = $conn->query("SELECT * FROM boards"); ?>
                <ul class="list-group shadow">
                    <?php foreach ($boards as $board): ?>
                        <a href="boards-show.php?id=<?php echo $board['id']; ?>">
                            <li class="list-group-item <?php echo $board['id'] === $id ? 'active' : ''; ?>">
                                <?php echo $board['name']; ?>
                            </li>
                        </a>
                    <?php endforeach ?>
                </ul>
            </div>
            <div class="col-8">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <h1><?php echo $board_name; ?></h1>
                            <a class="btn btn-success" href="memos-create.php">+ Create New Memo</a>
                        </div>
                    </div>
                    <div class="col-12">
                        <ul class="list-unstyled mt-4">
                            <?php foreach ($memos as $memo): ?>
                                <?php 
                                    $memo_id = $memo['id'];
                                    $memo_name = $memo['name'];
                                    $memo_contents = $memo['contents'];
                                ?>
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <li class="media">
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-1"><?php echo $memo_name ?></h5>
                                                <?php echo $memo_contents ?>
                                            </div>
                                        </li>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>