<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>File Upload</title>
</head>
<body>
<?php 

 $massiv=array("Eli","Veli","Pirveli");
 echo in_array("Eli", $massiv);

 $s=implode(" ",$massiv);

 echo $s;
 echo "<br />";

 date_default_timezone_set("Asia/Baku");
 $zaman=date("d-m-Y H:i:s");
 $x=explode(" ", $zaman);


echo "Tarix: ".$x[0]."Saat: ".$x[1];







 ?>
</body>
</html>