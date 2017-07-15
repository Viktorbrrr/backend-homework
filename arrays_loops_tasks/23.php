<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>23</title>
</head>
<body>

<form action="" method="get">
	<input type="text" name="number">
	<input type="submit" value="Отправить">



</form>


<?php 
		error_reporting(0);
		$number=$_GET["number"];	
		$sum = null;
		for($i = 0; $i <= strlen($number); $i++) {
    	$sum += $number[$i];	
}
echo $sum;


 ?>
	
</body>
</html>