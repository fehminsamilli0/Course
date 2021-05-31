<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="POST">
		<input type="number"  name="durdane" placeholder="<?=$_POST['durdane']?>" />
		<input type="submit" value="Hesabla" name="x" />
		
	</form>
		<?php

		echo $_POST['durdane']!=0 ? "Geldi":"Gelmedi";

		?>
</body>
</html>