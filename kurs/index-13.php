<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="POST">
		<input type="number" name="x" placeholder="<?=$_POST['x']?>" />
		<input type="submit" value="Hesabla" />
	</form>
<?php 

    $f=1; $cem=0;
    for ($i=1; $i<=$_POST['x'];$i++) { 
    	$f=$f*$i;
    	$cem=$cem+$f;
    	if ($i==$_POST['x']) {
    		echo $i."!= ".$cem;
    		
    	}
    	else{
    		echo $i."! +";
    	}
    }
   
   

 ?>

</body>
</html>