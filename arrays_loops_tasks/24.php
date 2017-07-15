<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>24</title>
</head>
<body>
<form action="" method="get">
	<input type="text" name="number">
	<input type="submit" value="Отправить">
</form>
<?php 
		error_reporting(0);
		$number=$_GET["number"];
  		for ($i=0; $i < strlen($number) ; $i++) { 
  		echo substr_count($number,2);
  		break;
  }
		
 ?>
	
</body>
</html>