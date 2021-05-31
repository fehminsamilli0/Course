<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<select>
<?php for($i=1;$i<=99;$i++){if($i<10){?>
	<option>0<?= $i?></option>
  <?php }elseif($i==13 || ($i>75 && $i<90) || $i>90 && $i<99){continue;}else{ ?>
<option><?= $i?> </option>
  
  <?php }} 
 ?>	

</select>

</body>
</html>