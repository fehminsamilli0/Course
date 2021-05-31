<?php 

try{
	$db= new PDO("mysql:host=localhost;dbname=beyler_mmc;charset=utf8",'root','');
}
catch(PDOException $e){
	echo $e->getMessage();
}


?>