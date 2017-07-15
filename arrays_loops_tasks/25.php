<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>25</title>
</head>
<body>

<?php 

		$arr = array();
			for ($i=0; $i<=20; $i++) {
    			$arr[] = rand(0, 20);
		}
 
		
 
$min = min($arr); 
$max = max($arr); 

 
 
		$keyMin = array_search($min, $arr);
		$keyMax = array_search($max, $arr);
 
$arr[$keyMin] = $max;
$arr[$keyMax] = $min;
 
			echo "<pre>";
			print_r($arr);
			echo "</pre>";

echo "Минимальное число ".$min." Максимальное число".$max."<br>";

echo "Минимальное число ".$arr[$keyMin]." Максимальное число".$arr[$keyMax]."<br>";

 ?>

	
</body>
</html>