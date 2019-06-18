<?php
include_once 'User.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD Application - READ</title>
</head>
<body>
	<div>
		<h2>Read Operation in CRUD applicaiton</h2>
		<h4><a href="create.php">Add a User</a></h4>
			<table>
			<thead>
				<tr>
					<th>#</th>
					<th>Full Name</th>
					<th>E-Mail</th>
					<th>Age</th>
					<th>Gender</th>
					<th>Extras</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$users = User::getAllUsers();
					foreach($users as $key => $user) {
				?>
				<tr>
					<th><?php echo $key + 1; ?></th>
					<td><?php echo $user['first_name'] . " " . $user['last_name']; ?></td>
					<td><?php echo $user['email']; ?></td>
					<td><?php echo $user['gender']; ?></td>
					<td><?php echo $user['age']; ?></td>
					<td>
						<a href="update.php?id=<?php echo $user['id']; ?>">Edit</a>
						<form style="display:inline" action="UserController.php" method="POST">
							<input type="hidden" name="id" value="<?php echo $user['id']?>"/>
							<input type="submit" value="Delete" name="deleteUser"/>
						</form>
					</td>
				</tr>
				<?php } ?>
			</tbody>
			</table>
		</div>
	</div>
</body>
</html>