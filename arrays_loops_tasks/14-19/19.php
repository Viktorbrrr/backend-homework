<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>19</title>
</head>
<body>

<?php 

		$arr=['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'];
			$day=null;
			foreach ($arr as $k => $v) {

				if ($k!=3) {
					echo $arr[$k]." ";
				}

		        else {
			        $day.="<i>".$v."</i> ";
			        echo $day;
   		        }
	        } 

 ?>
	
</body>
</html>