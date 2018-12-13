<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style> 
		body {font-family: arial;}
		p {margin: 0;}

	</style>
</head>
<body>

<?php

function colorednumbers($numlimit){
	for ($num = 1; $num <= $numlimit; $num++) {
		if ($num >= 0 && $num <= 10) {
			echo "<p style='color: red;'>$num</p>";
		} elseif ($num >= 11 && $num <= 50) {
			echo "<p style='color: orange;'>$num</p>";
		} elseif ($num >= 51 && $num <= 100) {
			echo "<p style='color: green;'>$num</p>";
		} elseif ($num >= 101) {
			echo "<p style='color: blue;'>$num</p>";
		}
	}
}



$cars = array("toyota", "honda", "nissan");

sort ($cars);






















colorednumbers(500);

?>

</body>
</html>