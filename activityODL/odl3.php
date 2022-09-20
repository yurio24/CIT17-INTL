<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
		<?php
		    echo('<td><table><tr><tr>');
		for ($i = 1; $i <= 7; $i++)
		    echo('<td>' . $i . '</td>');
		echo('</tr><tr>');
		for ($i = 1; $i <= 7; $i++)
		    echo('<td>' . ($i * 2) . '</td>');
		echo('</tr><tr>');
		for ($i = 1; $i <= 7; $i++)
		    echo('<td>' . ($i * 3) . '</td>');
		echo('</tr><tr>');
		for ($i = 1; $i <= 7; $i++)
		    echo('<td>' . ($i * 4) . '</td>');
		echo('</tr><tr>');
		for ($i = 1; $i <= 7; $i++)
		    echo('<td>' . ($i * 5) . '</td>');
		echo('</tr><tr>');
		for ($i = 1; $i <= 7; $i++)
		    echo('<td>' . ($i * 6) . '</td>');
		echo('</tr><tr>');
		for ($i = 1; $i <= 7; $i++)
		    echo('<td>' . ($i * 7) . '</td>');
		echo('</tr></table>');

?>
</body>
</html>