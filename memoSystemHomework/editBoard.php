<?php include 'dbconnect.php'; ?>
<?php
$id = $_GET['id'];
// get information of boards
$sql = "SELECT * FROM boards WHERE id = $id";
$boards = $conn->query($sql);
$board = $boards->fetch_assoc();

$id = $board['id'];
$current_boardName = $board['boardName'];
$current_description = $board['description'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="boards.php"><div class="navbar-brand text-white nav-title" href="#">My Memo System</div></a>
    </nav>
    <div class="container">
        <div class="row">
            <h1>Create New Board</h1>
        </div>
        <form action="saveEditedBoard.php" method="POST">
            <div class="form-group">
                <label for="boardName">Board Name</label>
                <input type="text" class="form-control" id="boardName" name="boardName" value="<?php echo $current_boardName; ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea type="text" class="form-control" id="description" name="description" required><?php echo $current_description; ?></textarea>
            </div>
            <input class="form-group" type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-secondary" onclick=history.back()>Back</button>
        </form>
    </div>
</body>
</html>