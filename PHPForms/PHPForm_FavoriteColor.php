<!DOCTYPE html>
<html>
<head>
	<title>Favcolor</title>
	<style>
		body {
			font-family: arial;
		}
	</style>
</head>
<body>
<?php
	$favcolor = $_GET["favcolor"];
	// var_dump($favcolor);
	echo "Your favorite color is 
		<span style='color:$favcolor;''>$favcolor</span>";
?>
</body>
</html>
