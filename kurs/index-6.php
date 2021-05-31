<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="POST">
		<input type="number" min="10" max="99" name="eded" />
		<input type="submit" value="OK" />
		
	</form>
		<?php 
     
     $x=$_POST['eded'];
     echo intdiv($x,10)."<=>".$x%10;

	 ?>
</body>
</html>