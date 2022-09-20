<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
		<?php
		 $variable=8; 

		 echo "The Value is now " . $variable . "<br>";
		 echo "Add 2 <br>";
		 $variable += 2;
		 echo "The Value is now " . $variable . "<br>";
		 echo "Subtract 4 <br>";
		 $variable -= 4;
		 echo "The Value is now " . $variable . "<br>";
		 echo "Multiply by 5 <br>";
		 $variable *= 5;
		 echo "The Value is now " . $variable . "<br>";
		 echo "Divide by 3 <br>";
		 $variable /= 3;
		 echo "The Value is now " . $variable  . "<br>";
		 echo "Increment value by 1 <br>";
		 $variable = ++$variable;
		 echo "The Value is now " . $variable  . "<br>";
		 echo "Decrement value by 1 <br>";
		 $variable = --$variable;
		 echo "The Value is now " . $variable  . "<br>";
		?>
</body>
</html>