<?php
include 'dbconnect.php';

$id = $_GET['id'];

// get information of memo
$sql = "SELECT * FROM memos WHERE id = $id";
$memos = $conn->query($sql);
$memo = $memos->fetch_assoc();

$memoName = $memo['memoName'];
$contents = $memo['contents'];
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
            <h1 class="col-sm-11">Edit Your Memo</h1>
            <div class="d-flex align-items-center"><a href="deleteMemo.php?id=<?php echo $id; ?>" class="btn btn-secondary">Delete</a></div>
        </div>
        <form action="saveEditedMemo.php" method="POST">
            <div class="form-group">
                <label for="memoName">Memo Name</label>
                <input type="text" class="form-control" id="memoName" name="memoName" value="<?php echo $memoName; ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Contents</label>
                <textarea type="text" class="form-control" id="contents" name="contents" required><?php echo $contents; ?></textarea>
            </div>
            <input class="form-group" type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-secondary" onclick=history.back()>Back</button>
        </form>
    </div>
</body>
</html>