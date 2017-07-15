<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>26</title>
</head>
<body>

	<?php 
			$arr23= [];
				for($i = 0; $i <= 100; $i++) {
    			$arr23[] = rand(1, 100);
			} 
				print_r($arr23);
				echo '<br>';
				
			foreach ($arr23 as $k => $v) {
    				
    				if($v > 0 && $v % 2 == 0) {
        				//echo "$v - это четное число" . '<br>';			
   				 }
   				 	if($v > 0 && $v % 2 != 0) {
        				echo "$v - это нечетное число" . '<br>';
        				
    			 }
			}	
	 ?>

</body>
</html>