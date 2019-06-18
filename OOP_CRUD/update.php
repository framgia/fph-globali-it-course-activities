<?php
include_once 'User.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD Application in OOP PHP - UPDATE</title>	
</head>
<body>
	<div>
		<!-- Submit the Request to UserController.php -->
		<form method="post" action="UserController.php">
        <h2>Update Operation in CRUD Application</h2>
			
        <?php
            if (isset($_GET['id'])) {
                $user = User::getUsingId(array($_GET['id']));
            }
        ?>
			<div>
				<label>First Name</label>
				<input type="text" name="firstName" value="<?php echo $user['first_name']?>"/>
			</div>

			<div>
				<label>Last Name</label>
				<input type="text" name="lastName" value="<?php echo $user['last_name']?>"/>
			</div>

			<div>
				<label>E-Mail</label>
				<input type="email" name="email" value="<?php echo $user['email']?>"/>
			</div>

			<div class="radio">
				<label>Gender</label>
				<div>
					<label>
						<input type="radio" name="gender" value="1" <?php echo $user['gender'] ? "checked" : ""?>> Male
					</label>
					<label>
						<input type="radio" name="gender" value="0" <?php echo $user['gender'] ? "" : "checked"?>> Female
					</label>
				</div>
			</div>

			<div>
				<label>Age</label>
				<input type="number" name="age" value="<?php echo $user['age']?>"/>
			</div>
            <input type="hidden" name="id" value="<?php echo $user['id']?>"/>
            <!-- We added a name here because it will be used to determine which action to do in the UserController -->
            <input type="submit" name="updateUser" value="Save" />
		</form>
	</div>
</body>
</html>