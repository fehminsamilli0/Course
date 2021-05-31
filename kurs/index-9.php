<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form>
		<input type="text" name="eded" />
		<input type="submit" />

	</form>
	<?php 
    $n=$_GET['eded'];

    if(n/100>n%10){
    	echo "$n/100";
    }

    elseif(n/100<n%10){
    	echo "$n%10";
    }
    
    else{
    	echo "=";
    }
    
    




	 ?>

</body>
</html>