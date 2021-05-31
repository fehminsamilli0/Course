<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
</head>
<body>
	<form method="POST">
		<input type="number" name="x" placeholder="<?=$_POST['x']?>" />
		<input type="submit" value="Hesabla" />

	</form>
    
    <?php 
    for ($i=0;$i<$_POST['x'];$i++){
    echo "salam<br />";
    }



     ?>
</body>
</html>