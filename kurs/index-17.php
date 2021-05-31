<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modul</title>
</head>
<body>
	<?php 

    function modul($a)
    {
    	if($a<0){
    		return -1*$a;
    	}
    	return $a;
    	
    }
   
    echo modul(-9);

	 ?>

</body>
</html>