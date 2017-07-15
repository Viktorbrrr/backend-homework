<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>16</title>
</head>
<body>

<?php 

		$arr=[1, 2, 3, 4, 5, 6, 7, 8, 9];
		
		
		foreach ($arr as $k=>$v) {
			if ($k % 3 == 0 && $k!= 0) {
			echo "<br>";
			}
			echo $v.",";
		}
		
 ?>
	
</body>
</html>