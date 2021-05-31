<?php 
   class Telebe{
   	/*public*/protected function f1(){
   		echo "Telebe sinifi <br />";
   	}
   }
   class TelebeOdenis extends Telebe{
   	public function f2(){
   		echo "Telebe odenis Sinifi <br />";
   		parent::f1();
   	}
     }
   $x=new TelebeOdenis();
   $x->f2();
?>