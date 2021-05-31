<?php 


strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])!='xmlhttprequest' ? die("Xətalı Sorğu") : "";



try{
	$db= new PDO("mysql:host=localhost;dbname=beyler_mmc;charset=utf8",'root','');
}
catch(PDOException $e){
	echo $e->getMessage();
}

$sorus=$db->prepare("SELECT * from ajax where Vezife=:v");
$x=$sorus->execute(array('v'=>$_POST['Vezife']));

if ($x) {
	$table = "<table>
	<tr>
	<th>Ad Soyad</th>
	<th>Maas</th>
	<th>Vəzifə</th>
	</tr>
	";
	while($data=$sorus->fetch(PDO::FETCH_ASSOC)){
		$table .="
		<tr>
		<td>".$data['AdSoyad']."</td>
		<td>".$data['Maas']." AZN</td>
		<td>".$data['Vezife']."</td>
		</tr>
		";
	}
	$table .="</table>";
	echo $table;

}
else{
	echo "Zırt";
}




?>