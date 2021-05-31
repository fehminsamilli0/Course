<!DOCTYPE html>
<html>
<head>
	<title>1-dən N-ə qədər bütün ədədləri toplayan proqram yazin</title>
</head>
<body>
	<form method="POST">
		<input type="number" name="eded" placeholder="<?= $_POST['eded'] ?>"/>
		<input type="submit" value="ok"/>
	</form>
	<?php 
	$n=$_POST['eded'];
	$cem=0;
	for ($i=1; $i <= $n; $i++) { 
		$cem=$cem+$i;
		
	}
	echo $cem;

	 ?>


</body>
</html>