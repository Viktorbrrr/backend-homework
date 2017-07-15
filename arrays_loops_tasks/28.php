<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>28</title>
</head>
<body>


<table border="2" cellpadding="3">

<?php
for ($i=1;$i<=9;$i++) {

if ($i==1) {
	echo "<tr style='background-color:yellow'>";
}else{
	echo "<tr>";
}

 for ($z=1;$z<=9;$z++) {
 	if ($z==1) {
 		echo "<td style='background-color:yellow'>".$i*$z."</td>";
 	}else{
 	echo "<td>".$i*$z."</td>";
 	}
  }
 echo "</tr>";
}
?>

</table>

</body>
</html>