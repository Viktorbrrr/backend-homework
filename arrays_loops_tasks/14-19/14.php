<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>14</title>
</head>
<body>


<?php 

	$arr=[4, 2, 5, 19, 13, 0, 10];
	foreach ($arr as $v) {
		if ($v==2||$v==3||$v==4) {
			$e=$v;
			echo "Есть!";
			break;
		}
		else{
			echo "Нет!";
			break;
		}
	}
		foreach ($arr as $v) {
			echo "<br>".count($arr);
			break;
		}


 ?>
	
</body>
</html>