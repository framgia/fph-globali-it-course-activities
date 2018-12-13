<!DOCTYPE html>
<html>
<head>
	<title>Header Loop</title>
	<style>
	body {font-family: arial;}
	</style>
</head>
<body>
	<?php
	for ($header = 1; $header <= 6; $header++){
		echo "<h$header>This is Header $header </h$header>";
	}
	?>

</body>
</html>