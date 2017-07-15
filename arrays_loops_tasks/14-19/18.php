<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>18</title>
</head>
<body>

<?php 

		$arr=['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'];
		$week=null;
		foreach ($arr as $k => $v) {

			if ($k<5) {
				echo $arr[$k]." ";
			}

			if ($k>4) {
				$week="<b>".$v."</b> ";
				echo $week;
			}
		 } 


 ?>
	
</body>
</html>