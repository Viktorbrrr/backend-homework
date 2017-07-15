<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>27</title>
</head>
<body>
<table><tr><td style='background-color:blue'>2033</td><td style='background-color:brown'>11696</td><td style='background-color:green'>712</td><td style='background-color:yellow'>32583</td><td style='background-color:red'>157</td></tr><tr><td style='background-color:gray'>25694</td><td style='background-color:red'>19724</td><td style='background-color:brown'>18487</td><td style='background-color:brown'>8462</td><td style='background-color:red'>4412</td></tr><tr><td style='background-color:gray'>4673</td><td style='background-color:gray'>14450</td><td style='background-color:maroon'>16748</td><td style='background-color:gray'>3505</td><td style='background-color:maroon'>5299</td></tr><tr><td style='background-color:red'>16873</td><td style='background-color:gray'>21370</td><td style='background-color:green'>22482</td><td style='background-color:red'>28576</td><td style='background-color:blue'>26060</td></tr><tr><td style='background-color:yellow'>28955</td><td style='background-color:gray'>8804</td><td style='background-color:gray'>26825</td><td style='background-color:red'>31471</td><td style='background-color:blue'>22283</td></tr></table><br>





<?php 


			$row=5;
			$cols=10;
			$colors =['red','yellow','blue','gray','maroon','brown','green'];
			$tr=1;
			$num=rand(0,10000);

		echo "<table border='2' cellpadding='3' " ;

		while($tr<$row){
		  echo "<tr>" ; 
		  $td=1;
		  while ($td<$cols){
		  	$arrkeys=array_rand($colors);
		    echo "<td style='background-color:$colors[$arrkeys]'>".$num."</td>";
		    $td++; 
		  }
		  echo "</tr>";
		  $tr++ ;
		}
		echo "</table>" ;

 ?>

	
</body>
</html>