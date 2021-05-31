<?php 

function Modul($a){

	if($a<0){
		return $a*(-1);
	}
	else{
		return $a;
	}
}

echo Modul(-6);

 ?>