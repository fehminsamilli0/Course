<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Quvvet</title>
</head>
<body>
	<?php 
    function quvvet($a,$b){

    	$x=1;
    	for($i=1;$i<=$b ;$i++){
    		$x=$x*$a;
    	}
    	return $x;
    } 
    echo quvvet(5,4);

	 ?>

</body>
</html>