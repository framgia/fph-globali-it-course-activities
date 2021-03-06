<?php
include 'dbconnect.php';

$id = $_GET['id'];
$board = $conn->query("SELECT * FROM boards WHERE id = '$id'")
                ->fetch(PDO::FETCH_ASSOC);

$id = $board["id"];
$name = $board["name"];
$description = $board["description"];
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
            <div class="col-6 mx-auto">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="card-title">Edit Board</h1>
                        <form action="boards-update.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <div class="form-group">
                              <label for="name">Board Name</label>
                              <input type="text" name="name" id="name" class="form-control" placeholder="e.g Programming" required value="<?php echo $name; ?>">
                            </div>
                            <div class="form-group">
                              <label for="description">Description</label>
                              <textarea class="form-control" name="description" id="description" style="resize: none;" required><?php echo $description; ?></textarea>
                            </div>
                            <a class="btn btn-dark" href="boards.php" role="button">Back</a>
                            <button type="submit" class="btn btn-success">Update Board</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>