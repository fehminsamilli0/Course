<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<style>
		table,th,td{
			border: 1px solid black;
			border-collapse: collapse;

		}
		td,th{
			width: 150px;
			height: 50px;
			text-align:center; 
		}
		

	</style>


	<?php 

	$emp = [
		"Ad_Soyad"=>["Zarema .N","Fehmin .Sh", "Eynur Necef"],
		"Maas"=>[1500,1300,4567],
		"Vezife"=>["Developer","HR","Help Desk"]

	];

	?>
	<table>
		<tr>
			<th>S/N</th>
			<th>Ad Soyad/th>
				<th>Vezife</th>
				<th>Maas</th>
				<th>Illik Maas</th>
				<th>Maas(Dollar)</th>
				<th>Illik Maas (Dollar)</th>

			</tr>
			<?php for($i=0;$i<count($emp["Ad_Soyad"]);$i++){ ?>
				<tr>
					<td><?= ($i+1); ?></td>
					<td><?= mb_strtoupper($emp["Ad_Soyad"][$i]) ?></td>
					<td><?= $emp["Vezife"][$i] ?></td>
					<td><?= $emp["Maas"][$i] ?> AZN</td>
					<td><?= $emp["Maas"][$i]*12 ?></td>
					<td><?=number_format($emp["Maas"][$i]/1.7025,2) ?>$</td>
					<td><?=number_format(($emp["Maas"][$i]/1.7025)*12,2)  ?>$</td>

				</tr>
			<?php } ?>
		</table>

	</body>
	</html>