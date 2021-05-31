<?php 


class Telebe{
	static public function AdSoyad(){
		return "Fahmin Shamilli";

	}
	protected function SV(){

		return "AZE123456789";

	}
}

final class TelebeOdenis extends Telebe{
	function Odenis(){
		return "1000 AZN"
	}

	function GizliInfo(){
		return parent::SV();

	}
}
    echo Telebe::AdSoyad(); 

 ?>