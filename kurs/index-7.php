<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="POST">
	<input type="number" name="eded" placeholder="<?=$_POST['eded'] ?>">
	<input type="submit" value="OK">
		</form>
<?php 

$sn=$_POST['eded'];
$gun=intdiv($sn,86400);
$sn=$sn%86400;
$saat=intdiv($sn, 3600);
$sn=$sn%3600;
$dq=intdiv($sn, 60);
$sn=$sn%60;
echo "$gun Gün $saat Saat $dq Deqiqe $sn Saniye";         
echo $a." ".$b;

 ?>
</body>
</html>