<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>12</title>
</head>
<body>

<?php 

		$num=0;
			for ($n=1000;$n>50;$n/=2) {
    		$num++;
   			 echo "$num =  $n"."<br>";
		}
			echo 'Всего '.$num." Итераций";
			

 ?>
	
</body>
</html>