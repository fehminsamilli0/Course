<?php 
   class Visibility{

   	public $a="Hər tərəfdən Əl çatan";
   	protected $b="Qorunan";
   	private $c="Şəxsi";

   	public function hmm(){

   		echo $this->a;
   		echo $this->b;
   		echo $this->c;

   	}

   }

   $x= new Visibility();

   echo $x->hmm();








 ?>