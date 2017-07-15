<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>7</title>
</head>
<body>

<?php


	$arr=[2, 5, 9, 15, 0, 4];
		foreach ($arr as $v) {
			if ($v>3&&$v<10) {
				$result=$v;
				echo $result;
			}
			echo ' ';
		}


  ?>
	
</body>
</html>