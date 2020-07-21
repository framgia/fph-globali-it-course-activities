<?php 
include 'database.php'; 

$id = $_GET['id'];
$order = $conn->query("SELECT * FROM orders WHERE id = '$id'")
                ->fetch(PDO::FETCH_ASSOC);
?>


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

    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card mt-4">
                    <div class="card-body">
                    <form action="update-order.php" method="POST">
                        <h1 class="card-title text-center">Pizza Form</h1>
                            <div class="row">
                                <div class="col-md-4 d-flex align-items-center">
                                    <label for="name">Name</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" value="<?php echo $order['customer_name'] ?>">
                                    </div>
                                </div>

                                <div class="col-md-4 d-flex align-items-top">
                                    <label for="topping">Pizza Topping</label>
                                </div>
                                <div class="col-md-8 mb-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="topping" id="topping" value="Supreme" <?php echo $order["topping"] == "Supreme" ? 'checked' : '' ?>>
                                        Supreme
                                    </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="topping" id="topping" value="Vegetarian" <?php echo $order["topping"] == "Vegetarian" ? 'checked' : '' ?>>
                                        Vegetarian
                                    </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="topping" id="topping" value="Hawaiian" <?php echo $order["topping"] == "Hawaiian" ? 'checked' : '' ?>>
                                        Hawaiian
                                    </label>
                                    </div>
                                </div>

                                <div class="col-md-4 d-flex align-items-top">
                                    <label for="sauce">Pizza Sauce</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                    <select class="form-control" name="sauce" id="sauce">
                                        <option value="Tomato" <?php echo $order["sauce"] == "Tomato" ? 'selected' : '' ?>>Tomato</option>
                                        <option value="White Sauce" <?php echo $order["sauce"] == "White" ? 'selected' : '' ?>>White Sauce</option>
                                        <option value="Pesto" <?php echo $order["sauce"] == "Pesto" ? 'selected' : '' ?>>Pesto</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="col-md-4 d-flex align-items-top">
                                    <label>Optional Extras</label>
                                </div>
                                <div class="col-md-8 mb-4">
                                    <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="extra_cheese" id="extra_cheese" value="true" <?php echo $order["extra_cheese"] == "1" ? 'checked' : '' ?>>
                                        Extra Cheese
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="gluten_free" id="gluten_free" value="true" <?php echo $order["gluten_free"] == "1" ? 'checked' : '' ?>>
                                        Gluten Free Base
                                    </label>
                                    </div>
                                </div>

                                <div class="col-md-4 d-flex align-items-top">
                                    <label>Delivery Instructions</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                    <textarea class="form-control" name="instructions" id="instructions" rows="5" style="resize: none;"><?php echo $order["instructions"]; ?></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-lg btn-info btn-block">Update this Order</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>