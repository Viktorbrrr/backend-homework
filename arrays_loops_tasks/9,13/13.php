<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>13</title>
</head>
<body>

<?php 

		
		$cols=10;
		$rows=10;
		$tr=1;

		echo "<table border='2' cellpadding='3' " ;

		while($tr<$rows){
		  echo "<tr>" ; 
		  $td=1;
		  while ($td<$cols){
		    echo "<td>".$tr*$td."</td>";
		    $td++; 
		  }
		  echo "</tr>";
		  $tr++ ;
		}
		echo "</table>" ; 

?>
	
</body>
</html>