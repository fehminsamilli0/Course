<?php 


strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])!='xmlhttprequest' ? die("Xətalı Sorğu") : "";

($_POST['ad']==null || $_POST['maas']==null) ? die("Xanaları doldurun") : "";



try{
	$db= new PDO("mysql:host=localhost;dbname=beyler_mmc;charset=utf8",'root','');
}
catch(PDOException $e){
	echo $e->getMessage();
}

$elaveet=$db->prepare("INSERT into ajax set AdSoyad=:x,Maas=:y,Vezife=:z");
$ins=$elaveet->execute(array(
	'x'=>$_POST['ad'],
	'y'=>$_POST['maas'],
	'z'=>$_POST['Vezife']
));

if ($ins) {
	echo "Data əlavə edildi!";
	echo "<script>document.getElementById(\"myForm\").reset();</script>";
}
else{
	echo "Xəta";
}





?>