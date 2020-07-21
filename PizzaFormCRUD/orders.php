<?php include 'database.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark shadow">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="index.php">Order Pizza! <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="orders.php">Orders</a>
        </div>
    </nav>


    <div class="container-fluid">
    <h1 class="mt-4 mb-0">Order List</h1>
        <div class="row">
            <div class="col-md-12 mx-auto mt-5">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Customer Name</th>
                            <th>Topping</th>
                            <th>Sauce</th>
                            <th>Extra Cheese</th>
                            <th>Gluten Free</th>
                            <th>Delivery Instructions</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = $conn->query("SELECT * FROM orders");
                            $orders = $query->fetchAll();
                        ?>

                        <?php if(count($orders) > 0): ?>
                            <?php foreach($orders as $order): ?>
                                <tr>
                                    <td scope="row">
                                        <?php echo $order["id"] ?>
                                    </td>
                                    <td>
                                        <?php echo $order["customer_name"] ?>
                                    </td>
                                    <td>
                                        <?php echo $order["topping"] ?>
                                    </td>
                                    <td>
                                        <?php echo $order["sauce"] ?>
                                    </td>
                                    <td>
                                        <?php echo $order["extra_cheese"] ?>
                                    </td>
                                    <td>
                                        <?php echo $order["gluten_free"] ?>
                                    </td>
                                    <td>
                                        <?php echo $order["instructions"] ?>
                                    </td>
                                    <td>
                                        <div class="d-inline-flex">
                                            <a class="btn btn-warning mr-4" href="edit-order.php?id=<?php echo $order['id']; ?>" role="button">Edit</a>
                                            <form action="destroy-order.php" method="POST">
                                                <input type="hidden" name="id" value="<?php echo $order['id']; ?>">
                                                <button type="submit" class="btn btn-success">Order Done!</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        <?php endif ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>