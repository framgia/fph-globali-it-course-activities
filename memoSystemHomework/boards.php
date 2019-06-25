<?php include 'dbconnect.php'; ?>

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
    <div class="container">
        <div class="row">
            <h1 class="col-sm-3">Boards</h1>
            <div class="col-sm-7"></div>
            <div class="col-sm-2 d-flex align-items-end"><a href="createNewBoard.php">+ Create New Board</a></div>
    </div>
        <div class="row">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th></th>
                </tr>
            </thead>
            <tbody>

            <?php
                $sql = "SELECT * FROM boards";
                $boards = $conn->query($sql);
            ?>
            <?php if($boards->num_rows > 0) : ?>
                <?php foreach ($boards as $board) : ?>
                    <?php 
                        $id = $board["id"];
                        $boardName = $board["boardName"];
                        $description = $board["description"];
                    ?>
                    <tr>
                        <th scope="row"><a href="showBoard.php?id=<?php echo $id; ?>"><?php echo $id; ?></a></th>
                        <td><?php echo $boardName; ?></td>
                        <td>
                            <?php echo $description; ?>
                        </td>
                        <td>
                            <div class="text-right">
                                <a href="editBoard.php?id=<?php echo $id; ?>" class="btn btn-primary">Edit</a>
                                <a href="deleteBoard.php?id=<?php echo $id; ?>" class="btn btn-secondary">Delete</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
        </div>
    </div>
</body>
</html>