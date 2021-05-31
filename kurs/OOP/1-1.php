<!DOCTYPE html>
<html>
<head>
	<?php require_once '1.php'; ?>
	<meta charset="UTF-8" />
	<title>CLASS</title>
</head>
<body>

	<?php 
	$ad="Tural";
	$x = new Student();

	$x->NameSet($ad);


	?>

	<h1>Xoş Gəlmisən - <?= $x->NameGet(); ?></h1>

</body>
</html>