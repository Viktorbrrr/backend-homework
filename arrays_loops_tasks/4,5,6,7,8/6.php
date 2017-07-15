<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>6</title>
</head>
<body>
	<?php 

		$arr =['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
		$en = [];
		$ru = [];

		foreach ($arr as $k => $v) {
			$en= $k.'<br>';

			echo $en;
		}

		foreach ($arr as $k => $v) {
			$ru= $v.'<br>';

			echo $ru;
		}


	 ?>


</body>
</html>