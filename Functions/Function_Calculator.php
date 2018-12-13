<?php

function calculator($num1, $num2, $function) {
	if ($function == "addition") {
		$result = $num1 + $num2;
		return $result;
	} elseif ($function == "subtraction") {
		$result = $num1 - $num2;
		return $result;
	} elseif ($function == "multiplication") {
		$result = $num1 * $num2;
		return $result;
	} elseif ($function == "division") {
		$result = $num1 / $num2;
		return $result;
	} else {
		$result = "Invalid numbers";
		return $result;
	}
}





























echo calculator(1,2,"division");

?>