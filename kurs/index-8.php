<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 

   $a=2;
   $b=1;
   $c=4;
   $i=1;
   $a=$i++;
   $i=$b;
   $b=--$i;
   $c=++$i-$b++;
   $a=$c;
   echo "$a  $b $c $i";



 ?>
</body>
</html>