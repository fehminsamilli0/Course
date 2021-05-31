<?php 
  
  abstract class Xeber{
  	abstract protected function Basliq();
  	abstract protected function Kateqoriya($x);

  	public function Cixis(){

  		echo $this->basliq()."<br />";
  	}
  }
  class Idman extends Xeber{
  	protected function Basliq(){
  		return "Ronaldo Qol Vurdu!";
  	}
  	public function Kateqoriya($x){
  		return "{$x} Kateqoriyasi";
  	}
  }
  	 class Iqtisadiyyat extends Xeber{
  	protected function Basliq(){
  		return "Dollar Qol Vurdu!";
  	}
  	public function Kateqoriya($x){
  		return "{$x} Kateqoriyasi";
  	}
  }
$class1 = new Idman();
$class1->cixis();
echo $class1->Kateqoriya("Futbol");



 ?>