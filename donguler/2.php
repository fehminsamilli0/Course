<!DOCTYPE html>
<html>
<head>
	<title>Daxil edilmiş ədədin faktorialını hesablayın</title>
</head>
<body>
	<form method="POST">
		<input type="number" name="eded" placeholder="<?= $_POST['eded'] ?>">
	</form>
	<?php 
	$n=$_POST['eded'];
	$f=1;
	 for ($i=1; $i <=$n ; $i++) { 
	 	$f=$f*$i;
	 }

	 echo "$n"."!=  "."$f";
 



	 ?>

</body>
</html>