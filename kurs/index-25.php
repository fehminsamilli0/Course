<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
	$soz="Ey Dunya ey dunya salam      salam salam salam ";
	$say=1;
	for ($i=0; $i < mb_strlen($soz); $i++) { 

	if ($soz[$i]==" " && $soz[$i]!=" ") {
		$say++;
	}
	}
echo $soz;

	 ?>

</body>
</html>