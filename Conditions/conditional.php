<?php

$grade = 85;

if ($grade >= 80 && $grade <= 100) {
	echo "Your grade is $grade. It is Excellent!";
} elseif ($grade >= 70 && $grade <= 79) {
	echo "Your grade is $grade. It is Very Good!";
} elseif ($grade >= 60 && $grade <= 69) {
	echo "Your grade is $grade. It is Good!";
} elseif ($grade >= 0 && $grade <= 59) {
	echo "Your grade is $grade. It is failure :(";
} else {
	echo "Invalid value. Please set grade from 0 to 100";
}


?>