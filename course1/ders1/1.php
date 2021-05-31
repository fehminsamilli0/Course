<!DOCTYPE html>
<html>
<head>
	<meta charset="Utf-8">
	<title>php</title>
</head>
<body>
	<?php

	$n=23964287;
	$max=0;
	while($n>0){
		$a = $n%10;
		if($a > $max){
			$max=$a;

		}
		$n=intdiv($n,10);

	}
	echo $max;
	




	 ?>

</body>
</html>