<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>8</title>
</head>
<body>

	<?php 


	$arr=[1, 2, 3, 4, 5, 6, 7, 8, 9];
		$result= is_string($arr);
		$result=implode("-", $arr);
	foreach ($arr as $v) {
		if ($v<2) {
			echo "-".$result."-";
		}		
	}
	

	 ?>

	
</body>
</html>