<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Massiv</title>
</head>
<body>
<?php 
   
   $massiv=array(

    array(
    	"Ad_Soyad"=>"Əli Əliyev",
    	"Maas"=>"1500",
    	"Vezifesi"=>"Dizayner"
    ),

  array(
    	"Ad_Soyad"=>"Vəli Əliyev",
    	"Maas"=>"2500",
    	"Vezifesi"=>"Veb Dizayner"
    ),
  array(
    	"Ad_Soyad"=>"Dəli Əliyev",
    	"Maas"=>"11000",
    	"Vezifesi"=>"CEO"
    ),

);

 ?>
 <table border="5" width="400" cellpadding="10">
 	<tr>
 		<th>Ad Soyad</th>
 		<th>Vezifesi</th>
 		<th>Maas</th>

 	</tr>
 	<?php for ($i=0; $i <count($massiv) ; $i++) { ?>
 		<tr>
 			<td><?= $massiv[$i]["Ad_Soyad"] ?></td>
 			<td><?= $massiv[$i]["Vezifesi"] ?></td>
 			<td><?= $massiv[$i]["Maas"] ?></td>
 		</tr>

 	
 	<?php } ?>

 </table>
</body>
</html>