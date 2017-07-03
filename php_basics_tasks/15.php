
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Calc</title>
</head>
<body>
	



 <form method="POST" action=''>
   первое число<input TYPE="text" name="a" /><br>
    второе число<input TYPE="text" name="b" /><br>
   <input TYPE="radio" name="operation" value='+'/>добавить
   <input TYPE="radio" name="operation" value='-'/>отнять
   <input TYPE="radio" name="operation" value='*'/>умножить
   <input TYPE="radio" name="operation" value='/'/>поделить 
   <input type='submit' name='vichislit' value='Вычислить'> 
   <input type="reset" name='ochistit' value='Отменить'>  
   </form> 
<?php
  error_reporting(0);
	
  $a = $_POST['a'];
  $b = $_POST['b'];
  $radio=$_POST['operation'];
  if ($_POST['vichislit'])
  {
      if ($radio=='+')
      	{$result = $a + $b; echo "сумма=" . $result.'<br>';}
      if ($radio=='-')
      	{$result = $a - $b; echo "сумма=" . $result.'<br>';}
      if ($radio=='*')
      	{$result = $a *$b;  echo  "сумма=" . $result.'<br>';}
      if ($radio=='/')
      	{$result = $a / $b; echo "сумма=" . $result;}
}
?> 

 </body>
</html>
