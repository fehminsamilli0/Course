<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
</head>
<body>
	<form method="POST">
		<input type="number" name="x" placeholder="<?=$_POST['x'] ?>">
		<input type="submit" name="ok">
	</form>
	<?php 

	$n=$_POST['x']; 
	$eded;
	$max=0;
	$min=9;
   while ($n>0){
		$a=$n%10;
		if($a>$max){
			$max=$a;
		}
		if($a<$min){
			$min=$a;		}

	
	$n=intdiv($n, 10);
 }
 $eded=$max+$min;
 for($i=1;$i<=$eded;$i++){
 	if ($eded%$i==0) {
 		$say++;
 	}
 }
 echo $say==2 ? "sade": "murekkeb";

	 ?>

</body>
</html>