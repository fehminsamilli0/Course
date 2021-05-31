<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

function fak($b)
x=1;
for($i=1;$i<=$b;$i++){
	$x=$x*$i;
}
return $x;
$m=5;$n=2;
$c=f($m)/(f($n)*f($m-$n));
$a=f($m)/(f($m-$n));
echo $c+$a;

 ?>
</body>
</html>