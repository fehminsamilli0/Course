<?php 

class Student{
	public $Name;

	public function NameSet($name)
	{
		$this->Name=$name;
	}

	public function NameGet(){
		return $this->Name;
	} 

	function __construct(){
		echo "<h1>Class Başladı!";
	}
	function __destruct(){
		echo "<h1>Class Bitti!";
	}


}


?>