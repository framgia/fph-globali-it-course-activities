<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD Application in OOP PHP - CREATE</title>	
</head>
<body>
	<div>
		<!-- Submit the Request to UserController.php -->
		<form method="post" action="UserController.php">
			<h2>Create Operation in CRUD Application</h2>
			<div>
				<label>First Name</label>
				<input type="text" name="firstName"/>
			</div>

			<div>
				<label>Last Name</label>
				<input type="text" name="lastName"/>
			</div>

			<div>
				<label>E-Mail</label>
				<input type="email" name="email"/>
			</div>

			<div class="radio">
				<label>Gender</label>
				<div>
					<label>
						<input type="radio" name="gender" value="1" checked> Male
					</label>
					<label>
						<input type="radio" name="gender" value="0"> Female
					</label>
				</div>
			</div>

			<div>
				<label>Age</label>
				<input type="number" name="age"/>
			</div>
			<!-- We added a name here because it will be used to determine which action to do in the UserController -->
			<input type="submit" name="addUser" value="Add User" />
		</form>
	</div>
</body>
</html>