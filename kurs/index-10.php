<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
</head>
<body>
	<form method="POST">
		<input type="number" name="durdane" placeholder="<?=$_POST['durdane']?>" />
		<input type="submit" value="Hesabla" />
	</form>
	<?php 

	switch ($_POST['durdane']) {
    
    case 1:
     echo "Bazar ertesi";
     break;	
      case 2:
     echo "Çərşənbə axşamı";
     break;		
      case 3:
     echo "Çərşənbə";
     break;		
      case 4:
     echo "Cümə axşamı";
     break;		
      case 5:
     echo "Cümə";
     break;		
      case 6:
     echo "Şənbə";	
     break;	
      case 7:
     echo "Bazar";	
	
	break;	
    default;
    echo "Daxil edin...";
    }
	 ?>

</body>
</html>