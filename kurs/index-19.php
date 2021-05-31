<!DOCTYPE html>
<html>
<head>
	<title>Massiv</title>
</head>
<body>
	<?php 

	$a[0]=5;
	$a[1]=15;
	$a[2]=25;
	$a[3]=35;
	$a[4]=45;
	$a[5]=55;
	$a[6]=65;

	echo $a[2];
echo "<br />";

	echo "<pre>";
	print_r($a);
	echo "</pre>";

	for($i=0; $i<count($a) ; $i++){
		echo $a[$i]." ";

	}

	echo "<br />";
		foreach ($a as $key) {
			echo $key." ";
		}
	///////////////////////
		$b[0][0]=1;
		$b[0][1]=2;
		$b[0][2]=3;
		$b[1][0]=4;
		$b[1][1]=5;
		$b[1][2]=6;
		$b[2][0]=7;
		$b[2][1]=8;
		$b[2][2]=9;
		echo "<pre>";
	print_r($b);
	echo "</pre>";
	for ($i=0; $i <count($b) ; $i++) { 
	for ($j=0; $j <count($b) ; $j++) {
	echo $b[$i][$j]." "; 
		
	}
	echo "<br />";
	}

		
		
		
      







	 ?>

</body>
</html>