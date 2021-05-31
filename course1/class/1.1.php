<!DOCTYPE html>
<html>
<head>
	<?php require_once '1.php';
	$x = new Hello();
	$x->Set("Fehmin");

	 ?>
	<meta charset="UTF-8">
	<title>PHP Class</title>
</head>
<body>
	<h1>Salam <?= $x->Get() ?> </h1>


</body>
</html>