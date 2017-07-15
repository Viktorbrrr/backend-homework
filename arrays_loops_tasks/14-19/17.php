<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>17</title>
</head>
<body>

<?php 


	$arr=['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь']; 

	$mont=null;

	foreach ($arr as $k => $v) {

		if ($k!=6) {
			echo $arr[$k]." ";
		}

		else {
			$mont="<b>".$v."</b> ";
			echo $mont;
   		}
	 } 


 ?>
	
</body>
</html>